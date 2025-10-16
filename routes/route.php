<?php

use App\Middleware\Auth;
use App\Middleware\Guest;
use App\Services\Route;

Route::get('/', 'HomeController', 'index',[Guest::class]);
Route::get('redirect', 'HomeController', 'redirect');


Route::get('login', 'LoginController', 'login',[Guest::class]);
Route::get('logout', 'LoginController', 'logout',[Auth::class]);
Route::get('dashboard', 'LoginController', 'dashboard',[Auth::class]);