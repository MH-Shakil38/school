<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;
    protected $table = 'photo_galleries';
    protected $fillable = [
        'title',
        'category_id',
        'image',
        'status',
        'created_by',
        'updated_by'
    ];

    public function category(){
        return $this->belongsTo(PhotoCategory::class,'category_id');
    }
}
