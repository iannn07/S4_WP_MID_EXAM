<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
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

Route::group(['prefix' => '/myresume'], function () {
    Route::get('/home', [\App\Http\Controllers\WebController::class, 'home']) -> name('home');
    Route::resource('/journey', \App\Http\Controllers\JourneyController::class);
});

Auth::routes([
    'register' => false,
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [\App\Http\Controllers\WebController::class, 'admin']) -> name('admin.portfolio');
    Route::get('/profile', [\App\Http\Controllers\WebController::class, 'profile']) -> name('admin.profile');
    Route::get('/edit', [\App\Http\Controllers\WebController::class, 'edit']) -> name('admin.edit');
});
