<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
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
    return view('index');
});

//Route::resource('customer', CustomerController::class);
Route::get('customer/customers', [CustomersController::class, 'index'])->name('customer.index');
Route::get('customer/create', [CustomersController::class, 'create'])->name('customer.create');
Route::get('customer/show/{$customer}', [CustomersController::class, 'show'])->name('customer.show');
Route::get('customer/edit/{$customer}', [CustomersController::class, 'edit'])->name('customer.edit');
Route::post('customer', [CustomersController::class, 'store'])->name('customer.store');
Route::post('customer/update/{$customer}', [CustomersController::class, 'update'])->name('customer.update');


