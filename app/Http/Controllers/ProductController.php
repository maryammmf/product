<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function store(Request $request)
    {
        $validationRules = [
            'name'=>'required|alpha',
            'cost'=>'required|numeric',
            'description'=>'required'
        ];
        $validate = $request->validate($validationRules);
        Product::query()->create($validate);
        return redirect()->route('products.index');
    }

    public function create()
    {
        return view('products.create');
    }


    public function edit(int $id)
    {
        $product = Product::query()->find($id);
        return view('products.edit' , compact('product' ));
    }


    public function update(Request $request, int $id)
    {
        $products = Product::query()->findOrFail($id);
        $products->update([
            'name'=>$request->name,
            'cost'=>$request->cost,
            'description'=>$request->description,
        ]);
        return redirect()->route('products.index');
    }


    public function destroy(int $id)
    {
        $products = Product::query()->findOrFail($id);
        $products->delete();
        return redirect()->route('products.index');
    }


}
