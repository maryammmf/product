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
        $post = Post::query()->findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public  function  create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public  function  store(Request $request)
    {
        $validated = $request->validate([
            'title'=> ['required', 'string'],
            'content'=>['required'],
            'user_id'=>['required']
        ]);
        Post::query()->create($validated);
        return redirect()->route('posts.index');
    }

    public  function edit(User $user,Post $post)
    {
        $users = User::all();
        return view('posts.edit',compact('post','users'));
    }

    public  function  update(Post $post, Request $request)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
