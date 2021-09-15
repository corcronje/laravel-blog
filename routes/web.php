<?php

use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Blog as Blog;
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

//public routes


// private routes

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth'])->group(function () {
    Route::resources('/users', Admin\UserController::class);
    Route::resources('/categories', Admin\CategoryController::class);
    Route::resources('/tags', Admin\TagController::class);
    Route::resources('/posts', Admin\PostController::class);
    Route::post('/posts/{post}/publish', Admin\PublishPostController::class)->name('posts.publish');
    Route::post('/posts/{post}/upublish', Admin\UnpublishPostController::class)->name('posts.unpublish');
});

Route::name('blog.')->namespace('Blog')->group(function () {
    Route::get('/users', [Blog\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [Blog\UserController::class, 'show'])->name('users.show');
    Route::get('/categories', [Blog\CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{slug}', [Blog\CategoryController::class, 'show'])->name('categories.show');
    Route::get('/tags', [Blog\TagController::class, 'index'])->name('tags.index');
    Route::get('/tags/{slug}', [Blog\TagController::class, 'show'])->name('tags.show');
    Route::get('/', [Blog\PostController::class, 'index'])->name('posts.index');
    Route::get('/{slug}', [Blog\PostController::class, 'show'])->name('posts.show');
    Route::get('/search', Blog\SearchController::class)->name('posts.search');
});

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

require __DIR__ . '/auth.php';
