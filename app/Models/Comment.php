<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'post_id',
        'type',
        'user_id',
        'comment_id',
    ];

    protected $touches = ['posts']; // ça met à jour updated_at du post automatiquement

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
