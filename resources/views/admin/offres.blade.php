<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'emploies | Administrateur</title>
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
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Modération des Offres d'Emploi</h2>
                        <p class="text-gray-500">Gérez et modérez les offres d'emploi publiées par les entreprises</p>
                    </div>

                    <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm mb-6">
                        <div class="p-2">
                            <div class="flex flex-wrap items-center gap-4">
                                
                                <div class="flex flex-wrap items-center">
                                    <select class="m-2 hidden lg:block md:block px-3 py-2 my-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                                        <option>Type de contrat</option>
                                        <option>CDI</option>
                                        <option>CDD</option>
                                        <option>Stage</option>
                                        <option>Freelance</option>
                                    </select>
                                    
                                    <select class="m-2  hidden lg:block md:block px-3 py-2 my-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                                        <option>Secteur d'activité</option>
                                        <option>Technologie</option>
                                        <option>Finance</option>
                                        <option>Marketing</option>
                                        <option>Ressources Humaines</option>
                                        <option>Vente</option>
                                    </select>
                                    
                                    <select class="m-2 hidden lg:block md:block Bpx-3 py-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                                        <option>Statut</option>
                                        <option>Publié</option>
                                        <option>En attente</option>
                                        <option>Rejeté</option>
                                    </select>
                                    
                                    <!-- <button class="px-4 py-2 my-2 text-gray-900 hover:text-gray-800 bg-primary text-sm font-medium !rounded-button whitespace-nowrap">
                                        Réinitialiser
                                    </button> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-2">
                            
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-gray-200">
                                            <th class="text-left py-3 px-4 font-medium text-gray-700 text-sm w-12"></th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-700 text-sm cursor-pointer hover:text-gray-900 dark:text-gray-100">
                                                <div class="flex items-center space-x-1">
                                                    <span>Entreprise</span>
                                                    <div class="w-4 h-4 flex items-center justify-center">
                                                        <i class="ri-arrow-up-down-line text-xs"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-700 text-sm cursor-pointer hover:text-gray-900 dark:text-gray-100">
                                                <div class="flex items-center space-x-1">
                                                    <span>Titre du poste</span>
                                                    <div class="w-4 h-4 flex items-center justify-center">
                                                        <i class="ri-arrow-up-down-line text-xs"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-700 text-sm cursor-pointer hover:text-gray-900 dark:text-gray-100">
                                                <div class="flex items-center space-x-1">
                                                    <span>Type</span>
                                                    <div class="w-4 h-4 flex items-center justify-center">
                                                        <i class="ri-arrow-up-down-line text-xs"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-700 text-sm cursor-pointer hover:text-gray-900 dark:text-gray-100">
                                                <div class="flex items-center space-x-1">
                                                    <span>Date de publication</span>
                                                    <div class="w-4 h-4 flex items-center justify-center">
                                                        <i class="ri-arrow-up-down-line text-xs"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-900 dark:text-gray-100 text-sm">Statut</th>
                                            <th class="text-right py-3 px-4 font-medium text-gray-900 dark:text-gray-100 text-sm">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="hover:bg-white hover:bg-opacity-10 transition-colors">
                                            <td class="py-4 px-4">
                                                <input type="checkbox" class="hidden row-checkbox">
                                                <label class="w-4 h-4 border-2 rounded cursor-pointer flex items-center justify-center border-primary transition-colors">
                                                    <div class="w-2 h-2 bg-primary rounded-sm opacity-0 transition-opacity"></div>
                                                </label>
                                            </td>
                                            <td class="py-4 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                        <span class="text-blue-500 font-semibold text-sm">TI</span>
                                                    </div>
                                                    <div>
                                                        <div class="font-medium text-gray-900 dark:text-gray-100">TechInnovate</div>
                                                        <div class="text-sm text-gray-500">Technologie</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-4">
                                                <div class="font-medium text-gray-900 dark:text-gray-100">Développeur Full Stack Senior</div>
                                                <div class="text-sm text-gray-500">Paris, France</div>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">CDI</span>
                                            </td>
                                            <td class="py-4 px-4 text-sm text-gray-500">15 Jan 2025</td>
                                            <td class="py-4 px-4">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">En attente</span>
                                            </td>
                                            <td class="py-4 px-4">
                                                <div class="flex items-center justify-end space-x-2">
                                                    <a href="{{route('admin.jobsDetail')}}">
                                                        <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-md transition-colors" title="Voir les détails">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    </a>
                                                    <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-green-500 hover:bg-green-50 rounded-md transition-colors" title="Valider">
                                                        <i class="ri-check-line"></i>
                                                    </button>
                                                    <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-md transition-colors" title="Rejeter">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-200">
                                <div class="text-sm text-gray-500">
                                    
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 border border-gray-300 rounded-md hover:bg-white hover:bg-opacity-10 disabled:opacity-50 !rounded-button whitespace-nowrap" disabled>
                                        Précédent
                                    </button>
                                    <button class="px-3 py-2 text-sm bg-primary text-white rounded-md !rounded-button whitespace-nowrap">1</button>
                                    <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-10 rounded-md !rounded-button whitespace-nowrap">2</button>
                                    <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-white hover:bg-opacity-10 rounded-md !rounded-button whitespace-nowrap">3</button>
                                    <span class="px-2 text-gray-500">storage.</span>
                                    <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900 hover:bg-white hover:bg-opacity-10 rounded-md !rounded-button whitespace-nowrap">50</button>
                                    <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900 border border-gray-300 rounded-md hover:bg-white hover:bg-opacity-10 !rounded-button whitespace-nowrap">
                                        Suivant
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
    </div>


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <!-- <script src="storage/js_style/admin/dashboard.js"></script> -->
    <script src="storage/js_style/msg.js"></script>
    <script>

    </script>
</body>

</html>