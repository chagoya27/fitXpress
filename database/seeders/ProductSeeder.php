<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Product;
  
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Barra de Proteina',
                'description' => 'Barra rica en proteínas para nutrición deportiva/50gr',
                'price' => 50.00
            ],
            [
                'name' => 'Barra Olímpica',
                'description' => 'Barra olímpica ideal para levantamiento de pesas y ejercicios de fuerza/220cm x 3cm',
                'price' => 3500.00
            ],

            [
                'name' => 'Barra',
                'description' => 'Barra estándar para entrenamiento en gimnasio/150cm x 3cm',
                'price' => 2000.00
            ],

            [
                'name' => 'Blusa Deportiva',
                'description' => 'Blusa deportiva cómoda y transpirable para entrenamiento',
                'price' => 3500.00
            ],

            [
                'name' => 'Blusa Deportiva Tipo 2',
                'description' => 'Blusa deportiva de diseño exclusivo para entrenamiento intenso',
                'price' => 350.00
            ],

            [
                'name' => 'Calcetas para Mujer',
                'description' => 'Calcetas deportivas de alto rendimiento para mujer',
                'price' => 120.00
            ],

            [
                'name' => 'Colágeno Hidrolizado',
                'description' => 'Suplemento alimenticio para cuidado de articulaciones y piel/500g',
                'price' => 550.00
            ],


            [
                'name' => 'Creatina',
                'description' => 'Suplemento de creatina monohidratada para aumentar fuerza y rendimiento/300g',
                'price' => 450.00
            ],
            
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
