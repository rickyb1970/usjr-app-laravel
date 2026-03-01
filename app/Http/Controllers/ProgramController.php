<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Department;
use App\Models\Program;

class ProgramController extends Controller
{
    //
    public function chooseSchoolDepartment(){
        $schools = School::all();

        return view('program.chooseSchoolDepartment', compact('schools'));
    }

    public function processChooseSchoolDepartment(Request $request){

        if($request->has('backToSchool')){
            session()->forget('program.selection.school');
            return redirect()->back();
        }

        if(session()->has('program.selection.school')){
            if(is_null($request->departmentID)){
                session()->forget('program.selection.school');
                return redirect()->back();
            }

            $school = School::find(session()->get('program.selection.school'));

            $department = Department::find($school['schoolid']);

            $programs = Program::where('progschoolid', $school['schoolid'])->where('progschooldeptid', $department['deptid'])->orderBy('deptfullname')->simplePaginate(7);

            return view('program.programList', compact('programs'));

        } else {

            // dd('here');

            session()->put('program.selection.school', $request->schoolID);

            // dd(session()->get('programm.selection.school'));

            $school = School::find($request->schoolID);

            // dd($school);

            if($school){
               dd('here');
               return to_route('chooseSchoolDepartment')->with('school', $school);
            } else {
               return redirect()->back();
            }

        }

    }
}
