<?php

namespace App\Livewire;
use App\Models\Notification;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NotificationCount extends Component
{
    public function render()
    {
        $notificationCount = Notification::where('sender_id', Auth::id())->where('is_read', 0)->count();
        return view('livewire.notification-count', compact('notificationCount'));
    }
}
