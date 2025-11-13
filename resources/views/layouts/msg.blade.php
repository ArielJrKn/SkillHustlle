<style>
    .sideBarMessage{
        width: 30%;
    }
    @media screen and (max-width: 767px) and (min-width: 480px) {
    .sideBarMessage{
        width: auto;
    }
}

@media screen and (max-width: 1023px) and (min-width: 768px){
    .sideBarMessage{
        width: 100%;
    }
}

/*@media screen and (max-width: 1366px) and (min-width: 1024px){
    .sideBarMessage{
        width: 100%;
    }
}*/

@media screen and (max-width: 479px) {
    .sideBarMessage{
        width: 100%;
    }
}
.section3.active{
    transition: 0.3s;
    position: absolute;
    top: 10%;
}
</style>

<div>
    <!-- section 1 - list des conversations -->
    <div class="section1  backdrop-filter backdrop-blur-2xl h-full top-0 relative overscroll-x-none">
        <div
            class="header bg-opacity-50 backdrop-filter backdrop-blur-2xl z-50 p-4 w-full h-28 top-0 flex align-center justify-around flex-col">
            <div class="w-full flex align-center justify-between">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">
                    <i class="backMsg ri-arrow-left-line cursor-pointer"></i>
                    Message
                </h2>

                <div class="cursor-pointer flex align-center">
                    <div class="">
                        <i
                            class="addChat ri-add-line ri-lg  w-5 h-5 hover:bg-white hover:bg-opacity-30 backdrop-filter backdrop-blur-xl p-2 rounded-lg"></i>
                    </div>
                </div>
            </div>

            <div class="relative px-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                <input type="search"
                    class="bg-gray-100 text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-900 dark:text-white border-none text-sm rounded-full w-full pl-10 pr-4 py-2 focus:ring-2 focus:ring-primary"
                    placeholder="Rechercher une conversation">
            </div>
        </div>

        <div class="pt-0 px-2 w-full overflow-y-auto" style="height: 84%;">
            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-500">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>

            <div
                class="conversation bg-primary cursor-pointer hover:bg-opacity-50 transition bg-opacity-10 mb-2 p-2 rounded-md flex align-center">
                <div class="relative flex-shrink-0">
                    <img class="h-16 w-16 rounded-full object-cover"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">
                    <div
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                    </div>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-sm font-medium">Sophie Moreau</h3>
                        <span class="text-xs text-gray-300">10:25</span>
                    </div>
                    <p class="text-xs mt-1">Bonjour Madame, j'aurais besoin d'aide pour l'exercice 3 du
                        devoir de mathématiques...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 - Conversation détaillée -->
    <div class="section2 hidden overscroll-x-none">
        <div class="header p-2 flex justify-between items-center">
            <div class="text-md flex w-3/5 font-semibold text-gray-900 dark:text-white" style="align-items: center;">
                <i class="ri-arrow-left-line cursor-pointer" id="backListConversation"></i>
                <div class="ml-3 relative flex items-center">
                    <div class="flex items-center">
                        <img src="storage/media/chat.jpg" class="w-12 h-12 rounded-full object-cover">
                        <h2 class="ml-3">Sophie DuBois</h2>
                    </div>
                </div>
            </div>

            <div class="cursor-pointer flex" style="align-items: center;">
                <div class="">
                    <i id=""
                        class="settingChat ri-settings-line ri-lg  w-5 h-5 hover:bg-white hover:bg-opacity-30 backdrop-filter backdrop-blur-xl p-2 rounded-lg"></i>
                    <div class="userSetting hidden absolute right-0 mt-2 w-52 rounded-md shadow-lg bg-[#2D2D2D] border border-gray-700 z-50"
                        id="">
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Bloquer cet
                                utilisateur</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-red-500 hover:bg-red-900">Supprimer la
                                conversation </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 relative overflow-y-auto w-auto pb-20" style="height: 95vh;">
                <!-- time less -->
            <div class="flex justify-center p-2 text-xs backdrop-filter backdrop-blur-lg bg-gray-100 dark:bg-dark dark:bg-opacity-50 rounded-lg"
                style="align-items: center;">Aujourd'hui</div>

            <!-- receive msg -->
            <div class="text-sm">
                <div
                    class="bg-primary bg-opacity-40 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
            </div>

            <!-- sent msg -->
            <div class="text-sm flex flex-col justify-end " style="align-items: end;">
                <div
                    class="bg-primary bg-opacity-95 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="flex">
                    <div class="w-4 h-4 flex items-center justify-center">
                        <i class="ri-check-double-line text-blue-500"></i>
                    </div>
                    <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
                </div>
            </div>

            <!-- sent msg -->
            <div class="text-sm flex flex-col justify-end " style="align-items: end;">
                <div
                    class="bg-primary bg-opacity-95 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="flex">
                    <div class="w-4 h-4 flex items-center justify-center">
                        <i class="ri-check-double-line text-blue-500"></i>
                    </div>
                    <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
                </div>
            </div>

            <!-- receive msg -->
            <div class="text-sm">
                <div
                    class="bg-primary bg-opacity-40 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p class="text-sm mb-2">Je vous envoie une capture d'écran de mon travail. Voici où je
                        bloque :</p>
                    <div class="bg-gray-200 rounded-md p-2 flex items-center">
                        <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                            <i class="ri-file-image-line"></i>
                        </div>
                        <span class="text-xs text-gray-700">exercice3_capture.jpg</span>
                        <button class="ml-auto p-1 text-gray-500 hover:text-gray-700">
                            <div class="w-4 h-4 flex items-center justify-center">
                                <i class="ri-download-line"></i>
                            </div>
                        </button>
                    </div>
                </div>
                <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
            </div>

            <!-- sent msg -->
            <div class="text-sm flex flex-col justify-end " style="align-items: end;">
                <div
                    class="bg-primary bg-opacity-95 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p>Lorem </p>
                </div>
                <div class="flex">
                    <div class="w-4 h-4 flex items-center justify-center">
                        <i class="ri-check-double-line text-blue-500"></i>
                    </div>
                    <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
                </div>
            </div>

            <!-- receive msg -->
            <div class="text-sm">
                <div
                    class="bg-primary bg-opacity-40 backdrop-filter backdrop-blur-lg mt-2 p-2 rounded-lg" style="max-width: 70%;">
                    <p class="text-sm mb-2">Je vous envoie une capture d'écran de mon travail. Voici où je
                        bloque :</p>
                    <img class=" rounded-md mr-3"
                        src="storage/media/chat.jpg"
                        alt="Sophie Moreau">

                </div>
                <span class="text-xs text-gray-900 dark:text-gray-100">09:15</span>
            </div>
        </div>

        <div class="px-2 py-2 absolute z-50 w-full fixed bottom-0" style="height:auto;">
            <form class="flex items-end">
                <label type="button" for="mediaUpload"
                    class=" p-2 rounded-full text-gray-900 dark:text-gray-100 cursor-pointer hover:bg-gray-150 bg-gray-100 bg-opacity-40 backdrop-filter backdrop-blur-2xl mr-2">
                    <div class="w-6 h-6 flex items-center justify-center">
                        <i class="ri-attachment-2"></i>
                    </div>
                    <input type="file" name="" class="hidden" id="mediaUpload" multiple>
                </label>
                <div
                    class="flex-1 bg-gray-100 bg-opacity-40 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-primary focus-within:border-primary">
                    <div class="ReplyMsgContent hidden text-sm bg-primary bg-opacity-80 rounded-md w-full p-4">
                        <div>
                            <h2 class="text-sm">Kinkin Ariel</h2>
                        </div>
                        <div class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                    <div class="contentMediaMsg">
                    </div>
                    <input
                        class="message-input bg-transparent text-sm text-gray-800 w-full outline-none dark:text-white text-black"
                        contenteditable="true" placeholder="Écrivez votre message...">
                </div>
                <button type="button"
                    class="p-2 ml-2 text-gray-900 dark:text-gray-100 cursor-pointer hover:bg-gray-150 backdrop-filter backdrop-blur-2xl bg-gray-100 bg-opacity-40 rounded-full">
                    <div class="w-6 h-6 flex items-center justify-center">
                        <i class="ri-send-plane-fill"></i>
                    </div>
                </button>
            </form>

        </div>
    </div>

    <!-- section 3 - Ajout de nouvelle discussion ou création de groupe -->
    <div
        class="w-full section3 p-2 backdrop-filter backdrop-blur-2xl z-50 rounded-tl-lg rounded-tr-lg h-5/5">
        <div class="flex align-center justify-between" style="align-items: center;">
            <h2 class="ChangeToContinue text-sm">Sélectionner un utilisateur pour démarrer une conversation
            </h2>

            <i class="close ri-close-line cursor-pointer"></i>
        </div>

        <div class="relative hidden mt-2 lg:block">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                    <i class="ri-search-line"></i>
                </div>
            </div>
            <input type="search"
                class="bg-gray-100 text-black dark:text-white bg-opacity-10 dark:bg-dark dark:bg-opacity-30 text-gray-900 dark:text-white border-none text-sm rounded-full w-full pl-10 pr-4 py-2 focus:ring-2 focus:ring-primary"
                placeholder="Rechercher un utilisateur">
        </div>

        <form class="mt-2 overflow-y-auto" style="height: 65vh;">
            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class=" rounded-lg selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class="selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:bg-gray-200 hover:bg-opacity-20 transition flex border-b border-gray-100 border-opacity-50 p-2"
                style="align-items: center;">
                <input type="checkbox" name="" class="selectUser h-5 w-5">
                <div class="ml-2 flex align-center" style="align-items: center;">
                    <div class="relative flex-shrink-0">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="storage/media/chat.jpg"
                            alt="Sophie Moreau">
                        <div
                            class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white">
                        </div>
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex flex-col justify-between items-baseline">
                            <h3 class="text-sm font-medium">Sophie Moreau</h3>
                            <h4 class="text-xs font-medium">Etudiante</h3>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const mediaUpload = document.getElementById('mediaUpload');
    const contentMediaMsg = document.querySelector('.contentMediaMsg');
    let filesList = []; 

    mediaUpload.addEventListener('change', function (e) {
        const newFiles = Array.from(e.target.files);

        filesList.push(...newFiles);

        renderPreviews();
    });

    // 🧠 Fonction d’affichage
    function renderPreviews() {
        contentMediaMsg.innerHTML = ''; 

        filesList.forEach((media, index) => {
            const fileName = media.name;
            const fileExt = fileName.split('.').pop().toLowerCase();

            const imageExts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            const videoExts = ['mp4', 'webm', 'ogg'];
            const audioExts = ['mp3', 'wav', 'ogg'];
            const docsExts = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt'];

            const wrapper = document.createElement('div');
            wrapper.style.margin = '10px';
            wrapper.style.display = 'inline-block';
            wrapper.style.textAlign = 'center';
            wrapper.style.position = 'relative';

            const delBtn = document.createElement('span');
            delBtn.textContent = '×';
            delBtn.style.position = 'absolute';
            delBtn.style.top = '0';
            delBtn.style.right = '5px';
            delBtn.style.cursor = 'pointer';
            delBtn.style.fontSize = '18px';
            delBtn.style.color = 'red';
            delBtn.style.fontWeight = 'bold';
            delBtn.title = 'Supprimer ce fichier';
            delBtn.addEventListener('click', function () {
                filesList.splice(index, 1); 
                // document.querySelector('.section2').classList.remove('hidden');
                // renderPreviews(); 
            });

            wrapper.appendChild(delBtn);

            if (imageExts.includes(fileExt)) {
                const src = URL.createObjectURL(media);
                const img = document.createElement('img');
                img.src = src;
                img.style.width = '100px';
                img.style.height = '100px';
                img.style.objectFit = 'cover';
                img.style.borderRadius = '8px';
                wrapper.appendChild(img);
            }
            else if (videoExts.includes(fileExt)) {
                const src = URL.createObjectURL(media);
                const video = document.createElement('video');
                video.src = src;
                video.style.height = '100px';
                video.style.width = '100px';
                video.style.borderRadius = '8px';
                wrapper.appendChild(video);
            }
            else if (audioExts.includes(fileExt)) {
                const src = URL.createObjectURL(media);
                const audio = document.createElement('audio');
                audio.src = src;
                audio.controls = true;
                wrapper.appendChild(audio);
            }
            else if (docsExts.includes(fileExt)) {
                const iconWrapper = document.createElement('div');
                iconWrapper.style.width = '100px';
                iconWrapper.style.height = '100px';
                iconWrapper.style.display = 'flex';
                iconWrapper.style.alignItems = 'center';
                iconWrapper.style.justifyContent = 'center';
                iconWrapper.style.border = '2px dashed #aaa';
                iconWrapper.style.borderRadius = '8px';

                const i = document.createElement('i');
                i.classList.add('ri-file-line');
                i.style.fontSize = '40px';
                i.style.color = '#555';
                iconWrapper.appendChild(i);

                wrapper.appendChild(iconWrapper);
            }
            else {
                const warn = document.createElement('p');
                warn.textContent = ` Fichier non supporté: ${fileName}`;
                warn.style.color = 'red';
                warn.style.fontSize = '14px';
                wrapper.appendChild(warn);
            }

            const nameTag = document.createElement('p');
            nameTag.textContent = fileName;
            nameTag.style.fontSize = '12px';
            nameTag.style.color = '#555';
            wrapper.appendChild(nameTag);

            contentMediaMsg.appendChild(wrapper);
        });
    }
});
</script>