<?php
use App\Http\Controllers\Frontend\TentangController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/tentang', [TentangController::class, 'index']);
Route::post('/tentang', [TentangController::class, 'index']);