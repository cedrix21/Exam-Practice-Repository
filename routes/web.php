<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get(('/'),[HomeController::class, 'index'])->name('welcome');
Route::get('/create',[HomeController::class, 'create'])->name('student.create');
Route::post('/store',[HomeController::class, 'store'])->name('student.store');