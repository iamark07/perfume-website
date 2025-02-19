@extends('frontend.partials.app')

@section('content')

    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh] relative"
        style="background-image: url('{{ asset('assets/img/about.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold">About PerfumeBrand</h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="px-5 md:px-20 py-10">
        <div class="max-w-7xl mx-auto space-y-16">
            <!-- Our Story -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-lg text-gray-700 leading-7">
                    PerfumeBrand began with a vision to create unique, luxurious fragrances that evoke emotions and memories. 
                    Our journey started in 2010 with a small boutique and a big dream: to craft scents that tell a story. 
                    Over the years, we've grown into a beloved brand, known for our dedication to quality, creativity, and sustainability.
                </p>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-lg text-gray-700 leading-7">
                        To provide high-quality, handcrafted fragrances that inspire and connect people. We strive to make 
                        every moment memorable through scents that resonate with individual personalities.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-700 leading-7">
                        To become a global leader in luxury perfumes while staying true to our core values of innovation, 
                        sustainability, and customer satisfaction.
                    </p>
                </div>
            </div>

            <!-- Physical Store -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Visit Our Store</h3>
                        <p class="text-lg text-gray-700 leading-7">
                            Experience our collection in person at our flagship store. Our friendly staff is here to help 
                            you find your perfect fragrance. Come and explore our exclusive collections, available only in-store.
                        </p>
                        <p class="text-lg text-gray-700 mt-4">
                            <strong>Address:</strong> 123 Luxury Lane, Fragrance City, PerfumeLand<br>
                            <strong>Phone:</strong> +123-456-7890<br>
                            <strong>Email:</strong> support@perfumebrand.com
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/img/store.jpg') }}" alt="PerfumeBrand Store" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @section('footer')
        @include('frontend.partials.footer')
    @endsection

@endsection 
