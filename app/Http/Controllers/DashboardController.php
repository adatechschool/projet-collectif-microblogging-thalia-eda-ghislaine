<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = $user->posts;
            $followers = $user->followers;
            $followings = $user->followings;

            return view('dashboard', ['posts' => $posts, 'followers' => $followers, 'followings' => $followings]); // Utilise 'posts' => $posts au lieu de 'post = $post'
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect('/login');
        }
    }
}
