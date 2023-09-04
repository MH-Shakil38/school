<?php

namespace App\Http\Controllers;

use App\Models\MessageCategory;
use Illuminate\Http\Request;

class MessageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = MessageCategory::query()->latest()->get();
        return view('admin.message.category')->with($data);
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
        $data = $request->only(['name','position','stats']);
        MessageCategory::query()->create($data);
        return redirect()->back()->with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MessageCategory $messageCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MessageCategory $messageCategory)
    {
        $data['categories'] = MessageCategory::query()->latest()->get();
        $data['category'] = $messageCategory;
        return view('admin.message.category')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MessageCategory $messageCategory)
    {
        $data = $request->all();
        $messageCategory->update($data);
        return redirect()->route('message-category.index')->with('success','Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MessageCategory $messageCategory)
    {
        //
    }
}