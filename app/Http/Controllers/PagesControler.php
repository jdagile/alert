<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;//aqui esta la validacion

class PagesController extends Controller
{

//Contructor para middleware asignados a metodos

public function _construct()
{
	$this->middleware('example',['only' =>['home']]);
}


    //
public function home()
{
	return view('home');


}


	public function saludo($nombre ="Invitado")
	{
$html ="<h2>Contenido HTML</h2>";
$script ="<script>alert('Problema XSS -Cross site Scripting !')</script>";
$consolas =[
"Play Station 4",
"Xbox One",
"Wii U"
];
 	return view('saludo' ,compact('nombre','html', 'script', 'consolas'));
	}


}
