<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable =[
        'type',
        'message',
        'sender_id',
        'receiver_id',
        'post_id',
        'comment_id',
        'is_read'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'sender_id');
    }

}
