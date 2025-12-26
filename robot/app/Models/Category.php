<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use AsSource;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get blogs in this category
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
