<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cicohalert;
use App\ProductoFaseElementoRango;

class ProductoFaseElementoRangoControler extends Controller
{
    public function index()
    {
      $ProductoFaseElementoRangos = ProductoFaseElementoRango::all();
return view('messages.productorango' , compact('ProductoFaseElementoRangos'));
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
    public function ObtenerParametrosDeProductoFaseElementoRango($valoresElementos)
   {
        try {
          $ResultadoProductoFaseElementoRango =null;
         $ResultadoProductoFaseElementoRango = ProductoFaseElementoRango::where('tipoproducto_id', '=', $valoresElementos["tipoproducto_id"])
          ->where('elementos_id', '=', $valoresElementos["elementos_id"])
          ->where('jornada_id', '=', $valoresElementos["jornada_id"])
          ->where('fasefenologica_id', '=',$valoresElementos["fasefenologica_id"])->get();
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
