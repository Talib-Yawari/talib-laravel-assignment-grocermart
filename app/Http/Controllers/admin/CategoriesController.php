<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function categories() {
    $Categories = Categories::all();
    return view('admin.categories.list')->with('Categories', $Categories);
   } 

   public function add() {
    return view('admin.categories.add'); 
   }

   public function create(Request $request) {
    // dd($request->input('category_name'));
    $category = new Categories;
    $category->name = $request->input('category_name');
    $category->description = $request->input('category_description');
    $category->isActive = $request->input('category_status') ? "1" : "0";
    $category->save();

    return redirect('/admin/categories');

   }
}
