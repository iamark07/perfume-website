@extends('frontend.partials.app')

@section('content')

    <!-- Checkout Section -->
    <section class="checkout_section px-5 md:px-20 my-20">

        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6 poppins-regular">
            <h1 class="text-2xl font-bold mb-6">Checkout</h1>

            <!-- Billing Details -->
            <div class="space-y-6">
                <h2 class="text-lg font-semibold">Billing Details</h2>

                <form action="#" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="firstName" name="firstName" required
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" id="address" name="address" required
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" id="city" name="city" required
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                            <input type="text" id="state" name="state" required
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        </div>
                        <div>
                            <label for="zip" class="block text-sm font-medium text-gray-700">Zip Code</label>
                            <input type="text" id="zip" name="zip" required
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="mt-10 space-y-6">
                <h2 class="text-lg font-semibold">Order Summary</h2>

                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <span>Subtotal:</span>
                        <span>$149.97</span>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span>Shipping:</span>
                        <span>$10.00</span>
                    </div>
                    <div class="flex justify-between items-center mt-4 font-bold text-lg">
                        <span>Total:</span>
                        <span>$159.97</span>
                    </div>
                </div>
            </div>

            <!-- Place Order Button -->
            <div class="mt-10 text-center">
                <a href="{{ url('/order-confirmation') }}">
                    <button type="submit" class="w-full bg-gray-900 hover:bg-gray-600 text-white text-lg py-4 px-8 rounded-lg shadow-md transition-all duration-300">
                        Place Order
                    </button>
                </a>
            </div>

        </div>
    </section>

@endsection
