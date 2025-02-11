<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

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

    //Profile
    Route::get('/profile',[ProfileController::class,'profile'])->name('profile');

});





