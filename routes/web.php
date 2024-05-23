<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/',[studentController::class,'index'])->name('home');
Route::post('/addStudent',[studentController::class,'addStudent']);