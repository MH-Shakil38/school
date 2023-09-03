<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';

    protected $fillable = [
        'category_id',
        'parent_id',
        'title',
        'details',
        'file',
        'status',
        'created_by',
        'updated_by',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
