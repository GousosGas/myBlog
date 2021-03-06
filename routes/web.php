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

use Illuminate\Support\Facades\DB;
use App\Task;

/*Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');*/

Route::get('/','PostController@index');
Route::get('/posts','PostController@show');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');

