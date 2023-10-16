<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

public function showForm()
{
    return view('summon-form');
}

class SummonLetterController extends Controller
{
    //

    public function generateSummon(Request $request)
{
    $data = $request->validate([
        'recipient_name' => 'required|string',
        'reason' => 'required|string',
        // Add validation rules for other fields
    ]);

    // Generate the PDF summon letter
    $pdf = PDF::loadView('summon-letter', compact('data'));

    // Save or send the PDF as needed
    // For example, save it to the storage directory
    $pdf->save(storage_path('app/summon-letter.pdf'));

    // You can also return the PDF as a download response
    // return $pdf->download('summon-letter.pdf');

    return 'Summon letter generated and PDF saved.';
}
}
