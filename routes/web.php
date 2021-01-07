<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Tes;
use App\Http\Controllers\Frontend\ParalaxController;
Route::get('/',[ParalaxController::class, 'index'])->name('index');

Route::get('/tes',[Tes::class,'index']);

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.','middleware'=>'menu'], function () {
    include_route_files(__DIR__.'/frontend/');
});

Auth::routes();

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','menu']], function () {
    include_route_files(__DIR__.'/backend/');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');