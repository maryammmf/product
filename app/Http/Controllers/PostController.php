<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        Post::query()->create($validated);
        return redirect()->route('posts.index');
    }

    public  function edit(User $user,Post $post)
    {
        $users = User::all();
        return view('posts.edit',compact('post','users'));
    }

    public  function update(Post $post, PostRequest $request)
    {
        $post->update($request->validated());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
