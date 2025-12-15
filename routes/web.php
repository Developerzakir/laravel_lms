<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Instructor\InstructorDashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend routes
Route::get('/',[FrontendController::class,'index'])->name('home');

//Student Routes
Route::group(['middleware'=>['auth:web','verified', 'check_role:student'], 'prefix'=>'student', 'as'=>'student.'], function(){
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
});


//Instructor Routes
Route::group(['middleware'=>['auth:web','verified', 'check_role:instructor'], 'prefix'=>'instructor', 'as'=>'instructor.'], function(){
    Route::get('/dashboard',[InstructorDashboardController::class,'index'])->name('dashboard');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
