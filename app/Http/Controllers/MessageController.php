<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['messages'] = Message::query()->with(['category'])->latest()->get();
       return view('admin.message.index')->with($data);
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
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::MESSAGE);
        }
        Message::query()->create($data);
        return redirect()->back()->with('success','Message added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        $data['messages'] = Message::query()->with(['category'])->latest()->get();
        $data['message'] = $message;
        return view('admin.message.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {

        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::MESSAGE);
        }
        $message->update($data);
        return redirect()->route('messages.index')->with('success','Message Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
