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
    return view('landinguserpage');
});

Auth::routes();
//ADMIN
Route::get('/home', 'HomeController@i')->name('home');
Route::get('/admin', function(){
    return view('auth/admin');
})->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::get('admin-logout','Auth\AdminLoginController@logout');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');
//USER
Route::get('upage/tentang', 'UserController@ab');
Route::get('upage/faq', 'UserController@fa');
Route::get('upage/carirs', 'UserController@cr');
Route::get('upage/caridokter', 'UserController@cd');
Route::post('reservasi', 'UserController@re');
Route::get('listpesan/{id}', 'UserController@dp');
Route::get('carirs/detailrs/{id_rs}', 'UserController@dr');
Route::get('cetakpdf/{id_pesan}', 'UserController@cp');
Route::get('caridokter/detaildok/{id_dokter}', 'UserController@dd');

//PESANAN
Route::get('listrev', 'AdminPesController@i');
Route::get('carirev', 'AdminPesController@cari');
//RS
Route::get('listrs', 'AdminRSController@g');
Route::get('tambahrs', 'AdminRSController@tambah');
Route::get('carirs', 'AdminRSController@cari');
Route::post('tambahrs/simpan', 'AdminRSController@simpan');
Route::get('rs/edit/{id_rs}', 'AdminRSController@edit');
Route::put('rs/update/{id_rs}', 'AdminRSController@update');
Route::get('rs/hapus/{id_rs}', 'AdminRSController@delete');

//DOKTER
Route::get('listdokter', 'AdminDokController@i');
Route::get('tambahdokter', 'AdminDokController@tambah');
Route::get('caridokter', 'AdminDokController@cari');
Route::post('tambahdokter/simpan', 'AdminDokController@simpan');
Route::get('dokter/edit/{id_dokter}', 'AdminDokController@edit');
Route::put('dokter/update/{id_dokter}', 'AdminDokController@update');
Route::get('dokter/hapus/{id_dokter}', 'AdminDokController@delete');