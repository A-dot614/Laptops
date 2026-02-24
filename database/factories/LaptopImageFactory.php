<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Laptop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaptopImage>
 */
class LaptopImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'laptop_id' => Laptop::inRandomOrder()->value('id') ?? 1,
            'image_url' => "https://picsum.photos/200/300?random=" . $this->faker->numberBetween(1, 1000),
        ];
    }
}
