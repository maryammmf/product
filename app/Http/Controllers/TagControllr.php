<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagControllr extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tag' , compact('tags'));
    }
}
