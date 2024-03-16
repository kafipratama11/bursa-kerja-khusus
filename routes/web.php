<?php

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

Route::get('/', function () {
    return view('index');
});
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