<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EstacionesAlertas ;
use Carbon\Carbon;
use cicohalert;
use Yajra\Datatables\Datatables;
use DB;

class EstacionesAlertasControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*
  $estacionesalertas = DB::select('select  * from public."listar_alertas_out"() limit 10');
  //$listaDeAlertas::query()->make(true);
  $resultado = array();
  foreach($estacionesalertas as $r){
      $resultado[] = $r;
  }

  return View('estacionesalertas')->with('estacionesalertas',$estacionesalertas);
*/
$estacionesalertas=  DB::table('valoreselementos')
              ->join('estaciones', 'valoreselementos.estaciones_id', '=', 'estaciones.id')
              ->join('elementos', 'valoreselementos.elementos_id', '=', 'elementos.id')
              ->join('unidaddemedida', 'valoreselementos.unidaddemedida_simbolo', '=', 'unidaddemedida.simbolo')
              ->join('estacionesalertas', 'estacionesalertas.valoreselementos_id', '=', 'valoreselementos.id')
              ->join('tipodealerta', 'estacionesalertas.tipodealerta_id', '=', 'tipodealerta.id')
              ->join('niveldealerta', 'tipodealerta.niveldealerta_id', '=', 'niveldealerta.id')
              ->orderBy('estacionesalertas.id', 'ASC')
              ->select('niveldealerta.descripcion as nivel', 'tipodealerta.descripcion as aviso')
              ->get()->take(10);

  return View('estacionesalertas')->with('estacionesalertas',$estacionesalertas);

    }


    public function index2()
    {
      $estacionesalertas=  DB::table('valoreselementos')
                    ->join('estaciones', 'valoreselementos.estaciones_id', '=', 'estaciones.id')
                    ->join('elementos', 'valoreselementos.elementos_id', '=', 'elementos.id')
                    ->join('unidaddemedida', 'valoreselementos.unidaddemedida_simbolo', '=', 'unidaddemedida.simbolo')
                    ->join('estacionesalertas', 'estacionesalertas.valoreselementos_id', '=', 'valoreselementos.id')
                    ->join('tipodealerta', 'estacionesalertas.tipodealerta_id', '=', 'tipodealerta.id')
                    ->join('niveldealerta', 'tipodealerta.niveldealerta_id', '=', 'niveldealerta.id')
                    ->orderBy('estacionesalertas.id', 'ASC')
                    ->select('niveldealerta.descripcion as nivel', 'tipodealerta.descripcion as aviso')
                    ->get()->take(10);

        return View('estacionesalertas2')->with('estacionesalertas',$estacionesalertas);
  }

public function alertacalendario()
{

  $estacionesalertas = DB::select('select * from public."listar_alertas_out"()');
  //$listaDeAlertas::query()->make(true);
  $resultado = array();
  foreach($estacionesalertas as $r){
      $resultado[] = $r;
  }
  print_r(json_encode($estacionesalertas));
    return View('estacionesalertas')->with('estacionesalertas',json_encode($estacionesalertas));

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
     public function store( $valores)
     {
       try {
         $fechaActual =Carbon::now()->subHours(6)->toDateTimeString();
         $nuevoEstacionesAlertas =  new EstacionesAlertas;
         $nuevoEstacionesAlertas->valoreselementos_id = $valores["valoreselementos_id"];
         $nuevoEstacionesAlertas->tipodealerta_id =  $valores["tipodealerta_id"];
         $nuevoEstacionesAlertas->created_at  = $fechaActual;
         $nuevoEstacionesAlertas->updated_at  = $fechaActual;
         $nuevoEstacionesAlertas->save();
         return $nuevoEstacionesAlertas->id;
       } catch (\Exception $e) {
         echo "--------ocurrio un error al Registrar nuevoEstacionesAlertas   --->".$e;
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
    public function anyData()
    {
      return DataTables::eloquent(EstacionesAlertas::query())->make(true);

    }

    public function listaDeAlertas()
    {
    $listaDeAlertas = DB::select('call listar_alertas_out()');
    return View('lista')->with('lista',$listaDeAlertas);
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
