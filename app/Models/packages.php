<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;

    protected $table = 'packages';
    protected $fillable = [
        'id',
        'packname',
        'description',
        'image',
        'tourtype',
        'duration',
        'status',
        'feature',
    ];

    public function tourPlans()
    {
        return $this->hasMany(tourplan::class);
    }
}
