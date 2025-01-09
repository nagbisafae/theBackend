<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['article_id', 'user_id', 'content', 'parent_id'];

    // Relation pour les réponses
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
