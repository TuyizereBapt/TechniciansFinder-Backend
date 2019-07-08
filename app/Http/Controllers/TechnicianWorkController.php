<?php

namespace App\Http\Controllers;

use App\Technician;
use App\TechnicianWork;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnicianWorkController extends Controller
{
    public function index()
    {
        $technicianWorks = TechnicianWork::all();
        return response($technicianWorks, 200);
    }

    public function store(Request $request)
    {
        $technician = Technician::findOrFail($request->input('technician_id'));
        $work = Work::findOrFail($request->input('work_id'));

        $existing = TechnicianWork::where('technician_id', '=', $technician->id)
            ->where('work_id', '=', $work->id)
            ->first();

        if ($existing) {
            return response()->json($existing);
        }

        $technicianWork = new TechnicianWork();
        $technicianWork->technician_id = $technician->id;
        $technicianWork->work_id = $work->id;
        $technicianWork->saveOrFail();

        return response()->json($technicianWork);
    }

    public function show($id)
    {
        $technicianWork = TechnicianWork::findOrFail($id);

        return response($technicianWork, 200);
    }

    public function update(Request $request, $id)
    {
        $technicianWork = TechnicianWork::findOrFail($id);
        $technicianWork->start_time = $request->input('start_time');
        $technicianWork->end_time = $request->input('end_time');
        $technicianWork->status = $request->input('status');
        $technicianWork->approved = $request->input('approved');
        $technicianWork->rating = $request->input('rating');
        $technicianWork->feedback = $request->input('feedback');

        $technicianWork->saveOrFail();

        return response($technicianWork, 200);
    }

    public function destroy($id)
    {
        $technicianWork = TechnicianWork::findOrFail($id);

        $technicianWork->delete();

        return response("Successfully deleted");
    }

    public function getWorkApplications($workId)
    {
        $technicianWorks = TechnicianWork::where('work_id', $workId)->get();

        return response($technicianWorks, 200);
    }

    public function getUserAllWorksApplications($userId)
    {
        $technicianWorks = DB::table('works')
            ->join('technician_works', 'works.id', '=', 'technician_works.work_id')
            ->join('technicians', 'technicians.id', '=', 'technician_works.technician_id')
            ->where('works.user_id', '=', $userId)
            ->where('technician_works.approved', '=', false)
            ->select('technician_works.*', 'works.*', 'technicians.*')
            ->get();

        return response($technicianWorks, 200);
    }

    public function getTechnicianAllWorksApplications($technicianId)
    {
        $technicianWorks = DB::table('works')
            ->join('technician_works', 'works.id', '=', 'technician_works.work_id')
            ->join('technicians', 'technicians.id', '=', 'technician_works.technician_id')
            ->where('technician_works.technician_id', '=', $technicianId)
            ->select('technician_works.*', 'works.*', 'technicians.*')
            ->get();

        return response($technicianWorks, 200);
    }
}
