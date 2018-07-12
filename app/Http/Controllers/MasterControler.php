<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterControler extends Controller
{
/*
                                       PUNTOS IMPORANTES POR PROGRAMAR
1.Definir en que fase fenologica del año estamos
2.Sincronizar automaticamente tablas generales
3.Determinar si  una jornada Diurna o Nocturna en base a la hora del dia
4.Registro de Valores elementos.
5.Registro de Alertas.
6.La validacion de precipitacion del cuadro de excel de capucas debe realizar en base a acumulados
*/
  public function index()
  {
    //llamar el metodo DatosDeUltimaHora es el que cosumenel API en el controlador ConsumirApiDeCICOHControler
     $datosDeUltimaHora =null;
     $controlador =null;
     $controlador = new ConsumirApiDeCICOHControler();
     $items = $controlador->DatosDeUltimaHora();
     //Obener información de la tabla ProductoFaseElementoRango
     $controladorProductoFaseElementoRango =null;
     $controladorProductoFaseElementoRango =  new ProductoFaseElementoRangoControler();
     $productoFaseElementoRangos =$controladorProductoFaseElementoRango->all();
     $array = json_decode($productoFaseElementoRangos,true);
     foreach($items ['resource']  as $item ) {
     //seleccionamos el mes
     $fechaDeEstacion=   $item['datetime'];
     $mes =date("m",strtotime($fechaDeEstacion));
     $hora=date("h",strtotime($fechaDeEstacion));

         foreach($productoFaseElementoRangos as $productoFaseElementoRango)
         {
          //echo $productoFaseElementoRango['tipoproducto_id'].'<br>';
          //echo $productoFaseElementoRango['fasefenologica_id'].'<br>';
          //echo $productoFaseElementoRango['elementos_id'].'<br>';
          //echo $productoFaseElementoRango['unidaddemedida_id'].'<br>';
          //echo $productoFaseElementoRango['valorminimo'].'<br>';
          //echo $productoFaseElementoRango['valormaximo'].'<br>';
         if(  ($item['element_id']== $productoFaseElementoRango['elementos_id']) and $item['valor'] !=0  )
         {
           if($item['valor']< $productoFaseElementoRango['valorminimo'])
           {
             echo $item['valor'].$item['symbol']." "." Este valor es menor que el minimo permitido --".$productoFaseElementoRango['valorminimo']."--Codigo Elemento ".$productoFaseElementoRango['elementos_id'].'<br>';
           }
           if($item['valor']> $productoFaseElementoRango['valormaximo'])
           {
             echo $item['valor'].$item['symbol']." "." Esta valor es mayor que el maximo permitido --".$productoFaseElementoRango['valorminimo']."--Codigo Elemento ".$productoFaseElementoRango['elementos_id'].'<br>';
           }
         }
       }

}




     foreach($items ['resource']  as $item ) {
       //Inicialización de variables
             $station_id  =0;
             $station_name   ="";
             $latitude  =0;
             $longitude  =0;
             $elevation   =0;
             $element_id   =0;
             $element_symbol ="";
             $symbol   ="";
             $element_name ="";
             $valor =0;
             $datetime="0000-00-00 00:00:00" ;
             //Asignacion
             $station_id  = $item['station_id'];
             $station_name   = $item['station_name'];
             $latitude  = $item['latitude'];
             $longitude  = $item['longitude'];
             $elevation   = $item['elevation'];
             $element_id   = $item['element_id'];
             $element_symbol   = $item['element_symbol'];
             $symbol   = $item['symbol'];
             $element_name = $item['element_name'];
             $valor = $item['valor'];
             $datetime = $item['datetime'];
             $descripcion = $station_id." ".$station_name." Id Elemento ".$element_id." simbolo ".$element_symbol." ".$element_name." Valor ".$valor." Unidad ".$symbol ;






          //   echo $descripcion.'<br>';
           }

return view('prueba');
  }



  public function RegistroDeValoresElementos()
  {
            try {

            } catch (\Exception $e) {

            }


   }
  public function VerificacionDeAlertas ()
  {
    try {

        } catch (\Exception $e) {

        }

  }

    public function RegistroDeAlertas ()
    {
      try {

          } catch (\Exception $e) {

          }

    }









}
