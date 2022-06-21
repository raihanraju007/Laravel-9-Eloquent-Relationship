<?php

use App\Models\User;
use App\Models\Phone;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $phone =User::find(1);
    $phone =User::find(1)->phone;
    return $phone;


    $user =Phone::find(1);
    // $phone =User::find(1)->phone;
    return $user;

    return view('welcome');
});

// 13 minutes