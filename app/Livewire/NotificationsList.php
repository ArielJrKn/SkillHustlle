<?php

namespace App\Livewire;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationsList extends Component
{
    public function markAsRead($notificationId){
        Notification::where('id', $notificationId)->update([
            'is_read' => 1,
        ]);
    }

    public function markAllAsRead($notificationId){
        Notification::where('sender_id', Auth::id())->update([
            'is_read' => 1,
        ]);
    }

    public function render()
    {
        $notifications = Notification::where('sender_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('livewire.notifications-list', compact('notifications'));
    }

}
