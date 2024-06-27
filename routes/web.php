<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LatihanController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard-admin', function () {
        return view('dashboard-admin');
    })->name('dashboard-admin');

    Route::get('/home-user', function () {
        return view('home-user');
    })->name('home-user');

    Route::get('/profile-admin', [ProfileController::class, 'showAdminProfile'])->name('profile-admin');
    Route::get('/edit-profile-admin', [ProfileController::class, 'editAdminProfile'])->name('profile-admin.edit');
    Route::put('/edit-profile-admin', [ProfileController::class, 'updateAdminProfile'])->name('profile-admin.update');

    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change-password');

    Route::get('/kelola-feedback', [FeedbackController::class, 'index'])->name('kelola-feedback');
    Route::delete('/feedback/{id_feedback}', [FeedbackController::class, 'destroy'])->name('delete-feedback');
    Route::post('/home-user', [FeedbackController::class, 'store'])->name('home-user');

    Route::get('/index-kelola-user', [UserController::class, 'index'])->name('index-kelola-user');
    Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
    Route::post('/create-user', [UserController::class, 'store'])->name('create-user.store');
    Route::get('/{username}/edit-user', [UserController::class, 'edit'])->name('edit-user');
    Route::put('/{username}/edit-user', [UserController::class, 'update'])->name('edit-user.update');
    Route::delete('/index-kelola-user/{username}', [UserController::class, 'destroy'])->name('index-kelola-user.destroy');
    
    Route::get('/profile-user', [ProfileController::class, 'showUserProfile'])->name('profile-user');
    Route::get('/edit-user-profile', [ProfileController::class, 'editUserProfile'])->name('profile-user.edit');
    Route::put('/edit-user-profile', [ProfileController::class, 'updateUserProfile'])->name('profile-user.update');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::resource('latihan', LatihanController::class);
