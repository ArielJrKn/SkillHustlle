<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Formateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/dashboard.css">
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
                                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Tableau de bord</h1>
                                <p class="text-gray-400 mt-1">Bienvenue, Thomas. Voici un aperçu de votre activité.</p>
                            </div>
                            <div class="mt-4 md:mt-0 flex space-x-3">
                                <a href="{{route('teacher.createCourse')}}" data-readdy="true" class="flex items-center px-4 py-2 bg-primary text-white rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
                                    <div class="w-5 h-5 flex items-center justify-center mr-2">
                                        <i class="ri-add-line"></i>
                                    </div>
                                    <span>Nouveau cours</span>
                                </a>
                            </div>
                        </div>
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <!-- Courses Card -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-gray-800 dark:text-white text-sm font-medium">Cours créés</p>
                                        <h2 class="text-3xl font-bold mt-1 text-gray-800 dark:text-white">24</h2>
                                    </div>
                                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-primary bg-opacity-20 text-primary">
                                        <i class="ri-book-open-line ri-lg"></i>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-gray-800 dark:text-gray-800 dark:text-white">Progression</span>
                                        <span class="text-gray-300 font-medium">75%</span>
                                    </div>
                                    <div class="mt-1 progress">
                                        <div class="progress-value" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    <span class="text-green-500 font-medium">12%</span>
                                    <span class="text-gray-800 dark:text-gray-800 dark:text-white ml-1">vs mois précédent</span>
                                </div>
                            </div>
                            <!-- Students Card -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-800 dark:text-white text-sm font-medium">Étudiants inscrits</p>
                                        <h2 class="text-3xl font-bold mt-1 text-gray-800 dark:text-white">1,842</h2>
                                    </div>
                                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#4F46E5] bg-opacity-20 text-[#4F46E5]">
                                        <i class="ri-user-line ri-lg"></i>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-gray-800 dark:text-gray-800 dark:text-white">Objectif mensuel</span>
                                        <span class="text-gray-300 font-medium">92%</span>
                                    </div>
                                    <div class="mt-1 progress">
                                        <div class="progress-value" style="width: 92%"></div>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    <span class="text-green-500 font-medium">24%</span>
                                    <span class="text-gray-800 dark:text-gray-800 dark:text-white ml-1">vs mois précédent</span>
                                </div>
                            </div>
                            <!-- Pending Courses Card -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-800 dark:text-white text-sm font-medium">En attente de validation</p>
                                        <h2 class="text-3xl font-bold mt-1 text-gray-800 dark:text-white">3</h2>
                                    </div>
                                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-500 bg-opacity-20 text-yellow-500">
                                        <i class="ri-time-line ri-lg"></i>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-gray-800 dark:text-gray-800 dark:text-white">Temps d'attente moyen</span>
                                        <span class="text-gray-300 font-medium">2.3 jours</span>
                                    </div>
                                    <div class="mt-1 progress">
                                        <div class="progress-value" style="width: 40%"></div>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center text-red-500">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    <span class="text-red-500 font-medium">5%</span>
                                    <span class="text-gray-800 dark:text-gray-800 dark:text-white ml-1">vs mois précédent</span>
                                </div>
                            </div>
                            <!-- Feedback Card -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-gray-800 dark:text-gray-800 dark:text-white text-sm font-medium">Feedbacks reçus</p>
                                        <h2 class="text-3xl font-bold mt-1 text-gray-800 dark:text-white">487</h2>
                                    </div>
                                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-teal-500 bg-opacity-20 text-teal-500">
                                        <i class="ri-message-2-line ri-lg"></i>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between text-sm">
                                        <span class="text-gray-800 dark:text-gray-800 dark:text-white">Note moyenne</span>
                                        <span class="text-gray-300 font-medium">4.7/5</span>
                                    </div>
                                    <div class="mt-1 progress">
                                        <div class="progress-value" style="width: 94%"></div>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    <span class="text-green-500 font-medium">8%</span>
                                    <span class="text-gray-800 dark:text-gray-800 dark:text-white ml-1">vs mois précédent</span>
                                </div>
                            </div>
                        </div>
                        <!-- Charts and Recent Feedback -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Activity Chart -->
                            <div class="card rounded-lg shadow-lg p-5 lg:col-span-2">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Activité des étudiants</h3>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 text-sm bg-primary bg-opacity-20 text-primary rounded-full whitespace-nowrap">7 jours</button>
                                        <button class="px-3 py-1 text-sm bg-[#3A3A3A] text-gray-300 rounded-full whitespace-nowrap">30 jours</button>
                                        <button class="px-3 py-1 text-sm bg-[#3A3A3A] text-gray-300 rounded-full whitespace-nowrap">90 jours</button>
                                    </div>
                                </div>
                                <div class="chart-container" id="activityChart"></div>
                            </div>
                            <!-- Recent Feedback -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Feedbacks récents</h3>
                                    <a href="{{route('feedback')}}">
                                        <button class="text-primary hover:text-opacity-80 text-sm font-medium whitespace-nowrap">Voir tout</button>
                                    </a>
                                </div>
                                <div class="space-y-4 max-h-[400px] overflow-y-auto pr-1">
                                    <!-- Feedback Item 1 -->
                                    <div class="p-3 bg-gray-500 rounded-lg">
                                        <div class="flex items-start">
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/chat.jpg" alt="Photo d'étudiant">
                                            <div class="ml-3 flex-1">
                                                <div class="flex items-center justify-between">
                                                    <h4 class="text-sm font-medium text-white">Sophie Marceau</h4>
                                                    <span class="text-xs text-white">Aujourd'hui</span>
                                                </div>
                                                <p class="text-xs text-gray-800 dark:text-white mt-0.5">Développement Web Avancé</p>
                                                <div class="rating mt-1">
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-300 mt-2">Cours exceptionnel ! Les explications sur React étaient très claires et les exercices pratiques m'ont beaucoup aidée.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feedback Item 2 -->
                                    <div class="p-3 bg-[#323232] rounded-lg">
                                        <div class="flex items-start">
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/chat.jpg" alt="Photo d'étudiant">
                                            <div class="ml-3 flex-1">
                                                <div class="flex items-center justify-between">
                                                    <h4 class="text-sm font-medium text-gray-800 dark:text-white">Antoine</h4>
                                                    <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white">Hier</span>
                                                </div>
                                                <p class="text-xs text-gray-800 dark:text-gray-800 dark:text-white mt-0.5">UX/UI Design Fondamentaux</p>
                                                <div class="rating mt-1">
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-300 mt-2">Très bon cours, j'aurais aimé plus d'exemples concrets sur les applications mobiles, mais le contenu sur les wireframes était excellent.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feedback Item 3 -->
                                    <div class="p-3 bg-[#323232] rounded-lg">
                                        <div class="flex items-start">
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/chat.jpg" alt="Photo d'étudiant">
                                            <div class="ml-3 flex-1">
                                                <div class="flex items-center justify-between">
                                                    <h4 class="text-sm font-medium text-gray-800 dark:text-white">Émilie Laurent</h4>
                                                    <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white">Il y a 2 jours</span>
                                                </div>
                                                <p class="text-xs text-gray-800 dark:text-gray-800 dark:text-white mt-0.5">Data Science pour Débutants</p>
                                                <div class="rating mt-1">
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-300 mt-2">J'ai beaucoup appris sur Python et les bibliothèques d'analyse de données. Les projets pratiques étaient vraiment utiles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feedback Item 4 -->
                                    <div class="p-3 bg-[#323232] rounded-lg">
                                        <div class="flex items-start">
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/chat.jpg" alt="Photo d'étudiant">
                                            <div class="ml-3 flex-1">
                                                <div class="flex items-center justify-between">
                                                    <h4 class="text-sm font-medium text-gray-800 dark:text-white">Pierre Moreau</h4>
                                                    <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white">Il y a 3 jours</span>
                                                </div>
                                                <p class="text-xs text-gray-800 dark:text-gray-800 dark:text-white mt-0.5">Marketing Digital</p>
                                                <div class="rating mt-1">
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-300 mt-2">Contenu intéressant mais certaines sections sur les réseaux sociaux semblent un peu datées. J'aimerais plus d'informations sur TikTok et Instagram.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feedback Item 5 -->
                                    <div class="p-3 bg-[#323232] rounded-lg">
                                        <div class="flex items-start">
                                            <img class="w-10 h-10 rounded-full object-cover" src="storage/media/chat.jpg" alt="Photo d'étudiant">
                                            <div class="ml-3 flex-1">
                                                <div class="flex items-center justify-between">
                                                    <h4 class="text-sm font-medium text-gray-800 dark:text-white">Claire</h4>
                                                    <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white">Il y a 5 jours</span>
                                                </div>
                                                <p class="text-xs text-gray-800 dark:text-gray-800 dark:text-white mt-0.5">JavaScript Avancé</p>
                                                <div class="rating mt-1">
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <div class="w-4 h-4 flex items-center justify-center rating-star filled">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                </div>
                                                <p class="text-sm text-gray-300 mt-2">Excellent cours ! Les explications sur les promesses et async/await étaient particulièrement claires. Je me sens beaucoup plus à l'aise avec JS maintenant.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course Performance -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
                            <!-- Course Completion Chart -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Taux de complétion</h3>
                                    <button class="text-gray-800 dark:text-gray-800 dark:text-white hover:text-gray-800 dark:text-white">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-more-2-fill"></i>
                                        </div>
                                    </button>
                                </div>
                                <div class="chart-container" id="completionChart"></div>
                            </div>
                            <!-- Course Ratings -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Notes moyennes</h3>
                                    <button class="text-gray-800 dark:text-gray-800 dark:text-white hover:text-gray-800 dark:text-white">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-more-2-fill"></i>
                                        </div>
                                    </button>
                                </div>
                                <div class="chart-container" id="ratingsChart"></div>
                            </div>
                            <!-- Top Courses -->
                            <div class="card rounded-lg shadow-lg p-5">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Cours populaires</h3>
                                    <button class="text-gray-800 dark:text-gray-800 dark:text-white hover:text-gray-800 dark:text-white">
                                        <div class="w-5 h-5 flex items-center justify-center">
                                            <i class="ri-more-2-fill"></i>
                                        </div>
                                    </button>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 flex items-center justify-center bg-primary bg-opacity-20 text-primary rounded-md">
                                            <i class="ri-code-line"></i>
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm font-medium text-gray-800 dark:text-white">JavaScript Avancé</h4>
                                                <span class="text-xs font-medium text-primary">4.9</span>
                                            </div>
                                            <div class="flex items-center mt-1">
                                                <div class="flex-1">
                                                    <div class="progress h-1">
                                                        <div class="progress-value" style="width: 95%"></div>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white ml-2">842 étudiants</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 flex items-center justify-center bg-[#4F46E5] bg-opacity-20 text-[#4F46E5] rounded-md">
                                            <i class="ri-database-2-line"></i>
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm font-medium text-gray-800 dark:text-white">Data Science pour Débutants</h4>
                                                <span class="text-xs font-medium text-primary">4.7</span>
                                            </div>
                                            <div class="flex items-center mt-1">
                                                <div class="flex-1">
                                                    <div class="progress h-1">
                                                        <div class="progress-value" style="width: 85%"></div>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white ml-2">614 étudiants</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 flex items-center justify-center bg-teal-500 bg-opacity-20 text-teal-500 rounded-md">
                                            <i class="ri-layout-line"></i>
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm font-medium text-gray-800 dark:text-white">UX/UI Design Fondamentaux</h4>
                                                <span class="text-xs font-medium text-primary">4.6</span>
                                            </div>
                                            <div class="flex items-center mt-1">
                                                <div class="flex-1">
                                                    <div class="progress h-1">
                                                        <div class="progress-value" style="width: 78%"></div>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white ml-2">523 étudiants</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 flex items-center justify-center bg-yellow-500 bg-opacity-20 text-yellow-500 rounded-md">
                                            <i class="ri-html5-line"></i>
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm font-medium text-gray-800 dark:text-white">Développement Web Avancé</h4>
                                                <span class="text-xs font-medium text-primary">4.5</span>
                                            </div>
                                            <div class="flex items-center mt-1">
                                                <div class="flex-1">
                                                    <div class="progress h-1">
                                                        <div class="progress-value" style="width: 72%"></div>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white ml-2">487 étudiants</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 flex items-center justify-center bg-red-500 bg-opacity-20 text-red-500 rounded-md">
                                            <i class="ri-advertisement-line"></i>
                                        </div>
                                        <div class="ml-3 flex-1">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm font-medium text-gray-800 dark:text-white">Marketing Digital</h4>
                                                <span class="text-xs font-medium text-primary">4.3</span>
                                            </div>
                                            <div class="flex items-center mt-1">
                                                <div class="flex-1">
                                                    <div class="progress h-1">
                                                        <div class="progress-value" style="width: 65%"></div>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-800 dark:text-gray-800 dark:text-white ml-2">376 étudiants</span>
                                            </div>
                                        </div>
                                    </div>
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
    </div>


<script src="storage/js_style/notif.js"></script>
<script src="storage/js_style/dark.js"></script>
<script src="storage/js_style/formateur/dashboard.js"></script>
<script src="storage/js_style/msg.js"></script>
</body>
</html>