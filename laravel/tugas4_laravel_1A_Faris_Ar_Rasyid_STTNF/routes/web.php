<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('products', ProductController::class);
Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/dashboard', function () {
    //return view('welcome');
    return view('layouts_2.home');
});

Route::get('/', function () {
    //return view('welcome');
    return view('layouts.home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/services', function () {
    return view('layouts.accomodation');
});

Route::get('/rooms', function () {
    return view('layouts.gallery');
});

Route::get('/blog', function () {
    return view('layouts.blog');
});

Route::get('/elements', function () {
    return view('layouts.elements');
});


Route::get('/contact', function () {
    return view('layouts.contact');
});


Route::get('/salam', function () {
    return "<marquee><h1>Assalamu'alaikum Sobat, Semangat Belajar Laravel Framework</h1></marquee>";
});

Route::get('/mahasiswa/{nama}/{kampus}', function ($nama,$kampus) {
    return 'Nama: '.$nama.'<br/>Kampus: '.$kampus;
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/kabar2', function () {
    return view('kondisi2');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/daftarnilai', function () {
    return view('daftarnilai');
});

Route::get('/daftarpegawai', function () {
    return view('daftarpegawai');
});
