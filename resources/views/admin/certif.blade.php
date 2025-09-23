<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications | Administrateur</title>
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
                    <div class="max-w-full">
                    <div class="mb-6">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Autorisation des Certifications</h1>
                        <p class="text-gray-600">Gérez et validez les demandes de certification des apprenants</p>
                    </div>
                    <!-- Filters -->
                    <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-4 mb-6">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex items-center space-x-2">
                                <label class="text-sm font-medium text-gray-500">Statut :</label>
                                <select class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                                    <option>Tous les statuts</option>
                                    <option>Validé</option>
                                    <option>En attente</option>
                                    <option>Rejeté</option>
                                </select>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <label class="text-sm font-medium text-gray-500">Type :</label>
                                <select class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary focus:border-transparent pr-8">
                                    <option>Tous les types</option>
                                    <option>Certificat de completion</option>
                                    <option>Certificat professionnel</option>
                                    <option>Diplôme</option>
                                </select>
                            </div>
                            
                            <button class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 !rounded-button whitespace-nowrap">
                                Appliquer les filtres
                            </button>
                            
                            <button class="text-gray-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 !rounded-button whitespace-nowrap">
                                Réinitialiser
                            </button>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="bg-primary bg-opacity-10 rounded-lg shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-primary bg-opacity-20">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Nom de l'entité</th>
                                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Type de certificat</th>
                                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Cours associés</th>
                                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Statut</th>
                                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-900 dark:text-gray-100 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer certification-row" data-id="1">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <span class="text-blue-600 font-medium text-sm">MR</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Marie Rousseau</div>
                                                    <div class="text-sm text-gray-500">marie.rousseau@email.fr</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Certificat professionnel</div>
                                            <div class="text-sm text-gray-500">Marketing Digital</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Stratégies Marketing Avancées</div>
                                            <div class="text-sm text-gray-500">SEO & Analytics</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                En attente
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <button class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700 !rounded-button whitespace-nowrap">
                                                Valider
                                            </button>
                                            <button class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700 !rounded-button whitespace-nowrap">
                                                Rejeter
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer certification-row" data-id="2">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                                    <span class="text-green-600 font-medium text-sm">PD</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Pierre Dubois</div>
                                                    <div class="text-sm text-gray-500">pierre.dubois@email.fr</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Certificat de completion</div>
                                            <div class="text-sm text-gray-500">Développement Web</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">JavaScript Avancé</div>
                                            <div class="text-sm text-gray-500">React & Node.js</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Validé
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <span class="text-gray-400">Déjà validé</span>
                                        </td>
                                    </tr>
                                    
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer certification-row" data-id="3">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <span class="text-purple-600 font-medium text-sm">SM</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Sophie Martin</div>
                                                    <div class="text-sm text-gray-500">sophie.martin@email.fr</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Diplôme</div>
                                            <div class="text-sm text-gray-500">Gestion de Projet</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Management Agile</div>
                                            <div class="text-sm text-gray-500">Scrum Master Certification</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                Rejeté
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <button class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700 !rounded-button whitespace-nowrap">
                                                Valider
                                            </button>
                                            <button class="text-gray-600 px-3 py-1 rounded-lg hover:bg-gray-100 !rounded-button whitespace-nowrap">
                                                Détails
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer certification-row" data-id="4">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                                                    <span class="text-orange-600 font-medium text-sm">AL</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Antoine Leroy</div>
                                                    <div class="text-sm text-gray-500">antoine.leroy@email.fr</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Certificat professionnel</div>
                                            <div class="text-sm text-gray-500">Data Science</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Machine Learning Fondamentaux</div>
                                            <div class="text-sm text-gray-500">Python & Analytics</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                En attente
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <button class="bg-green-600 text-white px-3 py-1 rounded-lg hover:bg-green-700 !rounded-button whitespace-nowrap">
                                                Valider
                                            </button>
                                            <button class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700 !rounded-button whitespace-nowrap">
                                                Rejeter
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <tr class="hover:bg-white hover:bg-opacity-10 cursor-pointer certification-row" data-id="5">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center">
                                                    <span class="text-pink-600 font-medium text-sm">CB</span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Camille Bernard</div>
                                                    <div class="text-sm text-gray-500">camille.bernard@email.fr</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Certificat de completion</div>
                                            <div class="text-sm text-gray-500">UX/UI Design</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900 dark:text-gray-100">Design Thinking</div>
                                            <div class="text-sm text-gray-500">Prototypage & Tests Utilisateurs</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Validé
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <span class="text-gray-400">Déjà validé</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="px-6 py-4 flex items-center justify-between">
                            <div class="text-sm text-gray-900 dark:text-gray-100">
                                Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span class="font-medium">23</span> résultats
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="px-3 py-2 text-sm text-gray-600 hover:bg-white hover:bg-opacity-10 rounded-lg !rounded-button whitespace-nowrap">
                                    Précédent
                                </button>
                                <button class="px-3 py-2 text-sm bg-primary text-white rounded-lg !rounded-button whitespace-nowrap">
                                    1
                                </button>
                                <button class="px-3 py-2 text-sm text-gray-600 hover:bg-white hover:bg-opacity-10 rounded-lg !rounded-button whitespace-nowrap">
                                    2
                                </button>
                                <button class="px-3 py-2 text-sm text-gray-600 hover:bg-white hover:bg-opacity-10 rounded-lg !rounded-button whitespace-nowrap">
                                    3
                                </button>
                                <button class="px-3 py-2 text-sm text-gray-600 hover:bg-white hover:bg-opacity-10 rounded-lg !rounded-button whitespace-nowrap">
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