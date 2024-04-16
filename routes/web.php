<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\Apply;
use App\Models\Employe;
use App\Models\User;
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


Route::get('/company-list', [UserController::class, 'company_list'])->name('company-list');

Route::get('/profile-employer/{id}', [UserController::class, 'profile_employer'])->name('profile-employer');


Route::get('/employe/index', [LoginController::class, 'employerIndex']);

Route::get('/about', [UserController::class, 'about'])->name('about');


Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// employe
Route::get('/employer-site', [HomeController::class, 'employe'])->name('employer-site');
Route::post('/employe-login', [LoginController::class, 'employe_login'])->name('employe-login');
Route::get('/employe-logout', [LoginController::class, 'employe_logout'])->name('employe-logout');
Route::get('/employe-signup', [HomeController::class, 'employe_signup'])->name('employe-signup');
Route::post('/employe-register', [LoginController::class, 'employe_register'])->name('employe-register');

Route::group(['prefix' => 'user', 'middleware' => ['auth'], 'as' => 'user.'], function(){
    Route::get('/search', [UserController::class, 'search'])->name('search');
    Route::get('/about', [UserController::class, 'about'])->name('about');
    Route::get('/company-list', [UserController::class, 'company_list'])->name('company-list');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('index-user');
    Route::get('/detail-loker/{id}', [UserController::class, 'detail_loker'])->name('detail-loker');
    Route::get('/profile-employe/{id}', [UserController::class, 'profile_employe'])->name('profile-employe');
    Route::get('/profile-employer/{id}', [UserController::class, 'profile_employer'])->name('profile-employer');
    Route::get('/edit-role/{id}',[UserController::class,'edit_role'])->name('edit-role');
    Route::get('/user-profile/{id}',[UserController::class,'user_profile'])->name('user-profile');
    Route::get('/user-apply/{id}', [ApplyController::class, 'apply'])->name('user-apply');
    Route::get('/view-apply/{id}', [ApplyController::class, 'view_apply'])->name('view-apply');
    Route::post('apply-loker/{id}',[ApplyController::class,'apply_loker'])->name('apply-loker');
    Route::post('add-education/{id}',[UserController::class,'add_education'])->name('add-education');
    Route::post('add-experience/{id}',[UserController::class,'add_experience'])->name('add-experience');
    Route::put('update-role/{id}',[UserController::class,'update_role'])->name('update-role');
    Route::put('update-provinsi/{id}',[UserController::class,'update_provinsi'])->name('update-provinsi');
    Route::put('update-contact/{id}',[UserController::class,'update_contact'])->name('update-contact');
    Route::put('update-about/{id}',[UserController::class,'update_about'])->name('update-about');
    Route::put('update-education/{id}',[UserController::class,'update_education'])->name('update-education');
    Route::put('photo-profile/{id}',[UserController::class,'photo_profile'])->name('photo-profile');
    Route::put('update-experience/{id}',[UserController::class,'update_experience'])->name('update-experience');
    Route::delete('/delete_emplpoye/{id}',[UserController::class,'delete_employe'])->name('delete-employe');
    Route::delete('/delete-loker/{id}',[UserController::class,'delete_loker'])->name('delete-loker');
    Route::delete('/delete-education/{id}',[UserController::class,'delete_education'])->name('delete-education');
    Route::delete('/delete/{id}',[UserController::class,'delete'])->name('delete');
    Route::delete('/delete-experience/{id}',[UserController::class,'delete_experience'])->name('delete-experience');
    Route::delete('/delete-apply/{id}',[ApplyController::class,'delete_apply'])->name('delete-apply');
    // hardskill
    Route::post('add-softskill/{id}',[UserController::class,'add_softskill'])->name('add-softskill');
    Route::delete('/delete-softskill/{id}',[UserController::class,'delete_softskill'])->name('delete-softskill');
    Route::put('update-softskill/{id}',[UserController::class,'update_softskill'])->name('update-softskill');
    // softskill
    Route::post('add-hardskill/{id}',[UserController::class,'add_hardskill'])->name('add-hardskill');
    Route::delete('/delete-hardskill/{id}',[UserController::class,'delete_hardskill'])->name('delete-hardskill');
    Route::put('update-hardskill/{id}',[UserController::class,'update_hardskill'])->name('update-hardskill');
});



Route::group(['prefix' => 'view','middleware' => ['auth:employe'], 'as' => 'employe.'], function(){
    Route::get('/home-employe', [HomeController::class, 'employe_login'])->name('employe');
    Route::get('/edit-employe', [HomeController::class, 'employerEditProfile'])->name('edit-employe');
    Route::put('/update/{id}',[HomeController::class,'update'])->name('update-profile');
    Route::get('/dashboard-employe', [HomeController::class, 'dashboard_employe'])->name('dashboard-employe');
    Route::get('/detail-loker/{id}', [EmployeController::class, 'detail_loker'])->name('detail-loker');
    Route::get('/loker/{id}', [EmployeController::class, 'loker'])->name('loker');
    Route::get('/employe/{id}/new-loker', [EmployeController::class, 'new_loker'])->name('new-loker');
    Route::post('/create-new-loker', [EmployeController::class, 'create_loker'])->name('create-new-loker');
    Route::delete('/delete/{id}',[EmployeController::class,'delete'])->name('delete');
    Route::put('photo-profile/{id}',[EmployeController::class,'photo_profile'])->name('photo-profile');
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

// routes/web.php

// Route untuk halaman 404
Route::fallback(function () {
    return view('errors.404');
});