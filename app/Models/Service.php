<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;



    protected $fillable = [

        'service_icon',
        'service_title',
        'status',
        'slug',
        'service_description',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];
}