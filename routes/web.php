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

Route::get('/home', function () {
    $data = \App\Models\Journey::all();
    return view('home', compact('data'));
})->name('home');

Auth::routes([
    'register' => false,
]);

Route::prefix('admin')->group(function () {
    Auth::routes(['login' => 'admin/login']);
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::resource('/journey', \App\Http\Controllers\JourneyController::class);
    Route::get('/dashboard', [\App\Http\Controllers\WebController::class, 'admin'])->name('admin.portfolio');
    Route::get('/profile', [\App\Http\Controllers\WebController::class, 'profile'])->name('admin.profile');
    Route::get('/edit', [\App\Http\Controllers\WebController::class, 'edit'])->name('admin.edit');
});
