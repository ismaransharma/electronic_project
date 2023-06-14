<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'getHome']);

Route::get('/about-us', [SiteController::class, 'getAbout']);

Route::get('/services', [SiteController::class, 'getServices']);

Route::get('/laptop-category', [SiteController::class, 'getLaptopCategory']);

Route::get('/categroy-gaming-laptop', [SiteController::class, 'getGamingLaptopCategory']);

Route::get('/category-budget-laptop', [SiteController::class, 'getBudgetLaptopCategory']);

Route::get('/contact-us', [SiteController::class, 'getContactUs']);

Route::get('/test', [SiteController::class, 'test']);

Route::get('/footer', [SiteController::class, 'getfooter']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
