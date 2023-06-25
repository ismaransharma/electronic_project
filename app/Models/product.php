<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //  kun kun field database ma add huna sakxan
    protected $fillable = [
        'product_title',
        'category_id',
        'slug',
        'product_image',
        'product_little_description',
        'product_full_`description',
        'status',
        'product_stock',
        'orginal_cost',
        'discounted_cost',
        'brand',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    // database bata aauni value yesto vyera aaija
    protected $casts = [
        'deleted_at' => 'datetime',
    ];

    // prouduct ko category fetch garni
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}