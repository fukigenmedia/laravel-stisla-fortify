<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Prefix     : admin
| Name       : admin.
| Namespace  : Admin
| Middleware : web, auth, admin
|
*/

# Master Controller
Route::view('', 'admin.dashboard')->name('index');
Route::view('profile', 'admin.profile')->name('profile');
