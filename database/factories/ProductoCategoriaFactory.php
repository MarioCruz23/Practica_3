<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductoCategoria>
 */
class ProductoCategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this-> faker->sentence(1),
            'slug' => $this-> faker->slug,
            'description' => $this-> faker->paragraph,
        ];
    }
}
