<!-- Left Sidebar - Course Outline -->
                <div class="flex flex-col h-full justify-between flex-grow p-4 overflow-hidden">
                    <nav class="flex-1 space-y-2">
                        <a href="{{route('students.dashboard')}}"
                            class="sidebar-item active flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-dashboard-line ri-lg"></i>
                            </div>
                            <span>Tableau de bord</span>
                        </a>
                        <a href="{{route('students.courseCatalogue')}}" data-readdy="true"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-book-open-line ri-lg"></i>
                            </div>
                            <span>Mes Cours</span>
                        </a>
                        <a href="{{route('students.ressources')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-archive-line ri-lg"></i>
                            </div>
                            <span>Resources</span>
                        </a>
                        <a href="{{route('students.certificate')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-medal-line ri-lg"></i>
                            </div>
                            <span>Certifications</span>
                        </a>
<!--                         <a href="{{route('students.exercices')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-brain-line ri-lg"></i>
                            </div>
                            <span>Exercices</span>
                        </a> -->
                        
                        <a href="{{route('students.favoris')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-star-line ri-lg"></i>
                            </div>
                            <span>Favoris</span>
                        </a>
                        <a href="{{route('social')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-earth-line ri-lg"></i>
                            </div>
                            <span>Partie sociale</span>
                        </a>
                        <a href="{{route('students.edit')}}"
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