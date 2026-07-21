<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AiAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'system_prompt',
        'model',
        'provider',
        'temperature',
        'avatar',
        'is_active',
    ];

    protected $casts = [
        'temperature' => 'float',
        'is_active' => 'boolean',
    ];
}
