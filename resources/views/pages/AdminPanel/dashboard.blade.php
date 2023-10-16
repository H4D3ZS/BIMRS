@extends('layouts.apps')
@section('content')

<div class="col-sm-12 text-left">
    <h1 class="border-bottom border-bot pt-3">Dashboard</h1>
</div>

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

@endsection
