<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ProductGallery extends Model
{
    use AsSource;

    protected $fillable = [
        'product_id',
        'image',
        'alt_text',
        'sort_order',
    ];

    /**
     * Get the product that owns the gallery image.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
