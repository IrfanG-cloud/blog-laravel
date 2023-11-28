<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::get('/greeting', function () {
    return 'Hello World';
});
Route::group(['middleware' => 'auth:api'], function () {

    Route::get('user', 'App\Http\Controllers\UserController@user');
    Route::put('users/info', 'App\Http\Controllers\UserController@updateInfo');
    Route::put('users/password', 'App\Http\Controllers\UserController@updatePassword');
});
