<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marquee extends Model
{
    use HasFactory;
    protected $table = 'marquees';
    protected $fillable = [
        'title',
        'notice_id',
        'status',
        'position',
        'created_by',
        'updated_by'
    ];

    public function notice(){
        return $this->belongsTo(Document::class,'notice_id');
    }
}
