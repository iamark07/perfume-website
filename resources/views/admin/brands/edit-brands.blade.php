<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brands</title>
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
                <h1 class="text-3xl font-semibold mb-6">Edit Brand</h1>

                <!-- Brand Form -->
                <form id="editBrandForm" action="" method="POST"
                    class="bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] w-full md:w-[600px] grid grid-cols-2">
                    <div class="col-span-2 ">
                        <label for="brand_name" class="block text-sm font-medium text-gray-700">Brand Name</label>
                        <input type="text" id="brand_name" name="brand_name"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="brand-name-error" class="text-red-500 text-sm"></span>
                    </div>

                    <button type="submit" class="bg-gray-900 text-white py-2 px-6 rounded-md mt-4">Edit Brand</button>
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
        document.getElementById('editBrandForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting
            let valid = true; // Validation flag

            // Clear any previous error messages
            const brandNameError = document.getElementById('brand-name-error');
            brandNameError.textContent = ''; // Clear error message

            // Validate Brand Name
            const brandName = document.getElementById('brand_name').value.trim();
            if (brandName === '') {
                brandNameError.textContent = 'Brand Name is required!';
                valid = false;
            } else if (brandName.length < 3) {
                brandNameError.textContent = 'Brand Name must be at least 3 characters long.';
                valid = false;
            }

            // If valid, submit the form
            if (valid) {
                console.log('Form validation passed. Submitting form...');
                e.target.submit(); // Submit the form
            }
        });
    </script>
</body>

</html>