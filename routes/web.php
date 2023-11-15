<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
    return view('pages.auth.home-page');
});

Route::post('/user-registration',[UserController::class,'UserRegistration'])->name('user-registration');
Route::post('/user-login',[UserController::class,'UserLogin'])->name('user-login');
//pages
Route::get('/RegistrationPage',[UserController::class,'RegistrationPage']);
Route::get('LoginPage',[UserController::class,'LoginPage']);
Route::get('/dashboard',[DashboardController::class,'DashboardPage']);
Route::get('/logout',[UserController::class,'UserLogout'])->name('logout');
Route::get('/ProfilePage',[UserController::class,'ProfilePage']);
Route::get('/ProfileEditPage',[UserController::class,'ProfileEditPage']);
//profile edit/update
Route::post('/profileCreate',[UserController::class,'profileCreate']);
Route::post('profileUpdate/{id}',[UserController::class,'profileUpdate']);