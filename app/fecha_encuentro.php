<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fecha_encuentro extends Model
{
 protected $table='fecha_encuentro';
 
 protected $fillable =  array('idfecha_encuentro','fecha_encuentro');

 public $timestamps = false;
}