<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users')->middleware(['web', 'auth'])->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('dashboard');
});

Route::prefix('data')->middleware(['web', 'auth'])->group(base_path('routes/web/data.php'));