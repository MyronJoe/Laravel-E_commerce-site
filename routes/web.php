<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/product', [AdminController::class, 'product']);

Route::get('/admin_view', [AdminController::class, 'admin_view']);

Route::get('/view_category', [AdminController::class, 'view_category']);

Route::get('/add_category', [AdminController::class, 'add_category']);

Route::post('/add_categories', [AdminController::class, 'add_categories']);

Route::post('/addAllProducts', [AdminController::class, 'addAllProducts']);

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

Route::get('/add_product', [AdminController::class, 'add_product']);