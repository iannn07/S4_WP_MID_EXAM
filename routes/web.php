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

Route::get('/', [\App\Http\Controllers\WebController::class, 'index']) -> name('index');

Route::group(['prefix' => '/myresume'], function () {
    // Route::get('/portfolio1', function () {
    //     return view('portfolio_1');
    // })->name('personal.portfolio.1');

    Route::get('/admin', function () {
        return view('admin_portfolio');
    })->name('admin.portfolio');
});

Auth::routes([
    'register' => false,
]);

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('/', function () {
//         return view('admin_portfolio');
//     })->name('admin.portfolio');
// });

Route::get('forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

Route::resource('/portfolio', app\Http\Controllers\PortfolioController::class);
