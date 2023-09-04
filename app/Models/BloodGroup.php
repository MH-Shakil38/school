<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    use HasFactory;
    protected $table = 'blood_groups';
    protected $fillable = [
        'name',
        'status',
        'created_by',
        'updated_by',
    ];

    public static function allBloodGroup($status=0){
        return self::query()->where('status',$status)->orderBy('id','ASC')->get();
    }
}
