<?php
use App\Http\Controllers\Frontend\NodeController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/node', [NodeController::class, 'index']);
Route::post('/node', [NodeController::class, 'index']);