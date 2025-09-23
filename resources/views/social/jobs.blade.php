<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHustle | Jobs</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css"> -->
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/style.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/jobs.css">
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
                    <aside class="filter hidden p-6 h-full overflow-y-auto">
                        <div class="text-lg flex item-center justify-between font-semibold text-gray-900 dark:text-gray-100 mb-6">
                            <h4>Filtre</h4>
                            <i class="ri-close-line filterClose"></i>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="font-medium mb-3">Job Type</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <input type="checkbox" id="fulltime" class="custom-checkbox">
                                    <label for="fulltime" class="text-gray-500 ml-2">Full-time</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="parttime" class="custom-checkbox">
                                    <label for="parttime" class="text-gray-500 ml-2">Part-time</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="contract" class="custom-checkbox">
                                    <label for="contract" class="text-gray-500 ml-2">Contract</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="freelance" class="custom-checkbox">
                                    <label for="freelance" class="text-gray-500 ml-2">Freelance</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-medium mb-3">Experience Level</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <input type="checkbox" id="entry" class="custom-checkbox">
                                    <label for="entry" class="text-gray-500 ml-2">Entry Level</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="mid" class="custom-checkbox">
                                    <label for="mid" class="text-gray-500 ml-2">Mid Level</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="senior" class="custom-checkbox">
                                    <label for="senior" class="text-gray-500 ml-2">Senior Level</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="executive" class="custom-checkbox">
                                    <label for="executive" class="text-gray-500 ml-2">Executive</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-medium mb-3">Salary Range</h3>
                            <div class="space-y-4">
                                <input type="range" min="30000" max="200000" value="80000" class="mb-2 range-slider w-full">
                                <div class="flex justify-between text-sm text-gray-600">
                                    <span>$30K</span>
                                    <span>$200K+</span>
                                </div>
                                <div class="text-center font-medium text-primary">$80,000</div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h3 class="font-medium mb-3">Location</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <input type="checkbox" id="remote" class="custom-checkbox">
                                    <label for="remote" class="text-gray-500 ml-2">Remote</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="hybrid" class="custom-checkbox">
                                    <label for="hybrid" class="text-gray-500 ml-2">Hybrid</label>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" id="onsite" class="custom-checkbox">
                                    <label for="onsite" class="text-gray-500 ml-2">On-site</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-medium mb-3">Skills</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm flex items-center">
                                    JavaScript
                                    <button class="ml-1 text-gray-500 hover:text-gray-500">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </span>
                                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm flex items-center">
                                    React
                                    <button class="ml-1 text-gray-500 hover:text-gray-500">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </span>
                                <button class="text-primary text-sm hover:underline">+ Add more</button>
                            </div>
                        </div>
                        <div class="mb-6 flex items-center justify-between">
                            <span class="font-medium">Show remote only</span>
                            <label class="custom-switch">
                                <input type="checkbox">
                                <span class="switch-slider"></span>
                            </label>
                        </div>
                    </aside>

                    <!-- Main Content -->
                    <main class="flex-1">
                        <!-- Main Content -->
                        <div class="flex-1 p-6">
                            <!-- Active Filters & View Toggle -->
                            <div class="w-full">
                                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                                    <div>
                                        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Featured Jobs</h1>
                                        <p class="text-gray-500">Showing 1-12 of 234 jobs</p>
                                    </div>
                                   
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center justify-between sticky top-0">
                                            <div class="flex items-center justify-between w-full p-2">
                                                <div class="filterBtn p-2 bg-primary flex rounded-md">
                                                    <i class="ri-filter-line"></i>
                                                    <h3>Filtre</h3>
                                                </div>             
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <!-- Job Card 1 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.1s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg">
                                                <i class="ri-microsoft-fill ri-lg text-blue-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">New</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Senior Frontend Developer</h3>
                                        <p class="text-gray-600 mb-3">Microsoft</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Redmond, WA (Hybrid)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$120,000 - $150,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">React</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">TypeScript</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Azure</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 2 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.2s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg">
                                                <i class="ri-spotify-fill ri-lg text-green-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-purple-600 bg-purple-50 px-2 py-1 rounded">Featured</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Product Designer</h3>
                                        <p class="text-gray-600 mb-3">Spotify</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Remote (US)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$110,000 - $140,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Figma</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">UI/UX</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Design Systems</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 3 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.3s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-lg">
                                                <i class="ri-amazon-fill ri-lg text-orange-600"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Data Scientist</h3>
                                        <p class="text-gray-600 mb-3">Amazon</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Seattle, WA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$130,000 - $170,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Python</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">ML</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">AWS</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 4 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.4s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-red-100 rounded-lg">
                                                <i class="ri-netflix-fill ri-lg text-red-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded">Urgent</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Backend Engineer</h3>
                                        <p class="text-gray-600 mb-3">Netflix</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Los Gatos, CA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$140,000 - $180,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Java</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Spring</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Microservices</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 5 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.5s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-lg">
                                                <i class="ri-slack-fill ri-lg text-purple-600"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">DevOps Engineer</h3>
                                        <p class="text-gray-600 mb-3">Slack</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Remote (Global)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$125,000 - $155,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Kubernetes</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Docker</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">CI/CD</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 6 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.6s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-indigo-100 rounded-lg">
                                                <i class="ri-google-fill ri-lg text-indigo-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">New</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Machine Learning Engineer</h3>
                                        <p class="text-gray-600 mb-3">Google</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Mountain View, CA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$150,000 - $200,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">TensorFlow</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">PyTorch</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Deep Learning</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 7 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.7s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-yellow-100 rounded-lg">
                                                <i class="ri-apple-fill ri-lg text-gray-800"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">iOS Developer</h3>
                                        <p class="text-gray-600 mb-3">Apple</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Cupertino, CA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$135,000 - $175,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Swift</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">SwiftUI</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">iOS</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 8 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.8s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-lg">
                                                <i class="ri-facebook-fill ri-lg text-blue-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-purple-600 bg-purple-50 px-2 py-1 rounded">Featured</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">AR/VR Developer</h3>
                                        <p class="text-gray-600 mb-3">Meta</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Menlo Park, CA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$145,000 - $185,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Unity</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">C#</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">3D Graphics</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 9 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 0.9s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-green-100 rounded-lg">
                                                <i class="ri-shopify-fill ri-lg text-green-600"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">E-commerce Specialist</h3>
                                        <p class="text-gray-600 mb-3">Shopify</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Remote (Canada)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$90,000 - $120,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Marketing</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Liquid</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">E-commerce</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 10 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 1s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-cyan-100 rounded-lg">
                                                <i class="ri-twitter-fill ri-lg text-cyan-600"></i>
                                            </div>
                                            <span class="text-sm font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded">Urgent</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Security Engineer</h3>
                                        <p class="text-gray-600 mb-3">Twitter</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>San Francisco, CA</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$130,000 - $160,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Cybersecurity</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Penetration Testing</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">CISSP</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 11 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 1.1s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-pink-100 rounded-lg">
                                                <i class="ri-airbnb-fill ri-lg text-pink-600"></i>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">UX Researcher</h3>
                                        <p class="text-gray-600 mb-3">Airbnb</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Remote (US)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$115,000 - $145,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">User Research</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Usability Testing</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Psychology</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                <!-- Job Card 12 -->
                                <div class="job-card bg-primary bg-opacity-20 rounded-lg shadow-sm overflow-hidden fade-in" style="animation-delay: 1.2s">
                                    <div class="p-5">
                                        <div class="flex justify-between items-start mb-4">
                                            <div class="w-12 h-12 flex items-center justify-center bg-purple-100 rounded-lg">
                                                <i class="ri-github-fill ri-lg text-gray-800"></i>
                                            </div>
                                            <span class="text-sm font-medium text-green-600 bg-green-50 px-2 py-1 rounded">New</span>
                                        </div>
                                        <h3 class="text-lg font-semibold mb-1">Technical Writer</h3>
                                        <p class="text-gray-600 mb-3">GitHub</p>
                                        <div class="flex items-center text-gray-500 text-sm mb-2">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-map-pin-line"></i>
                                            </div>
                                            <span>Remote (Global)</span>
                                        </div>
                                        <div class="flex items-center text-gray-500 text-sm mb-4">
                                            <div class="w-4 h-4 flex items-center justify-center mr-1">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                            <span>$95,000 - $125,000</span>
                                        </div>
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Documentation</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Markdown</span>
                                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">Git</span>
                                        </div>
                                        <button id="applyNowBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Apply Now</button>
                                    </div>
                                </div>
                                </div>
                                <div class="mt-8 flex justify-center">
                                    <nav class="flex items-center">
                                        <button class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary">
                                            <i class="ri-arrow-left-s-line ri-lg"></i>
                                        </button>
                                        <button class="w-10 h-10 flex items-center justify-center bg-primary text-white rounded-full mx-1">1</button>
                                        <button class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-100 rounded-full mx-1">2</button>
                                        <button class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-100 rounded-full mx-1">3</button>
                                        <span class="mx-1">...</span>
                                        <button class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-100 rounded-full mx-1">12</button>
                                        <button class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary">
                                            <i class="ri-arrow-right-s-line ri-lg"></i>
                                        </button>
                                    </nav>
                                </div>
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
    <div id="applicationModal" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto m-4">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-900">Job Application</h2>
                    <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-close-line ri-lg"></i>
                        </div>
                    </button>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-medium" id="modalJobTitle"></h3>
                    <p class="text-gray-600" id="modalCompanyName"></p>
                </div>
            </div>
            <form id="applicationForm" class="p-6 space-y-6">
                <div class="space-y-4">
                    <h4 class="font-medium text-gray-900">Personal Information</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">First Name <span class="text-red-500">*</span></label>
                            <input type="text" name="firstName" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary/30 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" name="lastName" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary/30 focus:outline-none">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary/30 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary/30 focus:outline-none">
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="font-medium text-gray-900">Resume/CV</h4>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <input type="file" id="resumeUpload" name="resume" accept=".pdf,.doc,.docx" class="hidden" required>
                        <label for="resumeUpload" class="cursor-pointer">
                            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center bg-gray-100 rounded-full text-gray-600">
                                <i class="ri-upload-2-line ri-2x"></i>
                            </div>
                            <p class="text-sm text-gray-600">Click to upload your resume/CV</p>
                            <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX (Max 5MB)</p>
                        </label>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="font-medium text-gray-900">Cover Letter (Optional)</h4>
                    <textarea name="coverLetter" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary/30 focus:outline-none" placeholder="Tell us why you're interested in this position..."></textarea>
                </div>
                <div class="flex items-center space-x-4 pt-6 border-t border-gray-200">
                    <button type="submit" class="flex-1 bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Submit Application</button>
                    <button type="button" id="cancelBtn" class="flex-1 bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-button hover:bg-gray-50 transition-colors whitespace-nowrap">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div id="confirmationModal" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg w-full max-w-md m-4 p-6 text-center">
        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center bg-green-100 rounded-full text-green-600">
            <i class="ri-check-line ri-2x"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Application Submitted!</h3>
        <p class="text-gray-600 mb-6">Thank you for your application. We'll review it and get back to you soon.</p>
        <button id="confirmationCloseBtn" class="w-full bg-primary text-white px-4 py-2 rounded-button hover:bg-primary/90 transition-colors whitespace-nowrap">Close</button>
    </div>
    </div>

    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/index.js"></script>
    <script src="storage/js_style/jobs.js"></script>
</body>

</html>