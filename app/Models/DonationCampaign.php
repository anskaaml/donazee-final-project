<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDelete;
use Illuminate\Database\Eloquent\Model;


class DonationCampaign extends Model
{
    use HasFactory;
    protected $softDeletes = true;

    protected $fillable = [
        'title',
        'slug',
        'fundraiser_name',
        'target',
        'deadline',
        'purpose',
        'receiver',
        'description',
        'organization_name'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'donation_campaigns_id', 'id');
    }

}
