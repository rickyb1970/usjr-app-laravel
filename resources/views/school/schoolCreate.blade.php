@extends('../landing')

@section('page-content')
<h1 class="list-header">School Create</h1>
<span>
    @session('success')
        {{ $value }}
    @endsession
    @session('failure')
        {{ $value }}
    @endsession
</span>
<form action="{{ route('processSchoolCreate') }}" method="post">
    @csrf
    <table>
        <tr>
            <td style="width: 10em;">School ID:</td>
            <td style="width: 30em;"><input type="text" id="schoolID" name="schoolID" value="{{ old('schoolID') }}" class="data-input"></td>
            <td>
                <span>
                    @error('schoolID')
                         {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>School Full Name:</td>
            <td><input type="text" id="schoolFullName" name="schoolFullName" value="{{ old('schoolFullName') }}" class="data-input"></td>
            <td>
                <span>
                    @error('schoolFullName')
                         {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>School Short Name:</td>
            <td><input type="text" id="schoolShortName" name="schoolShortName" value="{{ old('schoolShortName') }}" class="data-input"></td>
            <td>
                <span>
                    @error('schoolShortName')
                         {{ $message }}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="saveNewSchoolEntry" class="btn">
                    Save New School Entry
                </button>
                <button type="submit" name="clearEntries" class="btn">
                    Reset Form
                </button>
                <a href="{{ route('schoolList') }}" class="btn btn-danger">
                    Exit
                </a>
            </td>
        </tr>
    </table>
</form>
@endsection
