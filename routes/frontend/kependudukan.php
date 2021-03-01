<?php
use App\Http\Controllers\Frontend\KependudukanController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/penduduk/miskin', [KependudukanController::class, 'index'])->name('penduduk.miskin');
// Route::post('/javascript', [KependudukanController::class, 'index']);