<?php

namespace App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placements extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_id',
        'api_key',
        'app_name',
        'app_url',
        'payout_rate',
        'currency_name',
        'currency_logo',
        'generel_description',
        'postback_url',
        'postback_password',
    ];
}
