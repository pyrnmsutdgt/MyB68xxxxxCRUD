<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;

Route::resource('enrollments', EnrollmentController::class);
Route::get('/', [EnrollmentController::class, 'index']);
Route::post('/students', [EnrollmentController::class, 'storeStudent'])->name('students.store');
//รอเพิ่ม route details
//รอเพิ่ม route report

