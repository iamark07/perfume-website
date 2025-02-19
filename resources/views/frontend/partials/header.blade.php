<header id="header"
    class="header sticky top-0 w-full z-50 py-4 px-5 md:px-10 flex justify-between items-center transition-all duration-300 !bg-gray-900">
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
    <div class="flex gap-1 md:gap-2 items-center space-x-3">
        <i id="search-icon" class="ri-search-line text-white text-xl cursor-pointer"></i>

        <a href=""><i class="ri-heart-line text-white text-xl cursor-pointer"
            title="wishlist"></i>
        </a>
        <!-- Cart and Profile Dropdown (Visible when user is logged in) -->
        <a href="{{ url('/cart') }}" class="relative">
            <i class="ri-shopping-cart-line text-white text-xl cursor-pointer" title="Cart"></i>
            <span id="cart-count" class="absolute top-0 right-0 justify-center w-5 h-5 grid place-items-center text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
            2  </span>
        </a>

        <a href="{{ url('/login') }}" class="hidden md:block"><i class="ri-user-line text-white text-xl cursor-pointer"
                title="Login"></i>
        </a>

        <div class="relative hidden md:block">
            <div id="profile_btn"
                class="poppins-regular w-8 h-8 rounded-full bg-white shadow-md hidden md:flex items-center justify-center capitalize cursor-pointer">
                A
            </div>
            <div id="profile_dropdown"
                class="bg-white rounded-md shadow-md p-2 absolute top-full right-0 flex flex-col gap-1 mt-4 pointer-events-none opacity-0 transition-all duration-300">
                <a href="{{ url('/profile') }}" class="hidden md:flex items-center text-nowrap text-sm hover:bg-gray-100 transition-all durantion-300 py-1 px-2 w-full rounded-md">
                    <i class="ri-account-circle-2-line text-black text-lg cursor-pointer me-[7px]"
                        title="Profile"></i>Profile
                </a>
        
                <a href="{{ url('/admin/dashboard') }}" class="hidden md:flex items-center text-nowrap text-sm hover:bg-gray-100 transition-all durantion-300 py-1 px-2 w-full rounded-md">
                    <i class="ri-user-settings-line text-black text-lg cursor-pointer me-[7px]"
                        title="Admin Panel"></i> Admin Panel
                </a>
        
                <a href="{{ url('/settings') }}" class="hidden md:flex items-center text-nowrap text-sm hover:bg-gray-100 transition-all durantion-300 py-1 px-2 w-full rounded-md">
                    <i class="ri-settings-5-line text-black text-lg cursor-pointer me-[7px]"
                        title="Settings"></i>Settings
                </a>
        
                <div class="relative hidden md:flex items-center text-nowrap text-sm cursor-pointer" id="language_dropdown_container">
                    <div id="language_btn" class="flex items-center hover:bg-gray-100 transition-all durantion-300 py-1 px-2 w-full rounded-md">  <i class="ri-global-line text-black text-lg cursor-pointer me-[7px]" title="Language"></i> Language
                    </div>
                    <div id="language_dropdown" class="bg-white rounded-md shadow-md p-2 absolute top-0 right-full mt-2 hidden flex flex-col gap-2 transition-all duration-300 pointer-events-none opacity-0">
                        <a href="#" class="text-sm px-2 py-1 rounded-md w-full hover:bg-gray-100 transition-all duration-300">English</a>
                        <a href="#" class="text-sm px-2 py-1 rounded-md w-full hover:bg-gray-100 transition-all duration-300">Hindi</a>
                        <a href="#" class="text-sm px-2 py-1 rounded-md w-full hover:bg-gray-100 transition-all duration-300">Spanish</a>
                        </div>
                </div>
        
                <a href="{{ url('/logout') }}" class="hidden md:flex items-center text-nowrap text-sm hover:bg-gray-100 transition-all durantion-300 py-1 px-2 w-full rounded-md">
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
                    class="w-full border border-gray-300 text-sm p-2 rounded-lg focus:outline-none" />
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
                Hi, Arbaz
            </div>

            <ul class="mt-7 flex flex-col gap-5 poppins-regular overflow-auto">
                <li><a href="{{ url('/') }}"><i class="ri-home-8-line text-xl me-2"></i>Home</a></li>
                <li><a href="{{ url('/about') }}"><i class="ri-user-6-line text-xl me-2"></i>About</a></li>
                <li><a href="{{ url('/shop') }}"><i class="ri-store-2-line text-xl me-2"></i>Shop</a></li>
                <li><a href="{{ url('/contact') }}"><i class="ri-phone-line text-xl me-2"></i>Contact</a></li>

                <li><a href="{{ url('/cart') }}"><i class="ri-shopping-cart-line text-xl me-2"></i>Cart</a></li>
                <li><a href="{{ url('/profile') }}"><i class="ri-profile-line text-xl me-2"></i>Profile</a></li>
                <li><a href="{{ url('/admin/dashboard') }}"><i class="ri-user-settings-line text-xl me-2"></i>Admin Panel</a></li>

                <li><a href="{{ url('/settings') }}"><i class="ri-settings-5-line text-xl me-2"></i>Settings</a></li>
                <li class="relative" id="mobile-language-dropdown-container">
                    <div id="mobile-language-btn" class="text-white cursor-pointer flex items-center">
                        <i class="ri-global-line text-xl me-2"></i>Language<i class="ri-arrow-down-s-line ms-3" id="lang_dropdown_arrow"></i>
                    </div>
                    <div id="mobile-language-dropdown"
                        class="bg-white rounded-md shadow-md px-2 py-2 mt-2 w-48 flex flex-col gap-1 transition-all duration-300 ms-6 hidden pointer-events-none">
                        <a href="#" class="text-sm text-black p-2 hover:bg-gray-100 transition-all duration-300">English</a>
                        <a href="#" class="text-sm text-black p-2 hover:bg-gray-100 transition-all duration-300">Hindi</a>
                        <a href="#" class="text-sm text-black p-2 hover:bg-gray-100 transition-all duration-300">Spanish</a>
                    </div>
                </li>
                <li><a href="{{ url('/logout') }}"><i class="ri-logout-circle-r-line text-xl me-2"></i>Log out</a></li>
                <li><a href="{{ url('/login') }}"><i class="ri-login-circle-line text-xl me-2"></i>Login</a></li>
            </ul>
        </nav>
    </div>

</header>
