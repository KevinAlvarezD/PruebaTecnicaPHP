<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gasto;

class GastoSeeder extends Seeder
{
    public function run()
    {
        // Crear algunos gastos de prueba para el usuario con ID 1
        Gasto::create([
            'descripcion' => 'Compra de comida',
            'monto' => 25.50,
            'categoria' => 'Comida',
            'fecha' => '2025-01-10',
            'user_id' => 1, // Asegúrate de que este ID exista en la tabla de usuarios
        ]);

        Gasto::create([
            'descripcion' => 'Viaje en taxi',
            'monto' => 15.75,
            'categoria' => 'Transporte',
            'fecha' => '2025-01-09',
            'user_id' => 1,
        ]);

        // Crear más gastos si lo deseas
    }
}