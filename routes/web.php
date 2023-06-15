<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [SiteController::class, 'getHome' ]); 

Route::get('/about-us', [SiteController::class, 'getAbout']);

Route::get('/services', [SiteController::class, 'getServices']);

Route::get('/laptop-category', [SiteController::class, 'getLaptopCategory']);

Route::get('/categroy-gaming-laptop', [SiteController::class, 'getGamingLaptopCategory']);

Route::get('/category-budget-laptop', [SiteController::class, 'getBudgetLaptopCategory']);

Route::get('/contact-us', [SiteController::class, 'getContactUs']);

Route::get('/test', [SiteController::class, 'test']);

Route::get('/footer', [SiteController::class, 'getfooter']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group (function (){
    Route::prefix('admin')->group(function () {

        Route::get('dashboard',  [HomeController::class, 'getAdminDashboard'])->name('getAdminDashboard');

        Route::prefix('product')->group (function (){
            Route::get('manage', [HomeController::class, 'getAdminProductManage'])->name('getAdminProductManage');
        });

        Route::prefix('category')->group (function (){
            Route::get('manage', [HomeController::class, 'getAdminCategoryManage'])->name('getAdminCategoryManage');
        });

        Route::prefix('carts')->group (function (){
            Route::get('carts', [HomeController::class, 'getAdminCartsManage'])->name('getAdminCartsManage');
        });

        Route::prefix('order')->group (function (){
            Route::get('order', [HomeController::class, 'getAdminOrderManage'])->name('getAdminOrderManage');
        });

        Route::prefix('payment')->group (function (){
            Route::get('payment', [HomeController::class, 'getAdminPaymentManage'])->name('getAdminPaymentManage');
        });

        Route::prefix('services')->group (function (){
            Route::get('services', [HomeController::class, 'getAdminServicesManage'])->name('getAdminServicesManage');
        });

        Route::prefix('slider')->group (function (){
            Route::get('slider', [HomeController::class, 'getAdminSliderManage'])->name('getAdminSliderManage');
        });

        Route::prefix('about-us')->group (function (){
            Route::get('about-us', [HomeController::class, 'getAdminAboutUsManage'])->name('getAdminAboutUsManage');
        });


    
    });
});

