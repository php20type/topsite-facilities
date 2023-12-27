<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;



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
    return view('welcome');
});

// Authentication Routes
// Auth::routes();


// User Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');


// Login Route
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// // Registration Route
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::group(['prefix' => 'user'], function () {
//     Auth::routes(['register' => false]);
// });

// Route::group(['prefix' => 'admin'], function () {
//     Auth::routes(['register' => false]);
// });


// Admin Routes
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
//     Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// User Authentication Routes
Route::group(['prefix' => 'user'], function () {
    Route::get('login', [UserController::class, 'showLoginForm'])->name('user.login');
    Route::post('login', [UserController::class, 'login']);
    Route::get('register', [UserController::class, 'showRegistrationForm'])->name('user.register');
    Route::get('register', [UserController::class, 'register']);
});

// Admin Authentication Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::get('login', [AdminController::class, 'login']);
});
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Admin routes here
});

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\Customer'], function () {
    Route::resource('property', 'PropertyController')->names('user.property');
});   

