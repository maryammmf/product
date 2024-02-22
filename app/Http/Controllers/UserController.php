<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $validationsRule = [
            'name'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required'
        ];
        $validation = $request->validate($validationsRule);
        User::query()->create($validation);
        return redirect()->route('users.index');
    }

    public function create()
    {
        return view('users.create');
    }


    public function edit(int $id)
    {
        $user = User::query()->find($id);
        return view('users.edit' , compact('user' ));
    }


    public function update(Request $request, int $id)
    {
        $Users = User::query()->findOrFail($id);
        $Users->update([
            'name'=>$request->name,
            'emai'=>$request->emai,
            'password'=>$request->password,
        ]);
        return redirect()->route('users.index');
    }


    public function destroy(int $id)
    {
        $Users = User::query()->findOrFail($id);
        $Users->delete();
        return redirect()->route('users.index');
    }

}
