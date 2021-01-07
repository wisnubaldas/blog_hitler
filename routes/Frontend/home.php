<?php
use App\Http\Controllers\Frontend\HomeController;
Route::get('/home',[HomeController::class,'index']);