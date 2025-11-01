    <div class="space-y-4" id="followers">
        @foreach($usersMayKnows as $usersMayKnow)
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    @if($usersMayKnow->avatar === null)
                        <img src="storage/media/avatar.jpg" alt="{{$usersMayKnow->name}}" class="w-10 h-10 rounded-full object-cover">  
                    @else
                        <img src="{{$usersMayKnow->avatar}}" alt="{{$usersMayKnow->name}}" class="w-10 h-10 rounded-full object-cover">
                    @endif
                    <div>
                        <p class="text-sm font-medium">{{$usersMayKnow->name}}</p>
                        <p class="text-xs text-primary">Frontend Developer</p>
                    </div>
                </div>

                <form class="followForms" action="{{ route('follow', $usersMayKnow->id) }}" method="POST" data-user-id = "{{$usersMayKnow->id}}">
                    @csrf
                    <button type="submit" class="bg-primary text-white px-3 py-1 rounded-full text-xs hover:bg-opacity-80 !rounded-button whitespace-nowrap">
                            Follow
                    </button>
                </form>
            </div>
        @endforeach
    </div>