<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article');
Route::get('/articles/admin/create', [ArticleController::class, 'create'])->name('article-create');
Route::get('/articles/admin/create/store', [ArticleController::class, 'store'])->name('article-store');
Route::get('/articles/admin/edit/{id}', [ArticleController::class, 'edit'])->name('article-edit');
Route::get('/articles/admin/edit/{id}/done', [ArticleController::class, 'update'])->name('article-update');
