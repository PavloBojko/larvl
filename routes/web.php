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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

Route::get('/', 'imageController@index');
Route::get('/about', 'homController@about');
Route::get('/info', 'homController@info');
Route::get('/create', 'imageController@create');
Route::get('/show/{id}', 'imageController@show');
Route::get('/edit/{id}', 'imageController@edit');
Route::post('/stor', 'imageController@stor');
Route::post('/update/{id}', 'imageController@update');
Route::get('/delate/{id}', 'imageController@delate');
