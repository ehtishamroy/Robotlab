<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;

class Career extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'title',
        'about',
        'overview',
        'responsibilities',
        'qualifications',
        'apply_email',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active careers
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by 'order' column
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
