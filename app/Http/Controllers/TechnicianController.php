<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTechnician;
use App\Http\Requests\UpdateTechnician;
use App\Technician;
use App\TechnicianWork;
use App\TechnicianWorkCategory;
use App\User;
use App\WorkCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TechnicianController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();

        return response($technicians, 200);
    }

    public function store(StoreTechnician $request)
    {
        $allData = $request->all();

        $technician = new Technician;

        $technician->f_name = $allData['f_name'];
        $technician->l_name = $allData['l_name'];
        $technician->birth_date = $allData['birth_date'];
        $technician->sex = $allData['sex'];
        $technician->marital_status = $allData['marital_status'];
        $technician->email = $allData['email'];
        $technician->phone = $allData['phone'];
        $technician->work_place = $allData['work_place'];
        $technician->work_place_lat = $allData['work_place_lat'];
        $technician->work_place_long = $allData['work_place_long'];

        $technician->saveOrFail();

        for ($i = 0; $i < count($allData['skills']); $i++) {
            $workCategory = WorkCategory::findOrFail($allData['skills'][$i]);
            $technician->workCategories()->save($workCategory);
        }


        //Saving Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = "technician_" . substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4);
            $imageName = $name . '_' . time() . '.' . $image->getClientOriginalExtension();

            $technician->image = $imageName;
            $technician->save();
            //Save the image only if the no error occurs in saving the technician
            $image->move(public_path('uploads/images'), $imageName);
        }//End of saving image

        User::create([
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role' => 'technician',
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Technician, ' . $technician->f_name . ' is successfully saved',
        ], 200);
    }

    public function show($id)
    {

        $technician = Technician::with(['workCategories', 'works'])->findOrFail($id);

        return response($technician, 200);
    }

    public function update(UpdateTechnician $request, $id)
    {
        $technician = Technician::findOrFail($id);

        $technician->f_name = $request->input('f_name');
        $technician->l_name = $request->input('l_name');
        $technician->birth_date = $request->input('birth_date');
        $technician->sex = $request->input('sex');
        $technician->marital_status = $request->input('marital_status');
        $technician->email = $request->input('email');
        $technician->phone = $request->input('phone');
        $technician->province = $request->input('province');
        $technician->district = $request->input('district');
        $technician->sector = $request->input('sector');
        $technician->cell = $request->input('cell');
        $technician->village = $request->input('village');
        $technician->work_place = $request->input('work_place');
        $technician->work_place_lat = $request->input('work_place_lat');
        $technician->work_place_long = $request->input('work_place_long');

        $technician->saveOrFail();

        return response()->json([
            'status' => 'success',
            'message' => 'Technician ' . $technician->f_name . ' is successfully updated!',
        ], 200);
    }

    public function destroy($id)
    {
        $technician = Technician::findOrFail($id);

        if ($technician->image != null) {
            unlink(public_path('uploads/images/' . $technician->image));//Delete image file
        }

        $user = User::whereEmail($technician->email)->get();

        if ($user->first() != null) {
            $user->first()->delete();
        }

        $technician->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Technician ' . $technician->f_name . ' was successfully deleted!',
        ], 200);
    }

    public function updateProfileImage(Request $request, $id)
    {

        $technician = Technician::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldImageFilename = $technician->image;
            $image = $request->file('image');
            $name = "technician_" . substr($image->getClientOriginalName(), 0, strlen($image->getClientOriginalName()) - 4);
            $imageName = $name . '_' . time() . '.' . $image->getClientOriginalExtension();

            $technician->image = $imageName;
            $technician->save();
            //Save the image only if the no error occurs in saving the technician
            $image->move(public_path('uploads/images'), $imageName);
            if ($oldImageFilename != null) {
                unlink(public_path('uploads/images/' . $oldImageFilename));//Delete old image file
            }
        }//End of updating image

        return response()->json([
            'status' => 'success',
            'message' => 'Profile image for ' . $technician->f_name . ' is successfully updated!',
        ], 200);
    }

    public function updateLocation(Request $request)
    {
        $id = $request->input('id');

        $technician = Technician::findOrFail($id);

//        $technician->work_place = $request->input('work_place');
        $technician->work_place_lat = $request->input('work_place_lat');
        $technician->work_place_long = $request->input('work_place_long');

        $technician->saveOrFail();

        return $this->getTechnicianProfileData($id);
    }

    public function getNearByTechnicians(Request $request)
    {
        $lat = $request->input('latitude');
        $lon = $request->input('longitude');

        /*Radius in Kilometers(km). E.g 10 means 10km*/
        $radius = 10;

        $technicians = Technician::closeTo($lat, $lon, $radius)->get();

        return response($technicians, 200);
    }

    public function getTotalTechnicians()
    {
        $tot = Technician::all()->count();
        return response()->json(['tot' => $tot], 200);
    }

    public function searchTechnicianByName(Request $request)
    {
        $technicians = Technician::where('f_name', 'like', '%' . $request->input('query') . '%')
            ->orWhere('l_name', 'like', '%' . $request->input('query') . '%')
            ->get();

        return response($technicians, 200);
    }

    public function searchTechnicianByNameWithRating(Request $request)
    {

        $technicians = Technician::with('works')
            ->where('f_name', 'like', '%' . $request->input('query') . '%')
            ->orWhere('l_name', 'like', '%' . $request->input('query') . '%')
            ->get();

        return response()->json($technicians, 200);
    }

    public function getTechnicianProfileData($id)
    {
        $technician = Technician::with('workCategories')->findOrFail($id);

        $technicianWorks = DB::table('technician_works')
            ->where('technician_id', '=', $id)
            ->where('status', '=', 'complete')
            ->where('approved', '=', '1')
            ->select(DB::raw('sum(rating) as total_points, count(id) as total_works'))
            ->first();

        $data = [
            'technician' => $technician,
            'work_stats' => $technicianWorks
        ];
        return response()->json($data, 200);
    }

}
