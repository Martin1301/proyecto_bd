<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
 protected $table='pais';

 protected $fillable =  array('id_pais','nombre');

 public $timestamps = false;
}