<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Administrador;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\Log;


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
        $products = Producto::all();
        return view('products',compact('products'));
    }






    
    public function login(Request $request)
    {
        // Validación de credenciales del formulario
        $credentials = $request->only('usuario', 'password');
    
        // Verificar si el usuario existe en la tabla Formulario
        $user = Formulario::where('usuario', $credentials['usuario'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Recuperar el ID de persona relacionado con el usuario
            $personaId = $user->persona_id;
    
            // Verificar si es administrador usando Eloquent
            $esAdmin = Administrador::where('persona_id', $personaId)->exists();
            Log::info('Resultado de administrador:', ['persona_id' => $personaId, 'esAdmin' => $esAdmin]);
    
            // Verificar si es cliente usando Eloquent
            $esCliente = Cliente::where('persona_id', $personaId)->exists();
            Log::info('Resultado de cliente:', ['persona_id' => $personaId, 'esCliente' => $esCliente]);
    
            // Iniciar sesión y regenerar la sesión
            Auth::login($user, $request->has('remember'));
            $request->session()->regenerate();
            print($esCliente);
            // Redirigir dependiendo de si es administrador o no
            if ($esAdmin) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/private');
            }
        } else {
            // Credenciales incorrectas
            return redirect('/')
                ->withErrors(['usuario' => 'Credenciales incorrectas']);
        }
    }
    









    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id & $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

}