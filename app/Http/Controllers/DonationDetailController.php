<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationCampaign;

class DonationDetailController extends Controller
{
    public function index(Request $request, $id){

        $item = DonationCampaign::with(['galleries'])->where('id', $id)->firstOrFail();
        return view('donation.donation-detail', [
            'item' => $item
        ]);
    }
}
