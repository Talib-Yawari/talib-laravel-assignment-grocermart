<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function categories() {
    return view('admin.categories.list');
   } 

   public function add() {
    return view('admin.categories.add'); 
   }

   public function create(Request $request) {
    dd($request);
   }
}
