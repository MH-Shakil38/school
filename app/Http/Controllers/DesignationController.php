<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['designations'] = Designation::query()->where('status',1)->orderBy('id','ASC')->get();
        return view('admin.configuration.designation')->with($data);
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
        Designation::query()->create($request->all());
        return redirect()->back()->with('success','Successfully data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        $data['designations'] = Designation::query()->orderBy('id','ASC')->get();
        $data['designation'] = $designation;
        return view('admin.configuration.designation')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $designation->update($request->all());
        return redirect()->route('designations.index')->with('success','Successfully data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        //
    }
}
