<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Cours</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/style.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/courseContainer.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/CourseCatalogue.css">
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
                left: 0;
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
        <header class="h-16 backdrop-filter backdrop-blur-sm absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
        @include('layouts.header')
        </header>


        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Left Sidebar - Course Outline -->
            <aside class="pt-16 w-20 bg-white dark:bg-black flex flex-col lg:flex hidden md:flex items-center justify-between py-6 space-y-8">
            @include('social.layouts.sideBar')
            </aside>


            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden"
                    id="mobileSidebar">
                    @include('social.layouts.mobile')
                </div>

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black">

                
                <div class="flex">
                    <!-- Filters Sidebar -->
                    <aside class="filter hidden p-6">
                        <div class="text-lg flex item-center justify-between font-semibold text-gray-900 dark:text-gray-100 mb-6">
                            <h4>Filtre</h4>
                            <i class="ri-close-line filterClose"></i>
                        </div>
                        
                        <!-- Status Filter -->
                        <!-- Categories -->
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-500 mb-3">Categories</h3>
                            <div class="space-y-2">
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox" checked>
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Web Development</span>
                                    <span class="ml-auto text-xs text-gray-500">128</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Mobile Development</span>
                                    <span class="ml-auto text-xs text-gray-500">86</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Data Science</span>
                                    <span class="ml-auto text-xs text-gray-500">64</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Machine Learning</span>
                                    <span class="ml-auto text-xs text-gray-500">42</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">UI/UX Design</span>
                                    <span class="ml-auto text-xs text-gray-500">37</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Level -->
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-500 mb-3">Level</h3>
                            <div class="space-y-2">
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Beginner</span>
                                    <span class="ml-auto text-xs text-gray-500">245</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox" checked>
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Intermediate</span>
                                    <span class="ml-auto text-xs text-gray-500">186</span>
                                </label>
                                <label class="custom-checkbox w-full border-0">
                                    <input type="checkbox">
                                    <span class="checkmark mr-3"></span>
                                    <span class="text-sm">Advanced</span>
                                    <span class="ml-auto text-xs text-gray-500">92</span>
                                </label>
                            </div>
                        </div>
                    </aside>

                    <!-- Main Content -->
                    <main class="flex-1">
                        <!-- Main Content -->
                        <div class="flex-1 p-6">
                            <!-- Active Filters & View Toggle -->
                            <div class="flex items-center justify-between">
                                <div class="flex flex-wrap items-center justify-between mb-6">
                                    <div class="flex flex-wrap items-center gap-2 mb-4 sm:mb-0">
                                        <span class="text-sm text-gray-600">Active filters:</span>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-primary">
                                                Web Development
                                                <button class="ml-1 w-4 h-4 flex items-center justify-center">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-primary">
                                                Intermediate
                                                <button class="ml-1 w-4 h-4 flex items-center justify-center">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-primary">
                                                3-6 hours
                                                <button class="ml-1 w-4 h-4 flex items-center justify-center">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-primary">
                                                4+ Rating
                                                <button class="ml-1 w-4 h-4 flex items-center justify-center">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between sticky top-0">
                                    <div class="flex items-center justify-between w-full p-2">
                                        <div class="filterBtn p-2 bg-primary flex rounded-md">
                                            <i class="ri-filter-line"></i>
                                            <h3>Filtre</h3>
                                        </div>             
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Course Grid -->
                            <div id="course-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Course Card 1 -->
                                <div class="course-card bg-primary bg-opacity-20 dark:text-white rounded-lg shadow overflow-hidden">
                                    <div class="relative">
                                        <img src="https://readdy.ai/api/search-image?query=modern%20web%20development%20coding%20environment%20with%20React%20code%20on%20screen%2C%20clean%20desk%20setup%20with%20keyboard%20and%20mouse%2C%20professional%20development%20workspace&width=400&height=225&seq=1&orientation=landscape" alt="Advanced React Patterns" class="w-full h-48 object-cover object-top">
                                        <div class="absolute top-3 right-3">
                                            <div class="progress-circle backdrop-filter backdrop-blur-xl rounded-lg">
                                                <svg width="40" height="40" viewBox="0 0 40 40">
                                                    <circle class="bg" cx="20" cy="20" r="18"></circle>
                                                    <circle class="progress" cx="20" cy="20" r="18" stroke-dasharray="113.1" stroke-dashoffset="28.3"></circle>
                                                    <text x="20" y="24" text-anchor="middle" fill="#2196F3" font-size="12" font-weight="bold">75%</text>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-xs font-medium px-2 py-1 bg-blue-100 text-primary rounded">Intermediate</span>
                                            <div class="flex text-yellow-400 text-xs">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line"></i>
                                                <span class="text-gray-600 ml-1">4.5</span>
                                            </div>
                                        </div>
                                        <h3 class="font-semibold text-lg mb-2 text-gray-900 dark:text-gray-100">Advanced React Patterns</h3>
                                        <p class="text-sm text-gray-600 mb-3 dark:text-white">Learn advanced React patterns including compound components, render props, and hooks.</p>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                                    <div class="w-4 h-4 flex items-center justify-center text-gray-600">
                                                        <i class="ri-time-line"></i>
                                                    </div>
                                                </div>
                                                <span class="text-xs text-gray-600">5.5 hours</span>
                                            </div>
                                            <a href="{{route('social.courseDetail')}}"><button class="text-primary text-sm font-medium !rounded-button whitespace-nowrap">Voir les détailes</button></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Load More Button -->
                            <div class="mt-8 text-center">
                                <button id="load-more" class="px-6 py-3 bg-primary text-white rounded-full shadow-md hover:shadow-lg transition-all !rounded-button whitespace-nowrap">Load More Courses</button>
                            </div>
                        </div>
                    </main>
                </div>
                </main>
            </div>

            <aside class="RightSideBar backdrop-filter backdrop-blur-lg z-50 hidden h-full pb-16 fixed right-0 p-6 space-y-6 overflow-y-auto">
                @include('social.layouts.rightSideBar')                
            </aside>

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

    <!-- ajout d'un modal ici-->



    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/index.js"></script>
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