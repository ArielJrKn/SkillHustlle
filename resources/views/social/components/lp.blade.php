                                <article id="postContent" class="bg-primary bg-opacity-20 rounded-md p-6 mt-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex align-center ">
                                            @auth
                                                {{-- Avatar si ce n’est pas moi --}}
                                                @if($post->users->id !== Auth::id())
                                                    @if($post->users->avatar !== null)
                                                        @if(\Illuminate\Support\Str::contains($post->users->avatar, 'https://lh3.googleusercontent.com'))
                                                            <img class="w-10 h-10 rounded-full object-cover" src="{{$post->users->avatar}}">
                                                        @else
                                                            <img class="w-10 h-10 rounded-full object-cover" src="{{asset('storage/'. avatar)}}">
                                                        @endif
                                                    @else
                                                        <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                                    @endif

                                                @else
                                                    <img class="w-10 h-10 rounded-full object-cover" src="{{$lastPost->users->avatar}}">
                                                @endif
                                            @endauth
                                            <div class="flex ml-3 flex-col">
                                                <h3 class="font-semibold">{{$post->users->name}}</h3>
                                                <p class="text-sm text-primary">Computer Science Professor</p>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="mt-4 bg break-words">
                                        {{$post->content}}
                                    </div>

                                    @php
                                        $postMedias = $post->medias->where('type', 'post');
                                    @endphp

                                    @if($postMedias->count() > 1)
                                        <div class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                            <div class="carousel">
                                                <div class="slides">
                                                    @foreach($postMedias as $media)
                                                    @if(pathinfo($media->path, PATHINFO_EXTENSION) === 'mp4')
                                                    <video src="{{ asset('storage/' . $media->path) }}" controls autoplay
                                                        class="w-full h-64 object-cover rounded-md"></video>
                                                    @else
                                                    <img src="{{ asset('storage/' . $media->path) }}"
                                                        class="w-full h-64 object-cover rounded-md">
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <button class="btn prev">&#10094;</button>
                                                <button class="btn next">&#10095;</button>
                                            </div>
                                        </div>
                                        @elseif($postMedias->count() === 1)
                                        <div class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                            @foreach($postMedias as $media)
                                                @if(pathinfo($media->path, PATHINFO_EXTENSION) === 'mp4')
                                                    <video src="{{ asset('storage/' . $media->path) }}" controls autoplay
                                                    class="w-full h-64 object-cover rounded-md"></video>
                                                @else
                                                    <img src="{{ asset('storage/' . $media->path) }}"
                                                    class="w-full h-64 object-cover rounded-md">
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif


                                </article>