<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class PruebaController extends Controller
{
    public function nombreFuncion($parametro = "sin valor"){
        /*return "Hola desde el controlador!!! <br/><br/>".
            "El parámetro es: $parametro";*/

        return view('prueba')->with('parametro', $parametro);
    }
}
