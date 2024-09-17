<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('home' , 'product_createController@home')->name('home');


Route::get('product_create' , 'product_createController@product_create')->name('product_create');

Route::get('product_store' , 'product_createController@product_store')->name('product_store');

Route::get('product_view' , 'product_createController@product_view')->name('product_view');

Route::get('product_edit/{id}' , 'product_createController@product_edit')->name('product_edit');

Route::get('product_update' , 'product_createController@product_update')->name('product_update');


Route::get('product_del/{id}' , 'product_createController@product_del')->name('product_del');
















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
