<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "admin" middleware group. Enjoy building your Admin!
|
*/

Route::group(['namespace' => 'Admin', 'middleware' => ['web']], function () {
    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/', 'HomeController@index');
});
