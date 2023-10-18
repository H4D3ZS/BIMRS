@extends('layouts.apps')

@section('content')
    <form action="{{ route('generatePDF') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="caseNumber">Barangay Case No:</label>
            <input type="text" name="caseNumber" id="caseNumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="complaintDescription">Complaint Description:</label>
            <textarea name="complaintDescription" id="complaintDescription" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" id="day" class="form-control">
        </div>
        <div class="form-group">
            <label for="month">Month:</label>
            <input type="text" name="month" id="month" class="form-control">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" name="year" id="year" class="form-control">
        </div>
        <div class="form-group">
            <label for="receivedDay">Received Day:</label>
            <input type="text" name="receivedDay" id="receivedDay" class="form-control">
        </div>
        <div class="form-group">
            <label for="receivedMonth">Received Month:</label>
            <input type="text" name="receivedMonth" id="receivedMonth" class="form-control">
        </div>
        <div class="form-group">
            <label for="receivedYear">Received Year:</label>
            <input type="text" name="receivedYear" id="receivedYear" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Generate PDF</button>
    </form>
@endsection
