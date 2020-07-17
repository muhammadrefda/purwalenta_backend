<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register','User\AuthController@register');
Route::post('/login','User\AuthController@login');
Route::post('/logout','User\AuthController@logout');

Route::post('/password/email','User\ForgotPasswordController@sendResetLinkEmail');
Route::post('/password/reset','User\ResetPasswordController@reset');


Route::get('/email/resend', 'User\VerificationController@resend')->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', 'User\VerificationController@verify')->name('verification.verify');



Route::resource('tutorlenta','Tutorlenta\TutorlentaController');

Route::resource('kawanlenta','Kawanlenta\KawanlentaController');

Route::resource('course','Course/CourseController');

Route::resource('category','Category/CategoryController');

Route::resource('transaction','Transaction/TransactionController');

Route::resource('user','User/UserController');




