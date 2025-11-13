<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SkillHustle | Home</title>
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

                                @include('social.components.lastpost')

                                @include('social.components.posts')

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
            <aside class="sideBarNotification hidden lg:w-96 sm:w-full backdrop-filter backdrop-blur-md p-6 dark:border-gray-800">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                    <i class="ri-close"></i>
                    Recent Notifications
                </h2>
                    <livewire:notifications-list />
               
            </aside>



            <!-- Right Sidebar - message -->


            <aside class="absolute hidden top-0 bottom-0 right-0 overflow-hidden z-50 sideBarMessage backdrop-filter backdrop-blur-2xl dark:border-gray-800">
                @include('layouts.msg')
            </aside>

            
        </div>
    </div>

    <div class="searchModalPhone absolute md:hidden lg:hidden xs:hidden hidden w-full top-0 z-50 flex justify-center backdrop-filter backdrop-blur-md"
        style="height: 100%;">
            <livewire:search-global-phone-mode />
    </div> 

    <div id="shareModal"
        class="absolute hidden w-full top-0 z-50 flex items-center justify-center backdrop-filter backdrop-blur-2xl"
        style="height: 100%;">
        <div id="shareModalContent" class="lg:w-2/5 bg-primary bg-opacity-10 rounded-md">
            <div class="flex items-center p-3">
                <div class="flex w-full items-center justify-start">
                    <div class="w-10 h-10 rounded-full bg-blue-100 bg-opacity-80 flex items-center justify-center text-blue-600">
                        <i class="ri-share-line"></i>
                    </div>

                    <h3 class="text-lg font-semibold ml-3">Partager</h3>
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

                            @include('social.components.post')

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
        document.addEventListener('DOMContentLoaded', function(){
            const searchBtn = document.querySelector('.searchBtn');
            const searchModalPhone = document.querySelector('.searchModalPhone');
            const searchBtnBack = document.querySelector('.searchBtnBack');

            searchBtn.addEventListener('click', function(){
                searchModalPhone.classList.remove('hidden')
            });

            searchBtnBack.addEventListener('click', function(){
                if (!searchModalPhone.classList.contains('hidden')) {
                    searchModalPhone.classList.add('hidden')
                }
            })
        })
    </script>

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
            pop.style.display ='none';
            console.log('hbdrgfvedhr');
            @if (session('success') || session('message_notif')) {
                pop.style.display ='flex';

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

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const deletedPost = document.querySelectorAll(".deletedPost");
            const confirmDeleteModal = document.querySelectorAll('.confirmDeleteModal');
            const confirmDeleteModalBack = document.querySelectorAll('.confirmDeleteModalBack');
            const actionMenu = document.querySelectorAll('.actionMenu');
            const postMenu = document.querySelectorAll('.postMenu');

            deletedPost.forEach(del => {
                del.addEventListener('click', function(){
                    actionMenu.forEach(action =>{
                        action.classList.add('hidden');
                    })

                    confirmDeleteModal.forEach(confirm =>{
                        confirm.classList.remove('hidden')
                        postMenu.forEach(post =>{
                            post.style.width ='400px';
                            post.style.width ='all 0.3s'
                        })
                    })
                })
            });

            confirmDeleteModalBack.forEach(modalBack =>{
                modalBack.addEventListener('click', function(){
                    confirmDeleteModal.forEach(confirm =>{
                        confirm.classList.add('hidden')
                        postMenu.forEach(post =>{
                            post.style.width ='200px';
                            post.style.width ='all 0.3s'
                        })
                    })

                    actionMenu.forEach(action =>{
                        action.classList.remove('hidden');
                    })
                })
            })
        })
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const posts = document.querySelectorAll('.post');
            console.log('Nombre de posts trouvés :', posts.length);

            // Récupère le token CSRF dans le meta tag (nécessaire pour Laravel)
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const observer = new IntersectionObserver((entries) => {
                console.log('IntersectionObserver déclenché !'); // 

                entries.forEach(entry => {
                     console.log('Entry target :', entry.target);
                    if (entry.isIntersecting) {
                        const postId = entry.target.dataset.postId;

                        // Lance un timer de 5 secondes
                        const timer = setTimeout(() => {
                            fetch(`/vues/${postId}`, { 
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': token,      // ajoute le token
                                    'Content-Type': 'application/json'
                                },
                                credentials: 'same-origin',
                                body: JSON.stringify({ post_id: postId })
                            });

                            observer.unobserve(entry.target); // stoppe l’observation après enregistrement
                        }, 5000);

                        //  Stocke l'identifiant du timer pour pouvoir l'annuler si besoin
                        entry.target.dataset.timerId = timer;

                    } else {
                        //  Si le post n'est plus visible avant 5s → on annule le timer
                        const timerId = entry.target.dataset.timerId;
                        if (timerId) {
                            clearTimeout(timerId);
                            delete entry.target.dataset.timerId;
                        }
                    }
                });
            }, {
                threshold: 0.5 // au moins 50 % du post doit être visible
            });

            posts.forEach(post => observer.observe(post));
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // 🔹 Gestion du bouton "Suivre"
        document.querySelectorAll('.followFormsPosts').forEach(followFormPost => {
            followFormPost.addEventListener('submit', async function (e) {
                e.preventDefault();

                const url = followFormPost.action;
                const formData = new FormData(followFormPost);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }
                });

                // if (response.ok) {
                //     // 🔄 Optionnel : changer le bouton immédiatement sans recharger
                //     followFormPost.innerHTML = `
                //         <button type="submit" class="px-3 py-2 bg-gray-400 rounded-full">Suivi</button>
                //     `;
                // } else {
                //     console.error('Erreur lors du suivi');
                // }
            });
        });


        // 🔹 Gestion du bouton "Ne plus suivre"
        document.querySelectorAll('.DeletefollowPosts').forEach(deletefollowPost => {
            deletefollowPost.addEventListener('submit', async function (e) {
                e.preventDefault();

                const url = deletefollowPost.action;
                const formData = new FormData(deletefollowPost); // ✅ il manquait ça !

                const response = await fetch(url, {
                    method: 'POST', // ⚠️ on reste en POST mais on ajoute _method=DELETE
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }
                });

                // if (response.ok) {
                //     // 🔄 Optionnel : changer le bouton immédiatement
                //     deletefollowPost.innerHTML = `
                //         <button type="submit" class="px-3 py-2 bg-primary rounded-full">Suivre</button>
                //     `;
                // } else {
                //     console.error('Erreur lors de la suppression du suivi');
                // }
            });
        });
    });
</script>


<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        async function loadNotifications() {
            try {
                let response = await fetch('/notifications', {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                if (response.ok) {
                    let html = await response.text();
                    document.getElementById('notificationsContent').innerHTML = html;
                }
            } catch (error) {
                console.error(error);
            }
        }

        // Charge une première fois
        loadNotifications();

        // Recharge toutes les 10 secondes (modifiable)
        setInterval(loadNotifications, 3000);
    });
</script> -->

@livewireScripts
</body>

</html>