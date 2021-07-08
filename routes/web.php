<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialLoginController;

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

Route::get('/login/facebook', [SocialLoginController::class, 'loginWithFacebook'])->name('login.facebook');
Route::get('/oauth/facebook/callback', [SocialLoginController::class, 'facebookCallback'])->name('login.facebook.callback');

Route::get('/login/google', [SocialLoginController::class, 'loginWithGoogle'])->name('login.google');
Route::get('/oauth/google/callback', [SocialLoginController::class, 'googleCallback'])->name('login.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
