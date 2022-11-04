<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/form', [\App\Http\Controllers\AdminController::class, 'create'])->middleware(['auth', 'verified'])->name('form');
Route::post('/store', [\App\Http\Controllers\AdminController::class, 'store'])->middleware(['auth', 'verified'])->name('store');
Route::get('/{id}/edit', [\App\Http\Controllers\AdminController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');
Route::post('/update', [\App\Http\Controllers\AdminController::class, 'update'])->middleware(['auth', 'verified'])->name('update');

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
