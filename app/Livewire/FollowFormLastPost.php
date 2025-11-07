<?php

namespace App\Livewire;
use App\Enums\NotificationType;
use Illuminate\Support\Facades\Auth;
use App\Models\Follower;
use App\Models\User;
use App\Models\Post;
use App\Models\Notification;
use Livewire\Component;

class FollowFormLastPost extends Component
{
    public $targetId; // ID de l’utilisateur à suivre
    public $isFollowing = false;

    public function mount($targetId)
    {
        $this->targetId = $targetId;
        $this->isFollowing = Follower::where('user_id', Auth::id())
                                     ->where('target_id', $targetId)
                                     ->exists();
    }

    public function follow()
    {
        $user = Auth::user();

        if ($user->id === $this->targetId) {
            session()->flash('error', "Impossible de se suivre soi-même 😭");
            return;
        }

        if (!$this->isFollowing) {
            Follower::create([
                'user_id' => $user->id,
                'target_id' => $this->targetId,
            ]);

            Notification::create([
                'type' => NotificationType::FOLLOWER,
                'message' => $user->name . " a commencé à vous suivre.",
                'sender_id' => $this->targetId,
                'receiver_id' => $user->id,
            ]);

            $this->isFollowing = true;
        }
    }

    public function unfollow()
    {
        Follower::where('user_id', Auth::id())
                ->where('target_id', $this->targetId)
                ->delete();

        $this->isFollowing = false;
    }

    public function render()
    {
        $lastPost = Post::with(['users', 'medias', 'comments', 'likes'])->latest('updated_at')->first();
        return view('livewire.follow-form-last-post', compact('lastPost'));
    }
}
