@extends('../landing')

@section('page-content')
@php
//    session()->forget('deleted');
@endphp
<h1 class="list-header">School List</h1>
<!-- <hr class="list-header"> -->
<div>
    <h2>
        <a href="{{ route('schoolCreate') }}" class="btn btn-primary btn-list-create">
            @include("../slugs/create-slug")
            Create School Entry
        </a>
    </h2>
</div>
<div class="list-table-container">
    <table class="list-table">
        <tr>
            <th>School ID</th>
            <th>School Full Name</th>
            <th>School Short Name</th>
            <th>Actions</th>
        </tr>
        @php
        //    dd($schools)
        @endphp
        @foreach ($schools as $school)
        <tr>
            <td>{{ $school->schoolid }}</td>
            <td>{{ $school->schoolfullname }}</td>
            <td>{{ $school->schoolshortname }}</td>
            <td class="centered-actions">
                <a href="{{ route('schoolUpdate', [$school->schoolid, 'page' => $schools->currentPage()]) }}" class="btn btn-primary">
                    @include("../slugs/edit-slug")
                    Update
                </a>
                <a href="{{ route('schoolDelete', [$school->schoolid, 'page' => $schools->currentPage()]) }}" class="btn btn-danger">
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
                Total of: {{ $totalSchools }}  schools in the database
            </span>
        </td>
        <td width="20%;">
            {{ $schools->links() }}
        </td>
    </tr>
</table>
@endsection
