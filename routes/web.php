<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/cart', [DashboardController::class, 'getCart'])->name('dashboard.cart');

Route::get('/about', function () {
    return view('about' ,['title' => 'Sobre']);
});

//Route::resource('customer', CustomerController::class);
Route::get('customer/customers', [CustomersController::class, 'index'])->name('customer.index');
Route::get('customer/create', [CustomersController::class, 'create'])->name('customer.create');
Route::get('customer/show/{id}', [CustomersController::class, 'show'])->name('customer.show');
Route::get('customer/edit/{id}', [CustomersController::class, 'edit'])->name('customer.edit');
Route::post('customer', [CustomersController::class, 'store'])->name('customer.store');
Route::post('customer/update/{id}', [CustomersController::class, 'update'])->name('customer.update');
Route::delete('customer/delete/{id}',[CustomersController::class, 'destroy'])->name('customer.delete');


Route::get('order/orders', [OrdersController::class, 'index'])->name('orders.index');
Route::get('order/create', [OrdersController::class, 'create'])->name('orders.create');
Route::post('order', [OrdersController::class, 'store'])->name('orders.store');
Route::get('order/show/{id}', [OrdersController::class, 'show'])->name('orders.show');

Route::get('product/products', [ProductsController::class, 'index'])->name('products.index');
