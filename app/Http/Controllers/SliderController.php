<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sliders'] = Slider::query()->latest()->get();
        return view('admin.slider.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['sliders'] = Slider::query()->latest()->get();
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::HOMESLIDER);
        }
        Slider::query()->create($data);
        return redirect()->back()->with('success','Slider Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $data['sliders'] = Slider::query()->latest()->get();
        $data['slider'] = $slider;
        return view('admin.slider.index')->with($data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::HOMESLIDER);
        }
        $slider->update($data);
        return redirect()->route('slider.index')->with('success','Slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('success','Slider Successfully Deleted');
    }
}
