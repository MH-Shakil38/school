<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'bn_name',
        'en_name',
        'phone',
        'email',
        'eiin',
        'code',
        'logo',
        'map',
        'facebook',
        'youtube',
        'full_address',
        'details',
        'establish'
    ];
}
