<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'emploies | Entité</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/recruit/jobs.css">
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
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold mb-6">Liste des offres publiées</h1>
                        
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-4">                                
                                <div class="flex items-center gap-2">
                                    <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm hover:bg-blue-600 transition-colors">Tous</button>
                                    <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg text-sm hover:bg-gray-600 transition-colors">Actif</button>
                                    <button class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg text-sm hover:bg-gray-600 transition-colors">Expiré</button>
                                </div>
                            </div>
                            
                            <a href="{{route('entreprise.createJob')}}">
                                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-button hover:bg-blue-600 transition-colors whitespace-nowrap">
                                    <div class="w-4 h-4 flex items-center justify-center">
                                        <i class="ri-add-line"></i>
                                    </div>
                                    <span>Nouvelle offre</span>
                                </button>
                            </a>
                        </div>

                        <div class="chart-container rounded-lg overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-primary bg-opacity-20 border-b border-gray-700">
                                        <tr>
                                            <th class="text-left py-4 px-6 text-gray-500 font-medium cursor-pointer hover:text-white transition-colors"
                                                data-sort="title">
                                                <div class="flex items-center">
                                                    Job Title
                                                </div>
                                            </th>
                                            <th class="text-left py-4 px-6 text-gray-500 font-medium cursor-pointer hover:text-white transition-colors"
                                                data-sort="department">
                                                <div class="flex items-center">
                                                    Department
                                                </div>
                                            </th>
                                            <th class="text-left py-4 px-6 text-gray-500 font-medium cursor-pointer hover:text-white transition-colors"
                                                data-sort="location">
                                                <div class="flex items-center">
                                                    Location
                                                </div>
                                            </th>
                                            <th class="text-left py-4 px-6 text-gray-500 font-medium cursor-pointer hover:text-white transition-colors"
                                                data-sort="status">
                                                <div class="flex items-center">
                                                    Status
                                                </div>
                                            </th>
                                            <th class="text-left py-4 px-6 text-gray-500 font-medium cursor-pointer hover:text-white transition-colors"
                                                data-sort="date">
                                                <div class="flex items-center">
                                                    Posted Date
                                                </div>
                                            </th>
                                            <th class="text-left py-4 px-6 text-gray-400 font-medium">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="jobsTableBody" class="bg-primary bg-opacity-10">
                                        <tr class="table-row border-b border-gray-700/50">
                                            <td class="py-4 px-6">
                                                <div class="text-gray-900 dark:text-gray-100 font-medium">Senior Frontend Developer</div>
                                                <div class="text-gray-400 text-sm">React, TypeScript, Next.js</div>
                                            </td>
                                            <td class="py-4 px-6 text-gray-500">Engineering</td>
                                            <td class="py-4 px-6 text-gray-500">San Francisco</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="status-active px-2 py-1 rounded-full text-xs font-medium">Active</span>
                                            </td>
                                            <td class="py-4 px-6 text-gray-400">2 days ago</td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{route('entreprise.createJob')}}">
                                                        <button
                                                        class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 rounded transition-colors"
                                                        title="Edit">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{route('admin.jobsDetail')}}">
                                                        <button
                                                        class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 rounded transition-colors"
                                                        title="View Applications">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                    </a>
                                                    <button
                                                        class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-400 hover:bg-gray-700 rounded transition-colors"
                                                        title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="flex items-center justify-between p-6 border-t border-gray-700">
                                <div class="flex items-center space-x-4">
                                    <span class="text-gray-400 text-sm">Show</span>
                                    <select
                                        class="bg-gray-700 text-white px-3 py-1 rounded border border-gray-600 focus:border-primary focus:outline-none text-sm pr-8">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>50</option>
                                        <option>100</option>
                                    </select>
                                    <span class="text-gray-400 text-sm">entries</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-gray-400 text-sm">Showing 1 to 7 of 7 entries</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-3 py-1 bg-gray-700 text-gray-400 rounded hover:bg-gray-600 hover:text-white transition-colors disabled:opacity-50 disabled:cursor-not-allowed text-sm"
                                        disabled>
                                        Previous
                                    </button>
                                    <button
                                        class="px-3 py-1 bg-primary text-white rounded hover:bg-blue-600 transition-colors text-sm">
                                        1
                                    </button>
                                    <button
                                        class="px-3 py-1 bg-gray-700 text-gray-400 rounded hover:bg-gray-600 hover:text-white transition-colors disabled:opacity-50 disabled:cursor-not-allowed text-sm"
                                        disabled>
                                        Next
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