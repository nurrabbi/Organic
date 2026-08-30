<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ProductCategory;
use App\Models\ProductDetail;
class Product extends Model
{
    // barcode, name, category_id(FK), selling_price
    protected $fillable = ['barcode', 'name', 'category_id', 'supplier_id', 'selling_price'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function details()
    {
        return $this->hasOne(ProductDetail::class, 'product_id', 'id');
    }

    public function supplier()
    {
        // return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
    
}
