<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/home', function () {
    return redirect('/posts');
});

Route::resources([
    'posts' => PostsController::class,
]);

Route::resources([
    'comments' => CommentsController::class,
]);

Auth::routes();




