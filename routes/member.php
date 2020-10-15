<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
|
| Prefix     : member
| Name       : member.
| Namespace  : Member
| Middleware : web, auth, member
|
*/

# Master Controller
Route::view('', 'member.dashboard')->name('index');
Route::view('profile', 'member.profile')->name('profile');
