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
}
