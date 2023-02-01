<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/articles/admin/create', [ArticleController::class, 'create'])->name('article-create')->middleware('auth');
Route::get('/articles/admin/create/store', [ArticleController::class, 'store'])->name('article-store')->middleware('auth');
Route::get('/articles/admin/edit/{slug}', [ArticleController::class, 'edit'])->name('article-edit')->middleware('auth');
Route::get('/articles/admin/updtate/{slug}', [ArticleController::class, 'update'])->name('article-update')->middleware('auth');
Route::get('/articles/admin/delete/{slug}', [ArticleController::class, 'destroy'])->name('article-delete')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
