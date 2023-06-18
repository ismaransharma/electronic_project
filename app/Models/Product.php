<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_title',
        'categories_id',
        'slug',
        'product_image',
        'product_description',
        'status',
        'stock',
        'original_cost',
        'discounted_cost',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];
    
}