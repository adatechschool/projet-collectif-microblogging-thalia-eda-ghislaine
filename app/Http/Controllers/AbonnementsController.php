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
            $followers = $user->followers;
            $followings = $user->followings;

            return view('abonnements', ['posts' => $posts, 'followers' => $followers, 'followings' => $followings]); // Utilise 'posts' => $posts au lieu de 'post = $post'
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect('/login');
        }
    }
    public function unsubscribe($user) 
    {
        if (Auth::check()) {
            // $loggedInUser = Auth::user();
            // $userToUnsubscribe = User::find($user);
            // if (!$userToUnsubscribe) {
            //     return redirect()->back()->with('error', 'Cet utilisateur n\'existe pas.');
            // }
            // // Désabonnement : Utilisez la relation 'followers' définie dans le modèle User
            // $loggedInUser->following()->detach($userToUnsubscribe);
    
            return redirect()->back()->with('success', 'Vous vous êtes désabonné avec succès.');
        } else {
        // Gérer le cas où l'utilisateur n'est pas authentifié
        return redirect('/login');
        }
    }
}
