<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedungController;

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
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

//---------route admin------------
Route::view('/admin', 'admin.home');
Route::view('/admin/pages/basictable', 'admin.pages.basictable');
Route::view('/admin/pages/basicelement', 'admin.pages.basicelement');
Route::view('/admin/pages/chart', 'admin.pages.chart');
Route::view('/admin/pages/icons', 'admin.pages.icons');

//-------route bisnis proses----------
Route::resource('gedung', GedungController::class);
Route::get('/gedung-list', [GedungController::class,'gedungList']);