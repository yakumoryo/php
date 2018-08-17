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

Route::get('/', 'TimesController@index'); 

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('times', 'TimesController');
    Route::post('phpstore', 'TimesController@phpstore')->name('times.phpstore');
    
    
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('phptimes', 'UsersController@phptimes')->name('users.phptimes');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('phpedit', 'TimesController@phpedit')->name('times.phpedit');
        Route::put('phpupdate', 'TimesController@phpupdate')->name('times.update');
        Route::get('phpcreate', 'TimesController@phpcreate')->name('times.phpcreate');
        
        
        Route::put('phpstatuslesson1update1', 'TimesController@phpstatuslesson1update1')->name('times.unfinish');
        Route::put('phpstatuslesson1update2', 'TimesController@phpstatuslesson1update2')->name('times.finish');
    });
});
