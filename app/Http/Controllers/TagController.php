<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function show(int $id)
    {
        $tag = Tag::query()->findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    public function store(Request $request)
    {
        $validationRules = [
            'name'=>'required'
        ];
        $validate = $request->validate($validationRules);
        Tag::query()->create($validate);
        return redirect()->route('tags.index');

    }

    public function create()
    {
        return view('tags.create');
    }
}
