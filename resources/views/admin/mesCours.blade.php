<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des cours | Administrateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/admin/dashboard.css"> -->
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
                @include('admin.layouts.leftSideBar')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden" id="mobileSidebar">
                @include('admin.layouts.mobileBar')
                </div>

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    
                        <div class="mt-6 flex items-center justify-between">
                            <div class="">
                                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Gestion des Cours</h1>
                                <p class="text-gray-500 mt-1">Gérez tous les cours disponibles sur la plateforme</p>
                            </div>
                            <div>
                                <button
                                    class="flex items-center px-4 py-2 bg-primary text-white rounded-button hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                    <a href="{{route('admin.course')}}">Gérer les cours</a>
                                </button>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Total des cours</p>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">247</h3>
                                        <div class="flex items-center mt-2 text-sm">
                                            <span class="text-green-600 flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                    <i class="ri-arrow-up-line"></i>
                                                </div>
                                                12%
                                            </span>
                                            <span class="text-gray-500 ml-2">vs mois précédent</span>
                                        </div>
                                    </div>
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-500">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-book-open-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Cours actifs</p>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">189</h3>
                                        <div class="flex items-center mt-2 text-sm">
                                            <span class="text-green-600 flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                    <i class="ri-arrow-up-line"></i>
                                                </div>
                                                8%
                                            </span>
                                            <span class="text-gray-500 ml-2">vs mois précédent</span>
                                        </div>
                                    </div>
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100 text-green-500">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-check-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Total des étudiants</p>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">15,482</h3>
                                        <div class="flex items-center mt-2 text-sm">
                                            <span class="text-green-600 flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                    <i class="ri-arrow-up-line"></i>
                                                </div>
                                                24%
                                            </span>
                                            <span class="text-gray-500 ml-2">vs mois précédent</span>
                                        </div>
                                    </div>
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-purple-100 text-purple-500">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Cours en révision</p>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mt-1">12</h3>
                                        <div class="flex items-center mt-2 text-sm">
                                            <span class="text-green-600 flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                    <i class="ri-arrow-up-line"></i>
                                                </div>
                                                18%
                                            </span>
                                            <span class="text-gray-500 ml-2">vs mois précédent</span>
                                        </div>
                                    </div>
                                    <div
                                        class="w-12 h-12 flex items-center justify-center rounded-full bg-amber-100 text-amber-500">
                                        <div class="w-6 h-6 flex items-center justify-center">
                                            <i class="ri-file-pdf-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Charts Section -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Inscriptions mensuelles</h2>
                                    <div class="flex space-x-2">
                                        <button
                                            class="px-3 py-1 text-xs bg-primary bg-opacity-10 text-primary rounded-full whitespace-nowrap">Cette
                                            année</button>
                                        <button
                                            class="px-3 py-1 text-xs text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">Année
                                            précédente</button>
                                    </div>
                                </div>
                                <div id="enrollments-chart" class="w-full h-72"></div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Répartition par catégorie</h2>
                                    <div class="flex space-x-2">
                                        <button
                                            class="px-3 py-1 text-xs bg-primary bg-opacity-10 text-primary rounded-full whitespace-nowrap">Tous</button>
                                        <button
                                            class="px-3 py-1 text-xs text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">Actifs</button>
                                    </div>
                                </div>
                                <div id="categories-chart" class="w-full h-72"></div>
                            </div>
                        </div>

                        <!-- Filters and Actions -->
                        <div class="bg-primary bg-opacity-20 rounded shadow-sm p-6 mt-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4 md:mb-0">Liste des cours</h2>
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <a href="{{route('admin.courseCreate')}}">
                                        <button
                                        class="flex items-center px-4 py-2 bg-primary text-white rounded-button hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center mr-2">
                                            <i class="ri-add-line"></i>
                                        </div>
                                        Ajouter un cours
                                    </button>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-4 mb-6">
                                <div class="flex flex-wrap gap-3">
                                    <div class="relative">
                                        <select class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-button text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                            <option>All</option>
                                            <option>Actif</option>
                                            <option>En révision</option>
                                            <option>inactif</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                       <select class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-button text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                            <option>Toute Catégorie</option>
                                            <option>Actif</option>
                                            <option>En révision</option>
                                            <option>inactif</option>
                                        </select>
                                    </div>
                                    <!-- <div class="relative">
                                        <button
                                            class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-button text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                            <div class="w-4 h-4 flex items-center justify-center mr-2">
                                                <i class="ri-calendar-line"></i>
                                            </div>
                                            Date
                                            <div class="w-4 h-4 flex items-center justify-center ml-2">
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </button>
                                    </div> -->
                                    <!-- <div class="relative">
                                        <button
                                            class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-button text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 whitespace-nowrap">
                                            <div class="w-4 h-4 flex items-center justify-center mr-2">
                                                <i class="ri-sort-desc"></i>
                                            </div>
                                            Trier par
                                            <div class="w-4 h-4 flex items-center justify-center ml-2">
                                                <i class="ri-arrow-down-s-line"></i>
                                            </div>
                                        </button>
                                    </div> -->
                                </div>
                            </div>

                            <!-- Courses Table -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-primary bg-opacity-20 rounded-md">
                                        <tr>
                                            <th class="px-4 py-3 text-left">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" id="select-all">
                                                    <span class="checkbox-mark"></span>
                                                </label>
                                            </th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Cours</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Formateur</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Catégorie</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Inscrits</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Note</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Statut</th>
                                            <th
                                                class="px-4 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" bg-opacity-10 divide-y divide-gray-200">
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-4 py-4">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" class="select-row">
                                                    <span class="checkbox-mark"></span>
                                                </label>
                                            </td>
                                            <td class="px-4 py-4">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-12 w-16 rounded bg-blue-100 overflow-hidden">
                                                        <img src="storage/media/chat.jpg"
                                                            alt="Développement Web" class="h-full w-full object-cover">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-gray-900 dark:text-gray-100">Développement Web Avancé
                                                        </div>
                                                        <div class="text-xs text-gray-500 mt-1">15 modules • 32 heures</div>
                                                        <div class="text-xs text-gray-500 mt-1">Mis à jour le 25/06/2025</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img class="h-8 w-8 rounded-full object-cover"
                                                        src="storage/media/chat.jpg"
                                                        alt="Thomas Dubois">
                                                    <div class="ml-2 text-sm text-gray-900 dark:text-gray-100">Thomas Dubois</div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Développement</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                                1,245
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-4 h-4 flex items-center justify-center text-amber-500">
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span class="ml-1 text-sm text-gray-900 dark:text-gray-100">4.8/5</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Actif</span>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm">
                                                <div class="flex space-x-2">
                                                   <a href="{{route('admin.courseDetail')}}">
                                                        <button
                                                        class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                   </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="flex flex-col sm:flex-row justify-between items-center mt-6">
                                <div class="text-sm text-gray-500 mb-4 sm:mb-0">
                                    Affichage de 1 à 7 sur 247 cours
                                </div>
                                <div class="flex items-center space-x-1">
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-500 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">Précédent</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button bg-primary text-white hover:bg-primary/90 whitespace-nowrap">1</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-700 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">2</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-700 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">3</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-700 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">storage.</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-700 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">35</button>
                                    <button
                                        class="px-3 py-1 border border-gray-300 rounded-button text-gray-700 hover:bg-white hover:bg-opacity-10 whitespace-nowrap">Suivant</button>
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
    <script src="storage/js_style/admin/mesCours.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script>

    </script>
</body>

</html>