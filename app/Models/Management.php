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
}
