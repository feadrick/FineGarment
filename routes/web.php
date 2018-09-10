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
use App\Product;
Route::get('/', function () {
    
    $product=Product::all();
    return view('auth.login',['product'=>$product]);
});
Route::get('/addToChart',['as'=>"addToChart",'uses'=>"ProductController@addToChart"]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
