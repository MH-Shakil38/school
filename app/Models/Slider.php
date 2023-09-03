<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
      'image',
      'title',
      'status',
      'created_by',
      'updated_by'
    ];


    protected static function boot(){
        parent::boot();

        static::creating(function ($query){
            $query->created_by = userID();
        });
        static::updating(function ($query){
            $query->updated_by = userID();
        });
    }
}
