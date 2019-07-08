<?php

namespace App\Http\Controllers;

use App\User;
use App\Work;
use App\WorkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return response($works, 200);
    }

    public function store(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));
        $workCategory = WorkCategory::findOrFail($request->input('work_category_id'));

        return Work::create([
            'user_id' => $user->id,
            'work_category_id' => $workCategory->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($request->input('user_id'));
        $workCategory = WorkCategory::findOrFail($request->input('description'));

        $work = Work::findOrFail($id);

        $work->user_id = $user->id;
        $work->work_category_id = $workCategory->id;
        $work->title = $request->input('title');
        $work->description = $request->input('description');

        $work->saveOrFail();
        return response($work, 200);
    }

    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $work->delete();
    }

    public function getWorkSuggestions($technicianId)
    {
        $works = DB::table('technicians')
            ->join('technician_work_category', 'technician_work_category.technician_id', '=', 'technicians.id')
            ->join('work_categories', 'work_categories.id', '=', 'technician_work_category.work_category_id')
            ->join('works', 'works.work_category_id', '=', 'work_categories.id')
            ->where('technicians.id', '=', $technicianId)
            ->where('works.status', '=', 'pending')
            ->select('works.*', 'work_categories.category')
            ->get();

        return response()->json($works);
    }

    public function getApplications($id)
    {
        $works = Work::with('technicians')->where('user_id', '=', $id)->get();
        return response()->json($works, 200);
    }

    public function getUserAllPostedWork($id)
    {
        $works = Work::join('work_categories','works.work_category_id','=','work_categories.id')
            ->where('user_id', '=', $id)
            ->select(['works.*','work_categories.category'])
            ->get();
        return response()->json($works, 200);
    }
}
