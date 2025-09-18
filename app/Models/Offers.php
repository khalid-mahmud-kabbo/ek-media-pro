<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'offer_id',
        'name',
        'image_url',
        'click_url',
        'categories',
        'country_code',
        'devices',
        'platforms',
        'os',
        'android_os_version_min',
        'android_os_version_max',
        'ios_os_version_min',
        'ios_os_version_max',
        'description1',
        'description2',
        'description3',
        'payout',
        'events',
    ];

    protected $casts = [
        'categories' => 'array',
        'country_code' => 'array',
        'devices' => 'array',
        'platforms' => 'array',
        'os' => 'array',
        'events' => 'array',
    ];
}
