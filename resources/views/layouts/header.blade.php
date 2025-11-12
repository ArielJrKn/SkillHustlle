        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">

            <!-- Logo -->
            <div class="flex items-center">
                <button type="button"
                    class="text-gray-300 hover:text-white focus:outline-none lg:hidden md:hidden sm:block"
                    id="mobileMenuButton">
                    <div class="w-6 h-6 flex items-center justify-center">
                        <i class="ri-menu-line ri-lg"></i>
                    </div>
                </button>
                <span class=" sm:ml-4 text-2xl font-['Pacifico'] text-primary">logo</span>
            </div>

            <!-- Search & Actions -->
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <livewire:search-global />

                <div
                    class="searchBtn lg:hidden md:hidden sm:block relative w-10 h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-primary cursor-pointer">
                    <i class="ri-search-line text-xl"></i>
                </div>
                

                <!-- Theme Toggle -->
                <!-- <div class="switchMode" id="themeToggle">
                    <div class="switchMode-circle"></div>
                </div> -->

                <div
                    class=" relative w-10 h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-primary cursor-pointer">
                    <i id="theme" class="ri-sun-line text-xl"></i>
                </div>

                <!-- Notification Icon -->
                <livewire:notification-count />

                <div
                    class="btnMsg relative w-10 h-10 flex items-center justify-center text-gray-600 dark:text-gray-300 hover:text-primary cursor-pointer">
                    <i class="ri-message-3-line text-xl"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></span>
                </div>

                <!-- Profile Icon -->
                <div class="relative">
                    @auth
                    <button type="button" class="flex items-center focus:outline-none" id="userMenuButton">
                        <span class="hidden md:block mr-3 text-sm font-medium text-gray-800 dark:text-white">{{Auth::user()->name}}</span>
                        @if(Auth::user()->avatar === null)
                        <img class="h-8 w-8 rounded-full object-cover"
                            src="storage/media/avatar.jpg"
                            alt="Photo de profil">
                        @else
                        <img class="h-8 w-8 rounded-full object-cover"
                            src="{{Auth::user()->avatar}}"
                            alt="Photo de profil">
                        @endif
                    </button>
                    @endauth
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-[#2D2D2D] border border-gray-700 z-50"
                        id="userMenu">
                        <div class="py-1">
                            <a href="edit.html" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Profil</a>
                            <div class="border-t border-gray-700"></div>
                            <form method="post" action="{{route('logout')}}">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Déconnexion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script>
    // Dès que le DOM commence à se charger → lancer NProgress
    document.addEventListener("DOMContentLoaded", () => {
        NProgress.start();
    });

    // Quand tout est chargé (images, scripts, etc.) → arrêter
    window.addEventListener("load", () => {
        NProgress.done();
    });
    </script>
        