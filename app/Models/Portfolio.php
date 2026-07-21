<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'tags',
        'version',
        'link',
        'icon',
        'color_theme',
        'is_active',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];
}
