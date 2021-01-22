<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationCampaignRequest;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\DonationCampaign;

class FundraiseController extends Controller
{
    public function create()
    {
        return view('fundraise.create-donation');
    }

    public function store(DonationCampaignRequest $request)
    {
        $data = $request->all();

        $item = DonationCampaign::create($data);
        $item->save();

        return view('fundraise.commitment', [
            'item' => $item
        ]);
    }

}
