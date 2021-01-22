<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationCampaign;
use App\Models\Payment;

class PaymentController extends Controller
{
    protected $request;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donation_campaign = DonationCampaign::all();

        return view('donation.payment', [
            'donation_campaign' => $donation_campaign
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make(request()->all(), [
            'fund_nominal'          => 'required|numeric'
        ]);
        
        if($validator->fails()) {
            return[
                'status'    => 'error',
                'message'   => $validator->errors()->first()
            ];
        }

        \DB::transaction(function(){
            $payment = Payment::create([
            'fund_nominal' => floatval($this->request->fund_nominal)
            ]);

            $payment->save();
        });

        
        // $request->validate([
        //     'fund_nominal' => 'required'
        // ]);

        return view('donation.payment-detail');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
