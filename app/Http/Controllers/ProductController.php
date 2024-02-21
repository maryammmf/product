<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(int $id)
    {
        $product = Product::query()->findOrFail($id);

        return view('products.show', compact('product'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>['required', 'string'],
            'cost'=>['required','integer'],
            'description'=>['required', 'string']
        ]);

        Product::query()->create($validated);
        return redirect()->route('products.index');
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
