<?php

namespace App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PublisherPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'pub_id',
        'app_id',
        'payment_method_id',
        'payment_address',
        'earning_and_payment_date',
        'amount',
        'status',

    ];


    public function publisher()
    {
        return $this->belongsTo(User::class, 'pub_id', 'id');
    }
}
