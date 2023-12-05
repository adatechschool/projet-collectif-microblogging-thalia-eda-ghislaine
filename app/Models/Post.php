<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
         
         * @var array<int, string>
         */

//on déclare un tableau "fillable" pour déclarer les attributs du modèle
         protected $fillable = [
        'title',
        'content',
        'image',
        'like',
        'published',
        'user_id',
    ];

    //on établie une relation many to one, chaque instance de la class Post appartient à la classe User
    // Un utilisateur peut avoir plusieurs posts.
    // Un post appartient à un seul utilisateur.
    //on utilise la méthode belongsTo qui prend en argument le modèle auquel post appartient donc user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// Cette méthode belongsTo indique à Eloquent que la clé étrangère user_id dans la table des posts correspond à l'ID de l'utilisateur dans la table des utilisateurs.