<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Designation;
use App\Models\Religion;
use App\Models\Subject;
use App\Models\Teacher;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['designations'] = Designation::allDesignation(1);
        $data['bloodGroups']  = BloodGroup::allBloodGroup(1);
        $data['religions']  = Religion::allReligion(1);
        $data['teachers']  = Teacher::allTeacher(1);
        return view('admin.teacher.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['designations'] = Designation::allDesignation(1);
        $data['bloodGroups']  = BloodGroup::allBloodGroup(1);
        $data['religions']  = Religion::allReligion(1);
        $data['teachers']  = Teacher::allTeacher(1);
        $data['subjects']  = Subject::getAll(1);
        return view('admin.teacher.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'phone'=>'required',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::TEACHER_IMAGE);
        }
        if ($request->hasFile('cv')){
            $data['cv'] = self::imageUpload($request->cv,ServiceFile::TEACHER_CV);
        }

        Teacher::query()->create($data);
        return redirect()->back()->with('success','Successfully Teacher Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $data['designations']   = Designation::allDesignation(1);
        $data['bloodGroups']    = BloodGroup::allBloodGroup(1);
        $data['religions']      = Religion::allReligion(1);
        $data['teacher']        = $teacher;
        $data['teachers']       = Teacher::allTeacher(1);
        $data['subjects']       = Subject::getAll(1);
        return view('admin.teacher.create')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::TEACHER_IMAGE);
        }
        if ($request->hasFile('cv')){
            $data['cv'] = self::imageUpload($request->cv,ServiceFile::TEACHER_CV);
        }

        $teacher->update($data);
        return redirect()->route('teachers.index')->with('success','Successfully Teacher Added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
