<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HarapanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Sa'ad Fauzi",
        "nim" => "201953134"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Kontak",
        "desc" => "Nomor Kontak Whatsapp",
        "link" => "https://wa.me/6285875891806?text=Hay%20kamu%20mendapat%20undian%20sebesar%20100jt%20rupiah"
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{slug}', [BeritaController::class, 'show']);

Route::get('/harapan', [HarapanController::class, 'index']);

Route::get('/harapan/{slug}', [HarapanController::class, 'show']);