<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cate_id' => rand(1, 10),
            'name' => fake()->text(20),
            'slug' => Str::slug(fake()->text(20)),
            'price' => rand(100, 20000),
            'discount' => fake()->optional(0.5, null)->randomElement([null, $this->faker->numberBetween(5, 20)]),
            'short_desc' => fake()->text(200),
            'long_desc' => fake()->text(500),
            'thumbnail' => fake()->imageUrl(500, 500),
            'multiple_image' => json_encode(['https://via.placeholder.com/500x500.png/000011?text=incidunt', 'https://via.placeholder.com/500x500.png/007777?text=reprehenderit','https://via.placeholder.com/500x500.png/002200?text=nisi']),
            'new_product' => '1',
            'feature_product' => '1',
            'status' => '1',
        ];
    }
}