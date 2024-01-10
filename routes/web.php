<?php

use App\Http\Middleware\UserAuthenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\user\UserFoundationController;


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

// Route::get('/', function () {
//     return view('frontend.pages.profile');
// });


 Route::get('/',[UserAuthController::class,'home'])->name('home');

Route::get('/login',[UserAuthController::class,'login'])->name('login');

Route::post('/login', [\App\Http\Controllers\User\UserAuthController::class, 'store_login'])->name('store_login');

Route::get('register', [\App\Http\Controllers\User\UserAuthController::class, 'register'])->name('register');
Route::post('register', [\App\Http\Controllers\User\UserAuthController::class, 'store_register'])->name('store_register');

Route::group(['middleware'=>'auth'],function (){
Route::get('logout', [\App\Http\Controllers\User\UserAuthController::class, 'logout'])->name('logout');
Route::get('profile',[\App\Http\Controllers\User\UserProfileController::class,'index'])->name('userProfile');
Route::get('blood_request',[\App\Http\Controllers\User\UserProfileController::class,'blood_request'])->name('bloodRequest');
Route::post('blood_request_upload',[\App\Http\Controllers\User\UserProfileController::class,'blood_request_upload'])->name('bloodRequestUpload');
Route::get('contact_foundation/{id}',[UserFoundationController::class,'contactFoundation'])->name('contactFoundation');
Route::post('contact_foundation_upload/{f_id}',[UserFoundationController::class,'contactFoundationUpload'])->name('contactFoundationUpload');
});



