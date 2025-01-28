<header class="sticky hidden lg:block top-0 z-50 bg-gray-900 p-5 w-full shadow-md">
    
    <div class="flex justify-between items-center">
        <div class="text-white">
            <h1 class="text-2xl font-bold flex items-center">Admin Panel</h1>
        </div>
        <!-- Search Bar -->
        <div class="flex items-center w-full max-w-md  {{ Request::is('admin/products/add-products') || Request::is('admin/products/edit-products') || Request::is('admin/users/add-users') || Request::is('admin/users/edit-users') || Request::is('admin/discount/add-discount') || Request::is('admin/discount/edit-discount') || Request::is('admin/brands/add-brands') || Request::is('admin/brands/edit-brands') ? 'hidden' : '' }}">
            <input 
                type="text" 
                placeholder="Search here..." 
                class="w-full py-2 px-4 rounded-s-md text-sm text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-600"
            >
            <button 
                type="button" 
                class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-r-md text-sm font-semibold">
                Search
            </button>
        </div>
        
        <!-- Admin Info & Logout -->
        <div class="flex items-center space-x-6">
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
    </div>
</header>
