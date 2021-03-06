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

Route::get('/', function () {
    return view('layouts.front');
});
Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/kontak', function () {
    return view('frontend.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
    // Route diisi disini...

Route::resource('/kategoris','KategoriController');
Route::resource('/galeris','GaleriController');
Route::resource('/sukses','SuksesBookingController');
Route::post('sukses/{publish}', 'SuksesBookingController@Publish')->name('sukses.publish');
Route::post('galeris/{publish}', 'GaleriController@Publish')->name('galeris.publish');
Route::resource('/fortopolios','FortopolioController');
Route::resource('/userr','UserrController');
Route::resource('/booking','BookingController');

Route::post('booking/{publish}', 'BookingController@Publish')->name('booking.publish');
Route::resource('/barangs','BaranggController');
Route::resource('/pinjam','PinjamController');
Route::resource('/kembali','KembaliBookingController');
Route::resource('/harga','HargaController');
Route::resource('/pengembalian','KembaliController');
Route::resource('/kategoribarangs','KategoribarangController');
Route::resource('/testi','TestiController');
Route::get('image','ImageController@index');
Route::post('image-submit','ImageController@store');
Route::resource('/youtube','YoutubeController');
Route::resource('form','FormController');
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::post('settings/profile', 'SettingsController@updateProfile');
Route::get('/pinjam/report/{view_type}', 'PinjamController@PDF');
Route::get('/pengembalian/report/{view_type}', 'KembaliController@PDF');
Route::get('export/books', [
    'as' => 'export.books',
    'uses' => 'PinjamController@export'
    ]);
// });


Route::resource('index','FrontController');
Route::get('/galleri','FrontController@galleri')->name('galleri');
Route::get('/kategori','FrontController@kategori')->name('kategori');
Route::get('/fortopolio','FrontController@fortopolio')->name('fortopolio');
Route::get('/barang','FrontController@barang')->name('barang');
Route::get('/testimonis','FrontController@testimonis')->name('testimonis');

Route::get('/kategori_galery/{id}','FrontController@filter_galery');
Route::get('/kategori_fortopolio/{id}','FrontController@filter_fortopolio');
Route::get('/kategori_barang/{id}','FrontController@filter_barang');
Route::get('/fortopolios/single/{fortopolios}', 'FrontController@single')->name('single');



