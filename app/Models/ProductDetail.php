<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
class ProductDetail extends Model
{
    // produt_id(FK), supplier_id(FK),image, unit_cost, stock_quantity, expiry_date
    protected $fillable = ['product_id', 'image', 'unit_cost', 'stock_quantity', 'expiry_date'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }


}
