<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['banners'] = Banner::query()->orderBy('position','ASC')->latest()->get();
        return view('admin.banner.index')->with($data);
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
        $request->validate(['image'=>'required']);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::BANNER);
        }
        Banner::query()->create($data);
        return redirect()->back()->with('success','successfully banner added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        $data['banner'] = $banner;
        $data['banners'] = Banner::query()->orderBy('position','ASC')->latest()->get();
        return view('admin.banner.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::BANNER);
        }
        $banner->update($data);
        return redirect()->route('banners.index')->with('success','successfully banner added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back();
    }
}
