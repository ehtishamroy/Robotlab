<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;

class Product extends Model
{
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'category',
        'hero_text',
        'description',
        'image',
        'hero_bg',
        'feature_image',
        'specs_image',
        'video',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    /**
     * Get the features for the product.
     */
    public function features()
    {
        return $this->hasMany(ProductFeature::class)->orderBy('sort_order');
    }

    /**
     * Get the specifications for the product.
     */
    public function specifications()
    {
        return $this->hasMany(ProductSpecification::class)->orderBy('sort_order');
    }

    /**
     * Get the gallery images for the product.
     */
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class)->orderBy('sort_order');
    }

    /**
     * Scope to get only published products.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Auto-generate slug from name if not provided.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });

        static::updating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }
}
