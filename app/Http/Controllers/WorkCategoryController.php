<?php

namespace App\Http\Controllers;

use App\WorkCategory;
use Illuminate\Http\Request;

class WorkCategoryController extends Controller
{
    public function index()
    {
        $workCategories = WorkCategory::all();

        return response($workCategories, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'bail|required|min:4',
        ]);

        $category = new WorkCategory();

        $category->category = $request->input('category');
        $category->description = $request->input('description');

        $category->saveOrFail();

        return response()->json([
            'status' => 'success',
            'message' => 'Category ' . $category->category . ' was successfully saved!',
        ], 200);

    }

    public function show($id)
    {
        $category = WorkCategory::findOrFail($id);

        return response()->json([
            'category' => $category
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'bail|required|min:4',
        ]);

        $category = WorkCategory::findOrFail($id);

        $category->category = $request->input('category');
        $category->description = $request->input('description');

        $category->saveOrFail();

        return response()->json([
            'status' => 'success',
            'message' => 'Category ' . $category->category . ' was successfully updated!',
        ], 200);
    }

    public function destroy($id)
    {
        $category = WorkCategory::findOrFail($id);
        $category->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Category ' . $category->category . ' was successfully deleted!',
        ], 200);
    }

    public function searchByCategory(Request $request)
    {
        $workCategories = WorkCategory::where('category', 'like', '%' . $request->input('query') . '%')
            ->get();
        return response($workCategories, 200);
    }
}
