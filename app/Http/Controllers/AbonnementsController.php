<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AbonnementsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = $user->posts;

            return view('abonnements', ['posts' => $posts]); // Utilise 'posts' => $posts au lieu de 'post = $post'
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect('/login');
        }
    }
}
