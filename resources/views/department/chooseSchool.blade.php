@extends('../landing')

@section('page-content')
<h1 class="list-header">Select School</h1>
<form action="{{ route('processChooseSchool') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>
                <select name="schoolID" id="schoolID" class="school-select">
                    <option value=null selected hidden disabled>Select School</option>
                    @foreach ($schools as $school)
                        <option value="{{ $school['schoolid'] }}">{{ $school['schoolfullname'] }}</option>
                    @endforeach
                </select>
                <button type="submit" name="selectSchool" class="btn btn-primary" style="width: 10em;">Select School</button>
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
    </table>
</form>
@endsection
