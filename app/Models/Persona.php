<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Persona extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'persona'; // Nombre correcto de la tabla

    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: function ($value) { // Guardar valores en la base de datos
                return strtolower($value);
            },
            get: function ($value) { // Recuperar valores de la base de datos
                return ucfirst($value);
            }
        );
    }
}
