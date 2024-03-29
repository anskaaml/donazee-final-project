<?php

namespace App\Http\Controllers;

use App\Models\DonationCampaign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        $items = DonationCampaign::with(['galleries'])->get();

        return view('home', [
            'items' => $items
        ]);
    }

    // public function report(Request $request){

    //     $donation_campaigns = DonationCampaign::count();

    //     return view('home', [
    //         'donation_campaigns' => $donation_campaigns
    //     ]);
    // }
}
