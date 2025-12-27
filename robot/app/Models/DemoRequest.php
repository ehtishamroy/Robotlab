<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class DemoRequest extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'name',
        'email',
        'company',
        'phone',
        'venue_type',
        'message',
        'discount_code',
        'product_source',
        'page_url',
        'ip_address',
        'user_agent',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
