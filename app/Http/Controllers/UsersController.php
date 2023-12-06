<?php

namespace App\Http\Controllers;

use App\Models\User;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('home', [
            'users' => User::all()
        ]);
    }

    public function show($id)
    {
        return view('users',[
            'user' => User::find($id)
        ] );
    }

    // public function edit(User $user)
    // {

    // }

    // public function update(Request $request, User $user)
    // {

    // }

    // public function destroy(User $user)
    // {

    // }
}

