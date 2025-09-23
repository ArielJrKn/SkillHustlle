<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestions des cours | Administrateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/admin/cours.css"> -->
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
    <style>
        @media screen and (max-width: 1365px) and (min-width: 1024px) {
            .mb-3{
                display: flex;
                align-items: center; 
            }
        }

        /* --- TABLETTE (1023px à 768px) --- */
        @media screen and (max-width: 1023px) and (min-width: 768px){
            .mb-3{
                        display: flex;
                        align-items: center; 
                    }
        }
        /* --- PETIT MOBILE (moins de 480px) --- */
        @media screen and (max-width: 479px){
            .mb-3{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
        }
    </style>

</head>

<body class="bg-background min-h-screen">

    <!-- Loading Bar -->
    <div class="progress-bar"></div>

    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->
        <header
            class="h-16 backdrop-filter backdrop-blur-sm absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    <div class="">
                        <div class="flex items-center justify-between">
                            <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Validation des Cours</h1>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm">
                                    12 en attente
                                </span>
                                
                            </div>
                        </div>
                        <div class="">
                            <div class="flex gap-6">
                                <button id="tab" data-tab="1" class="tab active px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Attentes(12)
                                </button>
                                <button id="tab" data-tab="2" class="tab px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Validés(45)
                                </button>
                                <button id="tab"  data-tab="3" class="tab px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Refusés(8)
                                </button>
                                <!-- <button id="reconsideredTab" data-tab ="tab4" class="tab px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                                    Reconsidérés
                                </button> -->
                            </div>
                        </div>
                    </div>

                    <main class="max-w-7xl mx-auto pt-6">

                        <div id="1" class="tab-content active">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full mb-3">
                                <div class=" bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=advanced%20data%20science%20course%20with%20professional%20analyst%20working%20on%20complex%20visualizations%20in%20modern%20office%20environment&width=400&height=225&seq=5&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>

                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Data Science Avancée</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Antoine Dupont</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full whitespace-nowrap">
                                            Validé
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Cours approfondi sur l'analyse de données avancée, incluant machine learning et visualisation de
                                        données complexes.
                                    </p>
                                    
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Validé le 1 juillet 2025</span>
                                        <a href="{{route('admin.courseDetail')}}">
                                            <button 
                                            class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                            Voir les détails du cours
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="2" class="tab-content">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full flex mb-3">
                                <div class="aspect-video bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=advanced%20data%20science%20course%20with%20professional%20analyst%20working%20on%20complex%20visualizations%20in%20modern%20office%20environment&width=400&height=225&seq=5&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>
                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Data Science Avancée</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Antoine Dupont</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full whitespace-nowrap">
                                            Validé
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Cours approfondi sur l'analyse de données avancée, incluant machine learning et visualisation de
                                        données complexes.
                                    </p>
                                        <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Validé le 1 juillet 2025</span>
                                        <a href="CourseDetail.html">
                                            <button onclick="reconsiderCourse()"
                                            class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                            Voir les détails du cours
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full flex mb-3">
                                <div class="aspect-video bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=advanced%20data%20science%20course%20with%20professional%20analyst%20working%20on%20complex%20visualizations%20in%20modern%20office%20environment&width=400&height=225&seq=5&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>
                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Data Science Avancée</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Antoine Dupont</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full whitespace-nowrap">
                                            Refusé
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Cours approfondi sur l'analyse de données avancée, incluant machine learning et visualisation de
                                        données complexes.
                                    </p>
                                        <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Refusé le 1 juillet 2025</span>
                                        <a href="CourseDetail.html">
                                            <button onclick="reconsiderCourse()"
                                            class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                            Reconsidérer
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="3" class="tab-content">
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full flex mb-3">
                                <div class="aspect-video bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=advanced%20data%20science%20course%20with%20professional%20analyst%20working%20on%20complex%20visualizations%20in%20modern%20office%20environment&width=400&height=225&seq=5&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>
                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Data Science Avancée</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Antoine Dupont</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full whitespace-nowrap">
                                            Validé
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Cours approfondi sur l'analyse de données avancée, incluant machine learning et visualisation de
                                        données complexes.
                                    </p>
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Validé le 1 juillet 2025</span>
                                        <a href="CourseDetail.html">
                                            <button onclick="reconsiderCourse()"
                                            class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                            Voir les détails du cours
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full flex mb-3">
                                <div class="aspect-video bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=advanced%20data%20science%20course%20with%20professional%20analyst%20working%20on%20complex%20visualizations%20in%20modern%20office%20environment&width=400&height=225&seq=5&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>
                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Data Science Avancée</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Antoine Dupont</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full whitespace-nowrap">
                                            Refusé
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Cours approfondi sur l'analyse de données avancée, incluant machine learning et visualisation de
                                        données complexes.
                                    </p>
                                    
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Refusé le 1 juillet 2025</span>
                                        <a href="CourseDetail.html">
                                            <button onclick="reconsiderCourse()"
                                            class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                            Reconsidérer
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary bg-opacity-20 rounded-lg shadow-lg overflow-hidden w-full flex mb-3">
                                <div class="aspect-video bg-gray-100">
                                    <img src="https://readdy.ai/api/search-image?query=business%20professionals%20in%20modern%20office%20setting%20discussing%20marketing%20strategy%2C%20clean%20corporate%20environment&width=400&height=225&seq=2&orientation=landscape"
                                        class="w-96 h-full object-cover" alt="Cours">
                                </div>
                                <div class="p-4 w-full">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <h3 class="font-medium text-gray-900 dark:text-gray-100">Marketing Digital Avancé</h3>
                                            <p class="text-sm text-gray-500 mt-1">Par Marie Laurent</p>
                                        </div>
                                        <span
                                            class="px-2 py-1 text-xs font-medium bg-orange-100 text-orange-700 rounded-full whitespace-nowrap">
                                            En attente
                                        </span>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-600 line-clamp-2">
                                        Stratégies avancées de marketing digital, incluant SEO, SEM, médias sociaux et analyse de
                                        données pour optimiser vos campagnes marketing.
                                    </p>
                                    
                                    <div class="mt-4 flex items-center justify-between">
                                        <span class="text-sm text-gray-500">Soumis le 3 juillet 2025</span>
                                        <div class="flex gap-2">
                                            <a href="CourseDetail.html">
                                                <button
                                                class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-medium rounded-button hover:bg-primary/20 whitespace-nowrap">
                                                Analyser
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                Affichage 1-3 sur 12 résultats
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1.5 border border-gray-200 rounded-button hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
                                    disabled>
                                    Précédent
                                </button>
                                <button class="px-3 py-1.5 border border-gray-200 rounded-button hover:bg-gray-50">
                                    Suivant
                                </button>
                            </div>
                        </div>
                    </main>
                </main>
            </div>

        </div>    
    </div>

    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/admin/feedback.js"></script>
</body>

</html>