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
        $userId = User::query()->orderBy('id' , 'asc')->pluck('id')->toArray();
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


    public function edit(int $id)
    {
        $post = Post::query()->find($id);
        $userId = User::query()->orderBy('id' , 'asc')->pluck('id')->toArray();
        return view('posts.edit' , compact('post' , 'userId'));
    }


    public function update(Request $request, int $id)
    {
        $posts = Post::query()->findOrFail($id);
        $posts->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>$request->user_id,
        ]);
        return redirect()->route('posts.index');
    }


    public function destroy(int $id)
    {
        $posts = Post::query()->findOrFail($id);
        $posts->delete();
        return redirect()->route('posts.index');
    }


}
