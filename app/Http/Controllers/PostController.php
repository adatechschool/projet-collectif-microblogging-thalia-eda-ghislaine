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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->id(); // Associe le post à l'utilisateur connecté
        $post->image = $request->file('image')->store('images/posts', 'public');



        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post créé avec succès!');
    }

    public function destroy(Post $post)
    {
        

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post supprimé avec succès!');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
