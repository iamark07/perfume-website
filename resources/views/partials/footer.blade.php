<footer class="bg-gray-900 text-white mt-10 poppins-regular">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Brand Section -->
            <div>
                <h2 class="text-lg font-bold"><a href="{{ url('/') }}">PerfumeBrand</a></h2>
                <p class="text-gray-400 mt-4">Discover a world of enchanting fragrances. From timeless classics to modern favorites, Perfume Haven has it all.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis mb-4">Quick Links</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/shop') }}" class="hover:text-white">Shop</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div>
                <h3 class="text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis mb-4">Customer Service</h3>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ url('/faq') }}" class="hover:text-white">FAQs</a></li>
                    <li><a href="#" class="hover:text-white">Shipping Policy</a></li>
                    <li><a href="#" class="hover:text-white">Returns & Exchanges</a></li>
                    <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter Subscription -->
            <div>
                <h3 class="text-lg font-semibold whitespace-nowrap overflow-hidden text-ellipsis mb-4">Stay Updated</h3>
                <p class="text-gray-400">Subscribe to our newsletter to get the latest deals and updates.</p>
                <form class="mt-4 flex">
                    <input type="email" placeholder="Your Email"
                        class="w-full px-4 py-2 rounded-l-md border border-gray-600 bg-gray-700 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 rounded-r-md text-white hover:bg-blue-700">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="mt-10 border-t border-gray-700 pt-6 flex justify-between items-center">
            <p class="text-gray-400">&copy; 2025 Perfume Haven. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300"><i class="ri-facebook-fill text-xl"></i></a>
                <a href="#" class="hover:text-gray-300"><i class="ri-instagram-fill text-xl"></i></a>
                <a href="#" class="hover:text-gray-300"><i class="ri-twitter-fill text-xl"></i></a>
                <a href="#" class="hover:text-gray-300"><i class="ri-linkedin-fill text-xl"></i></a>
            </div>
        </div>
    </div>
</footer>
