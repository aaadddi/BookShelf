<?php
use App\Http\Controllers\login;
use App\Http\Controllers\features;
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

Route::view('account','accountPage');
Route::view('changePasswordPage','changePassword');
Route::view('changeNamePage','changeName');
Route::view('deleteAccountPage','deleteAccount');
Route::view('addAddressPage','addAddress');

Route::get('logout',[login::class,'logout']);
Route::get('home',[features::class,'showBookCards']);
Route::get('wishlistPage',[features::class,'showWishListCard']);

Route::get('buy',[features::class,'Buy']);
Route::get('wishlist',[features::class,'addToWishlist']);
Route::get('cart',[features::class,'addToCart']);
Route::post('/changeName',[features::class,'changeName']);
Route::post('/changePassword',[features::class,'changePassword']);
Route::post('/deleteAccount',[features::class,'deleteAccount']);
Route::post('/addAddress',[features::class,'addAddress']);
