<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\AdminController;
use App\Models\Laptop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//*********************************site***************************************************** 

Route::get('/welcome',);
Route::get('/about', [LaptopController::class, 'about'])->name('about');
Route::get('/service', [LaptopController::class, 'service'])->name('service');
Route::get('/contact', [LaptopController::class, 'contact'])->name('contact');
Route::get('/', [LaptopController::class, 'index'])->name('home');
Route::get('/laptop', [LaptopController::class, 'laptop'])->name('laptop');
Route::get('/detail/{shop:slug}', [LaptopController::class, 'detail'])->name('detail');
//*********************************admin***************************************************** 
Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/card',[AdminController::class,'card'])->name('card');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::get('/index',[AdminController::class,'index'])->name('index');
Route::post('/postLaptops', [AdminController::class, 'postLaptops'])
    ->name('postLaptops');
Route::get('/admin.laptops.index', [AdminController::class, 'index'])->name('admin.laptops.index');

//*********************************auth***************************************************** 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
