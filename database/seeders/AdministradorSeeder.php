<?php

namespace Database\Seeders;
use App\Models\Administrador;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    $administrador1 = new Administrador;
    $administrador1->persona_id = 6;
    $administrador1->sucursal = 1;
    $administrador1->rfc = 'GOMJ870412H89';
    $administrador1->save();


    $administrador2 = new Administrador;
    $administrador2->persona_id = 7;
    $administrador2->sucursal = 2;
    $administrador2->rfc = 'PEMG921003T5A';
    $administrador2->save();

    $administrador3 = new Administrador;
    $administrador3->persona_id = 8;
    $administrador3->sucursal = 3;
    $administrador3->rfc = 'LOPR810622L2K';
    $administrador3->save();

    }
}
