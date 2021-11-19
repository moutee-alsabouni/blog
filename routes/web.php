<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', [Controller::class, 'dash'])->name('dash')->middleware('auth');
Route::get('/', [PageController::class, 'home'])->name('home')->middleware('auth');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact')->middleware('auth');
Route::get('/settings', [PageController::class, 'settings'])->name('settings')->middleware('auth');
Route::get('/settings/notifcations', function(){
    return view('pages.settings.notifications');
})->name('settings.notifications')->middleware('auth');


Route::resource('posts', PostController::class)->middleware('auth');
Route::get('/posts/all', [PostController::class, 'all'])->name('posts.all')->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('tags', TagController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
