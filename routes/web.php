<?php

use App\Http\Controllers\AbonnementsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\DashboardController;

App::setLocale("fr");

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
Route::get('/accueil', function () {
    return view('welcome');
});
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/user/{user}', [UsersController::class, 'show'])->name('users.show');

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/createPost', [PostController::class, 'create'])->name('createPost');
Route::post('/storePost', [PostController::class, 'store'])->name('storePost');

//supprimer un post

Route::delete('/deletePost/{post}', [PostController::class, 'destroy'])->name('deletePost');

Route::get('/likes', [LikesController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('likes');
Route::post('/likes/{user}', [LikesController::class, 'like'])->name('like');

// dashboard = ma page profile
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/abonnements', [AbonnementsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('abonnements');
Route::post('/unsubscribe/{user}', [AbonnementsController::class, 'unsubscribe'])->name('unsubscribe');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
