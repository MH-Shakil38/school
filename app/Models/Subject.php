<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public static function getAll($status = 0){
        return self::query()->where('status',1)->latest()->get();
    }
}
