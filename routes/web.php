<?php

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

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Middleware\CheckFields;

Route::get('/', function () {
    return view('welcome');
});

//Resolução Ficha 3
Route::get('/posts/',[PostsController::class, 'index']); //updated in version 8.x
Route::get('/posts/create',[PostsController::class, 'create']); //updated to version 8.x
Route::post('/posts/store',[PostsController::class, 'store']); //updated to version 8.x
Route::get('/posts/{post}',[PostsController::class, 'show']); //updated to version 8.x
Route::get('/posts/{post}/edit',[PostsController::class, 'edit']); //updated to version 8.x
Route::get('/posts/{post}',[PostsController::class, 'destroy']); //updated to version 8.x

//Resolução Ficha 4
Route::get('/articles/',[ArticlesController::class, 'index']); //updated in version 8.x
Route::get('/articles/create',[ArticlesController::class, 'create']); //updated to version 8.x
Route::post('/articles/store', [ArticlesController::class, 'store'])->middleware('chk.fields');
Route::get('/articles/{articleID}',[ArticlesController::class, 'show']); //updated to version 8.x
Route::get('/articles/{articleID}/edit',[ArticlesController::class, 'edit']); //updated to version 8.x
Route::put('/articles/{articleID}/update',[ArticlesController::class, 'update']); //updated to version 8.x
Route::get('/articles/{articleID}/destroy',[ArticlesController::class, 'destroy']); //updated to version 8.x
