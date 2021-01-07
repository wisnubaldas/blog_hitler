<?php
use App\Http\Controllers\Frontend\PhpController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/php', [PhpController::class, 'index']);
Route::post('/php', [PhpController::class, 'index']);