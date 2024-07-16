<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name ('homepage');

Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');