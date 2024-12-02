<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orden;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orden1 = new Orden();
        $orden1->fecha = now();
        $orden1->persona_id = 1;
        $orden1->save();
        
        $orden2 = new Orden();
        $orden2->fecha = now();
        $orden2->persona_id = 2;
        $orden2->save();
        
        $orden3 = new Orden();
        $orden3->fecha = now();
        $orden3->persona_id = 3;
        $orden3->save();

    }
}
