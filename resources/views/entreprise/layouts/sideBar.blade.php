
    <div class="flex flex-col h-full justify-between flex-grow p-4 overflow-hidden">
        <nav class="flex-1 space-y-2">
            <a href="{{route('entreprise.dashboard')}}"
                class="sidebar-item active flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-dashboard-line ri-lg"></i>
                </div>
                <span>Tableau de bord</span>
            </a>
            <a href="{{route('entreprise.jobs')}}" data-readdy="true"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-briefcase-line"></i>
                </div>
                <span>Jobs</span>
            </a>
            <a href="{{route('entreprise.candidates')}}"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-user-line"></i>
                </div>
                <span>Candidates</span>
            </a>
            <a href="{{route('social')}}"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-earth-line ri-lg"></i>
                </div>
                <span>Partie sociale</span>
            </a>
            <a href="{{route('entreprise.edit')}}"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-settings-line ri-lg"></i>
                </div>
                <span>Paramètres</span>
            </a>
        </nav>

        <div class="mt-auto pt-4 border-t border-gray-700">
            <a href="{{route('social.index')}}"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-logout-box-line ri-lg"></i>
                </div>
                <span>Déconnexion</span>
            </a>
        </div>
    </div>



<!-- <a href="certif.html"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-medal-line ri-lg"></i>
                </div>
                <span>Partenariats</span>
            </a>
             <a href="offres.html"
                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                <div class="w-6 h-6 flex items-center justify-center mr-3">
                    <i class="ri-briefcase-line ri-lg"></i>
                </div>
                <span>Offres d'emploies</span>
            </a> -->