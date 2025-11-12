

<div id="notificationsContent" class="space-y-4" style="width:370px;">
    <!-- Notification 1 bg-white dark:bg-darkSurface-->
    @foreach($notifications as $notification)
        @if($notification->type === 'followers')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-user-follow-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Followers</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @elseif($notification->type === 'post')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-article-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Publications</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>                      
        @elseif($notification->type === 'comment')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-chat-3-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Commentaires</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @elseif($notification->type === 'replyComment')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-heart-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Commentaires</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @elseif($notification->type === 'likePost')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-heart-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Likes</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @elseif($notification->type === 'likeComment')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-chat-3-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Likes</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @elseif($notification->type === 'system')
            <div
                class=" transition bg-primary bg-opacity-50 dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                <div
                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
                    <div class="w-5 h-5 flex items-center justify-center text-primary">
                        <i class="ri-wrench-line"></i>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between mb-1">
                        <h4 class="text-sm font-medium text-gray-900 dark:text-white">System</h4>
                        <span class="notification-dot bg-secondary"></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-xs mb-1">{{$notification->message}}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
