<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'bn_name',
        'en_name',
        'image',
        'status',
        'category_id',
        'position',
        'is_show_nav'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function categories(){
        return $this->hasMany(Category::class,'category_id');
    }

    public function posts(){
        return $this->hasMany(Document::class,'category_id','id');
    }
}
