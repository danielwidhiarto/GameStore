<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/landingpage'); }) -> name('landing_page');

//Auth
Route::get('/gamestore/register', function () {return view('Authentication.register'); }) -> name('register_page');
Route::get('/gamestore/login', function () {return view('Authentication.login'); }) -> name('login_page');
// Route::get('/gamestore/guest', function () {return view('Auth.login'); }) -> name('login');