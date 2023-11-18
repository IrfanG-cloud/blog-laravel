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

<<<<<<< Updated upstream

Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::post('posts', 'App\Http\Controllers\AuthController@login');
Route::group(['middleware' => 'auth:api'], function () {


Route::group(['middleware' => 'auth:api'], function () {
=======
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('user', 'App\Http\Controllers\UserController@user');
    Route::put('users/info', 'App\Http\Controllers\UserController@updateInfo');
    Route::put('users/password', 'App\Http\Controllers\UserController@updatePassword');

>>>>>>> Stashed changes
    Route::apiResource('users', 'App\Http\Controllers\UserController');
    Route::apiResource('posts', 'App\Http\Controllers\PostController');
    Route::apiResource('comments', 'App\Http\Controllers\CommentController');
    Route::apiResource('medias', 'App\Http\Controllers\MediaController');
    Route::apiResource('tags', 'App\Http\Controllers\TagController');
    Route::apiResource('roles', 'App\Http\Controllers\RoleController');
    Route::apiResource('categories', 'App\Http\Controllers\CategoryController');
<<<<<<< Updated upstream
=======
    Route::apiResource('permissions', 'App\Http\Controllers\PermissionController')->only('index');
>>>>>>> Stashed changes

});


// ------------ post Api -------------//
// Route::get('posts', 'App\Http\Controllers\PostController@index');
// Route::get('posts/{id}', 'App\Http\Controllers\PostController@show');
// Route::post('posts', 'App\Http\Controllers\PostController@store');
// Route::put('posts/{id}', 'App\Http\Controllers\PostController@update');
// Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destroy');

