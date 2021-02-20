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
    Route::get('/sewa', 'HomeController@indexFrontendSewaDataProperty')->name('frontend.sewa.index');
    Route::get('/sewa-kategori-fasilitas', 'SewaController@indexFrontendKategoriFasilitas')->name('frontend.kategori-fasilitas.index');
    Route::get('/sewa-kategori-building', 'SewaController@indexFrontendKategoriBuilding')->name('frontend.kategori-building.index');

    // Ika
    Route::get('/promotion', 'PromotionController@promotion')->name('frontend.promotion.index');
});


// Route Backend
Route::group(['prefix' => '/admin', 'namespace' => 'Backend'], function () {
    // Indry
    Route::get('/', 'HomeController@index')->name('bhome.index');
    Route::get('/home', 'HomeController@show')->name('bhome.show');
    Route::get('/form-property', 'HomeController@showForm')->name('bform.show');
    Route::post('/add-property', 'HomeController@addProperty')->name('badd.property');

    Route::get('/tipe-property', 'HomeController@showTipe')->name('bform.tipe');
    Route::post('/add-tipe', 'HomeController@addTipeProperty')->name('badd.tipe');

    // Hendy
    Route::get('/sewa', 'SewaController@index')->name('backend.sewa.index');

    // // GAJADI PAKE // //
    // Route::get('/sewa-data-property', 'SewaController@indexBackendSewaDataProperty')->name('backend.sewa-data-property.index');
    // Route::get('/sewa-data-property/create', 'SewaController@createSewaDataProperty')->name('backend.sewa-data-property.create');
    // Route::post('/sewa-data-property', 'SewaController@storeSewaDataProperty')->name('backend.sewa-data-property.store');
    // Route::get('/sewa-data-property/{backendSewaDataProperty}', 'SewaController@showSewaDataProperty')->name('backend.sewa-data-property.show');
    // Route::get('/sewa-data-property/{backendSewaDataProperty}/edit', 'SewaController@editSewaDataProperty')->name('backend.sewa-data-property.edit');
    // Route::put('/sewa-data-property/{backendSewaDataProperty}', 'SewaController@updateSewaDataProperty')->name('backend.sewa-data-property.update');
    // Route::delete('/sewa-data-property/{sewa-data-property}', 'SewaController@destroySewaDataProperty')->name('backend.sewa-data-property.destroy');

    Route::get('/sewa-kategori-fasilitas', 'SewaController@indexBackendKategoriFasilitas')->name('backend.kategori-fasilitas.index');
    Route::get('/kategori-fasilitas/create', 'SewaController@createKategoriFasilitas')->name('backend.kategori-fasilitas.create');
    Route::post('/kategori-fasilitas', 'SewaController@storeKategoriFasilitas')->name('backend.kategori-fasilitas.store');
    Route::get('/kategori-fasilitas/{backendKategoriFasilitas}', 'SewaController@showKategoriFasilitas')->name('backend.kategori-fasilitas.show');
    Route::get('/kategori-fasilitas/{backendKategoriFasilitas}/edit', 'SewaController@editKategoriFasilitas')->name('backend.kategori-fasilitas.edit');
    Route::put('/kategori-fasilitas/{backendKategoriFasilitas}', 'SewaController@updateKategoriFasilitas')->name('backend.kategori-fasilitas.update');
    Route::delete('/kategori-fasilitas/{backendKategoriFasilitas}', 'SewaController@destroyKategoriFasilitas')->name('backend.kategori-fasilitas.destroy');

    Route::get('/sewa-kategori-building', 'SewaController@indexBackendKategoriBuilding')->name('backend.kategori-building.index');
    Route::get('/kategori-building/create', 'SewaController@createKategoriBuilding')->name('backend.kategori-building.create');
    Route::post('/kategori-building', 'SewaController@storeKategoriBuilding')->name('backend.kategori-building.store');
    Route::get('/kategori-building/{backendKategoriBuilding}', 'SewaController@showKategoriBuilding')->name('backend.kategori-building.show');
    Route::get('/kategori-building/{backendKategoriBuilding}/edit', 'SewaController@editKategoriBuilding')->name('backend.kategori-building.edit');
    Route::put('/kategori-building/{backendKategoriBuilding}', 'SewaController@updateKategoriBuilding')->name('backend.kategori-building.update');
    Route::delete('/kategori-building/{backendKategoriBuilding}', 'SewaController@destroyKategoriBuilding')->name('backend.kategori-building.destroy');

    
    // Ika
//     Route::get('/promotion', 'PromotionController@index')->name('backend.promotion.index');
});
