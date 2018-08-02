<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use cicohalert;
class ApiAlertasControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listaDeAlertas = DB::select('select * from public."listar_alertas_out"()');
      //$listaDeAlertas::query()->make(true);
      $resultado = array();
      $fila = 0;
      foreach($listaDeAlertas as $r){
          //$resultado[] = $r;
          $resultado[$fila]["Id"] = $fila;
          $resultado[$fila]["title"] = utf8_encode($r->out_aviso);
          $resultado[$fila]["start"] =  $r->out_fecha;
          $resultado[$fila]["className"] = $this->getClassAlerta($r->out_idnivel);
          $resultado[$fila]["description"] = utf8_encode($r->out_nivel)." - ".utf8_encode($r->out_aviso)." - Estacion:".utf8_encode($r->out_estacion)." - Elemento: ".utf8_encode($r->out_elemento)." - Valor: ".utf8_encode($r->out_valor)." ".utf8_encode($r->out_unidaddemedida);
          $fila++;
      }
      print_r(json_encode($resultado));
    }


private function getClassAlerta($tipo) {
	$cssClass = "m-fc-event--light m-fc-event--solid-";
	switch ($tipo) {
	    case 1:
	       $cssClass .= "danger";
	        break;
	    case 2:
	       $cssClass .= "warning";
	        break;
	    case 3:
	        $cssClass .= "success";
	        break;
	   default:
	   		$cssClass .= "";

	}
	return $cssClass;
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
        //
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
