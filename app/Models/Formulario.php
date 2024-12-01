<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table= 'persona'; #para decir  que tabla va a administrar
    
    protected function title():Attribute{ #para transformar el contenido de titulos a solo minusculas
        return Attribute::make(
            set: function($value){ #set para guardar valores en la base
                return strtolower($value);
            },

            get:function($value){#recuperar valores en la base
                return ucfirst($value);
            }
        );
    }

}
