<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   // use HasFactory;
   protected $table="clientes";
   protected $primaryKey="idcliente";
   protected $fillable=
   ['apellidos','nombre', 'documento','telefono', 'email', 'direccion'];

   public $timestamps = false;
}