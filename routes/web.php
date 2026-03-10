<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaptopController;
use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    // ===============================
    // site routes
    // ===============================

Route::get('/about', [LaptopController::class, 'about'])->name('about');
Route::get('/service', [LaptopController::class, 'service'])->name('service');
Route::get('/contact', [LaptopController::class, 'contact'])->name('contact');
Route::get('/', [LaptopController::class, 'index'])->name('home');
Route::get('/laptop', [LaptopController::class, 'laptop'])->name('laptop');
Route::get('/detail/{shop:slug}', [LaptopController::class, 'detail'])->name('detail');

    // ===============================
    // admin routes
    // ===============================


Route::get('/admin',[AdminController::class,'dashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('/card',[AdminController::class,'card'])->name('card');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::post('/postLaptops', [AdminController::class, 'postLaptops'])->name('postLaptops');
Route::get('/admin-laptops-index', [AdminController::class, 'indox'])->name('admin.laptops.index');



    // ===============================
    // buy routes
    // ===============================

Route::get('/buy',function(){ return view('admin.buy.index');})->name('buy');
Route::get('/index-buy',function(){ return view('admin.buy.index');})->name('buy.index');
Route::get('/buy',function(){ return view('admin.buy.index');})->name('buy');


    // ===============================
    // auth routes
    // ===============================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
