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

Auth::routes(['shop'=>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');

Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/singleproduct/{id}', [App\Http\Controllers\HomeController::class, 'singleproduct'])->name('singleproduct');

Route::get('/shopcart/{id}', [App\Http\Controllers\HomeController::class, 'shopcart']);
Route::post('/savecart/{id}', [App\Http\Controllers\HomeController::class, 'savecart']);
// Route::post('/updatecart/{id}', [App\Http\Controllers\HomeController::class, 'updatecart']);
// Route::post('/savecartitem/{id}', [App\Http\Controllers\HomeController::class, 'savecartitem']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::post('/save', [App\Http\Controllers\HomeController::class, 'save'])->name('save');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/edit/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');





Route::group(['middleware' => 'vendor'], function()
    {
        Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'vendor'])->name('vendor');
        Route::post('/savevendor', [App\Http\Controllers\VendorController::class, 'savevendor']);
        Route::get('/showvendor', [App\Http\Controllers\VendorController::class, 'showvendor'])->name('showvendor');
        Route::get('/editvendor/{id}', [App\Http\Controllers\VendorController::class, 'editvendor']);
        Route::post('/editvendor/update/{id}', [App\Http\Controllers\VendorController::class, 'updatevendor']);
        Route::get('/deletevendor/{id}', [App\Http\Controllers\VendorController::class, 'deletevendor']);
        Route::match(['get', 'post'], '/vendorOnlyPage/', 'HomeController@vendor');
        
    });    