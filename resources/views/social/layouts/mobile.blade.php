<div class="p-4 flex items-center justify-between border-b border-gray-700">
                        <h1 class="text-xl font-['Pacifico'] text-gray-800 dark:text-white">logo</h1>
                        <button type="button" class="text-gray-300 hover:text-white focus:outline-none"
                            id="closeMobileMenu">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <i class="ri-close-line ri-lg"></i>
                            </div>
                        </button>
                    </div>
                    <div class="flex flex-col justify-between h-6/6 flex-grow p-4 overflow-y-auto">
                        <nav class="flex-1 space-y-2">
                        <a href="{{route('social.index')}}"
                            class="sidebar-item active flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-home-line text-xl"></i>
                            </div>
                            <span>Acceuil</span>
                        </a>
                        <a href="{{route('social.membres')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-group-line text-xl"></i>
                            </div>
                            <span>Membres</span>
                        </a>
                        <a href="{{route('social.cours')}}" data-readdy="true"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-book-open-line ri-lg"></i>
                            </div>
                            <span>Cours</span>
                        </a>

                        <a href="{{route('social.jobs')}}" data-readdy="true"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-briefcase-line ri-lg"></i>
                            </div>
                            <span>Jobs</span>
                        </a>
                        <a href="{{route('social.certification')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-medal-line ri-lg"></i>
                            </div>
                            <span>Certifications</span>
                        </a>

                        <a href="{{route('social.profil')}}"
                            class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                            <div class="w-6 h-6 flex items-center justify-center mr-3">
                                <i class="ri-user-line text-xl"></i>
                            </div>
                            <span>Paramètres</span>
                        </a>

                        <div class="flex flex-col text-sm gap-2">
                            Ici les pages respectifs pour chaque acteurs de la platformes
                             <a href="students/Student-Dashboard.html" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                                    Mode apprenant
                                </a>

                                <a href="formateur/dashboard.html" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                                    Mode formateur
                                </a>
                                <a href="recruit/dashboard.html" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                                    Mode entreprise
                                </a>
                                <a href="admin/dashboard.html" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                                    Mode administrateur
                                </a>
                        </div>
                    </nav>
                        <div class="mt-auto pt-4 border-t border-gray-700">
                            <a href="#"
                                class="sidebar-item flex items-center px-4 py-3 text-gray-800 dark:text-white rounded">
                                <div class="w-6 h-6 flex items-center justify-center mr-3">
                                    <i class="ri-logout-box-line ri-lg"></i>
                                </div>
                                <span>Déconnexion</span>
                            </a>
                        </div>
                    </div>