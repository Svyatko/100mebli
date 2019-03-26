<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

Route::resource('fields', 'Admin\FieldController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('items', 'Admin\ItemController')->except('index', 'show');
Route::get('items/{category?}', 'Admin\ItemController@index')->name('items.index');
Route::delete('items/{id}/image-remove/', 'Admin\ItemController@imageRemove')->name('items.image_remove');