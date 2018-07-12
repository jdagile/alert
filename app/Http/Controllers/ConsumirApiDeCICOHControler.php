<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ConsumirApiDeCICOHControler extends Controller
{
  public function index()
  {
/*
    $client = new Client([
  'base_uri' => 'http://138.197.217.139:8080/api/v2/cicoh/_table/v_api_lasthour?include_count=true&api_key=74866bf219af9c58496bab86a3360fe071fd6cecd866d3f0721550dfdc69fbe5',
  // You can set any number of default request options.
  'timeout'  => 2.0,
]);

// Send a request to https://foo.com/api/test
$response = $client->request('GET');
$posts = json_decode( $response->getBody()->getcontents());

  return view('prueba', compact('posts'));
  */
  }

  public function DatosDeUltimaHora()
  {
    header("Content-type:text/html;charset=\"utf-8\"");
    $previsionTiempo = ""; $error="";
    $urlContents = file_get_contents("http://138.197.217.139:8080/api/v2/cicoh/_table/v_api_lasthour?include_count=true&api_key=74866bf219af9c58496bab86a3360fe071fd6cecd866d3f0721550dfdc69fbe5");
       $array = json_decode($urlContents,true);
       return  $array;
  }





}
