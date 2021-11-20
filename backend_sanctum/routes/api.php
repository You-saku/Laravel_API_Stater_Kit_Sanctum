<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// 認証後
Route::group(['middleware' => ['auth:sanctum']] ,function(){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');


    Route::get('/auth_check', function(){
        return 'Auth';
    })->name('auth_check');
});

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');

// API疎通確認
Route::get('/health_check', function(){
    return 'OK.';
});
