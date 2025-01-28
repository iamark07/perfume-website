<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
  
  
    <style>
        .table_overflow::-webkit-scrollbar {
            display: none;
        }

        table tbody tr:nth-child(even) {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="poppins-regular">

    <main class="">
        {{-- admin header --}}
        @include('admin.admin-partials.admin-header')
        <div class="lg:flex">
            <!-- Sidebar -->
            @include('admin.admin-partials.admin-nav')

            <!-- Main Content -->
            <div class="lg:w-[86%] xl:w-[88%] w-full flex flex-col">
                
                
                <!-- Page Title -->
                {{-- <h1 class="text-3xl font-semibold mb-6">Dashboard</h1> --}}

                {{-- <div class="w-full relative">
                    <a href="{{ url('/admin/users/add-users') }}"
                        class="bg-gray-900 text-white text-sm md:text-md py-2 md:py-3 px-5 md:px-7 rounded-md h-fit absolute right-0">Add
                        User</a>
                </div> --}}
                <div class="px-5 md:px-10 pb-10 mt-10">
                    {{-- from to date section --}}
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-5">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Dashboard Analytics</h3>
                        <div class="w-full sm:w-fit">
                            <div class="w-full sm:w-80 p-3 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                                <input
                                id="dateRangePicker"
                                type="text"
                                class="text-center w-full px-4 py-1 border text-gray-700"
                                placeholder="Select a date range"/>
                            </div>
                        </div>
                    </div>
                    {{-- analytics cards --}}
                    <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-5 w-full mt-10 p-5 rounded-md shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] bg-white">
                        <!-- Total Users Card -->
                        <div class="box py-5 bg-pink-100 shadow-md rounded-md flex items-center justify-center flex-col overflow-hidden">
                            <div class="bg-pink-300 rounded-full h-10 w-10 flex items-center justify-center shadow-md mb-3">
                                <i class="ri-user-3-fill text-pink-600 text-xl"></i>
                            </div>
                            <h1 class="text-xl font-bold mb-2">200</h1>
                            <h3 class="text-md font-semibold">Total Users</h3>
                        </div>
                    
                        <!-- Total Orders Card -->
                        <div class="box py-5 bg-green-100 shadow-md rounded-md flex items-center justify-center flex-col overflow-hidden">
                            <div class="bg-green-300 rounded-full h-10 w-10 flex items-center justify-center shadow-md mb-3">
                                <i class="ri-shopping-cart-fill text-green-600 text-xl"></i>
                            </div>
                            <h1 class="text-xl font-bold mb-2">150</h1>
                            <h3 class="text-md font-semibold">Total Orders</h3>
                        </div>
                    
                        <!-- Ready for Pickup Card -->
                        <div class="box py-5 bg-yellow-100 shadow-md rounded-md flex items-center justify-center flex-col overflow-hidden">
                            <div class="bg-yellow-300 rounded-full h-10 w-10 flex items-center justify-center shadow-md mb-3">
                                <i class="ri-box-2-fill text-yellow-600 text-xl"></i>
                            </div>
                            <h1 class="text-xl font-bold mb-2">32</h1>
                            <h3 class="text-md font-semibold">Ready for Pickup</h3>
                        </div>
                    
                        <!-- Intransit Card -->
                        <div class="box py-5 bg-purple-100 shadow-md rounded-md flex items-center justify-center flex-col overflow-hidden">
                            <div class="bg-purple-300 rounded-full h-10 w-10 flex items-center justify-center shadow-md mb-3">
                                <i class="ri-truck-fill text-purple-600 text-xl"></i>
                            </div>
                            <h1 class="text-xl font-bold mb-2">20</h1>
                            <h3 class="text-md font-semibold">Intransit</h3>
                        </div>
                    
                        <!-- Total Sale Card -->
                        <div class="box py-5 bg-blue-100 shadow-md rounded-md flex items-center justify-center flex-col overflow-hidden">
                            <div class="bg-blue-300 rounded-full h-10 w-10 flex items-center justify-center shadow-md mb-3">
                                <i class="ri-money-rupee-circle-fill text-blue-600 text-xl"></i>
                            </div>
                            <h1 class="text-xl font-bold mb-2">3,00,000</h1>
                            <h3 class="text-md font-semibold">Total Sale</h3>
                        </div>
                    </div>
                    {{-- overviews --}}
                    <div class="mt-10">                
                        <div class="grid sm:grid-cols-2 xl:grid-cols-3 grid-cols-1 gap-5 w-full">
                            <!-- Order Status Chart -->
                            <div class="flex flex-col items-center p-5 !h-fit rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                                <h4 class="text-lg font-semibold mb-3">Order Status</h4>
                                <canvas id="orderStatusChart" class="!w-[90%] md:!h-[250px] !h-[220px]"></canvas>
                            </div>
                            <!-- User Growth Chart -->
                            <div class="flex flex-col items-center p-5 !h-fit rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                                <h4 class="text-lg font-semibold mb-3">User Growth</h4>
                                <canvas id="userGrowthChart" class="!w-[90%] md:!h-[250px] !h-[220px]"></canvas>
                            </div>
                            <!-- Sales Chart -->
                            <div class="flex flex-col items-center p-5 !h-fit rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                                <h4 class="text-lg font-semibold mb-3">Sales Overview</h4>
                                <canvas id="salesChart" class="!w-[90%] md:!h-[250px] !h-[220px]"></canvas>
                            </div>
                        </div>
                    </div>                    
                    {{-- performance --}}
                    <div class="mt-10 w-full grid grid-cols-1 sm:grid-cols-2 gap-5 items-center">
                        <div class="rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] bg-white py-5 px-5">
                            <h3 class="text-xl font-semibold text-gray-800 mb-5">State wise performance</h3>
                            <div align="center" class="!w-full">
                            <div id="visualization" class="!w-full overflow-hidden"></div>
                            </div>
                        </div>
                        <div class="rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] bg-white py-5 px-5 h-full">
                            <h3 class="text-xl font-semibold text-gray-800 mb-5">Top Products by Sales Volume</h3>
                            <canvas id="top-products-chart" class="!w-full !h-[200px] md:!h-fit"></canvas>
                        </div>
                    </div>
                    <!-- Recent Orders -->
                    <div class="mt-10 bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Recent Orders</h3>
                        
                        <div id="scrollableTable" class="overflow-x-auto">
                            <table class="min-w-full table-auto text-sm">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600">
                                        <th class="py-3 px-6 border border-gray-300 text-center text-nowrap">Order ID</th>
                                        <th class="py-3 px-6 border border-gray-300 text-center text-nowrap">User</th>
                                        <th class="py-3 px-6 border border-gray-300 text-center text-nowrap">Product</th>
                                        <th class="py-3 px-6 border border-gray-300 text-center text-nowrap">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-800">
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">#123</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">John Doe</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">Perfume A</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center"><span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Pending</span></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">#124</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">Jane Smith</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center">Perfume B</td>
                                        <td class="py-3 px-6 border border-gray-300 text-nowrap text-center"><span class="bg-green-200 text-green-800 px-2 py-1 rounded-full">Completed</span></td>
                                    </tr>
                                    <!-- Add more rows as necessary -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- notifications --}}
                    <div class="mt-10 bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Notifications</h3>
                    
                        <div class="space-y-4">
                            <!-- Notification 1 -->
                            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg shadow-sm">
                                <div class="flex items-center gap-3 sm:gap-4 w-[65%]">
                                    <i class="ri-shopping-cart-2-line text-md sm:text-xl text-gray-700"></i>
                                    <p class="text-xs sm:text-sm text-gray-800">
                                        New order placed by <span class="font-semibold">John Doe</span>.
                                    </p>
                                </div>
                                <span class="w-[30%] text-xs sm:text-xs text-gray-500">2 mins ago</span>
                            </div>
                    
                            <!-- Notification 2 -->
                            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg shadow-sm">
                                <div class="flex items-center gap-3 sm:gap-4 w-[65%]">
                                    <i class="ri-user-add-line text-md sm:text-xl text-gray-700"></i>
                                    <p class="text-xs sm:text-sm text-gray-800">
                                        <span class="font-semibold">Jane Smith</span> registered as a new user.
                                    </p>
                                </div>
                                <span class="w-[30%] text-xs sm:text-xs text-gray-500">10 mins ago</span>
                            </div>
                    
                            <!-- Notification 3 -->
                            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg shadow-sm">
                                <div class="flex items-center gap-3 sm:gap-4 w-[65%]">
                                    <i class="ri-money-rupee-circle-line text-md sm:text-xl text-gray-700"></i>
                                    <p class="text-xs sm:text-sm text-gray-800">
                                        Payment of <span class="font-semibold">₹2,000</span> received for Order #124.
                                    </p>
                                </div>
                                <span class="w-[30%] text-xs sm:text-xs text-gray-500">30 mins ago</span>
                            </div>
                    
                            <!-- Add more notifications here -->
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>

    {{-- map chart --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{-- other chart script --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- date from to scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/en.js"></script>

    {{-- custom scripts --}}
    <script>
        const scrollableTable = document.getElementById("scrollableTable");

        let isDragging = false;
        let startX;
        let scrollLeft;

        scrollableTable.addEventListener("mousedown", (e) => {
            isDragging = true;
            scrollableTable.style.cursor = "grabbing";
            startX = e.pageX - scrollableTable.offsetLeft;
            scrollLeft = scrollableTable.scrollLeft;
        });

        scrollableTable.addEventListener("mouseleave", () => {
            isDragging = false;
            scrollableTable.style.cursor = "grab";
        });

        scrollableTable.addEventListener("mouseup", () => {
            isDragging = false;
            scrollableTable.style.cursor = "grab";
        });

        scrollableTable.addEventListener("mousemove", (e) => {
            if (!isDragging) return;
            e.preventDefault();
            const x = e.pageX - scrollableTable.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scroll speed here
            scrollableTable.scrollLeft = scrollLeft - walk;
        });
    </script>
    <script src="{{ asset('assets/js/admin-script/admin.js') }}"></script>
    <script src="{{ asset('assets/js/admin-script/dashboard.js') }}"></script>
    
</body>

</html>