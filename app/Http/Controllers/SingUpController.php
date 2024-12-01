<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Formulario;
use Illuminate\Support\Facades\Hash;

class SingUpController extends Controller
{
    public function index(){
        return view('singUp');
    }

    public function store(Request $request)
    {
        $persona = new Formulario();
        $persona->nombre = $request->nombre;
        $persona->materno = $request->materno;
        $persona->paterno = $request->paterno;
        $persona->usuario = $request->usuario;
        $persona->password = $request->password;
        $persona->email = $request->correo;


        $persona->save();

    }
    


}




