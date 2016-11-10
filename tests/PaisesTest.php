<?php
/**
 * Created by PhpStorm.
 * User: aurelio
 * Date: 11/10/16
 * Time: 12:55 PM
 */

class PaisesTest extends TestCase{

    public function testGetPais()
    {
        $this->get('/api/pais');
    }
    public function testLoadPaisesIsJsonOK()
    {
        $this->get('/api/paises')->isJson();
    }

    public function testLoadPaisesOk()
    {
        $this->get('/api/paises')->seeJson(\App\Pais::all()->toArray());
    }

    public function testLoadPaisBrasil()
    {
        $this->get('/api/paises')->seeJson(['nome' => 'Brasil', 'sigla' => 'BR']);
    }
}