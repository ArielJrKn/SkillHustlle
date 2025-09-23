<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Entité</title>
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
                @include('entreprise.layouts.sideBar')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 z-40 hidden bg-black bg-opacity-50" id="mobileSidebarBackdrop"></div>
                <div class="fixed inset-y-0 left-0 z-50 w-64 dark:bg-darkSurface bg-white transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden" id="mobileSidebar">
                @include('entreprise.layouts.sideBarMobile')
                </div>

                <!-- Main Content Area -->
                <main class="pt-20 flex-1 overflow-y-auto bg-white dark:bg-black p-4">
                    <div class="flex items-center justify-between p-2">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Welcome back, Thomas!</h1>
                            <p class="text-gray-500 mt-1">Here's what's happening with your hiring today.</p>
                        </div>
                        <div class="flex items-center space-x-4">

                            <a href="{{route('entreprise.createJob')}}" data-readdy="true">
                                <button class="bg-primary px-3 rounded-md flex items-center">
                                    <i class="ri-add-line p-2"></i>
                                    <h2>Publier une offre</h2>
                                </button>
                            </a>
                        </div>
                    </div>
                    <main class="">
                    <!-- Metrics Cards -->
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-8">
                        <div class="metric-card bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-primary/20 rounded-lg">
                                    <i class="ri-briefcase-line text-primary text-xl"></i>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">247</div>
                                    <div class="text-sm text-gray-400">Total Job Offers</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-secondary text-sm">
                                    <div class="w-3 h-3 flex items-center justify-center mr-1">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    12.5%
                                </div>
                                <div class="w-16 h-8" id="chart1"></div>
                            </div>
                        </div>
                        <div class="metric-card bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-orange-500/20 rounded-lg">
                                    <i class="ri-user-line text-orange-400 text-xl"></i>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">1,847</div>
                                    <div class="text-sm text-gray-400">Active Applications</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-secondary text-sm">
                                    <div class="w-3 h-3 flex items-center justify-center mr-1">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    8.2%
                                </div>
                                <div class="w-16 h-8" id="chart2"></div>
                            </div>
                        </div>
                        <div class="metric-card bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-purple-500/20 rounded-lg">
                                    <i class="ri-eye-line text-purple-400 text-xl"></i>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">5,234</div>
                                    <div class="text-sm text-gray-400">Profile Views</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-red-400 text-sm">
                                    <div class="w-3 h-3 flex items-center justify-center mr-1">
                                        <i class="ri-arrow-down-line"></i>
                                    </div>
                                    3.1%
                                </div>
                                <div class="w-16 h-8" id="chart3"></div>
                            </div>
                        </div>
                        <div class="metric-card bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 flex items-center justify-center bg-secondary/20 rounded-lg">
                                    <i class="ri-team-line text-secondary text-xl"></i>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">89</div>
                                    <div class="text-sm text-gray-400">Pipeline Status</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-secondary text-sm">
                                    <div class="w-3 h-3 flex items-center justify-center mr-1">
                                        <i class="ri-arrow-up-line"></i>
                                    </div>
                                    15.3%
                                </div>
                                <div class="w-16 h-8" id="chart4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Charts Section -->
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 gap-8 mb-8">
                        <!-- Applicant Traffic Chart -->
                        <div class="chart-container bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Applicant Traffic</h3>
                                <div class="flex bg-gray-700 rounded-lg p-1">
                                    <button class="px-3 py-1 text-sm bg-primary text-gray-900 dark:text-gray-100 rounded-md">Weekly</button>
                                    <button class="px-3 py-1 text-sm text-gray-400 hover:text-gray-900 dark:text-gray-100">Monthly</button>
                                </div>
                            </div>
                            <div class="h-64 w-auto" id="trafficChart"></div>
                        </div>
                        <!-- Hiring Pipeline Chart -->
                        <div class="chart-container bg-primary bg-opacity-20 p-6 rounded-lg">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Hiring Pipeline</h3>
                                <div class="w-4 h-4 flex items-center justify-center">
                                    <i class="ri-more-line text-gray-400"></i>
                                </div>
                            </div>
                            <div class="h-64" id="pipelineChart"></div>
                        </div>
                    </div>
                    <!-- Recent Activity -->
                    <div class="chart-container bg-primary bg-opacity-20 p-6 rounded-lg">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Recent Activity</h3>
                            <button class="text-primary hover:text-blue-400 text-sm">View All</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-700">
                                        <th class="text-left py-3 px-4 text-gray-400 font-medium">Candidate</th>
                                        <th class="text-left py-3 px-4 text-gray-400 font-medium">Position</th>
                                        <th class="text-left py-3 px-4 text-gray-400 font-medium">Status</th>
                                        <th class="text-left py-3 px-4 text-gray-400 font-medium">Date</th>
                                        <th class="text-left py-3 px-4 text-gray-400 font-medium">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-700/50 hover:bg-gray-700/30">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img src="storage/media/chat.jpg" alt="Candidate" class="w-8 h-8 rounded-full object-cover mr-3">
                                                <div>
                                                    <div class="text-gray-900 dark:text-gray-100 font-medium">Michael</div>
                                                    <div class="text-gray-400 text-sm">michael@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-500">Senior Frontend Developer</td>
                                        <td class="py-4 px-4">
                                            <span class="px-2 py-1 bg-secondary/20 text-secondary rounded-full text-xs">Interview Scheduled</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-400">2 hours ago</td>
                                        <td class="py-4 px-4">
                                            <button class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-gray-900 dark:text-gray-100">
                                                <i class="ri-more-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-700/50 hover:bg-gray-700/30">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img src="storage/media/chat.jpg" alt="Candidate" class="w-8 h-8 rounded-full object-cover mr-3">
                                                <div>
                                                    <div class="text-gray-900 dark:text-gray-100 font-medium">Emily</div>
                                                    <div class="text-gray-400 text-sm">emily.rodriguez@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-500">UX Designer</td>
                                        <td class="py-4 px-4">
                                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs">Under Review</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-400">5 hours ago</td>
                                        <td class="py-4 px-4">
                                            <button class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-gray-900 dark:text-gray-100">
                                                <i class="ri-more-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-700/50 hover:bg-gray-700/30">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img src="storage/media/chat.jpg" alt="Candidate" class="w-8 h-8 rounded-full object-cover mr-3">
                                                <div>
                                                    <div class="text-gray-900 dark:text-gray-100 font-medium">David</div>
                                                    <div class="text-gray-400 text-sm">david.thompson@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-500">Product Manager</td>
                                        <td class="py-4 px-4">
                                            <span class="px-2 py-1 bg-primary/20 text-primary rounded-full text-xs">New Application</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-400">1 day ago</td>
                                        <td class="py-4 px-4">
                                            <button class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-gray-900 dark:text-gray-100">
                                                <i class="ri-more-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-700/50 hover:bg-gray-700/30">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img src="storage/media/chat.jpg" alt="Candidate" class="w-8 h-8 rounded-full object-cover mr-3">
                                                <div>
                                                    <div class="text-gray-900 dark:text-gray-100 font-medium">Jessica</div>
                                                    <div class="text-gray-400 text-sm">jessica.park@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-500">Data Scientist</td>
                                        <td class="py-4 px-4">
                                            <span class="px-2 py-1 bg-red-500/20 text-red-400 rounded-full text-xs">Rejected</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-400">2 days ago</td>
                                        <td class="py-4 px-4">
                                            <button class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-gray-900 dark:text-gray-100">
                                                <i class="ri-more-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-700/30">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <img src="storage/media/chat.jpg" alt="Candidate" class="w-8 h-8 rounded-full object-cover mr-3">
                                                <div>
                                                    <div class="text-gray-900 dark:text-gray-100 font-medium">Alex</div>
                                                    <div class="text-gray-400 text-sm">alex.kumar@email.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-500">Backend Developer</td>
                                        <td class="py-4 px-4">
                                            <span class="px-2 py-1 bg-secondary/20 text-secondary rounded-full text-xs">Hired</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-400">3 days ago</td>
                                        <td class="py-4 px-4">
                                            <button class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-gray-900 dark:text-gray-100">
                                                <i class="ri-more-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
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

    <!-- ajout d'un nouveau modal -->

    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/recruit/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script>

    </script>
</body>

</html>