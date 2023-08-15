<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
     //single line code
    /*protected $gaurd = [];*/
    protected $fillable = [
        'title',
        'link',
        'status',
        'image'
    ];
}