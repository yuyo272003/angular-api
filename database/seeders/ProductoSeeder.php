<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::insert([
            [
                'nombre' => 'Laptop Dell Inspiron',
                'precio' => 14500.99,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Mouse Logitech M170',
                'precio' => 350.50,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Monitor Samsung 24”',
                'precio' => 2999.99,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Teclado mecánico Redragon',
                'precio' => 899.00,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
