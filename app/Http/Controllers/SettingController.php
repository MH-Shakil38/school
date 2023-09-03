<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['setting'] = Setting::query()->latest()->first();
       Return view('admin.configuration.setting.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        Return view('admin.configuration.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('logo')){
            $data['logo'] = self::imageUpload($request->logo,ServiceFile::SCHOOLIMAGE);
        }
        Setting::query()->create($data);
        return redirect()->route('settings.index')->with('success','Settings Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $data['setting'] = Setting::query()->latest()->first();
        Return view('admin.configuration.setting.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->all();

        if ($request->hasFile('logo')){
            $data['logo'] = self::imageUpload($request->logo,ServiceFile::SCHOOLIMAGE);
        }
        $setting->update($data);
        return redirect()->route('settings.index')->with('success','Settings Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
