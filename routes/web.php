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
    Route::get('/sewa', 'SewaController@index')->name('backend.sewa.index');
    Route::get('/sewa-data-property/create', 'SewaController@createSewaDataProperty')->name('backend.sewa-data-property.create');
    // Route::post('/sewa-data-property', 'SewaController@storeSewaDataProperty')->name('backend.sewa-data-property.store');
    // Route::get('/sewa-data-property/{sewa-data-property}', 'SewaController@showSewaDataProperty')->name('backend.sewa-data-property.show');
    // Route::get('/sewa-data-property/{sewa-data-property}/edit', 'SewaController@editSewaDataProperty')->name('backend.sewa-data-property.edit');
    // Route::put('/sewa-data-property/{sewa-data-property}', 'SewaController@updateSewaDataProperty')->name('backend.sewa-data-property.update');
    // Route::delete('/sewa-data-property/{sewa-data-property}', 'SewaController@destroySewaDataProperty')->name('backend.sewa-data-property.destroy');

    Route::get('/kategori-fasilitas/create', 'SewaController@createKategoriFasilitas')->name('backend.kategori-fasilitas.create');
    // Route::post('/kategori-fasilitas', 'SewaController@storeKategoriFasilitas')->name('backend.kategori-fasilitas.store');
    // Route::get('/kategori-fasilitas/{kategori-fasilitas}', 'SewaController@showKategoriFasilitas')->name('backend.kategori-fasilitas.show');
    // Route::get('/kategori-fasilitas/{kategori-fasilitas}/edit', 'SewaController@editKategoriFasilitas')->name('backend.kategori-fasilitas.edit');
    // Route::put('/kategori-fasilitas/{kategori-fasilitas}', 'SewaController@updateKategoriFasilitas')->name('backend.kategori-fasilitas.update');
    // Route::delete('/kategori-fasilitas/{kategori-fasilitas}', 'SewaController@destroyKategoriFasilitas')->name('backend.kategori-fasilitas.destroy');

    Route::get('/kategori-building/create', 'SewaController@createKategoriBuilding')->name('backend.kategori-building.create');
    // Route::post('/kategori-building', 'SewaController@storeKategoriBuilding')->name('backend.kategori-building.store');
    // Route::get('/kategori-building/{kategori-building}', 'SewaController@showKategoriBuilding')->name('backend.kategori-building.show');
    // Route::get('/kategori-building/{kategori-building}/edit', 'SewaController@editKategoriBuilding')->name('backend.kategori-building.edit');
    // Route::put('/kategori-building/{kategori-building}', 'SewaController@updateKategoriBuilding')->name('backend.kategori-building.update');
    // Route::delete('/kategori-building/{kategori-building}', 'SewaController@destroyKategoriBuilding')->name('backend.kategori-building.destroy');

    
    // Ika
    // Route::get('/promotion', 'PromotionController@index');
});

// namespace App\Http\Controllers\Frontend;

// namespace App\Http\Controllers\Backend;