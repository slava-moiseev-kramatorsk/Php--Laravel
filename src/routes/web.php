<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ThemeController;
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

//Route::get('/', [RegController::class, 'registration'])->name('registration');
//Route::get('/', [NewsController::class, 'showNews'])->name('showNews');
//Route::get('/', [NewsController::class, 'AddNews'])->name('AddNews');
//Route::get('/', [ThemeController::class, 'theme'])->name('theme');
//Route::get('/', [ThemeController::class, 'addTheme'])->name('addTheme');
//Route::get('/', [ThemeController::class, 'comment'])->name('comment');
//Route::get('/', [ThemeController::class, 'showTheme'])->name('showTheme');
//Route::get('/', [ThemeController::class, 'addComment'])->name('addComment');
//Route::get('/', [ThemeController::class, 'countView'])->name('countView');




