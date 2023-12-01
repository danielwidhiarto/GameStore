<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TransactionsController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\RoleCheck;
use App\Http\Middleware\RoleCustomerCheck;
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
Route::post('/gamestore/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/gamestore/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('/gamestore/register/', [AuthenticationController::class, 'register_logic'])->name('register_logic');


//Home
Route::get('/home/welcome', [GameController::class, 'homeIndex'])->name('home_guest');
Route::get('/home/customer', [GameController::class, 'homeIndex'])->name('home_customer')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::get('/home/admin', [GameController::class, 'homeIndex'])->name('home_admin')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);

//Profile
Route::get('/profile/customer/{id}', [ProfilesController::class, 'myProfile'])->name('profile_customer')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::get('/profile/admin/{id}', [ProfilesController::class, 'updateProfileView'])->name('profile_admin')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::patch('/profile/admin/update/post/{id}', [ProfilesController::class, 'updateProfileLogic'])->name('update_profile_logic')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);


//Detail
Route::get('/detail/{id}', [GameController::class, 'detail'])->name('detail_guest');
Route::get('/detail/customer/{id}', [GameController::class, 'detail'])->name('detail_customer')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::get('/detail/admin/{id}', [GameController::class, 'detail'])->name('detail_admin')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);


//Search
Route::get('/search', [GameController::class, 'searchGame'])->name('search_guest');
Route::get('/search/customer', [GameController::class, 'searchGame'])->name('search_customer')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::get('/search/admin', [GameController::class, 'searchGame'])->name('search_admin')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::get('/search/admin/managegame', [AdminsController::class, 'searchManageGames'])->name('search_manage_game')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);


//Manage Product
Route::get('/managegame', [AdminsController::class, 'game_index'])->name('manage_game')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::delete('/managegame/delete/{id}', [AdminsController::class, 'deleteGame'])->name('manage_game_delete')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);

Route::get('/managegame/update/{id}', [AdminsController::class, 'updateGameView'])->name('manage_game_update_view')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::patch('/managegame/update/post/{id}', [AdminsController::class, 'updateGameLogic'])->name('manage_game_update_logic')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);

Route::get('/managegame/add/form', [AdminsController::class, 'createGame'])->name('manage_game_add_game_view')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::post('/managegame/add/post', [AdminsController::class, 'addGameLogic'])->name('manage_game_add_game_logic')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);

//Manage Genre
Route::get('/managegenre', [AdminsController::class, 'genre_index'])->name('manage_genre')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::get('/managegenre/{id}', [GenreController::class, 'genre_detail'])->name('manage_genre_detail')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);
Route::patch('/managegenre/update/post/{id}', [AdminsController::class, 'updateGenreName'])->name('manage_genre_update_name')->middleware([AuthCheck::class])->middleware([RoleCheck::class]);

//Transaction Member
Route::get('/cart/view', [TransactionsController::class, 'cart_view'])->name('cart_view')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::post('/add-to-card/post', [TransactionsController::class, 'add_to_cart'])->name('add_to_cart')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::delete('/cart/delete/{id}', [TransactionsController::class, 'delete_game_in_cart'])->name('delete_game_in_cart')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::post('/cart/transaction/post', [TransactionsController::class, 'purchase'])->name('purchase')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::delete('/cart/delete', [TransactionsController::class, 'delete_cart'])->name('delete_cart')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
Route::get('/history', [TransactionsController::class, 'history_index'])->name('history_index')->middleware([AuthCheck::class])->middleware([RoleCustomerCheck::class]);
