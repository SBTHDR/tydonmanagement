<?php 
/**
 * prefix: data
 * namespace: Data
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data\Users\UsersController;

Route::prefix('users')->group(function() {
    Route::get('/', [UsersController::class, 'index']);
});