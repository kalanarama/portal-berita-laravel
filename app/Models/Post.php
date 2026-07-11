<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'published',
        'image',
        'publisher',
        'category',
        'event_date',
        'views',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];

    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }
}