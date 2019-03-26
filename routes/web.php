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

Auth::routes(['verify' => true]);


Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(
    function () {
    Route::get('/', 'ShowController@welcome')->name('welcome');

    Route::get('catalog', 'ShowController@catalog')->name('catalog');
    Route::get('news', 'ShowController@news')->name('news');
    Route::get('news/{id}', 'ShowController@newsShow')->name('news.show');
    Route::get('about', 'ShowController@about')->name('about');
    Route::get('contacts', 'ShowController@contacts')->name('contacts');
    Route::get('product/{id}', 'ShowController@product')->name('product');
    Route::get('faq', 'ShowController@faq')->name('faq');
    Route::get('delivery', 'ShowController@delivery')->name('delivery');
    Route::get('profile', 'ShowController@profile')->name('profile');

});