<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    protected $table = 'video_galleries';
    protected $fillable = [
        'title',
        'category_id',
        'video_id',
        'status',
        'created_by',
        'updated_by'
    ];

    public function category(){
        return $this->belongsTo(VideoCategory::class,'category_id');
    }
}
