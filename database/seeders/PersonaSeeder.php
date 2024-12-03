<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;
use Illuminate\Support\Str;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        

        $persona1 = new Persona;
        $persona1->nombre = 'Ana';
        $persona1->paterno = 'Gómez';
        $persona1->materno = 'López';
        $persona1->usuario = 'ana123';
        $persona1->password = bcrypt('pass123');
        $persona1->email = 'ana@gomez.com';
        $persona1->telefono = 1247956784;
        $persona1->remember_token = Str::random(10);
        $persona1->save();

        $persona2 = new Persona;
        $persona2->nombre = 'Luis';
        $persona2->paterno = 'Martínez';
        $persona2->materno = 'Ramírez';
        $persona2->usuario = 'luism';
        $persona2->password = bcrypt('luispass');
        $persona2->email = 'luis@martinez.com';
        $persona2->telefono = 1247956784;
        $persona2->remember_token = Str::random(10);
        $persona2->save();

        $persona3 = new Persona;
        $persona3->nombre = 'María';
        $persona3->paterno = 'Hernández';
        $persona3->materno = 'García';
        $persona3->usuario = 'mariah';
        $persona3->password = bcrypt('mariapass');
        $persona3->email = 'maria@hernandez.com';
        $persona3->telefono = 1247956784;
        $persona3->remember_token = Str::random(10);
        $persona3->save();

        $persona4 = new Persona;
        $persona4->nombre = 'Carlos';
        $persona4->paterno = 'Sánchez';
        $persona4->materno = 'Pérez';
        $persona4->usuario = 'carlosp';
        $persona4->password = bcrypt('carlospass');
        $persona4->email = 'carlos@sanchez.com';
        $persona4->telefono = 1247956784;
        $persona4->remember_token = Str::random(10);
        $persona4->save();

        $persona5 = new Persona;
        $persona5->nombre = 'Lucía';
        $persona5->paterno = 'Jiménez';
        $persona5->materno = 'Guzmán';
        $persona5->usuario = 'luciaj';
        $persona5->password = bcrypt('luciapass');
        $persona5->email = 'lucia@jimenez.com';
        $persona5->telefono = 1247956784;
        $persona5->remember_token = Str::random(10);
        $persona5->save();

        $persona6 = new Persona;
        $persona6->nombre = 'Pedro';
        $persona6->paterno = 'Ortiz';
        $persona6->materno = 'Domínguez';
        $persona6->usuario = 'pedro123';
        $persona6->password = bcrypt('pedropass');
        $persona6->email = 'pedro@ortiz.com';
        $persona6->telefono = 1247956784;
        $persona6->remember_token = Str::random(10);
        $persona6->save();

        $persona7 = new Persona;
        $persona7->nombre = 'Sofía';
        $persona7->paterno = 'Rojas';
        $persona7->materno = 'Morales';
        $persona7->usuario = 'juan';
        $persona7->password = bcrypt('juan');
        $persona7->email = 'sofia@rojas.com';
        $persona7->telefono = 1247956784;
        $persona7->remember_token = Str::random(10);
        $persona7->save();

        $persona8 = new Persona;
        $persona8->nombre = 'Jorge';
        $persona8->paterno = 'Flores';
        $persona8->materno = 'Castro';
        $persona8->usuario = 'jorgef';
        $persona8->password = bcrypt('jorgepass');
        $persona8->email = 'jorge@flores.com';
        $persona8->telefono = 1247956784;
        $persona8->remember_token = Str::random(10);
        $persona8->save();

        $persona9 = new Persona;
        $persona9->nombre = 'Elena';
        $persona9->paterno = 'Mendoza';
        $persona9->materno = 'Ríos';
        $persona9->usuario = 'elenam';
        $persona9->password = bcrypt('elenapass');
        $persona9->email = 'elena@mendoza.com';
        $persona9->telefono = 1247956784;
        $persona9->remember_token = Str::random(10);
        $persona9->save();

        $persona10 = new Persona;
        $persona10->nombre = 'Miguel';
        $persona10->paterno = 'Vargas';
        $persona10->materno = 'Carrillo';
        $persona10->usuario = 'miguelv';
        $persona10->password = bcrypt('miguelpass');
        $persona10->email = 'miguel@vargas.com';
        $persona10->telefono = 1247956784;
        $persona10->remember_token = Str::random(10);
        $persona10->save();
    }
}
