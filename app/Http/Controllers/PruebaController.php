<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PruebaController extends Controller
{
    public function nombreFuncion(){
        return "Hola desde el controlador!!!";
    }
}
