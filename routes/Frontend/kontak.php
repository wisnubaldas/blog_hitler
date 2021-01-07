<?php
use App\Http\Controllers\Frontend\KontakController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'index']);