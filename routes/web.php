<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FindUserContoller;
use App\Http\Controllers\HomeFeedController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
Route::get('/homefeed',function(){
    return View('pages.home-feed-two');
});
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

//post
Route::get('PostEditPage/{id}',[PostController::class,'PostEditPage']);
Route::post('/PostCreate',[PostController::class,'PostCreate']);
Route::post('/PostUpdate/{id}/{user_id}',[PostController::class,'PostUpdate']);
Route::get('/PostDelete/{id}/{user_id}',[PostController::class,'PostDelete']);

//homefeedpage
Route::get('HomeFeedPage',[HomeFeedController::class,'HomeFeedPage']);

//search user route
Route::get('/search',[SearchController::class,'Search']);
Route::get('/FindUser/{id}',[FindUserContoller::class,'FindUser']);

Route::get('/CommentPage/{post_id}/{user_id}',[CommentController::class,'CommentPage']);
Route::post('/CreateComment/{user_id}/{post_id}',[CommentController::class,'CreateComment']);