<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientLogoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProImgController;
use App\Http\Controllers\SliderImageController;
use App\Http\Controllers\StartedController;
use App\Http\Controllers\WorkPostController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all/category', [HomeController::class, 'allCategory'])->name('all.category');
Route::get('/category/post/{id}', [HomeController::class, 'showPostByCategory'])->name('post.category');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-slider-image', [SliderImageController::class, 'index'])->name('Slider.addImage');
    Route::post('/upload-slider-image', [SliderImageController::class, 'SliderImageAdd'])->name('Slider.uploadImage');

    Route::get('/add-image', [ProImgController::class, 'index'])->name('pro.addImage');
    Route::post('/upload-image', [ProImgController::class, 'profileImageAdd'])->name('pro.uploadImage');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category-add', [CategoryController::class, 'addCategory'])->name('category.add');

    Route::get('/post', [WorkPostController::class, 'index'])->name('post');
    Route::post('/post/create', [WorkPostController::class, 'create'])->name('post.create');

    Route::get('/Client', [ClientLogoController::class, 'index'])->name('client');
    Route::post('/Client/add', [ClientLogoController::class, 'create'])->name('client.add');





});
