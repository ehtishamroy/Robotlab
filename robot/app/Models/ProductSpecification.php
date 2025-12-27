<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ProductSpecification extends Model
{
    use AsSource;

    protected $fillable = [
        'product_id',
        'label',
        'value',
        'sort_order',
    ];

    /**
     * Get the product that owns the specification.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
