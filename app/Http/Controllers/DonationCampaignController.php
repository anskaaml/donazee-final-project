<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationCampaign;
use App\Http\Requests\DonationCampaignRequest;

class DonationCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DonationCampaign::all();

        return view('admin.campaign-donasi.index', [
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
        return view('admin.campaign-donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonationCampaignRequest $request)
    {
        $data = $request->all();

        DonationCampaign::create($data);
        return redirect()->route('donation-campaign.index');
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
        $item = DonationCampaign::findOrFail($id);

        return view('admin.campaign-donasi.update', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DonationCampaignRequest $request, $id)
    {
        $data = $request->all();

        $item = DonationCampaign::findOrFail($id);
        $item->update($data);

        return redirect()->route('donation-campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DonationCampaign::findOrFail($id);
        $item->delete();

        return redirect()->route('donation-campaign.index');
    }
}
