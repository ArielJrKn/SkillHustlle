
                    <div class="p-4 flex items-center justify-between border-b border-gray-700">
                        <h1 class="text-xl font-['Pacifico'] text-gray-800 dark:text-white">logo</h1>
                        <button type="button" class="text-gray-300 hover:text-white focus:outline-none"
                            id="closeMobileMenu">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-close-line ri-lg"></i>
                            </div>
                        </button>
                    </div>
                    <div class="flex flex-col justify-between h-5/6 flex-grow p-4 overflow-y-auto">
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
