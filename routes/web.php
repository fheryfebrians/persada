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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::post('/kontak-form', 'HomeController@addKontak');
    Route::get('/proyek', 'HomeController@proyek');
    
    Route::group(['prefix' => 'tentang'], function () {
        Route::get('tulangan', 'TentangController@tulangan');
        Route::get('produksi', 'TentangController@produksi');
        Route::get('finishing', 'TentangController@finishing');
        Route::get('utpabrik', 'TentangController@utpabrik');
    });

    Route::group(['prefix' => 'galeri'], function () {
        Route::get('tulangan', 'GaleriController@tulangan');
        Route::get('produksi', 'GaleriController@produksi');
        Route::get('finishing', 'GaleriController@finishing');
        Route::get('utpabrik', 'GaleriController@utpabrik');
        Route::get('k3', 'GaleriController@k3');
    });
});


Route::namespace('Backend')->group(function () {
	Route::group(['prefix' => 'admin'], function () {
        Route::get('/home', 'HomeController@index');
        
        Route::get('/new', 'AdminController@index');
        Route::get('new/create', 'AdminController@create');
        Route::post('new/create', 'AdminController@postCreate');
        Route::post('new/delete/{id}', 'AdminController@delete');

        Route::get('/profile', 'ProfileController@profile');
        Route::patch('/profile/update/1', 'ProfileController@updateProfile');
        Route::get('visi', 'ProfileController@visi');
        Route::patch('/visi/update/1', 'ProfileController@updateVisi');
        Route::get('misi', 'ProfileController@misi');
        Route::post('misi/create', 'ProfileController@addMisi');
        Route::post('misi/delete/{id}', 'ProfileController@deleteMisi');

        Route::get('banner', 'BannerController@index');
        Route::post('banner/create', 'BannerController@create');
        Route::post('banner/delete/{id}', 'BannerController@delete');

        Route::get('page-banner', 'PageBannerController@index');
        Route::post('page-banner/create', 'PageBannerController@create');
        Route::post('page-banner/delete/{id}', 'PageBannerController@delete');

        Route::get('proyek', 'ProyekController@index');
        Route::get('proyek/create', 'ProyekController@create');
        Route::post('proyek/create', 'ProyekController@postCreate');
        Route::post('proyek/delete/{id}', 'ProyekController@delete');

        Route::get('galeri', 'GaleriController@index');
        Route::get('galeri/create', 'GaleriController@create');
        Route::post('galeri/create', 'GaleriController@postCreate');
        Route::post('galeri/delete/{id}', 'GaleriController@delete');

        Route::get('kontak', 'KontakController@index');
        Route::patch('/kontak/update/1', 'KontakController@updateKontak');

        Route::get('bantuan', 'BantuanController@index');

        Route::get('tentang/tulangan', 'TentangController@tulangan');
        Route::post('tentang/tulangan/create', 'TentangController@addTulangan');
        Route::post('tentang/tulangan/delete/{id}', 'TentangController@deleteTulangan');

        Route::get('tentang/produksi', 'TentangController@produksi');
        Route::post('tentang/produksi/create', 'TentangController@addProduksi');
        Route::post('tentang/produksi/delete/{id}', 'TentangController@deleteProduksi');

        Route::get('tentang/finishing', 'TentangController@finishing');
        Route::post('tentang/finishing/create', 'TentangController@addFinishing');
        Route::post('tentang/finishing/delete/{id}', 'TentangController@deleteFinishing');

        Route::get('tentang/utpabrik', 'TentangController@utpabrik');
        Route::post('tentang/utpabrik/create', 'TentangController@addUtpabrik');
        Route::post('tentang/utpabrik/delete/{id}', 'TentangController@deleteUtpabrik');
    });
});
