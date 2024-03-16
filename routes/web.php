<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/employer-site', [HomeController::class, 'employe'])->name('employer-site');

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function(){
    
    Route::get('/index-user', [HomeController::class, 'dashboard'])->name('index-user');

    
});
<<<<<<< HEAD
=======
Route::get('/employer', function () {
    return view('employer-site');
});
Route::get('/signup', function () {
    return view('employer-signup');
});
Route::get('/apply', function () {
    return view('apply');
});
Route::get('/admin', function () {
    return view('dashboard-admin');
});
Route::get('/employer-site', function () {
    return view('employer-dashboard');
});
>>>>>>> 514067c6137a12c83e5152ee1b3333df7f776c04
