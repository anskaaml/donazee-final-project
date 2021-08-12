<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
use App\Models\DonationCampaign;
use App\Http\Requests\FundRequest;


class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Fund::with(['donation_campaign'])->get();

        return view('admin.fund.index', [
            'items' => $items 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donation_campaigns = DonationCampaign::all();

        return view('admin.fund.create', [
            'donation_campaigns' => $donation_campaigns
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FundRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            'assets/fund', 'public'
        );

        Fund::create($data);  
        return redirect()->route('fund.index');
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
        $item = Fund::findOrFail($id);
        $donation_campaigns = DonationCampaign::all();

        return view('admin.fund.update', [
            'item' => $item,
            'donation_campaigns' => $donation_campaigns 
        ]);
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
        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            'assets/fund', 'public'
        );

        $item = Fund::findOrFail($id);
        $item->update($data);

        return redirect()->route('fund.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Fund::findOrFail($id);
        $item->delete();

        return redirect()->route('fund.index');
    }
}
