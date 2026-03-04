<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Department;
use App\Models\Program;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function chooseSchoolDepartmentProgram(){
        $schools = School::all();

        return view('student.chooseSchoolDepartmentProgram', compact('schools'));
    }
}
