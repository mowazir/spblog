<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function() {

Route::get('/articles', [ArticleController::class, 'index'] );
Route::get('/article/create', [ArticleController::class, 'create'])
->name('articles.create');
Route::post('/article', [ArticleController::class, 'store'])
->name('articles.store');



Route::delete('/logout', [SessionController::class, 'destroy']);
});

Route::middleware('guest')->group(function() {

    Route::get('/login', [SessionController::class, 'create'])
    ->name('login');
    Route::post('/login', [SessionController::class, 'store'])
    ->name('user.store');

});
