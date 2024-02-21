<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

    public function create(): View
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Post::query()->create($validated);
        return redirect()->route('posts.index');

    }


}
