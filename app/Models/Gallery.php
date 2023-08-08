<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallary';
    protected $fillable = [
        'title',
        'category',
        'description',
        'gallary_image',
        'meta_keywords',
    ];
}
