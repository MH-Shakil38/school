<?php

namespace App\Http\Controllers;

use App\Models\VideoCategory;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['videos'] = VideoGallery::query()->with(['category'])->whereNull('deleted_at')->latest()->get();
        $data['categories'] = VideoCategory::query()
            ->where('status',1)
            ->whereNull('deleted_at')
            ->latest()
            ->get();
        return view('admin.video.index')->with($data);
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
            'video_id'=>'required',
        ]);
        VideoGallery::query()->create($request->all());
        return redirect()->back()->with('success','Successfully Video Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoGallery $videoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoGallery $videoGallery)
    {
        $data['videos'] = VideoGallery::query()->with(['category'])->whereNull('deleted_at')->latest()->get();
        $data['categories'] = VideoCategory::query()
            ->where('status',1)
            ->whereNull('deleted_at')
            ->latest()
            ->get();
        $data['video'] = $videoGallery;
        return view('admin.video.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoGallery $videoGallery)
    {
        $request->validate([
            'video_id'=>'required',
        ]);
        $videoGallery->update($request->all());
        return redirect()->route('video.galleries.index')->with('success','Successfully Video Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGallery $videoGallery)
    {
        //
    }
}
