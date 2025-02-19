@extends('frontend.partials.app')

@section('content')

    <!-- Product Details Container -->
    <div class="pt-5 lg:py-10 px-5 md:px-20 fade-in lg:mt-10">
        <div class="grid lg:grid-cols-2 justify-between lg:gap-10">
            <!-- Product Image with Zoom Feature -->
            <div class="lg:sticky lg:top-[148px] h-fit relative group">
                <!-- Main Image -->
                <img src="{{ asset('assets/img/item-1.jpg') }}" alt="Perfume Product Image" class="w-full h-64 sm:h-80 md:h-96 lg:h-80 object-cover" />

                <!-- Zoom Box -->
                <div class="absolute inset-0 hidden group-hover:flex justify-center items-center hover:cursor-zoom-in">
                    <div
                        class="zoom-box w-full h-full overflow-hidden rounded-lg border-1 border-gray-200 bg-white shadow-lg flex items-center justify-center">
                        <img src="{{ asset('assets/img/item-1.jpg') }}" alt="Zoomed Image"
                            class="zoomed-image w-auto h-auto transition-transform duration-300 ease-in-out" />
                    </div>
                </div>
            </div>


            <!-- Product Content -->
            <div class="mt-10 lg:mt-0 poppins-regular">
                <!-- Product Title -->
                <h1 class="text-3xl font-bold text-gray-900">Luxury Perfume - Essence of Elegance</h1>

                <div class="flex gap-10 items-center mt-3">
                    <span class="text-lg text-gray-900 inline-block"><i
                            class="ri-star-s-fill text-2xl me-1 text-yellow-300"></i>4.7</span>
                    <span class="text-md text-green-500 inline-block">In Stock</span>
                </div>
                <!-- Pricing -->
                <div class="flex items-center space-x-4 mt-3">
                    <span class="text-3xl font-semibold text-gray-900"><span class="me-[1px]">₹</span> 79.99</span>
                    <span class="line-through text-gray-500"><span class="me-[1px]">₹</span>99.99</span>
                    <span class="bg-green-100 text-green-600 text-sm font-medium px-2 py-1 rounded-full">20% Off</span>
                </div>
                <span class="font-semibold text-gray-900 mt-2 inline-block">Inclusive of all taxes</span>

                <!-- Additional Info -->
                <!-- <div class="space-y-2 mt-5">
                    <p><strong>Volume:</strong> 100ml</p>
                    <p><strong>Type:</strong> Eau de Parfum</p>
                    <p><strong>Gender:</strong> Unisex</p>
                </div> -->

                <!-- Add to Cart Button -->
                <a href={{ url('/cart') }} class="mt-5 inline-block w-full add_cart_btn">
                    <button id="addToCartBtn"
                        class="w-full bg-gray-900 hover:bg-gray-600 text-white py-3 text-lg font-semibold rounded-lg shadow-md transition-transform duration-300 transform hover:scale-95">
                        <i class="ri-shopping-cart-line text-xl me-2"></i>Add to Cart
                    </button>
                </a>

                <!-- Product Description -->
                <p class="text-gray-600 text-lg mt-5">
                    Discover the essence of luxury with our premium perfume. A harmonious blend of floral, woody, and
                    citrus notes
                    designed to captivate your senses.
                </p>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection
    
    <script>

        document.addEventListener('DOMContentLoaded', () => {
            const productContainer = document.querySelector('.group');
            const zoomBox = productContainer.querySelector('.zoom-box');
            const zoomedImage = productContainer.querySelector('.zoomed-image');

            productContainer.addEventListener('mouseenter', () => {
                zoomBox.style.display = 'flex'; // Show the zoom box
            });

            productContainer.addEventListener('mousemove', (event) => {
                const rect = productContainer.getBoundingClientRect();
                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;

                zoomedImage.style.transformOrigin = `${x}% ${y}%`; // Adjust zoom origin
                zoomedImage.style.transform = 'scale(4)'; // Zoom in the image
            });

            productContainer.addEventListener('mouseleave', () => {
                zoomBox.style.display = 'none'; // Hide the zoom box
                zoomedImage.style.transform = 'scale(1)'; // Reset zoom
            });
        });

    </script>

@endsection