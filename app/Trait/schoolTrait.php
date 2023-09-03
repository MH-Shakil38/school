<?php

namespace App\Trait;

use App\Service\ServiceFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait schoolTrait{
    public static function imageUpload($file,$folder){
        $logo = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($folder, $logo);
        return $folder. $logo;
    }

    public static function pdfUpload($file,$folder){
        $filename = time() . '.' . $file->extension();
        $file->move($folder, $filename);
        return $folder.$filename;
    }
}
