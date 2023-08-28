<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'color_head',
        'title_head_ar',
        'title_head_en',
        'price',
        'category_ar',
        'category_en',
        'btn_en',
        'btn_ar',
        'btn_color',
        'desc_en',
        'desc_ar',
    ];
}
