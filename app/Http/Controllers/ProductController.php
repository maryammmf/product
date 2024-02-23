<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->paginate(\request('limit')?? Controller::DEFAULT_PAGINATE);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {

        return view('products.show', compact('product'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        Product::query()->create($validated);
        return redirect()->route('products.index');
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
