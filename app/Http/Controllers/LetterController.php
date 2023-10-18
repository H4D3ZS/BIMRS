<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PDF;

class LetterController extends Controller
{
    public function showForm()
    {
        return view('/resources/views/letters/letter-form.blade.php');
    }

    public function generatePDF(Request $request)
    {
        $data = $request->validate([
            'caseNumber' => 'required',
            'complaintDescription' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'receivedDay' => 'required',
            'receivedMonth' => 'required',
            'receivedYear' => 'required',
        ]);

        $pdf = PDF::loadView('letter', $data);

        return $pdf->download('letter.pdf');
    }
}
