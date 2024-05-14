<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\BlogController;
use Illuminate\Support\Facades\Auth;

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

Route::controller( HomeController::class )->group( function() {
    Route::get('/', 'index')->name('home.index');
    Route::get('/blog', 'blog')->name('home.blog');
    Route::get('/blog/{id}', 'show')->name('home.blog.show');
});

Route::controller( LoginController::class )->group(function() {
    Route::get('/login', 'show')->name('login');
    Route::post('/login', 'authentication')->name('login.post');
    Route::post('/logout', 'logout')->name('logout.post');
});

/* Auth Route Start */
Route::middleware(['auth', 'auth.session'])->group(function(){
    Route::controller( DashboardController::class )->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::resource('/dashboard/blog', BlogController::class);
});
/* Auth Route End */