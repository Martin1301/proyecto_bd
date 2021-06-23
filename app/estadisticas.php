<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estadisticas extends Model
{
 protected $table='estadisticas';

 protected $primaryKey = 'id_estadisticas';

 protected $fillable =  array('id_estadisticas','pais_nombre','jugador_nombre_jugador','amarilla','roja');

 public $timestamps = false;
}