<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagecategory extends Model
{
    use HasFactory;

    protected $table = 'image_category';
    protected $fillable = [
        'img_name',
        'description',
        'tile',
        'image',
    ];
}
