<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourtype extends Model
{
    use HasFactory;

    protected $table = 'tourtype';
    protected $fillable = [
        'id',
        'name',
        'grouptype',
        'guidetype',
        'imagecategory',
    ];
}
