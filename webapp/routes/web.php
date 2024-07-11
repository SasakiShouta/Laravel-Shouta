<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', [App\Http\Controllers\PostsController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\PostsController::class, 'showCreate'])->name('show.create');
Route::post('/create', [App\Http\Controllers\PostsController::class, 'storePost'])->name('store.post');
Route::get('/show/{id}', [App\Http\Controllers\PostsController::class, 'showEdit'])->name('show.edit');
Route::post('/show/{id}', [App\Http\Controllers\PostsController::class, 'registEdit'])->name('regist.edit');
Route::delete('/delete/{id}', [App\Http\Controllers\PostsController::class, 'deletePost'])->name('delete');
Route::get('/', function () {
    return view('welcome');
});
