<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', [App\Http\Controllers\PatientController::class, 'dashboard'])->name('dashboard'); 

Route::get('/reportpain', [App\Http\Controllers\PatientController::class, 'reportpain'])->name('reportpain'); 
Route::post('/reportpainadd', [App\Http\Controllers\PatientController::class, 'reportpainadd'])->name('reportpainadd'); 

Route::get('/reportpainedit/{id}/edit', [App\Http\Controllers\PatientController::class, 'reportpainedit'])->name('reportpainedit'); 
Route::post('/reportpaineditadd', [App\Http\Controllers\PatientController::class, 'reportpaineditadd'])->name('reportpaineditadd'); 

Route::get('/healthcondition', [App\Http\Controllers\PatientController::class, 'healthcondition'])->name('healthcondition'); 
Route::post('/healthconditionadd', [App\Http\Controllers\PatientController::class, 'healthconditionadd'])->name('healthconditionadd'); 

Route::get('/healthconditionedit/{id}/edit', [App\Http\Controllers\PatientController::class, 'healthconditionedit'])->name('healthconditionedit'); 
Route::post('/healthconditioneditadd', [App\Http\Controllers\PatientController::class, 'healthconditioneditadd'])->name('healthconditioneditadd');

Route::get('/appointment', [App\Http\Controllers\PatientController::class, 'appointment'])->name('appointment'); 

Route::get('/profile', [App\Http\Controllers\PatientController::class, 'profile'])->name('profile'); 
Route::post('/profileadd', [App\Http\Controllers\PatientController::class, 'profileadd'])->name('profileadd');

Route::get('/dashboarddoc', [App\Http\Controllers\DoctorController::class, 'dashboard'])->name('dashboarddoc');

Route::get('/reportpaindoc', [App\Http\Controllers\DoctorController::class, 'reportpain'])->name('reportpaindoc');
Route::get('/reportpaineditdoc/{id}/edit', [App\Http\Controllers\DoctorController::class, 'reportpainedit'])->name('reportpaineditdoc');
Route::post('/reportpaindocadd', [App\Http\Controllers\DoctorController::class, 'reportpainadd'])->name('reportpaindocadd');

Route::get('/healthconditiondoc', [App\Http\Controllers\DoctorController::class, 'healthcondition'])->name('healthconditiondoc');
Route::get('/healthconditioneditdoc/{id}/edit', [App\Http\Controllers\DoctorController::class, 'healthconditionedit'])->name('healthconditioneditdoc');
Route::post('/healthconditiondocadd', [App\Http\Controllers\DoctorController::class, 'healthconditionadd'])->name('healthconditiondocadd');

Route::get('/appointmentdoc', [App\Http\Controllers\DoctorController::class, 'appointment'])->name('appointmentdoc');
Route::post('/appointmentdocadd', [App\Http\Controllers\DoctorController::class, 'appointmentadd'])->name('appointmentdocadd');

Route::get('/appointmenteditdoc/{id}/edit', [App\Http\Controllers\DoctorController::class, 'appointmentedit'])->name('appointmenteditdoc');
Route::post('/appointmenteditdocadd', [App\Http\Controllers\DoctorController::class, 'appointmenteditadd'])->name('appointmenteditdocadd');

Route::get('/profiledoc', function () {
    return view('doctor.profile');
});

Route::get('/dashboardadm', function () {
    return view('admin.dashboard');
});

Route::get('/doctoradm', function () {
    return view('admin.doctor');
});

Route::get('/doctoreditadm', function () {
    return view('admin.doctoredit');
});

Route::get('/patientadm', function () {
    return view('admin.patient');
});

Route::get('/patienteditadm', function () {
    return view('admin.patientedit');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\PatientController::class, 'dashboard'])->name('home');
