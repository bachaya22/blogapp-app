<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\BannerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/appoinment', [PagesController::class, 'appoinment']);
Route::get('/blogsidebar', [PagesController::class, 'blogsidebar']);
Route::get('/blogsingle', [PagesController::class, 'blogsingle']);
Route::get('/confirmation', [PagesController::class, 'confirmation']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/department', [PagesController::class, 'department']);
Route::get('/departmentsingle', [PagesController::class, 'departmentsingle']);
Route::get('/doctor', [PagesController::class, 'doctor']);
Route::get('/doctorsingle', [PagesController::class, 'doctorsingle']);
Route::get('/services', [PagesController::class, 'services']);
Route::resource('banners', BannerController::class);
// Authentication Routes
Auth::routes();

// Admin and Writer Login & Registration Routes
// Admin and Writer Login & Registration Routes
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/writer', [LoginController::class, 'showWriterLoginForm']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::get('/register/writer', [RegisterController::class, 'showWriterRegisterForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/writer', [LoginController::class, 'writerLogin']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::post('/register/writer', [RegisterController::class, 'createWriter']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/writer', 'writer')->middleware('auth:writer');

// // HomeController Route
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
// Route::get('/login/writer', [LoginController::class, 'showWriterLoginForm']);
// Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
// Route::get('/register/writer', [RegisterController::class, 'showWriterRegisterForm']);

// Route::post('/login/admin', [LoginController::class, 'adminLogin']);
// Route::post('/login/writer', [LoginController::class, 'writerLogin']);
// Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
// Route::post('/register/writer', [RegisterController::class, 'createWriter']);

// Route::view('/admin', 'admin')->middleware('auth:admin');
// Route::view('/writer', 'writer')->middleware('auth:writer');
