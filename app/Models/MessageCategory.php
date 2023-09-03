<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageCategory extends Model
{
    use HasFactory;
    protected $table = 'message_categories';
    protected $fillable = [
        'name',
        'position',
        'status',
        'created_by',
        'updated_by',
    ];

    public function message(){
        return $this->hasOne(Message::class,'category_id');
    }
}
