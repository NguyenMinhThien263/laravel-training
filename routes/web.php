<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProController;

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

// Route::get('/', [HomeController::class,'index'])->name('home');
// Route::get('/tin-tuc', [NewsController::class,'index'])->name('news');
// Route::get('/nhan-su', [ProController::class,'index'])->name('pro');
Route::get('/sua-bai-viet/{id}', function ($id) {
    return 'sua bai viet so: ' . $id;
});

