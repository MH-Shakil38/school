<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table = 'management';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'designation_id',
        'status',
        'position',
        'message',
        'created_by',
        'updated_by'
    ];

    public function designation(){
        return $this->belongsTo(ManagementCategory::class,'designation_id');
    }

    public static function findById($id){
        return self::query()->with(['designation'])->findOrFail($id);
    }
}
