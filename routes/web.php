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

Route::get('/', 'PagesController@home');
// Route::get('/inquiries', 'PagesController@inquiries');
Route::get('/inquiries', 'InquiryFormController@create');
Route::post('/inquiries', 'InquiryFormController@store');


Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/allterraincranes', 'ProductsController@allterraincrane');
Route::get('/crawlercranes', 'ProductsController@crawlercrane');
Route::get('/roughterraincranes', 'ProductsController@roughterraincrane');
Route::get('/truckcranes', 'ProductsController@truckcrane');

Route::get('/detailProduct/{product}', 'ProductsController@show');