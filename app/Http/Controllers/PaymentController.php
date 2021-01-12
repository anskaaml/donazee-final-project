<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\DonationCampaign;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class PaymentController extends Controller
{
    public function index(Request $request, $id){
        
        $item = Transaction::with(['details', 'donation_campaign', 'user'])->findOrFail($id);

        return view('payment', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id){

        $donation_campaign = DonationCampaign::findOrFail($id);

        $transaction = Transaction::create([
            'donation_campaigns_id' => $id,
            'users_id' => Auth::user()->id,
            'fund_nominal' => 0,
            'transaction_status' => 'PENDING'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'name' => Auth::user()->name,
            'payment_method' => 'BNI'
        ]);

        return redirect()->route('payment', $transaction->id);
    }

    // public function create(Request $request, $id){

    //     $request->validate([
    //         'name' => 'required|string|exists:users,name',
    //         'fund_nominal' => 'required'
    //     ]);

    //     $data = $request->all();
    //     $data['transactions_id'] = $id;

    //     TransactionDetail::create($data);

    //     $transaction = Transaction::with(['donation_campaign'])->find($id);
    //     $transaction->save();

    //     return redirect()->route('payment', $id);
    // }

    // public function remove(Request $request, $detail_id){

    //     $item = TransactionDetail::find($detail_id);

    //     $transaction = Transaction::with(['details', 'donation_campaign', 'user'])->findOrFail($item->transactions_id);
    //     $transaction->save();
    //     $item->delete();

    //     return redirect()->route('payment', $item->transactions_id);
    // }

    
}
