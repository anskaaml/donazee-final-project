<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory; 
    protected $softDeletes = true;

    protected $fillable = [
        'donation_campaigns_id',
        'users_id',
        'fund_nominal'
    ];

    protected $hidden = [

    ];

    public function donation_campaign(){
        return $this->belongsTo(DonationCampaign::class, 'donation_campaigns_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
