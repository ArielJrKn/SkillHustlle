<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Advanced Web Development</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/style.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/courseDetail.css">
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
        <header class="h-16 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">


            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black">
                    <div class="flex flex-col md:flex-row gap-8 p-6">
                        <!-- Main Content Column -->
                        <div class="w-full md:w-2/3">
                            <!-- Course Header -->
                            <div class="mb-8">
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Advanced UI Design Principles: Creating Intuitive User Experiences</h1>
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                        <img src="media/chat.jpg" alt="Instructor" class="w-full h-full object-cover object-top">
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 dark:text-gray-100">Dr. Emily Richardson</h3>
                                        <p class="text-sm text-gray-600">Lead UX Designer at DesignLabs • 15+ years experience</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-3 mb-6">
                                    <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">UI/UX Design</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Intermediate</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">12 hours</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Updated June 2025</span>
                                </div>
                            </div>
                            <!-- Video Player -->
                            <div class="video-container mb-8 rounded-lg overflow-hidden shadow-lg">
                                <div class="video-placeholder bg-gray-800">
                                    <div class="play-button">
                                        <i class="ri-play-fill text-white ri-3x"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Course Description -->
                            <div class="bg-primary bg-opacity-20 p-6 rounded-lg shadow-sm mb-8">
                                <h2 class="text-xl font-semibold mb-4">About This Course</h2>
                                <div class="text-gray-500 space-y-4">
                                    <p>This comprehensive course takes you beyond the basics of UI design into advanced principles that create truly intuitive and engaging user experiences. You'll learn how to apply psychological principles to design decisions, master advanced prototyping techniques, and develop a systematic approach to solving complex design challenges.</p>
                                    <p>Through practical exercises and real-world case studies, you'll develop the skills to create designs that not only look beautiful but also function seamlessly. We'll explore the entire design process from research and wireframing to high-fidelity prototypes and user testing.</p>
                                    <p>By the end of this course, you'll have the confidence to tackle complex UI/UX challenges and create designs that stand out in today's competitive digital landscape. You'll also build a portfolio piece demonstrating your advanced design skills that you can showcase to potential employers or clients.</p>
                                </div>
                                <button id="expand-description" class="mt-4 text-primary font-medium flex items-center !rounded-button whitespace-nowrap">
                                    <span>Read more</span>
                                    <i class="ri-arrow-down-s-line ml-1"></i>
                                </button>
                            </div>
                            <!-- Course Modules -->
                            <div class="bg-primary bg-opacity-20 p-6 rounded-lg shadow-sm">
                                <h2 class="text-xl font-semibold mb-6">Course Content</h2>
                                <div class="space-y-4">
                            <!-- Module 1 -->
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <div class="module-item p-4 bg-primary bg-opacity-20 cursor-pointer" data-module="1">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="module1" checked>
                                            <label for="module1" class="cursor-pointer">
                                                <span class="font-medium">Module 1: Foundations of Advanced UI Design</span>
                                                <p class="text-sm text-gray-500 mt-1">4 lessons • 1h 45m</p>
                                            </label>
                                        </div>
                                        <div class="w-8 h-8 flex items-center justify-center text-gray-500 module-toggle">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-content px-4 pb-4 border-t border-gray-100 open">
                                    <ul class="space-y-3 pt-3">
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson1-1" checked>
                                            <label for="lesson1-1" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Introduction to Advanced UI Principles</p>
                                                    <p class="text-xs text-gray-500">25 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson1-2" checked>
                                            <label for="lesson1-2" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Psychology of User Interaction</p>
                                                    <p class="text-xs text-gray-500">30 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson1-3" checked>
                                            <label for="lesson1-3" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Visual Hierarchy and Information Architecture</p>
                                                    <p class="text-xs text-gray-500">35 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson1-4" checked>
                                            <label for="lesson1-4" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Assignment: Analyzing Successful Interfaces</p>
                                                    <p class="text-xs text-gray-500">15 min</p>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Module 2 -->
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <div class="module-item p-4 bg-primary bg-opacity-20 cursor-pointer" data-module="2">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="module2" checked>
                                            <label for="module2" class="cursor-pointer">
                                                <span class="font-medium">Module 2: Advanced Interaction Design</span>
                                                <p class="text-sm text-gray-500 mt-1">5 lessons • 2h 10m</p>
                                            </label>
                                        </div>
                                        <div class="w-8 h-8 flex items-center justify-center text-gray-500 module-toggle">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-content px-4 pb-4 border-t border-gray-100">
                                    <ul class="space-y-3 pt-3">
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson2-1" checked>
                                            <label for="lesson2-1" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Microinteractions: Details That Matter</p>
                                                    <p class="text-xs text-gray-500">30 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson2-2" checked>
                                            <label for="lesson2-2" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Gesture-Based Interfaces</p>
                                                    <p class="text-xs text-gray-500">25 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson2-3">
                                            <label for="lesson2-3" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Animation Principles for UI</p>
                                                    <p class="text-xs text-gray-500">35 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson2-4">
                                            <label for="lesson2-4" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Advanced State Management</p>
                                                    <p class="text-xs text-gray-500">25 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson2-5">
                                            <label for="lesson2-5" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Workshop: Creating Meaningful Interactions</p>
                                                    <p class="text-xs text-gray-500">15 min</p>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Module 3 -->
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <div class="module-item p-4 bg-primary bg-opacity-20 cursor-pointer" data-module="3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="module3">
                                            <label for="module3" class="cursor-pointer">
                                                <span class="font-medium">Module 3: Design Systems & Component Libraries</span>
                                                <p class="text-sm text-gray-500 mt-1">4 lessons • 2h 30m</p>
                                            </label>
                                        </div>
                                        <div class="w-8 h-8 flex items-center justify-center text-gray-500 module-toggle">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-content px-4 pb-4 border-t border-gray-100">
                                    <ul class="space-y-3 pt-3">
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson3-1">
                                            <label for="lesson3-1" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Introduction to Design Systems</p>
                                                    <p class="text-xs text-gray-500">35 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson3-2">
                                            <label for="lesson3-2" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Building a Component Library</p>
                                                    <p class="text-xs text-gray-500">45 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson3-3">
                                            <label for="lesson3-3" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Documentation & Governance</p>
                                                    <p class="text-xs text-gray-500">30 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson3-4">
                                            <label for="lesson3-4" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Project: Creating a Mini Design System</p>
                                                    <p class="text-xs text-gray-500">40 min</p>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Module 4 -->
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <div class="module-item p-4 bg-primary bg-opacity-20 cursor-pointer" data-module="4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="module4">
                                            <label for="module4" class="cursor-pointer">
                                                <span class="font-medium">Module 4: Advanced Prototyping Techniques</span>
                                                <p class="text-sm text-gray-500 mt-1">3 lessons • 2h 15m</p>
                                            </label>
                                        </div>
                                        <div class="w-8 h-8 flex items-center justify-center text-gray-500 module-toggle">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-content px-4 pb-4 border-t border-gray-100">
                                    <ul class="space-y-3 pt-3">
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson4-1">
                                            <label for="lesson4-1" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">High-Fidelity Interactive Prototypes</p>
                                                    <p class="text-xs text-gray-500">45 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson4-2">
                                            <label for="lesson4-2" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">User Flow Prototyping</p>
                                                    <p class="text-xs text-gray-500">50 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson4-3">
                                            <label for="lesson4-3" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Workshop: Building a Complete Prototype</p>
                                                    <p class="text-xs text-gray-500">40 min</p>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Module 5 -->
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                <div class="module-item p-4 bg-primary bg-opacity-20 cursor-pointer" data-module="5">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <input type="checkbox" id="module5">
                                            <label for="module5" class="cursor-pointer">
                                                <span class="font-medium">Module 5: Final Project & Portfolio Development</span>
                                                <p class="text-sm text-gray-500 mt-1">3 lessons • 3h 20m</p>
                                            </label>
                                        </div>
                                        <div class="w-8 h-8 flex items-center justify-center text-gray-500 module-toggle">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="module-content px-4 pb-4 border-t border-gray-100">
                                    <ul class="space-y-3 pt-3">
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson5-1">
                                            <label for="lesson5-1" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Final Project Requirements</p>
                                                    <p class="text-xs text-gray-500">30 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson5-2">
                                            <label for="lesson5-2" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-play-circle-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Portfolio Development Strategies</p>
                                                    <p class="text-xs text-gray-500">50 min</p>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="flex items-center">
                                            <input type="checkbox" id="lesson5-3">
                                            <label for="lesson5-3" class="flex items-center cursor-pointer">
                                                <div class="w-6 h-6 flex items-center justify-center mr-2 text-gray-500">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Final Project Work Time & Submission</p>
                                                    <p class="text-xs text-gray-500">2h</p>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <!-- Sidebar Column -->
                        <div class="w-full md:w-1/3">
                            <div class="sticky top-0">
                                <!-- Progress Tracker -->
                                <div class="bg-primary bg-opacity-20 p-6 rounded-lg shadow-sm mb-8">
                                    <h3 class="text-lg font-semibold mb-6">Your Progress</h3>
                                    <div class="flex flex-col items-center mb-6">
                                        <div class="progress-circle mb-4">
                                            
                                            <div class="absolute inset-0 flex items-center justify-center flex-col">
                                                <span class="text-3xl font-bold text-gray-900 dark:text-gray-100">30%</span>
                                                <span class="text-sm text-gray-500">Completed</span>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-gray-500 font-medium">6 of 19 lessons completed</p>
                                            <p class="text-sm text-gray-500 mt-1">Estimated time remaining: 8h 25m</p>
                                        </div>
                                    </div>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-500">Module 1</span>
                                                <span class="text-gray-500">100%</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-secondary rounded-full" style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-500">Module 2</span>
                                                <span class="text-gray-500">40%</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-secondary rounded-full" style="width: 40%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-500">Module 3</span>
                                                <span class="text-gray-500">0%</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-secondary rounded-full" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-500">Module 4</span>
                                                <span class="text-gray-500">0%</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-secondary rounded-full" style="width: 0%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span class="text-gray-500">Module 5</span>
                                                <span class="text-gray-500">0%</span>
                                            </div>
                                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full bg-secondary rounded-full" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="students/Course-Content.html">
                                        <button id="#continueLearningBtn" class="mt-6 w-full py-3 bg-primary text-white font-medium rounded-button flex items-center justify-center whitespace-nowrap hover:bg-primary/90 transition-colors">
                                        <i class="ri-play-circle-line mr-2"></i>
                                        Continue Learning
                                    </button>
                                    </a>
                                </div>
                                <div class="bg-primary bg-opacity-20 p-6 rounded-lg shadow-sm mb-8">
                                        <h2 class="text-2xl font-bold mb-4">Objectifs d'apprentissage</h2>
                                        <ul class="space-y-3">
                                            <li class="flex items-start gap-3">
                                                <div class="w-5 h-5 flex items-center justify-center mt-0.5 text-primary">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <span class="">Maîtriser les concepts fondamentaux de la Data Science</span>
                                            </li>
                                            <li class="flex items-start gap-3">
                                                <div class="w-5 h-5 flex items-center justify-center mt-0.5 text-primary">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <span class="">Apprendre Python pour l'analyse de données</span>
                                            </li>
                                            <li class="flex items-start gap-3">
                                                <div class="w-5 h-5 flex items-center justify-center mt-0.5 text-primary">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <span class="">Créer des visualisations de données percutantes</span>
                                            </li>
                                            <li class="flex items-start gap-3">
                                                <div class="w-5 h-5 flex items-center justify-center mt-0.5 text-primary">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <span class="">Développer des modèles de Machine Learning</span>
                                            </li>
                                            <li class="flex items-start gap-3">
                                                <div class="w-5 h-5 flex items-center justify-center mt-0.5 text-primary">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <span class="">Réaliser des projets concrets d'analyse de données</span>
                                            </li>
                                        </ul>
                                    </div>
                                <!-- Downloadable Resources -->
                                <div class="bg-primary bg-opacity-20 p-6 rounded-lg shadow-sm">
                                    <h3 class="text-lg font-semibold mb-6">Course Resources</h3>
                                    <div class="space-y-4">
                                        <div class="resource-item p-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 text-primary rounded-lg mr-3">
                                                    <i class="ri-file-pdf-line ri-lg"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h4 class="text-gray-900 dark:text-gray-100 font-medium">Course Workbook</h4>
                                                    <p class="text-xs text-gray-500">PDF • 4.2 MB</p>
                                                </div>
                                                <button class="w-8 h-8 flex items-center justify-center text-primary">
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="resource-item p-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 text-primary rounded-lg mr-3">
                                                    <i class="ri-file-zip-line ri-lg"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h4 class="text-gray-900 dark:text-gray-100 font-medium">Design Assets</h4>
                                                    <p class="text-xs text-gray-500">ZIP • 28.7 MB</p>
                                                </div>
                                                <button class="w-8 h-8 flex items-center justify-center text-primary">
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="resource-item p-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 text-primary rounded-lg mr-3">
                                                    <i class="ri-file-excel-line ri-lg"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h4 class="text-gray-900 dark:text-gray-100 font-medium">UI Component Checklist</h4>
                                                    <p class="text-xs text-gray-500">XLSX • 1.8 MB</p>
                                                </div>
                                                <button class="w-8 h-8 flex items-center justify-center text-primary">
                                                    <i class="ri-download-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="resource-item p-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex items-center justify-center bg-primary/10 text-primary rounded-lg mr-3">
                                                    <i class="ri-links-line ri-lg"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h4 class="text-gray-900 dark:text-gray-100 font-medium">Additional Resources</h4>
                                                    <p class="text-xs text-gray-500">Links • Updated June 2025</p>
                                                </div>
                                                <button class="w-8 h-8 flex items-center justify-center text-primary">
                                                    <i class="ri-external-link-line"></i>
                                                </button>
                                            </div>
                                        </div>
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
    <script src="storage/js_style/courseDetail.js"></script>
</body>

</html>