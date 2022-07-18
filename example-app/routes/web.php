<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalan_controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\StaffController;


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

Route::get('/welcome', function () {
    echo "<center>";
    echo "<u>Hello semuanya, apa kabar?</u><br>";
    echo "<u>Pada kali ini kita sedang belajar route basic</u>";
    echo "</center>";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/page1', function () {
    return view('page1.index');
});

Route::get('/page2', function () {
    return view('page2.index');
});

//route basic
Route::get('/page3', function () {
    return view('page3.index');
});

// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}/', function ($nama, $umur, $alamat, $jenis_kelamin, $hobby) {
     return view('page1.biodata', compact('nama', 'umur', 'alamat', 'jenis_kelamin', 'hobby'));
});

// route optional parameter
Route::get('/pesanan/{minuman?}', function ($minuman = 'kosong') {
    return view('page1.pesanan', compact('minuman'));

});

Route::get('/bangunan/{material}/{material1}/', function ($material = 'kosong', $material1 = 'kosong'){
    return view('page1.bangunan', compact('material', 'material1'));

});

Route::get('/pengenalan', [App\Http\Controllers\pengenalan_controller::class, 'pengenalan']);

// controller dinamis
Route::get('/intro/{nama}/{alamat}/{umur}', [pengenalan_controller::class, 'intro']);

Route::get('/siswa', [pengenalan_controller::class, 'siswa']);

Route::get('/menu', [LatihanController::class,'menu']);

Route::get('/dosen', [LatihanController::class, 'dosen']);

Route::get('/tv', [LatihanController::class, 'tv']);

Route::get('/belanja', [LatihanController::class, 'belanja']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/staffbranch', [StaffBranchController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);