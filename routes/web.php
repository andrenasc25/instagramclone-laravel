<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
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


//Auth
Route::post('auth/signup', [AuthController::class, 'register']);
Route::get('activate/{mail}',[AuthController::class, 'verifyMail'])->name('activateLink')->middleware('signed');

//Public Pages
Route::get('/signup', [PagesController::class, 'signup']);
Route::get('/auth', [PagesController::class, 'auth'])->name('auth');

//User Pages
Route::get('/', [PagesController::class, 'home'])->middleware('auth');