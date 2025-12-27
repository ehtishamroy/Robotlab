<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ProductFeature extends Model
{
    use AsSource;

    protected $fillable = [
        'product_id',
        'title',
        'icon',
        'custom_icon',
        'sort_order',
    ];

    /**
     * Get the product that owns the feature.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
