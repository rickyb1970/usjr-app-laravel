@extends('../landing')

@section('page-content')
<h1 class="list-header">Select School, Department and Program</h1>
<form action="{{ route('processSchoolDepartmentProgram') }}" method="post">
    <table>
        <tr>
            <td>
                @if(!@session('student.selection.school'))
                    <select name="schoolID" id="schoolID" class="school-select">
                        <option value=null selected hidden disabled>Select School</option>
                        @foreach ($schools as $school)
                        <option value="{{ $school['schoolid'] }}">{{ $school['schoolfullname'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="selectSchool" class="btn btn-primary"  style="width: 10em;">Select School</button>
                @else
                    <select name="" id="" class="school-select selected-item" disabled>
                        <option value="">{{ $school['collfullname'] }}</option>
                    </select>
                    <button type="button" name="" class="btn btn-disabled" disabled  style="width: 10em;">Select School</button>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if(!@session('student.selection.school'))
                    <select name="" id="" class="school-select" disabled>
                        <option value=null selected hidden disabled>Select Department</option>
                    </select>
                    <button type="" name="" class="btn btn-disabled" disabled  style="width: 10em;">Select Department</button>
                @elseif(@session('student.selection.school') && !@session('student.selection.department'))
                    <select name="departmentID" id="departmentID" class="school-select">
                        <option value=null selected hidden disabled>Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department['deptid'] }}">{{ $department['deptfullname'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="selectDepartment" class="btn btn-primary" style="width: 10em;">Select Department</button>
                    <button type="submit" name="backToSchool" class="btn btn-secondary">Back</button>
                @else
                    <select name="" id="" class="school-select selected-item" disabled>
                        <option value="">{{ $department['deptfullname'] }}</option>
                    </select>
                    <button type="button" name="" class="btn btn-disabled" disabled style="width: 10em;">Select Department</button>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if((!@session('student.selection.school') && !@session('student.selection.department')) || (@session('student.selection.school') && !@session('student.selection.department')))
                    <select name="" id="" class="school-select" disabled>
                        <option value=null selected hidden disabled>Select Program</option>
                    </select>
                    <button type="" name="" class="btn btn-disabled" disabled  style="width: 10em;">Select Program</button>
                @elseif(@session('student.selection.school') && @session('student.selection.department'))
                    <select name="programID" id="programID" class="school-select">
                        <option value=null selected hidden disabled>Select Program</option>
                        @foreach ($programs as $program)
                            <option value="{{ $program['progid'] }}">{{ $program['progfullname'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="selectProgram" class="btn btn-primary" style="width: 10em;">Select Program</button>
                    <button type="submit" name="backToDepartment" class="btn btn-secondary">Back</button>
                @endif
            </td>
        </tr>
    </table>
</form>
@endsection
