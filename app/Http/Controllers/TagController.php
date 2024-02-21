<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
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

    public function create()
    {
        return view('tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        Tag::query()->create($request->validated());

        return redirect()->route('tags.index');

    }

    public function edit(int $id)
    {
        $tag = Tag::query()->findOrFail($id);

        return view('tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request)
    {
        Tag::query()->where('id', request('id'))->update($request->validated());

        return redirect()->route('tags.index');
    }

    public function destroy(Request $request)
    {
        Tag::destroy(request('id'));

        return redirect()->route('tags.index');
    }
}
