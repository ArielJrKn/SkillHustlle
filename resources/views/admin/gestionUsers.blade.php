<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs | Administrateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/gestionUsers.css">
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
                    <!-- Users Management Content -->
                    
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Utilisateurs actifs</h3>
                                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-primary">
                                        <i class="ri-user-line"></i>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">2,845</p>
                                        <div class="flex items-center mt-1">
                                            <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                                <i class="ri-arrow-up-line"></i>
                                            </div>
                                            <span class="text-xs font-medium text-green-500">+12.5%</span>
                                            <span class="text-xs text-gray-900 dark:text-gray-100 ml-1">vs mois dernier</span>
                                        </div>
                                    </div>
                                    <div class="h-10 w-20">
                                        <div id="active-users-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Utilisateurs inactifs</h3>
                                    <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                        <i class="ri-user-unfollow-line"></i>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">421</p>
                                        <div class="flex items-center mt-1">
                                            <div class="w-4 h-4 flex items-center justify-center text-red-500">
                                                <i class="ri-arrow-up-line"></i>
                                            </div>
                                            <span class="text-xs font-medium text-red-500">+3.8%</span>
                                            <span class="text-xs text-gray-900 dark:text-gray-100 ml-1">vs mois dernier</span>
                                        </div>
                                    </div>
                                    <div class="h-10 w-20">
                                        <div id="inactive-users-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Bar -->
                        <div class="bg-primary bg-opacity-20 p-4 rounded-lg shadow-sm mb-6">
                            <div class="flex flex-wrap items-center justify-between gap-3">
                                <div class="flex flex-wrap items-center gap-3">
                                    <button id="add-user-btn" class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-button hover:bg-primary/90 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1.5">
                                                <i class="ri-user-add-line"></i>
                                            </div>
                                            <span>Ajouter un utilisateur</span>
                                        </div>
                                    </button>
                                    
                                    <div class="relative">
                                        <button class="filter-button px-4 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 bg-primary bg-opacity-20 rounded-button hover:bg-white hover:bg-opacity-10 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1.5">
                                                    <i class="ri-filter-3-line"></i>
                                                </div>
                                                <span>Filtrer</span>
                                                <div class="w-4 h-4 flex items-center justify-center ml-1.5">
                                                    <i class="ri-arrow-down-s-line"></i>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="filter-dropdown w-56 mt-1 bg-primary bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-lg shadow-lg p-2">
                                            <div class="p-2">
                                                <h4 class="text-xs font-semibold text-gray-900 dark:text-gray-100 uppercase mb-2">Rôle</h4>
                                                <div class="space-y-1">
                                                    <label class="flex items-center">
                                                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                                        <span class="ml-2 text-sm text-gray-500">Administrateur</span>
                                                    </label>
                                                    <label class="flex items-center">
                                                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                                        <span class="ml-2 text-sm text-gray-500">Formateur</span>
                                                    </label>
                                                    <label class="flex items-center">
                                                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                                        <span class="ml-2 text-sm text-gray-500">Étudiant</span>
                                                    </label>
                                                </div>
                                                
                                                <h4 class="text-xs font-semibold text-gray-900 dark:text-gray-100 uppercase mt-4 mb-2">Statut</h4>
                                                <div class="space-y-1">
                                                    <label class="flex items-center">
                                                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                                        <span class="ml-2 text-sm text-gray-500">Actif</span>
                                                    </label>
                                                    <label class="flex items-center">
                                                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                                        <span class="ml-2 text-sm text-gray-500">Inactif</span>
                                                    </label>
                                                </div>
                                                
                                                <h4 class="text-xs font-semibold text-gray-900 dark:text-gray-100 uppercase mt-4 mb-2">Date d'inscription</h4>
                                                <div class="space-y-2">
                                                    <div>
                                                        <label class="text-xs text-gray-900 dark:text-gray-100">De</label>
                                                        <input type="date" class="w-full mt-1 px-3 py-1.5 text-sm border border-gray-300 rounded-button focus:outline-none focus:ring-2 focus:ring-primary">
                                                    </div>
                                                    <div>
                                                        <label class="text-xs text-gray-900 dark:text-gray-100">À</label>
                                                        <input type="date" class="w-full mt-1 px-3 py-1.5 text-sm border border-gray-300 rounded-button focus:outline-none focus:ring-2 focus:ring-primary">
                                                    </div>
                                                </div>
                                                
                                                <div class="flex justify-between mt-4 pt-2 border-t border-gray-100">
                                                    <button class="px-3 py-1.5 text-xs font-medium text-gray-700 hover:bg-gray-100 rounded-button whitespace-nowrap">Réinitialiser</button>
                                                    <button class="px-3 py-1.5 text-xs font-medium text-white bg-primary rounded-button hover:bg-primary/90 whitespace-nowrap">Appliquer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="relative">
                                        <button class="filter-button px-4 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 bg-primary bg-opacity-20 rounded-button hover:bg-white hover:bg-opacity-10 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-4 h-4 flex items-center justify-center mr-1.5">
                                                    <i class="ri-sort-asc"></i>
                                                </div>
                                                <span>Trier</span>
                                                <div class="w-4 h-4 flex items-center justify-center ml-1.5">
                                                    <i class="ri-arrow-down-s-line"></i>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="filter-dropdown w-56 mt-1 bg-primary bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-lg shadow-lg p-2">
                                            <div class="p-2 space-y-1">
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Nom (A-Z)</button>
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Nom (Z-A)</button>
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Date d'inscription (récent)</button>
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Date d'inscription (ancien)</button>
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Statut (actif d'abord)</button>
                                                <button class="w-full text-left px-3 py-1.5 text-sm text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-20 rounded-button">Statut (inactif d'abord)</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Users Table -->
                        <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden">
                            <div class="overflow-x-auto custom-scrollbar">
                                <table class="min-w-full">
                                    <thead class="bg-primary bg-opacity-20">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                <div class="flex items-center">
                                                    <span>Utilisateur</span>
                                                    <button class="ml-1 w-4 h-4 flex items-center justify-center text-gray-400">
                                                        <i class="ri-arrow-up-s-line"></i>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                <div class="flex items-center">
                                                    <span>Email</span>
                                                    <button class="ml-1 w-4 h-4 flex items-center justify-center text-gray-400">
                                                        <i class="ri-arrow-up-down-line"></i>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                <div class="flex items-center">
                                                    <span>Rôle</span>
                                                    <button class="ml-1 w-4 h-4 flex items-center justify-center text-gray-400">
                                                        <i class="ri-arrow-up-down-line"></i>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                <div class="flex items-center">
                                                    <span>Inscription</span>
                                                    <button class="ml-1 w-4 h-4 flex items-center justify-center text-gray-400">
                                                        <i class="ri-arrow-up-down-line"></i>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                <div class="flex items-center">
                                                    <span>Statut</span>
                                                    <button class="ml-1 w-4 h-4 flex items-center justify-center text-gray-400">
                                                        <i class="ri-arrow-up-down-line"></i>
                                                    </button>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-primary bg-opacity-10">
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-primary">
                                                        <span class="text-sm font-medium">SM</span>
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Sophie Marceau</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 dark:text-gray-100">sophie.marceau@example.com</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">Administrateur</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 dark:text-gray-100">12 juin 2025</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="switchMode" id="themeToggle">
                                                    <div class="switchMode-circle"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex justify-end space-x-2">
                                                    <a href="{{route('admin.userDetail')}}">
                                                        <button class="w-8 h-8 flex items-center justify-center text-gray-900 dark:text-gray-100 hover:text-primary hover:bg-blue-50 rounded-full">
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
                            <div class="px-6 py-4 flex items-center justify-between">
                                <div class="flex-1 flex justify-between sm:hidden">
                                    <button class="relative inline-flex items-center px-4 py-2 text-sm font-medium rounded-button text-gray-700 bg-primary hover:bg-white hover:bg-opacity-10 whitespace-nowrap">
                                        Précédent
                                    </button>
                                    <button class="ml-3 relative inline-flex items-center px-4 py-2 text-sm font-medium rounded-button text-gray-700 bg-primary hover:bg-white hover:bg-opacity-10 whitespace-nowrap">
                                        Suivant
                                    </button>
                                </div>
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-900 dark:text-gray-100">
                                            Affichage de <span class="font-medium">1</span> à <span class="font-medium">7</span> sur <span class="font-medium">42</span> utilisateurs
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="relative z-0 inline-flex rounded-button shadow-sm -space-x-px" aria-label="Pagination">
                                            <button class="relative inline-flex items-center px-2 py-2 rounded-l-button border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                                <span class="sr-only">Précédent</span>
                                                <i class="ri-arrow-left-s-line"></i>
                                            </button>
                                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary text-sm font-medium text-white">
                                                1
                                            </button>
                                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary text-sm font-medium text-gray-700 hover:bg-gray-50">
                                                2
                                            </button>
                                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary text-sm font-medium text-gray-700 hover:bg-gray-50">
                                                3
                                            </button>
                                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary text-sm font-medium text-gray-700">
                                                storage.
                                            </span>
                                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary text-sm font-medium text-gray-700 hover:bg-gray-50">
                                                6
                                            </button>
                                            <button class="relative inline-flex items-center px-2 py-2 rounded-r-button border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                                <span class="sr-only">Suivant</span>
                                                <i class="ri-arrow-right-s-line"></i>
                                            </button>
                                        </nav>
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

    <!-- autre modales -->
    <!-- Add User Modal -->
    <div id="add-user-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-dark bg-opacity-50 backdrop-filter backdrop-blur-sm" aria-hidden="true">
                <div class="absolute inset-0"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-black bg-opacity-50 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-transparent dark:bg-white dark:bg-opacity-10 px-4 pt-5 pb-4 sm:p-6 sm:pb-4 backdrop-filter backdrop-blur-lg">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                                Ajouter un nouvel utilisateur
                            </h3>
                            <div class="mt-4 space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Prénom</label>
                                        <input type="text" name="first-name" id="first-name" class="mt-1 outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Nom</label>
                                        <input type="text" name="last-name" id="last-name" class="mt-1 outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Email</label>
                                    <input type="email" name="email" id="email" class="mt-1 outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="role" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Rôle</label>
                                    <div class="relative mt-1">
                                        <select id="role" name="role" class="outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                            <option value="admin">Administrateur</option>
                                            <option value="teacher">Formateur</option>
                                            <option value="student">Étudiant</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="password" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Mot de passe</label>
                                    <input type="password" name="password" id="password" class="mt-1 outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="confirm-password" class="block text-sm font-medium text-gray-900 dark:text-gray-100">Confirmer le mot de passe</label>
                                    <input type="password" name="confirm-password" id="confirm-password" class="mt-1 outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary">
                                </div>
                                <div class="flex items-center">
                                    <input id="active" name="active" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="active" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                                        Activer le compte immédiatement
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-button border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                        Ajouter l'utilisateur
                    </button>
                    <button type="button" id="close-modal" class="mt-3 w-full inline-flex justify-center rounded-button border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                        Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <div class="w-6 h-6 flex items-center justify-center text-red-600">
                                <i class="ri-error-warning-line"></i>
                            </div>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Supprimer l'utilisateur
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible et toutes les données associées seront définitivement supprimées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-button border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                        Supprimer
                    </button>
                    <button type="button" id="close-delete-modal" class="mt-3 w-full inline-flex justify-center rounded-button border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">
                        Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script id="modal-controls" src="storage/js_style/admin/gestionUsers.js"></script>
</body>

</html>