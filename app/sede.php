<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sede extends Model
{
 protected $table='sede';

 protected $fillable =  array('id_sede','nombre','ubicacion');

 public $timestamps = false;
}