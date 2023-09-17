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
        'subject_id',
        'facebook',
        'youtube',
        'whatsapp',
        'created_by',
        'updated_by'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function blood(){
        return $this->belongsTo(BloodGroup::class,'blood_group_id');
    }
    public function designation(){
        return $this->belongsTo(Designation::class,'designation_id');
    }

    public static function allTeacher($status=0){
        return self::query()->with(['designation'])->where('status',$status)->orderBy('id','ASC')->get();
    }

    public static function findById($id){
        return self::query()->with(['designation','subject','blood'])->findOrFail($id);
    }
}
