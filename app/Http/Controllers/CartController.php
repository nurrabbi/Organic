<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;

use App\Models\ProductCategory;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::paginate(10); // paginate first
        // $grouped = $carts->groupBy('cart_id'); // then group the paginated results

        return view('backend.carts.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (
            Cart::count() == 0 || Cart::where('cart_id', Auth::user()->id)
            ->where('product_id', $request->product_id)
            ->count() == 0
        ) {
            $newCart = new Cart();
            $newCart->cart_id = Auth::user()->id;
            $newCart->product_id = $request->product_id;
            $newCart->quantity = $request->quantity;
            $newCart->save();
        } else {
            $cart = Cart::where('cart_id', Auth::user()->id)
                ->where('product_id', $request->product_id)
                ->first();
            $cart->quantity = $cart->quantity + $request->quantity;
            $product = Product::findOrFail($request->product_id);
            $productDetail = $product->details;
            $productDetail->stock_quantity -= $request->quantity;
            $productDetail->save();
            $cart->save();
        }
        return redirect()->back()->with('success', 'Product added to cart');
    }



    /**
     * Display the specified resource.
     */
  
    public function show()
    {
        $categories = ProductCategory::all();
        $carts = Cart::with('product')->where('cart_id', Auth::id())->get();
        $subTotal = $carts->sum(function ($item) {
            return $item->product->selling_price * $item->quantity;
        });
        $deliveryFee = $subTotal * 0.05;
        $total = $subTotal + $deliveryFee;
        return view('frontend.cart', compact('carts', 'subTotal', 'deliveryFee', 'total', 'categories'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->back();
    }
}
