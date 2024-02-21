<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

    public function create():View
    {
        return view('tags.create');
    }
}
