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

            $department = Department::find($request->departmentID);

            if(!$department){
                session()->forget('program.selection.school');
                return redirect()->back();
            }

            // dd($department);

            $programs = Program::where('progschoolid','=', $school['schoolid'])
                       ->where('progschooldeptid', '=', $department['deptid'])
                       ->orderBy('progid')
                       ->simplePaginate(7);


            return view('program.programList', compact('programs', 'school', 'department'));

        } else {

            session()->put('program.selection.school', $request->schoolID);

            $school = School::find($request->schoolID);

            if($school){

               $departments = Department::where('deptschoolid', $request->schoolID)->get();

               return view('program.chooseSchoolDepartment')->with(compact('school', 'departments'));

            } else {

               return redirect()->back();

            }

        }

    }
}
