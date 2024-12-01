<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cliente1 = new Cliente();
        $cliente1->persona_id =1;
        $cliente1->tarjeta = 1;
        $cliente1->save();

        $cliente2 = new Cliente();
        $cliente2->persona_id = 2;
        $cliente2->tarjeta = 1;
        $cliente2->save();

        $cliente3 = new Cliente();
        $cliente3->persona_id = 3;
        $cliente3->tarjeta = 1;
        $cliente3->save();

        $cliente4 = new Cliente();
        $cliente4->persona_id = 4;
        $cliente4->tarjeta = 1;
        $cliente4->save();

        $cliente5 = new Cliente();
        $cliente5->persona_id = 5;
        $cliente5->tarjeta = 1;
        $cliente5->save();


    }
}
