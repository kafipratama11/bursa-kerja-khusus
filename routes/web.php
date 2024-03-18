<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/user/apply', [LoginController::class, 'apply']);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/user/perusahaan-list', [LoginController::class, 'company']);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/user/profile-perusahaan', [LoginController::class, 'profileCompany']);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/user/tentang', [LoginController::class, 'about']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// employe
Route::get('/employer-site', [HomeController::class, 'employe'])->name('employer-site');
Route::post('/employe-login', [LoginController::class, 'employe_login'])->name('employe-login');

Route::get('/employe-signup', [HomeController::class, 'employe_signup'])->name('employe-signup');
Route::post('/employe-register', [LoginController::class, 'employe_register'])->name('employe-register');
Route::get('/user', [HomeController::class, 'user'])->name('user');


Route::group(['prefix' => 'user','middleware' => ['auth'], 'as' => 'user.'], function(){
    Route::get('/index-user', [HomeController::class, 'dashboard'])->name('index-user');
    Route::get('/user', [HomeController::class, 'user'])->name('user');
});




Route::get('/profile-perusahaan', function () {
    return view('profile-perusahaan');
});
Route::get('/perusahaan-list', function () {
    return view('company-list');
});
Route::get('/tentang', function () {
    return view('about');
});