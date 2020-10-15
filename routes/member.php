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

Route::get('', 'DashboardController@index')->name('index');
