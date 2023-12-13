<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function like($postId) 
    {
        if (Auth::check()) {
            $user = Auth::user();
            $post = Post::find($postId);

            if ($post) {
                // Vérifie si l'utilisateur a déjà aimé le post
                $existingLike = Like::where('id_user', $user->id)
                    ->where('id_post', $post->id)
                    ->first();

                if (!$existingLike) {
                    // Si l'utilisateur n'a pas déjà aimé le post, crée un nouveau like
                    $like = new Like();
                    $like->id_user = $user->id;
                    $like->id_post = $post->id;
                    $like->save();
                }
            }

            return redirect()->back()->with('success', 'Vous avez aimé le post avec succès.');
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect('/login');
        }
    }
}
