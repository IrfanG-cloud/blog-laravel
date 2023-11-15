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

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('users', 'App\Http\Controllers\UserController');
    Route::apiResource('posts', 'App\Http\Controllers\Controller');
    Route::apiResource('comments', 'App\Http\Controllers\CommentController');
    Route::apiResource('medias', 'App\Http\Controllers\MediaController');
    

});



// ------------ post Api -------------//
// Route::get('posts', 'App\Http\Controllers\PostController@index');
// Route::get('posts/{id}', 'App\Http\Controllers\PostController@show');
// Route::post('posts', 'App\Http\Controllers\PostController@store');
// Route::put('posts/{id}', 'App\Http\Controllers\PostController@update');
// Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destroy');

