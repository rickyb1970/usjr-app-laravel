@extends('../landing')

@section('page-content')
<h1 class="list-header">Select School and Department</h1>
<form action="{{ route('processChooseSchoolDepartment') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>
                @if(!@session('program.selection.school'))
                    <select name="schoolID" id="schoolID" class="school-select">
                        <option value=null selected hidden disabled>Select School</option>
                        @foreach ($schools as $school)
                           <option value="{{ $school['schoolid'] }}">{{ $school['schoolfullname'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="selectSchool" class="btn btn-primary" style="width: 10em;">Select School</button>
                @else

                    <select name="" id="" class="school-select selected-item" disabled>
                        <option value="">{{ $school['schoolfullname'] }}</option>
                    </select>
                    <button type="" name="" class="btn btn-disabled" disabled style="width: 10em;">Select School</button>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if(!@session('program.selection.school'))
                    <select name="" id="" class="school-select" disabled>
                        <option value=null selected hidden disabled>Select Department</option>
                    </select>
                    <button type="" name="" class="btn btn-disabled" disabled style="width: 10em;">Select Department</button>
                @else
                    <select name="departmentID" id="departmentID" class="school-select">
                        <option value=null selected hidden disabled>Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department['deptid'] }}">{{ $department['deptfullname'] }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="selectDepartment" class="btn btn-primary" style="width: 10em;">Select Department</button>
                    <button type="submit" name="backToSchool" class="btn btn-secondary">Back</button>
                @endif
            </td>
        </tr>
    </table>
</form>
@endsection
