<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValoresElementos;

class ValoresElementosControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $valoresElementos)
    {
      try {

        $nuevoValorElemento =  new ValoresElementos;
        $nuevoValorElemento->estaciones_id = $valoresElementos["station_id"];
        $nuevoValorElemento->elementos_id =  $valoresElementos["element_id"];
        $nuevoValorElemento->unidaddemedida_simbolo = $valoresElementos["symbol"];
        $nuevoValorElemento->fechaestacion =$valoresElementos["datetime"];
        $nuevoValorElemento->valor =$valoresElementos["valor"];
        $nuevoValorElemento->estaactivo = $valoresElementos["estaactivo"];
        $nuevoValorElemento->dia = $valoresElementos["dia"];
        $nuevoValorElemento->mes  = $valoresElementos["mes"];
        $nuevoValorElemento->anio = $valoresElementos["anio"];
      //  echo "entro al metodo store";
      //  print_r($nuevoValorElemento);
    //  $nuevoValorElemento->save();

        $nuevoValorElemento =true;
      } catch (\Exception $e) {
        echo "--------ocurrio un error al Registrar ValoresElementos   --->".$e;
      }
    }
    public function VerificarExistencia($valoresElementos)
    {
try {
  $existeRegistro =false;
  $ValoresElementos = null;


  $ResultadoValoresElementos = ValoresElementos::where('estaciones_id', '=', $valoresElementos["station_id"])
  ->where('elementos_id', '=', $valoresElementos["element_id"])
  ->where('fechaestacion', '=',$valoresElementos["datetime"])->exists();
//echo $ResultadoValoresElementos;



    return $ResultadoValoresElementos;

} catch (\Exception $e) {

}


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $unidadDeMedida = ValoresElementos::where('elementos_id', '=', 'V')->where('simbolo', 'like', '%a%')->get();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
