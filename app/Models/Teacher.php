<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'address',
        'password',
        'relationship',
        'religion_id',
        'designation_id',
        'join_date',
        'dob',
        'cv',
        'gender',
        'blood_group_id',
        'message',
        'nid',
        'father_name',
        'mother_name',
        'status',
        'facebook',
        'youtube',
        'whatsapp',
        'created_by',
        'updated_by'
    ];

    public static function allTeacher($status=0){
        return self::query()->where('status',$status)->orderBy('id','ASC')->get();
    }
}
