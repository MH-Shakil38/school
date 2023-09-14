<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementCategory extends Model
{
    use HasFactory;
    protected $table = 'management_categories';
    protected $fillable = [
        'name',
        'status',
        'position',
        'created_by',
        'updated_by',
    ];
}
