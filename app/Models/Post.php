<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medias(){
        return $this->hasMany(Media::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
