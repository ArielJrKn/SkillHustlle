<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks | Formateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/feedback.css">
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
        <header class="h-16 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>
        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    <div class="flex space-x-6">
                        <button id="tab" data-tab="1" class="tab active px-4 py-2 text-sm font-medium text-gray-500">
                            Tous les messages
                        </button>
                        <button id="tab" data-tab="2" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                            Non résolus
                        </button>
                        <button id="tab" data-tab="3" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                            Résolus
                        </button>
                    </div> 
                    <div id="1" class="tab-content active space-y-4">
                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Antoine Dubois</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-primary-700 bg-primary-50 rounded-full">Support</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">contact@entreprise.fr</p>
                                        <p class="mt-3 text-gray-700">Je rencontre des difficultés avec la synchronisation de mes données. Le processus semble bloqué depuis ce matin. Pouvez-vous m'aider à résoudre ce problème ?</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-50 rounded-full">Attente</span>
                                </div>
                            </div>
                        </div>

                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Marie Laurent</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-full">Suggestion</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">marie.l@gmail.com</p>
                                        <p class="mt-3 text-gray-700">Serait-il possible d'ajouter une fonction de partage direct vers les réseaux sociaux ? Cela faciliterait grandement la diffusion de nos contenus.</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-50 rounded-full">Résolu</span>
                                </div>
                            </div>
                        </div>

                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Lucas Bernard</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-red-700 bg-red-50 rounded-full">Urgent</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">l.bernard@societe.fr</p>
                                        <p class="mt-3 text-gray-700">Erreur critique lors de la génération des rapports mensuels. Les données semblent corrompues. Une intervention rapide est nécessaire.</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-50 rounded-full">Cours</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2" class="tab-content space-y-4">
                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Antoine Dubois</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-primary-700 bg-primary-50 rounded-full">Support</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">contact@entreprise.fr</p>
                                        <p class="mt-3 text-gray-700">Je rencontre des difficultés avec la synchronisation de mes données. Le processus semble bloqué depuis ce matin. Pouvez-vous m'aider à résoudre ce problème ?</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-50 rounded-full">En attente</span>
                                </div>
                            </div>
                        </div>

                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Marie Laurent</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-full">Suggestion</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">marie.l@gmail.com</p>
                                        <p class="mt-3 text-gray-700">Serait-il possible d'ajouter une fonction de partage direct vers les réseaux sociaux ? Cela faciliterait grandement la diffusion de nos contenus.</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-50 rounded-full">Résolu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="3" class="tab-content space-y-4">
                        <div class="message-card bg-primary bg-opacity-20 rounded-lg shadow-sm mt-2 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <i class="ri-user-3-line text-gray-500"></i>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3">
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Antoine Dubois</h3>
                                            <span class="px-2 py-1 text-xs font-medium text-primary-700 bg-primary-50 rounded-full">Support</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">contact@entreprise.fr</p>
                                        <p class="mt-3 text-gray-700">Je rencontre des difficultés avec la synchronisation de mes données. Le processus semble bloqué depuis ce matin. Pouvez-vous m'aider à résoudre ce problème ?</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="text-sm text-gray-500">5 juillet 2025</span>
                                    <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-50 rounded-full">En attente</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <!-- Right Sidebar - feedback -->
            <aside class="FeedbacksDetail hidden absolute h-full z-10 right-0 backdrop-filter backdrop-blur-2xl dark:border-gray-800 overflow-hidden">
                <div class="">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Détails du message</h2>
                            <button id="close" class="!rounded-button w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700 hover:bg-gray-50">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="ri-user-3-line text-gray-500"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-900 dark:text-gray-100">Antoine Dubois</h3>
                                <p class="text-sm text-gray-500">contact@entreprise.fr</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 space-y-6">
                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-500">Message original</span>
                                <span class="text-sm text-gray-500">5 juillet 2025</span>
                            </div>
                            <p class="text-gray-500">Je rencontre des difficultés avec la synchronisation de mes données. Le processus semble bloqué depuis ce matin. Pouvez-vous m'aider à résoudre ce problème ?</p>
                        </div>

                        <div class="border-t border-gray-100 pt-6">
                            <h3 class="text-sm font-medium text-gray-500 mb-4">Répondre</h3>
                            <textarea class="w-full h-32 p-3 text-sm border border-gray-200 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-primary/10 text-gray-900 dark:text-gray-100 dark:text-gray-100 hover:bg-white hover:bg-opacity-10 bg-primary bg-opacity-0" placeholder="Écrivez votre réponsestorage."></textarea>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <button class="!rounded-button flex items-center px-4 py-2 text-sm font-medium text-white bg-primary hover:bg-primary/90">
                                        <i class="ri-send-plane-line mr-2"></i>
                                        Envoyer
                                    </button>
                                    <button class="!rounded-button flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 hover:bg-gray-50">
                                        <i class="ri-check-line mr-2"></i>
                                        Marquer comme résolu
                                    </button>
                                </div>
                                <button class="!rounded-button w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700 hover:bg-gray-50">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

        </div>    
    </div>

    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/admin/feedback.js"></script>
    <script src="storage/js_style/msg.js"></script>
</body>

</html>