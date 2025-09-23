<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Exercices</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/exercices.css">
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
                <main class="container mx-auto px-4 py-8">
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2 dark:text-white">Exercises</h1>
                        <p class="text-gray-600 dark:text-white">Practice your skills with our interactive exercises and challenges.</p>
                    </div>
                    
                    <div class="rounded-lg p-4 mb-8 bg-primary bg-opacity-20 dark:text-white">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex-1 min-w-[280px]">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="ri-search-line text-gray-400"></i>
                                    </div>
                                    <input type="text" class="w-full pl-10 pr-4 py-2 border-none rounded text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 shadow-sm focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Search exercises...">
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap gap-3">
                                <div class="dropdown relative ">
                                    <button class="flex items-center space-x-1 px-4 py-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded shadow-sm hover:shadow-md transition-shadow !rounded-button whitespace-nowrap">
                                        <span>Difficulty</span>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </button>
                                    <div class="dropdown-content mt-1 glassmorphism rounded shadow-lg p-2 dark:bg-darkSurface dark:text-white">
                                        <div class="flex items-center p-2  rounded cursor-pointer">
                                            <input type="checkbox" id="beginner" class="mr-2">
                                            <label for="beginner" class="cursor-pointer">Beginner</label>
                                        </div>
                                        <div class="flex items-center p-2  rounded cursor-pointer">
                                            <input type="checkbox" id="intermediate" class="mr-2">
                                            <label for="intermediate" class="cursor-pointer">Intermediate</label>
                                        </div>
                                        <div class="flex items-center p-2  rounded cursor-pointer">
                                            <input type="checkbox" id="advanced" class="mr-2">
                                            <label for="advanced" class="cursor-pointer">Advanced</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="dropdown relative">
                                    <button class="flex items-center space-x-1 px-4 py-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded shadow-sm hover:shadow-md transition-shadow !rounded-button whitespace-nowrap">
                                        <span>Topic</span>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </button>
                                    <div class="dropdown-content mt-1 glassmorphism rounded shadow-lg p-2 dark:bg-darkSurface dark:text-white">
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="programming" class="mr-2">
                                            <label for="programming" class="cursor-pointer">Programming</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="design" class="mr-2">
                                            <label for="design" class="cursor-pointer">Design</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="data-science" class="mr-2">
                                            <label for="data-science" class="cursor-pointer">Data Science</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="machine-learning" class="mr-2">
                                            <label for="machine-learning" class="cursor-pointer">Machine Learning</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="web-development" class="mr-2">
                                            <label for="web-development" class="cursor-pointer">Web Development</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="dropdown relative">
                                    <button class="flex items-center space-x-1 px-4 py-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded shadow-sm hover:shadow-md transition-shadow !rounded-button whitespace-nowrap">
                                        <span>Duration</span>
                                        <i class="ri-arrow-down-s-line"></i>
                                    </button>
                                    <div class="dropdown-content mt-1 glassmorphism rounded shadow-lg p-2 dark:bg-darkSurface dark:text-white">
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="short" class="mr-2">
                                            <label for="short" class="cursor-pointer">< 15 min</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="medium" class="mr-2">
                                            <label for="medium" class="cursor-pointer">15-30 min</label>
                                        </div>
                                        <div class="flex items-center p-2 hover:bg-gray-100 rounded cursor-pointer">
                                            <input type="checkbox" id="long" class="mr-2">
                                            <label for="long" class="cursor-pointer">> 30 min</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="flex items-center space-x-1 px-4 py-2 text-gray-900 dark:text-gray-100 bg-white bg-opacity-30 rounded shadow-sm hover:shadow-md transition-shadow !rounded-button whitespace-nowrap">
                                    <i class="ri-refresh-line"></i>
                                    <span>Reset</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-3 mt-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-primary">
                                Beginner
                                <button class="ml-1 text-gray-500 hover:text-gray-700">
                                    <i class="ri-close-line"></i>
                                </button>
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-primary">
                                Programming
                                <button class="ml-1 text-gray-500 hover:text-gray-700">
                                    <i class="ri-close-line"></i>
                                </button>
                            </span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-100 text-primary">
                                < 15 min
                                <button class="ml-1 text-gray-500 hover:text-gray-700">
                                    <i class="ri-close-line"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Exercise Card 1 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4 ">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">JavaScript Fundamentals</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-beginner">Beginner</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Master the basics of JavaScript with interactive coding challenges.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#50E3C2" stroke-dasharray="125.6" stroke-dashoffset="37.68" style="stroke-dashoffset: 37.68px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">70%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">7 of 10 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">12 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    <a href="exerciceDetail.html">Continue Exercise</a>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 2 -->
                        <div class="bg-primary bg-opacity-20 rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Responsive Web Design</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-intermediate">Intermediate</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Learn to build websites that look great on any device with CSS flexbox and grid.</p>
                                
                                <div class="flex items-center justify-between dark:text-white">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#4A90E2" stroke-dasharray="125.6" stroke-dashoffset="75.36" style="stroke-dashoffset: 75.36px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">40%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">4 of 10 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">25 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Continue Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 3 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Data Visualization with D3.js</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-advanced">Advanced</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Create interactive data visualizations with the powerful D3.js library.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#FF6B6B" stroke-dasharray="125.6" stroke-dashoffset="125.6" style="stroke-dashoffset: 125.6px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">0%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">0 of 8 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">40 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Start Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 4 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">React Hooks in Depth</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-intermediate">Intermediate</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Master React's hooks API with practical examples and challenges.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#4A90E2" stroke-dasharray="125.6" stroke-dashoffset="62.8" style="stroke-dashoffset: 62.8px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">50%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">6 of 12 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">30 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Continue Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 5 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Python Data Analysis</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-beginner">Beginner</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Learn to analyze and visualize data using Python's pandas and matplotlib.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#50E3C2" stroke-dasharray="125.6" stroke-dashoffset="94.2" style="stroke-dashoffset: 94.2px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">25%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">2 of 8 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">20 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Continue Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 6 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Machine Learning Basics</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-advanced">Advanced</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Introduction to machine learning algorithms and practical implementation.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#FF6B6B" stroke-dasharray="125.6" stroke-dashoffset="113.04" style="stroke-dashoffset: 113.04px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">10%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">1 of 10 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">45 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Continue Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 7 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">UI/UX Design Principles</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-beginner">Beginner</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Learn the fundamentals of user interface and experience design.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#50E3C2" stroke-dasharray="125.6" stroke-dashoffset="0" style="stroke-dashoffset: 0px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">100%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">6 of 6 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">15 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 bg-gray-200 text-gray-600 font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Completed
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 8 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Git & GitHub Workflow</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-intermediate">Intermediate</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Master version control with Git and collaborative development on GitHub.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#4A90E2" stroke-dasharray="125.6" stroke-dashoffset="125.6" style="stroke-dashoffset: 125.6px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">0%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">0 of 8 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">25 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Start Exercise
                                </button>
                            </div>
                        </div>
                        
                        <!-- Exercise Card 9 -->
                        <div class="bg-primary bg-opacity-20 dark:text-white rounded-lg overflow-hidden shadow-md transition-all duration-300 card-hover">
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Node.js API Development</h3>
                                    <span class="px-2 py-1 rounded-full text-xs font-medium difficulty-advanced">Advanced</span>
                                </div>
                                
                                <p class="text-gray-600 text-sm mb-4">Build RESTful APIs with Node.js, Express, and MongoDB.</p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-12 h-12 mr-3">
                                            <circle class="progress-circle-bg" cx="24" cy="24" r="20"></circle>
                                            <circle class="progress-circle-value" cx="24" cy="24" r="20" stroke="#FF6B6B" stroke-dasharray="125.6" stroke-dashoffset="88.92" style="stroke-dashoffset: 88.92px;"></circle>
                                            <text x="24" y="28" text-anchor="middle" class="text-xs font-medium" fill="#333">30%</text>
                                        </svg>
                                        <div>
                                            <p class="text-xs text-gray-500">Progress</p>
                                            <p class="text-sm font-medium">3 of 10 completed</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-1"></i>
                                        <span class="text-sm text-gray-600">35 min</span>
                                    </div>
                                </div>
                                
                                <button class="w-full mt-4 py-2 glow-button text-white font-medium rounded-lg transition-all !rounded-button whitespace-nowrap">
                                    Continue Exercise
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-between items-center">
                        <div class="text-sm text-gray-600">
                            Showing 9 of 24 exercises
                        </div>
                        
                        <div class="flex space-x-2">
                            <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors !rounded-button whitespace-nowrap">
                                <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <button class="w-10 h-10 flex items-center justify-center rounded bg-primary text-white !rounded-button whitespace-nowrap">1</button>
                            <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors !rounded-button whitespace-nowrap">2</button>
                            <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors !rounded-button whitespace-nowrap">3</button>
                            <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-300 text-gray-600 hover:bg-gray-100 transition-colors !rounded-button whitespace-nowrap">
                                <i class="ri-arrow-right-s-line"></i>
                            </button>
                        </div>
                    </div>
                </main>
            </main>

            <!-- Right Sidebar - Notifications -->
        <!-- Right Sidebar - Notifications -->
        <aside class="sideBarNotification hidden w-90 backdrop-filter backdrop-blur-2xl p-6 dark:border-gray-800">
            @include('layouts.notifications')
        </aside>

        <!-- Right Sidebar - message -->
        <aside class="absolute hidden top-0 bottom-0 right-0 overflow-hidden z-50 sideBarMessage backdrop-filter backdrop-blur-2xl dark:border-gray-800">
            @include('layouts.msg')
        </aside>

    </div>


    <script src="storage/js_style/student_dashbord_sys_notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/progressCircleExercice.js"></script>

</body>
</html>