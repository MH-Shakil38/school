<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\ManagementCategory;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['managements'] = Management::query()->get();
        $data['categories'] = ManagementCategory::query()->where('status',1)->orderBy('position','ASC')->get();
        return view('admin.management.index')->with($data);
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
            'phone'=>'required',
            'image'=>'required',
            'designation_id'=>'required'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::TEACHER_IMAGE);
        }
        Management::query()->create($data);
        return redirect()->back()->with('success','Info Successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Management $management)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Management $management)
    {
        $data['managements'] = Management::query()->get();
        $data['categories'] = ManagementCategory::query()->where('status',1)->orderBy('position','ASC')->get();
        $data['management'] = $management;
        return view('admin.management.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Management $management)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'designation_id'=>'required'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::TEACHER_IMAGE);
        }
        $management->update($data);
        return redirect()->route('managements.index')->with('success','Info Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Management $management)
    {
        //
    }
}
