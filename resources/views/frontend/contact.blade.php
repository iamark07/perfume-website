@extends('frontend.partials.app')

@section('content')

    <!-- Contact Us Section -->
    <section class="contact-us-section px-5 md:px-20 py-20">
        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center">Contact Us</h1>
            <p class="text-gray-600 text-center mt-2">We'd love to hear from you. Please fill out the form below to get in touch with us.</p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10">
                <!-- Contact Form -->
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold">Your Name</label>
                        <input type="text" id="name" placeholder="Enter your name"
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold">Your Email</label>
                        <input type="email" id="email" placeholder="Enter your email"
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-semibold">Your Message</label>
                        <textarea id="message" rows="6" placeholder="Enter your message"
                            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-gray-900 text-white py-3 rounded-lg shadow-md hover:bg-gray-700 transition-all">
                        Send Message
                    </button>
                </form>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="flex items-center">
                        <i class="ri-map-pin-line text-3xl text-blue-500"></i>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800">Our Address</h4>
                            <p class="text-gray-600">123 Perfume Street, Fragrance City, FL 12345</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-phone-line text-3xl text-blue-500"></i>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800">Call Us</h4>
                            <p class="text-gray-600">+1 (123) 456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-mail-line text-3xl text-blue-500"></i>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-800">Email Us</h4>
                            <p class="text-gray-600">support@perfumebrand.com</p>
                        </div>
                    </div>
                    <div class="flex items-center h-[250px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.53377489076!2d76.7628555449887!3d28.643682884511737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1736496919219!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
