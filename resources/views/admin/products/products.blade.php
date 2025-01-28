<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800">All Products</h3>
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
                        <!-- Products List -->
                        <div class="p-5 rounded-md shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] bg-white">
                            {{-- <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-semibold">Product Dashboard</h2>
                                <!-- Add Product Button -->
                                <a href="{{ url('/admin/products/add-products')}}" class="bg-gray-900 text-white text-sm md:text-md py-2 px-5 rounded-md">
                                    Add Product
                                </a>
                            </div> --}}

                            <!-- Table Container with Horizontal Drag -->
                            <div id="scrollableTable" class="table_overflow overflow-x-auto cursor-grab w-full">
                                <table class="min-w-full table-auto text-sm border-collapse">
                                    <thead>
                                        <tr class="bg-gray-200 text-gray-600">
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">ID</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Name</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Description</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Original Price</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Discount</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Discount Price</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Added Date</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Update Date</th>
                                            <th class="px-4 py-2 text-center border border-gray-300 text-nowrap">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-800">
                                        <!-- Sample Product Row -->
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">001</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap capitalize">Flora</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">Best perfume ever</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>1299</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">20%</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>899</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">
                                                <a href="{{ url('/admin/products/edit-products') }}" class="text-blue-600 hover:text-blue-800">Edit</a> |
                                                <a href="{{ url('/admin/products/delete-products') }}" class="text-red-600 hover:text-red-800">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">001</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap capitalize">Flora</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">Best perfume ever</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>1299</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">20%</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>899</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">
                                                <a href="{{ url('/admin/products/edit-products') }}" class="text-blue-600 hover:text-blue-800">Edit</a> |
                                                <a href="{{ url('/admin/products/delete-products') }}" class="text-red-600 hover:text-red-800">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">001</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap capitalize">Flora</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">Best perfume ever</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>1299</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">20%</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap"><span class="me-[1px]">₹</span>899</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">2025-01-14</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center text-nowrap">
                                                <a href="{{ url('/admin/products/edit-products') }}" class="text-blue-600 hover:text-blue-800">Edit</a> |
                                                <a href="{{ url('/admin/products/delete-products') }}" class="text-red-600 hover:text-red-800">Delete</a>
                                            </td>
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