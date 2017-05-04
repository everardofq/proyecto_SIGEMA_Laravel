<?php

namespace sigema\Http\Controllers;

class PruebaControler extends Controller
{
    public function index()
    {
    	return "Hola desde PruebaControler";
    }
    public function nombre($nombre)
    {
    	return "Hola ".$nombre." desde PruebaControler";
    }
}
