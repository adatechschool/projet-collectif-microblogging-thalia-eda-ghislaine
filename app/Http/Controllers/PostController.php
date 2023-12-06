<?php


//ce controller va permettre de définir des méthodes pour créer, afficher, mettre à jour et supprimer des posts. 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $articles = [
            [
                'title' => 'Mon post N°1',
                'content' => 'vyuvb&iobhdoi gédioh²éiomdhgiobcmlkgbékgcboimhoimchio'
            ],
            [
                'title' => 'Mon post N°2',
                'content' => 'c,iv"rnbv  nicn&opcnpon  àjdçàéjcp nidàhàicn'
            ],
            [
                'title' => 'Mon post N°3',
                'content' => 'cbéuicboiéhbpcnh'
            ],
        ];
        return view('accueil', [
            'articles'=> $articles
        ]);
    }
}
