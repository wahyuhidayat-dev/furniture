<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/details/{slug}', [FrontendController::class ,'details'])->name('details');
Route::get('/notfound', [FrontendController::class,'notfound'])->name('notfound');
Route::get('/carts', [FrontendController::class,'carts'])->name('carts');
Route::get('/success', [FrontendController::class,'success'])->name('checkout-success');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('dashboard.')->prefix('dashboard')->group(function() {
    
    Route::get('/', [DashboardController::class,'index'])->name('index');
    
    Route::middleware('admin')->group(function () {
        Route::resource('product', ProductController::class);
    });
});