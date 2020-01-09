<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('admin/loaisanpham/','Home\HomeController@index');
Route::get('admin/loaisanpham/{id}','Home\HomeController@show');
Route::post('admin/loaisanpham','Home\HomeController@store');
Route::put('admin/loaisanpham/{id}','Home\HomeController@update');
Route::delete('admin/loaisanpham/{id}','Home\HomeController@destroy');


Route::get('admin/sanpham/','Product\ProductController@index');
Route::get('admin/sanpham/{id}','Product\ProductController@show');
Route::post('admin/sanpham','Product\ProductController@store');
Route::put('admin/sanpham/{id}','Product\ProductController@update');
Route::delete('admin/sanpham/{id}','Product\ProductController@destroy');