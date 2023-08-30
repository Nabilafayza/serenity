<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KonsulController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\LoginController;




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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/konsultasi', [KonsulController::class, 'konsultasi'])->name('konsultasi');
Route::get('/fitur', [FiturController::class, 'fitur'])->name('fitur');

Route::get('/login', [LoginController::class, 'index']);








