<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;

class Media extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $table = 'media';

    protected $fillable = [
        'title',
        'youtube_url',
        'description',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active media
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

    /**
     * Get the embed URL for YouTube
     */
    public function getEmbedUrlAttribute()
    {
        // Convert various YouTube URL formats to embed format
        $url = $this->youtube_url;

        // If already an embed URL, return as is
        if (str_contains($url, 'youtube.com/embed/')) {
            return $url;
        }

        // Extract video ID from various formats
        $patterns = [
            '/youtube\.com\/watch\?v=([^&]+)/',
            '/youtu\.be\/([^?]+)/',
            '/youtube\.com\/embed\/([^?]+)/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                return 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        return $url;
    }
}
