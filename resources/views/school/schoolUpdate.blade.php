@extends('../landing')

@section('page-content')
<h1 class="list-header">School Update</h1>
<span>
    @session('success')
         {{ $value }}
    @endsession
    @session('failure')
         {{ $value }}
    @endsession
    @session('same-entries')
         {{ $value }}
    @endsession
</span>
<form action="{{ route('processSchoolUpdate', [$school['schoolid'], 'page' => $page]) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td style="width: 10em;">School ID:</td>
            <td style="width: 30em;"><input type="text" id="schoolID" name="schoolID" value="{{ $school['schoolid'] }}" readonly class="data-input"></td>
        </tr>
        <tr>
            <td>School Full Name:</td>
            <td><input type="text" id="schoolFullName" name="schoolFullName" value="{{ $school['schoolfullname'] }}" class="data-input"></td>
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
            <td><input type="text" id="schoolShortName" name="schoolShortName" value="{{ $school['schoolshortname'] }}" class="data-input"></td>
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
                <button type="submit" name="saveChanges" class="btn">
                    Update School Entry
                </button>
                <button type="submit" name="clearChanges" class="btn">
                    Reset Form
                </button>
                <a href="{{ route('schoolList', ['page' => $page]) }}" class="btn btn-danger">
                    Exit
                </a>
            </td>
        </tr>
    </table>
</form>
@endsection
