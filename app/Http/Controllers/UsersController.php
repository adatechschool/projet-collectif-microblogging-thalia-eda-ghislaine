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

    public function show(User $user)
    {
        return view('users', [
            'user' => $user
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

