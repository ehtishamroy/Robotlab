<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CarouselImage extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'image_path',
        'sort_order',
        'is_active',
    ];
}
