<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto1 = new Producto;
        $producto1->nombre = 'Barra de Proteina';
        $producto1->dimensiones = '30cm x 5cm x 3cm';
        $producto1->descripcion = 'Barra rica en proteínas para nutrición deportiva';
        $producto1->tipo_prod = 'consumible';
        $producto1->precio = 25.50;
        $producto1->cantidad = 100;
        $producto1->persona_id = 6;
        $producto1->save();

        $producto2 = new Producto;
        $producto2->nombre = 'Creatina';
        $producto2->dimensiones = '20cm x 10cm x 5cm';
        $producto2->descripcion = 'Creatina monohidratada para mejorar el rendimiento';
        $producto2->tipo_prod = 'consumible';
        $producto2->precio = 15.00;
        $producto2->cantidad = 50;
        $producto2->persona_id = 6;
        $producto2->save();

        $producto3 = new Producto;
        $producto3->nombre = 'Cuerdas';
        $producto3->dimensiones = '3m x 0.02m x 0.02m';
        $producto3->descripcion = 'Cuerda para ejercicios de saltos y resistencia';
        $producto3->tipo_prod = 'accesorio';
        $producto3->precio = 12.99;
        $producto3->cantidad = 200;
        $producto3->persona_id = 6;
        $producto3->save();

        $producto4 = new Producto;
        $producto4->nombre = 'Ligas';
        $producto4->dimensiones = '30cm x 0.02m x 0.02m';
        $producto4->descripcion = 'Ligas de resistencia para entrenamientos de fuerza';
        $producto4->tipo_prod = 'accesorio';
        $producto4->precio = 9.99;
        $producto4->cantidad = 150;
        $producto4->persona_id = 6;
        $producto4->save();

        $producto5 = new Producto;
        $producto5->nombre = 'Mancuernas';
        $producto5->dimensiones = '40cm x 10cm x 10cm';
        $producto5->descripcion = 'Mancuernas ajustables para entrenamiento de fuerza';
        $producto5->tipo_prod = 'accesorio';
        $producto5->precio = 40.00;
        $producto5->cantidad = 30;
        $producto5->persona_id = 6;
        $producto5->save();

        $producto6 = new Producto;
        $producto6->nombre = 'Muñequeras';
        $producto6->dimensiones = '10cm x 5cm x 2cm';
        $producto6->descripcion = 'Muñequeras para soporte durante el levantamiento de pesas';
        $producto6->tipo_prod = 'accesorio';
        $producto6->precio = 8.00;
        $producto6->cantidad = 120;
        $producto6->persona_id = 6;
        $producto6->save();

        $producto7 = new Producto;
        $producto7->nombre = 'Preentreno';
        $producto7->dimensiones = '15cm x 8cm x 5cm';
        $producto7->descripcion = 'Suplemento preentrenamiento para aumentar energía y enfoque';
        $producto7->tipo_prod = 'consumible';
        $producto7->precio = 19.99;
        $producto7->cantidad = 80;
        $producto7->persona_id = 6;
        $producto7->save();

        $producto8 = new Producto;
        $producto8->nombre = 'Proteina';
        $producto8->dimensiones = '25cm x 10cm x 10cm';
        $producto8->descripcion = 'Proteína en polvo para la recuperación muscular';
        $producto8->tipo_prod = 'consumible';
        $producto8->precio = 30.00;
        $producto8->cantidad = 120;
        $producto8->persona_id = 6;
        $producto8->save();

        $producto9 = new Producto;
        $producto9->nombre = 'Shakes';
        $producto9->dimensiones = '30cm x 8cm x 8cm';
        $producto9->descripcion = 'Shakes energéticos para una nutrición rápida';
        $producto9->tipo_prod = 'consumible';
        $producto9->precio = 10.00;
        $producto9->cantidad = 200;
        $producto9->persona_id = 6;
        $producto9->save();

        $producto10 = new Producto;
        $producto10->nombre = 'Vitaminas';
        $producto10->dimensiones = '8cm x 8cm x 8cm';
        $producto10->descripcion = 'Vitaminas y minerales para apoyar la salud general';
        $producto10->tipo_prod = 'consumible';
        $producto10->precio = 12.00;
        $producto10->cantidad = 250;
        $producto10->persona_id = 6;
        $producto10->save();
    }
}
