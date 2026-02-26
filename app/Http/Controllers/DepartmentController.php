<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function departmentList(){
        $departments = Department::orderBy('deptfullname')->simplePaginate(7);

        return view('department.departmentList', compact('departments'));
    }
}
