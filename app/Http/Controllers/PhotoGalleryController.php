<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\PhotoCategory;
use App\Models\PhotoGallery;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoGalleryController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['photos'] = PhotoGallery::query()->latest()->whereNull('deleted_at')->get();
        $data['gallery_photos'] = GalleryImage::query()->latest()->get();
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
        try {
            DB::beginTransaction();

            $data = $request->only(['category_id','title']);
            $store = PhotoGallery::query()->create($data);

//            dd($request->image);



            if ($request->hasFile('image')){
                foreach ($request->image as $info){
                $image = self::imageUpload($info,ServiceFile::PHOTOGALLERY);
                    GalleryImage::query()->create(
                        [
                            'post_id'=>$store->id,
                            'image'=>$image
                        ]);
                }
            }

            DB::commit();
            return redirect()->back()->with('success','Successfully Photo Added');

        }catch (\Throwable $e){
            DB::rollBack();
            dd($e->getMessage());
        }


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
    public function destroy(PhotoGallery $photoGallery,$id)
    {
        GalleryImage::query()->findOrFail($id)->delete();
        return redirect()->back()->with('success','Successfully Photo deleted');
    }
}
