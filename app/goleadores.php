<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goleadores extends Model
{
 protected $table='goleadores';
 
 protected $fillable =  array('id_goleadores','jugador_nombre_jugador','goles');

 public $timestamps = false;
}