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

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::get('/admin_view', [AdminController::class, 'admin_view']);

Route::get('/view_category', [AdminController::class, 'view_category']);

Route::get('/add_category', [AdminController::class, 'add_category']);

Route::post('/add_categories', [AdminController::class, 'add_categories']);

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

Route::get('/view_product', [AdminController::class, 'view_product']);

Route::get('/add_product', [AdminController::class, 'add_product']);

Route::post('/addAllProducts', [AdminController::class, 'addAllProducts']);

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

Route::post('/updateAllProducts/{id}', [AdminController::class, 'updateAllProducts']);

Route::get('/view_orders', [AdminController::class, 'view_orders']);

Route::get('/deliverd/{id}', [AdminController::class, 'deliverd']);

Route::get('/print_pdf/{id}', [AdminController::class, 'print_pdf']);




Route::get('/product_detail/{id}', [HomeController::class, 'product_detail']);

Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

Route::get('/view_cart', [HomeController::class, 'view_cart']);

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

Route::get('/cash_order', [HomeController::class, 'cash_order']);

Route::get('/stripe/{totalPrice}', [HomeController::class, 'stripe']);

Route::post('/stripe/{totalPrice}', [HomeController::class, 'stripePost'])->name('stripe.post');
