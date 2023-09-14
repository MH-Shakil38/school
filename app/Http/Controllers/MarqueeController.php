<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\marquee;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['marquees']  = marquee::query()->with(['notice'])->latest()->get();
        $data['notices']  = Document::query()->where('status',1)->latest()->get();
        return view('admin.marquee.index')->with($data);
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
        marquee::query()->create($request->all());
        return redirect()->back()->with('success','successfully latest news updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(marquee $marquee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(marquee $marquee)
    {
        $data['marquees']  = marquee::query()->with(['notice'])->latest()->get();
        $data['notices']  = Document::query()->where('status',1)->latest()->get();
        $data['notice']  = $marquee;
        return view('admin.marquee.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, marquee $marquee)
    {
        $marquee->update($request->all());
        return redirect()->route('marquees.index')->with('success','successfully latest news updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(marquee $marquee)
    {
        //
    }
}
