<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\School;

class DepartmentController extends Controller
{
    //
    public function chooseSchool(){
        $schools = School::all();

        return view('department.chooseSchool', compact('schools'));
    }

    public function processChooseSchool(Request $request){
        $schoolid = $request->schoolID;

        $school = School::find($schoolid);

        $departments = Department::where('deptschoolid', $school['schoolid'])->orderBy('deptfullname')->simplePaginate(7);

        if($departments){
           return view('department.departmentList', compact('school','departments'));
        } else {
           session()->flash('status','No departments for this school.');
           return redirect()->back();
        }
    }

    public function departmentList(School $school){
        $school = $school;

        $departments = Department::where('deptschoolid', $school['schoolid'])->orderBy('deptfullname')->simplePaginate(7);

        return redirect()->route('departmentList')->with(compact('departments', 'school'));
    }
}
