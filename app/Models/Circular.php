<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $table = 'circulars';
    protected $fillable = [
        'title',
        'type',
        'file',
        'status',
        'created_by',
        'updated_by',
    ];
}
