<!DOCTYPE html>
<html>
<head>
    <title>Letter</title>
</head>
<body>
    <p>Office of the Lupong Tagapagmayapa</p>
    <p>Barangay Case No: {{ $caseNumber }}</p>

    <p>For:</p>
    <p>Complainants</p>
    <p>-against-</p>
    <p>Respondents</p>

    <p>Complainants</p>
    <p>I/We hereby complain against the above respondent for violating my/our rights and interest in the following manner:</p>

    <p>{{ $complaintDescription }}</p>

    <p>Therefore, I/we pray that the following reliefs be granted to me/us in accordance and or equity.</p>

    <p>Made this {{ $day }} day of {{ $month }} of {{ $year }}</p>
    <p>Received and filed this {{ $receivedDay }} day of {{ $receivedMonth }} {{ $receivedYear }}</p>
    <p>This {{ $receivedDay }} day of month and year, at Baluntay, Alabel, Sarangani Province</p>
</body>
</html>
