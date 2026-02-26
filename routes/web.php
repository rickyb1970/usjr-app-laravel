<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});

Route::get('school/list',[SchoolController::class,'schoolList'])->name('schoolList');

Route::get('school/create',[SchoolController::class,'schoolCreate'])->name('schoolCreate');
Route::post('school/create',[SchoolController::class,'processSchoolCreate'])->name('processSchoolCreate');

Route::get('school/{school}/update',[SchoolController::class,'schoolUpdate'])->name('schoolUpdate');
Route::put('school/{school}/update',[SchoolController::class,'processSchoolUpdate'])->name('processSchoolUpdate');

Route::get('school/{schoolid}/delete',[SchoolController::class,'schoolDelete'])->name('schoolDelete');
Route::post('school/{schoolid}/delete',[SchoolController::class,'processSchoolDelete'])->name('processSchoolDelete');
Route::post('school/{schoolid}/delete/finalize',[SchoolController::class,'finalizeSchoolDelete'])->name('finalizeSchoolDelete');

Route::get('dept/list',[SchoolController::class,'departmentList'])->name('departmentList');

Route::get('dept/create',[SchoolController::class,'departmentCreate'])->name('departmentCreate');
Route::post('dept/create',[SchoolController::class,'processDepartmentCreate'])->name('processDepartmentCreate');

Route::get('dept/{school}/update',[SchoolController::class,'departmentUpdate'])->name('departmentUpdate');
Route::put('dept/{school}/update',[SchoolController::class,'processDepartmentUpdate'])->name('processDepartmentUpdate');

Route::get('dept/{schoolid}/delete',[SchoolController::class,'departmentDelete'])->name('departmentDelete');
Route::post('dept/{schoolid}/delete',[SchoolController::class,'processDepartmentDelete'])->name('processDepartmentDelete');
Route::post('dept/{schoolid}/delete/finalize',[SchoolController::class,'finalizeDepartmentDelete'])->name('finalizeDepartmentDelete');
