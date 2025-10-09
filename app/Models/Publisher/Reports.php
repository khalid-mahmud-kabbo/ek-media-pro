<?php

namespace App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Publisher\Placements;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'pub_id',
        'offer_id',
        'app_id',
        'offer_name',
        'user_id',
        'payout',
        'ip_address',
        'status',
    ];


    public function publisher()
    {
        return $this->belongsTo(User::class, 'pub_id', 'id');
    }

    public function placement()
    {
        return $this->belongsTo(Placements::class, 'app_id', 'id');
    }



}
