<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SkillsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('register', [AuthController::class, 'register']);
Route::get('forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('forgot/password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('home', BackendHomeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('skills', SkillsController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('contact', ContactController::class);
});