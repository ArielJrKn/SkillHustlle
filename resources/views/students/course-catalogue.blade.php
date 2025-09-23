<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Course Catalogue</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/CourseCatalogue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <main class="pt-16 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <div class="flex-1 p-6">
                <!-- Active Filters & View Toggle -->
                <div class="flex flex-wrap items-center justify-between mb-6">
                    <div>
                        <h1 class="text-xl font-bold">Mes cours suivis</h1>
                    </div>

                    <div class="flex items-center space-x-2">
                        <a href="{{route('students.courseContainer')}}" class="text-primary"><h2>Voir d'autres cours...</h2></a>
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
                                <a href="{{route('students.courseContent')}}"><button class="text-primary text-sm font-medium !rounded-button whitespace-nowrap">Continue</button></a>
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


    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    
</body>
</html>