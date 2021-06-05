<?php

use Illuminate\Support\Facades\Route;


Route::get('sekolah', function () {
    return view('testing2');
})->name('home')->middleware('auth');



//Contoh Pemanggilan Beberapa Route Auth
Route::get('/login', 'Auth\LoginController@index')->name('login.home');
Route::post('/login', 'Auth\LoginController@submitLogin')->name('login.submit');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@index')->name('register.home');
Route::post('/register', 'Auth\RegisterController@create')->name('register.create');


//Contoh Pemanggilan Beberapa Route USER
Route::get('/', 'UserController@index')->name('dashboard')->middleware('auth');


//Contoh Pemanggilan Beberapa Route Manjement view Form Pemetaan ADMIN
Route::get('/data-pemetaan', 'PemetaanController@dataIndex')->name('view-pemetaan');
Route::get('/jenis-pemetaan', 'PemetaanController@dataJenis')->name('view-jenis-pemetaan');
Route::get('/add-pemetaan', 'PemetaanController@dataAdd')->name('view-add-pemetaan');
Route::get('/edit-pemetaan', 'PemetaanController@editView')->name('view-edit-pemetaan');



//Contoh Pemanggilan Beberapa Route || Penambahan Potensi Desa Oleh Admin
Route::post('/umkm/store', 'Pemetaan\AddController@umkmStore')->name('umkm.store');
Route::post('/sekolah/store', 'Pemetaan\AddController@sekolahStore')->name('sekolah.store');
Route::post('/ibadah/store', 'Pemetaan\AddController@ibadahStore')->name('ibadah.store');


//Contoh Pemanggilan Beberapa Route || Edit Potensi Desa Oleh Admin
Route::post('/edit/icon/{id}', 'Pemetaan\EditController@editIcon');

//Contoh Pemanggilan Beberapa Route || Detail Potensi Desa Oleh Admin
Route::get('sekolah{id}', 'Pemetaan\EditController@detailSekolah');
Route::post('update{id}', 'Pemetaan\EditController@updateSekolah');

Route::get('umkm{id}', 'Pemetaan\EditController@detailUmkm');
Route::post('umkm{id}', 'Pemetaan\EditController@updateUmkm');


//Contoh Pemanggilan Beberapa Route || Delete Potensi Desa Oleh Admin
Route::get('/delete/umkm/{id}', 'Pemetaan\EditController@deleteUmkm');
Route::get('/delete/sekolah/{id}', 'Pemetaan\EditController@deleteSekolah');
Route::get('/delete/ibadah/{id}', 'Pemetaan\EditController@deleteIbadah');






Route::get('/data-marker', 'PemetaanController@dataMarker')->name('data-marker');
