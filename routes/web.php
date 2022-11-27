<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use GuzzleHttp\Promise\Create;

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

Route::resource('post', PostController::class);

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/create', [PostController::class, 'create'])->name(('posts.create'));
// Route::get('/store', [PostController::class, 'store'])->name(('create'));

// Route::get('/', [PostController::class, 'index'])->name(('posts.index'));

// Route::get('/edit', [PostController::class, 'edit'])->name(('posts.edit'));
// Route::get('/store', [PostController::class, 'store'])->name(('create'));

// Route::get('/destsroy', [PostController::class, 'destroy'])->name(('posts.destroy'));
// Route::get('/store', [PostController::class, 'store'])->name(('create'));