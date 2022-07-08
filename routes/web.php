<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//route basic
Route::get('about', function() {
    return view ('tentang');
});

Route::get('profile', function () {
    $nama = "Rizki";
    return view('pages/profile' , compact('nama'));
});

Route::get('latihan1', function () {
    $nama = "Rizki";
    $umur = "17 tahun 4bulan 8hari";
    $alamat = "Jln Cibaduyut Raya";
    $kota ="Bandung";
    $hobby = "Tidur";
    return view('pages/latihan1' , compact('nama','umur','alamat','kota','hobby'));
});
// ROUTE PARAMETER

Route::get('biodata/{nama}', function ($a) {
    return view('pages/biodata' , compact('a'));
});
Route::get('makanan/{makanan}/{minuman}/{harga}', function ($makanan,$minuman,$harga) {
    return view('pages/makanan' , compact('makanan','minuman','harga'));
});

//ROUTE OPTIONAL PARAMETER

Route::get('pesan/{menu?}',function ($a = "-"){
    return view('pages/pesan',compact('a'));

});