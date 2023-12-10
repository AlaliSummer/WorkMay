<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use CodeBugLab\NoonPayment\Facades\NoonPayment;
use Illuminate\Http\Request;

class NoonController extends Controller
{
    public function pay($invoice_id)
    {
        //Direct the user to Noon
        //$invoice = Invoice::findOrfail($invoice_id);
//
//        $invoice = Invoice::first();
//
//        dd($invoice->grand_total);
//
//
//        dd($invoice_id);
        $data =[
            "order" => [
                "reference" => "1",
                "amount" => "10",
                "currency" => "SAR",
                "name" => "Sample order name",
            ],
            "configuration" => [
                "locale" => "en"
            ]
        ];
            $response = NoonPayment::getInstance()->initiate($data);
            //Laravel redirect
        return redirect($response->result->checkoutData->postUrl);
    }
}
