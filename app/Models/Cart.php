<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'product_id', // Corrected from 'prod_id' to 'product_id' for consistency
        'prod_name',
        'prod_price',
        'quantity', // Corrected from 'prod_qty' to 'quantity' for consistency
        'prod_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); // Specifying the foreign key column
    }
}
