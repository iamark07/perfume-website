<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   {
    return view('frontend.index');

   }
    public function about()
   {
    return view('frontend.about');

   }
    public function cart()
   {
    return view('frontend.cart');

   }
    public function checkout()
   {
    return view('frontend.checkout');

   }
    public function contact()
   {
    return view('frontend.contact');

   }
    public function login()
   {
    return view('frontend.login');

   }
    public function logout()
   {
    return view('frontend.logout');

   }
    public function product()
   {
    return view('frontend.product');

   }
    public function profile()
   {
    return view('frontend.profile');

   }
    public function register()
   {
    return view('frontend.register');

   }

   public function reset_password()
   {
    return view('frontend.reset_password');

   }
    public function forget_password()
   {
    return view('frontend.forget_password');

   }
    public function search_result()
   {
    return view('frontend.search-result');

   }
    public function faqs()
   {
    return view('frontend.faqs');

   }
   
}
