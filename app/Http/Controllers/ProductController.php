<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
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

    public function store(StoreProductRequest $request)
    {
        Product::query()->create($request->validated());

        return redirect()->route('products.index');

    }

    public function edit(int $id)
    {
        $product = Product::query()->findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request)
    {
        Product::query()->where('id', request('id'))->update($request->validated());

        return redirect()->route('products.index');
    }

    public function destroy(Request $request)
    {
        Product::destroy(request('id'));

        return redirect()->route('products.index');
    }
}
