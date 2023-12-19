<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Services\NoonService;
use CodeBugLab\NoonPayment\Facades\NoonPayment;
use Illuminate\Http\Request;

class NoonController extends Controller
{
    private $paymentService;

    public function __construct(NoonService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function pay($invoice_id)
    {
        $invoice = Invoice::notPaid()->findOrFail($invoice_id);
        $url = $this->paymentService->createPaymentUrlForInvoice($invoice);
        return redirect($url);
    }

    public function storeNoonReceipt(Request $request)
    {
        $order = $this->paymentService->getOrder($request->orderId);
    }

    public function response(Request $request)
    {
        $response = NoonPayment::getInstance()->getOrder($request->orderId);

        if ($this->isSaleTransactionSuccess($response)) {
            //success
            return "Transaction Success";
        }

        // cancel
        return "Transaction Canceled";
    }

    private function isSaleTransactionSuccess($response)
    {
        return isset($response->result->transactions) &&
            is_array($response->result->transactions) &&
            $response->result->transactions[0]->type == "SALE" &&
            $response->result->transactions[0]->status == "SUCCESS";
    }
}
