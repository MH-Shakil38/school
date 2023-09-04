<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['religions'] = Religion::query()->orderBy('id','ASC')->get();
        return view('admin.configuration.religion')->with($data);
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
        Religion::query()->create($request->all());
        return redirect()->back()->with('success','Successfully data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Religion $religion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Religion $religion)
    {
        $data['religions'] = Religion::query()->orderBy('id','ASC')->get();
        $data['religion'] = $religion;
        return view('admin.configuration.religion')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Religion $religion)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $religion->update($request->all());
        return redirect()->route('religions.index')->with('success','Successfully data updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Religion $religion)
    {
        //
    }
}
