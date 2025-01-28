<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
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
                <h1 class="text-3xl font-semibold mb-6">Edit Product</h1>

                <!-- Product Form -->
                <form id="add-product-form" action="" method="POST" enctype="multipart/form-data"
                    class="bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] w-full md:w-[600px] grid gap-5 grid-cols-2">
                    <div class="col-span-2 lg:col-span-1">
                        <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <input type="text" id="product_name" name="product_name"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="product-name-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="select_brand" class="block text-sm font-medium text-gray-700">Select Brand</label>
                        <select name="select_brand"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none"
                            id="select_brand">
                            <option selected disabled>Select Brand</option>
                            <option value="flora">Flora</option>
                            <option value="woody">Woody</option>
                        </select>
                        <span id="brand-name-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea type="text" id="description" name="description"
                            class="h-20 mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none"></textarea>
                        <span id="description-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="original_price" class="block text-sm font-medium text-gray-700">Original
                            Price</label>
                        <input type="text" id="original_price" name="original_price"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="original-price-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="discount" class="block text-sm font-medium text-gray-700">Discount</label>
                        <input type="text" id="discount" name="discount"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="discount-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-700">Choose Image</label>
                        <input type="file" id="image" name="image"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="image-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>
                    
                    <div class="show_select_img col-span-2">
                        <img src="../../assets/img/item-1.jpg" class="w-24" alt="">
                    </div>

                    <div class="col-span-2 mt-5">
                        <button type="submit"
                            class="w-full bg-gray-900 hover:bg-gray-600 text-white text-lg py-3 px-6 rounded-lg shadow-md transition-all duration-300">Edit
                            Products</button>
                    </div>
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


        document.getElementById('edit-product-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.text-red-500').forEach(el => el.textContent = '');

            // Validate Product Name
            const productName = document.getElementById('product_name').value.trim();
            if (productName.length < 3) {
                document.getElementById('product-name-error').textContent = 'Product name must be at least 3 characters.';
                valid = false;
            }

            // Validate Select Brand
            const brand = document.getElementById('select_brand').value;
            if (brand === "Select Brand") {
                document.getElementById('brand-name-error').textContent = 'Please select a valid brand.';
                valid = false;
            }

            // Validate Description
            const description = document.getElementById('description').value.trim();
            if (description.length < 10) {
                document.getElementById('description-error').textContent = 'Description must be at least 10 characters.';
                valid = false;
            }

            // Validate Original Price
            const originalPrice = document.getElementById('original_price').value.trim();
            if (!originalPrice || isNaN(originalPrice) || Number(originalPrice) <= 0) {
                document.getElementById('original-price-error').textContent = 'Please enter a valid price greater than 0.';
                valid = false;
            }

            // Validate Discount
            const discount = document.getElementById('discount').value.trim();
            if (!discount || isNaN(discount) || Number(discount) < 0 || Number(discount) > 100) {
                document.getElementById('discount-error').textContent = 'Please enter a discount between 0 and 100.';
                valid = false;
            }

            // Validate Image
            const image = document.getElementById('image').files[0];
            if (!image) {
                document.getElementById('image-error').textContent = 'Please upload an image.';
                valid = false;
            }

            // If valid, submit the form
            if (valid) {
                e.target.submit(); // Submit the form
            }
        });
    </script>
</body>

</html>