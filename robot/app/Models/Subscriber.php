<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'source',
        'status',
        'subscribed_at',
        'mailchimp_synced',
    ];

    protected $casts = [
        'subscribed_at' => 'datetime',
        'mailchimp_synced' => 'boolean',
    ];

    /**
     * Scope for active subscribers
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope for unsynced subscribers (not yet sent to Mailchimp)
     */
    public function scopeUnsynced($query)
    {
        return $query->where('mailchimp_synced', false);
    }
}
