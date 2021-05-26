<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->name('home');


//Contoh Pemanggilan Beberapa Route Auth
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@submitLogin')->name('login.submit');
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@create')->name('register.submit');





//Penyuluhan Contoh Pemanggilan Beberapa dari Route
// Route::get('/admin/penyuluhan/home', 'PenyuluhanController@index')->name('penyuluhan.home');
// Route::get('/admin/penyuluhan/create', 'PenyuluhanController@create')->name('penyuluhan.create');
// Route::post('/admin/penyuluhan/store', 'PenyuluhanController@store')->name('penyuluhan.store');
// Route::get('/admin/penyuluhan/show/{id}', 'PenyuluhanController@show')->name('penyuluhan.show');
// Route::post('/admin/penyuluhan/update/{id}', 'PenyuluhanController@update')->name('penyuluhan.update');
// Route::get('/admin/penyuluhan/get-img/{id}', 'PenyuluhanController@getImage')->name('penyuluhan.get_img');
// Route::post('/admin/penyuluhan/delete', 'PenyuluhanController@delete')->name('penyuluhan.delete');


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
