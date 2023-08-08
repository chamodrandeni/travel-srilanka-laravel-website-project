<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourplan extends Model
{
    use HasFactory;

    protected $table = 'tourplan';
    protected $fillable = [
        'id',
        'title',
        'packages_id',
        'description',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(packages::class);
    }

    public function tourPlanImages()
    {
        return $this->hasMany(tourplanimage::class);
    }
}
