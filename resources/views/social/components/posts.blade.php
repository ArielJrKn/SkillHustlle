@foreach($posts as $post)
    @if($post->type === 'sharePost')
        <article class="post bg-primary bg-opacity-20 rounded-md p-6" data-post-id="{{ $post->id }}">
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
                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                        @endif
                    @endauth
                    <div class="flex ml-3 flex-col">
                        <h3 class="font-semibold">{{$post->users->name}}</h3>
                        <p class="text-sm text-primary">Computer Science Professor</p>
                    </div>
                </div>

                @if(Auth::id() === $post->users->id)
                    <div class="relative">
                        <button class="course-menu-btn p-2 text-white hover:bg-opacity-30 rounded-full hover:bg-white transition-all">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-more-2-fill"></i>
                            </div>
                        </button>

                        <div class="course-menu postMenu hidden absolute right-0 mt-2 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                            <div class="actionMenu py-1">
                                <a href="{{route('social.editPost', $post)}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="ri-edit-line"></i>
                                        </div>
                                        <span>Modifier</span>
                                    </div>
                                </a>
                                
                                <div class="deletedPost cursor-pointer block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="ri-delete-bin-line"></i>
                                        </div>
                                        <span>Supprimer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="confirmDeleteModal hidden bg-white bg-opacity-10 p-4 rounded-md">
                                <div class="flex items-center">
                                   <div class="flex items-center">

                                        <div class="w-10 h-10 confirmDeleteModalBack cursor-pointer rounded-full hover:bg-white-100 bg-opacity-80 flex items-center justify-center text-white-600">
                                        <i class="ri-arrow-left-line"></i>
                                        </div>

                                        <div class="w-10 h-10 rounded-full bg-red-100 bg-opacity-80 flex items-center justify-center text-red-600">
                                        <i class="ri-alert-line"></i>
                                        </div>
                                   </div>

                                    <h3 class="text-lg font-semibold ml-3">Suppression</h3>
                                </div>
                                <div class="mt-2">
                                    <p class="text-lg text-gray-900 dark:text-gray-100">
                                        Confirmer vous la suppression votre post ? <br> Cette action est irréversible
                                    </p>
                                </div>

                                <div class="w-full flex justify-end">
                                    <form method="POST" action="{{route('social.destroyPost', $post)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="mt-3 flex justify-end rounded-button border border-red-300 shadow-sm px-4 py-2 text-base font-medium text-red-700 bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $post->users->id)->exists())
                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $post->users->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button class="px-3 py-2 bg-primary rounded-full">Ne plus suivre</button>
                    </form>
                @else
                    <form class="followFormsPosts" action="{{route('followerByPost', $post->users->id)}}" method="POST">
                        <button type="submit" class="px-3 py-2 bg-primary rounded-full">Suivre</button>
                    </form>
                @endif
            </div>

            <div class="mt-4 bg">
                {{$post->content}}
            </div>

             @if($post->type === 'sharePost')
            @php
                $sharePost = \App\Models\Post::where('id', $post->post_id)->first();
            @endphp
                <a href="{{route('social.detailsPost', $sharePost)}}">
                    <article class="bg-primary bg-opacity-20 rounded-md p-6 mt-3 hover:scale-105 hover:transition-all transition-all">
                        <div class="flex items-center justify-between">
                            <div class="flex align-center ">
                                @auth
                                    {{-- Avatar si ce n’est pas moi --}}
                                    @if($sharePost->users->id !== Auth::id())
                                        @if($sharePost->users->avatar !== null)
                                            @if(\Illuminate\Support\Str::contains($sharePost->users->avatar, 'https://lh3.googleusercontent.com'))
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{$sharePost->users->avatar}}">
                                            @else
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{asset('storage/'. avatar)}}">
                                            @endif
                                        @else
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                        @endif

                                    @else
                                        <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                    @endif
                                @endauth
                                <div class="flex ml-3 flex-col">
                                    <h3 class="font-semibold">{{$sharePost->users->name}}</h3>
                                    <p class="text-sm text-primary">Computer Science Professor</p>
                                </div>
                            </div>

                            @if(Auth::id() === $sharePost->users->id)
                                <div class="relative">

                                    <div class="course-menu postMenu hidden absolute right-0 mt-2 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                                        <div class="actionMenu py-1">
                                            <a href="{{route('social.editPost', $sharePost)}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                                <div class="flex items-center">
                                                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                        <i class="ri-edit-line"></i>
                                                    </div>
                                                    <span>Modifier</span>
                                                </div>
                                            </a>
                                            
                                            <div class="deletedPost cursor-pointer block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                                <div class="flex items-center">
                                                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </div>
                                                    <span>Supprimer</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="confirmDeleteModal hidden bg-white bg-opacity-10 p-4 rounded-md">
                                            <div class="flex items-center">
                                               <div class="flex items-center">

                                                    <div class="w-10 h-10 confirmDeleteModalBack cursor-pointer rounded-full hover:bg-white-100 bg-opacity-80 flex items-center justify-center text-white-600">
                                                    <i class="ri-arrow-left-line"></i>
                                                    </div>

                                                    <div class="w-10 h-10 rounded-full bg-red-100 bg-opacity-80 flex items-center justify-center text-red-600">
                                                    <i class="ri-alert-line"></i>
                                                    </div>
                                               </div>

                                                <h3 class="text-lg font-semibold ml-3">Suppression</h3>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-lg text-gray-900 dark:text-gray-100">
                                                    Confirmer vous la suppression votre post ? <br> Cette action est irréversible
                                                </p>
                                            </div>

                                            <div class="w-full flex justify-end">
                                                <form method="POST" action="{{route('social.destroyPost', $sharePost)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="mt-3 flex justify-end rounded-button border border-red-300 shadow-sm px-4 py-2 text-base font-medium text-red-700 bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">Confirmer</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $sharePost->users->id)->exists())
                                <form class="DeletefollowPosts" action="{{route('Deletefollower', $lastPost->users->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button class="px-3 py-2 bg-primary rounded-full">Ne plus suivre</button>
                                </form>
                            @else
                                <form class="followFormsPosts" action="{{route('followerByPost', $lastPost->users->id)}}" method="POST">
                                    <button type="submit" class="px-3 py-2 bg-primary rounded-full">Suivre</button>
                                </form>
                            @endif
                        </div>

                        <div class="mt-4 bg break-words">
                            {{$sharePost->content}}
                        </div>

                        @php
                            $postMedias = $sharePost->medias->where('type', 'post');
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
                </a>
            @endif
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


            <div class="mt-4 text-xs text-primary foot flex items-center justify-between">
                <div class="icone flex items-center gap-1">
                    <form class="like-form" action="{{route('likePost', $post)}}" method="POST" data-post-id="{{ $post->id }}">
                        @csrf
                        <button type="submit" class="">
                            @auth
                                @if($post->likes->contains('user_id', Auth::id()))
                            <i class="like active ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                @else
                                     <i class="like ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                @endif
                            @endauth
                        </button>
                    </form>
                    <i class="ri-chat-3-line comment bg-primary bg-opacity-20 px-4 py-2 rounded-md"
                        data-post-id="{{ $post->id }}"></i>
                    <i class="ri-share-line bg-primary bg-opacity-20 px-4 py-2 rounded-md shareBtns" data-post-id="{{ $post->id }}"></i>
                </div>

                <div class="info_foot flex gap-2">
                    @include('social.likePost')
                    <h2 class="hidden lg:flex md:flex">܀</h2>
                    <h2 class="hidden lg:flex md:flex">{{$post->comments->where('type', 'post')->Count() }} comments</h2>
                    <h2 class="hidden lg:flex md:flex">܀ </h2>
                    <h2 class="hidden lg:flex md:flex">{{$post->updated_at->diffForHumans()}}</h2>
                </div>
            </div>

            <div class="commentBox" id="commentBox-{{ $post->id }}">
                <div class="pt-4 mt-4 border-t border-6 border-primary w-full h-96 overflow-y-auto">
                    @auth
                        @php
                            $comments = $post->comments->where('type', 'post');
                        @endphp
                        @if($comments->Count() > 0)
                            @foreach($comments as $comment)
                                <div class="{{ $comment->users->id === Auth::id() ? 'infoInComment flex items-start justify-end mt-4' : 'infoOutComment flex items-start mt-4' }}">

                                    {{-- Avatar si ce n’est pas moi --}}
                                    @if($comment->users->id !== Auth::id())
                                        @if($comment->users->avatar !== null)
                                            @if(\Illuminate\Support\Str::contains($comment->users->avatar, 'https://lh3.googleusercontent.com'))
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{$comment->users->avatar}}">
                                            @else
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{asset('storage/'. avatar)}}">
                                            @endif
                                        @else
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                        @endif
                                    @endif

                                    <div class="max-w-full w-4/5">
                                        <div class="ml-3 bg-primary bg-opacity-20 p-2 rounded-lg max-w-full">
                                            <div class="flex gap-2 items-center">
                                                <h3 class="text-sm font-bold">{{$comment->users->name}}</h3>
                                                    <span class="text-xs text-gray-400">{{$comment->updated_at->diffForHumans()}}</span>
                            @if(Auth::id() !== $comment->users->id)
                                @if(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $comment->users->id)->exists())
                                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $comment->users->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-unfollow-line"></i></button>
                                    </form>
                                @else
                                    <form class="followFormsPosts" action="{{route('followerByPost', $comment->users->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-follow-line"></i></button>
                                    </form>
                                @endif
                            @endif
                                            </div>
                                            <p class="text-sm break-words">{{$comment->content}}</p>

                                            <div class="gap-2 flex items-center flex-wrap w-full mt-2">
                                                @if($comment->medias->Count() > 1)
                                                <div
                                                    class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                                    <div class="carousel">
                                                        <div class="slides">
                                                            @foreach($comment->medias as $media)
                                                            @if(\Illuminate\Support\str::contains($media,
                                                            'mp4'))
                                                            <video
                                                                src="{{ asset('storage/' . $media->path) }}"
                                                                controls autoplay
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

                                                @elseif($comment->medias->Count() === 1)
                                                <div
                                                    class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                                    @foreach($comment->medias as $media)
                                                    @if(\Illuminate\Support\str::contains($media, 'mp4'))
                                                    <video src="{{ asset('storage/' . $media->path) }}"
                                                        controls autoplay
                                                        class="w-full h-64 object-cover rounded-md"></video>
                                                    @else
                                                    <img src="{{ asset('storage/' . $media->path) }}"
                                                        class="w-full h-64 object-cover rounded-md">
                                                    @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>

                                            <div id="replyCommentForm-{{ $comment->id }}" class="flex mt-2 gap-2 items-center justify-center hidden">
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
                                                        <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                                    @endif
                                                @endauth
                                                <div class="flex-1">
                                                   <form method="POST" action="{{ route('replyComment', ['post' => $post->id, 'comment' => $comment->id]) }}"
                                                    class="commentaireForm p-1 flex flex-col w-full justify-between items-center text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary"
                                                    data-post-id="{{ $comment->id }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                                                            id="preview-{{ $comment->id }}">
                                                        </div>

                                                        <div class="w-full flex items-center justify-between">
                                                            <div class=" flex items-center">
                                                                <label for="phtInput-{{ $comment->id }}" class="p-1">
                                                                    <i class="ri-edit-line ri-lg"></i>
                                                                </label>
                                                                <input type="file" name="path[]" accept="image/*" multiple
                                                                    id="phtInput-{{ $comment->id }}" hidden>

                                                                <label for="vdoInput-{{ $comment->id }}" class="p-1">
                                                                    <i class="ri-video-line ri-lg"></i>
                                                                </label>
                                                                <input type="file" name="path[]" accept="video/*" multiple
                                                                    id="vdoInput-{{ $comment->id }}" hidden>
                                                            </div>

                                                            <input type="text" name="content" placeholder="Votre commentaire..."
                                                                class="outline-none bg-transparent px-4 py-1 w-full">

                                                            <div class="flex items-center">
                                                                <button type="submit"
                                                                    class="p-2 px-3 bg-primary bg-opacity-40 rounded-full">
                                                                    <i class="ri-send-plane-fill"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ml-3 flex mt-2 items-center gap-2 relative">
                                            <div
                                                class=" cursor-pointer hover:bg-primary hover:bg-opacity-20 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 p-1 rounded-full">
                                                <form class="commentLike" method="POST" action="{{route('likelastPostComment', $comment->id)}}">
                                                    @csrf
                                                    <button type="submit">
                                                    @auth
                                                        @if($comment->likes->contains('user_id', Auth::id()))
                                                            <i class="like active ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                        @else
                                                            <i class="like ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                        @endif
                                                    @endauth
                                                    </button>
                                                </form>
                                                @include('social.likeCommentLastPost')
                                            </div>

                                            @if(Auth::id() === $comment->user_id)
                                            <a href="{{route('editComment', $comment)}}">
                                                <div
                                                class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                <i class="like ri-edit-line"></i>
                                                </div>
                                            </a>


                                            <div class="flex justify-end">
                                                <form method="POST" action="{{route('social.destroyComment', $comment)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter rounded-full backdrop-blur-lg px-2 py-1">
                                                        <i class="like ri-delete-bin-line text-red-400"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @elseif(Auth::id() === $post->user_id)
                                            <div class="flex justify-end">
                                                <form method="POST" action="{{route('social.destroyComment', $comment)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter backdrop-blur-lg px-2 py-1">
                                                        <i class="like ri-delete-bin-line text-red-400"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @endif


                                            <div data-comment-id="{{$comment->id}}" class="replyCommentBtn cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                <i class="ri-reply-line"></i> 
                                            </div>

                                            <div>Réponses {{$post->comments->where('type', 'comment')->where('comment_id', $comment->id)->count()}}</div>
                                        </div>


                                        <!-- Réponses imbriquées (niveau 1) -->
                                        @php
                                            $replyComments = $post->comments->where('type', 'comment')->where('comment_id', $comment->id);
                                        @endphp
                                        @foreach($replyComments as $replyComment)
                                        <div class="mt-6 space-y-4 pl-6 border-l border-gray-500">

                                          <!-- Réponse -->
                                          <article class="bg-primary bg-opacity-10 p-4 rounded-xl">
                                            <div class="flex gap-3">
                                              <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                              <div class="flex-1">
                                                <div class="flex items-center gap-2">
                                                  <h4 class="font-semibold">{{$replyComment->users->name}}</h4>
                                                  <span class="text-xs text-gray-400">· {{$replyComment->updated_at->diffForHumans()}}</span>
                            @if(Auth::id() !== $replyComment->users->id)
                                @if(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $replyComment->users->id)->exists())
                                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $replyComment->users->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-unfollow-line"></i></button>
                                    </form>
                                @else
                                    <form class="followFormsPosts" action="{{route('followerByPost', $replyComment->users->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-follow-line"></i></button>
                                    </form>
                                @endif
                            @endif
                                                </div>

                                                <p class="mt-1 text-sm">{{$replyComment->content}}</p>

                                                <div class="ml-3 flex mt-2 items-center gap-2 relative">
                                                    <div
                                                        class=" cursor-pointer hover:bg-primary hover:bg-opacity-20 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 p-1 rounded-full">
                                                        <form class="ReplycommentLikes" method="POST" action="{{route('likeReplyComments', $replyComment->id)}}">
                                                            @csrf
                                                            <button type="submit">
                                                            @auth
                                                                @if($replyComment->likes->contains('user_id', Auth::id()))
                                                                    <i class="like active ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                                @else
                                                                    <i class="like ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                                @endif
                                                            @endauth
                                                            </button>
                                                        </form>
                                                        @include('social.likeReplyComment')
                                                    </div>

                                                    @if(Auth::id() === $replyComment->user_id)
                                                    <a href="{{route('editComment', $replyComment)}}">
                                                        <div
                                                        class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                        <i class="like ri-edit-line"></i>
                                                        </div>
                                                    </a>


                                                    <div class="flex justify-end">
                                                        <form method="POST" action="{{route('social.destroyComment', $replyComment)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter rounded-full backdrop-blur-lg px-2 py-1">
                                                                <i class="like ri-delete-bin-line text-red-400"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @elseif(Auth::id() === $post->user_id)
                                                    <div class="w-full flex justify-end">
                                                        <form method="POST" action="{{route('social.destroyComment', $replyComment)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter backdrop-blur-lg px-2 py-1">
                                                                <i class="like ri-delete-bin-line text-red-400"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </div>
                                              </div>
                                            </div>
                                          </article>

                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <div class="w-full h-full flex items-center justify-center">
                                <h1>Aucun commentaire sous ce postes...Soyez le premier à en faire</h1>
                            </div>
                        @endif
                    @endauth
                </div>

                <form method="POST" action="{{route('createComment', $post->id)}}"
                    class="commentaireForm p-1 flex flex-col w-full justify-between items-center mt-4 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary"
                    data-post-id="{{ $post->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                        id="preview-{{ $post->id }}">
                    </div>

                    <div class="w-full flex items-center justify-between">
                        <div class=" flex items-center">
                            <label for="phtInput-{{ $post->id }}" class="p-1">
                                <i class="ri-image-line ri-lg"></i>
                            </label>
                            <input type="file" name="path[]" accept="image/*" multiple
                                id="phtInput-{{ $post->id }}" hidden>

                            <label for="vdoInput-{{ $post->id }}" class="p-1">
                                <i class="ri-video-line ri-lg"></i>
                            </label>
                            <input type="file" name="path[]" accept="video/*" multiple
                                id="vdoInput-{{ $post->id }}" hidden>
                        </div>

                        <input type="text" name="content" placeholder="Votre commentaire..."
                            class="outline-none bg-transparent px-4 py-3 w-full">

                        <div class="flex items-center">
                            <button type="submit"
                                class="p-3 px-4 bg-primary bg-opacity-40 rounded-full">
                                <i class="ri-send-plane-fill"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    @elseif($post->type === 'simplePost')
        <article class="post bg-primary bg-opacity-20 rounded-md p-6" data-post-id="{{ $post->id }}">
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
                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                        @endif
                    @endauth
                    <div class="flex ml-3 flex-col">
                        <h3 class="font-semibold">{{$post->users->name}}</h3>
                        <p class="text-sm text-primary">Computer Science Professor</p>
                    </div>
                </div>

                @if(Auth::id() === $post->users->id)
                    <div class="relative">
                        <button class="course-menu-btn p-2 text-white hover:bg-opacity-30 rounded-full hover:bg-white transition-all">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-more-2-fill"></i>
                            </div>
                        </button>

                        <div class="course-menu postMenu hidden absolute right-0 mt-2 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                            <div class="actionMenu py-1">
                                <a href="{{route('social.editPost', $post)}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="ri-edit-line"></i>
                                        </div>
                                        <span>Modifier</span>
                                    </div>
                                </a>
                                
                                <div class="deletedPost cursor-pointer block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                    <div class="flex items-center">
                                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="ri-delete-bin-line"></i>
                                        </div>
                                        <span>Supprimer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="confirmDeleteModal hidden bg-white bg-opacity-10 p-4 rounded-md">
                                <div class="flex items-center">
                                   <div class="flex items-center">

                                        <div class="w-10 h-10 confirmDeleteModalBack cursor-pointer rounded-full hover:bg-white-100 bg-opacity-80 flex items-center justify-center text-white-600">
                                        <i class="ri-arrow-left-line"></i>
                                        </div>

                                        <div class="w-10 h-10 rounded-full bg-red-100 bg-opacity-80 flex items-center justify-center text-red-600">
                                        <i class="ri-alert-line"></i>
                                        </div>
                                   </div>

                                    <h3 class="text-lg font-semibold ml-3">Suppression</h3>
                                </div>
                                <div class="mt-2">
                                    <p class="text-lg text-gray-900 dark:text-gray-100">
                                        Confirmer vous la suppression votre post ? <br> Cette action est irréversible
                                    </p>
                                </div>

                                <div class="w-full flex justify-end">
                                    <form method="POST" action="{{route('social.destroyPost', $post)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="mt-3 flex justify-end rounded-button border border-red-300 shadow-sm px-4 py-2 text-base font-medium text-red-700 bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">Confirmer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $post->users->id)->exists())
                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $post->users->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button class="px-3 py-2 bg-primary rounded-full">Ne plus suivre</button>
                    </form>
                @else
                    <form class="followFormsPosts" action="{{route('followerByPost', $post->users->id)}}" method="POST">
                        <button type="submit" class="px-3 py-2 bg-primary rounded-full">Suivre</button>
                    </form>
                @endif
            </div>

            <div class="mt-4 bg">
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


            <div class="mt-4 text-xs text-primary foot flex items-center justify-between">
                <div class="icone flex items-center gap-1">
                    <form class="like-form" action="{{route('likePost', $post)}}" method="POST" data-post-id="{{ $post->id }}">
                        @csrf
                        <button type="submit" class="">
                            @auth
                                @if($post->likes->contains('user_id', Auth::id()))
                            <i class="like active ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                @else
                                     <i class="like ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                @endif
                            @endauth
                        </button>
                    </form>
                    <i class="ri-chat-3-line comment bg-primary bg-opacity-20 px-4 py-2 rounded-md"
                        data-post-id="{{ $post->id }}"></i>
                    <i class="ri-share-line bg-primary bg-opacity-20 px-4 py-2 rounded-md shareBtns" data-post-id="{{ $post->id }}"></i>
                </div>

                <div class="info_foot flex gap-2">
                    @include('social.likePost')
                    <h2 class="hidden lg:flex md:flex">܀</h2>
                    <h2 class="hidden lg:flex md:flex">{{$post->comments->where('type', 'post')->Count() }} comments</h2>
                    <h2 class="hidden lg:flex md:flex">܀ </h2>
                    <h2 class="hidden lg:flex md:flex">{{$post->updated_at->diffForHumans()}}</h2>
                </div>
            </div>

            <div class="commentBox" id="commentBox-{{ $post->id }}">
                <div class="pt-4 mt-4 border-t border-6 border-primary w-full h-96 overflow-y-auto">
                    @auth
                        @php
                            $comments = $post->comments->where('type', 'post');
                        @endphp
                        @if($comments->Count() > 0)
                            @foreach($comments as $comment)
                                <div class="{{ $comment->users->id === Auth::id() ? 'infoInComment flex items-start justify-end mt-4' : 'infoOutComment flex items-start mt-4' }}">

                                    {{-- Avatar si ce n’est pas moi --}}
                                    @if($comment->users->id !== Auth::id())
                                        @if($comment->users->avatar !== null)
                                            @if(\Illuminate\Support\Str::contains($comment->users->avatar, 'https://lh3.googleusercontent.com'))
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{$comment->users->avatar}}">
                                            @else
                                                <img class="w-10 h-10 rounded-full object-cover" src="{{asset('storage/'. avatar)}}">
                                            @endif
                                        @else
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                        @endif
                                    @endif

                                    <div class="max-w-full w-4/5">
                                        <div class="ml-3 bg-primary bg-opacity-20 p-2 rounded-lg max-w-full">
                                            <div class="flex gap-2 items-center">
                                                <h3 class="text-sm font-bold">{{$comment->users->name}}</h3>
                                                    <span class="text-xs text-gray-400">{{$comment->updated_at->diffForHumans()}}</span>
                            @if(Auth::id() !== $comment->users->id)
                                @if(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $comment->users->id)->exists())
                                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $comment->users->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-unfollow-line"></i></button>
                                    </form>
                                @else
                                    <form class="followFormsPosts" action="{{route('followerByPost', $comment->users->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-follow-line"></i></button>
                                    </form>
                                @endif
                            @endif
                                            </div>
                                            <p class="text-sm break-words">{{$comment->content}}</p>

                                            <div class="gap-2 flex items-center flex-wrap w-full mt-2">
                                                @if($comment->medias->Count() > 1)
                                                <div
                                                    class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                                    <div class="carousel">
                                                        <div class="slides">
                                                            @foreach($comment->medias as $media)
                                                            @if(\Illuminate\Support\str::contains($media,
                                                            'mp4'))
                                                            <video
                                                                src="{{ asset('storage/' . $media->path) }}"
                                                                controls autoplay
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

                                                @elseif($comment->medias->Count() === 1)
                                                <div
                                                    class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                                    @foreach($comment->medias as $media)
                                                    @if(\Illuminate\Support\str::contains($media, 'mp4'))
                                                    <video src="{{ asset('storage/' . $media->path) }}"
                                                        controls autoplay
                                                        class="w-full h-64 object-cover rounded-md"></video>
                                                    @else
                                                    <img src="{{ asset('storage/' . $media->path) }}"
                                                        class="w-full h-64 object-cover rounded-md">
                                                    @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>

                                            <div id="replyCommentForm-{{ $comment->id }}" class="flex mt-2 gap-2 items-center justify-center hidden">
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
                                                        <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                                    @endif
                                                @endauth
                                                <div class="flex-1">
                                                   <form method="POST" action="{{ route('replyComment', ['post' => $post->id, 'comment' => $comment->id]) }}"
                                                    class="commentaireForm p-1 flex flex-col w-full justify-between items-center text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary"
                                                    data-post-id="{{ $comment->id }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                                                            id="preview-{{ $comment->id }}">
                                                        </div>

                                                        <div class="w-full flex items-center justify-between">
                                                            <div class=" flex items-center">
                                                                <label for="phtInput-{{ $comment->id }}" class="p-1">
                                                                    <i class="ri-edit-line ri-lg"></i>
                                                                </label>
                                                                <input type="file" name="path[]" accept="image/*" multiple
                                                                    id="phtInput-{{ $comment->id }}" hidden>

                                                                <label for="vdoInput-{{ $comment->id }}" class="p-1">
                                                                    <i class="ri-video-line ri-lg"></i>
                                                                </label>
                                                                <input type="file" name="path[]" accept="video/*" multiple
                                                                    id="vdoInput-{{ $comment->id }}" hidden>
                                                            </div>

                                                            <input type="text" name="content" placeholder="Votre commentaire..."
                                                                class="outline-none bg-transparent px-4 py-1 w-full">

                                                            <div class="flex items-center">
                                                                <button type="submit"
                                                                    class="p-2 px-3 bg-primary bg-opacity-40 rounded-full">
                                                                    <i class="ri-send-plane-fill"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ml-3 flex mt-2 items-center gap-2 relative">
                                            <div
                                                class=" cursor-pointer hover:bg-primary hover:bg-opacity-20 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 p-1 rounded-full">
                                                <form class="commentLike" method="POST" action="{{route('likelastPostComment', $comment->id)}}">
                                                    @csrf
                                                    <button type="submit">
                                                    @auth
                                                        @if($comment->likes->contains('user_id', Auth::id()))
                                                            <i class="like active ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                        @else
                                                            <i class="like ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                        @endif
                                                    @endauth
                                                    </button>
                                                </form>
                                                @include('social.likeCommentLastPost')
                                            </div>

                                            @if(Auth::id() === $comment->user_id)
                                            <a href="{{route('editComment', $comment)}}">
                                                <div
                                                class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                <i class="like ri-edit-line"></i>
                                                </div>
                                            </a>


                                            <div class="flex justify-end">
                                                <form method="POST" action="{{route('social.destroyComment', $comment)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter rounded-full backdrop-blur-lg px-2 py-1">
                                                        <i class="like ri-delete-bin-line text-red-400"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @elseif(Auth::id() === $post->user_id)
                                            <div class=" flex justify-end">
                                                <form method="POST" action="{{route('social.destroyComment', $comment)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter backdrop-blur-lg px-2 py-1">
                                                        <i class="like ri-delete-bin-line text-red-400"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @endif


                                            <div data-comment-id="{{$comment->id}}" class="replyCommentBtn cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                <i class="ri-reply-line"></i> 
                                            </div>

                                            <div>Réponses {{$post->comments->where('type', 'comment')->where('comment_id', $comment->id)->count()}}</div>
                                        </div>


                                        <!-- Réponses imbriquées (niveau 1) -->
                                        @php
                                            $replyComments = $post->comments->where('type', 'comment')->where('comment_id', $comment->id);
                                        @endphp
                                        @foreach($replyComments as $replyComment)
                                        <div class="mt-6 space-y-4 pl-6 border-l border-gray-500">

                                          <!-- Réponse -->
                                          <article class="bg-primary bg-opacity-10 p-4 rounded-xl">
                                            <div class="flex gap-3">
                                              <img class="w-10 h-10 rounded-full object-cover" src="storage/media/avatar.jpg">
                                              <div class="flex-1">
                                                <div class="flex items-center gap-2">
                                                  <h4 class="font-semibold">{{$replyComment->users->name}}</h4>
                                                  <span class="text-xs text-gray-400">· {{$replyComment->updated_at->diffForHumans()}}</span>
                            @if(Auth::id() !== $replyComment->users->id)
                                @if(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $replyComment->users->id)->exists())
                                    <form class="DeletefollowPosts" action="{{route('Deletefollower', $replyComment->users->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-unfollow-line"></i></button>
                                    </form>
                                @else
                                    <form class="followFormsPosts" action="{{route('followerByPost', $replyComment->users->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="p-1 bg-primary rounded-sm"><i class="ri-lg ri-user-follow-line"></i></button>
                                    </form>
                                @endif
                            @endif
                                                </div>

                                                <p class="mt-1 text-sm">{{$replyComment->content}}</p>

                                                <div class="ml-3 flex mt-2 items-center gap-2 relative">
                                                    <div
                                                        class=" cursor-pointer hover:bg-primary hover:bg-opacity-20 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 p-1 rounded-full">
                                                        <form class="ReplycommentLikes" method="POST" action="{{route('likeReplyComments', $replyComment->id)}}">
                                                            @csrf
                                                            <button type="submit">
                                                            @auth
                                                                @if($replyComment->likes->contains('user_id', Auth::id()))
                                                                    <i class="like active ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                                @else
                                                                    <i class="like ri-heart-line bg-primary bg-opacity-20 p-1 rounded-full"></i>
                                                                @endif
                                                            @endauth
                                                            </button>
                                                        </form>
                                                        @include('social.likeReplyComment')
                                                    </div>

                                                    @if(Auth::id() === $replyComment->user_id)
                                                    <a href="{{route('editComment', $replyComment)}}">
                                                        <div
                                                        class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                        <i class="like ri-edit-line"></i>
                                                        </div>
                                                    </a>


                                                    <div class="flex justify-end">
                                                        <form method="POST" action="{{route('social.destroyComment', $replyComment)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter rounded-full backdrop-blur-lg px-2 py-1">
                                                                <i class="like ri-delete-bin-line text-red-400"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @elseif(Auth::id() === $post->user_id)
                                                    <div class="w-full flex justify-end">
                                                        <form method="POST" action="{{route('social.destroyComment', $replyComment)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="cursor-pointer bg-red-900 bg-opacity-40 backdrop-filter backdrop-blur-lg px-2 py-1">
                                                                <i class="like ri-delete-bin-line text-red-400"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </div>
                                              </div>
                                            </div>
                                          </article>

                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <div class="w-full h-full flex items-center justify-center">
                                <h1>Aucun commentaire sous ce postes...Soyez le premier à en faire</h1>
                            </div>
                        @endif
                    @endauth
                </div>

                <form method="POST" action="{{route('createComment', $post->id)}}"
                    class="commentaireForm p-1 flex flex-col w-full justify-between items-center mt-4 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary"
                    data-post-id="{{ $post->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                        id="preview-{{ $post->id }}">
                    </div>

                    <div class="w-full flex items-center justify-between">
                        <div class=" flex items-center">
                            <label for="phtInput-{{ $post->id }}" class="p-1">
                                <i class="ri-image-line ri-lg"></i>
                            </label>
                            <input type="file" name="path[]" accept="image/*" multiple
                                id="phtInput-{{ $post->id }}" hidden>

                            <label for="vdoInput-{{ $post->id }}" class="p-1">
                                <i class="ri-video-line ri-lg"></i>
                            </label>
                            <input type="file" name="path[]" accept="video/*" multiple
                                id="vdoInput-{{ $post->id }}" hidden>
                        </div>

                        <input type="text" name="content" placeholder="Votre commentaire..."
                            class="outline-none bg-transparent px-4 py-3 w-full">

                        <div class="flex items-center">
                            <button type="submit"
                                class="p-3 px-4 bg-primary bg-opacity-40 rounded-full">
                                <i class="ri-send-plane-fill"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    @endif
@endforeach