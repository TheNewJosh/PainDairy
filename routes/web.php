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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('patient.dashboard');
});

Route::get('/reportpain', function () {
    return view('patient.reportpain');
});

Route::get('/reportpainedit', function () {
    return view('patient.reportpainedit');
});

Route::get('/healthcondition', function () {
    return view('patient.healthcondition');
});

Route::get('/healthconditionedit', function () {
    return view('patient.healthconditionedit');
});

Route::get('/appointment', function () {
    return view('patient.appointment');
});

Route::get('/profile', function () {
    return view('patient.profile');
});

Route::get('/dashboarddoc', function () {
    return view('doctor.dashboard');
});

Route::get('/reportpaindoc', function () {
    return view('doctor.reportpain');
});

Route::get('/reportpaineditdoc', function () {
    return view('doctor.reportpainedit');
});

Route::get('/healthconditiondoc', function () {
    return view('doctor.healthcondition');
});

Route::get('/healthconditioneditdoc', function () {
    return view('doctor.healthconditionedit');
});

Route::get('/appointmentdoc', function () {
    return view('doctor.appointment');
});

Route::get('/appointmenteditdoc', function () {
    return view('doctor.appointmentedit');
});

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
