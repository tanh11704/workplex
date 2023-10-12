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

//Route::get('/', function () {
//    return view('home');
//});

Debugbar::init();

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [\App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/privacy', [\App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

//Jobs Search
Route::get('/job-search', [\App\Http\Controllers\JobsController::class, 'search'])->name('job-search');

//Single Job
Route::get('/single-job/{id}', [\App\Http\Controllers\JobsController::class, 'single'])->name('single-job');
Route::post('/single-job/saveJob', [\App\Http\Controllers\JobsController::class, 'saveJob'])->name('jobs.save');
Route::post('/single-job/apply', [\App\Http\Controllers\JobsController::class, 'applyJob'])->name('jobs.apply');

//Dashboad
Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
