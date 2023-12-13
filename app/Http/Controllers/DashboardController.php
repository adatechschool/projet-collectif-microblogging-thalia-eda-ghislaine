<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = $user->posts;
            $followers = $user->followers;
            $followings = $user->followings;
            if ($request->hasFile('image')) {
                // Mettez à jour l'avatar de l'utilisateur
                $user->avatar = $request->file('image')->store('images', 'public');
                $user->save(); // N'oubliez pas de sauvegarder les modifications dans la base de données
            }

            return view('dashboard', ['user' => $user, 'posts' => $posts, 'followers' => $followers, 'followings' => $followings]);
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect('/login');
        }
    }
}
