<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = [
        'title',
        'category_id',
        'image',
        'details',
        'status',
        'created_by',
        'updated_by'
    ];

    public function category(){
        return $this->belongsTo(MessageCategory::class,'category_id');
    }
}
