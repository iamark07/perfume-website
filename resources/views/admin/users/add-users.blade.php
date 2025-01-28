<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
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
                <h1 class="text-3xl font-semibold mb-6">Add New User</h1>

                <!-- Product Form -->
                <form id="add-user-form" action="" method="POST"
                    class="bg-white p-6 rounded-lg shadow-[0px_0px_20px_5px_rgba(229,231,235,0.9)] w-full md:w-[600px] grid gap-5 grid-cols-2">
                    <div class="col-span-2 lg:col-span-1">
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="full_name" name="full_name"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="name-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2 lg:col-span-1">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="email-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Mobile No</label>
                        <input type="text" id="phone" name="phone"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                        <span id="phone-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none password-field">
                            <i class="ri-eye-line pass_icon_show absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer text-lg"
                                onclick="show_pass(this)"></i>
                            <i class="ri-eye-off-line pass_icon_hide absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer hidden text-lg"
                                onclick="hide_pass(this)"></i>
                        </div>
                        <span id="password-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none password-field">
                            <i class="ri-eye-line pass_icon_show absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer text-lg"
                                onclick="show_pass(this)"></i>
                            <i class="ri-eye-off-line pass_icon_hide absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer hidden text-lg"
                                onclick="hide_pass(this)"></i>
                        </div>
                        <span id="confirmPassword-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                    </div>

                    <div class="col-span-2">
                        <label for="userType" class="block text-sm font-medium text-gray-700">Register As</label>
                        <select id="userType" name="userType"
                            class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                            <option selected disabled>Select</option>
                            <option value="user">Normal User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <span id="userType-error" class="text-red-500 text-sm"></span>
                    </div>

                    <div class="col-span-2 mt-5">
                        <button type="submit"
                            class="w-full bg-gray-900 hover:bg-gray-600 text-white text-lg py-3 px-6 rounded-lg shadow-md transition-all duration-300">Edit
                            User</button>
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


        // form validation 
        document.getElementById('add-user-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.text-red-500').forEach(el => el.textContent = '');

            // Validate Full Name
            const name = document.getElementById('full_name').value.trim();
            if (name.length < 3) {
                document.getElementById('name-error').textContent = 'Full name must be at least 3 characters.';
                valid = false;
            }

            // Validate Email
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                document.getElementById('email-error').textContent = 'Please enter a valid email address.';
                valid = false;
            }

            // Validate Mobile No
            const phone = document.getElementById('phone').value.trim();
            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phone)) {
                document.getElementById('phone-error').textContent = 'Please enter a valid 10-digit mobile number.';
                valid = false;
            }

            // Validate Password
            const password = document.getElementById('password').value.trim();
            if (password.length < 6) {
                document.getElementById('password-error').textContent = 'Password must be at least 6 characters.';
                valid = false;
            }

            // Validate Confirm Password
            const confirmPassword = document.getElementById('password_confirmation').value.trim();
            if (confirmPassword !== password) {
                document.getElementById('confirmPassword-error').textContent = 'Passwords do not match.';
                valid = false;
            }

            const userType = document.getElementById('userType').value;
            if (userType === "Select") {
                document.getElementById('userType-error').textContent = 'Please select a valid user type.';
                valid = false;
            }

            // If valid, submit the form
            if (valid) {
                e.target.submit(); // Use e.target to refer to the form being submitted
            }
        });


        // hide or show password
        function show_pass(icon) {
            // Find the corresponding input field using the passed icon
            let inputField = icon.closest('.relative').querySelector('input');

            // Show password by changing the input type to 'text'
            inputField.type = 'text';

            // Toggle visibility icons
            icon.classList.add('hidden');
            icon.nextElementSibling.classList.remove('hidden');
        }

        function hide_pass(icon) {
            // Find the corresponding input field using the passed icon
            let inputField = icon.closest('.relative').querySelector('input');

            // Hide password by changing the input type back to 'password'
            inputField.type = 'password';

            // Toggle visibility icons
            icon.classList.add('hidden');
            icon.previousElementSibling.classList.remove('hidden');
        }
    </script>
</body>

</html>