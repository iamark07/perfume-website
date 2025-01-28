<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
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
                <div class="px-5 pb-10 mt-10">
                    <!-- Page Title -->
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-5">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Payment History</h3>
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
            
                    <div class="flex flex-col gap-5 mt-5">
                        <!-- Payment History Table -->
                        <div class="bg-white p-5 shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] rounded-md">
                            {{-- <div class="flex justify-between">
                                <h2 class="text-2xl font-semibold mb-4">All Transactions</h2>
                            </div> --}}
            
                            <!-- Table Container with Horizontal Drag -->
                            <div id="scrollableTable" class="table_overflow overflow-x-auto cursor-grab w-full">
                                <table class="min-w-full table-auto text-sm border-collapse">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600">
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Payment ID</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Customer Name</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Email</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Payment Method</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Amount</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Payment Status</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">P001</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">John Doe</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">john.doe@example.com</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">Credit Card</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">$100</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-green-600 font-semibold text-nowrap">Successful</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-21</td>
                                        </tr>
                                        <!-- Add more rows dynamically -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <!-- Pagination -->
                        <div class="max-w-6xl mx-auto flex justify-center items-center space-x-2 py-4 poppins-regular" data-aos="fade-up">
                            <a href="#prev" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">Prev</a>
                            <a href="#page1" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-gray-900 text-white">1</a>
                            <a href="#page2" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">2</a>
                            <a href="#page3" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">3</a>
                            <a href="#next" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">Next</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
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
    {{-- date from to scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/en.js"></script>
    <script src="{{ asset('assets/js/admin-script/admin.js') }}"></script>
</body>

</html>
