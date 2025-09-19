<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class,'index'])->name('user.index');
Route::get('/photos/create',[PhotoController::class,'create'])->name('photos.create');
Route::post('/photos',[PhotoController::class,'store'])->name('photos.store');
Route::get('/photos/{photo}',[PhotoController::class,'show'])->name('photo.show');
Route::get('/photos/{photo}/edit',[PhotoController::class,'edit'])->name('photo.edit');
Route::put('/photos/{photo}',[PhotoController::class,'update'])->name('photo.update');
Route::delete('/photos/{photo}',[PhotoController::class,'destroy'])->name('photo.destroy');