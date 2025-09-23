<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature | Dashboard</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/feedback.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/favoris.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="storage/js_style/student_dashboard_tailwindConfig.js"></script>

    <style>
                /* --- TABLETTE (1023px à 768px) --- */
        @media screen and (max-width: 1023px) and (min-width: 768px){
            .filter{
                top: 0;
                position: absolute;
                height: 100%;
                width: 50%;
                z-index: 50;
                backdrop-filter: blur(50px);
            }
        }


        /* --- PC STANDARD (1365px à 1024px) --- */
        @media screen and (max-width: 1365px) and (min-width: 1024px){
            .filter{
                top: 0;
                position: absolute;
                height: 100%;
                width: 30%;
                z-index: 50;
                backdrop-filter: blur(50px);
            }
            /*.card{
                display: flex;
                align-items: center;
                justify-content: center;
            }*/
        }

        /* --- PETIT MOBILE (moins de 480px) --- */
        @media screen and (max-width: 479px){
            .filter{
                top: 0;
                position: absolute;
                height: 100%;
                width: 100%;
                z-index: 50;
                backdrop-filter: blur(50px);
            }

            /*.card{
                display: flex;
                flex-direction: column;
                background-color: red;

            }*/
        }

        @media screen and (max-width: 767px) and (min-width: 480px){
            /*.card{
                display: flex;
                align-items: start;
                flex-direction: column;
                width: 100%;
                justify-content: start;
            }*/
        }
    </style>
</head>
<body class="bg-background min-h-screen">

    <!-- Loading Bar -->
    <div class="progress-bar"></div>

    <!-- Main Container -->
    <div class="flex flex-col h-screen">
        <!-- Top Navigation Bar -->

        <header class="h-28 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex flex-col justify-between px-6 z-10">
            <div class="flex justify-between items-center pt-4">
                @include('layouts.headerV2')
            </div>

            <div class="flex items-center justify-between sticky top-0 z-50">
                <div class="flex items-center justify-between w-full p-2">
                    <div class="filterBtn p-2 bg-primary flex rounded-md">
                        <i class="ri-filter-line"></i>
                        <h3>Filtre</h3>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-slate-400">
                        <span>Trier par:</span>
                        <select class=" p-2 bg-slate-700 border border-slate-600 text-slate-200 text-sm rounded focus:ring-primary focus:border-primary pr-8">
                            <option>Date récente</option>
                            <option>Nom A-Z</option>
                            <option>Statut</option>
                        </select>
                    </div>              
                </div>
            </div>

        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <main class="pt-14 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <div class="flex">
                    <!-- Filters Sidebar -->
                    <aside class="filter hidden rounded-md p-6">
                        <div class="text-lg flex item-center justify-between font-semibold text-gray-900 dark:text-gray-100 mb-6">
                            <h4>Filtre</h4>
                            <i class="ri-close-line filterClose"></i>
                        </div>
                        
                        <!-- Status Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-slate-500 mb-3">Statut</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="hidden" checked>
                                    <div class="w-4 h-4 bg-primary border-2 border-primary rounded flex items-center justify-center mr-3">
                                        <i class="ri-check-line text-gray-900 dark:text-gray-100 text-xs"></i>
                                    </div>
                                    <span class="text-sm text-slate-500">Nouveau (45)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="hidden">
                                    <div class="w-4 h-4 border-2 border-slate-500 rounded flex items-center justify-center mr-3"></div>
                                    <span class="text-sm text-slate-500">En révision (89)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="hidden">
                                    <div class="w-4 h-4 border-2 border-slate-500 rounded flex items-center justify-center mr-3"></div>
                                    <span class="text-sm text-slate-500">Entretien (34)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="hidden">
                                    <div class="w-4 h-4 border-2 border-slate-500 rounded flex items-center justify-center mr-3"></div>
                                    <span class="text-sm text-slate-500">Accepté (79)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Department Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-slate-500 mb-3">Département</label>
                            <div class="relative">
                                <select class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 border border-slate-600 text-slate-200 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pr-8 py-2.5">
                                    <option>Tous les départements</option>
                                    <option>Développement</option>
                                    <option>Marketing</option>
                                    <option>Ressources Humaines</option>
                                    <option>Ventes</option>
                                </select>
                            </div>
                        </div>

                        <!-- Date Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-slate-500 mb-3">Période</label>
                            <div class="space-y-3">
                                <input type="date" class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 border border-slate-600 text-slate-200 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full py-2.5">
                                <input type="date" class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 border border-slate-600 text-slate-200 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full py-2.5">
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded-lg p-4">
                            <h4 class="text-sm font-medium text-slate-500 mb-3">Statistiques Rapides</h4>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-slate-400">Aujourd'hui</span>
                                    <span class="text-gray-900 dark:text-gray-100 font-medium">12</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-slate-400">Cette semaine</span>
                                    <span class="text-gray-900 dark:text-gray-100 font-medium">67</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-slate-400">En attente</span>
                                    <span class="text-orange-400 font-medium">89</span>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- Main Content -->
                    <main class="flex-1">
                        <!-- Action Bar -->

                        <!-- Candidates List -->
                        <div class="pt-16 p-2 space-y-4 custom-scrollbar max-h-screen overflow-y-auto">
                            <!-- Candidate Card 1 -->
                            <div class="candidate-card bg-primary bg-opacity-20 rounded-lg p-6">
                                <div class="flex items-center justify-between ">
                                    <div class="flex items-center space-x-4">
                                        <img src="storage/media/chat.jpg" alt="Photo de profil" class="w-12 h-12 rounded-full object-cover object-top">
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sophie</h3>
                                            <p class="text-slate-400 text-sm">Développeuse Full Stack Senior</p>
                                            <p class="text-slate-500 text-xs mt-1">Candidature du 28 juillet 2025</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        
                                        <div class="flex space-x-2">
                                            <a href="{{route('social.userProfilDetail')}}">
                                                <button class="bg-slate-700 hover:bg-slate-600 text-slate-500 p-2 rounded-lg whitespace-nowrap !rounded-button">
                                                    <div class=" flex items-center justify-center">
                                                        <h3>Voir les détails</h3>
                                                    </div>
                                                </button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 lg:flex lg:flex-row md:flex md:flex-row items-center justify-between sm:flex-col sm:flex  hidden lg:block md:block">
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-slate-700 text-slate-500 px-2 py-1 rounded text-xs">React</span>
                                        <span class="bg-slate-700 text-slate-500 px-2 py-1 rounded text-xs">Node.js</span>
                                        <span class="bg-slate-700 text-slate-500 px-2 py-1 rounded text-xs">TypeScript</span>
                                        <span class="bg-slate-700 text-slate-500 px-2 py-1 rounded text-xs">5 ans d'exp.</span>
                                    </div>
                                    <p class="text-slate-500 text-md p-2">Master en Informatique - École Centrale Paris</p>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </main>
        </div>
    </div>


    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const filterBtn = document.querySelector('.filterBtn');
            const filterClose = document.querySelector('.filterClose');
            const filter = document.querySelector('.filter');

            filterBtn.addEventListener('click', function(){
                filter.classList.toggle('hidden');
            });

            filterClose.addEventListener('click', function(){
                filter.classList.add('hidden');
            })


        })
    </script>

</body>
</html>