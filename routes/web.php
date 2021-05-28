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

//Contoh Pemanggilan Beberapa Route Manjement Pemetaan USER
Route::get('/data-pemetaan', 'PemetaanController@dataIndex')->name('data-pemetaan');
Route::get('/jenis-pemetaan', 'PemetaanController@dataJenis')->name('data-jenis-pemetaan');
Route::get('/add-pemetaan', 'PemetaanController@dataAdd')->name('data-add-pemetaan');


// //Riwayat Kesehatan Anggota Keluarga User
// Route::prefix('keluarga')->namespace('User\Auth')->group(function(){
//     Route::get('/anak', 'RiwayatKeluargaController@keluargaAnak')->name('Keluarga Anak');
//     Route::get('/ibu', 'RiwayatKeluargaController@keluargaIbu')->name('Keluarga Ibu');
//     Route::get('/lansia', 'RiwayatKeluargaController@keluargaLansia')->name('Keluarga Lansia');
//     Route::prefix('riwayat')->group(function(){
//         Route::get('/detail/anak', 'RiwayatKeluargaController@riwayatKeluargaAnak')->name('Riwayat Keluarga Anak');
//         Route::get('/detail/ibu', 'RiwayatKeluargaController@riwayatKeluargaIbu')->name('Riwayat Keluarga Ibu');
//         Route::get('/detail/lansia', 'RiwayatKeluargaController@riwayatKeluargaLansia')->name('Riwayat Keluarga Lansia');
//     });
// });
