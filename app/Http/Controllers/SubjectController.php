<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['subjects'] = Subject::getAll(1);
        return view('admin.configuration.subject')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $data = $request->only('name','status');
        Subject::query()->create($data);
        return redirect()->back()->with('success','Subject Successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        $data['subjects'] = Subject::getAll(1);
        $data['subject'] = $subject;
        return view('admin.configuration.subject')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $data = $request->only('name','status');
        $subject->update($data);
        return redirect()->route('subjects.index')->with('success','Subject Successfully added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
