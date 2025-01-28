<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-[#fff7ee] font-sans text-gray-800">

    <!-- Include Header -->
    @include('partials.header')

    <section class="cart_section px-5 md:px-20">

        <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-20 poppins-regular">
            <h1 class="text-2xl font-bold mb-6">Your Cart</h1>
            <!-- Cart Items Container -->
            <div id="cartItemsContainer" class="space-y-4">
                <!-- Cart Item 1-->
                <div
                    class="cart-item flex items-center justify-between border border-gray-200 rounded-lg p-4 bg-gray-50 shadow-sm">
                    <!-- Product Info -->
                    <div class="flex flex-col md:flex-row items-center w-full md:items-center justify-center">
                        <a href="{{ url('/product') }}" class="md:me-10"><img src=" {{ ('assets/img/item-1.jpg') }}" alt="Product Image"
                                class="w-20 h-20 object-cover rounded-md"></a>
                        <div class="flex justify-between w-full mt-5 md:mt-0 items-center">
                            <div class="lg:flex gap-20">
                                <div>
                                    <a href="{{ url('/product') }}"  class="text-xl font-semibold text-black">Perfume Name</a>
                                    <p class="text-lg text-gray-600 mt-1">Amount: <span class="text-blue-500">$49.99</span>
                                    </p>
                                </div>
                                <!-- Quantity Controls -->
                                <div class="flex items-center gap-2 mt-5 lg:mt-0">
                                    <button
                                        class="quantity-decrease bg-gray-200 shadow-md text-gray-600 hover:bg-gray-300 py-1 px-3 rounded-md">-</button>
                                    <input type="text" value="1"
                                        class="quantity-input w-10 text-center border border-gray-300 rounded-md py-1 px-3"
                                        readonly>
                                    <button
                                        class="quantity-increase bg-gray-200 shadow-md text-gray-600 hover:bg-gray-300 py-1 px-3 rounded-md">+</button>
                                </div>
                            </div>
                            <div class="md:flex gap-10 items-center">
                                <a href="{{ url('/checkout') }}"  class="hidden md:inline-block">
                                    <button
                                        class="buy-now-btn text-lg py-3 px-8 bg-gray-900 hover:bg-gray-600 text-white rounded-md w-full h-full transition-all duration-300 shadow-md">
                                        Buy Now
                                    </button>
                                </a>
                                <!-- Remove Button -->
                                <i class="ri-delete-bin-2-line text-red-500 text-2xl md:text-3xl cursor-pointer"></i>
                            </div>
                        </div>
                        <a href="{{ url('/checkout') }}"  class="mt-10 inline-block md:hidden w-full sm:w-[300px]">
                            <button
                                class="buy-now-btn text-lg py-3 px-5 bg-gray-900 hover:bg-gray-600 text-white rounded-md w-full h-full transition-all duration-300 shadow-md">
                                Buy Now
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty Cart Message -->
            <p id="emptyCartMessage" class="text-center text-gray-500 mt-6 hidden">
                Your cart is empty.
            </p>

        </div>

        <div class="w-full flex flex-col sm:flex-row justify-center gap-5 md:gap-10 mt-10 poppins-regular">
            <!-- Total Cart Amount -->
            <div
                class="flex gap-10 justify-between items-center bg-white p-4 sm:p-5 shadow-lg rounded-lg w-full sm:w-1/2 lg:w-[300px]">
                <h2 class="text-lg font-semibold">Total Amount:</h2>
                <p id="totalAmount" class="text-xl font-bold text-blue-600">$0.00</p>
            </div>

            <a href="{{ url('/checkout') }}" class="inline-block w-full sm:w-1/2 lg:w-[300px] h-full"><button
                    class="buy-now-btn text-lg p-4 sm:p-5 bg-gray-900 hover:bg-gray-600 text-white rounded-md w-full h-full transition-all duration-300 shadow-md">
                    Buy Now
                </button></a>
        </div>

    </section>

    <script src="assets/js/cart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartItemsContainer = document.getElementById('cartItemsContainer');

            cartItemsContainer.addEventListener('click', (event) => {
                const target = event.target;

                if (target.classList.contains('quantity-increase')) {
                    const quantityInput = target.previousElementSibling;
                    let quantity = parseInt(quantityInput.value);
                    quantityInput.value = quantity + 1;
                }

                if (target.classList.contains('quantity-decrease')) {
                    const quantityInput = target.nextElementSibling;
                    let quantity = parseInt(quantityInput.value);
                    if (quantity > 1) {
                        quantityInput.value = quantity - 1;
                    }
                }
            });
        });

    </script>

</body>

</html>