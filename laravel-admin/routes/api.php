<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('users', 'App\Http\Controllers\UserController@index');
// Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
// Route::post('users', 'App\Http\Controllers\UserController@store');
// Route::put('users/{id}', 'App\Http\Controllers\UserController@update');
// Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy');



// Route::get('posts', 'App\Http\Controllers\PostController@index');

Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user', 'App\Http\Controllers\UserController@user');
    Route::put('users/info', 'App\Http\Controllers\UserController@updateInfo');
    Route::put('users/password', 'App\Http\Controllers\UserController@updatePassword');

    Route::apiResource('roles', 'App\Http\Controllers\RoleController');
    Route::apiResource('users', 'App\Http\Controllers\UserController');
});
