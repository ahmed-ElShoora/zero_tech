<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distinguishe extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','title_ar','title_en'
    ];
}
