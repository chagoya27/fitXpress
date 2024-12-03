<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = ['persona_id'];
    protected $primaryKey = 'persona_id';
    public $incrementing = false;
    protected $keyType = 'unsignedBigInteger';


    function obtenerClientes(){
    // Obtiene todos los registros de la tabla 'cliente'
        $clientes = Cliente::all(); // Obtiene todos los datos de la tabla 'cliente'

    // Verifica si no hay registros
        if ($clientes->isEmpty()) {
            return response()->json(['message' => 'No se encontraron clientes'], 404);
        }

    // Devuelve los registros como JSON
    return response()->json($clientes);
    }

    
}
