<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSide extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','desc','text_ar','text_en'
    ];
}
