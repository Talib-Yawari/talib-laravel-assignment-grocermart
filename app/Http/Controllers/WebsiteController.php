<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        $categories = Categories::all();
        return view('index')->with('categories', $categories);
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
