<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario de prueba
        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan@example.com',
            'password' => Hash::make('password'), // Asegúrate de usar un hash para la contraseña
        ]);

        // Crear más usuarios si lo deseas
        User::create([
            'name' => 'Maria Garcia',
            'email' => 'maria@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

