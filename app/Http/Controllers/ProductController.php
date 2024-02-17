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
}
