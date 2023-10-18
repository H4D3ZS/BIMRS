<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Models
use App\Models\blotters;
use App\Models\resident_info;
use App\Models\person_involve;
//Plugins
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Validator;

class BlotterController extends Controller
{

    public function index(Request $request)
    {
        $blotters = blotters::latest()->get();

        dd($blotters);

        return view('pages.AdminPanel.blotter', ['blotters'=>$blotters]);
    }


    public function store(Request $request)
    {
        
    }

    public function createIDN(Request $request)
    {
            if ($request->schedule_date != null) {
                $request->schedule = "Schedule";
            } else {
                $request->schedule = "Unschedule";
            }

            if ($request->status == "Settled") {
                $request->schedule = "Settled";
            }

            $blotters = blotters::updateOrCreate(
                ['blotter_id' => $request->blotter_id],
                [
                    'incident_location' => $request->incident_location,
                    'incident_type' => $request->incident_type,
                    'date_incident' => $request->date_incident,
                    'time_incident' => $request->time_incident,
                    'date_reported' => $request->date_reported,
                    'time_reported' => $request->time_reported,
                    'status' => $request->status,
                    'schedule_date' => $request->schedule_date,
                    'schedule' => $request->schedule,
                    'incident_narrative' => $request->incident_narrative
                ]
            );

            return redirect()->back();

            // return response()->json(['success' => 'New Blotter saved successfully.']);
    }


    public function show(blotters $blotter)
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $resident = resident_info::all();
        $blotter = blotters::all();
        return view('pages.AdminPanel.blotter', ['blotter' => $blotter,  'resident' => $resident]);
    }


    public function edit($id)
    {

        $blotter = blotters::find($id);
        $person_involve = person_involve::where('blotter_id', $blotter->blotter_id)->get();

        return response()->json([$blotter, $person_involve]);
    }






    public function destroy($id)
    {
        blotters::find($id)->delete();

        return response()->json(['success' => 'Blotter deleted successfully.']);
    }
}
