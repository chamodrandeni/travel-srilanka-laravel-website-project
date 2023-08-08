<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiry_reply extends Model
{
    use HasFactory;
    protected $table = 'inquiry_reply';
    protected $fillable = [
        'inquiry_id',
        'reply_message',
    ];
}
