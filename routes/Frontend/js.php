<?php
use App\Http\Controllers\Frontend\JsController;
// Route::get('/artikel','ArtikelController@index')->name('artikel');
Route::get('/javascript', [JsController::class, 'index']);
Route::post('/javascript', [JsController::class, 'index']);