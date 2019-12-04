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
Route::group(['prefix' => 'report', 'as' => 'report.'], function () {
    Route::get('/', 'ReportsController@index')->name('index');
    Route::get('create', 'ReportsController@create')->name('create');
    Route::post('store', 'ReportsController@store')->name('store');
    Route::get('show/{id}', 'ReportsController@show')->name('show');
    Route::get('edit/{id}', 'ReportsController@edit')->name('edit');
    Route::PUT('update/{id}', 'ReportsController@update')->name('update');
    Route::get('destroy/{id}', 'ReportsController@destroy')->name('destroy');
});