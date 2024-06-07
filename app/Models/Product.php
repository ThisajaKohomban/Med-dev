<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'status',
        'image',
        'qty',
    ];

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
