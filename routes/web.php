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

// Route Frontend
Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/sewa', 'HomeController@show')->name('sewa.show');
    Route::get('/sewa-detail', 'HomeController@store')->name('sewa.detail');

    // Ika
    // Route::get('/promotion', 'SewaController@index');
});

// Route Backend
Route::group(['prefix' => '/admin', 'namespace' => 'Frontend'], function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('home.index');

    // Ika
    // Route::get('/promotion', 'SewaController@index');
});