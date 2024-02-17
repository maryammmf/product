<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index' , compact('posts'));
    }

    public function show(int $id)
    {
        $posts = Post::query()->findOrFail($id);
        return view('posts.show', compact('posts'));
    }


    public function create(){
        $userId = User::pluck('id');
        return view('posts.create' , compact('userId'));
    }

    public function store(Request $request){
        $validRules = [
            'title'=>'required',
            'content'=>'required',
            'user_id'=>'required'
        ];
        $validation = $request->validate($validRules);
        Post::query()->create($validation);
        return redirect()->route('posts.index');
    }

}
