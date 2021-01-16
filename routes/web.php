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

// Route::get('/', function () {
//     return view('welcome');
// });

// ika
// page promotion
// detail promotion

// indry
// edit home
// sewa


Route::prefix('/')->group(function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('home.index');

    // Ika
    // Route::get('/promotion', 'SewaController@index');
});

Route::prefix('/admin')->group(function () {
    // Indry
    // Route::get('/', 'HomeController@index')->name('home.index');

    // Ika
    // Route::get('/sewa', 'SewaController@index');
});