<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Administrateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/dashboard.css">
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
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Bienvenu ...</h2>
                            <div class="flex space-x-2">
                                <button
                                    class="px-3 py-1.5 text-sm font-medium text-gray-900 dark:text-gray-100 hover:bg-white hover:bg-opacity-30 border border-gray-300 rounded-button whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 flex items-center justify-center mr-1.5">
                                            <i class="ri-calendar-line"></i>
                                        </div>
                                        <span>05 Juillet 2025</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm ">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Utilisateurs actifs</h3>
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-primary">
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
                                        <div id="users-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm ">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Cours actifs</h3>
                                    <div
                                        class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                        <i class="ri-book-open-line"></i>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">127</p>
                                        <div class="flex items-center mt-1">
                                            <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                                <i class="ri-arrow-up-line"></i>
                                            </div>
                                            <span class="text-xs font-medium text-green-500">+4.2%</span>
                                            <span class="text-xs text-gray-900 dark:text-gray-100 ml-1">vs mois dernier</span>
                                        </div>
                                    </div>
                                    <div class="h-10 w-20">
                                        <div id="courses-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm ">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Bugs signalés</h3>
                                    <div
                                        class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                        <i class="ri-bug-line"></i>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">23</p>
                                        <div class="flex items-center mt-1">
                                            <div class="w-4 h-4 flex items-center justify-center text-red-500">
                                                <i class="ri-arrow-up-line"></i>
                                            </div>
                                            <span class="text-xs font-medium text-red-500">+8.1%</span>
                                            <span class="text-xs text-gray-900 dark:text-gray-100 ml-1">vs mois dernier</span>
                                        </div>
                                    </div>
                                    <div class="h-10 w-20">
                                        <div id="bugs-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm ">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Revenus (€)</h3>
                                    <div
                                        class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                                        <i class="ri-money-euro-circle-line"></i>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">48,392 €</p>
                                        <div class="flex items-center mt-1">
                                            <div class="w-4 h-4 flex items-center justify-center text-green-500">
                                                <i class="ri-arrow-up-line"></i>
                                            </div>
                                            <span class="text-xs font-medium text-green-500">+16.8%</span>
                                            <span class="text-xs text-gray-900 dark:text-gray-100 ml-1">vs mois dernier</span>
                                        </div>
                                    </div>
                                    <div class="h-10 w-20">
                                        <div id="revenue-chart" class="h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Charts -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="font-medium text-gray-900 dark:text-gray-100">Évolution des inscriptions</h3>
                                    <div class="flex space-x-2">
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-primary bg-blue-50 rounded-full whitespace-nowrap">6
                                            mois</button>
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">1
                                            an</button>
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">Tout</button>
                                    </div>
                                </div>
                                <div id="registrations-chart" class="h-64 w-full"></div>
                            </div>
                            <div class="bg-primary bg-opacity-20 p-5 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="font-medium text-gray-900 dark:text-gray-100">Revenus mensuels</h3>
                                    <div class="flex space-x-2">
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-primary bg-blue-50 rounded-full whitespace-nowrap">6
                                            mois</button>
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">1
                                            an</button>
                                        <button
                                            class="px-2 py-1 text-xs font-medium text-gray-500 hover:bg-gray-100 rounded-full whitespace-nowrap">Tout</button>
                                    </div>
                                </div>
                                <div id="monthly-revenue-chart" class="h-64 w-full"></div>
                            </div>
                        </div>
                        <!-- Recent Activity and Widgets -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Recent Activity -->
                            <div class="lg:col-span-2 bg-primary bg-opacity-20 rounded-lg shadow-sm">
                                <div class="p-5 ">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-medium text-gray-900 dark:text-gray-100">Activité récente</h3>
                                        <div class="flex space-x-2">
                                            <button
                                                class="px-3 py-1 text-xs font-medium text-primary bg-primary bg-opacity-20 border border-primary rounded-button whitespace-nowrap">Tout
                                                voir</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-primary bg-opacity-10">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                    Type</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                    Description</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                    Date</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                    Statut</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-right text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-primary bg-opacity-10 divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-primary">
                                                            <i class="ri-user-add-line"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900 dark:text-gray-100">Nouvelle inscription</div>
                                                    <div class="text-xs text-gray-500">Sophie Marceau</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">05 juillet, 10:23</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Complété</span>
                                                </td>
                                                <td class="px-6 py-4 text-right text-sm font-medium">
                                                    <button
                                                        class="text-primary hover:text-primary/80 whitespace-nowrap">Voir
                                                        détails</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                                            <i class="ri-bug-line"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900 dark:text-gray-100">Bug signalé</div>
                                                    <div class="text-xs text-gray-500">Problème de lecture vidéo</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">05 juillet, 09:15</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En
                                                        cours</span>
                                                </td>
                                                <td class="px-6 py-4 text-right text-sm font-medium">
                                                    <button
                                                        class="text-primary hover:text-primary/80 whitespace-nowrap">Résoudre</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600">
                                                            <i class="ri-money-euro-circle-line"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900 dark:text-gray-100">Paiement reçu</div>
                                                    <div class="text-xs text-gray-500">Jean-Pierre Durand</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">05 juillet, 08:47</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Validé</span>
                                                </td>
                                                <td class="px-6 py-4 text-right text-sm font-medium">
                                                    <button
                                                        class="text-primary hover:text-primary/80 whitespace-nowrap">Voir
                                                        détails</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                                            <i class="ri-message-2-line"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900 dark:text-gray-100">Nouveau feedback</div>
                                                    <div class="text-xs text-gray-500">Cours de JavaScript avancé</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-500">04 juillet, 22:12</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Nouveau</span>
                                                </td>
                                                <td class="px-6 py-4 text-right text-sm font-medium">
                                                    <button
                                                        class="text-primary hover:text-primary/80 whitespace-nowrap">Répondre</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Widgets -->
                            <div class="space-y-6">
                                <!-- Calendar Widget -->
                                <!-- <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm ">
                                    <div class="p-5 border-b border-gray-100">
                                        <h3 class="font-medium text-gray-700">Calendrier</h3>
                                    </div>
                                    <div class="p-5">
                                        <div class="flex items-center justify-between mb-4">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700">
                                                <i class="ri-arrow-left-s-line"></i>
                                            </button>
                                            <h4 class="text-sm font-medium text-gray-700">Juillet 2025</h4>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </button>
                                        </div>
                                        <div class="grid grid-cols-7 gap-1 text-center">
                                            <div class="text-xs font-medium text-gray-500">Lu</div>
                                            <div class="text-xs font-medium text-gray-500">Ma</div>
                                            <div class="text-xs font-medium text-gray-500">Me</div>
                                            <div class="text-xs font-medium text-gray-500">Je</div>
                                            <div class="text-xs font-medium text-gray-500">Ve</div>
                                            <div class="text-xs font-medium text-gray-500">Sa</div>
                                            <div class="text-xs font-medium text-gray-500">Di</div>
                                            <div class="text-xs text-gray-400 py-1">30</div>
                                            <div class="text-xs text-gray-700 py-1">1</div>
                                            <div class="text-xs text-gray-700 py-1">2</div>
                                            <div class="text-xs text-gray-700 py-1">3</div>
                                            <div class="text-xs text-gray-700 py-1">4</div>
                                            <div class="text-xs text-gray-700 py-1 bg-blue-100 rounded-full">5</div>
                                            <div class="text-xs text-gray-700 py-1">6</div>
                                            <div class="text-xs text-gray-700 py-1">7</div>
                                            <div class="text-xs text-gray-700 py-1">8</div>
                                            <div class="text-xs text-gray-700 py-1">9</div>
                                            <div class="text-xs text-gray-700 py-1">10</div>
                                            <div class="text-xs text-gray-700 py-1">11</div>
                                            <div class="text-xs text-gray-700 py-1">12</div>
                                            <div class="text-xs text-gray-700 py-1">13</div>
                                            <div class="text-xs text-gray-700 py-1">14</div>
                                            <div class="text-xs text-gray-700 py-1 relative">
                                                15
                                                <div
                                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-green-500 rounded-full">
                                                </div>
                                            </div>
                                            <div class="text-xs text-gray-700 py-1">16</div>
                                            <div class="text-xs text-gray-700 py-1">17</div>
                                            <div class="text-xs text-gray-700 py-1">18</div>
                                            <div class="text-xs text-gray-700 py-1">19</div>
                                            <div class="text-xs text-gray-700 py-1">20</div>
                                            <div class="text-xs text-gray-700 py-1">21</div>
                                            <div class="text-xs text-gray-700 py-1">22</div>
                                            <div class="text-xs text-gray-700 py-1 relative">
                                                23
                                                <div
                                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-red-500 rounded-full">
                                                </div>
                                            </div>
                                            <div class="text-xs text-gray-700 py-1">24</div>
                                            <div class="text-xs text-gray-700 py-1">25</div>
                                            <div class="text-xs text-gray-700 py-1">26</div>
                                            <div class="text-xs text-gray-700 py-1">27</div>
                                        </div>
                                        <div class="mt-4 space-y-2">
                                            <div class="flex items-center">
                                                <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                                <span class="text-xs text-gray-700">15 Juil - Lancement nouveau
                                                    cours</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                                                <span class="text-xs text-gray-700">23 Juil - Maintenance
                                                    plateforme</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Tasks Widget -->
                                <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm">
                                    <div class="p-5">
                                        <div class="flex justify-between items-center">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Tâches prioritaires</h3>
                                            <button
                                                class="w-6 h-6 flex items-center justify-center text-gray-900 dark:text-gray-100 hover:text-gray-700">
                                                <i class="ri-add-line" id="addTask"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-5 space-y-3">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="task1"
                                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                            <label for="task1" class="ml-2 text-sm text-gray-500">Résoudre les bugs de
                                                lecture vidéo</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="task2"
                                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                            <label for="task2" class="ml-2 text-sm text-gray-500">Valider les nouveaux
                                                cours</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="task3"
                                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary"
                                                checked>
                                            <label for="task3" class="ml-2 text-sm text-gray-500 line-through">Répondre
                                                aux messages</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="task4"
                                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                            <label for="task4" class="ml-2 text-sm text-gray-500">Préparer la mise à
                                                jour</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="checkbox" id="task5"
                                                class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                            <label for="task5" class="ml-2 text-sm text-gray-500">Analyser les feedbacks
                                                utilisateurs</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- System Alerts -->
                                <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm ">
                                    <div class="p-5">
                                        <h3 class="font-medium text-gray-900 dark:text-gray-100">Alertes système</h3>
                                    </div>
                                    <div class="p-5 space-y-4">
                                        <div class="p-3 bg-yellow-50 bg-opacity-80 border border-yellow-200 rounded-lg">
                                            <div class="flex">
                                                <div
                                                    class="w-5 h-5 flex items-center justify-center text-yellow-500 mr-2">
                                                    <i class="ri-error-warning-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-yellow-800">Utilisation CPU
                                                        élevée</p>
                                                    <p class="text-xs text-yellow-700 mt-1">Le serveur principal atteint
                                                        85% d'utilisation CPU</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-red-50 bg-opacity-80 border border-red-200 rounded-lg">
                                            <div class="flex">
                                                <div class="w-5 h-5 flex items-center justify-center text-red-500 mr-2">
                                                    <i class="ri-error-warning-fill"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-red-800">Tentatives de connexion
                                                        suspectes</p>
                                                    <p class="text-xs text-red-700 mt-1">5 tentatives échouées depuis IP
                                                        185.76.xx.xx</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-blue-50 bg-opacity-80 border border-blue-200 rounded-lg">
                                            <div class="flex">
                                                <div
                                                    class="w-5 h-5 flex items-center justify-center text-blue-500 mr-2">
                                                    <i class="ri-information-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-blue-800">Mise à jour disponible
                                                    </p>
                                                    <p class="text-xs text-blue-700 mt-1">Version 2.4.5 disponible pour
                                                        installation</p>
                                                </div>
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

    <!-- ajout d'une nouvelle tache -->
    <div class="addTaskForm hidden absolute bg-black bg-opacity-50 backdrop-filter backdrop-blur-sm top-0 z-50 flex align-center justify-center">
        <div class="taskForm lg:w-2/6 backdrop-filter backdrop-blur-2xl bg-transparent dark:bg-white dark:bg-opacity-10 p-4 rounded-md">
            <div class="flex justify-between" style="align-items:center;">
                <h2>Ajouter une nouvelle tâche prioritaire</h2>
                <i class="ri-close-line ri-lg cursor-pointer addTaskClose"></i>
            </div>
            <form class="mt-2">
                <div class="relative">
                    <input type="text" class="outline-none w-full text-black dark:text-white dark:bg-dark dark:bg-opacity-30 text-gray-500 border-none text-sm rounded-md pl-3 pr-4 py-2 w-64 focus:ring-2 focus:ring-primary" placeholder="Ajouter une nouvelle tâches...">
                </div>
            </form>
            <h4 class="text-xs text-gray-500 pl-2">Appuyer sur entrer pour créer une nouvelle tâche</h4>
        </div>
    </div>


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/admin/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script>

    </script>
</body>

</html>