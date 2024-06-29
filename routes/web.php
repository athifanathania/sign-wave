<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;



Route::get('/user', [UserController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);