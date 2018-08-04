<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cicohalert;
use App\ProductoFaseElementoRango;
use DB;
class ProductoFaseElementoRangoControler extends Controller
{
    public function index()
    {
      /*
      $ProductoFaseElementoRangos = ProductoFaseElementoRango::all();
return view('productofaseelementorango' , compact('ProductoFaseElementoRangos'));
*/



/*
$listaDeAlertas = DB::select('select  * from public."listar_alertas_out"()');
//$listaDeAlertas::query()->make(true);
$resultado = array();
foreach($listaDeAlertas as $r){
    $resultado[] = $r;
}
print_r(json_encode($listaDeAlertas));
return View('productofaseelementorango')->with('lista',$listaDeAlertas);
*/
$consulta=  DB::table('valoreselementos')
              ->join('estaciones', 'valoreselementos.estaciones_id', '=', 'estaciones.id')
              ->join('elementos', 'valoreselementos.elementos_id', '=', 'elementos.id')
              ->join('unidaddemedida', 'valoreselementos.unidaddemedida_simbolo', '=', 'unidaddemedida.simbolo')
              ->join('estacionesalertas', 'estacionesalertas.valoreselementos_id', '=', 'valoreselementos.id')
              ->join('tipodealerta', 'estacionesalertas.tipodealerta_id', '=', 'tipodealerta.id')
              ->join('niveldealerta', 'tipodealerta.niveldealerta_id', '=', 'niveldealerta.id')
              ->select('niveldealerta.descripcion as out_nivel', 'tipodealerta.descripcion as out_aviso')
              ->get();
//print_r(json_encode($consulta));
  return json_encode($consulta);

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
    public function store(Request $request)
    {

    }

    public function all()
    {
        try {
        return  ProductoFaseElementoRango::all();
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
        //
    }
    public function ObtenerParametrosDeProductoFaseElementoRango($valores)
   {
        try {
          $ResultadoProductoFaseElementoRango =null;
         $ResultadoProductoFaseElementoRango = ProductoFaseElementoRango::where('tipoproducto_id', '=', $valores["tipoproducto_id"])
          ->where('fasefenologica_id', '=',$valores["fasefenologica_id"])->get();

            return $ResultadoProductoFaseElementoRango;

            } catch (\Exception $e) {
}
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
