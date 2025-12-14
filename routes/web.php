<?php

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Instructor\InstructorDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//Student Routes
Route::group(['middleware'=>['auth:web','verified', 'check_role:student'], 'prefix'=>'student', 'as'=>'student.'], function(){
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
});


//Instructor Routes
Route::group(['middleware'=>['auth:web','verified', 'check_role:instructor'], 'prefix'=>'instructor', 'as'=>'instructor.'], function(){
    Route::get('/dashboard',[InstructorDashboardController::class,'index'])->name('dashboard');
});


//Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
