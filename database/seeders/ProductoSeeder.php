<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = \App\Models\ProductoCategoria::pluck('id');
        $categories->each(function ($categoria) {
            \App\Models\Producto::factory(200)->times(rand(12, 28))->create([
                'categoria_id' => $categoria,
            ]);
        });
    }
}
