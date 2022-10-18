<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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


// 前台
// Route::get('/', [Controller::class, 'index']);
Route::get('/', [Controller::class, 'index']);

Route::get('/mypage', [Controller::class, 'mypage']);

Route::get('/bootstrap', [Controller::class, 'bootstrap']);



// 後台
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
