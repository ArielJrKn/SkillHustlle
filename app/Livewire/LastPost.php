<?php

namespace App\Livewire;
use App\Models\Post;
use App\Models\Media;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Livewire\Component;

class LastPost extends Component
{
    public function render()
    {
        $lastPost = Post::with(['users', 'medias', 'comments', 'likes'])->latest('updated_at')->first();
        $posts = Post::with(['users', 'medias', 'comments', 'likes'])->where('id', '!=', $lastPost->id)->inRandomOrder()->get();
        $usersMayKnows = User::where('id', '!=', Auth::id())->whereNotIn('id', function($query){
            $query->select('target_id')->from('followers')->where('user_id', Auth::id());
        })->limit(7)->inRandomOrder()->get();

        return view('livewire.last-post', compact('posts', 'lastPost', 'usersMayKnows'));
    }
}
