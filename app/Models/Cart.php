<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'user_id',
        'created_at',
        'updates_at',
    ];

    /**
     * Relationship with product
     */

     public function product()
     {
         return $this->hasMany(Product::class, 'id', 'product_id');
     }
}
