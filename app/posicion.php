<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posicion extends Model
{
 protected $table='posicion';

 protected $primaryKey = "id_posicion";
 
 protected $fillable =  array('id_posicion','pais_nombre','ganado','perdido','empatado','puntos');

 public $timestamps = false;
}
