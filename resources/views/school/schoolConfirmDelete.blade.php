@extends('../landing')

@section('page-content')
<form action="{{ route('finalizeSchoolDelete',[ $schoolID ]) }}" method="post">
    @csrf
    <input type="hidden" name="schoolID" value="{{ $schoolID }}">
    <input type="hidden" name="schoolFullName" value="{{ $schoolFullName }}">
    <input type="hidden" name="schoolShortName" value="{{ $schoolShortName }}">
    <p>
        You are about to delete the following school entry:<br>
        <table style="
                    width: 35vw;
                    margin-top: 1em;
                    margin-bottom: 1em;
                    border: 1px solid black;
                    border-collapse: collapse;
        ">
            <tr>
                <td style="border: 1px solid black; padding: 0.5em;">
                    <strong>School ID:</strong>
                </td>
                <td style="border: 1px solid black; padding: 0.5em;">
                    {{ $schoolID }}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 0.5em;">
                    <strong>School Full Name:</strong>
                </td>
                <td style="border: 1px solid black; padding: 0.5em;">
                    {{ $schoolFullName }}
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; padding: 0.5em;">
                    <strong>School Short Name:</strong>
                </td>
                <td style="border: 1px solid black; padding: 0.5em;">
                    {{ $schoolShortName }}
                </td>
            </tr>
        </table>
    </p>
    <p>Are you sure you want to delete this school entry?</p>
    <br>
    <p>
       This entry is part of a high-level relationship in the database.<br>
       Deleting this entry may affect related data.
    </p>
    <button type="submit" name="finalDelete" class="btn btn-danger">
        Yes, Delete Entry
    </button>
    <a href="{{ route('schoolDelete',[$schoolID, 'page' => $page]) }}" class="btn btn-primary">
        No, Cancel
    </a>
</form>
@endsection
