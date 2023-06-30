<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\CartController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/redirect', [HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/view_product', [AdminController::class, 'view_product']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/show_product', [AdminController::class, 'show_product']);

route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('/update_product/{id}', [AdminController::class, 'update_product']);

route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

Route::get('/products', [HomeController::class, 'prodPage']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/products/{id}/bid', [BidController::class, 'submit'])->name('bid.submit');

Route::get('/active-bids', [BidController::class, 'activeBids'])->name('active-bids');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');

Route::post('/updateDelivery', [CartController::class, 'updateDelivery'])->name('updateDelivery')->middleware('auth');

Route::get('/delivered-products', [AdminController::class, 'deliveredProducts'])->name('delivered-products');

Route::get('/delivered', [AdminController::class, 'delivered'])->name('delivered');


Route::post('/updateDelivery2/{id}', [ProductController::class, 'updateDelivery'])->name('updateDelivery2')->middleware('auth');

Route::get('/won-bids', [HomeController::class, 'wonBids'])->name('wonBids');