<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    public function post_like()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
    public function user_like()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
