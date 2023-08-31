<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;

// Route::apiResource('user', \App\Http\Controllers\UserController::class);

// Route::middleware([
//     'auth',
//     // RedirectIfAuthenticated::class,
//     ])
//     ->prefix('heyaa')
//     ->name('users')
//     ->namespace("\App\Http\Controllers")
//     ->group(function(){
//         Route::get('/users', [UserController::class, 'index'])->name('index')
//         ->name('index')
//         ->withoutMiddleware('auth')
//         ;
//         // Route::get('/users', 'UserController@index')->name('index');

//         Route::get('/users/{$user}', [UserController::class, 'show'])
//         ->name('show')
//         // ->where('user', '[0-9]+')
//         ->whereNumber('user');

//         Route::post('/users', [UserController::class, 'store'])->name('store');

//         Route::patch('/users', [\App\Http\Controllers\UserController::class, 'update'])->name('update');

//         Route::delete('/users', [\App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');

// });  