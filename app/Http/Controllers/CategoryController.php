<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategory;
use App\Models\Product;
class CategoryController extends Controller
{
    //  product Caetegory

    public function index()
    {
        $categories = ProductCategory::paginate(5);
        return view('backend.product_categories.index', compact('categories'));
    }
    public function create_category()
    {
        $categoryId = (int)(ProductCategory::max('id')) + 1;
        return view('backend.product_categories.create', compact('categoryId'));
    }
    public function store_category(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $category = new ProductCategory();
        $category->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $directory = 'images\products';
            $file = $request->file('category_image');
            $category->image = imageUpload($file, 160, 160, $directory);
        }
        $category->save();

        return redirect()->route('product_category.index')->with('success', 'Category created successfully.');
    }

    public function show_category($id)
    {
        //
    }

    public function edit_category(int $id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('backend.product_categories.edit_category', compact('category'));
    }

    public function update_category(Request $request, int $id)
    {
        $request->validate([
            'category_name' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $category = ProductCategory::findOrFail($id);
        $category->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $directory = 'images/product_category';
            $file = $request->file('category_image');
            $category->image = imageUpload($file, 800, 600, $directory);
        }
        $category->save();

        return redirect()->route('product_category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy_category($id)
    {
        //
    }

    public function getCategoryImage(int $id)
    {
        $category = ProductCategory::findOrFail($id);

        // Extract the image path from the database
        $imagePath = public_path(parse_url($category->image, PHP_URL_PATH));

        if (!file_exists($imagePath)) {
            abort(404, 'Image not found');
        }

        // Return the image as a response
        return response()->file($imagePath);
    }

}
