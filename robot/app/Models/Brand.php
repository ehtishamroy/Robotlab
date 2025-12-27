<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;

class Brand extends Model
{
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'name',
        'logo',
        'url',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active brands.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
