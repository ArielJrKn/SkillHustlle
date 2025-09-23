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
    <link rel="stylesheet" type="text/css" href="storage/style/etudiant/studentRessource.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/feedback.css">
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
        <header class="h-28 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex flex-col justify-between px-6 z-10">
            <div class="flex justify-between items-center pt-4">
                @include('layouts.headerV2')
            </div>

            <div class="flex items-center justify-between sticky top-0 z-50 backdrop-filter backdrop-blur-lg">
                <div class="flex ">
                    <button id="tab" data-tab="1" class="tab active px-4 py-2 text-sm font-medium text-gray-500">
                        Toutes les ressources
                    </button>
                    <button id="tab" data-tab="2" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                        PDFs
                    </button>
                    <button id="tab" data-tab="3" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                        Vidéos
                    </button>
                    <button id="tab" data-tab="4" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                        Liens
                    </button>
                    <button id="tab" data-tab="5" class="tab px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-700">
                        Notes
                    </button>
                </div>             
            </div>

        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <main class="pt-28 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <!-- Main Content -->
                <main class="container mx-auto px-4 pt-4">

                    <div id="1" class="tab-content active space-y-4">
                        <div class="masonry-grid">
                            <!-- PDF Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20abstract%20visualization%20of%20data%20with%20blue%20and%20green%20neon%20elements%2C%20professional%20educational%20content%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=1&orientation=landscape"
                                        alt="Advanced Machine Learning PDF" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type pdf">
                                        <i class="ri-file-pdf-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Advanced Machine Learning Techniques</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Comprehensive guide to modern machine learning
                                        algorithms and their applications in real-world scenarios.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added July 1, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Video Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 card rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20video%20player%20interface%20with%20quantum%20computing%20visualization%2C%20educational%20content%20with%20clean%20minimal%20design%2C%20high%20quality%20digital%20art%20with%20blue%20and%20green%20neon%20accents&width=600&height=340&seq=2&orientation=landscape"
                                        alt="Quantum Computing Video" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type video">
                                        <i class="ri-video-line"></i>
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="w-14 h-14 flex items-center justify-center rounded-full bg-primary bg-opacity-80 backdrop-blur-sm">
                                            <i class="ri-play-fill text-2xl text-gray-900 dark:text-gray-100"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Introduction to Quantum Computing</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">A beginner-friendly video course explaining the
                                        fundamental concepts of quantum computing and its potential impact.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added June 28, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-time-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Link Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 card rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20web%20browser%20interface%20with%20blockchain%20technology%20visualization%2C%20educational%20content%20with%20clean%20minimal%20design%2C%20high%20quality%20digital%20art%20with%20blue%20and%20green%20neon%20accents&width=600&height=340&seq=3&orientation=landscape"
                                        alt="Blockchain Technology Link" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type link">
                                        <i class="ri-links-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Blockchain Technology Resources</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Curated collection of articles, tutorials, and tools
                                        for learning blockchain development and applications.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added June 25, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-external-link-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Note Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 card rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20note-taking%20interface%20with%20AI%20and%20data%20science%20visualization%2C%20educational%20content%20with%20clean%20minimal%20design%2C%20high%20quality%20digital%20art%20with%20blue%20and%20green%20neon%20accents&width=600&height=340&seq=4&orientation=landscape"
                                        alt="AI Ethics Notes" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type note">
                                        <i class="ri-sticky-note-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">AI Ethics and Responsible Development</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Personal notes from the AI Ethics workshop covering
                                        key principles, case studies, and best practices for responsible AI development.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added June 22, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-edit-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 card rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20abstract%20visualization%20of%20cybersecurity%20concepts%20with%20blue%20and%20green%20neon%20elements%2C%20professional%20educational%20content%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=5&orientation=landscape"
                                        alt="Cybersecurity PDF" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type pdf">
                                        <i class="ri-file-pdf-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Advanced Cybersecurity Protocols</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">In-depth analysis of modern cybersecurity threats
                                        and defensive strategies for enterprise systems.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added June 20, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-fill text-secondary"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Video Resource -->
                            <div class="card bg-primary bg-opacity-20 text-gray-900 dark:text-gray-100 card rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20augmented%20reality%20interface%20visualization%20with%20blue%20and%20green%20neon%20elements%2C%20professional%20educational%20content%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=6&orientation=landscape"
                                        alt="AR Development Video" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type video">
                                        <i class="ri-video-line"></i>
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="w-14 h-14 flex items-center justify-center rounded-full bg-primary bg-opacity-80 backdrop-blur-sm">
                                            <i class="ri-play-fill text-2xl text-gray-900 dark:text-gray-100"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Augmented Reality Development</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Comprehensive tutorial series on building AR
                                        applications using modern frameworks and tools.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Added June 18, 2025</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-time-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-fill text-secondary"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="2" class="tab-content space-y-4">
                        <div class="text-xl flex items-center justify-center">
                            <h1>Aucun fichier</h1>
                        </div>
                    </div>

                    <div id="3" class="tab-content space-y-4">
                        <div class="text-xl flex items-center justify-center">
                            <h1>Aucun fichier</h1>
                        </div>
                    </div>

                    <div id="4" class="tab-content space-y-4">
                        <div class="text-xl flex items-center justify-center">
                            <h1>Aucun fichier</h1>
                        </div>
                    </div>

                    <div id="5" class="tab-content space-y-4">
                        <div class="text-xl flex items-center justify-center">
                            <h1>Aucun fichier</h1>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h3 class="text-xl font-semibold mb-6">Recommended For You</h3>
                        <div class="masonry-grid">
                            <!-- Link Resource -->
                            <div class="card bg-primary bg-opacity-20 text-white rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20neural%20network%20visualization%20with%20blue%20and%20green%20neon%20elements%2C%20professional%20educational%20content%20about%20deep%20learning%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=7&orientation=landscape"
                                        alt="Deep Learning Link" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type link">
                                        <i class="ri-links-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Deep Learning Research Papers</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Collection of groundbreaking research papers in
                                        deep learning with annotations and summaries.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Based on your interests</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-external-link-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- PDF Resource -->
                            <div class="card bg-primary bg-opacity-20 text-white rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20cloud%20computing%20architecture%20visualization%20with%20blue%20and%20green%20neon%20elements%2C%20professional%20educational%20content%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=8&orientation=landscape"
                                        alt="Cloud Architecture PDF" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type pdf">
                                        <i class="ri-file-pdf-line"></i>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Modern Cloud Architecture Patterns</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Detailed guide to designing scalable, resilient
                                        cloud infrastructure with practical examples.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Popular in your field</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-download-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Video Resource -->
                            <div class="card bg-primary bg-opacity-20 text-white rounded-lg overflow-hidden relative">
                                <div class="relative">
                                    <img src="https://readdy.ai/api/search-image?query=futuristic%20data%20visualization%20interface%20with%20blue%20and%20green%20neon%20elements%20showing%20business%20intelligence%20concepts%2C%20professional%20educational%20content%2C%20clean%20minimal%20design%2C%20high%20quality%20digital%20art&width=600&height=340&seq=9&orientation=landscape"
                                        alt="Data Visualization Video" class="w-full h-48 object-cover object-top">
                                    <div class="resource-type video">
                                        <i class="ri-video-line"></i>
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div
                                            class="w-14 h-14 flex items-center justify-center rounded-full bg-primary bg-opacity-80 backdrop-blur-sm">
                                            <i class="ri-play-fill text-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-semibold text-lg mb-2">Advanced Data Visualization Techniques</h4>
                                    <p class="text-sm opacity-80 line-clamp-2 mb-3">Master the art of creating compelling data
                                        visualizations that effectively communicate insights and patterns.</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs opacity-60">Trending now</span>
                                        <div class="flex space-x-2">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-time-line"></i>
                                            </button>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center rounded-full bg-opacity-10 bg-white">
                                                <i class="ri-star-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
    <script src="storage/js_style/admin/feedback.js"></script>
    <script src="storage/js_style/msg.js"></script>

    
</body>
</html>