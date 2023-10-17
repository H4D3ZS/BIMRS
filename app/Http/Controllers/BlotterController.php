<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlotterController extends Controller
{

    public function index()
{
    $blotters = Blotter::all(); // Fetch all Blotter records
    return view('blotters.index', compact('blotters'));
}

public function create()
{
    return view('blotters.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        // Define your validation rules here
    ]);

    $blotter = Blotter::create($validatedData);

    return redirect()->route('blotters.index')
        ->with('success', 'Blotter record created successfully');
}

public function edit(Blotter $blotter)
{
    return view('blotters.edit', compact('blotter'));
}

public function update(Request $request, Blotter $blotter)
{
    $validatedData = $request->validate([
        // Define your validation rules here
    ]);

    $blotter->update($validatedData);

    return redirect()->route('blotters.index')
        ->with('success', 'Blotter record updated successfully');
}

public function destroy(Blotter $blotter)
{
    $blotter->delete();
    return redirect()->route('blotters.index')
        ->with('success', 'Blotter record deleted successfully');
}
}
