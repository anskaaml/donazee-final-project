<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request){
        
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');
        
        $notification = new Notification();

        $order          = explode('-', $notification->order_id);
        
        $status         = $notification->transaction_status;
        $type           = $notification->payment_type;
        $order_id       = $order[1];
        $fraud          = $notification->fraud_status;
        
        $transaction = Transaction::findOrFail($order_id);
        
        if($status == 'capture'){
            if($type == 'credit_card'){
                if($fraud == 'challenge'){
                    $transaction->transaction_status = 'CHALLENGE';
                }else{
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }
        
        else if($status == 'settlement'){
            $transaction->transaction_status = 'SUCCESS';
        }
        else if($status == 'pending'){
            $transaction->transaction_status = 'PENDING';
        }
        else if($status == 'deny'){
            $transaction->transaction_status = 'DENIED';
        }
        else if($status == 'expire'){
            $transaction->transaction_status = 'EXPIRE';
        }
        else if($status == 'cancel'){
            $transaction->transaction_status = 'DENIED';
        }
        
        $transaction->save();
    }
    
    public function finishRedirect(Request $request){
        
        return view('donation.payment-success');
        
    }
    
    public function unfinishRedirect(Request $request){
        
        return view('donation.payment-pending');
        
    }
    
    public function errorRedirect(Request $request){
        
        return view('donation.payment-failed');
    }
}
