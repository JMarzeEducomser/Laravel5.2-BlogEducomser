<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function() {
    $form = "<form action='prueba' method='post'>".
        "<input type='hidden' name='_token' value='".csrf_token()."'/>".
        "<input type='hidden' name='_method' value='delete'/>".
        "<input type='submit'/>".
        "</form>";
    return $form;
});

Route::post('prueba', function() {
    return "POST!!!";
});

Route::put('prueba', function (){
    return "PUT!!!";
});

Route::delete('prueba', function() {
    return "DELETE!!!";
});

// Ruta que responde por función del controlador
Route::get('controlador/{parametro?}', 'PruebaController@nombreFuncion');
