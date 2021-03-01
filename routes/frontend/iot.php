<?php
use App\Http\Controllers\Frontend\IotController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/iot', [IotController::class, 'index']);
Route::post('/iot', [IotController::class, 'index']);