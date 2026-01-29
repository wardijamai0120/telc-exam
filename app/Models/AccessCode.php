<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AccessCode extends Model
{
    protected $fillable = [
        'code',
        'expires_at',
        'is_active',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // واش الكود صالح؟
    public function isValid(): bool
    {
        return $this->is_active && $this->expires_at->isFuture();
    }
}
