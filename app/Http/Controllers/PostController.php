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
    //créer un nouveau poste
    public function create()
    {
        return view('createPost');
    }

    //store le formulaire
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->id(); // Associe le post à l'utilisateur connecté


        $post->save();

        return view('createPost')->with('success', 'Post créé avec succès!');
    }

}
