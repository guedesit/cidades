<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//used to disable CORS
// header('Access-Control-Allow-Origin:  *');
// header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
//used to disable CORS


$app->get('/', function () use ($app) {
    return $app->version();
});


//config for dingo
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){

    // |||| Informações de endereço |||
    $api->get('paises', function(){
        return \App\Pais::all();
    });

    $api->get('paises/estados', function(){
        return \App\Pais::with('estados')->get();
    });

    $api->get('paises/{id}', function($id){
        return \App\Pais::findOrFail($id);
    });


    $api->get('estados', function(){
        return \App\Estado::all();
    });

    $api->get('estados/{id}', function($id){
        return \App\Estado::findOrFail($id);
    });

    $api->get('cidades', function(){
        return \App\Cidade::all();
    });

    $api->get('cidades/{id}', function($id){
        return \App\Cidade::findOrFail($id);
    });

    // alias to estados/cidades
    $api->get('cidades/estado/{id}', function($id){
        return \App\Cidade::where('estado_id', $id)->get();
    });
});

