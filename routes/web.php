<?php

use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
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
Route::get('/user-profile', 'UserController@edit')->name('user-profile-form');

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






Route::get('/data-marker', 'PemetaanController@dataMarker')->name('view-edit-pemetaan');
