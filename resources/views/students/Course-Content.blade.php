<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Web Development | Course Content</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/courseContent.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
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

            <!-- Left Sidebar - Course Outline -->
            <aside class="CourseSideBar lg:pt-16 md:pt-16 sm:pt-0 w-80 bg-white dark:bg-darkSurface overflow-y-auto  dark:border-gray-800 md:block">
                <div class="p-4  dark:border-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Advanced Web Development</h2>
                    <div class="flex items-center mt-2">
                        <div class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full" style="width: 68%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-1 text-sm text-gray-600 dark:text-gray-400">
                        <span>Progress: 68%</span>
                        <span>12/18 Lessons</span>
                    </div>
                </div>
                <div class="py-2">
                    <!-- Module 1 -->
                    <div class="mb-2">
                        <div class="sidebar-module px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-checkbox-circle-fill text-green-500"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 1: HTML & CSS Fundamentals</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                        <div class="pl-11 pr-4">
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">1.1 HTML5 Structure</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">15:30</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">1.2 CSS Selectors</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">22:15</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">1.3 Responsive Design</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">18:45</span>
                            </div>
                        </div>
                    </div>
                    <!-- Module 2 -->
                    <div class="mb-2">
                        <div class="sidebar-module px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-checkbox-circle-fill text-green-500"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 2: JavaScript Basics</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                        <div class="pl-11 pr-4">
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">2.1 Variables & Data Types</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">20:10</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">2.2 Functions & Scope</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">25:30</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">2.3 DOM Manipulation</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">28:15</span>
                            </div>
                        </div>
                    </div>
                    <!-- Module 3 -->
                    <div class="mb-2">
                        <div class="sidebar-module active px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-time-line text-primary"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 3: Advanced JavaScript</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                        <div class="pl-11 pr-4">
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">3.1 ES6+ Features</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">24:45</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-green-500">
                                        <i class="ri-checkbox-circle-fill"></i>
                                    </div>
                                    <span class="text-sm text-gray-700 dark:text-gray-300">3.2 Promises & Async/Await</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">30:20</span>
                            </div>
                            <div class="sidebar-lesson active px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-primary">
                                        <i class="ri-play-circle-fill"></i>
                                    </div>
                                    <span class="text-sm font-medium text-primary">3.3 Modern JS Frameworks</span>
                                </div>
                                <span class="text-xs text-primary">32:10</span>
                            </div>
                            <div class="sidebar-lesson px-3 py-2 rounded-md flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 flex items-center justify-center mr-2 text-gray-400">
                                        <i class="ri-lock-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">3.4 State Management</span>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">28:30</span>
                            </div>
                        </div>
                    </div>
                    <!-- Module 4 -->
                    <div class="mb-2">
                        <div class="sidebar-module px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-lock-line"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 4: Backend Integration</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Module 5 -->
                    <div class="mb-2">
                        <div class="sidebar-module px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-lock-line"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 5: Performance Optimization</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Module 6 -->
                    <div class="mb-2">
                        <div class="sidebar-module px-4 py-3 flex items-center justify-between cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2 text-gray-500 dark:text-gray-400">
                                    <i class="ri-lock-line"></i>
                                </div>
                                <span class="font-medium text-gray-900 dark:text-white">Module 6: Final Project</span>
                            </div>
                            <div class="w-5 h-5 flex items-center justify-center text-gray-500 dark:text-gray-400">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="pt-16 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <!-- Video Player Section -->
                <div class="bg-gray-900 relative">
                    <div class="video-container relative aspect-video max-h-[500px] w-full">
                        <video class="foreground-video video w-full h-full object-cover" src="storage/media/ip.mp4"></video>
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                         
                        </div>
                        <!-- Video Controls -->
                        <div class="video-controls absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <!-- Progress Bar -->
                            <div class="video-progress mb-3 relative">
                                <div class="video-progress-fill" style="width: 0%"></div>
                                <div class="video-progress-handle" style="left: 0%"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <!-- Play/Pause Button -->
                                    <button class="playbtn text-white">
                                        <div class="w-8 h-8 flex items-center justify-center">
                                            <i class="ri-play-fill text-xl"></i>
                                        </div>
                                    </button>
                                    <!-- Volume Control -->
                                    <div class="flex items-center space-x-2">
                                        <button class="text-white">
                                            <div class="w-8 h-8 flex items-center justify-center">
                                                <i class="ri-volume-up-fill"></i>
                                            </div>
                                        </button>
                                        <div class="custom-volume">
                                            <div class="custom-volume-fill" style="width: 70%"></div>
                                            <div class="custom-volume-handle" style="left: 70%"></div>
                                        </div>
                                    </div>
                                    <!-- Time Display -->
                                    <div class="text-white text-sm">
                                        <span class="debut">00:00</span>
                                        <span class="mx-1">/</span>
                                        <span class="fin">04:00</span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <!-- Playback Speed -->
                                    <button class="text-white text-sm px-2 py-1 rounded border border-white border-opacity-30">
                                        1.0x
                                    </button>
                                    <!-- Quality -->
                                    <button class="text-white text-sm px-2 py-1 rounded border border-white border-opacity-30">
                                        1080p
                                    </button>
                                    <!-- Fullscreen -->
                                    <button class="text-white">
                                        <div class="w-8 h-8 flex items-center justify-center">
                                            <i class="ri-fullscreen-line"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video Info -->
                <div class="px-4 py-4 bg-white dark:bg-darkSurface  dark:border-gray-800">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">3.3 Modern JavaScript Frameworks</h2>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">Learn about the most popular JavaScript frameworks and when to use each one.</p>
                    <div class="flex items-center mt-3 space-x-6">
                        <div class="flex items-center text-gray-600 dark:text-gray-300 text-sm">
                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                <i class="ri-user-line"></i>
                            </div>
                            <span>Dr. Michael Chen</span>
                        </div>
                        <div class="flex items-center text-gray-600 dark:text-gray-300 text-sm">
                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                <i class="ri-time-line"></i>
                            </div>
                            <span>32:10 minutes</span>
                        </div>
                        <div class="flex items-center text-gray-600 dark:text-gray-300 text-sm">
                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                <i class="ri-calendar-line"></i>
                            </div>
                            <span>Updated June 15, 2025</span>
                        </div>
                    </div>
                </div>
                <!-- Content Tabs -->

                <!-- Content Area -->
                <div class="p-4">
                    <!-- Transcript Content -->
                    <div class="bg-white dark:bg-darkSurface rounded-lg shadow p-6 mb-6">
                       <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Course Resources</h3>
                       <div class="space-y-6">
                           <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                               <h4 class="font-medium text-gray-900 dark:text-white mb-3">Documentation & Cheat Sheets</h4>
                               <div class="space-y-3">
                                   <a href="#" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-primary">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2">
                                           <i class="ri-file-pdf-line"></i>
                                       </div>
                                       <span>Modern JavaScript Frameworks Comparison Guide (PDF)</span>
                                       <div class="w-5 h-5 flex items-center justify-center ml-2">
                                           <i class="ri-download-line"></i>
                                       </div>
                                   </a>
                                   <a href="#" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-primary">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2">
                                           <i class="ri-file-text-line"></i>
                                       </div>
                                       <span>Framework Selection Checklist (DOCX)</span>
                                       <div class="w-5 h-5 flex items-center justify-center ml-2">
                                           <i class="ri-download-line"></i>
                                       </div>
                                   </a>
                               </div>
                           </div>
                           <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                               <h4 class="font-medium text-gray-900 dark:text-white mb-3">Official Framework Documentation</h4>
                               <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                   <a href="https://reactjs.org" target="_blank" class="flex items-center p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-primary">
                                       <div class="w-8 h-8 flex items-center justify-center mr-3 text-primary">
                                           <i class="ri-reactjs-line text-xl"></i>
                                       </div>
                                       <div>
                                           <h5 class="font-medium text-gray-900 dark:text-white">React</h5>
                                           <p class="text-sm text-gray-600 dark:text-gray-400">Official React Documentation</p>
                                       </div>
                                   </a>
                                   <a href="https://vuejs.org" target="_blank" class="flex items-center p-3 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-primary">
                                       <div class="w-8 h-8 flex items-center justify-center mr-3 text-primary">
                                           <i class="ri-vuejs-line text-xl"></i>
                                       </div>
                                       <div>
                                           <h5 class="font-medium text-gray-900 dark:text-white">Vue.js</h5>
                                           <p class="text-sm text-gray-600 dark:text-gray-400">Vue.js Documentation</p>
                                       </div>
                                   </a>
                               </div>
                           </div>
                           <div class="border-b border-gray-200 dark:border-gray-700 pb-4">
                               <h4 class="font-medium text-gray-900 dark:text-white mb-3">Code Examples & Repositories</h4>
                               <div class="space-y-3">
                                   <a href="#" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-primary">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2">
                                           <i class="ri-github-line"></i>
                                       </div>
                                       <span>Sample Todo App in React, Vue, and Angular</span>
                                       <div class="ml-2 px-2 py-1 text-xs bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 rounded">GitHub</div>
                                   </a>
                                   <a href="#" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-primary">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2">
                                           <i class="ri-code-box-line"></i>
                                       </div>
                                       <span>Framework Performance Comparison Demo</span>
                                       <div class="ml-2 px-2 py-1 text-xs bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 rounded">CodeSandbox</div>
                                   </a>
                               </div>
                           </div>
                           <div>
                               <h4 class="font-medium text-gray-900 dark:text-white mb-3">Recommended Reading</h4>
                               <div class="space-y-4">
                                   <div class="flex items-start">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1">
                                           <i class="ri-book-line"></i>
                                       </div>
                                       <div>
                                           <h5 class="font-medium text-gray-800 dark:text-gray-200">Understanding JavaScript Frameworks</h5>
                                           <p class="text-sm text-gray-600 dark:text-gray-400">A comprehensive guide to modern JavaScript frameworks and their ecosystems.</p>
                                       </div>
                                   </div>
                                   <div class="flex items-start">
                                       <div class="w-5 h-5 flex items-center justify-center mr-2 mt-1">
                                           <i class="ri-article-line"></i>
                                       </div>
                                       <div>
                                           <h5 class="font-medium text-gray-800 dark:text-gray-200">Choosing the Right Framework</h5>
                                           <p class="text-sm text-gray-600 dark:text-gray-400">Factors to consider when selecting a JavaScript framework for your project.</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                <!-- Note Taking Panel -->
                <div class="bg-white dark:bg-darkSurface rounded-lg shadow mb-6">
                    <div class="px-6 py-4  dark:border-gray-700 flex items-center justify-between cursor-pointer" id="noteToggle">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Your Notes</h3>
                    </div>
                    <div class="note-panel expanded p-6">
                        <textarea class="w-full h-32 p-3 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-800 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Take notes for this lesson...">React uses a virtual DOM for performance optimization.
                            Vue.js is progressive and can be adopted incrementally.
                            Angular provides a complete solution with built-in features.
                        Consider project requirements when choosing a framework.</textarea>
                        <div class="flex justify-end mt-3">
                            <button class="bg-primary text-white py-2 px-4 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Save Notes</button>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between">
                    <button class="flex items-center bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 py-2 px-4 rounded-button border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-arrow-left-line"></i>
                        </div>
                        <span>Previous Lesson</span>
                    </button>
                    <button class="flex items-center bg-primary text-white py-2 px-4 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">
                        <span>Next Lesson</span>
                        <div class="w-5 h-5 flex items-center justify-center ml-2">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </button>
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


    <script src="storage/js_style/etudiant/CourseContentPlaying.js"></script>
    <script src="storage/js_style/etudiant/CourseContent.js"></script>
    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/etudiant/CourseContentNotePanel.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/msg.js"></script>


</body>
</html>