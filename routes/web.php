<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleNewsController;

Route::get('/', [ArticleNewsController::class, 'index']);
Route::get('/{slug}', [ArticleNewsController::class, 'show'])->name('article.show');

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return view('tes');
});