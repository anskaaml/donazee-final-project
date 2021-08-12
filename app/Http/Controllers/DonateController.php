<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Models\DonationCampaign;
use App\Models\Transaction;

use Midtrans\Config;
use Midtrans\Snap;

class DonateController extends Controller
{
    public function process(Request $request, $id){
        
        $item = DonationCampaign::findOrFail($id);
        
        return view('donation.donate', [
            'item' => $item
        ]);
    }

    public function donate(Request $request, $id){

        $validate = Validator::make($request->all(), [
            'amount' => 'required'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }

        $transaction = Transaction::create([
            'donation_campaigns_id' => $id,
            'users_id'              => $request->user()->id,
            'amount'                => intval($request->input('amount')),
        ]);

        $transaction->save();

        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        $midtrans_params = [
            'transaction_details' => [
                'order_id' => 'PAYMENT-' . $transaction->id,
                'gross_amount' => (int) $transaction->amount
            ],

            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email'      => $transaction->user->email 
            ],

            'enabled_payments' => ['gopay'],

            'vtweb' => []

            // 'credit_card' => [
            //     'secure'  => true,
            //     'channel' =>'migs',
            //     'bank'    => 'bni',
            //         'installment' => [
            //             'required' => false,
            //             'terms' => [
            //                 'bni'     => [3, 6, 12],
            //                 'mandiri' => [3, 6, 12],
            //                 'cimb'    => [3],
            //                 'bca'     => [3, 6, 12],
            //                 'offline'  => [6, 12]
            //             ]   
            //         ],
            // ],
        ];

        try{
            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

            header('Location: ' . $paymentUrl);
        }
            catch(Exception $e){
                echo $e->getMessage('Error');
        }
    }
}
