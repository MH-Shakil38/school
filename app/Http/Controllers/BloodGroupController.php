<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use Illuminate\Http\Request;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bloodGroups'] = BloodGroup::query()->orderBy('id','ASC')->get();
        return view('admin.configuration.blood-group')->with($data);
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
            'name'=>'required'
        ]);
        BloodGroup::query()->create($request->all());
        return redirect()->back()->with('success','Successfully data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(BloodGroup $bloodGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BloodGroup $bloodGroup)
    {
        $data['bloodGroups'] = BloodGroup::query()->orderBy('id','ASC')->get();
        $data['bloodGroup'] = $bloodGroup;
        return view('admin.configuration.blood-group')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BloodGroup $bloodGroup)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $bloodGroup->update($request->all());
        return redirect()->route('blood-groups.index')->with('success','Successfully data updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BloodGroup $bloodGroup)
    {
        //
    }
}
