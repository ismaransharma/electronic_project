<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillabel = [
        'cart_code',
        'price',
        'name',
        'mobile_number',
        'email',
        'address',
        'additional_information',
        'payment_method',
        'payment_status',
        'payment_amount',

    ];


    protected $casts = [
        'deleted_at' => 'datetime',
    ];


}