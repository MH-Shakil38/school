<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    use HasFactory;
    protected $table = 'religions';
    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public static function allReligion($status=0){
        return self::query()->where('status',$status)->orderBy('id','ASC')->get();
    }
}
