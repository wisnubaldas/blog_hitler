<?php
use App\Http\Controllers\Frontend\BeritaController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/berita', [BeritaController::class, 'index']);
Route::post('/berita', [BeritaController::class, 'index']);