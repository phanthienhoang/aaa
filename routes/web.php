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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/loaisanpham', function () {
    return view('admin.pages.table.listproductline');
})->name('productline.index');

Route::get('/admin/sanpham', function () {
    return view('admin.pages.table.listproduct');
})->name('product.index');

