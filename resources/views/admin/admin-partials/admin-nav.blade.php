<!-- Sidebar -->
<div id="sidebar" class="z-50 sticky top-[0px] lg:top-[76px] py-5 lg:py-0 px-5 lg:px-0 w-full flex lg:block items-center lg:items-start justify-between lg:justify-start lg:w-[14%] xl:w-[12%] bg-gray-900 text-white">
    <div class="lg:hidden">
        <h1 class="text-2xl font-bold lg:h-[76px] flex items-center">Admin Panel</h1>
    </div>
    <ul class="admin-menu pt-5 hidden lg:flex flex-col items-center gap-1 w-full overflow-auto pe-2">
        <li>
            <a href="{{ url('/admin/dashboard') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/dashboard') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-dashboard-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/dashboard') ? '!bg-gray-500' : '' }} grid place-items-center mb-2 hover:bg-gray-500"></i>Dashboard
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/users/users') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/users/*') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-group-2-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/users/*') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Users
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/products/products') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/products/*') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-ink-bottle-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/products/*') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Products
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/admin-cart') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/admin-cart') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-shopping-cart-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/admin-cart') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Users Cart
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/brands/brands') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/brands/*') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-building-4-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/brands/*') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Brands
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/shipping') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/shipping') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-truck-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/shipping') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Shipping
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/order-history') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/order-history') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-history-fill text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/order-history')  ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Order History
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/payment-history') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/payment-history') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-money-rupee-circle-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/payment-history') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Payment History
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/discount/discount') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('admin/discount/*') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-discount-percent-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('admin/discount/*') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Discount
            </a>
        </li>
        <li>
            <a href="{{ url('/') }}" class=" px-3 py-2 text-gray-400 flex items-center flex-col hover:text-white {{ Request::is('/') ? '!text-white rounded-md' : '' }} w-fit text-xs">
                <i class="ri-home-8-line text-lg w-10 h-10 rounded-full bg-gray-700 {{ Request::is('/') ? '!bg-gray-500' : '' }}  grid place-items-center mb-2 hover:bg-gray-500"></i>Home
            </a>
        </li>
    </ul>

    <div class="flex gap-5 lg:hidden">
        <div id="admin-search-btn" class="cursor-pointer {{ Request::is('admin/products/add-products') || Request::is('admin/products/edit-products') || Request::is('admin/users/add-users') || Request::is('admin/users/edit-users') || Request::is('admin/discount/add-discount') || Request::is('admin/discount/edit-discount') || Request::is('admin/brands/add-brands') || Request::is('admin/brands/edit-brands') ? 'hidden' : '' }}"><i class="ri-search-line text-white lg:hidden text-2xl"></i></div>
        <div id="admin-menu-btn"><i class="ri-menu-line text-white text-2xl"></i></div>
    </div>
    <div id="admin-mob-nav" class="pt-5 pb-10 px-4 pe-0 lg:hidden absolute top-full -left-full transition-all duration-300 w-full bg-gray-900">
        <ul id="admin-mobile-menu" class="overflow-auto flex flex-col gap-3 pe-2">
            <!-- Admin Info & Logout -->
            <div class="flex w-full justify-center items-center space-x-10">
                <!-- Admin Name and Role -->
                <div class="text-white text-sm">
                    <p>Welcome, <span class="font-semibold">Arbaz</span></p>
                    <p class="text-xs text-gray-300">Super Admin</p>
                </div>
                
                <!-- Logout Button -->  
                <form action="{{ url('admin/logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                        Logout
                    </button>
                </form>
            </div>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/dashboard') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/dashboard') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-dashboard-line me-2 text-xl"></i>Dashboard</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/users/*') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/users/users') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-group-2-line me-2 text-xl"></i>Users</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/products/*') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/products/products') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-ink-bottle-line me-2 text-xl"></i>Products</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/admin-cart') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/admin-cart') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-shopping-cart-line me-2 text-xl"></i>Users Cart</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/brands/*') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/brands/brands') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-building-4-line me-2 text-xl"></i>Brands</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/shipping') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/shipping') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-truck-line me-2 text-xl"></i>Shipping</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/order-history') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/order-history') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-history-fill me-2 text-xl"></i>Order History</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/payment-history') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/payment-history') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-money-rupee-circle-line me-2 text-xl"></i>Payment History</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('admin/discount/*') ? '!text-white' : '' }}">
                <a href="{{ url('/admin/discount/discount') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-discount-percent-line me-2 text-xl"></i>Discount</a>
            </li>
            <li class="hover:!text-white text-gray-400 rounded-md w-full {{ Request::is('/') ? '!text-white' : '' }}">
                <a href="{{ url('/') }}" class="text-lg px-3 py-2 inline-block w-full"><i class="ri-home-8-line me-2 text-xl"></i>Home</a>
            </li>
        </ul>
    </div>
</div>

<div 
    id="search-bar" 
    class="sticky z-50 top-[72px] hidden items-center lg:hidden w-full p-5 bg-white rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)]">
    <input 
        type="text" 
        placeholder="Search here..." 
        class="w-full py-2 px-4 rounded-s-md text-sm outline-none border border-gray-600 text-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-600">
    <button 
        type="button" 
        class="bg-gray-600 hover:bg-gray-700 border border-gray-600 text-white px-4 py-2 rounded-r-md text-sm font-semibold">
        Search
    </button>
</div>