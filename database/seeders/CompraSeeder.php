<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compra1 = new Compra;
        $compra1->cantidad = 2;
        $compra1->orden_id = 1;  // Persona con ID 1
        $compra1->producto_id = 1;  // Producto con ID 1 (Barra de Proteina)
        $compra1->save();

        $compra2 = new Compra;
        $compra2->cantidad = 3;
        $compra2->orden_id = 2;  // Persona con ID 2
        $compra2->producto_id = 2;  // Producto con ID 2 (Creatina)
        $compra2->save();

        $compra3 = new Compra;
        $compra3->cantidad = 5;
        $compra3->orden_id = 3;  // Persona con ID 3
        $compra3->producto_id = 3;  // Producto con ID 3 (Cuerdas)
        $compra3->save();

        $compra4 = new Compra;
        $compra4->cantidad = 4;
        $compra4->orden_id = 1;  // Persona con ID 4
        $compra4->producto_id = 4;  // Producto con ID 4 (Ligas)
        $compra4->save();

        $compra5 = new Compra;
        $compra5->cantidad = 1;
        $compra5->orden_id = 2;  // Persona con ID 5
        $compra5->producto_id = 5;  // Producto con ID 5 (Mancuernas)
        $compra5->save();

        $compra6 = new Compra;
        $compra6->cantidad = 10;
        $compra6->orden_id = 1;  // Persona con ID 1
        $compra6->producto_id = 6;  // Producto con ID 6 (Muñequeras)
        $compra6->save();

        $compra7 = new Compra;
        $compra7->cantidad = 6;
        $compra7->orden_id = 1;  // Persona con ID 2
        $compra7->producto_id = 7;  // Producto con ID 7 (Preentreno)
        $compra7->save();

        $compra8 = new Compra;
        $compra8->cantidad = 7;
        $compra8->orden_id = 3;  // Persona con ID 3
        $compra8->producto_id = 8;  // Producto con ID 8 (Proteina)
        $compra8->save();

        $compra9 = new Compra;
        $compra9->cantidad = 15;
        $compra9->orden_id = 2;  // Persona con ID 4
        $compra9->producto_id = 9;  // Producto con ID 9 (Shakes)
        $compra9->save();

        $compra10 = new Compra;
        $compra10->cantidad = 8;
        $compra10->orden_id = 1;  // Persona con ID 5
        $compra10->producto_id = 10;  // Producto con ID 10 (Vitaminas)
        $compra10->save();
    }
}
