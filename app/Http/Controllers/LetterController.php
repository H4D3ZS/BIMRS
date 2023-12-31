<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade as PDF;

class LetterController extends Controller
{
    public function showForm()
    {
        return view('letters.letter-form');
    }

    public function generatePDF(Request $request)
    {
        $data = [
            'complainantName' => $request->complainantName, // Make sure the field name matches the form
            'respondentName' => $request->respondentName, // Make sure the field name matches the form
            'caseNumber' => $request->caseNumber,
            'complaintDescription' => $request->complaintDescription,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'receivedDay' => $request->receivedDay,
            'receivedMonth' => $request->receivedMonth,
            'receivedYear' => $request->receivedYear,
        ];

        $pdf = PDF::loadView('letters.letter', compact('data'));

        return $pdf->download('letter.pdf');

    }
}
