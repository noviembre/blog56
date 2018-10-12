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

Route::get('/', 'PublicController@index')->name('welcome');

Route::namespace('Admin')->prefix('admin')->group(function (){
    Route::get('users', 'UsersController@listUsers');

    Route::get('posts', function (){

        return route('welcome');
    });
});
