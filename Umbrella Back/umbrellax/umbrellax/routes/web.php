<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');

});


Auth::routes();

Route::get('/joinEcosystem-admin', [App\Http\Controllers\backend\JoinEcosystemController::class, 'index'])->name('joinEcosystem-admin');
Route::get('/sendMessage-admin', [App\Http\Controllers\backend\SendMessageController::class, 'index'])->name('sendMessage-admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/sendMessage', [App\Http\Controllers\frontend\HomeController::class, 'sendMessage']);
Route::get('/joinEcosystem', [App\Http\Controllers\frontend\JoinEcosystemController::class, 'index']);
Route::post('/joinEcosystem', [App\Http\Controllers\frontend\JoinEcosystemController::class, 'register']);


