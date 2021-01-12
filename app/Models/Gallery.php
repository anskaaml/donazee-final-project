<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $softDeletes = true;

    protected $fillable = [
        'donation_campaigns_id',
        'image'
    ];

    protected $hidden = [

    ];

    public function donation_campaign(){
        return $this->belongsTo(DonationCampaign::class, 'donation_campaigns_id', 'id');
    }
}
