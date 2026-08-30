<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
class ProductCategory extends Model
{
    protected $fillable = ['category_name', 'category_image'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
