<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\ProductCategory;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('details')->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    public function create()
    {
        $productId = (int)(Product::max('id')) + 1;
        $categoryId = (int)(ProductCategory::max('id')) + 1;
        return view('backend.products.create', compact('productId', 'categoryId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barcode'        => 'required|unique:products|numeric',
            'name'           => 'required|string',
            'category_id'    => 'required|integer',
            'supplier_id'    => 'required|integer',
            'selling_price'  => 'required|numeric',
            'product_image'  => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'unit_cost'      => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'expiry_date'    => 'required|date',
        ]);

        // Wrap in a transaction to protect against partial failures

        $product = DB::transaction(function () use ($request) {

            // 1. Create and populate the primary Product
            $product = new Product();
            $product->name          = $request->name;
            $product->barcode       = $request->barcode;
            $product->category_id   = $request->category_id;
            $product->supplier_id   = $request->supplier_id;
            $product->selling_price = $request->selling_price;
            $product->save(); // Generates the automatic database ID here

            // 2. Process image asset
            $imagePath = null;
            if ($request->hasFile('product_image')) {
                $directory = 'images/products'; // Forward slash handles both Linux and Windows servers
                $file      = $request->file('product_image');
                $imagePath = imageUpload($file, 800, 600, $directory);
            }

            // 3. Save details via the established Eloquent relationship dependency
            $product->details()->create([
                'image'          => $imagePath,
                'unit_cost'      => $request->unit_cost,
                'stock_quantity' => $request->stock_quantity,
                'expiry_date'    => $request->expiry_date,
            ]);

            // return $product;
        });

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    
    public function show($id)
    {
        //
    }

    public function edit(int $id)
    {
        $product = Product::with('details')->findOrFail($id);
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'barcode' => 'required|unique:products|numeric',
            'name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'selling_price' => 'required',
            'product_image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'unit_cost' => 'required',
            'stock_quantity' => 'required',
            'expiry_date' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->barcode = $request->barcode;
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->selling_price = $request->selling_price;
        $product->save();

        $productDetail = ProductDetail::where('product_id', $id)->first();
        if ($request->hasFile('product_image')) {
            $directory = 'images\products';
            $file = $request->file('product_image');
            $productDetail->image = imageUpload($file, 800, 600, $directory);
        }
        $productDetail->unit_cost = $request->unit_cost;
        $productDetail->stock_quantity = $request->stock_quantity;
        $productDetail->expiry_date = $request->expiry_date;

        $productDetail->save();

        return redirect()->route('products.index')->with('success', 'Category Updated successfully.');
    }

    public function destroy($id)
    {
        //
    }

    public function getProductImage(int $id)
    {
        $product = Product::with('details')->findOrFail($id);

        // Extract the image path from the database
        $imagePath = public_path(parse_url($product->details->image, PHP_URL_PATH));

        if (!file_exists($imagePath)) {
            abort(404, 'Image not found');
        }

        // Return the image as a response
        return response()->file($imagePath);
    }
}
