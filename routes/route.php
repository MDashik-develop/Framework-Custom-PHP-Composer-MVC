<?php

use App\Middleware\Auth;
use App\Middleware\Guest;
use App\Services\Route;

Route::get('/', 'HomeController', 'index',[Guest::class, 'guestHandle']);
Route::get('redirect', 'HomeController', 'redirect');


Route::get('login', 'LoginController', 'login',[Guest::class, 'guestHandle']);
Route::get('login/demo', 'LoginController', 'loginDemo',[Guest::class, 'guestHandle']);
Route::get('logout', 'LoginController', 'logout',[Auth::class, 'authHandle']);
Route::get('dashboard', 'LoginController', 'dashboard',[Auth::class, 'authHandle']);