<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BlogController::class, 'index'])->name('home');
Route::get('/home',[BlogController::class, 'home']);
Route::get('/contact',[BlogController::class, 'contact']);
Route::get('/about',[BlogController::class, 'about'])->name('about-us');
Route::get('/project',[BlogController::class, 'project'])->name('project');
