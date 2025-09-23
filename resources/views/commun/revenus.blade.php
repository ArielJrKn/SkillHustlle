<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenus et transactions | Formateur</title>
    <link rel="stylesheet" type="text/css" href="storage/style/progresseBar.css">
    <link rel="stylesheet" type="text/css" href="storage/style/scroll.css">
    <link rel="stylesheet" type="text/css" href="storage/style/switchAction.css">
    <link rel="stylesheet" type="text/css" href="storage/style/msg.css">
    <link rel="stylesheet" type="text/css" href="storage/style/dark.css">
    <link rel="stylesheet" type="text/css" href="storage/style/notifications.css">
    <link rel="stylesheet" type="text/css" href="storage/style/formateur/sideBar.css">
    <!-- <link rel="stylesheet" type="text/css" href="storage/style/admin/dashboard.css"> -->
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
        <header class="h-16 backdrop-filter backdrop-blur-lg absolute w-full shadow-sm flex items-center justify-between px-6 z-10">
            @include('layouts.headerV2')
        </header>

        <!-- Main Content Area -->
        <div class="flex-1 flex overflow-hidden">

            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">

                <!-- Main Content Area -->
                <main class="pt-16 flex-1 overflow-y-auto bg-white dark:bg-black">
                    <!-- Header -->
                    <div class="px-8 py-6 md:flex md:flex-col">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Revenus et transactions</h1>
                                <!-- <p class="text-sm text-gray-500 mt-1">Janvier 2025 - Décembre 2025</p> -->
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex-1 p-2 space-y-8">
                        <!-- Revenue Chart -->
                        <div class="bg-primary bg-opacity-20 rounded-xl p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Revenus $5,500</h2>
                                <div class="flex items-center space-x-6 text-sm">
                                    <!-- <div class="flex items-center">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                         <span class="text-gray-600">Abonnements</span>
                                    </div> -->
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                        <span class="text-gray-600">Paiements uniques</span>
                                    </div>
                                </div>
                            </div>
                            <div id="revenueChart" class="h-80"></div>
                        </div>

                        <!-- Transactions Table -->
                        <div class="bg-primary bg-opacity-20 rounded-xl">
                            <div class="px-6 py-4">
                                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Historique des transactions</h2>
                            </div>
                            
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-primary bg-opacity-10 divide-y divide-gray-200">
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-blue-600">ML</span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Marie Lefebvre</div>
                                                        <div class="text-sm text-gray-500">marie.lefebvre@email.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">29,99 €</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                    Abonnement
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 Jan 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    Succès
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                                <button class="text-primary hover:text-blue-600 font-medium">Voir facture</button>
                                                <button class="text-red-600 hover:text-red-700 font-medium">Rembourser</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-green-600">JD</span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Jean Dubois</div>
                                                        <div class="text-sm text-gray-500">jean.dubois@email.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">149,00 €</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    Paiement unique
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14 Jan 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    Succès
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                                <button class="text-primary hover:text-blue-600 font-medium">Voir facture</button>
                                                <button class="text-red-600 hover:text-red-700 font-medium">Rembourser</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-yellow-600">SM</span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Sophie Martin</div>
                                                        <div class="text-sm text-gray-500">sophie.martin@email.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">19,99 €</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                    Abonnement
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 Jan 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                    En attente
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                                <button class="text-primary hover:text-blue-600 font-medium">Voir facture</button>
                                                <button class="text-red-600 hover:text-red-700 font-medium">Rembourser</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-red-600">PL</span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Pierre Leroy</div>
                                                        <div class="text-sm text-gray-500">pierre.leroy@email.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">89,00 €</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    Paiement unique
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12 Jan 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                    Échec
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                                <button class="text-primary hover:text-blue-600 font-medium">Voir facture</button>
                                                <button class="text-red-600 hover:text-red-700 font-medium">Rembourser</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-white hover:bg-opacity-10">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                                                        <span class="text-sm font-medium text-indigo-600">AB</span>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">Anne Bernard</div>
                                                        <div class="text-sm text-gray-500">anne.bernard@email.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">39,99 €</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                    Abonnement
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">11 Jan 2025</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    Succès
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                                                <button class="text-primary hover:text-blue-600 font-medium">Voir facture</button>
                                                <button class="text-red-600 hover:text-red-700 font-medium">Rembourser</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <!-- Pagination -->
                            <div class="px-6 py-3 border-t border-gray-200 flex items-center justify-between">
                                <div class="flex-1 flex justify-between sm:hidden">
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-button text-gray-700 bg-white hover:bg-gray-50">
                                        Précédent
                                    </button>
                                    <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-button text-gray-700 bg-white hover:bg-gray-50">
                                        Suivant
                                    </button>
                                </div>
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">
                                            Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span class="font-medium">47</span> résultats
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="relative z-0 inline-flex rounded-button shadow-sm -space-x-px" aria-label="Pagination">
                                            <button class="relative inline-flex items-center px-2 py-2 rounded-l-button border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </div>
                                            </button>
                                            <button class="bg-primary border-primary text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</button>
                                            <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</button>
                                            <button class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</button>
                                            <button class="relative inline-flex items-center px-2 py-2 rounded-r-button border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <div class="w-5 h-5 flex items-center justify-center">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </div>
                                            </button>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>    
    </div>


    <script src="storage/js_style/notif.js"></script>
    <script src="storage/js_style/dark.js"></script>
    <script src="storage/js_style/formateur/dashboard.js"></script>
    <!-- <script src="storage/js_style/admin/dashboard.js"></script> -->
    <script src="storage/js_style/msg.js"></script>
    <script id="chart-initialization">
        document.addEventListener('DOMContentLoaded', function() {
            const chartDom = document.getElementById('revenueChart');
            const myChart = echarts.init(chartDom);
            
            const option = {
                animation: false,
                grid: {
                    left: 0,
                    right: 0,
                    top: 20,
                    bottom: 0,
                    containLabel: true
                },
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                    axisLine: {
                        lineStyle: {
                            color: '#e5e7eb'
                        }
                    },
                    axisTick: {
                        show: false
                    },
                    axisLabel: {
                        color: '#6b7280'
                    }
                },
                yAxis: {
                    type: 'value',
                    axisLine: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
                    axisLabel: {
                        color: '#6b7280',
                        formatter: '{value}€'
                    },
                    splitLine: {
                        lineStyle: {
                            color: '#f3f4f6'
                        }
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    borderColor: '#e5e7eb',
                    textStyle: {
                        color: '#1f2937'
                    }
                },
                series: [
                    {
                        name: 'Paiements uniques',
                        type: 'line',
                        smooth: true,
                        symbol: 'none',
                        lineStyle: {
                            color: 'green',
                            width: 3
                        },
                        areaStyle: {
                            color: {
                                type: 'linear',
                                x: 0,
                                y: 0,
                                x2: 0,
                                y2: 1,
                                colorStops: [{
                                    offset: 0,
                                    color: 'rgba(141, 211, 199, 0.1)'
                                }, {
                                    offset: 1,
                                    color: 'rgba(141, 211, 199, 0.01)'
                                }]
                            }
                        },
                        data: [1200, 1500, 1800, 1600, 2100, 2400, 2800, 2500, 3000, 3200, 3600, 3300]
                    }
                ]
            };
            
            myChart.setOption(option);
            
            window.addEventListener('resize', function() {
                myChart.resize();
            });
        });
    </script>
</body>

</html>