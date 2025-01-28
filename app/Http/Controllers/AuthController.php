<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegisterForm()
    {
        return view('register');  // Show registration form
    }

    // Handle registration logic
    public function register(Request $request)
    {
        // Custom validation logic to check if email and phone already exist
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'email' => 'required|email',  // Check if email is unique
            'phone' => 'required|regex:/^[0-9]{10}$/',  // Check if phone number is unique
            'password' => 'required|min:6|confirmed',  // 'confirmed' will ensure password_confirmation field matches password
        ]);

        // Manually checking if both email and phone are already registered
        $emailExists = User::where('email', $request->email)->exists();
        $phoneExists = User::where('phone_number', $request->phone)->exists();

        if ($emailExists && $phoneExists) {
            $validator->after(function ($validator) {
                $validator->errors()->add('email', 'The email and phone number are already registered.');
            });
        } elseif ($emailExists) {
            $validator->after(function ($validator) {
                $validator->errors()->add('email', 'The email is already registered.');
            });
        } elseif ($phoneExists) {
            $validator->after(function ($validator) {
                $validator->errors()->add('phone', 'The phone number is already registered.');
            });
        }

        // If validation fails, return the errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create a new user record if validation passes
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone_number = $request->phone;
        $user->password = Hash::make($request->password);  // Hash the password before storing
        $user->role = 'user';  // Default role for new users
        $user->save();  // Save the user in the database

        // Store success message in session
        session()->flash('success', 'Registration successful! You can now login.');

        // Redirect to login page
        return redirect()->route('login');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('login');  // Show login form
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate form data
        $request->validate([
            'email' => 'required|string',  // Email or phone input
            'password' => 'required|string',
        ]);
    
        // Check if the provided email exists in the database
        $emailExists = User::where('email', $request->email)->exists();
        // Check if the provided phone number exists in the database
        $phoneExists = User::where('phone_number', $request->email)->exists();
        $user = null;
    
        // Determine if the user exists based on email or phone
        if ($emailExists) {
            $user = User::where('email', $request->email)->first();
        } elseif ($phoneExists) {
            $user = User::where('phone_number', $request->email)->first();
        }
    
        // Combined error for incorrect email/phone and password
        $errors = [];
    
        if (!$user) {
            // If no user found, show error based on what was provided (email or phone)
            $errors[] = 'The email or phone number is incorrect.';
        }
    
        // If password doesn't match
        if ($user && !Hash::check($request->password, $user->password)) {
            $errors[] = 'The password is incorrect.';
        }
    
        // If there are any errors, show them as a combined message
        if (!empty($errors)) {
            return back()->withErrors(['login_error' => implode(' ', $errors)]);
        }
    
        // If authentication is successful, log the user in
        Auth::login($user);
    
        // Redirect to the home page after login
        return redirect('/');  // Change this to the desired route after successful login
    }
    



    // Handle logout logic
    public function logout()
    {
        // Log out the user
        Auth::logout();

        // Redirect to the home page
        return redirect('/');
    }
}
