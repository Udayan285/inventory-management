<?php

use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

//Authentication
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//register user
Route::post('/register', [UserController::class, 'store'])->name('store');
Route::post('/login', [UserController::class, 'signIn'])->name('signIn');

//ValidUser route group
Route::middleware('isValidUser')->group(function(){
    // Dashboard 
    Route::get('/',[UserController::class,'dashboard'])->name('dashboard');

});





