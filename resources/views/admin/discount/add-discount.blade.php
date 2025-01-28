<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Discount Coupon</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .table_overflow::-webkit-scrollbar {
            display: none;
        }

        table tbody tr:nth-child(even) {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="poppins-regular">

    <main class="">
        {{-- admin header --}}
        @include('admin.admin-partials.admin-header')
        <div class="lg:flex">
            <!-- Sidebar -->
            @include('admin.admin-partials.admin-nav')

            <!-- Main Content -->
            <div class="lg:w-[86%] xl:w-[88%] w-full flex flex-col items-center py-10 px-5 md:px-10">
                <h1 class="text-3xl font-semibold mb-6">Add Discount Coupon</h1>

                <!-- Discount Form -->
                <form id="addDiscountForm" action="" method="POST"
                    class="bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] w-full md:w-[600px] grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label for="coupon_code" class="block text-sm font-medium text-gray-700">Coupon Code</label>
                        <input type="text" id="coupon_code" name="coupon_code"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="coupon-code-error" class="text-red-500 text-sm"></span>
                    </div>
                    <div class="col-span-2">
                        <label for="discount_percentage" class="block text-sm font-medium text-gray-700">Discount Percentage</label>
                        <input type="number" id="discount_percentage" name="discount_percentage" min="1" max="100"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="discount-percentage-error" class="text-red-500 text-sm"></span>
                    </div>
                    <div class="col-span-2">
                        <label for="expiry_date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                        <input type="date" id="expiry_date" name="expiry_date"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="expiry-date-error" class="text-red-500 text-sm"></span>
                    </div>
                    <button type="submit" class="bg-gray-900 text-white py-2 px-6 rounded-md mt-4">Add Coupon</button>
                </form>
            </div>
        </div>
    </main>
    <script>

        // Toggle mobile menu

        const menuBtn = document.getElementById("admin-menu-btn");
        const mobileMenu = document.getElementById("admin-mob-nav");
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("left-0");
        });

        // Add event listener to the form's submit event
        document.getElementById('addDiscountForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting
            let valid = true; // Validation flag

            // Clear previous error messages
            const couponCodeError = document.getElementById('coupon-code-error');
            const discountPercentageError = document.getElementById('discount-percentage-error');
            const expiryDateError = document.getElementById('expiry-date-error');
            couponCodeError.textContent = '';
            discountPercentageError.textContent = '';
            expiryDateError.textContent = '';

            // Validate Coupon Code
            const couponCode = document.getElementById('coupon_code').value.trim();
            if (couponCode === '') {
                couponCodeError.textContent = 'Coupon Code is required!';
                valid = false;
            }

            // Validate Discount Percentage
            const discountPercentage = document.getElementById('discount_percentage').value.trim();
            if (discountPercentage === '') {
                discountPercentageError.textContent = 'Discount Percentage is required!';
                valid = false;
            } else if (discountPercentage < 1 || discountPercentage > 100) {
                discountPercentageError.textContent = 'Enter a valid percentage (1-100).';
                valid = false;
            }

            // Validate Expiry Date
            const expiryDate = document.getElementById('expiry_date').value.trim();
            if (expiryDate === '') {
                expiryDateError.textContent = 'Expiry Date is required!';
                valid = false;
            }

            // If valid, submit the form
            if (valid) {
                console.log('Form validation passed. Submitting form...');
                e.target.submit();
            }
        });
    </script>
</body>

</html>