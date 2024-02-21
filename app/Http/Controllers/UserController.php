<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index' , compact('users'));
    }

    public function show($id)
    {
        $user = User::query()->findOrFail($id);

        return view('users.show', compact('user'));

    }

    public  function create()
    {
        return view('users.create');
    }

    public  function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        User::query()->create($validated);
        return redirect(route('users.index'));
    }

    public  function  edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public  function  destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');

    }

    public  function update(User $user, Request $request)
    {
        $user->update($request->all());
        return redirect()->route('users.index');
    }

}
