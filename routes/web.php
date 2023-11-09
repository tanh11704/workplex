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
Route::get('/dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');
//My Profile
Route::get('/dashboard/myprofile', [\App\Http\Controllers\Dashboard\UserController::class, 'myProfile'])->name('myProfile');
Route::put('/dashboard/update-profile', [\App\Http\Controllers\Dashboard\UserController::class, 'update'])->name('user.update');
Route::put('/dashboard/update-profile/contact', [\App\Http\Controllers\Dashboard\UserController::class, 'updateContact'])->name('user.updateContact');
Route::put('/dashboard/update-profile/social', [\App\Http\Controllers\Dashboard\UserController::class, 'updateSocial'])->name('user.updateSocial');
Route::put('/dashboard/update-profile/cv', [\App\Http\Controllers\Dashboard\UserController::class, 'updateCv'])->name('user.updateCv');
//Post Job
Route::get('/dashboard/post-job', [\App\Http\Controllers\JobsController::class, 'postUi'])->name('post-job');
Route::post('/dashboard/post-job', [\App\Http\Controllers\JobsController::class, 'store'])->name('jobs.store');
//Bookmark Jobs
Route::get('/dashboard/bookmark-jobs', [\App\Http\Controllers\Dashboard\SavedJobsController::class, 'index'])->name('user.bookmark-jobs');
Route::delete('/dashboard/bookmark-jobs/{id}', [\App\Http\Controllers\Dashboard\SavedJobsController::class, 'delete'])->name('savedJob.delete');
//Applied Jobs
Route::get('/dashboard/applied-jobs', [\App\Http\Controllers\Dashboard\AppliedJobsController::class, 'index'])->name('user.appliedJob');
Route::delete('/dashboard/applied-jobs/{id}', [\App\Http\Controllers\Dashboard\AppliedJobsController::class, 'delete'])->name('user.appliedJob.delete');
//Manage Jobs
Route::get('/dashboard/manage-jobs', [\App\Http\Controllers\Dashboard\ManageJobsController::class, 'index'])->name('user.manage-jobs');
Route::get('/dashboard/manage-jobs/{id}/edit', [\App\Http\Controllers\Dashboard\ManageJobsController::class, 'editUi'])->name('user.edit-jobs');
Route::put('/dashboard/manage-jobs/edit', [\App\Http\Controllers\Dashboard\ManageJobsController::class, 'editJob'])->name('user.edit-jobs.edit');
Route::delete('/dashboard/manage-jobs/{id}', [\App\Http\Controllers\Dashboard\ManageJobsController::class, 'delete'])->name('user.manage-jobs.delete');
//Manage Applicant
Route::get('/dashboard/manage-applicant', [\App\Http\Controllers\Dashboard\ManageApplicantController::class, 'index'])->name('user.manage-applicant');
Route::get('/dashboard/manage-applicant/download-cv/{cv_name}', [\App\Http\Controllers\Dashboard\ManageApplicantController::class, 'downloadCv'])->name('user.manage-applicant.cv');
Route::post('/dashboard/manage-applicant/accept', [\App\Http\Controllers\Dashboard\ManageApplicantController::class, 'accept'])->name('user.manage-applicant.accept');
Route::post('/dashboard/manage-applicant/reject', [\App\Http\Controllers\Dashboard\ManageApplicantController::class, 'reject'])->name('user.manage-applicant.reject');
//Change Password
Route::get('/dashboard/change-password', [\App\Http\Controllers\Dashboard\DashboardController::class, 'changePassword'])->name('change-password');
Route::put('/dashboard/change-password', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->name('user.changePassword');
