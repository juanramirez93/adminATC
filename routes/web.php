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

Route::get('/', function () {
    return view('content.content');
});

Route::get('/natural_customers', 'NaturalCustomerController@index');
Route::post('/natural_customers', 'NaturalCustomerController@store');
Route::post('/natural_customers/migrate', 'NaturalCustomerController@migrate');
Route::put('/natural_customers/update', 'NaturalCustomerController@update');
Route::put('/natural_customers/delete', 'NaturalCustomerController@deactivate');
Route::put('/natural_customers/restore', 'NaturalCustomerController@activate');