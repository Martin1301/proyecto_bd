<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encuentro_pais extends Model
{
 protected $table='fecha_encuentro_pais';

 protected $primaryKey = 'idencuentro_paises';

 protected $fillable =  array('idencuentro_paises','fecha_encuentro_paises','bandera_a','pais_nombre_a','gol_a','bandera_b','pais_nombre_b','gol_b','sede_nombre');

 public $timestamps = false;
}