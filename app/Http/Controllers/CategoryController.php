<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::query()->with(['category'])->whereNull('category_id')->latest()->get();
        $data['allCategories'] = Category::query()->with(['category'])->latest()->get();
        return view('admin.category.index')->with($data);
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
            $data['image'] = self::imageUpload($request->image,ServiceFile::CATEGORYIMAGE);
        }

        session()->put('cat',$request->category_id);
        Category::query()->create($data);
        return redirect()->back()->with('success','Successfully category added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['allCategories'] = Category::query()->with(['category'])->latest()->get();
        $data['category']  = Category::query()->findOrFail($id);
//        $data['categories'] = Category::query()->latest()->get();
        $data['categories'] = Category::query()->whereNull('category_id')->latest()->get();
        return view('admin.category.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $category = Category::query()->findOrFail($id);
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::CATEGORYIMAGE);
        }
        $category->update($data);
        return redirect()->route('categories.index')->with('success','Successfully category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
