<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Department;
use App\Http\Requests\SchoolCreateRequest;
use App\Http\Requests\SchoolUpdateRequest;
use Illuminate\Http\RedirectResponse;

class SchoolController extends Controller
{
    //
    public function schoolList() {
        session()->forget('deleted');

        $schools = School::orderBy('schoolid')->simplePaginate(7);
        $totalSchools = School::count();

        return view('school/schoolList', compact('schools','totalSchools'));
    }

    public function schoolCreate(){
        return view('school/schoolCreate');
    }

    public function processSchoolCreate(SchoolCreateRequest $inputRequest): RedirectResponse {
        session()->forget('failure');

        if($inputRequest->has('clearEntries')){
            return redirect()->back();
        }

        // School::create($inputRequest->validated());

        School::create([
            'schoolid' => $inputRequest->schoolID,
            'schoolfullname' => $inputRequest->schoolFullName,
            'schoolshortname' => $inputRequest->schoolShortName,
        ]);

        return redirect()->back()->withInput($inputRequest->all())->withSuccess('School entry created successfully.');

    }

    public function schoolUpdate(int $schoolid, Request $request) {
        $school = School::find($schoolid);
        $page = $request->page;

        return view('school/schoolUpdate', compact('school', 'page'));
    }

    public function processSchoolUpdate(SchoolUpdateRequest $inputRequest, School $school) {
        session()->forget('failure');

        if($inputRequest->has('clearChanges')){
            return redirect()->back();
        }

        $inputData = $inputRequest->validated();

        $inputData = $inputRequest->safe()->only(['schoolFullName', 'schoolShortName']);

        $school->fill([
            'schoolfullname' => $inputData['schoolFullName'],
            'schoolshortname' => $inputData['schoolShortName'],
        ]);

        if(!$school->isDirty()){
            return redirect()->back()->with('same-entries','The values are the same as the original values.');
        } else {

            $school->save();
            return redirect()->back()->withInput($inputRequest->all())->withSuccess('School entry updated successfully.');
        }
    }

    public function schoolDelete(int $schoolid, Request $request){
        $school = School::find($schoolid) ?? session()->get('deleted');

        $page = $request->page;

        return view('school.schoolDelete', compact('school', 'page'));
    }

    public function processSchoolDelete(int $schoolid, Request $request) {

        if($request->has('proceed')){
            return view('school.schoolConfirmDelete',[
                'schoolID' => $schoolid,
                'schoolFullName' => $request->schoolFullName,
                'schoolShortName' => $request->schoolShortName,
                'page' => $request->page,
            ]);
        }
    }

    public function finalizeSchoolDelete(int $schoolid, Request $request) {

        $department = Department::where('deptschoolid', $schoolid)->get();

        if(count($department) === 0){
            $school = School::find($schoolid);

            if($school->delete()){
                session()->flash('deleted.schoolid', $request->schoolID);
                session()->flash('deleted.schoolfullname', $request->schoolFullName);
                session()->flash('deleted.schoolshortname', $request->schoolShortName);

                return redirect()->back()->withSuccess('School record removed successfully.');

            } else {

                return redirect()->back()->with('deleteError','School record removed successfully.');
            }

        } else {

            return redirect()->back()->with('deleteError', 'Cannot delete school record because it is associated with existing departments.');

        }
    }


}
