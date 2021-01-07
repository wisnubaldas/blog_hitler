<?php
use App\Http\Controllers\Frontend\ParalaxController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/paralax', [ParalaxController::class, 'index']);