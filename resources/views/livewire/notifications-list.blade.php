<div id="" class="space-y-4" wire:poll.1s>
    <!-- Notification 1 bg-white dark:bg-darkSurface-->
    @if($notifications->isEmpty())
        <div class="text-lg">
            Aucune notification disponible
        </div>
    @else
        @foreach($notifications as $notification)
            @if($notification->type === 'followers')
                <div wire:click="markAsRead({{ $notification->id }})" class="flex flex-col transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                    <div class="flex">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center mr-3 flex-shrink-0">
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
                        </div>
                    </div>
                    @php
                        $followerInfos = \App\Models\user::where('id', $notification->receiver_id)->first();
                    @endphp
                    <div class="bg-primary bg-opacity-10 rounded-md p-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                @if($followerInfos->avatar === null)
                                    <img src="storage/media/avatar.jpg" alt="{{$followerInfos->name}}" class="w-10 h-10 rounded-full object-cover">  
                                @else
                                    <img src="{{$followerInfos->avatar}}" alt="{{$followerInfos->name}}" class="w-10 h-10 rounded-full object-cover">
                                @endif
                                <div>
                                    <p class="text-sm font-medium">{{$followerInfos->name}}</p>
                                    <p class="text-xs text-primary">Frontend Developer</p>
                                </div>
                            </div>

                            <form class="followForms" action="{{ route('follow', $followerInfos->id) }}" method="POST" data-user-id = "{{$followerInfos->id}}">
                                @csrf
                                    @auth
                                        @php
                                            $followerContains = \App\Models\Follower::where('user_id', Auth::id())
                                                ->where('target_id', $followerInfos->id)
                                                ->exists();
                                        @endphp

                                        @if($followerContains)
                                            <h3 class="text-sm">Suivi</h3>
                                        @else
                                            <button type="submit"
                                                class="bg-primary text-white px-3 py-1 rounded-full text-xs hover:bg-opacity-80 !rounded-button whitespace-nowrap">
                                                Follow back
                                            </button>
                                        @endif
                                    @endauth


                            </form>
                        </div>
                    </div>
                    <p class="pl-2 pt-1 text-gray-500 dark:text-gray-400 text-xs">{{$notification->created_at->diffForHumans()}}</p>
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @elseif($notification->type === 'post')
                <div wire:click="markAsRead({{ $notification->id }})" class="cursor-pointer transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
                    <a href="{{route('social.detailsPost', $notification->post_id)}}" class="flex">
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
                    </a>                      

                @if($notification->is_read === 0)
                    <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                @endif
                </div>
            @elseif($notification->type === 'comment')
                <div wire:click="markAsRead({{ $notification->id }})" class=" transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
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
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @elseif($notification->type === 'replyComment')
                <div wire:click="markAsRead({{ $notification->id }})" class=" transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
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
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @elseif($notification->type === 'likePost')
                <div wire:click="markAsRead({{ $notification->id }})" class=" transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
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
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @elseif($notification->type === 'likeComment')
                <div wire:click="markAsRead({{ $notification->id }})" class=" transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
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
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @elseif($notification->type === 'system')
                <div wire:click="markAsRead({{ $notification->id }})" class=" transition relative dark:bg-opacity-50 hover:scale-105 notification-card flex p-3 bg-gray-100 dark:bg-dark rounded-lg">
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
                    @if($notification->is_read === 0)
                        <span class="absolute top-0 right-0 h-3 w-3 bg-red-700 rounded-full"></span>
                    @endif
                </div>
            @endif
        @endforeach
    @endif

    <button wire:click="markAllAsRead({{$notification->id}})" class="mt-4 text-primary text-sm font-medium w-full py-2 border border-primary rounded-button hover:bg-primary/5 transition-colors whitespace-nowrap">Marquer tous comme lu</button>  
</div>
