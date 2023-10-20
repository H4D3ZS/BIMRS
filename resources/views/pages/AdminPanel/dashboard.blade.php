@extends('layouts.apps')


@section('content')

<div class="row pt-4 pl-4 pr-4">
    <div class="table-responsive border">
        <div class="col-sm-12 bg-dark text-white pt-2 pb-2 text-left dashboard-margin">
            <center><h3 class="mb-0"><b>Barangay Current Member</b></h3></center>
        </div>
        <table class="table table-striped jambo_table bulk_action text-center">
            <thead>
                <tr class="headings">
                    <th class="column-title">Name</th>
                    <th class="column-title">Position</th>
                    <th class="column-title">Year of Service</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brgy_official as $official) <!-- Updated variable name here -->
                <tr>
                    <td>{{ $official->name }}</td>
                    <td>{{ $official->position }}</td>
                    <td>{{ $official->year_of_service }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="col-sm-12 text-left">
    <h1 class="border-bottom border-bot pt-3">
        @if(isset($member))
            Edit Member
        @else
            Add New Member
        @endif
    </h1>
</div>



<div class="row pt-4 pl-4 pr-4">
    <div class="col-sm-12">
        @if(isset($member))
            <!-- Edit Member Form -->
            <form method="post" action="{{ route('members.update', $member->id) }}">
                @method('PUT')
            @else
            <!-- Add Member Form -->
            <form method="post" action="{{ route('members.store') }}">
        @endif
        @csrf
        <!-- Member details (name, position, year of service) -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required value="{{ isset($member) ? $member->name : '' }}">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" required value="{{ isset($member) ? $member->position : '' }}">
        </div>
        <div class="form-group">
            <label for="year_of_service">Year of Service</label>
            <input type="text" name="year_of_service" class="form-control" required value="{{ isset($member) ? $member->year_of_service : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">
            @if(isset($member))
                Update Member
            @else
                Add Member
            @endif
        </button>
    </form>

    @if(isset($member))
        <!-- Delete Member Form -->
        <form method="post" action="{{ route('members.destroy', $member->id)">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">
                Delete Member
            </button>
        </form>
    @endif
</div>
</div>
@endsection
