<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ForumController;
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
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/new_user', [UserController::class, 'new_user'])->name('new_user');
Route::get('/addNewTheme', [ForumController::class, 'addTheme'])->name('addTheme');
Route::get('/create', [ForumController::class, 'create'])->name('create_theme');
//Route::get('/show', [ForumController::class, 'show'])->name('show');
//Route::get('/user/{id}', [UserController::class, 'show']);
//Route::get('/submit', [UserController::class, 'submit'])->name('submit');
//Route::get('/', [ForumController::class, 'theme'])->name('theme');
//Route::get('/', [ForumController::class, 'addTheme'])->name('addTheme');
//Route::get('/', [ForumController::class, 'comment'])->name('comment');
//Route::get('/', [ForumController::class, 'showTheme'])->name('showTheme');
//Route::get('/', [ForumController::class, 'addComment'])->name('addComment');
//Route::get('/', [ForumController::class, 'countView'])->name('countView');




