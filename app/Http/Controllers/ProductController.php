<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product')->get();
        dd($products);
    }

    public function show(int $id)
    {
        $product = Product::query()->findOrFail($id);

//        if (is_null($product)){
//            abort(404);
//        }

        dd($product);

    }
}
