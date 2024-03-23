<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Employe;
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

Route::get('/user/perusahaan-list', [LoginController::class, 'company']);

Route::get('/user/profile-perusahaan', [LoginController::class, 'profileCompany']);


Route::get('/employe/index', [LoginController::class, 'employerIndex']);

Route::get('/user/tentang', [LoginController::class, 'about']);


Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// employe
Route::get('/employer-site', [HomeController::class, 'employe'])->name('employer-site');
Route::post('/employe-login', [LoginController::class, 'employe_login'])->name('employe-login');
Route::get('/employe-logout', [LoginController::class, 'employe_logout'])->name('employe-logout');
Route::get('/employe-signup', [HomeController::class, 'employe_signup'])->name('employe-signup');
Route::post('/employe-register', [LoginController::class, 'employe_register'])->name('employe-register');

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function(){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('index-user');
});



Route::group(['prefix' => 'view','middleware' => ['auth:employe'], 'as' => 'employe.'], function(){
    Route::get('/home-employe', [HomeController::class, 'employe_login'])->name('employe');
    Route::get('/edit-employe', [HomeController::class, 'employerEditProfile'])->name('edit-employe');
    Route::put('/update/{id}',[HomeController::class,'update'])->name('update-profile');
    Route::get('/dashboard-employe', [HomeController::class, 'dashboard_employe'])->name('dashboard-employe');
    Route::get('/kode_loker', [EmployeController::class, 'kode_loker'])->name('kode-loker');
    Route::get('/employe/{id}/new-loker', [EmployeController::class, 'new_loker'])->name('new-loker');
    Route::post('/create-new-loker', [EmployeController::class, 'create_loker'])->name('create-new-loker');
});











Route::get('/view/loker-edit/kode-loker', function () {
    return view('employer/employer-detail-loker');
});

Route::get('/view/create-loker', function () {
    return view('employer/employer-create-loker');
});

Route::get('/view/loker-edit/kode-loker/kode-candidat', function () {
    return view('employer/employer-candidat');
});

Route::get('/user/profile', function () {
    return view('user/user-profile');
});

Route::get('/profile-perusahaan', function () {
    return view('employer/profile-perusahaan');
});

Route::get('/perusahaan-list', function () {
    return view('company-list');
});
Route::get('/tentang', function () {
    return view('about');
});