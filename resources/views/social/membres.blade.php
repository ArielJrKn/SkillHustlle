<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Membres</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
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
    <style>
        .element {
            width: 100%;
            height: 50%;
            position: absolute;
            background: inherit;
            backdrop-filter: blur(64px); /* Flou maximum */
            mask-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 70%);
            -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 70%);
        }

/* Dégradé noir par-dessus pour l'opacité */
.element::after {
     content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 40%);
}
    </style>
</head>

<body class="bg-background min-h-screen">

    <!-- Loading Bar -->
    <div class="progress-bar"></div>

    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->
        <header class="h-16 backdrop-filter backdrop-blur-sm absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
        @include('layouts.header')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Left Sidebar - Course Outline -->
            <aside class="pt-16 w-20 bg-white dark:bg-black flex flex-col lg:flex hidden md:flex items-center justify-between py-6 space-y-8">
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
                    <div class="flex-1 justify-between w-full flex flex-col overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold">Mes Connections</h2>
                        </div>

                        <div class="w-full h-full flex flex-wrap items-center justify-center">
                            <div class="gap-5 w-full h-full flex flex-wrap items-center justify-center">
                                <div class="flex flex-col relative">
                                    <a href="{{route('social.userProfilDetail')}}">
                                        <div class="w-96 h-96  rounded-lg">
                                            <img src="storage/media/chat.jpg" class="w-96 h-96 rounded-lg object-cover">
                                        </div>
                                    </a>

                                    <div class=" element p-3 max-w-96 absolute bottom-0 left-0 rounded-b-lg backdrop-filter backdrop-blur-lg"></div>

                                    <div class="p-3 w-full absolute bottom-0 left-0 rounded-b-lg"> 
                                        <h3 class="text-lg font-semibold text-white">Thomas</h3>

                                        <p class="text-xs py-1 text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="text-sm text-primary py-1">Computer Science Professor</p>
                                        <div class="flex items-center justify-between gap-2 text-white">
                                            <button class="flex items-center justify-center bg-primary w-3/4 p-2 rounded-full">
                                                <i class="ri-user-add-line ri-lg"></i>
                                                <h4 class="ml-2">Suivre</h4>
                                            </button>

                                            <button class="startMsg flex items-center justify-center backdrop-filter backdrop-blur-lg bg-black bg-opacity-10 dark:bg-white dark:bg-opacity-10 w-1/4 p-2 py-3 rounded-full">
                                                <i class="ri-message-3-line ri-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col relative">
                                    <a href="{{route('social.userProfilDetail')}}">
                                        <div class="w-96 h-96  rounded-lg">
                                            <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20confident%20young%20woman%20with%20shoulder%20length%20brown%20hair%2C%20wearing%20business%20casual%20attire%2C%20modern%20office%20background%2C%20natural%20lighting%2C%20friendly%20professional%20smile&width=40&height=40&seq=profile-avatar-main&orientation=squarish" class="w-96 h-96 rounded-lg object-cover">
                                        </div>
                                    </a>

                                    <div class=" element p-3 max-w-96 absolute bottom-0 left-0 rounded-b-lg backdrop-filter backdrop-blur-lg"></div>

                                    <div class="p-3 max-w-96 absolute bottom-0 left-0 rounded-b-lg"> 
                                        <h3 class="text-lg font-semibold text-white">Thomas</h3>

                                        <p class="text-xs py-1 text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p class="text-sm text-primary py-1">Computer Science Professor</p>
                                        <div class="flex items-center justify-between gap-2 text-white">
                                            <button class="flex items-center justify-center bg-primary w-3/4 p-2 rounded-full">
                                                <i class="ri-user-add-line ri-lg"></i>
                                                <h4 class="ml-2">Suivre</h4>
                                            </button>

                                            <button class="startMsg flex items-center justify-center backdrop-filter backdrop-blur-lg bg-black bg-opacity-10 dark:bg-white dark:bg-opacity-10 w-1/4 p-2 py-3 rounded-full">
                                                <i class="ri-message-3-line ri-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <aside class="RightSideBar backdrop-filter backdrop-blur-lg z-50 hidden h-full pb-16 fixed right-0 p-6 space-y-6 overflow-y-auto">
                @include('social.layouts.rightSideBar')                
            </aside>

            <!-- Right Sidebar - Notifications -->
            <aside class="sideBarNotification hidden w-90 backdrop-filter backdrop-blur-2xl p-6 dark:border-gray-800">
                @include('layouts.notifications')
            </aside>

            <!-- Right Sidebar - message -->
            <aside class="absolute hidden top-0 bottom-0 right-0 overflow-hidden z-50 sideBarMessage backdrop-filter backdrop-blur-2xl dark:border-gray-800">
                @include('layouts.msg')
            </aside>

        </div>    
    </div>

    <!-- ajout d'un modal ici-->



    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/index.js"></script>

    <script>
            document.addEventListener('DOMContentLoaded', function () {
                const startMsg = document.querySelectorAll('.startMsg');
                const sideBarStartMsg = document.querySelector('.sideBarMessage');
                const section2StartMsg = document.querySelector('.section2');
                const section1StartMsg = document.querySelector('.section1');

                startMsg.forEach(sm => {
                    sm.addEventListener('click', function(){
                        sideBarStartMsg.classList.toggle('hidden');
                        // section2StartMsg.classList.remove('hidden');
                        // section1StartMsg.classList.add('hidden');
                    })
                })
            });
        </script>
</body>

</html>