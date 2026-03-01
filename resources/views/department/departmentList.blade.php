@extends('../landing')

@section('page-content')
<h1 class="list-header">Department List - {{ $school['schoolfullname'] }}</h1>
<!-- <hr class="list-header"> -->
<div>
    <h2>
        <a href="" class="btn btn-primary btn-list-create">
            @include("slugs/create-slug")
            Create Department Entry
        </a>
        <a href="" class="btn btn-secondary">
            @include("slugs/back-slug")
            Back
        </a>
    </h2>
</div>
<div class="list-table-container">
    <table class="list-table">
        <tr>
            <th>Department ID</th>
            <th>Department Full Name</th>
            <th>Department Short Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department['deptid'] }}</td>
            <td>{{ $department['deptfullname'] }}</td>
            <td>{{ $department['deptshortname'] }}</td>
            <td class="centered-actions">
                <a href="" class="btn btn-primary">
                    @include("../slugs/edit-slug")
                    Update
                </a>
                <a href="" class="btn btn-danger">
                    @include("../slugs/delete-slug")
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<table width="100%">
    <tr>
        <td width="80%;">
            <span>
                Total of: @php echo count($departments);  echo (count($departments) === 1) ? ' department' : ' departments'; @endphp in the database
            </span>
        </td>
        <td width="20%;">
            {{ $departments->links() }}
        </td>
    </tr>
</table>
@endsection
