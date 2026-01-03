<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ConsultationBooking extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'application_type',
        'preferred_date',
        'preferred_time',
        'message',
        'is_read',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'preferred_date' => 'date',
    ];
}
