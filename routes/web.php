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
    return view('pages.homepage');
});
Route::get('anggota', 'UserController@anggota');
Route::get('buku', 'BookController@Book');
Route::get('create/buku', function(){
    return view('buku.create');
});
Route::get('edit/buku/{id}', 'BookController@edit');
Route::get('pinjam', 'PinjamController@index');
Route::get('create/pinjam', 'PinjamController@pinjam');



