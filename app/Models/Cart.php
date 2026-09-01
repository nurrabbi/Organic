<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\User;
class Cart extends Model
{
    //
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'cart_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
