<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\persona;
use App\Models\Producto;
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

    public function page(){
        $producto = Producto::all();
        return view('private',compact('producto'));
    }
    

    public function login(Request $request)
    {
    // Validación
    $credentials = $request->only('usuario', 'password');

    // Verificar las credenciales manualmente con el modelo Formulario
    $user = Formulario::where('usuario', $credentials['usuario'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        Auth::login($user, $request->has('remember'));
        $request->session()->regenerate();

        return redirect()->intended('/private');
    } else {
        return redirect('/')->withErrors(['usuario' => 'Credenciales incorrectas']);
        }
    }

}