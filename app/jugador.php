<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
 protected $table='jugador';

 protected $primaryKey = "id_jugador";

 protected $fillable =  array('id_jugador','nombre_jugador','pais_nombre','edad');

 public $timestamps = false;
}