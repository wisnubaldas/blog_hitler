<?php
use App\Http\Controllers\Frontend\ArtikelController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/artikel/{id?}', [ArtikelController::class, 'index'])->name('artikel');
Route::post('/artikel', [ArtikelController::class, 'index']);