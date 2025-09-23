<!-- Left Sidebar - Course Outline -->
            
                <div class="flex flex-col h-full justify-between flex-grow p-4 overflow-hidden">
                    <nav class="flex-1 space-y-2">
                        <a href="{{route('admin.dashboard')}}"
                            class="sidebar-item active flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-dashboard-line ri-lg"></i>
                            </div>
                            <span>Tableau de bord</span>
                        </a>
                        <a href="{{route('admin.gestionUser')}}" data-readdy="true"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-user-line ri-lg"></i>
                            </div>
                            <span>Utilisateurs</span>
                        </a>
                        <a href="{{route('admin.courseContent')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-book-open-line ri-lg"></i>
                            </div>
                            <span>Cours</span>
                        </a>
                        <a href="{{route('admin.certif')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-medal-line ri-lg"></i>
                            </div>
                            <span>Certifications</span>
                        </a>
                        <a href="{{route('admin.jobs')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-briefcase-line ri-lg"></i>
                            </div>
                            <span>Offres d'emploies</span>
                        </a>
                        <a href="{{route('feedback')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-message-2-line ri-lg"></i>
                            </div>
                            <span>Feedbacks</span>
                        </a>

                        <a href="{{route('revenus')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-money-euro-circle-line ri-lg"></i>
                            </div>
                            <span>Revenus</span>
                        </a>
                        <a href="{{route('admin.orders')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-earth-line ri-lg"></i>
                            </div>
                            <span>Partie sociale</span>
                        </a>
<!--                         <a href="autres.html"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-settings-line ri-lg"></i>
                            </div>
                            <span>Paramètres</span>
                        </a> -->
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
