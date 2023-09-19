<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    protected $table = 'gallery_images';
    protected $fillable = [
        'post_id',
        'image',
        'status'
    ];

    public function photo(){
        return $this->belongsTo(PhotoGallery::class,'post_id');
    }
}
