<?php
/**
 * Created by PhpStorm.
 * User: aurelio
 * Date: 11/10/16
 * Time: 1:14 PM
 */

class EstadosTest extends  TestCase{

    public function testGet(){
        $this->get('/api/estados');
    }

    public function testGetEstadosJson(){
        $this->get('api/estados')->isJson();
    }

    public function testGetEstados()
    {
        $this->get('/api/estados')->seeJson(['estados' => \App\Estado::all()->toArray()]);
    }

    public function testGetEstadoMinasGerais(){
        $this->get('api/estados/11')->seeJson(['nome' => 'Minas Gerais', 'uf' => 'MG', 'id' => 11]);
    }

    public function testGetEstadoMinasGeraisIsJson(){
        $this->get('api/estados/11')->seeJson(['nome' => 'Minas Gerais', 'uf' => 'MG', 'id' => 11])->isJson();
    }
}