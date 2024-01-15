<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\BookmarkController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/posts', [PostController::class, 'store']);
Route::get('/', [PostController::class, 'index'])->middleware('auth')->name('index');
Route::get('/posts/create/{music_id}', [PostController::class, 'create']);
Route::get('/posts/show/{post}', [PostController::class, 'show'])->name('show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'delete']);
Route::get('/posts/favorite/{post}', [FavoriteController::class, 'favorite'])->name('favorite');
Route::get('/posts/unfavorite/{post}', [FavoriteController::class, 'unfavorite'])->name('unfavorite');
Route::get('/posts/bookmark/{post}', [BookmarkController::class, 'bookmark'])->name('bookmark');
Route::get('/posts/unbookmark/{post}', [BookmarkController::class, 'unbookmark'])->name('unbookmark');
Route::get('/bookmark', [PostController::class, 'bookmark'])->name('view_bookmark')->middleware('auth');
Route::get("/search", [PostController::class, "search"]);

require __DIR__.'/auth.php';
