<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserType;




Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('admin')
        ->name('admin.')
        ->middleware([CheckUserType::class])
        ->group(function () {

            Route::get('/', [UserController::class, 'dashboardAdmin'])->name('home');
        });

    Route::prefix('client')
        ->name('client.')
        ->middleware([CheckUserType::class])
        ->group(function () {
            Route::get('/', [UserController::class, 'dashboardClient'])->name('dashboardClient');
        });
});
