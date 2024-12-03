<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function store(Request $request)
    {
        $producto = new Product();
        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->price = $request->price;
        $producto->save();
        return view('admin');
    }
}
