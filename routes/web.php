<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/login', [\App\Http\Controllers\SecurityController::class, 'login_form'])->name('login.form');
Route::post('/login_proses', [\App\Http\Controllers\SecurityController::class, 'login'])->name('login');
Route::middleware('auth')->group(function() {
    Route::resource('admin', \App\Http\Controllers\AdminController::class);
});

Route::get('/page-one', function () {
    return view('day2.pageOne');
})->name('pageOne');

Route::get('/page-two', function () {
    return view('day2.pageTwo');
})->name('pageTwo');

Route::get('/page-three', function () {
    return view('day2.pageThree');
})->name('pageThree');

Route::get('/page-four', function () {
    return view('day2.pageFour');
})->name('pageFour');

Route::get('/page/{title}/{content}', [\App\Http\Controllers\HalamanController::class, 'index'])->name('page');
