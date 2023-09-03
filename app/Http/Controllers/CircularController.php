<?php

namespace App\Http\Controllers;

use App\Models\Circular;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class CircularController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['circulars'] = Circular::query()->latest()->get();
        return view('admin.pages.circular')->with($data);
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
        $data = $request->all();
        if ($request->hasFile('file')){
            $data['file'] = self::imageUpload($request->file,ServiceFile::CIRCULAE);
        }
        Circular::query()->create($data);
        return redirect()->back()->with('success','Information Successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Circular $circular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Circular $circular)
    {
        $data['circulars'] = Circular::query()->latest()->get();
        $data['circular'] = $circular;
        return view('admin.pages.circular')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Circular $circular)
    {
        $data = $request->all();
        if ($request->hasFile('file')){
            $data['file'] = self::imageUpload($request->file,ServiceFile::CIRCULAE);
        }
        $circular->update($data);
        return redirect()->route('circulars.index')->with('success','Information Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Circular $circular)
    {
        //
    }
}
