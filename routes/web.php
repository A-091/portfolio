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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//問合せ
Route::group(['prefix' => 'contact'], function () {
    //入力ページ
    Route::get('/', 'ContactController@index')->name('contact.index');
    //確認ページ
    Route::post('/confirm', 'ContactController@confirm')->name('contact.confirm');
    //送信完了ページ
    Route::post('/thanks', 'ContactController@send')->name('contact.send');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::get('home', 'HomeController@index');
    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::get('home', 'HomeController@index');
    });
});
//ニュース記事
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete');
    
});
Route::get('/news', 'NewsController@index');
//admin top
Route::group(['prefix' => 'admin'], function() {
    Route::get('top/create', 'Admin\TopController@add');
    Route::post('top/create', 'Admin\TopController@create');
});
//顧客
Route::group(['prefix' => 'admin'], function() {
    Route::get('customer', 'Admin\CustomerController@add');
    Route::post('customer/create', 'Admin\CustomerController@create');
});
