<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\persona;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

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