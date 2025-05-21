<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StreetRequest extends Model
{
    protected $fillable = [
        'user_id',
        'request_number',
        'selected_streets',
        'status',
        'admin_scheduled_date',
        'admin_notes'
    ];

    protected $casts = [
        'selected_streets' => 'array',
        'admin_scheduled_date' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function generateRequestNumber(): string
    {
        $prefix = 'SR-' . date('Ym');
        $lastRequest = self::where('request_number', 'like', $prefix . '%')
            ->orderBy('request_number', 'desc')
            ->first();

        if (!$lastRequest) {
            return $prefix . '-0001';
        }

        $lastNumber = intval(substr($lastRequest->request_number, -4));
        return $prefix . '-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    }
} 