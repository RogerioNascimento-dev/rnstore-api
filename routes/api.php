<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'api\ProductController@index')->name('indexProduct');
Route::get('/customers', 'api\CustomerController@index')->name('indexCustomer');
Route::get('/sales', 'api\SaleController@index')->name('indexSale');
Route::get('/sales/{id}', 'api\SaleController@show')->name('showSale');
Route::delete('/sales/{id}', 'api\SaleController@destroy')->name('destroySale');
Route::post('/sales', 'api\SaleController@store')->name('storeSale');

