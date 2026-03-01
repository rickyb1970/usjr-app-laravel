<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgramController;
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


Route::get('dept',[DepartmentController::class,'chooseSchool'])->name('chooseSchool');
Route::post('dept',[DepartmentController::class,'processChooseSchool'])->name('processChooseSchool');

Route::get('dept/list',[DepartmentController::class,'departmentList'])->name('departmentList');

Route::get('dept/create',[DepartmentController::class,'departmentCreate'])->name('departmentCreate');
Route::post('dept/create',[DepartmentController::class,'processDepartmentCreate'])->name('processDepartmentCreate');

Route::get('dept/{school}/update',[DepartmentController::class,'departmentUpdate'])->name('departmentUpdate');
Route::put('dept/{school}/update',[DepartmentController::class,'processDepartmentUpdate'])->name('processDepartmentUpdate');

Route::get('dept/{schoolid}/delete',[DepartmentController::class,'departmentDelete'])->name('departmentDelete');
Route::post('dept/{schoolid}/delete',[DepartmentController::class,'processDepartmentDelete'])->name('processDepartmentDelete');
Route::post('dept/{schoolid}/delete/finalize',[DepartmentController::class,'finalizeDepartmentDelete'])->name('finalizeDepartmentDelete');


Route::get('program',[ProgramController::class,'chooseSchoolDepartment'])->name('chooseSchoolDepartment');
Route::post('program',[ProgramController::class,'processChooseSchoolDepartment'])->name('processChooseSchoolDepartment');
