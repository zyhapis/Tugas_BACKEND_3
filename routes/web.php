<?php

use Illuminate\Support\Facades\Route;

//Versi 2 Route Data Mahasiswa
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Salam
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

//Routing dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : ' . $nama . '<br>Departemen : ' . $divisi;
});

//Menambahkan Route /kabar
Route::get('/kabar', function () {
    return view('kondisi');
});

// //Versi 1
// //Route Data Mahasiswa
// Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@dataMahasiswa');

//Versi 2
//Route Data Mahasiswa
Route::get(
    '/mahasiswa',
    [MahasiswaController::class, 'dataMahasiswa']
);

//Pertemuan 3 BackENd


//Pertemuan 4 BackEnd

//Daftar Nilai Mahasantri
Route::get('/mahasantri', function () {
    return view('p3/data_mahasantri');
});


//Hello
Route::get('/hello', function () {
    return view('p4/hello', ['name' => 'Inaya']);
});

//Nilai
Route::get('/nilai', function () {
    return view('p4/nilai');
});

//Daftar Nilai
Route::get('/daftarnilai', function () {
    return view('p4/daftar_nilai');
});

//Index php
Route::get('/phpframework', function () {
    return view('p4/layouts.index');
});