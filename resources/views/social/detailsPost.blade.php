<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Détails du candidats</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/feedback.css">
    <link rel="stylesheet" type="text/css" href="storage/style/recruit/userDetail.css">
    <link rel="stylesheet" type="text/css" href="storage/style/favoris.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="storage/js_style/student_dashboard_tailwindConfig.js"></script>
</head>

<style>
    .commentaireForm {
        border-radius: 60px;
    }

    .commentaireForm.active {
        border-radius: 20px;
    }

    .course-menu{
        width: 200px;
        transition: all 0.3s;
    }
    .like{
        transition: 0.3S ease;
    }
    .like.active{
        background-color: rgba(74, 144, 226, 0.6);
        animation: transit 0.7s;
    }
    .boutonCommentaire{
        display: flex;
        align-items: center;
        gap: 1;
        transition: 2s;
        border-radius: 20px;
    }
    .boutonCommentaire.active{
        position: absolute;
        height: 200px;
        width: 100%;
        border-radius: 20px;
        left: 0%;
        right: 50%;
        bottom: 0;
        transition: 2s;
    }
</style>
<body class="bg-background min-h-screen">

    <!-- Loading Bar -->

    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->
        <header class="h-16 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <main class="pt-16 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <main class="max-w-7xl mx-auto px-4 py-4 flex">
                    <div class="w-full">
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
                                        <button type="submit" class="px-3 py-2 bg-primary rounded-full">Ne plus suivre</button>
                                    </form>
                                @else
                                    <form class="followFormsPosts" action="{{route('followerByPost', $post->users->id)}}" method="POST">
                                        @csrf
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
                                        <video src="{{ asset('storage/' . $media->path) }}" controls 
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
                                <video src="{{ asset('storage/' . $media->path) }}" controls 
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
                                                                                controls 
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
                                                                        controls 
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
                                    class="commentaireForm p-1 flex flex-col w-full justify-between items-center mt-4 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary rounded-full"
                                    data-post-id="{{ $post->id }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                                        id="preview">
                                    </div>

                                    <div class="w-full flex items-center justify-between">
                                        <div class=" flex items-center">
                                            <label for="phtInput" class="p-1">
                                                <i class="ri-image-line ri-lg"></i>
                                            </label>
                                            <input type="file" name="path[]" accept="image/*" multiple
                                                id="phtInput" hidden>

                                            <label for="vdoInput" class="p-1">
                                                <i class="ri-video-line ri-lg"></i>
                                            </label>
                                            <input type="file" name="path[]" accept="video/*" multiple
                                                id="vdoInput" hidden>
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
                    </div>
                </main>
            </main>

        </div>
    </div>

    <div id="shareModal"
        class="absolute hidden w-full top-0 z-50 flex items-center justify-center backdrop-filter backdrop-blur-2xl"
        style="height: 100%;">
        <div id="shareModalContent" class="lg:w-2/5 bg-white bg-opacity-10 rounded-md">
            <div class="flex items-center p-3">
                <div class="flex w-full items-center justify-start">
                    <div class="w-10 h-10 rounded-full bg-blue-100 bg-opacity-80 flex items-center justify-center text-blue-600">
                        <i class="ri-share-line"></i>
                    </div>

                    <h3 class="text-lg font-semibold ml-3">Partager cette publication</h3>
                </div>

                <div class="shareModalClose cursor-pointer w-full flex justify-end p-3">
                    <i class="ri-close-line ri-lg"></i>                    
                </div>
            </div>
            <div class="">
                <p class="text-lg text-gray-300">
                    <div>
                        <form id="receivePostContentForm" method="POST" >
                            @csrf
                            <button type="submit" class="w-full">
                                 <div class="shareLikePost w-full border-t border-1 border-gray-500 hover:bg-white hover:bg-opacity-20 transition-all justify-start flex items-center p-4">En tant que publication</div>
                            </button>
                        </form>
                       

                        <form id="shareForm" class="bg-primary bg-opacity-20 rounded-md p-3 mx-3 hidden" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="flex items-center space-x-4">
                                @auth
                                    @if(Auth::user()->avatar === null)
                                        <img src="storage/media/avatar.jpg" alt="Your Avatar"
                                    class="w-10 h-10 rounded-full object-cover">
                                    @else
                                        <img src="{{Auth::user()->avatar}}" alt="Your Avatar"
                                        class="w-10 h-10 rounded-full object-cover">
                                    @endif
                                @endauth
                                <div
                                    class="flex-1 flex-col text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-lg px-2 py-2 text-sm focus:outline-none focus:border-primary">
                                    <div class="content flex items-center justify-start flex-wrap">

                                    </div>

                                    <input type="text" name="content"
                                        placeholder="Voulez vous ajouté quelque chose...?"
                                        class="w-full flex-1 bg-transparent text-gray-900 dark:text-gray-100 rounded-full px-4 py-3 text-sm focus:outline-none focus:border-primary">
                                </div>
                            </div>

                            @include('social.components.lp')

                            <div class="w-full flex items-center justify-between p-3 hidden" id="shareFormBtns">
                                <div class="">
                                    <div id="shareFormBack" 
                                        class="cursor-pointer mt-2 flex justify-end rounded-button border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                                        Retour
                                    </div>
                                </div>

                                <button type="submit" form="shareForm" class="bg-primary text-white px-6 py-2 mt-2 rounded-full text-sm hover:bg-opacity-80 !rounded-button whitespace-nowrap">
                                    <h3>Post</h3>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="shareOptions" class="">
                        <form id="shareOption">
                            <button class="w-full border-t border-1 border-gray-500 hover:bg-white hover:bg-opacity-20 transition-all justify-start flex items-center p-4">En tant que message</button>
                        </form>

                        <form id="shareOption">
                            <button class="w-full border-t border-1 border-gray-500 hover:bg-white hover:bg-opacity-20 transition-all justify-start flex items-center p-4">Copier le lien de la publication</button>
                        </form>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const shareModal = document.getElementById('shareModal');
            const shareLikePost = document.querySelector('.shareLikePost');
            const shareOptions = document.getElementById('shareOptions');
            const shareForm = document.getElementById('shareForm');
            const shareFormBtns = document.getElementById('shareFormBtns');
            const shareFormBack = document.getElementById('shareFormBack');
            const receivePostContentForm = document.getElementById('receivePostContentForm');
            const shareModalClose = document.querySelector('.shareModalClose');

            let currentPostId = null; //  on garde en mémoire le post actif

            // Quand on clique sur un bouton de partage
            document.querySelectorAll('.shareBtns').forEach(shareBtn => {
                shareBtn.addEventListener('click', function() {
                    currentPostId = this.dataset.postId; // enregistre le post cliqué
                    shareModal.classList.remove('hidden');
                });
            });

            // Partager le post
            shareLikePost.addEventListener('click', function() {
                shareOptions.classList.add('hidden');
                shareForm.classList.remove('hidden');
                shareLikePost.classList.add('hidden');
                shareFormBtns.classList.remove('hidden');
            });

            // Bouton "Retour"
            shareFormBack.addEventListener('click', function() {
                shareOptions.classList.remove('hidden');
                shareForm.classList.add('hidden');
                shareLikePost.classList.remove('hidden');
                shareFormBtns.classList.add('hidden');
            });

            // Fermeture du modal
            shareModalClose.addEventListener('click', function() {
                // Toujours repasser par le reset avant de fermer
                shareFormBack.click();
                shareModal.classList.add('hidden');
            });

            // Soumission du formulaire
            receivePostContentForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                const url = `/sharePostContent/${currentPostId}`;
                shareForm.action = `/sharePost/${currentPostId}`;
                const formData = new FormData(receivePostContentForm);
                try {
                    const response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: { "X-Requested-With": "XMLHttpRequest" }
                    });

                    const postContent = await response.text();
                    document.getElementById("postContent").outerHTML = postContent;
                } catch (error) {
                    console.error("Erreur :", error);
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const like = document.querySelectorAll(".like");

            like.forEach(l => {
                l.addEventListener('click', function(){
                    l.classList.toggle('active')
                })
            })
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.commentaireForm').forEach(form => {
                // const postId = form.dataset.postId;

                const phtBtn = document.getElementById('pht');
                const vdoBtn = document.getElementById('vdo');
                const phtInput = document.getElementById('phtInput');
                const vdoInput = document.getElementById('vdoInput');
                const previewContainer = document.getElementById('preview');

                let media = [];

                phtInput.addEventListener('change', e => {
                    alert(po);
                    media.push(...Array.from(e.target.files));
                    displayed();
                });

                vdoInput.addEventListener('change', e => {
                    media.push(...Array.from(e.target.files));
                    displayed();
                });

                function displayed() {
                    previewContainer.innerHTML = '';
                    form.classList.add('active'); // ✅ le form courant

                    media.forEach((file, index) => {
                        const src = URL.createObjectURL(file);

                        const container = document.createElement('div');
                        container.className = 'boss flex items-start gap-1 p-2';

                        if (file.type.startsWith('image/')) {
                            const img = document.createElement('img');
                            img.src = src;
                            img.className = 'h-16 w-16 rounded-md object-cover';
                            container.appendChild(img);
                        } else if (file.type.startsWith('video/')) {
                            const video = document.createElement('video');
                            video.src = src;
                            video.className = 'w-16 h-16 object-cover rounded-lg';
                            video.controls = true; // 🔥 ajouter des controls
                            container.appendChild(video);
                        }

                        const closeBtn = document.createElement('span');
                        closeBtn.className = 'bg-white p-1 rounded-full cursor-pointer';
                        closeBtn.innerHTML = '<i class="ri-close-line ri-lg text-black"></i>';

                        closeBtn.addEventListener('click', () => {
                            media.splice(index, 1);
                            displayed();
                        });

                        container.appendChild(closeBtn);
                        previewContainer.appendChild(container);
                    });
                }

            });
        });
    </script>

    <script>
        document.querySelectorAll(".carousel").forEach(carousel => {
            const slides = carousel.querySelector(".slides");
            const totalSlides = slides.children.length;
            let index = 0;

            carousel.querySelector(".next").addEventListener("click", () => {
                index = (index + 1) % totalSlides;
                slides.style.transform = `translateX(-${index * 600}px)`;
            });

            carousel.querySelector(".prev").addEventListener("click", () => {
                index = (index - 1 + totalSlides) % totalSlides;
                slides.style.transform = `translateX(-${index * 600}px)`;
            });
        });
    </script>

    <script>
        document.querySelectorAll('.like-form').forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // On récupère l'URL directement depuis le formulaire ciblé
            let url = form.action;

            // On construit les données du formulaire
            let formData = new FormData(form);

            // On envoie la requête AJAX (fetch)
            let response = await fetch(url, {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            });

            // La réponse sera du HTML (vue partielle Blade)
            let html = await response.text();

            // Récupérer l'ID du post (dernière partie de l'URL)
            let postId = url.split('/').pop();

            // On remplace l'ancien compteur par le nouveau
            document.getElementById("like-count-" + postId).outerHTML = html;
        });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelectorAll('.commentLike').forEach(formCommentLike =>{
                formCommentLike.addEventListener('submit', async function(e){
                    e.preventDefault();

                    let url = formCommentLike.action;

                    let formData = new FormData(formCommentLike);

                    let response = await fetch(url, {
                        method:'POST',
                        body:formData,
                        headers:{
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    });

                    let html = await response.text();

                    let commentId = url.split('/').pop();

                    document.getElementById("likeComment-" + commentId).outerHTML = html;
                })
            })
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const rightBtn = document.querySelector('.RightBtn');
            const rightSideBar = document.querySelector('.RightSideBar');

            rightBtn.addEventListener('click', function(){
                rightSideBar.classList.toggle('hidden')
            });

            document.addEventListener('click', function(e){
                if (!rightSideBar.classList.contains('hidden') && !rightSideBar.contains(e.target) && !rightBtn.contains(e.target)) {
                    rightSideBar.classList.add('hidden');
                }
            });
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelectorAll('.replyCommentBtn').forEach(replyBtn =>{
                const commentId = replyBtn.dataset.commentId;
                const replyCommentForm = document.getElementById('replyCommentForm-' + commentId);

                replyBtn.addEventListener('click', function(){
                    replyCommentForm.classList.toggle('hidden');
                })
            })
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelectorAll('.ReplycommentLikes').forEach(replycommentLikes =>{
                replycommentLikes.addEventListener('submit', async function(e){
                    e.preventDefault();

                     let url = replycommentLikes.action;

                    let formData = new FormData(replycommentLikes);

                    let response = await fetch(url, {
                        method:'POST',
                        body:formData,
                        headers:{
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    });

                    let html = await response.text();

                    let replyCommentId = url.split('/').pop();

                    document.getElementById("likeReplyComment-" + replyCommentId).outerHTML = html;
                })
            })
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            attachFollowEvents();
        });

        function attachFollowEvents() {
            document.querySelectorAll('.followForms').forEach(followForm => {
                followForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const followFormId = followForm.dataset.userId;
                    const url = followForm.action;
                    const formData = new FormData(followForm);

                    let response = await fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    });

                    let follower = await response.text();
                    document.getElementById("followers").innerHTML = follower;

                    // 🔁 Réattache les événements sur les nouveaux formulaires
                    attachFollowEvents();
                });
            });
        }
    </script>

<!--     <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelectorAll('.followFormsPosts').forEach(followFormPost =>{
                followFormPost.addEventListener('submit', async function(e){
                    e.preventDefault();

                    let url = followFormPost.action;

                    let formData = new FormData(followFormPost);

                    let response = await fetch(url, {
                        method:'POST',
                        body:formData,
                        headers:{
                            'X-Requested-With':'XMLHttpRequest',
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        }
                    });
                })
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelectorAll('.DeletefollowPosts').forEach(deletefollowPost =>{
                deletefollowPost.addEventListener('submit', async function(e){
                    e.preventDefault();

                    let url = deletefollowPost.action;

                    let response = await fetch(url,{
                        method:'DELETE',
                        body:formData,
                        headers:{
                            'X-Requested-With':'XMLHttpRequest',
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        }
                    })
                })
            }
        })
    </script> -->

</body>
</html>