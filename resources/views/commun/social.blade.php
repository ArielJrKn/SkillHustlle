<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social | Dashboard</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/admin/feedback.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="storage/js_style/student_dashboard_tailwindConfig.js"></script>
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
            <main class="pt-16 flex-1 overflow-y-auto bg-background bg-gray-100 dark:bg-dark">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-blue-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-file-text-line text-blue-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+12.5%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">247</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Total Posts</p>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-red-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-heart-line text-red-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+8.3%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">15.2K</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Total Likes</p>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-green-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-chat-3-line text-green-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+15.7%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">3.8K</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Comments</p>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-purple-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-share-line text-purple-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+22.1%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">1.9K</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Shares</p>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-yellow-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-eye-line text-yellow-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+18.9%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">28.5K</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Profile Views</p>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-indigo-500 bg-opacity-20 rounded-xl flex items-center justify-center">
                                    <i class="ri-group-line text-indigo-400 text-xl"></i>
                                </div>
                                <span class="metric-change positive text-sm font-medium">+5.2%</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-1">8.7K</h3>
                            <p class="text-gray-900 dark:text-gray-100 text-sm">Followers</p>
                        </div>
                    </div>

                    <div class="bg-primary bg-opacity-20 rounded-2xl p-6 mb-8 card-hover">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Engagement Trends</h3>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-xs bg-primary text-gray-900 dark:text-gray-100 rounded-full !rounded-button whitespace-nowrap">Likes</button>
                                <button class="px-3 py-1 text-xs bg-gray-700 text-gray-300 rounded-full hover:bg-gray-600 !rounded-button whitespace-nowrap">Comments</button>
                                <button class="px-3 py-1 text-xs bg-gray-700 text-gray-300 rounded-full hover:bg-gray-600 !rounded-button whitespace-nowrap">Shares</button>
                            </div>
                        </div>
                        <div id="engagementChart" style="width: 100%; height: 300px;"></div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Post Performance</h3>
                            <div id="postPerformanceChart" style="width: 100%; height: 250px;"></div>
                        </div>

                        <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Content Type Breakdown</h3>
                            <div id="contentTypeChart" style="width: 100%; height: 250px;"></div>
                        </div>
                    </div>

                    <div class="bg-primary bg-opacity-20 rounded-2xl p-6 card-hover">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Top Performing Posts</h3>
                            <button class="px-4 py-2 bg-primary text-gray-900 dark:text-gray-100 rounded-lg text-sm font-medium hover:bg-opacity-80 !rounded-button whitespace-nowrap">View All</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-700">
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Post</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Type</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Likes</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Comments</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Shares</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Date</th>
                                        <th class="text-left py-3 px-2 text-gray-900 dark:text-gray-100 font-medium text-sm">Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-row border-b border-gray-700">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg"></div>
                                                <div>
                                                    <p class="text-gray-900 dark:text-gray-100 font-medium text-sm">Morning workout routine that changed my life</p>
                                                    <p class="text-gray-900 dark:text-gray-100 text-xs">Fitness tips and motivation</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2">
                                            <span class="px-2 py-1 bg-red-500 bg-opacity-20 text-red-400 rounded-full text-xs font-medium">Video</span>
                                        </td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">2.3K</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">189</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">94</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 text-sm">Dec 15</td>
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-2 bg-gray-700 rounded-full">
                                                    <div class="w-7 h-2 bg-green-500 rounded-full"></div>
                                                </div>
                                                <span class="text-green-400 text-sm font-medium">92</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row border-b border-gray-700">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg"></div>
                                                <div>
                                                    <p class="text-gray-900 dark:text-gray-100 font-medium text-sm">10 productivity hacks for remote workers</p>
                                                    <p class="text-gray-900 dark:text-gray-100 text-xs">Work from home tips</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2">
                                            <span class="px-2 py-1 bg-blue-500 bg-opacity-20 text-blue-400 rounded-full text-xs font-medium">Image</span>
                                        </td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">1.8K</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">156</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">78</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 text-sm">Dec 12</td>
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-2 bg-gray-700 rounded-full">
                                                    <div class="w-6 h-2 bg-yellow-500 rounded-full"></div>
                                                </div>
                                                <span class="text-yellow-400 text-sm font-medium">85</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row border-b border-gray-700">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg"></div>
                                                <div>
                                                    <p class="text-gray-900 dark:text-gray-100 font-medium text-sm">Sustainable living: Small changes, big impact</p>
                                                    <p class="text-gray-900 dark:text-gray-100 text-xs">Environmental awareness</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2">
                                            <span class="px-2 py-1 bg-gray-500 bg-opacity-20 text-gray-900 dark:text-gray-100 rounded-full text-xs font-medium">Text</span>
                                        </td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">1.5K</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">203</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">112</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 text-sm">Dec 10</td>
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-2 bg-gray-700 rounded-full">
                                                    <div class="w-6 h-2 bg-green-500 rounded-full"></div>
                                                </div>
                                                <span class="text-green-400 text-sm font-medium">88</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row border-b border-gray-700">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-lg"></div>
                                                <div>
                                                    <p class="text-gray-900 dark:text-gray-100 font-medium text-sm">Recipe: Healthy Mediterranean bowl</p>
                                                    <p class="text-gray-900 dark:text-gray-100 text-xs">Cooking and nutrition</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2">
                                            <span class="px-2 py-1 bg-red-500 bg-opacity-20 text-red-400 rounded-full text-xs font-medium">Video</span>
                                        </td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">1.2K</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">98</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">45</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 text-sm">Dec 8</td>
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-2 bg-gray-700 rounded-full">
                                                    <div class="w-5 h-2 bg-orange-500 rounded-full"></div>
                                                </div>
                                                <span class="text-orange-400 text-sm font-medium">76</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-row">
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg"></div>
                                                <div>
                                                    <p class="text-gray-900 dark:text-gray-100 font-medium text-sm">Digital detox: Why I took a social media break</p>
                                                    <p class="text-gray-900 dark:text-gray-100 text-xs">Mental health and wellness</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-2">
                                            <span class="px-2 py-1 bg-gray-500 bg-opacity-20 text-gray-900 dark:text-gray-100 rounded-full text-xs font-medium">Text</span>
                                        </td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">987</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">145</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 font-medium">67</td>
                                        <td class="py-4 px-2 text-gray-900 dark:text-gray-100 text-sm">Dec 5</td>
                                        <td class="py-4 px-2">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-8 h-2 bg-gray-700 rounded-full">
                                                    <div class="w-5 h-2 bg-blue-500 rounded-full"></div>
                                                </div>
                                                <span class="text-blue-400 text-sm font-medium">72</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <script src="storage/js_style/admin/feedback.js"></script>
    <script src="storage/js_style/msg.js"></script>
    <script src="storage/js_style/favoris.js"></script>

    <script id="engagement-chart">
        document.addEventListener('DOMContentLoaded', function() {
            const engagementChart = echarts.init(document.getElementById('engagementChart'));
            const engagementOption = {
                animation: false,
                backgroundColor: 'transparent',
                grid: {
                    top: 20,
                    left: 0,
                    right: 0,
                    bottom: 0,
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['Dec 1', 'Dec 3', 'Dec 5', 'Dec 7', 'Dec 9', 'Dec 11', 'Dec 13', 'Dec 15'],
                    axisLine: { show: false },
                    axisTick: { show: false },
                    axisLabel: { color: '#9CA3AF', fontSize: 12 }
                },
                yAxis: {
                    type: 'value',
                    axisLine: { show: false },
                    axisTick: { show: false },
                    axisLabel: { color: '#9CA3AF', fontSize: 12 },
                    splitLine: { lineStyle: { color: '#374151' } }
                },
                series: [{
                    name: 'Likes',
                    type: 'line',
                    smooth: true,
                    symbol: 'none',
                    lineStyle: { color: '#57B5E7', width: 3 },
                    areaStyle: {
                        color: {
                            type: 'linear',
                            x: 0, y: 0, x2: 0, y2: 1,
                            colorStops: [
                                { offset: 0, color: 'rgba(87, 181, 231, 0.3)' },
                                { offset: 1, color: 'rgba(87, 181, 231, 0.05)' }
                            ]
                        }
                    },
                    data: [1200, 1450, 1680, 1890, 2100, 1950, 2200, 2300]
                }],
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(31, 41, 55, 0.9)',
                    borderColor: '#374151',
                    textStyle: { color: '#FFFFFF' }
                }
            };
            engagementChart.setOption(engagementOption);
        });
    </script>

    <script id="post-performance-chart">
        document.addEventListener('DOMContentLoaded', function() {
            const postChart = echarts.init(document.getElementById('postPerformanceChart'));
            const postOption = {
                animation: false,
                backgroundColor: 'transparent',
                grid: {
                    top: 20,
                    left: 0,
                    right: 0,
                    bottom: 0,
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['Workout', 'Productivity', 'Sustainable', 'Recipe', 'Digital Detox'],
                    axisLine: { show: false },
                    axisTick: { show: false },
                    axisLabel: { color: '#9CA3AF', fontSize: 11 }
                },
                yAxis: {
                    type: 'value',
                    axisLine: { show: false },
                    axisTick: { show: false },
                    axisLabel: { color: '#9CA3AF', fontSize: 12 },
                    splitLine: { lineStyle: { color: '#374151' } }
                },
                series: [{
                    type: 'bar',
                    data: [2300, 1800, 1500, 1200, 987],
                    itemStyle: {
                        color: '#57B5E7',
                        borderRadius: [4, 4, 0, 0]
                    },
                    barWidth: '60%'
                }],
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(31, 41, 55, 0.9)',
                    borderColor: '#374151',
                    textStyle: { color: '#FFFFFF' }
                }
            };
            postChart.setOption(postOption);
        });
    </script>

    <script id="content-type-chart">
        document.addEventListener('DOMContentLoaded', function() {
            const contentChart = echarts.init(document.getElementById('contentTypeChart'));
            const contentOption = {
                animation: false,
                backgroundColor: 'transparent',
                series: [{
                    type: 'pie',
                    radius: ['40%', '70%'],
                    center: ['50%', '50%'],
                    data: [
                        { value: 45, name: 'Video', itemStyle: { color: '#57B5E7' } },
                        { value: 30, name: 'Image', itemStyle: { color: '#8DD3C7' } },
                        { value: 25, name: 'Text', itemStyle: { color: '#FBBF72' } }
                    ],
                    label: {
                        color: '#FFFFFF',
                        fontSize: 12
                    },
                    labelLine: {
                        lineStyle: { color: '#9CA3AF' }
                    },
                    itemStyle: {
                        borderRadius: 4
                    }
                }],
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(31, 41, 55, 0.9)',
                    borderColor: '#374151',
                    textStyle: { color: '#FFFFFF' },
                    formatter: '{a} <br/>{b}: {c} ({d}%)'
                }
            };
            contentChart.setOption(contentOption);
        });
    </script>

    <script id="interactive-elements">
        document.addEventListener('DOMContentLoaded', function() {
            const dateButtons = document.querySelectorAll('header .flex.bg-gray-800 button');
            dateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    dateButtons.forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-white');
                        btn.classList.add('text-gray-400');
                    });
                    this.classList.add('bg-primary', 'text-white');
                    this.classList.remove('text-gray-400');
                });
            });

            const engagementButtons = document.querySelectorAll('.bg-gray-800.rounded-2xl .flex.space-x-2 button');
            engagementButtons.forEach(button => {
                button.addEventListener('click', function() {
                    engagementButtons.forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-white');
                        btn.classList.add('bg-gray-700', 'text-gray-300');
                    });
                    this.classList.add('bg-primary', 'text-white');
                    this.classList.remove('bg-gray-700', 'text-gray-300');
                });
            });

            window.addEventListener('resize', function() {
                const charts = [
                    echarts.getInstanceByDom(document.getElementById('engagementChart')),
                    echarts.getInstanceByDom(document.getElementById('postPerformanceChart')),
                    echarts.getInstanceByDom(document.getElementById('contentTypeChart'))
                ];
                charts.forEach(chart => {
                    if (chart) chart.resize();
                });
            });
        });
    </script>

</body>
</html>