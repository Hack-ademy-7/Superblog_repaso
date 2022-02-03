<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [PublicController::class, 'all'])->name('article.index');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');



