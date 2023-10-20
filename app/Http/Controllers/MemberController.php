<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function create()
    {
        return view('members');
    }

    public function store(Request $request)
    {
        // Validate and save a new member
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'official_committe' => 'required',
            'year_of_service' => 'required',
        ]);

        Member::create($validatedData);

        // Redirect to a success page or back to the form
        return redirect()->route('members.create')->with('success', 'Member added successfully');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('members', compact('member'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the member with the given ID
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'official_committe' => 'required',
            'year_of_service' => 'required',
        ]);

        $member = Member::find($id);
        $member->update($validatedData);

        // Redirect to a success page or back to the form
        return redirect()->route('members.edit', $id)->with('success', 'Member updated successfully');
    }

    public function destroy($id)
    {
        // Delete the member with the given ID
        $member = Member::find($id);
        $member->delete();

        // Redirect to a success page or elsewhere as needed
        return redirect()->route('members.create')->with('success', 'Member deleted successfully');
    }
}
