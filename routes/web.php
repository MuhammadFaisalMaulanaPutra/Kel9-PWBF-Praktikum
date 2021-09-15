<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Controller
Route::get('tumbuhan', 'App\Http\Controllers\TumbuhanController@index');

// View
Route::get('/tumbuhan', function () {
    return view('tumbuhan');
});