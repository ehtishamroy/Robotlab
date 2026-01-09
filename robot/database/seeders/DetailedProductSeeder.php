<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductSpecification;
use App\Models\ProductGallery;

class DetailedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Remove example if it exists to avoid duplicates
        Product::where('slug', 'flashbox-max-pro')->delete();

        $product = Product::create([
            'name' => 'Flashbox Max Pro',
            'slug' => 'flashbox-max-pro',
            'tagline' => 'Advanced Delivery & Service Robot',
            'category' => 'delivery',
            'hero_text' => 'Efficiency Reimagined',
            'description' => 'Flashbox Max Pro is the ultimate solution for autonomous delivery in hotels, restaurants, and offices. With its large capacity and intelligent navigation, it streamlines operations properly.',
            'image' => '/storage/seed/flashbox_main.jpg', // Assuming path or valid url
            'is_published' => true,
            'sort_order' => 1,
            'feature_section_data' => [
                'subtitle' => 'Meets Your Needs',
                'title' => 'Designed for High-Volume Environments',
                'description' => 'Experience seamless integration into your workflow with our advanced fleet management system.',
                'cards' => [
                    [
                        'title' => 'Lidar Navigation',
                        'image' => 'https://via.placeholder.com/400x300.png?text=Lidar+Nav',
                        'caption' => 'Uses advanced Lidar sensors for 360-degree obstacle detection and avoidance.'
                    ],
                    [
                        'title' => 'Large Capacity',
                        'image' => 'https://via.placeholder.com/400x300.png?text=Capacity',
                        'caption' => 'Adjustable trays to accommodate various delivery sizes.'
                    ],
                    [
                        'title' => 'Smart Interaction',
                        'image' => 'https://via.placeholder.com/400x300.png?text=Interaction',
                        'caption' => 'Touch screen and voice interaction for intuitive user experience.'
                    ],
                    [
                        'title' => 'Auto-Recharge',
                        'image' => 'https://via.placeholder.com/400x300.png?text=Charging',
                        'caption' => 'Automatically returns to the charging dock when idle or low battery.'
                    ]
                ]
            ]
        ]);

        // Add Features
        $product->features()->createMany([
            ['title' => '100kg Load', 'icon' => 'fa-weight-hanging', 'sort_order' => 0],
            ['title' => '12h Runtime', 'icon' => 'fa-battery-full', 'sort_order' => 1],
            ['title' => 'AI Obstacle Avoidance', 'icon' => 'fa-eye', 'sort_order' => 2],
        ]);

        // Add Specifications
        $product->specifications()->createMany([
            ['label' => 'Dimensions', 'value' => '540 x 540 x 1300 mm', 'sort_order' => 0],
            ['label' => 'Net Weight', 'value' => '55 kg', 'sort_order' => 1],
            ['label' => 'Max Speed', 'value' => '1.2 m/s', 'sort_order' => 2],
            ['label' => 'Battery Capacity', 'value' => '20Ah / 24V', 'sort_order' => 3],
        ]);

        // Add Gallery Images
        $product->galleries()->createMany([
            ['image' => 'https://via.placeholder.com/800x600.png?text=Gallery+1', 'alt_text' => 'Flashbox Perspective', 'sort_order' => 0],
            ['image' => 'https://via.placeholder.com/800x600.png?text=Gallery+2', 'alt_text' => 'Flashbox Front', 'sort_order' => 1],
        ]);

        $this->command->info('Detailed Product "Flashbox Max Pro" seeded successfully.');
    }
}
