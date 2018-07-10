<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoFaseElementoRango extends Model
{
  protected $table ='productofaseelementorango';
  protected $fillable =['valormaximo','valorminimo','estaactivo'];
}
