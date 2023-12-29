<?php

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('Admin_pages.Post_page.Post.index_post');
// });

Route::resource('/dashboard/posts', PostController::class);

Route::get('/', [PostController::class,'index']);


Route::get('/dashboard/posts/checkSlug', [PostController::class, 'checkSlug']);
