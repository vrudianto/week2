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
	$tanggal = date("d-m-Y H:i:s", time());
	$gini = "ya gitu";
    return view('welcome')
    ->with('tanggal', $tanggal)
    ->with('gini', $gini);
});
Route::get('halo', function () {
    return view('halo');
});
Route::get('halo/bebas', function () {
    return view('terserah.bebas');
});
Route::get('bebas', function () {
    return view('terserah.bebas');
});
