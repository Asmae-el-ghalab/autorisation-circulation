<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'demande_id',
        'file_path',
        'status',
        'expires_at'
    ];

    protected $casts = [
        'expires_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
} 