<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::query()->paginate(10);

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

    public function store(TagRequest $request)
    {
        $validated = $request->validated();

        Tag::query()->create($validated);

        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
