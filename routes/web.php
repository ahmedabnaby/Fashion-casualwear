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

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/about', 'ProductsController@about')->name('about');
Route::get('/contact', 'ProductsController@contact')->name('contact');
Route::resource('products', 'ProductsController');

Route::get('/add-to-cart/{product}', 'CartController@addToCart')->name('cart.add')->middleware('auth');
Route::get('/cart','CartController@cart')->name('cart')->middleware('auth');
Route::get('/cart/destroy/{itemId}','CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}','CartController@update')->name('cart.update')->middleware('auth');

Route::get('/checkout','CheckoutController@index')->name('checkout')->middleware('auth');
Route::post('/payment','ProductsController@payment')->name('payment')->middleware('auth');
Route::get('/cash','ProductsController@cash')->name('cash')->middleware('auth');
Route::post('/charge','ProductsController@charge')->name('cart.charge')->middleware('auth');
Route::get('/paywithcard','ProductsController@paywithcard')->name('paywithcard')->middleware('auth');



Route::get('/orders','OrdersController@index')->name('orders')->middleware('auth');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();

