<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estaciones extends Model
{
  protected $table ='estaciones';
  protected $fillable =['id','descripcion','longiud','latitud','elevacion','estaactivo','id_usuariocreo','created_at'];

}
