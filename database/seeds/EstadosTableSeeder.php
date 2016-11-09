<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nome' => 'Acre',
                'uf' => 'AC',
                'pais_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'pais_id' => '1',
            ),
            2 => 
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'pais_id' => '1',
            ),
            3 => 
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'pais_id' => '1',
            ),
            4 => 
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'pais_id' => '1',
            ),
            5 => 
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'pais_id' => '1',
            ),
            6 => 
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'pais_id' => '1',
            ),
            7 => 
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'pais_id' => '1',
            ),
            8 => 
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'pais_id' => '1',
            ),
            9 => 
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'pais_id' => '1',
            ),
            10 => 
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'pais_id' => '1',
            ),
            11 => 
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'pais_id' => '1',
            ),
            12 => 
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'pais_id' => '1',
            ),
            13 => 
            array (
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'pais_id' => '1',
            ),
            14 => 
            array (
                'id' => '15',
                'nome' => 'Paraíba',
                'uf' => 'PB',
                'pais_id' => '1',
            ),
            15 => 
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'pais_id' => '1',
            ),
            16 => 
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'pais_id' => '1',
            ),
            17 => 
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'pais_id' => '1',
            ),
            18 => 
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'pais_id' => '1',
            ),
            19 => 
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'pais_id' => '1',
            ),
            20 => 
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'pais_id' => '1',
            ),
            21 => 
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'pais_id' => '1',
            ),
            22 => 
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'pais_id' => '1',
            ),
            23 => 
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'pais_id' => '1',
            ),
            24 => 
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'pais_id' => '1',
            ),
            25 => 
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'pais_id' => '1',
            ),
            26 => 
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'pais_id' => '1',
            ),
        ));
        
        
    }
}
