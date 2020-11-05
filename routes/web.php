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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('create/top', 'Admin\TopController@app');
    Route::post('create/top','Admin\TopController@create');
});
Route::group(['prefix' =>'contact'], function() {
    //入力ページ
    Route::get('/', 'ContactController@index')->name('contact.index');
    //確認ページ
    Route::post('/confirm','ContactController@confirm')->name('contact.confirm');
    //送信完了ページ
    Route::post('/thanks','ContactController@send')->name('contact.send');
});
