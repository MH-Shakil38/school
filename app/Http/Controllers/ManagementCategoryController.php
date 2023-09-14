<?php

namespace App\Http\Controllers;

use App\Models\ManagementCategory;
use Illuminate\Http\Request;

class ManagementCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = ManagementCategory::query()->get();
        return view('admin.management.category')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        ManagementCategory::query()->create($request->all());
        return redirect()->back()->with('success','Management Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(ManagementCategory $managementCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManagementCategory $managementCategory)
    {
        $data['categories'] = ManagementCategory::query()->get();
        $data['category'] = $managementCategory;
        return view('admin.management.category')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManagementCategory $managementCategory)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $managementCategory->update($request->all());
        return redirect()->route('management-categories.index')->with('success','Management Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManagementCategory $managementCategory)
    {
        //
    }
}
