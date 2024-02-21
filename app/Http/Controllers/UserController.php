<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index' , compact('users'));
    }

    public function show(int $id)
    {
        $user = User::query()->findOrFail($id);

        return view('users.show', compact('user'));

    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
//        $hashedPassword = Hash::make($request->safe()->only('password')['password']);
//
//        $newUser = array_merge($request->safe()->except('password'), ['password' => $hashedPassword]);

        User::query()->create($request->validated());

        return redirect()->route('users.index');
    }

    public function edit(int $id)
    {
        $user = User::query()->findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        $hashedPassword = Hash::make($request->safe()->only('password')['password']);

        $updatedUser = array_merge($request->safe()->except('password'), ['password' => $hashedPassword]);

        User::query()->where('id', request('id'))->update($updatedUser);

        return redirect()->route('users.index');
    }

    public function destroy(Request $request)
    {
        User::destroy(request('id'));

        return redirect()->route('users.index');
    }
}
