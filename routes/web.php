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
    Route::get('/sewa-detail', 'HomeController@store')->name('sewa.detail');

    //Hendy
    Route::get('/sewa', 'SewaController@index')->name('frontend.sewa.index');

    // Ika
    // Route::get('/promotion', 'SewaController@index');
});

// Route Backend
Route::group(['prefix' => '/admin', 'namespace' => 'Backend'], function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('bhome.index');
    Route::get('/home', 'HomeController@show')->name('bhome.show');

    // Hendy
    Route::get('/sewa', 'SewaController@show')->name('backend.sewa.index');
    Route::get('/sewa-data-property', 'SewaController@index')->name('backend.sewa-data-property.index');
    Route::get('/sewa-data-property/create', 'SewaController@create')->name('backend.sewa-data-property.create');
    Route::post('/sewa-data-property', 'SewaController@store')->name('backend.sewa-data-property.store');
    Route::get('/sewa-data-property/{sewa-data-property}', 'SewaController@show')->name('backend.sewa-data-property.show');
    Route::get('/sewa-data-property/{sewa-data-property}/edit', 'SewaController@edit')->name('backend.sewa-data-property.edit');
    Route::put('/sewa-data-property/{sewa-data-property}', 'SewaController@update')->name('backend.sewa-data-property.update');
    Route::delete('/sewa-data-property/{sewa-data-property}', 'SewaController@destroy')->name('backend.sewa-data-property.destroy');

    // Ika
    // Route::get('/promotion', 'PromotionController@index');
});

// namespace App\Http\Controllers\Frontend;

// namespace App\Http\Controllers\Backend;