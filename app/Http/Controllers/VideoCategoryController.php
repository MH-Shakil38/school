<?php

namespace App\Http\Controllers;

use App\Models\VideoCategory;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = VideoCategory::query()->whereNull('deleted_at')->latest()->get();
        return view('admin.video.category')->with($data);
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
        VideoCategory::query()->create($request->all());
        return redirect()->back()->with('success','successfully Category Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoCategory $videoCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoCategory $videoCategory)
    {
        $data['categories'] = VideoCategory::query()->whereNull('deleted_at')->latest()->get();
        $data['category'] = $videoCategory;
        return view('admin.video.category')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoCategory $videoCategory)
    {
        $videoCategory->update($request->all());
        return redirect()->route('video.categories.index')->with('success','successfully Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoCategory $videoCategory)
    {
        //
    }
}
