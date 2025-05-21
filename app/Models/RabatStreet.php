<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RabatStreet extends Model
{
    protected $fillable = [
        'name',
        'district',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
} 