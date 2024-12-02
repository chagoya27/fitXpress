<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PersonaSeeder::class, // Registro del seeder de Persona
        ]);

        $this->call([
            AdministradorSeeder::class, // Registro del seeder de Administrador
        ]);

        $this->call([
            ClienteSeeder::class, // Registro del seeder de Clienete
        ]);

        $this->call([
            ProductoSeeder::class, // Registro del seeder de Producto
        ]);

        $this->call([
            OrdenSeeder::class, // Registro del seeder de Orden
        ]);

        $this->call([
            CarritoSeeder::class, // Registro del seeder de Carrito
        ]);

        $this->call([
            CompraSeeder::class, // Registro del seeder de Compra
        ]);

    }
}
