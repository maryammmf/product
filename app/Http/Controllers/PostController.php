<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

    public function store(StorePostRequest $request)
    {
        Post::query()->create($request->validated());

        return redirect()->route('posts.index');

    }

    public function edit(int $id)
    {
        $post = Post::query()->findOrFail($id);

        $users = User::all();

        return view('posts.edit', compact('post', 'users'));
    }

    public function update(UpdatePostRequest $request)
    {
        Post::query()->where('id', request('id'))->update($request->validated());

        return redirect()->route('posts.index');
    }

    public function destroy(Request $request)
    {
        Post::destroy(request('id'));

        return redirect()->route('posts.index');
    }
}
