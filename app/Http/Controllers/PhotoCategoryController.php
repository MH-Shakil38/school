<?php

namespace App\Http\Controllers;

use App\Models\PhotoCategory;
use Illuminate\Http\Request;

class PhotoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = PhotoCategory::query()->orderByDesc('id')->get();
        return view('admin.photo.category')->with($data);
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
        PhotoCategory::query()->create($request->all());
        return redirect()->back()->with('success','Photo category Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoCategory $photoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoCategory $photoCategory)
    {
        $data['categories'] = PhotoCategory::query()->orderByDesc('id')->get();
        $data['category'] = $photoCategory;
        return view('admin.photo.category')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhotoCategory $photoCategory)
    {
        $photoCategory->update($request->all());
        return redirect()->route('photo-categories.index')->with('success','Photo category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoCategory $photoCategory)
    {
        //
    }
}
