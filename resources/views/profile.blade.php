<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .sidebar{
            height: calc(100dvh - 148px);
        }
    </style>
</head>

<body class="bg-[#fff7ee] font-sans text-gray-800">

    <header id="header"
        class="header sticky top-0 w-full z-50 py-5 px-5 md:px-10 flex justify-between items-center transition-all duration-300 !bg-gray-900">
        <!-- Logo -->
        <div class="text-white text-xl font-bold"><a href="{{ url('/') }}">PerfumeBrand</a></div>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-6 poppins-regular">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
            <a href="{{ url('/about') }}" class="text-white hover:text-gray-300">About</a>
            <a href="{{ url('/shop') }}" class="text-white hover:text-gray-300">Shop</a>
            <a href="{{ url('/contact') }}" class="text-white hover:text-gray-300">Contact</a>
        </nav>

        <!-- Icons -->
        <div class="flex gap-1 md:gap-2 items-center space-x-4">
            <i id="search-icon" class="ri-search-line text-white text-xl cursor-pointer"></i>

            <a href="{{ url('/cart') }}"><i class="ri-shopping-cart-line text-white text-xl cursor-pointer" title="Cart"></i></a>
            <a href="{{ url('/login') }}" class="hidden md:block"><i class="ri-user-line text-white text-xl cursor-pointer"
                    title="Login"></i></a>
            <div class="relative hidden md:block">
                <div id="profile_btn"
                    class="poppins-regular w-10 h-10 text-lg rounded-full bg-white shadow-md hidden md:flex items-center justify-center capitalize cursor-pointer">
                    A
                </div>
                <div id="profile_dropdown"
                    class="bg-white rounded-md shadow-md p-4 absolute top-full right-0 flex flex-col gap-2 mt-5 pointer-events-none opacity-0 transition-all duration-300">
                    <a href="{{ url('/profile') }}" class="hidden md:flex items-center text-nowrap text-sm">
                        <i class="ri-account-circle-2-line text-black text-xl cursor-pointer me-[7px]"
                            title="Profile"></i>Profile
                    </a>
                    <a href="{{ url('/admin/dashboard') }}" class="hidden md:flex items-center text-nowrap text-sm">
                        <i class="ri-user-settings-line text-black text-lg cursor-pointer me-[7px]"
                            title="Admin Panel"></i> Admin Panel
                    </a>
                    <a href="{{ url('/settings') }}" class="hidden md:flex items-center text-nowrap text-sm">
                        <i class="ri-settings-5-line text-black text-xl cursor-pointer me-[7px]"
                            title="Profile"></i>Settings
                    </a>
                    <a href="#" class="hidden md:flex items-center text-nowrap text-sm">
                        <i class="ri-logout-circle-r-line text-black text-lg cursor-pointer me-[7px]"
                            title="Log Out"></i> Log out
                    </a>
                </div>
            </div>

            <button id="menu-btn" class="block md:hidden text-white text-xl">
                <i class="ri-menu-line"></i>
            </button>


        </div>
        <!-- Search Box -->
        <div id="search-box"
            class="absolute w-72 md:w-96 z-20 top-10 left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-lg shadow-lg opacity-0 pointer-events-none transition-all duration-300">
            <div>
                <form action="" class="flex items-center space-x-2 poppins-regular">
                    <input type="text" placeholder="Search for perfumes..."
                        class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none" />
                    <button type="submit"
                        class="py-2 px-3 bg-gray-900 transition-all duration-300 text-white rounded-lg">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed z-50 inset-0 bg-black bg-opacity-90 flex-col justify-center items-center transition-transform transform -translate-x-full">
            <button id="close-menu" class="absolute top-4 right-4 text-white text-3xl">
                <i class="ri-close-line"></i>
            </button>
            <nav class="text-white text-lg py-6 px-5">
                <!-- Logo -->
                <div class="text-white text-xl font-bold"><a href="{{ url('/') }}">PerfumeBrand</a></div>

                <div
                    class="mt-7 font-semibold poppins-regular text-lg rounded-sm text-white shadow-md flex items-center justify-center md:hidden capitalize">
                    Hi, Name
                </div>


                <ul class="mt-7 flex flex-col gap-5 poppins-regular overflow-auto">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/shop') }}">Shop</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="#personal-info" class="block">Personal Information</a></li>  
                    <li><a href="#change-password" class="block">Change Password</a></li>
                    <li><a href="#order-history" class="block">Order History</a></li>
                    <li><a href="#address-list" class="block">Address List</a></li>
                    <li><a href="{{ url('/cart') }}">Cart</a></li>
                    <li><a href="{{ url('/profile') }}">Profile</a></li>

                    <li><a href="{{ url('/admin/dashboard') }}">Admin Panel</a>
                    </li>
                    <li><a href="{{ url('/settings') }}">Settings</a></li>
                    <li><a href="#">Log out</a>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Main Dashboard Section -->
    <section class="">
        <div class="md:flex poppins-regular">
            <!-- Sidebar -->
            <div class="z-50 p-5 w-full hidden md:block items-center lg:items-start justify-between lg:justify-start md:w-[27%] lg:w-1/5 bg-gray-900 text-white sticky top-[80px] " style="height: calc(100dvh - 80px);">
                <h2 class="text-lg font-bold mb-10">Profile</h2>
                <nav class="space-y-4">
                    <a href="#personal-info" class="block">Personal Information</a>
                    <a href="#order-history" class="block">Order History</a>
                    <a href="#address-list" class="block">Address List</a>
                    <a href="#change-password" class="block">Change Password</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="p-8 lg:w-4/5 md:w-[73%] w-full flex flex-col gap-10">
                <!-- Personal Information -->
                <div id="personal-info" class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-6">Personal Information</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700 font-medium">Name: <span class="text-gray-500">John Doe</span></p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700 font-medium">Email: <span class="text-gray-500">john.doe@example.com</span></p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-700 font-medium">Phone: <span class="text-gray-500">+1234567890</span></p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button class="bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition" onclick="showPopup('updatePersonalInfoPopup')">Update</button>
                    </div>
                </div>

                <!-- Order History -->
                <div id="order-history" class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-6">Order History</h2>
                    <div class="space-y-4">
                        <div class="border border-gray-300 rounded-lg p-4 flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-700">Order #12345</p>
                                <p class="text-sm text-gray-500">Date: 2023-12-25</p>
                                <p class="text-sm text-gray-500">Total: $99.99</p>
                            </div>
                            <a href="order-detail.html" class="text-blue-600 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Address List -->
                <div id="address-list" class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-6">Address List</h2>
                    <div class="space-y-4">
                        <div class="border border-gray-300 rounded-lg p-4">
                            <p class="font-medium text-gray-700">John Doe</p>
                            <p class="text-sm text-gray-500">123 Street, City, Country</p>
                            <p class="text-sm text-gray-500">Phone: +1234567890</p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button class="bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition" onclick="showPopup('updateAddressPopup')">Update</button>
                    </div>
                </div>
                <!-- Change Password -->
                <div id="change-password" class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-bold mb-6">Change Password</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">Current Password</label>
                            <input type="password" class="w-full border-gray-300 border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-900">
                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">New Password</label>
                            <input type="password" class="w-full border-gray-300 border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-900">
                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">Confirm Password</label>
                            <input type="password" class="w-full border-gray-300 border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-gray-900">
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button class="bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition">Change Password</button>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Update Personal Info Popup -->
    <div id="updatePersonalInfoPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h3 class="text-lg font-bold mb-4">Update Personal Information</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-600 font-medium mb-2">Name</label>
                    <input type="text" class="w-full border-gray-300 border rounded-lg p-3" value="John Doe">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2">Email</label>
                    <input type="email" class="w-full border-gray-300 border rounded-lg p-3" value="john.doe@example.com">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2">Phone</label>
                    <input type="text" class="w-full border-gray-300 border rounded-lg p-3" value="+1234567890">
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-700 mr-2">Save</button>
                <button class="text-gray-500 px-4 py-2" onclick="closePopup('updatePersonalInfoPopup')">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Update Address Popup -->
    <div id="updateAddressPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h3 class="text-lg font-bold mb-4">Update Address</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-600 font-medium mb-2">Address</label>
                    <input type="text" class="w-full border-gray-300 border rounded-lg p-3" value="123 Street, City, Country">
                </div>
                <div>
                    <label class="block text-gray-600 font-medium mb-2">Phone</label>
                    <input type="text" class="w-full border-gray-300 border rounded-lg p-3" value="+1234567890">
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-700 mr-2">Save</button>
                <button class="text-gray-500 px-4 py-2" onclick="closePopup('updateAddressPopup')">Cancel</button>
            </div>
        </div>
    </div>

    <script src="assets/js/cart.js"></script>
    <script>
        function showPopup(id) {
            const popup = document.getElementById(id);
            popup.classList.remove('hidden');
            popup.classList.add('flex');
        }

        function closePopup(id) {
            const popup = document.getElementById(id);
            popup.classList.remove('flex');
            popup.classList.add('hidden');
        }
    </script>
</body>

</html>
