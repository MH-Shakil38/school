<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use App\Service\ServiceFile;
use App\Trait\schoolTrait;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    use schoolTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = Category::query()->with(['posts'])->where('status',1)->get();
        $data['posts']      = Document::query()->with(['category'])->get();
        return view('admin.post.index')->with($data);
    }

    public function post(Request $request,$id)
    {
        if ($request->id == 10){
            $data['selected'] = 20;
        }
        if ($request->id == 21){
            $data['selected'] = 22;
        }
        $data['categories'] = Category::query()->where('category_id',$id)->with(['posts'])->where('status',1)->orderBy('position','ASC')->orderBy('id','desc')->get();
        $data['documents']      = Document::query()->with(['category'])->where('parent_id',$id)->get();
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
//        $request->validate([
//            'file' => 'required|mimes:pdf'
//        ]);
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
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $data['categories']     = Category::query()->where('category_id',$document->parent_id)->with(['posts'])->where('status',1)->get();
        $data['documents']      = Document::query()->with(['category'])->where('parent_id',$document->parent_id)->get();
        $data['document']       = $document;
        return view('admin.post.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'file' => 'required|mimes:pdf'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')){
            $data['image'] = self::imageUpload($request->image,ServiceFile::DOCUMENTS);
        }

        if ($request->hasFile('file')){
            $data['file'] = self::imageUpload($request->file,ServiceFile::DOCUMENTS);
        }
        $document->update($data);
        return redirect()->route('website.post',$document->parent_id)->with('success','Document Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->back();
    }
}
