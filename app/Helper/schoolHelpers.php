<?php
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

if (!function_exists('messageCategory')){
    function messageCategory(){
        return \App\Models\MessageCategory::query()->with(['message'])->where('status',1)->orderBy('position','ASC')->orderBy('created_at','ASC')->latest()->get();
    }
}


if (!function_exists('gallery')){
    function gallery(){
        return \App\Models\PhotoGallery::query()->where('status',1)->orderBy('created_at','DESC')->latest()->get();
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

