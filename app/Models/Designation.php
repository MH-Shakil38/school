<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    protected $table = 'designations';
    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public static function allDesignation($status = 1){
        return self::query()->where('status',$status)->orderBy('id','Asc')->get();
    }
}
