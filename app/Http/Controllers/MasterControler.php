<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Elementos;
use App\UnidadDeMedida;
use App\Estaciones;
use App\ValoresElementos;

class MasterControler extends Controller
{
/*
                                       PUNTOS IMPORANTES POR PROGRAMAR
1.Definir en que fase fenologica del año estamos
2.Sincronizar automaticamente tablas generales *OK*
3.Determinar si  una jornada Diurna o Nocturna en base a la hora del dia *OK*
4.Registro de Valores elementos.*OK*
5.Registro de Alertas.
6.La validacion de precipitacion del cuadro de excel de capucas debe realizar en base a acumulados
*/
  public function index()
  {
    //unidadesDeMedidas
    $unidadesControler =null;
    $unidadDeMedidaControler       = new UnidadDeMedidaControler();
    $unidadesDeMedidas   =  $unidadDeMedidaControler->ObtenerTodos();
echo "----------------UnidadesDeMedidas--------------------".'<br>';
    foreach ($unidadesDeMedidas as $unidad) {
            $valor=  $unidad['simbolo'];
            echo ' ---------       '.$valor.'<br>';
    }
//Elementos.
$elementosControlador= null;
$elementosControlador = new ElementosControler();
$elementos =$elementosControlador->ObtenerTodos();
echo "----------------Elementos--------------------".'<br>';
foreach ($elementos as $elemento) {
        $valor=  $elemento['simbolo'];
        echo ' ---------       '.$valor.'<br>';
}
//estaciones.
$estaciones=null;
$estacionesControler= new EstacionesControler();
$estaciones= $estacionesControler->ObtenerTodos();
echo "----------------Estaciones--------------------".'<br>';
foreach ($estaciones as $estacion) {
        $valor=  $estacion['descripcion'];
        echo $estacion['id']." ".$estacion['descripcion'].'<br>';
}

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
       //Verificar el registro de la estacion.
       $exixteLaEstacion=false;
        $estacionesControler= new EstacionesControler();
        $exixteLaEstacion= $estacionesControler->VerificarExistencia($item['station_id'] );
       if($exixteLaEstacion == false)
       {

         $nuevaEsacion= new Estaciones();
         $nuevaEsacion->id=$item['station_id'];
         $nuevaEsacion->descripcion = $item['station_name'];
         $nuevaEsacion->latitud =$item['latitude'];
         $nuevaEsacion->longitud =$item['longitude'];
         $nuevaEsacion->elevacion =$item['elevation'];
         $nuevaEsacion->estaactivo = true;
         $nuevaEsacion->id_usuariocreo = 1;
         $nuevaEsacion->save();
         $exixteLaEstacion =true;

       }

       //Verificar el registro de unidades de UnidadDeMedida
          $existeUnidadDeMedida = $unidadDeMedidaControler->VerificarExistencia($item['symbol'] );
                  if(!$existeUnidadDeMedida)
                  {
               $nuevaUnidadDeMedida = new UnidadDeMedida();
               $nuevaUnidadDeMedida->simbolo = $item['symbol'];
               $nuevaUnidadDeMedida->descripcion = $item['symbol'];
               $nuevaUnidadDeMedida->estaactivo = true;
               $nuevaUnidadDeMedida->id_usuariocreo = 1;
               $nuevaUnidadDeMedida->save();
               $existeUnidadDeMedida =true;
                  }
       //verificar si esta registrado el elemento.
        $existeElemento=  $elementosControlador->VerificarExistencia( $item['element_id'] );
       if(!$existeElemento)
       {
         $nuevoElemento =  new Elementos;
         $nuevoElemento->id = $item['element_id'];
         $nuevoElemento->simbolo = $item['symbol'];
         $nuevoElemento->descripcion = $item['element_symbol']." ".$item['element_name'];
         $nuevoElemento->estaactivo = true;
         $nuevoElemento->id_usuariocreo = 1;
        $nuevoElemento->save();
        $existeElemento =true;
       }
       //tiempo de estacionenes.
       $fechaDeEstacion=   $item['datetime'];
        $hora =date("H",strtotime($fechaDeEstacion));
       $dia =date("d",strtotime($fechaDeEstacion));
       $mes =date("m",strtotime($fechaDeEstacion));
       $anio =date("y",strtotime($fechaDeEstacion));
//Verificacion de existencia de ValoresElementos.
$listaDeValoresElementos = array([]);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'estaciones_id', $item['station_id']);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'elementos_id', $item['element_id']);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'unidaddemedida_simbolo', $item['symbol']);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'fechaestacion', $item['datetime']);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'valor', $item['valor']);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'estaactivo', true);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'dia', $dia);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'mes', $mes);
$listaDeValoresElementos = array_add($listaDeValoresElementos, 'anio', $anio);
$valoresElementosControler= new ValoresElementosControler();
$existenValoresElementos = $valoresElementosControler->VerificarExistencia($listaDeValoresElementos);
//Si no esta registrado en la base de datos se registra
if($existenValoresElementos != 1)
{
  $valoresElementosControler->store($listaDeValoresElementos);
}
//Registro de Alertas.
$jornada =0;
if( $hora >=5  and $hora <=17 )
{
  $jornada =1;
}
else {
  $jornada =2;
}
//ObtenerParametrosDeProductoFaseElementoRango

         foreach($productoFaseElementoRangos as $productoFaseElementoRango)
         {

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
