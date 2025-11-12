
<div wire:poll.1s class="relative hidden lg:block md:block flex flex-col items-center w-72 p-2 rounded-full bg-gray-100 dark:bg-white dark:bg-opacity-10">
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i class="ri-search-line text-gray-400 w-5 h-5"></i>
        </div>
        <input 
            type="search"
            wire:model.debounce.1ms="query"
            placeholder="Search courses, resources..."
            class="bg-gray-100 text-gray-900 dark:text-gray-100 dark:bg-dark dark:bg-opacity-30 border-none text-sm rounded-full pl-10 pr-4 py-2 w-full focus:ring-2 focus:ring-primary"
        >
    </div>

    @if(strlen($query) >= 2)
        @if(count($result['users'] ?? []) > 0 || count($result['posts'] ?? []) > 0)
            <div class="absolute top-12 z-50 bg-white dark:bg-dark text-black dark:text-white p-3 w-96 mt-2 h-full rounded-md shadow-lg max-h-80 overflow-y-auto">
                
                @if(count($result['users']) > 0)
                    <div class="text-xs text-gray-400 mb-2">Users</div>
                    @foreach($result['users'] as $user)
                        <div class="mt-2 bg-primary bg-opacity-30 rounded-md p-3 flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                @if($user->avatar === null)
                                    <img src="storage/media/avatar.jpg" alt="{{$user->name}}" class="w-10 h-10 rounded-full object-cover">  
                                @else
                                    <img src="{{$user->avatar}}" alt="{{$user->name}}" class="w-10 h-10 rounded-full object-cover">
                                @endif
                                <div>
                                    <p class="text-sm font-medium">{{ $user->name }}</p>
                                    <p class="text-xs text-primary">{{ $user->email }}</p>
                                </div>
                            </div>
                            <button class="bg-primary text-white px-3 py-1 rounded-full text-xs hover:bg-opacity-80">
                                Visiter
                            </button>
                        </div>
                    @endforeach
                @endif

                @if(count($result['posts']) > 0)
                    <div class="text-xs text-gray-400 mt-4 mb-2">Posts</div>
                    @foreach($result['posts'] as $post)
                        <div class="mt-2 bg-primary bg-opacity-30 rounded-md p-3 flex flex-col justify-between ">
                            <button class="bg-primary text-white w-full px-3 py-1 rounded-full text-xs hover:bg-opacity-80">
                            voir le post
                            </button>
                            <div class="flex items-center space-x-7">
                                <div>
                                    <p class="text-sm font-medium">{{ $post->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <div class="absolute top-12 z-50 bg-white dark:bg-dark text-black dark:text-white p-3 w-full rounded-md shadow-lg text-center">
                <h4 class="text-sm text-gray-400">Aucun résultat</h4>
            </div>
        @endif
    @endif
</div>
