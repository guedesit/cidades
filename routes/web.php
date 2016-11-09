<?php

/* 
    Rotas do Cidades API
*/

$app->get('/', function () use ($app) {
    return view('index');
});


//config for dingo
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['middleware' => 'api.throttle'], function($api){

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

