<?php
use App\Http\Controllers\Backend\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('home2');
Route::get('/logout', [HomeController::class, 'logout'])->name('out');