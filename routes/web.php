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
    Route::get('/sewa', 'SewaController@index')->name('sewa.index');
    
    // Ika
    // Route::get('/promotion', 'SewaController@index');
});

// Route Backend
Route::group(['prefix' => '/admin', 'namespace' => 'Backend'], function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('bhome.index');
    Route::get('/home', 'HomeController@show')->name('bhome.show');
    Route::get('/form-property', 'HomeController@showForm')->name('bform.show');
    Route::get('/tipe-property', 'HomeController@showTipe')->name('btipe.show');

    Route::get('/form-tipe', 'HomeController@addTipeProperty')->name('bform.tipe');
    Route::post('/add-property', 'HomeController@addProperty')->name('badd.property');

    // Route::get('/detail-property/{data}', 'propertyController@detailproperty')->name('detail.property');
    // Route::delete('/delete/{property}', 'propertyController@deleteproperty')->name('delete.property');

    // Route::get('/edit-property/{property}/edit', 'propertyController@editproperty')->name('edit.property');
    // Route::put('/edit-property/{data}', 'propertyController@updateproperty')->name('update.property');

    // Route::get('/property/cari','propertyController@searchproperty')->name('search.property');

    // Hendy
    // Route::get('/sewa', 'SewaController@show');

    // Ika
    // Route::get('/promotion', 'PromotionController@index');
});