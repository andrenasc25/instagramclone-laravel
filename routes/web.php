<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
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
Route::prefix('auth')->group(function(){
    Route::post('signup', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
});
Route::get('/activate/{mail}',[AuthController::class, 'verifyMail'])->name('activateLink')->middleware('signed');

//User
Route::post('/user/post-add', [UserController::class, 'addPost']);
Route::post('/user/publish-post', [UserController::class, 'publishPost']);
Route::post('/user/add-friend', [UserController::class, 'addFriend']);

//Public Pages
Route::get('/signup', [PagesController::class, 'signup']);
Route::get('/auth', [PagesController::class, 'auth'])->name('auth');

//User Pages
Route::get('/', [PagesController::class, 'home'])->middleware('auth');
Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth');
Route::get('/chat', [PagesController::class, 'chat'])->middleware('auth');
Route::get('/explore', [PagesController::class, 'explore'])->middleware('auth');
Route::get('/config', [PagesController::class, 'config'])->middleware('auth');
Route::get('/newPost', [PagesController::class, 'newPost'])->name('newPost')->middleware(['auth', 'signed']);
Route::get('/{username}', [PagesController::class, 'profileOther']);