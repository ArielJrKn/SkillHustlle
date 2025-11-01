<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable =[
        'type', 
        'user_id',
        'post_id',
    ];

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function users(){
        return $this->belongsTo(Uesr::class, 'user_id');
    }
}   
