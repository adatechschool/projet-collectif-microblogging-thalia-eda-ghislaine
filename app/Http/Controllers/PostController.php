<?php


//ce controller va permettre de définir des méthodes pour créer, afficher, mettre à jour et supprimer des posts. 
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('accueil', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {

        return view('post', [
            'post' => $post

        ]);
    }

}
