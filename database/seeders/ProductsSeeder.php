<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Pastel Freshness Bouquet',
                'price' => 120,
                'category' => 'Flowers',
                'image_path' => '/images/f1.jpg',
                'description' => 'A beautiful bouquet full of pastel shades to brighten your day.',
            ],
            [
                'name' => 'Magic of Spring Bouquet',
                'price' => 130,
                'category' => 'Flowers',
                'image_path' => '/images/f2.jpg',
                'description' => 'Spring-inspired flowers, vibrant and colorful.',
            ],
            [
                'name' => 'Flower Euphoria Bouquet',
                'price' => 80,
                'category' => 'Flowers',
                'image_path' => '/images/f3.jpg',
                'description' => 'An explosion of colors in a beautiful bouquet.',
            ],
            [
                'name' => 'Springtime Radiance Bouquet',
                'price' => 70,
                'category' => 'Flowers',
                'image_path' => '/images/f4.jpg',
                'description' => 'Bright and cheerful, capturing the spirit of spring.',
            ],
            [
                'name' => 'Dreamy Blooms Bouquet',
                'price' => 125,
                'category' => 'Flowers',
                'image_path' => '/images/f5.jpg',
                'description' => 'A delicate arrangement of pastel and vibrant flowers.',
            ],
            [
                'name' => 'Floral Sweetness Bouquet',
                'price' => 110,
                'category' => 'Flowers',
                'image_path' => '/images/f6.jpg',
                'description' => 'Soft colors and gentle fragrance for a perfect gift.',
            ],
            [
                'name' => 'Harmony in Colors Bouquet',
                'price' => 120,
                'category' => 'Flowers',
                'image_path' => '/images/f7.jpg',
                'description' => 'A vibrant mix of colors symbolizing joy and love.',
            ],
            [
                'name' => 'April Smiles Bouquet',
                'price' => 130,
                'category' => 'Flowers',
                'image_path' => '/images/f8.jpg',
                'description' => 'A warm and lively bouquet to bring a smile to anyone’s face.',
            ],
            [
                'name' => 'Garden Scent Bouquet',
                'price' => 180,
                'category' => 'Flowers',
                'image_path' => '/images/f9.jpg',
                'description' => 'A bouquet that brings the fresh scent of a garden indoors.',
            ],
            [
                'name' => 'Springtime Fairytale Bouquet',
                'price' => 280,
                'category' => 'Flowers',
                'image_path' => '/images/f10.jpg',
                'description' => 'A luxurious bouquet for a fairytale-like experience.',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
