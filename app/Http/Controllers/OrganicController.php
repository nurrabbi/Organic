<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategory;
use App\Models\Product;
class OrganicController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::all();
        $products = Product::with('details')->paginate(20);
        return view('organic', compact('categories', 'products'));
    }

    public function showProduct(int $id)
    {
        // $categories = ProductCategory::all();
        $product = Product::findOrFail($id);
        return view('frontend.single_product', compact('product'));
    }



}
