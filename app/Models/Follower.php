<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    protected $fillable =[
        'target_id',
        'user_id',
    ];

    public function followers(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
