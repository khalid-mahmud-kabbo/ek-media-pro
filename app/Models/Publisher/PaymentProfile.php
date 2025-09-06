<?php

namespace App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PaymentProfile extends Model
{
    use HasFactory;
    protected $table = 'publishers_payment_profile';

    protected $fillable = [
        'pub_id',
        'payment_method_id',
        'payment_address'
    ];


    public function publisher()
    {
        return $this->belongsTo(User::class, 'pub_id', 'id');
    }
}
