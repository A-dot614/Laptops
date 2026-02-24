<?php

namespace Database\Seeders;

use App\Models\Laptop;
use App\Models\LaptopImage;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        // Create laptops first
        Laptop::factory(10)->create();

        // Create one fixed test laptop
        Laptop::factory()->create([
            'model_name' => 'Test Laptop',
            'serial_number' => 'SN-TEST-0001',
            'cpu_type' => 'Intel i7',
            'memory' => '16GB',
            'price' => 1000.00,
            'primary_storage' => '512GB SSD',
            'admin_notes' => 'This is a test laptop. It has a powerful processor and a sleek design.',
            'is_active' => true,
            'slug' => 'test-laptop',
        ]);

        // Now images (safe)
        LaptopImage::factory(50)->create();
    }
}
