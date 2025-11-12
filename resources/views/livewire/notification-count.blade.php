<div wire:poll.1s class="btnNotif relative w-10 h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-primary cursor-pointer">
    <i class="ri-notification-3-line text-xl"></i>
    @if($notificationCount > 0)
    <span class="flex items-center justify-center absolute -top-1 -right-1 w-6 h-6 bg-red-500 rounded-full">
        <h5>{{$notificationCount}}</h5>
    </span>
    @endif
</div>
