@extends('../landing')

@section('page-content')
<h1 class="list-header">School Delete</h1>
<span>
    @session('success')
         {{ $value }}
    @endsession
    @session('deleteError')
         {{ $value }}
    @endsession
</span>
<form action="{{ route('processSchoolDelete', [$school['schoolid'], 'page' => $page]) }}" method="post">
    @csrf
    <table>
        <tr>
            <td style="width: 10em;">School ID:</td>
            <td style="width: 30em;"><input type="text" id="schoolID" name="schoolID" value="{{ $school['schoolid'] ?? old('schoolID') }}" readonly class="data-input"></td>
        </tr>
        <tr>
            <td>School Full Name:</td>
            <td><input type="text" id="schoolFullName" name="schoolFullName" value="{{ $school['schoolfullname'] ?? old('schoolFullName') }}" readonly class="data-input"></td>
            <td>
            </td>
        </tr>
        <tr>
            <td>School Short Name:</td>
            <td><input type="text" id="schoolShortName" name="schoolShortName" value="{{ $school['schoolshortname'] ?? old('schoolShortName') }}" readonly class="data-input"></td>
            <td>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                @if(session()->has('deleted'))
                    <a href="{{ route('schoolList',['page' => $page]) }}" class="btn btn-primary">
                        Back to School List
                    </a>
                @else
                    <a href="{{ route('schoolList',['page' => $page]) }}" class="btn btn-primary">
                        Cancel Operation
                    </a>
                    <button type="submit" name="proceed" class="btn btn-danger">
                        Proceed
                    </button>
                @endif
            </td>
        </tr>
    </table>
</form>
@endsection
