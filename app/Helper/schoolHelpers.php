<?php

use App\Models\Category;
use App\Models\Document;
use App\Models\GalleryImage;

if (!function_exists('setting')){
    function setting(){
        return \App\Models\Setting::query()->latest()->first();
    }
}

if (!function_exists('userID')){
    function userID(){
        return auth()->id();
    }
}


if (!function_exists('slider')){
    function slider(){
        return \App\Models\Slider::query()->where('status',1)->latest()->get();
    }
}

if (!function_exists('menus')){
    function menus(){
        return \App\Models\Category::query()->where('status',1)->whereNull('category_id')->orderBy('position','Asc')->latest()->get();
    }
}

if (!function_exists('sub_menus')){
    function sub_menus($id){
        return \App\Models\Category::query()->where('status',1)->where('category_id',$id)->orderBy('position','ASC')->orderBy('created_at','ASC')->latest()->get();
    }
}

if (!function_exists('sub_menus_first')){
    function sub_menus_first($id){
//        $data['infos'] = Document::query()
//            ->where('category_id',$id)
//            ->where('status',1)
//            ->get();
//        $data['category'] = Category::query()->findOrFail($type);
//        if ($data['infos']->count() == 1){
            $data =  \App\Models\Message::query()
                ->where('category_id',$id)
                ->first();
            return $data;
    }
}

if (!function_exists('messageCategory')){
    function messageCategory(){
        return \App\Models\MessageCategory::query()->with(['message'])->where('status',1)->orderBy('position','ASC')->orderBy('created_at','ASC')->latest()->get();
    }
}


if (!function_exists('gallery')){
    function gallery(){
        return \App\Models\GalleryImage::query()->where('status',1)->orderBy('created_at','DESC')->latest()->get();
    }
}

if (!function_exists('videos')){
    function videos(){
        return \App\Models\VideoGallery::query()->where('status',1)->orderBy('created_at','DESC')->latest()->get();
    }
}

if (!function_exists('VideoCategory')){
    function VideoCategory(){
        return \App\Models\VideoCategory::query()->where('status',1)->orderBy('created_at','DESC')->latest()->get();
    }
}

if (!function_exists('galleryCategory')){
    function galleryCategory(){
        return \App\Models\PhotoCategory::query()->where('status',1)->orderBy('created_at','DESC')->latest()->get();
    }
}

if (!function_exists('teachers')){
    function teachers(){
        return \App\Models\Teacher::query()->where('status',1)->orderBy('created_at','ASC')->latest()->get();
    }
}

if (!function_exists('managements')){
    function managements(){
        return \App\Models\Management::query()->where('status',1)->orderBy('position','ASC')->orderBy('created_at','ASC')->latest()->get();
    }
}
if (!function_exists('marquee')){
    function marquee(){
        return \App\Models\marquee::query()->with(['notice'])->where('status',1)->orderBy('created_at','ASC')->latest()->get();
    }
}
if (!function_exists('noticeBoard')){
    function noticeBoard(){
        return \App\Models\Document::query()->with(['category'])->where('status',1)->orderBy('created_at','ASC')->latest()->limit(15)->get();
    }
}

if (!function_exists('teacherNOImage')){
    function teacherNOImage(){
        return asset('school/teacher.png');
    }
}

if (!function_exists('banner')){
    function banner(){
        return \App\Models\Banner::query()->where('status',1)->orderBy('position','ASC')->orderBy('id','DESC')->first();
    }
}

