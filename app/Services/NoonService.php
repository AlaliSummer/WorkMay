<?php

namespace App\Services;

use App\Models\Invoice;
use CodeBugLab\NoonPayment\NoonPayment;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * https://docs.noonpayments.com/start/introduction
 *
 */
class NoonService implements PaymentServiceInterface
{
    /**
     * Creates a payment url for a specific invoice.
     *
     * @param \App\Models\Invoice $invoice
     * @return string URL of payment form
     */
    public function createPaymentUrlForInvoice(Invoice $invoice): string
    {
        $url = NoonPayment::getInstance()->initiate([
            'order' => [
                "reference" => $invoice->id,
                "amount" => $invoice->grand_total,
                "currency" => "SAR",
                "name" => $invoice->number,
                'description' => $invoice->course->name,
            ],
            'billing' => [
                'contact' => [
                    'firstName' => Str::before($invoice->user->name, ' '),
                    'lastName' => Str::afterLast($invoice->user->name, ' '),
                    'phone' => $invoice->user->phone,
                    //'email' => $invoice->trainee->email,
                ],
            ],
            'deviceFingerPrint' => [
                'sessionId' => request()->fingerprint(),
            ],
            'configuration' => [
                'locale' => 'ar',
                'webhookUrl' => config('noon_payment.webhook_url'),
                // 'returnUrl' => route('trainees.payment.card.charge'),
                // 'generateShortLink' => true, // TODO: When sharing the invoice with SMS.
            ]
        ]);

        if ($url->resultCode === 0) {
            return $url->result->checkoutData->postUrl;
        }

        throw new RuntimeException('Noon payment fatal error: '.$url->resultCode.' - '.$url->message);
    }

    /**
     * @param $order_id
     * @return mixed
     */
    public function getOrder($order_id)
    {
        return NoonPayment::getInstance()->getOrder($order_id);
    }

    public function isOrderSuccessful(string $order_id): bool
    {
        $order = $this->getOrder($order_id);
        return $this->isPaymentSuccess($order);
    }

    public function isPaymentSuccess($order): bool
    {
        return isset($order->result->transactions) &&
            is_array($order->result->transactions) &&
            $order->result->transactions[0]->type == "SALE" &&
            $order->result->transactions[0]->status == "SUCCESS";
    }
}
