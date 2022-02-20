<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/new_user', [UserController::class, 'new_user'])->name('new_user');

Route::get('/NewTheme', [ForumController::class, 'addTheme'])->name('addTheme');
Route::post('/create', [ForumController::class, 'create'])->name('create_theme');
Route::get('/', [ForumController::class, 'index'])->name('index');
Route::get('/{forum}/show', [ForumController::class, 'show'])->name('show');
Route::delete('/{forum}', [ForumController::class, 'destroy'])->name('destroy');
Route::get('/forums/{forum}/edit', [ForumController::class, 'edit'])->name('edit');
Route::put('/forums/{id}', [ForumController::class, 'update'])->name('update');

Route::post('/forums/{forum}/create-comment', [CommentController::class, 'create'])->name('create_comment');
Route::get('/{comment}', [CommentController::class, 'index'])->name('show-comment');






Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
