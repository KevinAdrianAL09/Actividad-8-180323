<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\SuperheroController@index');
Route::get('/create', 'App\Http\Controllers\SuperheroController@create');
Route::post('/', 'App\Http\Controllers\SuperheroController@store');
Route::get('/{id}', 'App\Http\Controllers\SuperheroController@show');
Route::get('/{id}/edit', 'App\Http\Controllers\SuperheroController@edit');
Route::put('/{id}', 'App\Http\Controllers\SuperheroController@update');
Route::delete('/{id}', 'App\Http\Controllers\SuperheroController@destroy');



Route::get('/', function () {
    return view('welcome');
});
