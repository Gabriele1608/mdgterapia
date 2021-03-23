<?php

use App\Http\Controllers\PostController;
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


Route::get('lang/{locale}', [\App\Http\Controllers\LocalizationController::class, 'set_lang']);
Route::get('/', [PostController::class, 'welcome'])->name('welcome');
Route::get('/privacidad', [\App\Http\Controllers\Controller::class, 'legal'])->name('legal.privacidad');
Route::get('/terapias', [\App\Http\Controllers\TerapiaController::class, 'index'])->name('terapia.terapias');
Route::post('/formulario', [\App\Http\Controllers\FormularioController::class, 'formulario'])->name('formulario');
Route::post('/comments/{post}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments');
Route::post('/commentReply/{comment}', [\App\Http\Controllers\CommentController::class, 'storeCommentReply'])->name('commentsreply');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/blog', [PostController::class, 'index'])->name('blog.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('blog.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('blog.category');


Route::get('tag/{tag}', [PostController::class, 'tag'])->name('blog.tag');