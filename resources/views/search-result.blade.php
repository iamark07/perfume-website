<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-[#fff7ee] font-sans text-gray-800">

    <!-- Include Header -->
    @include('partials.header')

    <!-- Search Results Section -->
    <section class="search-results-section px-5 md:px-20 py-20">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Search Results for "<span id="searchQuery">Perfume</span>"
            </h1>

            <!-- Results Grid -->
            <div id="resultsGrid" class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
                <!-- Result Item -->
                <div
                    class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                    <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                    <div class="overflow-hidden">
                        <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                            <figure class="relative w-full h-full">
                                <img src="{{ asset('assets/img/item-1.jpg') }}" alt="Rose Delight"
                                class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                                <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                            </figure>
                        </a>
                        <div class="p-4">
                            <a href="{{ url('/product') }}">
                                <h3 class="text-md md:text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Rose Delight</h3>
                            </a>
                            <p class="text-gray-600 text-xs md:text-sm">Category: Floral</p>
                            <span class="flex w-full justify-between items-center mt-3">
                                <p class="text-blue-600 font-bold text-md md:text-xl">₹ 25.00</p>
                                <span class="text-md md:text-lg text-gray-900 inline-block"><i
                                    class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.7</span>
                            </span>
                            <a href="{{ url('/cart') }}"><button
                                    class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                    to Cart</span></button></a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                    <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                    <div class="overflow-hidden">
                        <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                            <figure class="relative w-full h-full">
                                <img src="{{ asset('assets/img/item-1.jpg') }}" alt="Rose Delight"
                                class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                                <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                            </figure>
                        </a>
                        <div class="p-4">
                            <a href="{{ url('/product') }}">
                                <h3 class="text-md md:text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Rose Delight</h3>
                            </a>
                            <p class="text-gray-600 text-xs md:text-sm">Category: Floral</p>
                            <span class="flex w-full justify-between items-center mt-3">
                                <p class="text-blue-600 font-bold text-md md:text-xl">₹ 25.00</p>
                                <span class="text-md md:text-lg text-gray-900 inline-block"><i
                                    class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.7</span>
                            </span>
                            <a href="{{ url('/cart') }}"><button
                                    class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                    to Cart</span></button></a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                    <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                    <div class="overflow-hidden">
                        <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                            <figure class="relative w-full h-full">
                                <img src="{{ asset('assets/img/item-1.jpg') }}" alt="Rose Delight"
                                class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                                <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                            </figure>
                        </a>
                        <div class="p-4">
                            <a href="{{ url('/product') }}">
                                <h3 class="text-md md:text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Rose Delight</h3>
                            </a>
                            <p class="text-gray-600 text-xs md:text-sm">Category: Floral</p>
                            <span class="flex w-full justify-between items-center mt-3">
                                <p class="text-blue-600 font-bold text-md md:text-xl">₹ 25.00</p>
                                <span class="text-md md:text-lg text-gray-900 inline-block"><i
                                    class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.7</span>
                            </span>
                            <a href="{{ url('/cart') }}"><button
                                    class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                    to Cart</span></button></a>
                        </div>
                    </div>
                </div>

                <!-- More items as needed -->
            </div>

            <!-- No Results Message -->
            <p id="noResultsMessage" class="hidden text-center text-gray-600 mt-10">
                No results found. Please try searching for something else.
            </p>
        </div>
    </section>

    <script src="assets/js/cart.js"></script>

    <script>
        // Example script to toggle no results message
        const resultsGrid = document.getElementById('resultsGrid');
        const noResultsMessage = document.getElementById('noResultsMessage');
        if (resultsGrid.children.length === 0) {
            resultsGrid.classList.add('hidden');
            noResultsMessage.classList.remove('hidden');
        }
    </script>

</body>

</html>