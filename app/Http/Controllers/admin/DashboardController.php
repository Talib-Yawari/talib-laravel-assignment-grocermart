<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard() {
        $categories = Categories::all();
        return view ('admin/dashboard')->with('categories', $categories);
    }
}
