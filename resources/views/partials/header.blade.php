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

    @auth
        <!-- Cart and Profile Dropdown (Visible when user is logged in) -->
        <a href="{{ url('/cart') }}"><i class="ri-shopping-cart-line text-white text-xl cursor-pointer" title="Cart"></i></a>
        <div class="relative hidden md:block">
            <div id="profile_btn"
                class="poppins-regular w-10 h-10 text-lg rounded-full bg-white shadow-md hidden md:flex items-center justify-center capitalize cursor-pointer">
                {{ auth()->user()->first_name[0] }}
            </div>
            <div id="profile_dropdown"
                class="bg-white rounded-md shadow-md p-4 absolute top-full right-0 flex flex-col gap-2 mt-5 pointer-events-none opacity-0 transition-all duration-300">
                <a href="{{ url('/profile') }}" class="hidden md:flex items-center text-nowrap text-sm">
                    <i class="ri-account-circle-2-line text-black text-xl cursor-pointer me-[7px]"
                        title="Profile"></i>Profile
                </a>
                {{-- when admin or super admin logged in then this but showing --}}
                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                <a href="{{ url('/admin/dashboard') }}" class="hidden md:flex items-center text-nowrap text-sm">
                    <i class="ri-user-settings-line text-black text-lg cursor-pointer me-[7px]"
                        title="Admin Panel"></i> Admin Panel
                </a>
                @endif

                <a href="{{ url('/settings') }}" class="hidden md:flex items-center text-nowrap text-sm">
                    <i class="ri-settings-5-line text-black text-xl cursor-pointer me-[7px]"
                        title="Settings"></i>Settings
                </a>
                <a href="{{ url('/logout') }}" class="hidden md:flex items-center text-nowrap text-sm">
                    <i class="ri-logout-circle-r-line text-black text-lg cursor-pointer me-[7px]"
                        title="Log Out"></i> Log out
                </a>
            </div>
        </div>
    @endauth

    @guest
        <!-- Login Icon (Visible when user is not logged in) -->
        <a href="{{ url('/login') }}" class="hidden md:block"><i class="ri-user-line text-white text-xl cursor-pointer"
                title="Login"></i></a>
    @endguest

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

            @if(Auth::check())
                <div
                    class="mt-7 font-semibold poppins-regular text-lg rounded-sm text-white shadow-md flex items-center justify-center md:hidden capitalize">
                    Hi, {{ Auth::user()->first_name }}
                </div>
            @endif

            <ul class="mt-7 flex flex-col gap-5 poppins-regular overflow-auto">
                <li><a href="{{ url('/') }}"><i class="ri-home-8-line text-xl me-2"></i>Home</a></li>
                <li><a href="{{ url('/about') }}"><i class="ri-user-6-line text-xl me-2"></i>About</a></li>
                <li><a href="{{ url('/shop') }}"><i class="ri-store-2-line text-xl me-2"></i>Shop</a></li>
                <li><a href="{{ url('/contact') }}"><i class="ri-phone-line text-xl me-2"></i>Contact</a></li>

                @if(Auth::check())
                <li><a href="{{ url('/cart') }}"><i class="ri-shopping-cart-line text-xl me-2"></i>Cart</a></li>
                <li><a href="{{ url('/profile') }}"><i class="ri-profile-line text-xl me-2"></i>Profile</a></li>
                {{-- when admin or super admin logged in then this but showing --}}
                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'super_admin')
                <li><a href="{{ url('/admin/dashboard') }}"><i class="ri-user-settings-line text-xl me-2"></i>Admin Panel</a></li>
                @endif

                <li><a href="{{ url('/settings') }}"><i class="ri-settings-5-line text-xl me-2"></i>Settings</a></li>
                <li><a href="{{ url('/logout') }}"><i class="ri-logout-circle-r-line text-xl me-2"></i>Log out</a></li>
                @else
                <li><a href="{{ url('/login') }}"><i class="ri-login-circle-line text-xl me-2"></i>Login</a></li>
                @endif
            </ul>
        </nav>
    </div>

</header>
