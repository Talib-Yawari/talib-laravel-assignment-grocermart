<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        return view('index');
    }

    public function shop() {
        return view ('shop');
    }

    public function contact() {
        return view ('contact');
    }

    public function shopDetails() {
        return view ('shop-details');     
    }

    public function shoppingCart() {
        return view ('shopping-cart');     
    }

    public function checkOut() {
        return view ('checkout');     
    }

    public function blogDetails() {
        return view ('shop-details');     
    }

    public function blog() {
        return view ('blog');     
    }

}
