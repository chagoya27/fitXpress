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

        $producto = new Producto;
        $producto->nombre = 'Barra de Proteina';
        $producto->dimensiones = '30cm x 5cm x 3cm';
        $producto->descripcion = 'Barra rica en proteínas para nutrición deportiva';
        $producto->tipo_prod = 'consumible';
        $producto->precio = 50.00;
        $producto->cantidad = 100;
        $producto->persona_id = 6;
        $producto->save();

        $producto1 = new Producto;
        $producto1->nombre = 'Barra Olímpica';
        $producto1->dimensiones = '220cm x 3cm';
        $producto1->descripcion = 'Barra olímpica ideal para levantamiento de pesas y ejercicios de fuerza';
        $producto1->tipo_prod = 'pesas';
        $producto1->precio = 3500.00;
        $producto1->cantidad = 20;
        $producto1->persona_id = 6;
        $producto1->save();

        $producto2 = new Producto;
        $producto2->nombre = 'Barra';
        $producto2->dimensiones = '150cm x 3cm';
        $producto2->descripcion = 'Barra estándar para entrenamiento en gimnasio';
        $producto2->tipo_prod = 'pesas';
        $producto2->precio = 2000.00;
        $producto2->cantidad = 30;
        $producto2->persona_id = 6;
        $producto2->save();

        $producto3 = new Producto;
        $producto3->nombre = 'Blusa Deportiva';
        $producto3->dimensiones = 'Tallas S, M, L';
        $producto3->descripcion = 'Blusa deportiva cómoda y transpirable para entrenamiento';
        $producto3->tipo_prod = 'accesorio';
        $producto3->precio = 300.00;
        $producto3->cantidad = 50;
        $producto3->persona_id = 6;
        $producto3->save();

        $producto4 = new Producto;
        $producto4->nombre = 'Blusa Deportiva Tipo 2';
        $producto4->dimensiones = 'Tallas S, M, L';
        $producto4->descripcion = 'Blusa deportiva de diseño exclusivo para entrenamiento intenso';
        $producto4->tipo_prod = 'accesorio';
        $producto4->precio = 350.00;
        $producto4->cantidad = 40;
        $producto4->persona_id = 6;
        $producto4->save();

        $producto5 = new Producto;
        $producto5->nombre = 'Calcetas para Mujer';
        $producto5->dimensiones = 'Talla única';
        $producto5->descripcion = 'Calcetas deportivas de alto rendimiento para mujer';
        $producto5->tipo_prod = 'accesorio';
        $producto5->precio = 120.00;
        $producto5->cantidad = 100;
        $producto5->persona_id = 6;
        $producto5->save();

        $producto6 = new Producto;
        $producto6->nombre = 'Calcetas para Hombre';
        $producto6->dimensiones = 'Talla única';
        $producto6->descripcion = 'Calcetas deportivas de alto rendimiento para hombre';
        $producto6->tipo_prod = 'accesorio';
        $producto6->precio = 120.00;
        $producto6->cantidad = 100;
        $producto6->persona_id = 6;
        $producto6->save();

        $producto7 = new Producto;
        $producto7->nombre = 'Colágeno Hidrolizado';
        $producto7->dimensiones = '500g';
        $producto7->descripcion = 'Suplemento alimenticio para cuidado de articulaciones y piel';
        $producto7->tipo_prod = 'consumible';
        $producto7->precio = 550.00;
        $producto7->cantidad = 80;
        $producto7->persona_id = 6;
        $producto7->save();

        $producto8 = new Producto;
        $producto8->nombre = 'Creatina';
        $producto8->dimensiones = '300g';
        $producto8->descripcion = 'Suplemento de creatina monohidratada para aumentar fuerza y rendimiento';
        $producto8->tipo_prod = 'consumible';
        $producto8->precio = 450.00;
        $producto8->cantidad = 80;
        $producto8->persona_id = 6;
        $producto8->save();

        $producto9 = new Producto;
        $producto9->nombre = 'Cuerda para Saltar';
        $producto9->dimensiones = '3m de largo';
        $producto9->descripcion = 'Cuerda para saltar ajustable, ideal para cardio y entrenamiento';
        $producto9->tipo_prod = 'accesorio';
        $producto9->precio = 150.00;
        $producto9->cantidad = 60;
        $producto9->persona_id = 6;
        $producto9->save();

        $producto10 = new Producto;
        $producto10->nombre = 'Disco de 10 kg';
        $producto10->dimensiones = '35cm diámetro';
        $producto10->descripcion = 'Disco de peso estándar de 10 kg para barras olímpicas';
        $producto10->tipo_prod = 'pesas';
        $producto10->precio = 700.00;
        $producto10->cantidad = 30;
        $producto10->persona_id = 6;
        $producto10->save();

        $producto11 = new Producto;
        $producto11->nombre = 'Disco de 20 kg';
        $producto11->dimensiones = '45cm diámetro';
        $producto11->descripcion = 'Disco de peso estándar de 20 kg para barras olímpicas';
        $producto11->tipo_prod = 'pesas';
        $producto11->precio = 1200.00;
        $producto11->cantidad = 20;
        $producto11->persona_id = 6;
        $producto11->save();

        $producto12 = new Producto;
        $producto12->nombre = 'Energizante';
        $producto12->dimensiones = '500ml';
        $producto12->descripcion = 'Bebida energizante para entrenamiento intenso';
        $producto12->tipo_prod = 'consumible';
        $producto12->precio = 40.00;
        $producto12->cantidad = 200;
        $producto12->persona_id = 6;
        $producto12->save();

        $producto13 = new Producto;
        $producto13->nombre = 'Falda Deportiva';
        $producto13->dimensiones = 'Tallas S, M, L';
        $producto13->descripcion = 'Falda deportiva diseñada para comodidad y estilo';
        $producto13->tipo_prod = 'accesorio';
        $producto13->precio = 400.00;
        $producto13->cantidad = 30;
        $producto13->persona_id = 6;
        $producto13->save();
        $producto14 = new Producto;
        $producto14->nombre = 'Ligas para Ejercicio';
        $producto14->dimensiones = 'Tamaño único, resistencia variable';
        $producto14->descripcion = 'Ligas para entrenamiento de fuerza y flexibilidad';
        $producto14->tipo_prod = 'accesorio';
        $producto14->precio = 250.00;
        $producto14->cantidad = 100;
        $producto14->persona_id = 6;
        $producto14->save();

        $producto15 = new Producto;
        $producto15->nombre = 'Magnesio';
        $producto15->dimensiones = '200g';
        $producto15->descripcion = 'Suplemento de magnesio para mejorar la recuperación muscular';
        $producto15->tipo_prod = 'consumible';
        $producto15->precio = 300.00;
        $producto15->cantidad = 70;
        $producto15->persona_id = 6;
        $producto15->save();

        $producto16 = new Producto;
        $producto16->nombre = 'Mancuernas';
        $producto16->dimensiones = 'De 1kg a 10kg, según preferencia';
        $producto16->descripcion = 'Mancuernas ajustables para entrenamiento de fuerza';
        $producto16->tipo_prod = 'pesas';
        $producto16->precio = 500.00;
        $producto16->cantidad = 50;
        $producto16->persona_id = 6;
        $producto16->save();

        $producto17 = new Producto;
        $producto17->nombre = 'Muñequera de Soporte';
        $producto17->dimensiones = 'Tamaño único';
        $producto17->descripcion = 'Muñequera para soporte durante el levantamiento de pesas';
        $producto17->tipo_prod = 'accesorio';
        $producto17->precio = 150.00;
        $producto17->cantidad = 80;
        $producto17->persona_id = 6;
        $producto17->save();

        $producto18 = new Producto;
        $producto18->nombre = 'Pants Hombre';
        $producto18->dimensiones = 'Tallas S, M, L, XL';
        $producto18->descripcion = 'Pantalones deportivos para entrenamiento en gimnasio';
        $producto18->tipo_prod = 'accesorio';
        $producto18->precio = 450.00;
        $producto18->cantidad = 60;
        $producto18->persona_id = 6;
        $producto18->save();

        $producto19 = new Producto;
        $producto19->nombre = 'Pants Mujer';
        $producto19->dimensiones = 'Tallas S, M, L, XL';
        $producto19->descripcion = 'Pantalones deportivos femeninos para entrenamiento';
        $producto19->tipo_prod = 'accesorio';
        $producto19->precio = 450.00;
        $producto19->cantidad = 60;
        $producto19->persona_id = 6;
        $producto19->save();

        $producto20 = new Producto;
        $producto20->nombre = 'Paralelas';
        $producto20->dimensiones = '80cm x 60cm';
        $producto20->descripcion = 'Paralelas para entrenamiento de fuerza y calistenia';
        $producto20->tipo_prod = 'accesorio';
        $producto20->precio = 1200.00;
        $producto20->cantidad = 30;
        $producto20->persona_id = 6;
        $producto20->save();

        $producto21 = new Producto;
        $producto21->nombre = 'Pesas de 14kg';
        $producto21->dimensiones = '35cm diámetro';
        $producto21->descripcion = 'Pesas de 14kg para entrenamiento con barra';
        $producto21->tipo_prod = 'pesas';
        $producto21->precio = 900.00;
        $producto21->cantidad = 40;
        $producto21->persona_id = 6;
        $producto21->save();

        $producto22 = new Producto;
        $producto22->nombre = 'Playera Deportiva';
        $producto22->dimensiones = 'Tallas S, M, L';
        $producto22->descripcion = 'Playera deportiva de alto rendimiento';
        $producto22->tipo_prod = 'accesorio';
        $producto22->precio = 250.00;
        $producto22->cantidad = 90;
        $producto22->persona_id = 6;
        $producto22->save();

        $producto23 = new Producto;
        $producto23->nombre = 'Playera Hombre';
        $producto23->dimensiones = 'Tallas S, M, L';
        $producto23->descripcion = 'Playera deportiva para hombre, cómoda y resistente';
        $producto23->tipo_prod = 'accesorio';
        $producto23->precio = 300.00;
        $producto23->cantidad = 80;
        $producto23->persona_id = 6;
        $producto23->save();

        $producto24 = new Producto;
        $producto24->nombre = 'Playera Tirantes';
        $producto24->dimensiones = 'Tallas S, M, L';
        $producto24->descripcion = 'Playera de tirantes ideal para entrenamiento intenso';
        $producto24->tipo_prod = 'accesorio';
        $producto24->precio = 200.00;
        $producto24->cantidad = 100;
        $producto24->persona_id = 6;
        $producto24->save();

        $producto25 = new Producto;
        $producto25->nombre = 'Pre Entreno';
        $producto25->dimensiones = '300g';
        $producto25->descripcion = 'Suplemento pre-entrenamiento para mejorar la energía y el enfoque';
        $producto25->tipo_prod = 'consumible';
        $producto25->precio = 500.00;
        $producto25->cantidad = 60;
        $producto25->persona_id = 6;
        $producto25->save();

        $producto26 = new Producto;
        $producto26->nombre = 'Probioticos';
        $producto26->dimensiones = '30 cápsulas';
        $producto26->descripcion = 'Suplemento probiótico para mejorar la digestión y salud intestinal';
        $producto26->tipo_prod = 'consumible';
        $producto26->precio = 350.00;
        $producto26->cantidad = 80;
        $producto26->persona_id = 6;
        $producto26->save();

        $producto27 = new Producto;
        $producto27->nombre = 'Proteina Fresa';
        $producto27->dimensiones = '1kg';
        $producto27->descripcion = 'Proteína de fresa para recuperación muscular post entrenamiento';
        $producto27->tipo_prod = 'consumible';
        $producto27->precio = 600.00;
        $producto27->cantidad = 50;
        $producto27->persona_id = 6;
        $producto27->save();

        $producto28 = new Producto;
        $producto28->nombre = 'Proteina';
        $producto28->dimensiones = '1kg';
        $producto28->descripcion = 'Proteína de alta calidad para soporte muscular';
        $producto28->tipo_prod = 'consumible';
        $producto28->precio = 550.00;
        $producto28->cantidad = 100;
        $producto28->persona_id = 6;
        $producto28->save();

        $producto29 = new Producto;
        $producto29->nombre = 'Proteina Chocolate';
        $producto29->dimensiones = '1kg';
        $producto29->descripcion = 'Proteína de chocolate para recuperación muscular post entrenamiento';
        $producto29->tipo_prod = 'consumible';
        $producto29->precio = 650.00;
        $producto29->cantidad = 75;
        $producto29->persona_id = 6;
        $producto29->save();

        $producto30 = new Producto;
        $producto30->nombre = 'Proteina Vainilla';
        $producto30->dimensiones = '1kg';
        $producto30->descripcion = 'Proteína de vainilla para recuperación muscular post entrenamiento';
        $producto30->tipo_prod = 'consumible';
        $producto30->precio = 600.00;
        $producto30->cantidad = 85;
        $producto30->persona_id = 6;
        $producto30->save();

        $producto31 = new Producto;
        $producto31->nombre = 'Rack';
        $producto31->dimensiones = '180cm x 60cm';
        $producto31->descripcion = 'Rack de entrenamiento para pesas y accesorios';
        $producto31->tipo_prod = 'accesorio';
        $producto31->precio = 2000.00;
        $producto31->cantidad = 30;
        $producto31->persona_id = 6;
        $producto31->save();

        $producto32 = new Producto;
        $producto32->nombre = 'Rack2';
        $producto32->dimensiones = '200cm x 70cm';
        $producto32->descripcion = 'Rack de entrenamiento robusto para pesas y barras';
        $producto32->tipo_prod = 'accesorio';
        $producto32->precio = 2500.00;
        $producto32->cantidad = 40;
        $producto32->persona_id = 6;
        $producto32->save();

        $producto33 = new Producto;
        $producto33->nombre = 'Rodilleras';
        $producto33->dimensiones = 'Tamaño único';
        $producto33->descripcion = 'Rodilleras para protección durante entrenamientos de alto impacto';
        $producto33->tipo_prod = 'accesorio';
        $producto33->precio = 300.00;
        $producto33->cantidad = 50;
        $producto33->persona_id = 6;
        $producto33->save();

        $producto34 = new Producto;
        $producto34->nombre = 'Rueda';
        $producto34->dimensiones = '40cm';
        $producto34->descripcion = 'Rueda para ejercicios abdominales y fortalecimiento del core';
        $producto34->tipo_prod = 'accesorio';
        $producto34->precio = 250.00;
        $producto34->cantidad = 60;
        $producto34->persona_id = 6;
        $producto34->save();
        $producto35 = new Producto;
        $producto35->nombre = 'Rusa10';
        $producto35->dimensiones = '10kg';
        $producto35->descripcion = 'Rusa de 10 kg para entrenamiento de fuerza y resistencia';
        $producto35->tipo_prod = 'pesas';
        $producto35->precio = 800.00;
        $producto35->cantidad = 40;
        $producto35->persona_id = 6;
        $producto35->save();

        $producto36 = new Producto;
        $producto36->nombre = 'Rusa18';
        $producto36->dimensiones = '18kg';
        $producto36->descripcion = 'Rusa de 18 kg para entrenamiento de fuerza y resistencia';
        $producto36->tipo_prod = 'pesas';
        $producto36->precio = 1000.00;
        $producto36->cantidad = 30;
        $producto36->persona_id = 6;
        $producto36->save();

        $producto37 = new Producto;
        $producto37->nombre = 'Rusa4';
        $producto37->dimensiones = '4kg';
        $producto37->descripcion = 'Rusa de 4 kg para entrenamiento de fuerza y resistencia';
        $producto37->tipo_prod = 'pesas';
        $producto37->precio = 400.00;
        $producto37->cantidad = 50;
        $producto37->persona_id = 6;
        $producto37->save();

        $producto38 = new Producto;
        $producto38->nombre = 'SetPesas';
        $producto38->dimensiones = 'Varios pesos';
        $producto38->descripcion = 'Set completo de pesas para entrenamiento de fuerza';
        $producto38->tipo_prod = 'pesas';
        $producto38->precio = 3000.00;
        $producto38->cantidad = 25;
        $producto38->persona_id = 6;
        $producto38->save();

        $producto39 = new Producto;
        $producto39->nombre = 'Shakers';
        $producto39->dimensiones = '500ml';
        $producto39->descripcion = 'Shaker para mezclar suplementos en polvo con facilidad';
        $producto39->tipo_prod = 'accesorio';
        $producto39->precio = 150.00;
        $producto39->cantidad = 100;
        $producto39->persona_id = 6;
        $producto39->save();

        $producto40 = new Producto;
        $producto40->nombre = 'ShortHombre';
        $producto40->dimensiones = 'Tamaño M, L, XL';
        $producto40->descripcion = 'Shorts de entrenamiento para hombre, ligeros y cómodos';
        $producto40->tipo_prod = 'accesorio';
        $producto40->precio = 400.00;
        $producto40->cantidad = 75;
        $producto40->persona_id = 6;
        $producto40->save();

        $producto41 = new Producto;
        $producto41->nombre = 'ShortHombre2';
        $producto41->dimensiones = 'Tamaño M, L, XL';
        $producto41->descripcion = 'Shorts de entrenamiento para hombre, con mayor resistencia';
        $producto41->tipo_prod = 'accesorio';
        $producto41->precio = 450.00;
        $producto41->cantidad = 60;
        $producto41->persona_id = 6;
        $producto41->save();

        $producto42 = new Producto;
        $producto42->nombre = 'ShortsMujer';
        $producto42->dimensiones = 'Tamaño S, M, L';
        $producto42->descripcion = 'Shorts deportivos para mujer, ideales para entrenamiento';
        $producto42->tipo_prod = 'accesorio';
        $producto42->precio = 350.00;
        $producto42->cantidad = 80;
        $producto42->persona_id = 6;
        $producto42->save();

        $producto43 = new Producto;
        $producto43->nombre = 'Tenis';
        $producto43->dimensiones = 'Tamaño 25-40';
        $producto43->descripcion = 'Tenis deportivos para entrenamiento y comodidad';
        $producto43->tipo_prod = 'accesorio';
        $producto43->precio = 700.00;
        $producto43->cantidad = 100;
        $producto43->persona_id = 6;
        $producto43->save();

        $producto44 = new Producto;
        $producto44->nombre = 'TenisMujer';
        $producto44->dimensiones = 'Tamaño 25-40';
        $producto44->descripcion = 'Tenis deportivos para mujer, diseñados para el confort en el entrenamiento';
        $producto44->tipo_prod = 'accesorio';
        $producto44->precio = 750.00;
        $producto44->cantidad = 90;
        $producto44->persona_id = 6;
        $producto44->save();

        $producto45 = new Producto;
        $producto45->nombre = 'TopMujer';
        $producto45->dimensiones = 'Tamaño S, M, L';
        $producto45->descripcion = 'Top deportivo para mujer, ideal para entrenamiento';
        $producto45->tipo_prod = 'accesorio';
        $producto45->precio = 350.00;
        $producto45->cantidad = 100;
        $producto45->persona_id = 6;
        $producto45->save();

        $producto46 = new Producto;
        $producto46->nombre = 'Vitaminas';
        $producto46->dimensiones = '30 cápsulas';
        $producto46->descripcion = 'Vitaminas para mejorar la salud general y el rendimiento físico';
        $producto46->tipo_prod = 'consumible';
        $producto46->precio = 250.00;
        $producto46->cantidad = 120;
        $producto46->persona_id = 6;
        $producto46->save();

    }
}
