<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cover_image' => $this->faker->imageUrl(),
            'model_name' => $this->faker->word . ' ' . $this->faker->randomNumber(3),
            'serial_number' => strtoupper($this->faker->bothify('SN-####-????')),
            'cpu_type' => $this->faker->randomElement(['Intel i5', 'Intel i7', 'Ryzen 5', 'Ryzen 7']),
            'memory' => $this->faker->randomElement(['8GB', '16GB', '32GB']),
            'primary_storage' => $this->faker->randomElement(['256GB SSD', '512GB SSD', '1TB SSD']),
            'admin_notes' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 500, 3000),
            'is_active' => true,
            'slug' => $this->faker->unique()->slug(),
        ];
    }
}
