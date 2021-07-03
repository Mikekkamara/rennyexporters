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



Route::get('/','FrontEndController@index')->name('index');
Route::get('/our-products','FrontEndController@products')->name('products');
Route::get('/contact-us-3-2','FrontEndController@contacts')->name('contacts');
Route::get('/about','FrontEndController@about')->name('about');
Route::get('/order/online','FrontEndController@order')->name('order');


// ..........forms..........................//

Route::get('/contact/post','FrontEndController@contact_form')->name('contact_form');
Route::get('/order/post','FrontEndController@order_form')->name('order_form');
Route::get('/newsletter','FrontEndController@newsletter')->name('newsletter');

