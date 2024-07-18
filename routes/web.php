<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\LibraryController;

Route::get('/', [PublicController::class, 'home'])->name ('homepage');

Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');


Route::get('/book/create', [LibraryController::class, 'create'])->name ('book.create');
Route::get('/book/index', [LibraryController::class, 'index'])->name ('book.index');