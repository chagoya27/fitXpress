<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SingInController extends Controller
{
    /**
	* Función que muestra la vista de logados o la vista con el formulario de Login
	*/
	public function index()
	{
	    return view('login');
	}



    
        
}
