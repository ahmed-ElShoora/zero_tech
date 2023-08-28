<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id','name','email','phone','title','message'
    ];
}
