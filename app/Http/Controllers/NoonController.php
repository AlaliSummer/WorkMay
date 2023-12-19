<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Services\NoonService;
use CodeBugLab\NoonPayment\Facades\NoonPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoonController extends Controller
{
    private $paymentService;

    public function __construct(NoonService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Test card no.: 4000000000002503
     *      card exp: 01/26 (current year + 3)
     *      card cvv: 123
     *
     * @param $invoice_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function pay($invoice_id)
    {
        // TODO: if a user tries to pay a paid invoice, they get 404, todo: redirect user to the invoice (paid) page.
        $invoice = Invoice::notPaid()->findOrFail($invoice_id);
        $url = $this->paymentService->createPaymentUrlForInvoice($invoice);
        return redirect($url);
    }

    public function storeNoonReceipt(Request $request)
    {
        $order = $this->paymentService->getOrder($request->orderId);

        // Confirm that Noon has the payment.
        throw_if(! $order, 'Invoice not found in payment gateway');

        if ($this->paymentService->isPaymentSuccess($order)) {
            $invoice_id = $order->result->order->reference;

            //Audit::create([
            //    'event' => 'noon',
            //    'auditable_id' => $invoice_id,
            //    'auditable_type' => Invoice::class,
            //    'new_values' => $request->toArray(),
            //]);

            DB::beginTransaction();
            $invoice = Invoice::withoutGlobalScopes()->find($invoice_id);
            $invoice->update([
                'payment_method' => $order->result->paymentDetails->mode,
                'reference_id' => $order->result->order->id,
                'paid_at' => now(),
                'status' => Invoice::STATUS_PAID,
            ]);
            DB::commit();
        } else {
            // TODO: Record failure. e.g. Send notification of failure...
            // $this->recordFailure($request, $order);
        }
    }
}
