<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
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
Auth::routes();


// User Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Registration Route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

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
