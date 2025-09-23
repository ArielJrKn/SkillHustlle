<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes étudiants | Formateur</title>
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
<style>
    .student-progress {
        height: 8px;
        border-radius: 4px;
        background-color: #e5e7eb;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        border-radius: 4px;
        background-color: #4f46e5;
    }
</style>

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
                    <!-- Header section -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Gestion des Étudiants</h1>
                            <p class="mt-1 text-sm text-gray-600">Total: <span class="font-medium">157</span>
                                étudiants inscrits</p>
                        </div>
                    </div>
                    <!-- Search and filters -->
                    <!-- <div class="bg-white dark:bg-darkSurface shadow rounded-lg mb-6 p-4">
                        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                            <div class="flex-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                                        <i class="ri-search-line"></i>
                                    </div>
                                </div>
                                <input type="text"
                                    class="bg-white dark:bg-darkSurface text-black dark:text-white block w-full pl-10 pr-3 py-2 border-gray-300 border rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary"
                                    placeholder="Rechercher un étudiant...">
                            </div>
                            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                                <div class="relative">
                                    <select
                                        class=" bg-white dark:bg-darkSurface text-black dark:text-white custom-select block w-full pl-3 pr-10 py-2 border-gray-300 border rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                        <option value="">Tous les cours</option>
                                        <option value="math">Mathématiques</option>
                                        <option value="physics">Physique</option>
                                        <option value="chemistry">Chimie</option>
                                        <option value="biology">Biologie</option>
                                        <option value="french">Français</option>
                                        <option value="history">Histoire</option>
                                    </select>
                                </div>
                                <div class="relative">
                                    <select
                                        class="bg-white dark:bg-darkSurface text-black dark:text-white custom-select block w-full pl-3 pr-10 py-2 border-gray-300 border rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                        <option value="">Tous les statuts</option>
                                        <option value="active">Actif</option>
                                        <option value="inactive">Inactif</option>
                                    </select>
                                </div>
                                <div class="relative">
                                    <select
                                        class=" bg-white dark:bg-darkSurface text-black dark:text-white custom-select block w-full pl-3 pr-10 py-2 border-gray-300 border rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                        <option value="">Tous les niveaux</option>
                                        <option value="beginner">Débutant</option>
                                        <option value="intermediate">Intermédiaire</option>
                                        <option value="advanced">Avancé</option>
                                    </select>
                                </div>
                                <button type="button"
                                    class="bg-white dark:bg-darkSurface text-black dark:text-white inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-button text-gray-700 bg-white hover:bg-gray-500 whitespace-nowrap">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-refresh-line"></i>
                                    </div>
                                    Réinitialiser
                                </button>
                            </div>
                        </div>
                    </div> -->
                    <!-- Students list -->
                    <div class="shadow rounded-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class=" min-w-full">
                                <thead class="bg-primary bg-opacity-20">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="custom-checkbox mr-2">
                                                Étudiant
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            Cours inscrits
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            Progression
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            Dernière connexion
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">
                                            Statut
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-primary bg-opacity-10 divide-y divide-gray-200">
                                    <!-- Student 1 -->
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="custom-checkbox mr-4">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover"
                                                        src="storage/media/chat.jpg"
                                                        alt="Photo de profil">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        Sophie
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">
                                                sophie.moreau@example.com</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Mathématiques,
                                                Physique</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="w-32">
                                                <div class="text-sm text-gray-900 dark:text-gray-100 mb-1">78%</div>
                                                <div class="student-progress">
                                                    <div class="progress" style="width: 78%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Aujourd'hui, 10:25
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Actif
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="relative">
                                                <button type="button"
                                                    class="p-2 rounded-full text-gray-900 dark:text-gray-100 hover:text-gray-700 dropdown-toggle">
                                                    <div class="w-6 h-6 flex items-center justify-center">
                                                        <a href="{{route('teacher.userDetail')}}">
                                                            <i class="ri-eye-line ri-lg"></i>
                                                        </a>
                                                    </div>
                                                </button>

                                                <button type="button"
                                                    class=" p-2 rounded-full newMsg text-gray-900 dark:text-gray-100 hover:text-gray-700 dropdown-toggle">
                                                    <div class="w-6 h-6 flex items-center justify-center">
                                                        <i class="ri-message-3-fill ri-lg"></i>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div
                            class="bg-primary bg-opacity-20 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                            <div class="flex-1 flex justify-between sm:hidden">
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-button text-white bg-primary hover:bg-indigo-700 whitespace-nowrap">
                                    Précédent
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-button text-white bg-primary hover:bg-indigo-700 whitespace-nowrap">
                                    Suivant
                                </a>
                            </div>
                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm text-gray-900 dark:text-gray-100">
                                        Affichage de <span class="font-medium">1</span> à <span
                                            class="font-medium">6</span> sur <span class="font-medium">157</span>
                                        résultats
                                    </p>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-4">
                                        <div class="relative">
                                            <select
                                                class="bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100 custom-select block w-full pl-3 pr-10 py-2 text-sm border-gray-300 border rounded-md shadow-sm focus:ring-primary focus:border-primary">
                                                <option>10 par page</option>
                                                <option>25 par page</option>
                                                <option>50 par page</option>
                                                <option>100 par page</option>
                                            </select>
                                        </div>
                                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                                            aria-label="Pagination">
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  text-sm font-medium text-gray-500 hover:bg-white hover:bg-opacity-10">
                                                <span class="sr-only">Précédent</span>
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </div>
                                            </a>
                                            <a href="#" aria-current="page"
                                                class="z-10 bg-primary border-primary text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                1
                                            </a>
                                            <a href="#"
                                                class="bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  border-gray-300 text-gray-500 hover:bg-white hover:bg-opacity-10 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                2
                                            </a>
                                            <a href="#"
                                                class="bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  border-gray-300 text-gray-500 hover:bg-white hover:bg-opacity-10 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                3
                                            </a>
                                            <span
                                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  text-sm font-medium text-gray-700">
                                                ...
                                            </span>
                                            <a href="#"
                                                class="bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  border-gray-300 text-gray-500 hover:bg-white hover:bg-opacity-10 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                                16
                                            </a>
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-opacity-20 bg-primary text-gray-900 dark:text-gray-100  text-sm font-medium text-gray-500 hover:bg-white hover:bg-opacity-10">
                                                <span class="sr-only">Suivant</span>
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </div>
                                            </a>
                                        </nav>
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


        <script src="storage/js_style/notif.js"></script>
        <script src="storage/js_style/dark.js"></script>
        <script src="storage/js_style/formateur/dashboard.js"></script>
        <script src="storage/js_style/formateur/myStudent.js"></script>
        <script src="storage/js_style/msg.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const newMsg = document.querySelectorAll('.newMsg');
                const sideBarNewMsg = document.querySelector('.sideBarMessage');
                const section2NewMsg = document.querySelector('.section2');
                const section1NewMsg = document.querySelector('.section1');

                newMsg.forEach(nm =>{
                    nm.addEventListener('click', function () {
                        sideBarNewMsg.classList.remove('hidden');
                        section2NewMsg.classList.remove('hidden');
                        section1NewMsg.classList.add('hidden');
                    });
                })

                
            });
        </script>

</body>

</html>