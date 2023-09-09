<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    Session::flash('message', "Category Added Successfully");

    return redirect('/admin/categories');

   }

   public function edit(Request $request) {
        $category_id = $request->id;
        $category = Categories::find($category_id);
        
         
        return view ('admin.categories.edit')->with('category', $category);
   }

   public function update(Request $request){
    $category_id = $request->id;
    $category = Categories::find($category_id);

    $category->name = $request->input('category_name');
    $category->description = $request->input('category_description');
    $category->isActive = $request->input('category_status') ? "1" : "0";
    $category->save();
    Session::flash('message', "Category Updated Successfully");

     return redirect('/admin/categories');

   }

   public function delete(Request $request) {
        dd($request->id);
   }
   
}
