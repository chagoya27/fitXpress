<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Formulario extends Authenticatable
{
    protected $table = 'persona'; // Administra la tabla 'persona'

    // Aquí transformamos los títulos a minúsculas
    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value),
            get: fn($value) => ucfirst($value)
        );
    }

    // Asegúrate de que el campo 'password' esté accesible
    protected $fillable = ['usuario', 'password'];

    // Método para verificar la contraseña
    public function checkPassword($password)
    {
        return Hash::check($password, $this->password);
    }
}