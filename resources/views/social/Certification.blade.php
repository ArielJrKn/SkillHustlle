<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Certification</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/style.css">
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
                                    <div class="flex p-3">
                    <!-- Main Content -->
                    
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Card 1 - Verified -->
                        <div class=" dark:text-white bg-primary bg-opacity-20 card card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=modern%20digital%20certificate%20with%20holographic%20elements%2C%20futuristic%20design%2C%20tech%20aesthetic%2C%20minimalist%20layout%20with%20electric%20blue%20and%20mint%20green%20accents%2C%20professional%20certification%20document&width=400&height=200&seq=cert1&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                                        Verified
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Advanced Machine Learning & Neural Networks</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on June 15, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    Expert Level Certification
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="download-btn flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Download
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-share-line"></i>
                                        </div>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2 - Verified -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=digital%20certificate%20with%20abstract%20data%20visualization%20elements%2C%20professional%20tech%20design%2C%20blue%20and%20green%20color%20scheme%2C%20clean%20modern%20layout%2C%20cloud%20computing%20certification&width=400&height=200&seq=cert2&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                                        Verified
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Cloud Architecture & Infrastructure Design</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on May 23, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    Professional Level Certification
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="download-btn flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Download
                                    </button>
                                    <button class=" text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-share-line"></i>
                                        </div>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3 - Pending -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=cybersecurity%20certificate%20with%20digital%20lock%20and%20shield%20imagery%2C%20secure%20network%20visualization%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert3&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge pending inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <span class="w-2 h-2 bg-yellow-500 rounded-full mr-1.5"></span>
                                        Pending
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Advanced Cybersecurity & Threat Analysis</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on July 1, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    Verification in progress
                                </div>
                                <div class="flex justify-between items-center">
                                    <button disabled class="flex items-center gap-1.5 px-3 py-1.5 bg-gray-200 text-gray-500 rounded-button text-sm font-medium cursor-not-allowed whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Unavailable
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-question-line"></i>
                                        </div>
                                        Status
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 4 - In Progress -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=data%20science%20certificate%20with%20data%20visualization%20elements%2C%20analytics%20graphs%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert4&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top opacity-50">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-1.5"></span>
                                        In Progress
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Data Science & Predictive Analytics</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-2">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-bar-chart-line"></i>
                                    </div>
                                    Progress: 68% completed
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                                    <div class="bg-primary h-2 rounded-full" style="width: 68%"></div>
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    Estimated completion: July 25, 2025
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-play-line"></i>
                                        </div>
                                        Continue
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-information-line"></i>
                                        </div>
                                        Details
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 5 - Verified -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=web%20development%20certificate%20with%20code%20elements%2C%20responsive%20design%20visualization%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert5&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                                        Verified
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Full-Stack Web Development</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on April 10, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    Professional Level Certification
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="download-btn flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Download
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-share-line"></i>
                                        </div>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 6 - In Progress -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=blockchain%20technology%20certificate%20with%20distributed%20ledger%20visualization%2C%20cryptocurrency%20elements%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert6&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top opacity-50">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-1.5"></span>
                                        In Progress
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2 text-gray-900 dark:text-gray-100">Blockchain Development & Smart Contracts</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-2">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-bar-chart-line"></i>
                                    </div>
                                    Progress: 32% completed
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                                    <div class="bg-primary h-2 rounded-full" style="width: 32%"></div>
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    Estimated completion: August 15, 2025
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-play-line"></i>
                                        </div>
                                        Continue
                                    </button>
                                    <button class=" text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-information-line"></i>
                                        </div>
                                        Details
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 7 - Pending -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=mobile%20app%20development%20certificate%20with%20smartphone%20UI%20elements%2C%20app%20design%20visualization%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert7&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge pending inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <span class="w-2 h-2 bg-yellow-500 rounded-full mr-1.5"></span>
                                        Pending
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2">Mobile App Development & UI/UX Design</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on June 28, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-time-line"></i>
                                    </div>
                                    Verification in progress
                                </div>
                                <div class="flex justify-between items-center">
                                    <button disabled class="flex items-center gap-1.5 px-3 py-1.5 bg-gray-200 text-gray-500 rounded-button text-sm font-medium cursor-not-allowed whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Unavailable
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-question-line"></i>
                                        </div>
                                        Status
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 8 - Verified -->
                        <div class="card bg-primary bg-opacity-20 dark:text-white card-light rounded-lg overflow-hidden shadow-md hover:shadow-xl glow-effect">
                            <div class="h-40 bg-gradient-to-r from-primary/10 to-secondary/10 relative">
                                <img src="https://readdy.ai/api/search-image?query=devops%20engineering%20certificate%20with%20CI%2FCD%20pipeline%20visualization%2C%20container%20orchestration%20elements%2C%20professional%20tech%20aesthetic%2C%20blue%20and%20green%20color%20scheme%2C%20modern%20minimal%20design&width=400&height=200&seq=cert8&orientation=landscape" alt="Certificate" class="w-full h-full object-cover object-top">
                                <div class="absolute top-3 right-3">
                                    <span class="status-badge inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5"></span>
                                        Verified
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h3 class="text-lg font-semibold mb-2 line-clamp-2">DevOps Engineering & CI/CD Pipelines</h3>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-calendar-line"></i>
                                    </div>
                                    Completed on March 18, 2025
                                </div>
                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-award-line"></i>
                                    </div>
                                    Expert Level Certification
                                </div>
                                <div class="flex justify-between items-center">
                                    <button class="download-btn flex items-center gap-1.5 px-3 py-1.5 bg-primary text-white rounded-button text-sm font-medium hover:bg-primary/90 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-download-line"></i>
                                        </div>
                                        Download
                                    </button>
                                    <button class="text-black flex items-center gap-1.5 px-3 py-1.5 bg-white border border-gray-200 rounded-button text-sm font-medium hover:bg-gray-50 transition-all whitespace-nowrap">
                                        <div class="w-4 h-4 flex items-center justify-center">
                                            <i class="ri-share-line"></i>
                                        </div>
                                        Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                
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
        
    </script>
</body>

</html>