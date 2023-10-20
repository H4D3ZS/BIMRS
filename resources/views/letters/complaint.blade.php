<!DOCTYPE html>
<html>
<head>
    <title>Letter</title>
</head>
<body>
    <p>Office of the Lupong Tagapagmayapa</p>
    <p>Barangay Case No: {{ $data['caseNumber'] }}</p>
    <p>For:</p>
    <p>Complainants</p>
    <p>-against-</p>
    <p>Respondents</p>

    <p>Complainants</p>
    <p>I/We hereby complain against the above respondent for violating my/our rights and interest in the following manner:</p>

    <p>{{ $data['complaintDescription'] }}</p>

    <p>Therefore, I/we pray that the following reliefs be granted to me/us in accordance and or equity.</p>

    <p>Made this {{ $data['day'] }} day of {{ $data['month'] }} of {{ $data['year'] }}</p>
    <p>Received and filed this {{ $data['receivedDay'] }} day of {{ $data['receivedMonth'] }} {{ $data['receivedYear'] }}</p>
    <p>This {{ $data['receivedDay'] }} day of month and year, at Baluntay, Alabel, Sarangani Province</p>
</body>
</html>
