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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portofolio', 'App\Http\Controllers\PortofolioController@index');
Route::get('/overview', function () {
    return view('pages.overview');
});
Route::get('/about', 'App\Http\Controllers\AboutController@index');
