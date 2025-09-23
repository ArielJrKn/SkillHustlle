<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Home</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/carrousel.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/style.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
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
</style>

<body class="bg-background min-h-screen lg:overflow-hidden md:overflow-hidden sm:overflow-hidden xs:overflow-hidden">


    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->
        <header
            class="h-16 backdrop-filter backdrop-blur-sm absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.header')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Left Sidebar - Course Outline -->
            <aside
                class="pt-16 w-20 bg-white dark:bg-black flex flex-col lg:flex hidden md:flex items-center justify-between py-6 space-y-8">
                @include('social.layouts.sideBar')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden"
                    id="mobileSidebar">
                    @include('social.layouts.mobile')
                </div>

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black">
                    <div class="flex-1 justify-between w-full flex overflow-hidden">
                        <main class="postContent flex-1 h-full flex justify-start relative overflow-y-auto px-2 py-6">
                            <div class="max-w-2xl w-full relative h-full mx-auto space-y-6">
                                <form class="bg-primary bg-opacity-20 rounded-md p-6" method="post"
                                    action="{{route('createPost')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex items-center space-x-4">
                                        @auth
                                        <img src="{{Auth::user()->avatar}}" alt="Your Avatar"
                                            class="w-10 h-10 rounded-full object-cover">
                                        @endauth
                                        <div
                                            class="flex-1 flex-col text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-lg px-2 py-2 text-sm focus:outline-none focus:border-primary">
                                            <div class="content flex items-center justify-start flex-wrap">

                                            </div>

                                            <input type="text" name="content"
                                                placeholder="What's on your mind? Share your learning journey..."
                                                class="w-full flex-1 bg-transparent text-gray-900 dark:text-gray-100 rounded-full px-4 py-3 text-sm focus:outline-none focus:border-primary">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-700">
                                        <div class="flex space-x-6">
                                            <label type="button" for="photo"
                                                class="cursor-pointer flex items-center px-3 py-1.5 dark:text-white rounded-button text-sm text-gray-700 transition-colors whitespace-nowrap">
                                                <div
                                                    class="flex items-center space-x-2 text-sm text-gray-400 hover:text-primary !rounded-button whitespace-nowrap">
                                                    <i class="ri-image-line"></i>
                                                    <span>Photo</span>
                                                </div>
                                                <input type="file" name="path[]" accept="image/*" class="hidden"
                                                    id="photo" multiple>
                                            </label>

                                            <label type="button" for="video"
                                                class="cursor-pointer flex items-center px-3 py-1.5 dark:text-white rounded-button text-sm text-gray-700 transition-colors whitespace-nowrap">
                                                <div
                                                    class="flex items-center space-x-2 text-sm text-gray-400 hover:text-primary !rounded-button whitespace-nowrap">
                                                    <i class="ri-video-line"></i>
                                                    <span>video</span>
                                                </div>
                                                <input type="file" name="path[]" accept="video/*" class="hidden"
                                                    id="video" multiple>
                                            </label>
                                        </div>
                                        <button type="submit"
                                            class="bg-primary text-white px-6 py-2 rounded-full text-sm hover:bg-opacity-80 !rounded-button whitespace-nowrap">
                                            Post
                                        </button>
                                    </div>
                                </form>



                                <article class="bg-primary bg-opacity-20 rounded-md p-6"
                                    data-post-id="{{ $lastPost->id }}">
                                    <div class="flex items-center justify-between">
                                        <div class="flex align-center ">
                                            <img src="{{ $lastPost->users->avatar }}"
                                                class="w-10 h-10 rounded-full object-cover">
                                            <div class="flex ml-3 flex-col">
                                                <h3 class="font-semibold">{{$lastPost->users->name}}</h3>
                                                <p class="text-sm text-primary">Computer Science Professor</p>
                                            </div>
                                        </div>

                                        @if(Auth::id() === $lastPost->users->id)
                                        <div class="relative">
                                            <button class="course-menu-btn p-2 text-white hover:bg-opacity-30 rounded-full hover:bg-white transition-all">
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-more-2-fill"></i>
                                                </div>
                                            </button>
                                            <div class="course-menu hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                                                <div class="py-1">
                                                    <a href="{{route('social.editPost', $lastPost)}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-edit-line"></i>
                                                            </div>
                                                            <span>Modifier</span>
                                                        </div>
                                                    </a>
                                                    
                                                    <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </div>
                                                            <span>Supprimer</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="mt-4 bg">
                                        {{$lastPost->content}}
                                    </div>

                                    @php
                                    $postMedias = $lastPost->medias->where('type', 'post');
                                    @endphp

                                    @if($postMedias->count() > 1)
                                    <div class="flex-wrap w-full flex gap-2 mt-4 items-center justify-center">
                                        <div class="carousel">
                                            <div class="slides">
                                                @foreach($postMedias as $media)
                                                @if(pathinfo($media->path, PATHINFO_EXTENSION) === 'mp4')
                                                <video src="{{ asset('storage/' . $media->path) }}" controls autoplay
                                                    class="w-full h-full object-cover rounded-md"></video>
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
                                            class="w-full h-96 object-cover rounded-md"></video>
                                        @else
                                        <img src="{{ asset('storage/' . $media->path) }}"
                                            class="w-full h-64 object-cover rounded-md">
                                        @endif
                                        @endforeach
                                    </div>
                                    @endif



                                    <div class="mt-4 text-xs text-primary foot flex items-center justify-between">
                                        <div class="icone">
                                            <i
                                                class="like ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                            <i class="ri-chat-3-line comment bg-primary bg-opacity-20 px-4 py-2 rounded-md"
                                                data-post-id="{{ $lastPost->id }}"></i>
                                            <i class="ri-share-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                        </div>

                                        <div class="info_foot flex gap-2">
                                            <h2>1.2k likes </h2>
                                            <h2 class="hidden lg:flex md:flex">܀</h2>
                                            <h2 class="hidden lg:flex md:flex">{{$lastPost->comments->Count() }} comments</h2>
                                            <h2 class="hidden lg:flex md:flex">܀ </h2>
                                            <h2 class="hidden lg:flex md:flex">A l'instant</h2>
                                        </div>
                                    </div>

                                    <div class="commentBox" id="commentBox-{{ $lastPost->id }}">
                                        <div
                                            class="pt-4 mt-4 border-t border-6 border-primary w-full h-96 overflow-y-auto">
                                            @auth
                                            @if($lastPost->comments->Count() > 0)
                                            @foreach($lastPost->comments as $comment)
                                            <div
                                                class="{{ $comment->users->id === Auth::id() ? 'infoInComment flex items-start justify-end mt-4' : 'infoOutComment flex items-start mt-4' }}">

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
                                                    <div
                                                        class="ml-3 bg-primary bg-opacity-20 p-2 rounded-lg max-w-full">
                                                        <div class="flex gap-2 items-center">
                                                            <h3 class="text-sm font-bold">{{$comment->users->name}}</h3>
                                                            <h4 class="text-sm">
                                                                {{$comment->created_at->diffForHumans()}}</h4>
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

                                                    </div>

                                                    <div class="ml-3 flex mt-2 items-center gap-2">
                                                        <div
                                                            class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                            <i class="like ri-heart-line"></i>
                                                            <h4>123</h4>
                                                        </div>

                                                        @if(Auth::id() === $comment->user_id)
                                                        <div
                                                            class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                            <i class="like ri-edit-line"></i>
                                                            <h4>Modifier</h4>
                                                        </div>

                                                        <div
                                                            class="cursor-pointer hover:bg-red-900 hover:bg-opacity-90 flex gap-1 items-center bg-red-900 bg-opacity-70 px-2 py-1 rounded-full">
                                                            <i class="like ri-delete-bin-line text-red-400"></i>
                                                            <h4 class="text-red-400">Supprimer</h4>
                                                        </div>
                                                        @endif

                                                        <div>repondre</div>
                                                    </div>
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

                                        <form method="POST" action="{{route('createComment', $lastPost->id)}}"
                                            class="commentaireForm p-1 flex flex-col w-full justify-between items-center mt-4 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 text-gray-900 dark:text-gray-100 text-sm focus:outline-none focus:border-primary"
                                            data-post-id="{{ $lastPost->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="w-full contentDisplayed flex gap-1 flex-wrap"
                                                id="preview-{{ $lastPost->id }}">
                                            </div>

                                            <div class="w-full flex items-center justify-between">
                                                <div class=" flex items-center">
                                                    <label for="phtInput-{{ $lastPost->id }}" class="p-1">
                                                        <i class="ri-image-line ri-lg"></i>
                                                    </label>
                                                    <input type="file" name="path[]" accept="image/*" multiple
                                                        id="phtInput-{{ $lastPost->id }}" hidden>

                                                    <label for="vdoInput-{{ $lastPost->id }}" class="p-1">
                                                        <i class="ri-video-line ri-lg"></i>
                                                    </label>
                                                    <input type="file" name="path[]" accept="video/*" multiple
                                                        id="vdoInput-{{ $lastPost->id }}" hidden>
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



                                @foreach($posts as $post)

                                <article class="bg-primary bg-opacity-20 rounded-md p-6" data-post-id="{{ $post->id }}">
                                    <div class="flex items-center justify-between">
                                        <div class="flex align-center ">
                                            <img src="{{ $post->users->avatar }}"
                                                class="w-10 h-10 rounded-full object-cover">
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
                                            <div class="course-menu hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                                                <div class="py-1">
                                                    <a href="createCourse.html" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-edit-line"></i>
                                                            </div>
                                                            <span>Modifier</span>
                                                        </div>
                                                    </a>
                                                    
                                                    <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </div>
                                                            <span>Supprimer</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="icone">
                                            <i
                                                class="like ri-heart-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                            <i class="ri-chat-3-line comment bg-primary bg-opacity-20 px-4 py-2 rounded-md"
                                                data-post-id="{{ $post->id }}"></i>
                                            <i class="ri-share-line bg-primary bg-opacity-20 px-4 py-2 rounded-md"></i>
                                        </div>

                                        <div class="info_foot flex gap-2">
                                            <h2>1.2k likes </h2>
                                            <h2 class="hidden lg:flex md:flex">܀</h2>
                                            <h2 class="hidden lg:flex md:flex">4k comments</h2>
                                            <h2 class="hidden lg:flex md:flex">܀ </h2>
                                            <h2 class="hidden lg:flex md:flex">A l'instant</h2>
                                        </div>
                                    </div>

                                    <div class="commentBox" id="commentBox-{{ $post->id }}">
                                        <div
                                            class="pt-4 mt-4 border-t border-6 border-primary w-full h-96 overflow-y-auto">
                                            @auth
                                            @if($post->comments->Count() > 0)
                                            @foreach($post->comments as $comment)
                                            <div
                                                class="{{ $comment->users->id === Auth::id() ? 'infoInComment flex items-start justify-end mt-4' : 'infoOutComment flex items-start mt-4' }}">

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
                                                    <div
                                                        class="ml-3 bg-primary bg-opacity-20 p-2 rounded-lg max-w-full">
                                                        <div class="flex gap-2 items-center">
                                                            <h3 class="text-sm font-bold">{{$comment->users->name}}</h3>
                                                            <h4 class="text-sm">
                                                                {{$comment->created_at->diffForHumans()}}</h4>
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
                                                    </div>

                                                    <div class="ml-3 flex mt-2 items-center gap-2">
                                                        <div
                                                            class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                            <i class="like ri-heart-line"></i>
                                                            <h4>123</h4>
                                                        </div>

                                                        @if(Auth::id() === $comment->user_id)
                                                        <div
                                                            class="cursor-pointer hover:bg-primary hover:bg-opacity-60 transition-colors flex gap-1 items-center bg-primary bg-opacity-20 px-2 py-1 rounded-full">
                                                            <i class="like ri-edit-line"></i>
                                                            <h4>Modifier</h4>
                                                        </div>

                                                        <div
                                                            class="cursor-pointer hover:bg-red-900 hover:bg-opacity-90 flex gap-1 items-center bg-red-900 bg-opacity-70 px-2 py-1 rounded-full">
                                                            <i class="like ri-delete-bin-line text-red-400"></i>
                                                            <h4 class="text-red-400">Supprimer</h4>
                                                        </div>
                                                        @endif

                                                        <div>repondre</div>
                                                    </div>
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

                                @endforeach

                            </div>
                        </main>
                    </div>
                </main>
            </div>

            <aside
                class="RightSideBar backdrop-filter backdrop-blur-lg z-50 hidden h-full pb-16 fixed right-0 p-6 space-y-6 overflow-y-auto">
                @include('social.layouts.rightSideBar')
            </aside>

            <!-- Right Sidebar - Notifications -->
            <aside class="sideBarNotification hidden w-90 backdrop-filter backdrop-blur-2xl p-6 dark:border-gray-800">
                @include('layouts.notifications')
            </aside>

            <!-- Right Sidebar - message -->
            <aside
                class="absolute hidden top-0 bottom-0 w-90 right-0 overflow-hidden z-50 sideBarMessage backdrop-filter backdrop-blur-2xl dark:border-gray-800">
                @include('layouts.msg')
            </aside>

        </div>
    </div>

    <!-- ajout d'un modal ici-->
    <div id="messageModal"
        class="absolute hidden p-2 top-0 z-50 flex items-center justify-center backdrop-filter backdrop-blur-2xl"
        style="height: 100%;">
        <div class="lg:w-3/5 bg-white bg-opacity-10 p-4 rounded-md" id="message">
            <div class="flex items-center">
                <div
                    class="w-10 h-10 rounded-full bg-blue-100 bg-opacity-80 flex items-center justify-center text-blue-600">
                    <i class="ri-home-line"></i>
                </div>

                <h3 class="text-lg font-semibold ml-3">Bienvenu...</h3>
            </div>
            <div class="mt-2">
                <p class="text-lg text-gray-300">
                    {{session('message')}}
                </p>
            </div>

            <div class="w-full flex justify-end">
                <button type="button" onclick="closeModal()"
                    class="mt-3 flex justify-end rounded-button border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                    Annuler
                </button>
            </div>


        </div>
    </div>

    @include('layouts.pop')


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/formateur/mesCours.js"></script>

    <script src="{{asset('storage/js_style/index.js')}}"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const messageModal = document.getElementById('messageModal');
            const message = document.getElementById('message');

            @if (session('message'))
                messageModal.classList.remove('hidden')
            @endif
        });

        function closeModal() {
            messageModal.classList.add('hidden');
        }

        messageModal.addEventListener('click', function () {
            messageModal.classList.add('hidden');
        })
        message.addEventListener('click', function (e) {
            e.stopPropagation();
        })
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const pop = document.querySelector('.pop');
            const msgContentLaravel = document.querySelector('.msgContentLaravel');
            pop.remove();
            @if (session('success')) {
                setInterval(() => {
                    // Première animation : glisser de la droite
                    pop.style.right = '0'; // glisse de -50px à 0
                    pop.style.transition = 'right 0.3s ease'; // duréee du slide

                    // Quand la première animation est finie
                    pop.addEventListener('transitionend', function handler(e) {
                        if (e.propertyName === 'right') {
                            // On enlève l'ancien listener pour pas répéter
                            pop.removeEventListener('transitionend', handler);

                            // Deuxième animation : élargir + changer border-radius
                            setTimeout(() => {
                                pop.style.width = '400px';
                                pop.style.maxHeight = '20vh';
                                pop.style.minHeight = '8vh';
                                pop.style.borderRadius = '20px';
                                pop.style.transition = 'all 1s ease';
                                setTimeout(() => {


                                    msgContentLaravel.style.opacity = '1';
                                    msgContentLaravel.style.transition = 'opacity 0.5s ease';
                                }, 1000);
                            }, 1000);
                        }
                    });
                }, 500);

                // Disparaître après 3s (3000ms)
                setTimeout(() => {
                    pop.style.bottom = '-100px';
                    pop.style.transition = 'all 1s ease';
                    // pop.style.opacity = '0';     // on le rend invisible
                    // pop.style.transition = 'opacity 0.5s ease'; // transition douce
                }, 9000);

                // Si tu veux vraiment le retirer du DOM après fade out
                setTimeout(() => {
                    pop.remove();
                }, 9500);
            }
            @endif

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.commentaireForm').forEach(form => {
                const postId = form.dataset.postId;

                const phtBtn = document.getElementById('pht-' + postId);
                const vdoBtn = document.getElementById('vdo-' + postId);
                const phtInput = document.getElementById('phtInput-' + postId);
                const vdoInput = document.getElementById('vdoInput-' + postId);
                const previewContainer = document.getElementById('preview-' + postId);

                let media = [];

                phtInput.addEventListener('change', e => {
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
        document.addEventListener('DOMContentLoaded', function () {
            const photo = document.getElementById('photo');
            const video = document.getElementById('video');
            const photoInput = document.getElementById('photo');
            const videoInput = document.getElementById('video');
            const content = document.querySelector('.content');

            let mediaFiles = []; // stocke toutes les photos et vidéos

            // Quand on clique sur "Ajouter Photo" → on déclenche l'input photo
            photo.addEventListener('click', () => {
                photoInput.click();
            });

            // Quand on clique sur "Ajouter Vidéo" → on déclenche l'input vidéo
            video.addEventListener('click', () => {
                videoInput.click();
            });

            // Gestion ajout de photos
            photoInput.addEventListener('change', function (e) {
                const files = Array.from(e.target.files);
                mediaFiles.push(...files);
                displayMedia();
            });

            // Gestion ajout de vidéos
            videoInput.addEventListener('change', function (e) {
                const files = Array.from(e.target.files);
                mediaFiles.push(...files);
                displayMedia();
            });

            // Affichage des médias
            function displayMedia() {
                content.innerHTML = ''; // on vide avant de réafficher

                mediaFiles.forEach((file, index) => {
                    const src = URL.createObjectURL(file);

                    const container = document.createElement('div');
                    container.className = 'boss flex items-start gap-1 p-2';

                    // Si c'est une image
                    if (file.type.startsWith('image/')) {
                        const img = document.createElement('img');
                        img.src = src;
                        img.className = 'w-28 h-28 object-cover rounded-lg';
                        container.appendChild(img);
                    }
                    // Si c'est une vidéo
                    else if (file.type.startsWith('video/')) {
                        const video = document.createElement('video');
                        video.src = src;
                        video.className = 'w-28 h-28 object-cover rounded-lg';
                        container.appendChild(video);
                    }

                    // Bouton supprimer
                    const closeBtn = document.createElement('span');
                    closeBtn.className = 'bg-white p-1 rounded-full cursor-pointer';
                    closeBtn.innerHTML = '<i class="ri-close-line ri-lg"></i>';

                    closeBtn.addEventListener('click', function () {
                        mediaFiles.splice(index, 1); // supprime du tableau
                        displayMedia(); // rafraîchit l'affichage
                    });

                    container.appendChild(closeBtn);
                    content.appendChild(container);
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.comment').forEach(btn => {
                btn.addEventListener('click', function () {
                    const postId = btn.dataset.postId;
                    const box = document.getElementById('commentBox-' + postId);

                    if (box) {
                        btn.classList.toggle('active')
                        box.classList.toggle('active');
                    }
                });
            });
        });

    </script>

</body>

</html>