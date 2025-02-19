@extends('frontend.partials.app')

@section('content')

    <!-- Login Section -->
    <section class="login_section px-5 md:px-20 my-20 flex justify-center">
        <div class="w-full md:w-[600px] bg-white shadow-lg rounded-lg p-6 poppins-regular">
            <div class="w-full">

                <!-- Check for success message -->
                @if(session('success'))
                    <div class="login_form_success bg-green-200 text-sm md:text-md text-center text-green-500 p-3 rounded-md shadow-lg mb-5">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->has('login_error'))
                    <div class="login_form_error bg-red-200 text-sm md:text-md text-center text-red-500 p-3 rounded-md shadow-lg mb-5">
                        <p>{{ $errors->first('login_error') }}</p>
                    </div>
                @endif


                <!-- Login Form -->
                <div class="w-full md:p-6">
                    <h1 class="text-2xl font-bold mb-6 text-center">Login to Your Account</h1>
                    <form action="{{ route('login') }}" method="POST" class="grid gap-5" id="loginForm">
                        @csrf
                        <div class="col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email or Mobile</label>
                            <input type="text" id="email" name="email"
                                class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                            <p id="emailError" class="text-red-600 text-sm mt-1 hidden">Email is required.</p>
                        </div>
                        <div class="col-span-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password"
                                    class="mt-1 block w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-500 focus:outline-none">
                                <i class="ri-eye-line pass_icon_show absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer text-lg" onclick="show_pass()"></i>
                                <i class="ri-eye-off-line pass_icon_hide absolute top-1/2 right-5 -translate-y-1/2 cursor-pointer hidden text-lg" onclick="hide_pass()"></i>
                            </div>
                            <p id="passwordError" class="text-red-600 text-sm mt-1 hidden">Password is required.</p>
                        </div>
                        <div class="col-span-2 mt-5">
                            <button type="submit"
                                class="w-full bg-gray-900 hover:bg-gray-600 text-white text-lg py-3 px-6 rounded-lg shadow-md transition-all duration-300">
                                Login
                            </button>
                        </div>
                    </form>
                    


                    <div class="text-center mt-10">
                        <p class="text-gray-700">Don't have an account? <a href="{{ url('/register') }}"
                                class="text-blue-500 font-medium hover:underline">Register</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the input fields and error message elements
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');

            // Initialize validation status
            let isValid = true;

            // Validate email
            if (emailInput.value.trim() === '') {
                emailError.classList.remove('hidden');
                emailInput.classList.add('border-red-600');
                isValid = false;
            } else {
                emailError.classList.add('hidden');
                emailInput.classList.remove('border-red-600');
            }

            // Validate password
            if (passwordInput.value.trim() === '') {
                passwordError.classList.remove('hidden');
                passwordInput.classList.add('border-red-600');
                isValid = false;
            } else {
                passwordError.classList.add('hidden');
                passwordInput.classList.remove('border-red-600');
            }

            // Submit the form if valid
            if (isValid) {
                this.submit();
            }
        });

        function show_pass() {
            document.querySelector("#password").setAttribute("type", "text");
            document.querySelector(".pass_icon_show").classList.add("hidden");
            document.querySelector(".pass_icon_hide").classList.add("!block");
        }

        function hide_pass() {
            document.querySelector("#password").setAttribute("type", "password");
            document.querySelector(".pass_icon_show").classList.remove("hidden");
            document.querySelector(".pass_icon_hide").classList.remove("!block");
        }
    </script>

@endsection