<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterviewController;


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

Route::get('/', [InterviewController::class, 'index'])->name('index');
Route::get('/login', [InterviewController::class, 'login'])->name('login');
Route::get('/data', [InterviewController::class, 'data'])->name('data');
Route::post('/home', [InterviewController::class, 'store'])->name('dashboard');



