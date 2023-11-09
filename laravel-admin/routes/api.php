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

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::put('users/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy');


// ------------ post Api -------------//
Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('posts/{id}', 'App\Http\Controllers\PostController@show');
Route::post('posts', 'App\Http\Controllers\PostController@store');
Route::put('posts/{id}', 'App\Http\Controllers\PostController@update');
Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destroy');


// ------------ comments Api -------------//
Route::get('comments', 'App\Http\Controllers\CommentController@index');
Route::get('comments/{id}', 'App\Http\Controllers\CommentController@show');
Route::post('comments', 'App\Http\Controllers\CommentController@store');
Route::put('comments/{id}', 'App\Http\Controllers\CommentController@update');
Route::delete('comments/{id}', 'App\Http\Controllers\CommentController@destroy');



// ------------ media Api -------------//
Route::get('medias', 'App\Http\Controllers\MediaController@index');
Route::get('medias/{id}', 'App\Http\Controllers\MediaController@show');
Route::post('medias', 'App\Http\Controllers\MediaController@store');
Route::put('medias/{id}', 'App\Http\Controllers\MediaController@update');
Route::delete('medias/{id}', 'App\Http\Controllers\MediaController@destroy');

// Route::apiResource('users', 'App\Http\Controllers\UserController');

