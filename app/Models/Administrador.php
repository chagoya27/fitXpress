<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administrador';

    protected $primaryKey = 'persona_id';
    public $incrementing = false; // Si no es autoincremental
    protected $keyType = 'unsignedBigInteger';
    protected $fillable = ['persona_id', 'sucursal', 'rfc'];




    
}
