<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'authentication',
        'content',
        'caption',
        'tagline',
        'hashtags',
        'likes',
        'reposts',
        'location'
    ];

    protected $casts = [
        'hashtags' => 'array',
    ];
}
