<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('section.home');
})->name('home');
Route::get('/mens', [
    'uses' => 'ProductController@getIndex',
    'as' => 'mensproducts'
]);
Route::get('/womens', [
    'uses' => 'ProductController@getWomens',
    'as' => 'womensproducts'
]);
Route::get('/kids', [
    'uses' => 'ProductController@getKids',
    'as' => 'kidsproducts'
]);
Route::get('/contact', function () {
    return view('section.contact');
})->name('contact');
Route::get('/about', function () {
    return view('section.about');
})->name('about');
Route::get('/custmization', function () {
    return view('section.customization');
})->name('custmizaion');

Route::get('products/{id}/addtocart', [
    'uses' => 'ProductController@addToCart',
    'as' => 'addtocart'
]);

Route::get('shoppingCart', [
    'uses' => 'ProductController@getCart',
    'as' => 'shopping-cart'
]);
Route::get('products/shoppingCart/checkout', 'ProductController@checkoutDetails');
Route::post('/order', 'CheckoutController@store');
Route::get('/orderconfirm', function () {
    return view('section.orderconfirm');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'AdminController@getIndex');
    Route::get('/adminproducts', 'AdminController@getProduct');
    Route::get('/adminorders', 'AdminController@getOrder');
});

Auth::routes();
