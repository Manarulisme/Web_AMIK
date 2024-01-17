<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\publik\FrontController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SlideshowController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
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
    return view('pages.beranda');
});


Route::get('/', [FrontController::class,'index']);
Route::get('/headline/{slug}', [FrontController::class, 'show']);


// Jalur Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Jalur Route Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Jalur Route Dashboard/Post
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard/posts', PostController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [PostController::class, 'checkSlug']);
Route::get('dashboard/posts/{slug}', 'PostController@show')->name('post.by.slug');

// Jalur Route Dashboard/Kategori
Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');
// Route::get('/dashboard/kategoris', [KategoriController::class,'index'])->name('kategori');

// Jalur Route Dashboard/slideshow
Route::resource('/dashboard/slideshow', SlideshowController::class)->middleware('auth');

// Jalur Route Dashboard/slideshow
Route::resource('/dashboard/agendaterdekat', AgendaController::class)->middleware('auth');

// Jalur Route Tentang AMIK
Route::get('/sambutan-direktur', [FrontController::class, 'sambutan']);
Route::get('/visi-misi', [FrontController::class, 'visimisi']);
Route::get('/struktur-organisasi', [FrontController::class, 'struktur']);
Route::get('/fasilitas', [FrontController::class, 'fasilitas']);
Route::get('/jurusan', [FrontController::class, 'jurusan']);
Route::get('/kurikulum', [FrontController::class, 'kurikulum']);
Route::get('/matakuliah', [FrontController::class, 'matakuliah']);
Route::get('/biayakuliah', [FrontController::class, 'biayakuliah']);
Route::get('/staff-pengajar', [FrontController::class, 'staffpengajar']);
Route::get('/allposts', [FrontController::class, 'allposts']);
Route::get('/allagendas', [FrontController::class, 'allagendas']);

// show slug
Route::get('/post/{post:slug}', [FrontController::class, 'show']);
Route::get('/agendaterdekat/{agenda:slug}', [FrontController::class, 'ShowAgenda']);

// show from objeks
Route::get('/staffposts', [FrontController::class, 'staffposts']);
Route::get('/mhsposts', [FrontController::class, 'mhsposts']);
Route::get('/alumniposts', [FrontController::class, 'alumniposts']);
Route::get('/mitraposts', [FrontController::class, 'mitraposts']);
Route::get('/pengunjungposts', [FrontController::class, 'pengunjungposts']);
Route::get('/kontak', [FrontController::class, 'kontak']);

