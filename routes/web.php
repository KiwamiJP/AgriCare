<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\CommentsController;

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

Route::get('/', [PostController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', function () {
    return redirect('/');
})->name('home');
// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('books', BookController::class);
    Route::resource('users', UserController::class);
});

//Detail view route
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Category view route
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/books', [BookController::class, 'publicIndex'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/questions', [QuestionAnswerController::class, 'index'])->name('questions.index');
Route::get('/questions-and-answers', [CategoryController::class, 'category'])->name('questions-and-answers');
Route::post('/questions', [QuestionAnswerController::class, 'store'])->name('questions.store')->middleware('auth');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
