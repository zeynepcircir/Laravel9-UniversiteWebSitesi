<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
// 1- Do something in route
Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});


// 3- Call Controller Function
Route::get('/',[HomeController::class,'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ************************ADMIN PANEL ROUTES*********************
Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');
// ************************ADMIN PANEL CATEGORY*********************
Route::get('/admin/menu',[\App\Http\Controllers\AdminPanel\MenuController::class,'index'])->name('admin_menu');
Route::get('/admin/menu/create',[\App\Http\Controllers\AdminPanel\MenuController::class,'create'])->name('admin_menu_create');
Route::post('/admin/menu/store',[\App\Http\Controllers\AdminPanel\MenuController::class,'store'])->name('admin_menu_store');