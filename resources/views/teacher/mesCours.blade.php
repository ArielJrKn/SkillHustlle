<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes cours | Formateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
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
            <aside class="pt-16 w-80 bg-white dark:bg-darkSurface overflow-y-auto dark:border-gray-800 hidden md:block md:w-60">
                @include('teacher.layouts.sideBar')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden" id="mobileSidebar">
                @include('teacher.layouts.sideBarMobile')
                </div>

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    <div class="max-w-7xl mx-auto">
                        <!-- Page Header -->
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Mes cours</h1>
                                <p class="text-gray-500 mt-1">Gérez vs cours et suivez leur progression</p>
                            </div>
                            <div class="mt-4 md:mt-0">
                                <a href="{{route('teacher.createCourse')}}">
                                    <button class="flex items-center px-4 py-2 bg-primary text-white rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
                                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="ri-add-line"></i>
                                        </div>
                                        <span>Nouveau cours</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Courses Grid -->
                        <div id="coursesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 mb-8">


                            <!-- Course Card 2 -->
                            <div class="course-card bg-primary bg-opacity-20 dark:text-white text-black card rounded-lg shadow-lg overflow-hidden">
                                <div class="relative">
                                    <img class="w-full h-40 object-cover object-top" src="https://readdy.ai/api/search-image?query=data%20science%20visualization%20with%20colorful%20charts%20and%20graphs%2C%20python%20code%20in%20background%2C%20professional%20data%20analysis%20environment%2C%20clean%20workspace%2C%20high%20quality%20educational%20content&width=400&height=225&seq=102&orientation=landscape" alt="Data Science pour Débutants">
                                    <div class="absolute top-3 right-3 card-actions">
                                        <div class="relative">
                                            <button class="course-menu-btn bg-white bg-opacity-50 rounded-full p-2 text-white hover:bg-opacity-80 transition-all">
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-more-2-fill"></i>
                                                </div>
                                            </button>
                                            <div class="course-menu hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg backdrop-filter backdrop-blur-sm border border-gray-500 z-10 dropdown-menu">
                                                <div class="py-1">
                                                    <a href="{{route('teacher.courseEdit')}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-edit-line"></i>
                                                            </div>
                                                            <span>Modifier</span>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('teacher.courseDetail')}}" data-readdy="true" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-eye-line"></i>
                                                            </div>
                                                            <span>Voir les détails</span>
                                                        </div>
                                                    </a>
                                                    
                                                    <a href="#" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                                                        <div class="flex items-center">
                                                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </div>
                                                            <span>Supprimer</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-center mb-2">
                                        <span class="category-badge p-2 rounded-lg bg-[#4F46E5] bg-opacity-20 text-[#4F46E5]">Data Science</span>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-500 mb-1">Data Science pour Débutants</h3>
                                    <div class="flex items-center text-gray-400 text-sm mb-3">
                                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                                            <i class="ri-user-line"></i>
                                        </div>
                                        <span>614 étudiants</span>
                                        <span class="mx-2">•</span>
                                        <div class="rating">
                                            <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <span class="ml-1">4.7</span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex items-center justify-between text-sm mb-1">
                                            <span class="text-gray-400">Progression</span>
                                            <span class="text-gray-300 font-medium">100%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-value" style="width: 100%"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between text-sm text-gray-400">
                                        <span>Mis à jour le 01/07/2025</span>
                                        <span class="text-green-500 font-medium">Publié</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    <!-- Pagination -->
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between bg-primary bg-opacity-20 dark:text-white text-black shadow-xl rounded-lg p-4">
                        <div class="flex items-center mb-4 md:mb-0">
                            <span class="text-sm dark:text-gray-100 text-gray-900 mr-2">Afficher</span>
                            <div class="relative">
                                <select class="bg-gray-100 bg-opacity-20 dark:text-gray-100 text-gray-900 border-none text-gray-300 rounded pr-8 py-1 pl-2 appearance-none focus:outline-none focus:ring-2 focus:ring-primary text-sm">
                                    <option>8</option>
                                    <option>16</option>
                                    <option>24</option>
                                    <option>48</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <div class="w-4 h-4 flex items-center justify-center text-gray-400">
                                        <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="text-sm dark:text-gray-100 text-gray-900 ml-2">éléments par page</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="text-sm dark:text-gray-100 text-gray-900 mr-4">Page 1 sur 3</span>
                            <div class="flex space-x-1">
                                <button class="w-8 h-8 flex items-center justify-center roundedbg-gray-100 bg-opacity-30 dark:text-gray-100 text-gray-900 hover:bg-opacity-80 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </div>
                                </button>
                                <button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-white">1</button>
                                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-100 bg-opacity-20 dark:text-gray-100 text-gray-900 hover:bg-opacity-80">2</button>
                                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-100 bg-opacity-20 dark:text-gray-100 text-gray-900 hover:bg-opacity-80">3</button>
                                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-100 bg-opacity-20 dark:text-gray-100 text-gray-900 hover:bg-opacity-80">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

            <!-- Right Sidebar - Notifications -->
            <aside class="sideBarNotification hidden w-90 backdrop-filter backdrop-blur-2xl p-6 dark:border-gray-800">
                @include('layouts.notifications')
            </aside>

            <!-- Right Sidebar - message -->
            <aside class="absolute hidden top-0 bottom-0 right-0 overflow-hidden z-50 sideBarMessage backdrop-filter backdrop-blur-2xl dark:border-gray-800">
                @include('layouts.msg')
            </aside>

    </div>


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/formateur/mesCours.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>


</body>
</html>