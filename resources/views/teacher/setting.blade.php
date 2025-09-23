<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètre | Formateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/settings.css">
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
                    <div class="container mx-auto px-4 py-6">
                        <!-- Settings tabs -->
                        <div class="mb-8">
                            <div class="flex space-x-8">
                                <button id="tab-profile"
                                    class="settings-tab text-gray-500 active pb-4 px-1 text-sm font-medium border-b-2 border-primary">
                                    Profil
                                </button>
                                <button id="tab-notifications"
                                    class="settings-tab text-gray-500 pb-4 px-1 text-sm font-medium border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300">
                                    Notifications
                                </button>
                                <button id="tab-privacy"
                                    class="settings-tab text-gray-500 pb-4 px-1 text-sm font-medium border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300">
                                    Confidentialité des messages
                                </button>
                                <button id="tab-courses"
                                    class="settings-tab text-gray-500 pb-4 px-1 text-sm font-medium border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300">
                                    Paramètres des cours
                                </button>
                            </div>
                        </div>

                        <!-- Profile settings -->
                        <div id="content-profile" class="settings-content">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Informations
                                    personnelles</h2>

                                <div class="flex flex-col md:flex-row items-start mb-8">
                                    <div class="flex flex-col items-center mb-6 md:mb-0 md:mr-10">
                                        <div class="relative">
                                            <img class="h-32 w-32 rounded-full object-cover border-4 border-white shadow"
                                                src="storage/media/chat.jpg"
                                                alt="Photo de profil">
                                            <button
                                                class="absolute bottom-0 right-0 bg-primary text-white p-2 rounded-full shadow-md hover:bg-indigo-700 !rounded-button">
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-camera-line"></i>
                                                </div>
                                            </button>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-3">JPG ou PNG. 2 Mo max.</p>
                                    </div>

                                    <div class="flex-1 w-full">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div>
                                                <label for="firstname"
                                                    class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Prénom</label>
                                                <input type="text" id="firstname" name="firstname" value="Marie"
                                                    class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                            </div>
                                            <div>
                                                <label for="lastname"
                                                    class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Nom</label>
                                                <input type="text" id="lastname" name="lastname" value="Dupont"
                                                    class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                            </div>
                                            <div>
                                                <label for="email"
                                                    class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Email</label>
                                                <input type="email" id="email" name="email"
                                                    value="marie.dupont@education.fr"
                                                    class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                            </div>
                                            <div>
                                                <label for="title"
                                                    class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Titre</label>
                                                <input type="text" id="title" name="title"
                                                    value="Professeure de mathématiques"
                                                    class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="bio"
                                                class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Biographie</label>
                                            <textarea id="bio" name="bio" rows="4"
                                                class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">Enseignante en mathématiques et physique depuis 15 ans au lycée Victor Hugo. Passionnée par la pédagogie innovante et les nouvelles technologies éducatives. Titulaire d'un doctorat en didactique des mathématiques.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Informations
                                    professionnelles</h2>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="school"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Établissement</label>
                                        <input type="text" id="school" name="school" value="Lycée Victor Hugo"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                    <div>
                                        <label for="department"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Département</label>
                                        <input type="text" id="department" name="department" value="Sciences"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                    <div>
                                        <label for="subjects"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Matières
                                            enseignées</label>
                                        <input type="text" id="subjects" name="subjects" value="Mathématiques, Physique"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                    <div>
                                        <label for="experience"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Années
                                            d'expérience</label>
                                        <input type="number" id="experience" name="experience" value="15"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Sécurité du compte
                                </h2>

                                <div class="mb-6">
                                    <label for="current-password"
                                        class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Mot de
                                        passe actuel</label>
                                    <input type="password" id="current-password" name="current-password"
                                        placeholder="••••••••"
                                        class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label for="new-password"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Nouveau
                                            mot de passe</label>
                                        <input type="password" id="new-password" name="new-password"
                                            placeholder="••••••••"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                    <div>
                                        <label for="confirm-password"
                                            class="block text-sm font-medium text-gray-900 dark:text-gray-100 mb-1">Confirmer
                                            le mot de passe</label>
                                        <input type="password" id="confirm-password" name="confirm-password"
                                            placeholder="••••••••"
                                            class="w-full text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                    </div>
                                </div>

                                <div class="flex items-center mb-6">
                                    <input id="two-factor" name="two-factor" type="checkbox"
                                        class="h-4 w-4 text-primary focus:ring-primary border-gray-500 rounded">
                                    <label for="two-factor"
                                        class="ml-2 block text-sm text-gray-900 dark:text-gray-100">Activer
                                        l'authentification à deux facteurs</label>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button"
                                    class="mr-3 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 !rounded-button whitespace-nowrap">
                                    Annuler
                                </button>
                                <button type="button"
                                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 !rounded-button whitespace-nowrap">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </div>

                        <!-- Notifications settings -->
                        <div id="content-notifications" class="settings-content active">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Préférences de
                                    notifications</h2>

                                <div class="space-y-6">
                                    <div class="flex items-center justify-between py-4 ">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Messages
                                                des étudiants</h3>
                                            <p class="text-sm text-gray-500">Recevoir des notifications pour les
                                                nouveaux messages</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-messages"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-messages"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 ">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Rappels de
                                                cours</h3>
                                            <p class="text-sm text-gray-500">Recevoir des rappels pour les cours à venir
                                            </p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-course-reminders"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-course-reminders"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 ">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Annonces
                                            </h3>
                                            <p class="text-sm text-gray-500">Recevoir des notifications pour les
                                                annonces de l'établissement</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-announcements"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary" />
                                            <label for="toggle-announcements"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 ">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Remise de
                                                devoirs</h3>
                                            <p class="text-sm text-gray-500">Recevoir des notifications lorsqu'un
                                                étudiant remet un devoir</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-assignments"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-assignments"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 ">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                Notifications par email</h3>
                                            <p class="text-sm text-gray-500">Recevoir également les notifications par
                                                email</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-email"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-email"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Fréquence des
                                    notifications</h2>

                                <div class="mb-6">
                                    <label for="notification-frequency"
                                        class="block text-sm font-medium text-gray-500 mb-1">Fréquence des
                                        résumés</label>
                                    <select id="notification-frequency" name="notification-frequency"
                                        class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent custom-select block w-full pl-3 pr-10 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                        <option value="real-time"
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">Temps
                                            réel</option>
                                        <option value="daily" selected
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">Résumé
                                            quotidien</option>
                                        <option value="weekly"
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">Résumé
                                            hebdomadaire</option>
                                        <option value="never"
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">Jamais
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label for="quiet-hours-start"
                                        class="block text-sm font-medium text-gray-500 mb-1">Heures de silence -
                                        Début</label>
                                    <input type="time" id="quiet-hours-start" name="quiet-hours-start" value="22:00"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent ">
                                </div>

                                <div class="mb-6">
                                    <label for="quiet-hours-end"
                                        class="block text-sm font-medium text-gray-500 mb-1">Heures de silence -
                                        Fin</label>
                                    <input type="time" id="quiet-hours-end" name="quiet-hours-end" value="07:00"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent ">
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button"
                                    class="mr-3 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 !rounded-button whitespace-nowrap">
                                    Annuler
                                </button>
                                <button type="button"
                                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 !rounded-button whitespace-nowrap">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </div>

                        <!-- Privacy settings -->
                        <div id="content-privacy" class="settings-content">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Confidentialité
                                    des messages</h2>

                                <div class="space-y-6">
                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Statut en
                                                ligne</h3>
                                            <p class="text-sm text-gray-500">Afficher votre statut en ligne aux
                                                étudiants</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-online-status"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-online-status"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                Confirmations de lecture</h3>
                                            <p class="text-sm text-gray-500">Permettre aux étudiants de voir quand vous
                                                avez lu leurs messages</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-read-receipts"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-read-receipts"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Indicateur
                                                de frappe</h3>
                                            <p class="text-sm text-gray-500">Montrer aux étudiants quand vous êtes en
                                                train d'écrire</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-typing-indicator"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary" />
                                            <label for="toggle-typing-indicator"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Filtrage des
                                    messages</h2>

                                <div class="mb-6">
                                    <label for="message-filter" class="block text-sm font-medium text-gray-500 mb-1">Qui
                                        peut vous envoyer des messages</label>
                                    <select id="message-filter" name="message-filter"
                                        class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent custom-select block w-full pl-3 pr-10 py-2 border border-gray-300 rounded-md shadow-sm text-sm focus:ring-primary focus:border-primary">
                                        <option value="all-students" selected
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">Tous
                                            les étudiants</option>
                                        <option value="my-students"
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">
                                            Uniquement mes étudiants</option>
                                        <option value="approved"
                                            class="text-gray-900 dark:text-gray-100 bg-white dark:bg-darkSurface">
                                            Uniquement après approbation</option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label for="blocked-users"
                                        class="block text-sm font-medium text-gray-500 mb-1">Utilisateurs
                                        bloqués</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <div class="relative flex items-stretch flex-grow">
                                            <input type="text" id="blocked-users" name="blocked-users"
                                                placeholder="Rechercher un utilisateur..."
                                                class="text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:ring-primary focus:border-primary">
                                        </div>
                                        <button type="button"
                                            class="ml-3 px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 !rounded-button whitespace-nowrap">
                                            Ajouter
                                        </button>
                                    </div>
                                </div>

                                <div class="border border-gray-200 rounded-md overflow-hidden ">
                                    <div
                                        class="px-4 py-3 text-gray-900 dark:text-gray-100 bg-white dark:bg-transparent text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aucun utilisateur bloqué
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button"
                                    class="mr-3 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 !rounded-button whitespace-nowrap">
                                    Annuler
                                </button>
                                <button type="button"
                                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 !rounded-button whitespace-nowrap">
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </div>

                        <!-- Course settings -->
                        <div id="content-courses" class="settings-content">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-sm p-6 mb-6">
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-6">Paramètres des
                                    cours</h2>

                                <div class="space-y-6">
                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Calendrier
                                                public</h3>
                                            <p class="text-sm text-gray-500">Rendre votre calendrier de cours visible
                                                par tous les étudiants</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-public-calendar"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-public-calendar"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                Notifications de devoirs</h3>
                                            <p class="text-sm text-gray-500">Envoyer des rappels automatiques pour les
                                                devoirs à venir</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-assignment-reminders"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-assignment-reminders"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">Partage de
                                                ressources</h3>
                                            <p class="text-sm text-gray-500">Autoriser les étudiants à partager des
                                                ressources dans vos cours</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-resource-sharing"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary" />
                                            <label for="toggle-resource-sharing"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                Commentaires sur les devoirs</h3>
                                            <p class="text-sm text-gray-500">Permettre aux étudiants de commenter vos
                                                retours sur les devoirs</p>
                                        </div>
                                        <div class="relative inline-block w-10 mr-2 align-middle">
                                            <input type="checkbox" id="toggle-assignment-comments"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-all duration-300 checked:right-0 checked:border-secondary"
                                                checked />
                                            <label for="toggle-assignment-comments"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-all duration-300"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="button"
                                    class="mr-3 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 !rounded-button whitespace-nowrap">
                                    Annuler
                                </button>
                                <button type="button"
                                    class="px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 !rounded-button whitespace-nowrap">
                                    Enregistrer les modifications
                                </button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
  // Sélectionner tous les onglets et contenus
          const tabs = document.querySelectorAll('.settings-tab');
          const contents = document.querySelectorAll('.settings-content');
          
      // Fonction pour activer un onglet
          function activateTab(tab) {
        // Désactiver tous les onglets
            tabs.forEach(t => {
              t.classList.remove('active', 'border-primary', 'text-gray-900');
              t.classList.add('text-gray-500', 'border-transparent');
          });
            
        // Activer l'onglet cliqué
            tab.classList.add('active', 'border-primary', 'text-gray-900');
            tab.classList.remove('text-gray-500', 'border-transparent');
            
        // Masquer tous les contenus
            contents.forEach(c => c.classList.add('hidden'));
            
        // Afficher le contenu correspondant
            const tabId = tab.id.replace('tab-', 'content-');
            const content = document.getElementById(tabId);
            if (content) {
              content.classList.remove('hidden');
          }
      }
      
      // Ajouter les écouteurs d'événements
      tabs.forEach(tab => {
        tab.addEventListener('click', () => activateTab(tab));
    });
      
      // Activer le premier onglet par défaut
      if (tabs.length > 0) {
        activateTab(tabs[0]);
    }
});
    </script>
</body>

</html>