<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Models\DonationCampaign;
use App\Models\Transaction;

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

        $item = Transaction::create([
            'donation_campaigns_id' => $id,
            'users_id'              => $request->user()->id,
            'amount'                => intval($request->input('amount')),
        ]);

        $item->save();

        return view('donation.payment-detail', [
          'item' => $item  
        ]);
    }
}
