<?php
use App\Http\Controllers\login;
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
    return view('landingPage');
});

Route::post('loginPage',[login::class,'login']);
Route::view('loginPage','loginPage');
Route::post('signUpPage', [login::class,'signUp']);
Route::view('signUpPage','signUpPage');
Route::view('home','home');
Route::view('account','accountPage');
Route::get('logout',[login::class,'logout']);

