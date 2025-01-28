<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scroll animation CSS CDN link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Remix icon CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Perfume E-commerce</title>
</head>

<body class="bg-[#fff7ee] font-sans text-gray-800">

    {{-- offer title  --}}

    <!-- Marquee Section -->
    <div class="relative bg-gradient-to-r from-purple-500 to-pink-500 text-white">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative overflow-hidden h-12">
        <div class="flex items-center h-full scroll-text whitespace-nowrap">
            <span class="mx-10 font-bold text-lg">🌟 Special Offer: Get 20% OFF on all perfumes! 🌟</span>
            <span class="mx-10 font-bold text-lg">💐 Free Shipping on Orders Above ₹50! 💐</span>
            <span class="mx-10 font-bold text-lg">🎁 Buy 2 Get 1 Free on Selected Products! 🎁</span>
        </div>
        </div>
    </div>

    <!-- Include Header -->
    @include('partials.header')

    <!-- Hero Section -->
    <div id="hero" class="relative h-[100dvh] bg-gray-900 overflow-hidden">
        <!-- Dark Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-gray-900 opacity-20 z-10"></div>

        <!-- Images for the carousel -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('assets/img/slider-1.jpg') }}" alt="Hero Image 1"
                class="hero-image absolute inset-0 w-full h-full object-cover object-left opacity-100">
            <img src="{{ asset('assets/img/perfume-10.png') }}" alt="Hero Image 2"
                class="hero-image absolute inset-0 w-full h-full object-cover object-left opacity-0">
            <img src="{{ asset('assets/img/perfume-11.png') }}" alt="Hero Image 3"
                class="hero-image absolute inset-0 w-full h-full object-cover object-center opacity-0">
        </div>

        
        
        <div
            class="animate absolute poppins-regular inset-0 z-10 flex flex-col justify-center items-center text-center text-white px-4 mt-32">
            <h1 class="text-4xl md:text-6xl font-bold mb-4" id="hero-title">Discover Your
                Fragrance</h1>
            <p class="animate text-lg md:text-xl" id="hero-subtitle">Experience luxury with every scent
            </p>
            <div class="animate"><a href="{{ url('/shop')}}" id="hero-button"
                class="inline-block mt-6 px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-600 transition-all duration-300">Shop
                Now</a>
            </div>
        </div>
    </div>
    
    
    <section class="brand-logo_container w-full bg-white py-3 md:py-5">
        <marquee behavior="" direction="">
            <div class="brand_logo flex items-center whitespace-nowrap gap-7 md:gap-16">
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-1.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-2.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-3.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-4.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-5.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/brand-6.png') }}" alt=""
                        class="min-w-14 h-14 sm:min-w-16 sm:!h-16 md:min-w-24 md:h-24 object-contain">
                </div>
            </div>
        </marquee>
    </section>

    <!-- Filter and Sort Controls -->
    <div id="products_section" class="max-w-6xl mx-auto p-4 mt-20" data-aos="fade-up">
        <div class="grid grid-cols-2 md:grid-cols-none md:flex gap-6 justify-between items-center mb-6">
            <div class="filter_option poppins-regular">
                <!-- filter Button -->
                <div class="relative">
                    <h4 id="filterButton" class="relative cursor-pointer md:w-[200px] rounded-t-md md:rounded-md bg-gray-900 text-white px-5 py-2 flex items-center justify-center gap-3 shadow-md">
                      Filter <i class="ri-filter-2-line text-2xl ms-2"></i>
                    </h4>
                  
                    <!-- Filter Options -->
                    <div id="filterOptions" class="md:!w-full mt-4 absolute top-full opacity-0 pointer-events-none bg-white rounded-md shadow-md p-4 transition-all duration-300 z-30">
                      <!-- Brands Filter -->
                        <div class="mb-6">
                            <h5 class="font-semibold text-lg text-gray-800">Brands</h5>
                            <ul class="mt-2">
                                <li class="p-2 text-gray-700 hover:bg-gray-200 rounded cursor-pointer">Chanel</li>
                                <li class="p-2 text-gray-700 hover:bg-gray-200 rounded cursor-pointer">Dior</li>
                                <li class="p-2 text-gray-700 hover:bg-gray-200 rounded cursor-pointer">Gucci</li>
                                <li class="p-2 text-gray-700 hover:bg-gray-200 rounded cursor-pointer">Versace</li>
                            </ul>
                        </div>
                  
                        <!-- Price Filter -->
                        <div>
                            <h5 class="font-semibold text-lg text-gray-800">Price Range</h5>
                            <div class="mt-4">
                                <input type="range" id="priceRange" min="0" max="500" value="0" class="w-full appearance-none h-2 bg-gray-300 rounded-lg ">
                                <div class="flex justify-between text-gray-700 mt-2">
                                    <span id="minPrice">₹0</span>
                                    <span id="currentPrice">₹250</span>
                                    <span id="maxPrice">₹500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sort_option relative">
                <!-- Sort Button -->
                <h4 id="sortButton"
                    class="relative sort_select_btn cursor-pointer md:w-[200px] rounded-t-md md:rounded-md bg-gray-900 text-white px-5 py-2 flex items-center justify-center gap-3 shadow-md">
                    Sort<i class="ri-sort-asc text-2xl ms-2 select_down_arrow"></i>
                </h4>
                    <!-- Sort Options Dropdown -->
                <ul id="sortOptions"
                    class="hidden_sort absolute z-30 top-full overflow-hidden shadow-md rounded-b-md right-0 bg-white md:!w-full opacity-0 pointer-events-none mt-4">
                    <li
                        class="p-3 text-nowrap border-b border-solid text-black border-gray-200 cursor-pointer text-sm">
                        Price: Low to High</li>
                    <li
                        class="p-3 text-nowrap border border-solid text-black border-gray-200 cursor-pointer text-sm">
                        Price: High to Low</li>
                </ul>
                


            </div>
        </div>
    </div>

    <!-- Product Cards -->
    <div class="w-full flex flex-col items-center py-20 md:px-20 p-5 bg-white poppins-regular ">
        <div class="w-full grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6" data-aos="fade-up">
            <!-- Manually added cards -->
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

            <!-- Product Card 2 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-2.jpg') }}" alt="Citrus Splash" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Citrus Splash</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Citrus</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 30.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.5</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-3.jpg') }}" alt="Sandalwood Bliss" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Sandalwood Bliss</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Woody</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 35.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.8</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                    <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-4.jpg') }}" alt="Lemon Zest" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Lemon Zest</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Citrus</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 20.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.6</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-5.jpg') }}" alt="Jasmine Breeze" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Jasmine Breeze</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Floral</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 28.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.4</span>
                        </span>
                        <a href="{{ url('/cart') }}">
                            <button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-6.jpg') }}" alt="Vanilla Dream" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Vanilla Dream</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Sweet</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 40.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.9</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-7.jpg') }}" alt="Peach Blossom" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Peach Blossom</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Fruity</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 22.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.3</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="relative group bg-white shadow-md hover:shadow-lg hover:shadow-[#9b9b9b] rounded-lg transition-all duration-500 my-5">
                <div class="absolute -top-[20px] -right-[10px] md:w-14 w-12 md:h-14 h-12 rounded-full bg-red-500 flex items-center justify-center text-white text-nowrap text-[10px] md:text-xs z-20 shadow-md shadow-gray-400 group-hover:shadow-gray-700 transition-all duration-300">30% Off</div>
                <div class="overflow-hidden">
                    <a href="{{ url('/product') }}" class="inline-block w-full h-40 md:h-48 overflow-hidden">
                        <figure class="relative w-full h-full">
                            <img src="{{ asset('assets/img/item-8.jpg') }}" alt="Lavender Fields" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                            <figcaption class="h-full w-full absolute top-0 left-0 bg-black group-hover:opacity-50 opacity-0 z-10 flex items-center justify-center text-white transition-all duration-500"><i class="ri-search-eye-line text-4xl"></i></figcaption>
                        </figure>
                    </a>
                    <div class="p-4">
                        <a href="{{ url('/product') }}">
                            <h3 class="text-md md:text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis">Lavender Fields</h3>
                        </a>
                        <p class="text-gray-600 text-xs md:text-sm">Category: Floral</p>
                        <span class="flex w-full justify-between items-center mt-3">
                            <p class="text-blue-600 font-bold text-md md:text-xl">₹ 32.00</p>
                            <span class="text-md md:text-lg text-gray-900 inline-block"><i class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.6</span>
                        </span>
                        <a href="{{ url('/cart') }}"><button
                                class="mt-4 w-full bg-gray-900 text-white p-2 rounded hover:bg-gray-600 transition-all duration-300 flex items-center justify-center"><i class="ri-shopping-cart-fill text-xl md:me-3"></i><span class="hidden md:block">Add
                                to Cart</span></button></a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Pagination -->
        <div class="w-full mt-10 flex justify-center items-center space-x-2 p-4 poppins-regular" data-aos="fade-up">
            <a href="#page1"
                class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">Prev</a>
            <a href="#page1" class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-gray-900 text-white">1</a>
            <a href="#page2"
                class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">2</a>
            <a href="#page3"
                class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">3</a>
            <a href="#page2"
                class="transition-all duration-300 px-4 py-2 rounded shadow-md bg-white text-gray-700 hover:bg-gray-900 hover:text-white">Next</a>
        </div>
    </div>

    
    

    <!-- Fragrance Type Section -->
    <section class="mb-20 py-12 poppins-regular relative bg-fixed bg-cover" style="background-image: url('{{ asset('assets/img/store.jpg') }}');">
        <div class="absolute top-0 left-0 w-full h-full bg-gray-900 opacity-70 z-0"></div>
        <div class="container mx-auto px-6 text-center relative z-20">
        <h2 class="text-3xl font-bold my-8 text-white" data-aos="fade-up">Fragrance Types</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-20" data-aos="fade-up">
            <!-- Fragrance Card 1 -->
            <div class="p-6 transition-all duration-300">
            <div class="text-white text-5xl mb-4">
                <i class="ri-leaf-line"></i> <!-- Remix Icon -->
            </div>
            <h3 class="text-xl font-semibold text-white">Floral</h3>
            <p class="text-gray-200 mt-2">
                A delicate and romantic fragrance inspired by blooming flowers.
            </p>
            </div>

            <!-- Fragrance Card 2 -->
            <div class="p-6 transition-all duration-300">
            <div class="text-white text-5xl mb-4">
                <i class="ri-sun-line"></i> <!-- Remix Icon -->
            </div>
            <h3 class="text-xl font-semibold text-white">Citrus</h3>
            <p class="text-gray-200 mt-2">
                Energizing scents with zesty notes of lemon, orange, and lime.
            </p>
            </div>

            <!-- Fragrance Card 3 -->
            <div class="p-6 transition-all duration-300">
            <div class="text-white text-5xl mb-4">
                <i class="ri-fire-line"></i> <!-- Remix Icon -->
            </div>
            <h3 class="text-xl font-semibold text-white">Spicy</h3>
            <p class="text-gray-200 mt-2">
                Warm and exotic fragrances with hints of spices and herbs.
            </p>
            </div>

            <!-- Fragrance Card 4 -->
            <div class="p-6 transition-all duration-300">
            <div class="text-white text-5xl mb-4">
                <i class="ri-star-line"></i> <!-- Remix Icon -->
            </div>
            <h3 class="text-xl font-semibold text-white">Woody</h3>
            <p class="text-gray-200 mt-2">
                Earthy and grounding fragrances inspired by forests and woods.
            </p>
            </div>
        </div>
        </div>
    </section>

    {{-- why choose us --}}
    <section class="py-12 px-5 md:px-10 my-32 flex justify-center" data-aos="fade-up">
        <div class="bg-white lg:w-6/7 max-w-6xl mx-auto md:flex grid grid-cols-1 justify-center gap-8 p-6 relative shadow-md rounded-md">
            <!-- Image Section -->
            <div class="w-full md:w-[28%] lg:w-[20%] relative">
                <img
                src="{{ asset('assets/img/perfume-2.png') }}"
                alt="Luxury Perfume"
                class="w-full h-[350px] md:h-[270px] rounded-lg md:absolute -top-20 left-0 shadow-xl object-cover object-bottom shadow-md md:shadow-gray-500"/>
            </div>
        
            <!-- Text Section -->
            <div class="md:py-10 w-full md:w-[72%] lg:w-[80%]">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight poppins-regular">
                Why Choose Our Perfumes?
                </h2>
                <p class="text-gray-700 text-lg mt-4">
                Indulge in the luxury of premium fragrances designed to captivate your
                senses. Our collection of perfumes is crafted with high-quality
                ingredients, ensuring long-lasting freshness that leaves an unforgettable
                impression.
                </p>
                <ul class="mt-6 space-y-4 text-left">
                    <li class="flex items-center">
                        <i class="ri-check-double-line text-green-500 text-xl mr-3"></i>
                        Long-lasting fragrance that keeps you fresh all day.
                    </li>
                    <li class="flex items-center">
                        <i class="ri-check-double-line text-green-500 text-xl mr-3"></i>
                        Wide range of captivating scents to suit every mood.
                    </li>
                    <li class="flex items-center">
                        <i class="ri-check-double-line text-green-500 text-xl mr-3"></i>
                        Perfectly blended with premium ingredients.
                    </li>
                    <li class="flex items-center">
                        <i class="ri-check-double-line text-green-500 text-xl mr-3"></i>
                        Ideal for gifting your loved ones on special occasions.
                    </li>
                </ul>
                <a href="#products_section"
                class="inline-block mt-6 bg-gray-900 text-white px-6 py-3 rounded-lg text-lg hover:bg-gray-700 transition-all duration-300">Explore Our Collection</a>
            </div>
        </div>
    </section>
      
    {{-- offer banner --}}
    <section class="relative bg-[url('assets/img/perfume-14.png')] bg-cover bg-center py-20 mt-20">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        
        <!-- Content -->
        <div class="relative z-10 text-center text-white max-w-3xl mx-auto px-4">
            <h2 data-aos="fade-up">
            <span class="flex gap-5 w-full justify-center">
                <span class="text-2xl md:text-5xl">✨</span>
                <span class="font-bold mb-4 md:text-5xl text-2xl"> Limited Time Offer</span>
                <span class="text-2xl md:text-5xl">✨</span>
            </span>
            </h2>
            <p class="text-lg md:text-xl mb-6" data-aos="fade-up">
            Experience luxury like never before. Enjoy <span class="font-bold text-yellow-500">30% OFF</span> on our exclusive perfume collection. 
            </p>
            <p class="text-lg md:text-xl mb-8" data-aos="fade-up">
            Indulge in timeless fragrances crafted to captivate.
            </p>
            <a href="#products_section" class="inline-block bg-yellow-500 text-black py-3 px-8 rounded-md font-semibold hover:bg-yellow-400 transition" data-aos="fade-up">
            Shop Now & Save
            </a>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="pb-16 pt-32 w-full">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 poppins-regular" data-aos="fade-up">
                Explore Our Exclusive Perfume Collection
            </h2>
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-4">
                <!-- Masonry Item 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(0)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-15.png') }}" alt="Elegant Perfume Display" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Elegant Perfume Display</p>
                    </div>
                </div>
            
                <!-- Masonry Item 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(1)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-13.png') }}" alt="Luxury Perfume Bottle" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Luxury Perfume Bottle</p>
                    </div>
                </div>
            
                <!-- Masonry Item 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(2)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-5.png') }}" alt="Perfume with Flowers" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Perfume with Flowers</p>
                    </div>
                </div>
                <!-- Masonry Item 4 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(3)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-3.png') }}" alt="Petals & Perfumes: A Perfect Pair
                        " class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Petals & Perfumes: A Perfect Pair
                        </p>
                    </div>
                </div>
                <!-- Masonry Item 5 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(4)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-4.png') }}" alt="Perfume & Petals" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Perfume & Petals</p>
                    </div>
                </div>
                <!-- Masonry Item 6 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(5)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-6.png') }}" alt="The Essence of Blooms" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">The Essence of Blooms</p>
                    </div>
                </div>
                <!-- Masonry Item 7 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(6)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-7.png') }}" alt="Garden of Aromas" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Garden of Aromas</p>
                    </div>
                </div>
                <!-- Masonry Item 8 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg mb-4 bg-white cursor-pointer" onclick="openModal(7)" data-aos="fade-up">
                    <img src="{{ asset('assets/img/perfume-9.png') }}" alt="Fragrance in Bloom" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <p class="text-white text-lg font-medium text-center px-4">Fragrance in Bloom</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 opacity-0 pointer-events-none z-50 flex items-center justify-center transition-opacity duration-300 h-[100dvh]">
        <div class="relative flex justify-center items-center rounded-lg w-full h-full">
            <button class="absolute top-10 right-10 text-gray-800 hover:text-gray-600 text-3xl z-50" onclick="closeModal()">
                <i class="ri-close-line text-white text-xl"></i>
            </button>
            <div class="w-full h-full">
                <div id="carousel" class="w-full h-full md:px-20 px-5 relative">
                    <div class="carousel-images relative h-full w-full">
                        <img src="{{ asset('assets/img/perfume-15.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 1;">
                        <img src="{{ asset('assets/img/perfume-13.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-5.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-3.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-4.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-6.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-7.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                        <img src="{{ asset('assets/img/perfume-9.png') }}" class="carousel-image w-auto h-[500px] sm:h-[450px] object-cover absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 transition-opacity duration-500" style="opacity: 0;">
                    </div>
        
                    <button class="absolute left-8 md:left-20 top-1/2 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide()"><i class="ri-arrow-left-s-line text-white text-2xl"></i></button>
                    <button class="absolute right-8 md:right-20 top-1/2 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide()"><i class="ri-arrow-right-s-line text-white text-2xl"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.onload = () => {

            // Trigger GSAP animation for the content
            gsap.from(".animate", {
            opacity: 0,
            y: 100,
            stagger: 0.3,
            duration: 1.1,
            });
        };


    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            duration: 700,
        });
    </script>
</body>

</html>
