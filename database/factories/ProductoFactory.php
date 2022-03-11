<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'category_id' => \App\Models\ProductoCategoria::factory(),
            'title' => $this-> faker->sentence(4),
            'slug' => $this-> faker->slug,
            'description' => $this-> faker->paragraph,
        ];
    }
}
