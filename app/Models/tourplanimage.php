<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourplanimage extends Model
{
    use HasFactory;

    protected $table = 'tourplan_image';
    protected $fillable = [
        'id',
        'tourplan_id',
        'image',
    ];

    public function tourPlan()
    {
        return $this->belongsTo(tourplan::class);
    }
}
