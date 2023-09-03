<?php

namespace App\Http\Controllers;

use App\Models\PhotoCategory;
use App\Models\PhotoGallery;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['photos'] = PhotoGallery::query()->latest()->whereNull('deleted_at')->get();
        $data['categories'] = PhotoCategory::query()->where('status',1)->latest()->get();
        return view('admin.photo.index')->with($data);
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
            'image'=>'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::PHOTOGALLERY);
        }
        PhotoGallery::query()->create($data);
        return redirect()->back()->with('success','Successfully Photo Added');

    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        //
    }
}
