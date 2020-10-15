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
Route::get('', 'DashboardController@index')->name('index');
