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
    /* --- PETIT MOBILE (moins de 480px) --- */
    @media screen and (max-width: 479px){
    .btnModify{
        width: 100%;
    }
    .MainForm{
        width: 100%;
    }
    .MediaPart{
        display: flex;
        flex-direction: column;
    }
}
</style>

<body class="bg-background min-h-screen lg:overflow-hidden md:overflow-hidden sm:overflow-hidden xs:overflow-hidden">


    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->
        <header
            class="h-16 backdrop-filter backdrop-blur-sm absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">


                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black">
                    <div class="flex-1 justify-between w-full flex overflow-hidden" style="height: 100%;">
                        <main class="postContent w-full flex justify-center items-center relative overflow-y-auto px-2 py-6" style="height: 100%;">
                            <div class="sm:w-full lg:w-3/5 h-96 flex justify-center items-center">
                               {{-- Form principal : update post --}}
                                <form class="MainForm bg-primary bg-opacity-20 rounded-md p-2 w-full flex-col" 
                                      method="post"
                                      action="{{ route('social.updatePost', $post) }}" 
                                      enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-col ">
                                        <h1 class="text-2xl font-semibold py-2">Modification de votre post</h1>

                                        <div class="flex-1 flex-col text-gray-900 dark:text-gray-100 
                                                    bg-white bg-opacity-30 rounded-lg px-2 py-2 text-sm">
                                            <textarea name="content"
                                                      placeholder="What's on your mind? Share your learning journey..."
                                                      class="h-40 w-full flex-1 bg-transparent text-gray-900 dark:text-gray-100 px-4 py-3 m-0 text-sm">{{ $post->content }}</textarea>
                                        </div>

                                        @php
                                            $postMedia = $post->medias->where('type', 'post');
                                        @endphp

                                        <div class="contentt flex items-center justify-start flex-wrap p-2 gap-2">
                                            @foreach($postMedia as $media)
                                                <div class="relative flex items-start gap-1">
                                                    @if(pathinfo($media->path, PATHINFO_EXTENSION) === 'mp4')
                                                        <video src="{{ asset('storage/' . $media->path) }}" 
                                                               controls 
                                                               class="w-20 h-20 object-cover rounded-md"></video>
                                                    @else
                                                        <img src="{{ asset('storage/' . $media->path) }}" 
                                                             class="w-20 h-20 object-cover rounded-md">
                                                    @endif

                                                    {{-- Bouton qui cible un form externe --}}
                                                    <button type="submit" form="delete-media-{{ $media->id }}" 
                                                            class="absolute top-0 right-0 backdrop-filter backdrop-blur-sm p-1 rounded-full cursor-pointer">
                                                        <i class="ri-close-line ri-lg text-black"></i>
                                                    </button>
                                                </div>
                                            @endforeach

                                            <div class="content flex items-center justify-start flex-wrap p-2 gap-2"></div>
                                        </div>
                                    </div>

                                    <div class="MediaPart flex  items-center justify-between mt-4 pt-4 border-t border-gray-700">
                                        <div class="flex space-x-6">
                                            <label for="photo" class="cursor-pointer flex items-center px-3 py-1.5 dark:text-white rounded-button text-sm text-gray-700">
                                                <i class="ri-image-line mr-2"></i>Photos
                                                <input type="file" name="path[]" accept="image/*" class="hidden" id="photo" multiple>
                                            </label>

                                            <label for="video" class="cursor-pointer flex items-center px-3 py-1.5 dark:text-white rounded-button text-sm text-gray-700">
                                                <i class="ri-video-line mr-2"></i>vidéos
                                                <input type="file" name="path[]" accept="video/*" class="hidden" id="video" multiple>
                                            </label>
                                        </div>

                                        <button type="submit"
                                                class="btnModify bg-primary text-white px-6 py-2 rounded-full text-sm hover:bg-opacity-80">
                                            Modifier
                                        </button>
                                    </div>
                                </form>

                                {{-- Forms de suppression à part --}}
                                @foreach($postMedia as $media)
                                    <form method="post" action="{{ route('DeleteMedia', $media) }}" id="delete-media-{{ $media->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endforeach


                            </div>
                        </main>
                    </div>
                </main>
            </div>
        </div>
    </div>


    @include('layouts.pop')


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/formateur/mesCours.js"></script>


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
                    container.className = 'relative flex items-start gap-1';

                    // Si c'est une image
                    if (file.type.startsWith('image/')) {
                        const img = document.createElement('img');
                        img.src = src;
                        img.className = 'w-20 h-20 object-cover rounded-md';
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
                    closeBtn.className = 'absolute top-0 right-0 backdrop-filter backdrop-blur-sm p-1 rounded-full cursor-pointer';
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
</body>

</html>