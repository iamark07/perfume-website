<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-[#fff7ee] font-sans text-gray-800">
    <!-- Include Header -->
    @include('partials.header')

    
    <section class="register_section px-5 md:px-20 my-20 flex flex-col items-center justify-center">
        
        <div class="w-full md:w-[650px] bg-white shadow-lg rounded-lg p-6 poppins-regular">
            
            <div class="w-full">
                <div class="w-full md:p-6">
                    <h1 class="text-2xl font-bold mb-6">Create an Account</h1>

                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="w-full bg-red-200 text-red-500 p-4 mb-5 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-center">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Laravel Form Start -->
                    <form id="register-form" action="{{ url('/register') }}" method="POST" class="grid gap-5 grid-cols-2">
                        @csrf
                        <div class="col-span-2 lg:col-span-1">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="first_name" name="first_name"
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                                <span id="first_name-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last_name" name="last_name"
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                                <span id="last_name-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                        </div>

                        <div class="col-span-2">
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
                                <i class="ri-eye-line pass_icon_show absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer text-lg" onclick="show_pass(this)"></i>
                                <i class="ri-eye-off-line pass_icon_hide absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer hidden text-lg" onclick="hide_pass(this)"></i>
                            </div>
                            <span id="password-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                        </div>

                        <div class="col-span-2">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none password-field">
                                <i class="ri-eye-line pass_icon_show absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer text-lg" onclick="show_pass(this)"></i>
                                <i class="ri-eye-off-line pass_icon_hide absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer hidden text-lg" onclick="hide_pass(this)"></i>
                            </div>
                            <span id="confirmPassword-error" class="text-red-500 text-sm"></span> <!-- Error message -->
                        </div>

                        <div class="col-span-2 mt-5">
                            <button type="submit"
                                class="w-full bg-gray-900 hover:bg-gray-600 text-white text-lg py-3 px-6 rounded-lg shadow-md transition-all duration-300">Register</button>
                        </div>
                    </form>
                    <!-- Laravel Form End -->

                </div>
            </div>

            <div class="text-center my-5">
                <p class="text-gray-700">Already have an account? <a href="{{ url('/login') }}"
                        class="text-blue-500 font-medium hover:underline">Login</a>
                </p>
            </div>
        </div>
    </section>

    <script src="assets/js/cart.js"></script>

    <script>
        // form validation JavaScript code goes here
        // form validation 
        document.getElementById('register-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission
    let valid = true;

    // Clear previous error messages
    document.querySelectorAll('.text-red-500').forEach(el => el.textContent = '');

    // Validate Full Name
    const first_name = document.getElementById('first_name').value.trim();
    if (first_name.length < 3) {
        document.getElementById('first_name-error').textContent = 'First name must be at least 3 characters.';
        valid = false;
    }
    const last_name = document.getElementById('last_name').value.trim();
    if (last_name.length < 3) {
        document.getElementById('last_name-error').textContent = 'Last name must be at least 3 characters.';
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

    // If valid, submit the form
    if (valid) {
        console.log('Form validation passed. Submitting form...');
        e.target.submit(); // Use e.target to refer to the form being submitted
    }
});



        // // Show/Hide Admin Code Input
        // document.getElementById('userType').addEventListener('change', function() {
        //     const adminCodeField = document.getElementById('adminCodeField');
        //     if (this.value === 'admin') {
        //         adminCodeField.style.display = 'block';
        //     } else {
        //         adminCodeField.style.display = 'none';
        //     }
        // });



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
