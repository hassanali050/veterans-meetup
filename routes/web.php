<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post_Controller;
use App\Http\Controllers\ApDhillonController;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Post_Like_Controller;
use App\Http\Controllers\User_Post_Controller;
use App\Http\Controllers\Auth\Login_Controller;
use App\Http\Controllers\Auth\Logout_Controller;
use App\Http\Controllers\Auth\Register_Controller;

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

Route::get('/', function() {
    return view('home');
})->name('home');
Route::get('/register', [Register_Controller::class, 'index'])->name('register');
Route::post('/register', [Register_Controller::class, 'store']);

Route::get('/dashboard', [Dashboard_Controller::class, 'index'])
->name('dashboard');

Route::get('/login', [Login_Controller::class, 'index'])->name('login');
Route::post('/login', [Login_Controller::class, 'store']);

Route::post('/logout', [Logout_Controller::class, 'store'])->name('logout');
