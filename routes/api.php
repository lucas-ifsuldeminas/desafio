<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/superusers', [UsersController::class, 'superusers'])->name('superusers');
Route::get('/top-countries', [UsersController::class, 'top_countries'])->name('top_countries');
Route::get('/team-insights', [UsersController::class, 'team_insights'])->name('team_insights');
Route::get('/active-users-per-day', [UsersController::class, 'active_users_per_day'])->name('active_users_per_day');
Route::get('/evaluation', [UsersController::class, 'evaluation'])->name('evaluation');

Route::post('/users', [UsersController::class, 'users'])->name('users');
