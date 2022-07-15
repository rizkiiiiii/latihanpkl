<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
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
Route::get('about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Rizki";
    return view('pages/profile', compact('nama'));
});

Route::get('latihan1', function () {
    $nama = "Rizki";
    $umur = "17 tahun 4bulan 8hari";
    $alamat = "Jln Cibaduyut Raya";
    $kota = "Bandung";
    $hobby = "Tidur";
    return view('pages/latihan1', compact('nama', 'umur', 'alamat', 'kota', 'hobby'));
});
// ROUTE PARAMETER

Route::get('biodata/{nama}', function ($a) {
    return view('pages/biodata', compact('a'));
});
Route::get('makanan/{makanan}/{minuman}/{harga}', function ($makanan, $minuman, $harga) {
    return view('pages/makanan', compact('makanan', 'minuman', 'harga'));
});

//ROUTE OPTIONAL PARAMETER

Route::get('pesan/{menu?}', function ($a = "-") {
    return view('pages/pesan', compact('a'));

});

//Latihan Route 2

// Route::get('latihan2/{makanan?}/{minuman?}/{cemilan?}', function ($a = "Silahkan Memesan terlebih Dahulu", $b = "Silahkan Memesan Terlebih Dahulu", $c = "Silahkan memesan terlebih dahulu") {
//     return view('pages/latihan2', compact('a', 'b', 'c'));
// });
Route::get('latihan2/{a?}/{b?}{c?}', function ($a = "Silahkan Pesan Terlebih Dahulu", $b = null, $c = null) {
    return view('pages/latihan2', compact('a', 'b', 'c'));
});

Route::get('perkenalan', [LatihanController::class, 'perkenalan']);

Route::get('perkenalan/{nama}/{alamat}/{umur}', [LatihanController::class, 'perkenalan']);
Route::get('siswa', [LatihanController::class, 'siswa']);
Route::get('mahasiswa', [LatihanController::class, 'mahasiswa']);
Route::get('televisi', [LatihanController::class, 'televisi']);
Route::get('shop',[LatihanController::class,'shop']);

//Route Post
Route::get('post',[PostController::class,'tampil']);