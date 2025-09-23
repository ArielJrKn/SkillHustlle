<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Administrateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/student_dashboard.css">
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
            <aside
                class="pt-16 w-80 bg-white dark:bg-darkSurface overflow-y-auto dark:border-gray-800 hidden md:block md:w-60">
                @include('students/layouts/sideBar')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden" id="mobileSidebar">
                    @include('students.layouts.sideBarMobile')
                </div>

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Your Dashboard</h1>
                    
                    <!-- Active Courses Section -->
                    <section class="mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Active Courses</h2>
                            <a href="{{route('students.courseCatalogue')}}">
                                <button class="text-primary text-sm font-medium !rounded-button whitespace-nowrap">View All Courses</button>
                            </a>
                        </div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Course 1 -->
                            <div class="course-card bg-primary bg-opacity-20 rounded-lg shadow overflow-hidden">
                                <div class="h-40 bg-gray-200 relative">
                                    <img src="https://readdy.ai/api/search-image?query=modern%20web%20development%20coding%20on%20laptop%20screen%2C%20showing%20HTML%2C%20CSS%20and%20JavaScript%20code%2C%20professional%20lighting%2C%20clean%20desk%20setup%2C%20high%20quality&width=400&height=200&seq=course1&orientation=landscape" alt="Web Development" class="w-full h-full object-cover">
                                    <div class="absolute top-3 right-3 backdrop-filter backdrop-blur-lg text-gray-600 dark:text-white text-xs font-medium px-2 py-1 rounded">In Progress</div>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Advanced Web Development</h3>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Instructor: Dr. Michael Chen</p>
                                    <div class="mb-2">
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600 dark:text-gray-300">Progress</span>
                                            <span class="text-primary font-medium">68%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-fill bg-primary" style="width: 68%"></div>
                                        </div>
                                    </div>
                                    <a href="{{route('students.courseContent')}}">
                                        <button class="mt-3 backdrop-filter backdrop-blur-lg text-gray-600 dark:text-white py-2 px-4 rounded-button hover:bg-primary/90 transition-colors w-full whitespace-nowrap">Continue learning</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                                        
                    <!-- Learning Statistics -->
                    <section>
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Learning Statistics</h2>
                            <div class="flex space-x-2">
                                <button class="bg-white dark:bg-darkSurface text-gray-700 dark:text-gray-300 py-1 px-3 text-sm rounded-full border border-gray-200 dark:border-gray-700 hover:border-primary hover:text-primary transition-colors whitespace-nowrap">Weekly</button>
                                <button class="bg-primary text-white py-1 px-3 text-sm rounded-full border border-primary whitespace-nowrap">Monthly</button>
                                <button class="bg-white dark:bg-darkSurface text-gray-700 dark:text-gray-300 py-1 px-3 text-sm rounded-full border border-gray-200 dark:border-gray-700 hover:border-primary hover:text-primary transition-colors whitespace-nowrap">Yearly</button>
                            </div>
                        </div>
                        
                        <div class="bg-primary bg-opacity-20 rounded-lg shadow p-4 h-80">
                            <div id="learningChart" class="w-full h-full"></div>
                        </div>
                    </section>
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

    <!-- ajout d'un modal ici-->



    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="storage/js_style/student_charts_scripts.js"></script>

    </script>
</body>

</html>