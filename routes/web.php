<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//ADMIN ROUTES
Route::get('/admin/login', [LoginController::class, 'login']);
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/admin/categories', [CategoriesController::class, 'categories']);
Route::get('/admin/categories/add', [CategoriesController::class, 'add']);
Route::post('/admin/categories/add', [CategoriesController::class, 'create']);



//WEBSITE ROUTES
Route::get('/', [WebsiteController::class, 'home']);
Route::get('/shop', [WebsiteController::class, 'shop']);
Route::get('/contact',[WebsiteController::class, 'contact']);
Route::get('/shop-details', [WebsiteController::class, 'shopDetails']);
Route::get('/shopping-cart', [WebsiteController::class, 'shoppingCart']);
Route::get('/checkout', [WebsiteController::class, 'checkOut']);
Route::get('/blog-details', [WebsiteController::class, 'blogDetails']);
Route::get('/blog', [WebsiteController::class, 'blog']);
