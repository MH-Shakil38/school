<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use App\Models\Post;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function post($id)
    {
        $data['categories'] = Category::query()->where('category_id',$id)->with(['posts'])->where('status',1)->get();
        $data['posts']      = Document::query()->with(['category'])->where('parent_id',$id)->get();
        return view('admin.post.index')->with($data);
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
            'category_id'=>'required',
            'title'=>'required',
        ]);
        $category = Category::query()->findOrFail($request->category_id);
        $data = $request->all();
        if ($request->hasFile('file')){
            $data['file'] = self::imageUpload($request->file,ServiceFile::DOCUMENTS_FILE);
        }
        $data['parent_id'] = $category->category->id ?? '';
        Document::query()->create($data);
        return redirect()->back()->with('success',$category->bn_name . 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
