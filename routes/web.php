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

        Route::get('/profile', 'ProfileController@profile');
        Route::patch('/profile/update/1', 'ProfileController@updateProfile');
        Route::get('visi', 'ProfileController@visi');
        Route::patch('/visi/update/1', 'ProfileController@updateVisi');
        Route::get('misi', 'ProfileController@misi');
        Route::patch('/misi/update/1', 'ProfileController@updateMisi');

        Route::get('banner', 'BannerController@index');
        Route::post('banner/create', 'BannerController@create');
        Route::delete('banner/hapus/{id}', 'BannerController@hapus')->name('admin/banner/hapus');

        Route::get('proyek', 'ProyekController@index');
        Route::get('proyek/create', 'ProyekController@create');
        Route::post('proyek/create', 'ProyekController@postCreate');

        Route::get('galeri', 'GaleriController@index');
        Route::get('galeri/create', 'GaleriController@create');
        Route::post('galeri/create', 'GaleriController@postCreate');

        Route::get('kontak', 'KontakController@index');
        Route::patch('/kontak/update/1', 'KontakController@updateKontak');

        Route::get('bantuan', 'BantuanController@index');
    });
});
