<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api'], function () {
    Route::group([
        'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signUp');

        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            // routes of user authenticated
            Route::get('logout', 'AuthController@logout');
            Route::get('profile', 'AuthController@user');

            //routes for User Management
            Route::get('users', 'UsersController@index');
            Route::get('user/{user}', 'UsersController@show');
            Route::post('user', 'UsersController@store');
            Route::put('user/{user}', 'UsersController@update');
            Route::delete('user/{user}', 'UsersController@destroy');

            //routes for customers Management
            Route::get('customers', 'CustomerController@index');
            Route::get('customer/{customer}', 'CustomerController@show');
            Route::post('customer', 'CustomerController@store');
            Route::put('customer/{customer}', 'CustomerController@update');
            Route::delete('customer/{customer}', 'CustomerController@destroy');
        });
    });
});
