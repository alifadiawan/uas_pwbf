<?php

use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuUserController;
use App\Http\Controllers\UserActivityController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\UsersMiddleware;



Route::middleware(UsersMiddleware::class)->group(function () {
    Route::get('/dashboard-users', [DashboardController::class, 'users_dashboard']);
});



Route::middleware(AdminMiddleware::class)->group(function () {

    //dashboard
    Route::resource('/dashboard-admin', DashboardController::class);

    //menu user
    Route::resource('users-privileges', MenuUserController::class);

    // Users
    Route::resource('/users', UsersController::class);
    Route::resource('/activity-log', UserActivityController::class);
    Route::post('/update-photos', [UsersController::class, 'user_pict'])->name('users.picture');

    //admin
    Route::get('/errors-log', [DashboardController::class, 'errors_log']);
});

Route::resource('/users', UsersController::class);

Route::middleware([GuestMiddleware::class])->group(function () {

    // login
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/authenticate', [LoginController::class, 'login'])->name('login');
});

Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('users/store',[NamaController::class, 'nama_function']);
