<?php
use App\Http\Controllers\Frontend\SqlController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/sql', [SqlController::class, 'index']);
Route::post('/sql', [SqlController::class, 'index']);