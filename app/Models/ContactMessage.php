<?php

namespace App\Models;

use App\Enums\AdminRequestStatus;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'subject',
        'message',
        'status',
        'admin_notes',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => AdminRequestStatus::class,
        ];
    }
}
