<?php

namespace App\Livewire;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationsList extends Component
{

    public function render()
    {

        $notifications = Notification::where('sender_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('livewire.notifications-list', compact('notifications'));
    }
}
