<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Circular;
use App\Models\Document;
use App\Models\Message;
use App\Models\MessageCategory;
use App\Models\PhotoGallery;
use App\Models\VideoCategory;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function message($id){
        $data['message'] = Message::query()
            ->with(['category'])
            ->where('category_id',$id)->first();
        $data['category'] = MessageCategory::query()->findOrFail($id);
        return view('website.pages.message-details')->with($data);
    }

    public function circular($type){
        $data['infos'] = Circular::query()
            ->where('type',$type)
            ->get();
        $data['category'] = $type == 1 ? 'Circular' : 'Circular Result';
        return view('website.pages.pdf-list')->with($data);
    }
    public function menuPost($type){
        $data['infos'] = Document::query()
            ->where('category_id',$type)
            ->where('status',1)
            ->get();
        $data['category'] = Category::query()->findOrFail($type);
        if ($data['infos']->count() == 1){
            $data['details'] = Document::query()
                ->where('category_id',$type)
                ->where('status',1)
                ->first();
            return view('website.pages.pdf-view')->with($data);
        }
        $data['category'] = Category::query()
            ->where('id',$type)
            ->first();
        return view('website.pages.post-list')->with($data);
    }

    public function imageGallery(){
        $data['photos'] = PhotoGallery::query()
            ->where('status',1)
            ->whereNull('deleted_at')
            ->latest()
            ->get();
        return view('website.pages.gallery')->with($data);
    }
    public function galleryCategory($id){
        $data['photos'] = PhotoGallery::query()
            ->where('status',1)
            ->whereNull('deleted_at')
            ->where('category_id',$id)
            ->latest()
            ->get();
        return view('website.pages.gallery')->with($data);
    }
    public function videoGallery(){
        $data['videos'] = VideoGallery::query()
            ->where('status',1)
            ->whereNull('deleted_at')
            ->latest()
            ->get();
        return view('website.pages.video')->with($data);
    }
    public function videoCategory($id){

        $data['videos'] = VideoGallery::query()
            ->where('status',1)
            ->where('category_id',$id)
            ->whereNull('deleted_at')
            ->latest()
            ->get();
        return view('website.pages.video')->with($data);
    }
}
