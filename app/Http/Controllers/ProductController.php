<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('pages.shop.index', compact('products'));
    }

    public function products()
    {
        $products = Product::select(['id', 'name', 'price', 'category', 'image_path', 'description'])->get();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('products', 'public') : null;

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'image_path' => $imagePath,
            'description' => $validated['description'],
            'stock' => $validated['stock'],
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image_path);
            $imagePath = $request->file('image')->store('products', 'public');
        } else {
            $imagePath = $product->image_path;
        }

        $product->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'image_path' => $imagePath,
            'description' => $validated['description'],
            'stock' => $validated['stock'],
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image_path);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}
