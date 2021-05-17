<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\DonationCampaign;

use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function payment(Request $request, $id){

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $midtrans_params = [
            'transaction_details' => [
                'order_id' => 'PAYMENT-' . $transaction->id,
                'gross_amount' => (int) $transaction->transaction_total
            ],

            'customer_details' => [
                'first_name' => $transaction->user()->name,
                'email'      => $transaction->user()->email 
            ],

            'enabled_payments' => ['credit_card', 'gopay'],

            'vtweb' => [],

            'credit_card' => [
                'secure'  => true,
                'channel' =>'migs',
                'bank'    => 'bni',
                    'installment' => [
                        'required' => false,
                        'terms' => [
                            'bni'     => [3, 6, 12],
                            'mandiri' => [3, 6, 12],
                            'cimb'    => [3],
                            'bca'     => [3, 6, 12],
                            'offline'  => [6, 12]
                        ]   
                    ],
            ],
        ];

        try{
            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

            header('Location: ' . $paymentUrl);

        }catch(Exception $e){
            echo $e->getMessage();
        }

    } 


}