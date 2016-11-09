<?php

use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cidades')->delete();
        
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nome' => 'Afonso Cláudio',
                'estado_id' => '8',
            ),
            1 => 
            array (
                'id' => '2',
                'nome' => 'Água Doce do Norte',
                'estado_id' => '8',
            ),
            2 => 
            array (
                'id' => '3',
                'nome' => 'Águia Branca',
                'estado_id' => '8',
            ),
            3 => 
            array (
                'id' => '4',
                'nome' => 'Alegre',
                'estado_id' => '8',
            ),
            4 => 
            array (
                'id' => '5',
                'nome' => 'Alfredo Chaves',
                'estado_id' => '8',
            ),
            5 => 
            array (
                'id' => '6',
                'nome' => 'Alto Rio Novo',
                'estado_id' => '8',
            ),
            6 => 
            array (
                'id' => '7',
                'nome' => 'Anchieta',
                'estado_id' => '8',
            ),
            7 => 
            array (
                'id' => '8',
                'nome' => 'Apiacá',
                'estado_id' => '8',
            ),
            8 => 
            array (
                'id' => '9',
                'nome' => 'Aracruz',
                'estado_id' => '8',
            ),
            9 => 
            array (
                'id' => '10',
                'nome' => 'Atilio Vivacqua',
                'estado_id' => '8',
            ),
            10 => 
            array (
                'id' => '11',
                'nome' => 'Baixo Guandu',
                'estado_id' => '8',
            ),
            11 => 
            array (
                'id' => '12',
                'nome' => 'Barra de São Francisco',
                'estado_id' => '8',
            ),
            12 => 
            array (
                'id' => '13',
                'nome' => 'Boa Esperança',
                'estado_id' => '8',
            ),
            13 => 
            array (
                'id' => '14',
                'nome' => 'Bom Jesus do Norte',
                'estado_id' => '8',
            ),
            14 => 
            array (
                'id' => '15',
                'nome' => 'Brejetuba',
                'estado_id' => '8',
            ),
            15 => 
            array (
                'id' => '16',
                'nome' => 'Cachoeiro de Itapemirim',
                'estado_id' => '8',
            ),
            16 => 
            array (
                'id' => '17',
                'nome' => 'Cariacica',
                'estado_id' => '8',
            ),
            17 => 
            array (
                'id' => '18',
                'nome' => 'Castelo',
                'estado_id' => '8',
            ),
            18 => 
            array (
                'id' => '19',
                'nome' => 'Colatina',
                'estado_id' => '8',
            ),
            19 => 
            array (
                'id' => '20',
                'nome' => 'Conceição da Barra',
                'estado_id' => '8',
            ),
            20 => 
            array (
                'id' => '21',
                'nome' => 'Conceição do Castelo',
                'estado_id' => '8',
            ),
            21 => 
            array (
                'id' => '22',
                'nome' => 'Divino de São Lourenço',
                'estado_id' => '8',
            ),
            22 => 
            array (
                'id' => '23',
                'nome' => 'Domingos Martins',
                'estado_id' => '8',
            ),
            23 => 
            array (
                'id' => '24',
                'nome' => 'Dores do Rio Preto',
                'estado_id' => '8',
            ),
            24 => 
            array (
                'id' => '25',
                'nome' => 'Ecoporanga',
                'estado_id' => '8',
            ),
            25 => 
            array (
                'id' => '26',
                'nome' => 'Fundão',
                'estado_id' => '8',
            ),
            26 => 
            array (
                'id' => '27',
                'nome' => 'Governador Lindenberg',
                'estado_id' => '8',
            ),
            27 => 
            array (
                'id' => '28',
                'nome' => 'Guaçuí',
                'estado_id' => '8',
            ),
            28 => 
            array (
                'id' => '29',
                'nome' => 'Guarapari',
                'estado_id' => '8',
            ),
            29 => 
            array (
                'id' => '30',
                'nome' => 'Ibatiba',
                'estado_id' => '8',
            ),
            30 => 
            array (
                'id' => '31',
                'nome' => 'Ibiraçu',
                'estado_id' => '8',
            ),
            31 => 
            array (
                'id' => '32',
                'nome' => 'Ibitirama',
                'estado_id' => '8',
            ),
            32 => 
            array (
                'id' => '33',
                'nome' => 'Iconha',
                'estado_id' => '8',
            ),
            33 => 
            array (
                'id' => '34',
                'nome' => 'Irupi',
                'estado_id' => '8',
            ),
            34 => 
            array (
                'id' => '35',
                'nome' => 'Itaguaçu',
                'estado_id' => '8',
            ),
            35 => 
            array (
                'id' => '36',
                'nome' => 'Itapemirim',
                'estado_id' => '8',
            ),
            36 => 
            array (
                'id' => '37',
                'nome' => 'Itarana',
                'estado_id' => '8',
            ),
            37 => 
            array (
                'id' => '38',
                'nome' => 'Iúna',
                'estado_id' => '8',
            ),
            38 => 
            array (
                'id' => '39',
                'nome' => 'Jaguaré',
                'estado_id' => '8',
            ),
            39 => 
            array (
                'id' => '40',
                'nome' => 'Jerônimo Monteiro',
                'estado_id' => '8',
            ),
            40 => 
            array (
                'id' => '41',
                'nome' => 'João Neiva',
                'estado_id' => '8',
            ),
            41 => 
            array (
                'id' => '42',
                'nome' => 'Laranja da Terra',
                'estado_id' => '8',
            ),
            42 => 
            array (
                'id' => '43',
                'nome' => 'Linhares',
                'estado_id' => '8',
            ),
            43 => 
            array (
                'id' => '44',
                'nome' => 'Mantenópolis',
                'estado_id' => '8',
            ),
            44 => 
            array (
                'id' => '45',
                'nome' => 'Marataízes',
                'estado_id' => '8',
            ),
            45 => 
            array (
                'id' => '46',
                'nome' => 'Marechal Floriano',
                'estado_id' => '8',
            ),
            46 => 
            array (
                'id' => '47',
                'nome' => 'Marilândia',
                'estado_id' => '8',
            ),
            47 => 
            array (
                'id' => '48',
                'nome' => 'Mimoso do Sul',
                'estado_id' => '8',
            ),
            48 => 
            array (
                'id' => '49',
                'nome' => 'Montanha',
                'estado_id' => '8',
            ),
            49 => 
            array (
                'id' => '50',
                'nome' => 'Mucurici',
                'estado_id' => '8',
            ),
            50 => 
            array (
                'id' => '51',
                'nome' => 'Muniz Freire',
                'estado_id' => '8',
            ),
            51 => 
            array (
                'id' => '52',
                'nome' => 'Muqui',
                'estado_id' => '8',
            ),
            52 => 
            array (
                'id' => '53',
                'nome' => 'Nova Venécia',
                'estado_id' => '8',
            ),
            53 => 
            array (
                'id' => '54',
                'nome' => 'Pancas',
                'estado_id' => '8',
            ),
            54 => 
            array (
                'id' => '55',
                'nome' => 'Pedro Canário',
                'estado_id' => '8',
            ),
            55 => 
            array (
                'id' => '56',
                'nome' => 'Pinheiros',
                'estado_id' => '8',
            ),
            56 => 
            array (
                'id' => '57',
                'nome' => 'Piúma',
                'estado_id' => '8',
            ),
            57 => 
            array (
                'id' => '58',
                'nome' => 'Ponto Belo',
                'estado_id' => '8',
            ),
            58 => 
            array (
                'id' => '59',
                'nome' => 'Presidente Kennedy',
                'estado_id' => '8',
            ),
            59 => 
            array (
                'id' => '60',
                'nome' => 'Rio Bananal',
                'estado_id' => '8',
            ),
            60 => 
            array (
                'id' => '61',
                'nome' => 'Rio Novo do Sul',
                'estado_id' => '8',
            ),
            61 => 
            array (
                'id' => '62',
                'nome' => 'Santa Leopoldina',
                'estado_id' => '8',
            ),
            62 => 
            array (
                'id' => '63',
                'nome' => 'Santa Maria de Jetibá',
                'estado_id' => '8',
            ),
            63 => 
            array (
                'id' => '64',
                'nome' => 'Santa Teresa',
                'estado_id' => '8',
            ),
            64 => 
            array (
                'id' => '65',
                'nome' => 'São Domingos do Norte',
                'estado_id' => '8',
            ),
            65 => 
            array (
                'id' => '66',
                'nome' => 'São Gabriel da Palha',
                'estado_id' => '8',
            ),
            66 => 
            array (
                'id' => '67',
                'nome' => 'São José do Calçado',
                'estado_id' => '8',
            ),
            67 => 
            array (
                'id' => '68',
                'nome' => 'São Mateus',
                'estado_id' => '8',
            ),
            68 => 
            array (
                'id' => '69',
                'nome' => 'São Roque do Canaã',
                'estado_id' => '8',
            ),
            69 => 
            array (
                'id' => '70',
                'nome' => 'Serra',
                'estado_id' => '8',
            ),
            70 => 
            array (
                'id' => '71',
                'nome' => 'Sooretama',
                'estado_id' => '8',
            ),
            71 => 
            array (
                'id' => '72',
                'nome' => 'Vargem Alta',
                'estado_id' => '8',
            ),
            72 => 
            array (
                'id' => '73',
                'nome' => 'Venda Nova do Imigrante',
                'estado_id' => '8',
            ),
            73 => 
            array (
                'id' => '74',
                'nome' => 'Viana',
                'estado_id' => '8',
            ),
            74 => 
            array (
                'id' => '75',
                'nome' => 'Vila Pavão',
                'estado_id' => '8',
            ),
            75 => 
            array (
                'id' => '76',
                'nome' => 'Vila Valério',
                'estado_id' => '8',
            ),
            76 => 
            array (
                'id' => '77',
                'nome' => 'Vila Velha',
                'estado_id' => '8',
            ),
            77 => 
            array (
                'id' => '78',
                'nome' => 'Vitória',
                'estado_id' => '8',
            ),
            78 => 
            array (
                'id' => '79',
                'nome' => 'Acrelândia',
                'estado_id' => '1',
            ),
            79 => 
            array (
                'id' => '80',
                'nome' => 'Assis Brasil',
                'estado_id' => '1',
            ),
            80 => 
            array (
                'id' => '81',
                'nome' => 'Brasiléia',
                'estado_id' => '1',
            ),
            81 => 
            array (
                'id' => '82',
                'nome' => 'Bujari',
                'estado_id' => '1',
            ),
            82 => 
            array (
                'id' => '83',
                'nome' => 'Capixaba',
                'estado_id' => '1',
            ),
            83 => 
            array (
                'id' => '84',
                'nome' => 'Cruzeiro do Sul',
                'estado_id' => '1',
            ),
            84 => 
            array (
                'id' => '85',
                'nome' => 'Epitaciolândia',
                'estado_id' => '1',
            ),
            85 => 
            array (
                'id' => '86',
                'nome' => 'Feijó',
                'estado_id' => '1',
            ),
            86 => 
            array (
                'id' => '87',
                'nome' => 'Jordão',
                'estado_id' => '1',
            ),
            87 => 
            array (
                'id' => '88',
                'nome' => 'Mâncio Lima',
                'estado_id' => '1',
            ),
            88 => 
            array (
                'id' => '89',
                'nome' => 'Manoel Urbano',
                'estado_id' => '1',
            ),
            89 => 
            array (
                'id' => '90',
                'nome' => 'Marechal Thaumaturgo',
                'estado_id' => '1',
            ),
            90 => 
            array (
                'id' => '91',
                'nome' => 'Plácido de Castro',
                'estado_id' => '1',
            ),
            91 => 
            array (
                'id' => '92',
                'nome' => 'Porto Acre',
                'estado_id' => '1',
            ),
            92 => 
            array (
                'id' => '93',
                'nome' => 'Porto Walter',
                'estado_id' => '1',
            ),
            93 => 
            array (
                'id' => '94',
                'nome' => 'Rio Branco',
                'estado_id' => '1',
            ),
            94 => 
            array (
                'id' => '95',
                'nome' => 'Rodrigues Alves',
                'estado_id' => '1',
            ),
            95 => 
            array (
                'id' => '96',
                'nome' => 'Santa Rosa do Purus',
                'estado_id' => '1',
            ),
            96 => 
            array (
                'id' => '97',
                'nome' => 'Sena Madureira',
                'estado_id' => '1',
            ),
            97 => 
            array (
                'id' => '98',
                'nome' => 'Senador Guiomard',
                'estado_id' => '1',
            ),
            98 => 
            array (
                'id' => '99',
                'nome' => 'Tarauacá',
                'estado_id' => '1',
            ),
            99 => 
            array (
                'id' => '100',
                'nome' => 'Xapuri',
                'estado_id' => '1',
            ),
            100 => 
            array (
                'id' => '101',
                'nome' => 'Água Branca',
                'estado_id' => '2',
            ),
            101 => 
            array (
                'id' => '102',
                'nome' => 'Anadia',
                'estado_id' => '2',
            ),
            102 => 
            array (
                'id' => '103',
                'nome' => 'Arapiraca',
                'estado_id' => '2',
            ),
            103 => 
            array (
                'id' => '104',
                'nome' => 'Atalaia',
                'estado_id' => '2',
            ),
            104 => 
            array (
                'id' => '105',
                'nome' => 'Barra de Santo Antônio',
                'estado_id' => '2',
            ),
            105 => 
            array (
                'id' => '106',
                'nome' => 'Barra de São Miguel',
                'estado_id' => '2',
            ),
            106 => 
            array (
                'id' => '107',
                'nome' => 'Batalha',
                'estado_id' => '2',
            ),
            107 => 
            array (
                'id' => '108',
                'nome' => 'Belém',
                'estado_id' => '2',
            ),
            108 => 
            array (
                'id' => '109',
                'nome' => 'Belo Monte',
                'estado_id' => '2',
            ),
            109 => 
            array (
                'id' => '110',
                'nome' => 'Boca da Mata',
                'estado_id' => '2',
            ),
            110 => 
            array (
                'id' => '111',
                'nome' => 'Branquinha',
                'estado_id' => '2',
            ),
            111 => 
            array (
                'id' => '112',
                'nome' => 'Cacimbinhas',
                'estado_id' => '2',
            ),
            112 => 
            array (
                'id' => '113',
                'nome' => 'Cajueiro',
                'estado_id' => '2',
            ),
            113 => 
            array (
                'id' => '114',
                'nome' => 'Campestre',
                'estado_id' => '2',
            ),
            114 => 
            array (
                'id' => '115',
                'nome' => 'Campo Alegre',
                'estado_id' => '2',
            ),
            115 => 
            array (
                'id' => '116',
                'nome' => 'Campo Grande',
                'estado_id' => '2',
            ),
            116 => 
            array (
                'id' => '117',
                'nome' => 'Canapi',
                'estado_id' => '2',
            ),
            117 => 
            array (
                'id' => '118',
                'nome' => 'Capela',
                'estado_id' => '2',
            ),
            118 => 
            array (
                'id' => '119',
                'nome' => 'Carneiros',
                'estado_id' => '2',
            ),
            119 => 
            array (
                'id' => '120',
                'nome' => 'Chã Preta',
                'estado_id' => '2',
            ),
            120 => 
            array (
                'id' => '121',
                'nome' => 'Coité do Nóia',
                'estado_id' => '2',
            ),
            121 => 
            array (
                'id' => '122',
                'nome' => 'Colônia Leopoldina',
                'estado_id' => '2',
            ),
            122 => 
            array (
                'id' => '123',
                'nome' => 'Coqueiro Seco',
                'estado_id' => '2',
            ),
            123 => 
            array (
                'id' => '124',
                'nome' => 'Coruripe',
                'estado_id' => '2',
            ),
            124 => 
            array (
                'id' => '125',
                'nome' => 'Craíbas',
                'estado_id' => '2',
            ),
            125 => 
            array (
                'id' => '126',
                'nome' => 'Delmiro Gouveia',
                'estado_id' => '2',
            ),
            126 => 
            array (
                'id' => '127',
                'nome' => 'Dois Riachos',
                'estado_id' => '2',
            ),
            127 => 
            array (
                'id' => '128',
                'nome' => 'Estrela de Alagoas',
                'estado_id' => '2',
            ),
            128 => 
            array (
                'id' => '129',
                'nome' => 'Feira Grande',
                'estado_id' => '2',
            ),
            129 => 
            array (
                'id' => '130',
                'nome' => 'Feliz Deserto',
                'estado_id' => '2',
            ),
            130 => 
            array (
                'id' => '131',
                'nome' => 'Flexeiras',
                'estado_id' => '2',
            ),
            131 => 
            array (
                'id' => '132',
                'nome' => 'Girau do Ponciano',
                'estado_id' => '2',
            ),
            132 => 
            array (
                'id' => '133',
                'nome' => 'Ibateguara',
                'estado_id' => '2',
            ),
            133 => 
            array (
                'id' => '134',
                'nome' => 'Igaci',
                'estado_id' => '2',
            ),
            134 => 
            array (
                'id' => '135',
                'nome' => 'Igreja Nova',
                'estado_id' => '2',
            ),
            135 => 
            array (
                'id' => '136',
                'nome' => 'Inhapi',
                'estado_id' => '2',
            ),
            136 => 
            array (
                'id' => '137',
                'nome' => 'Jacaré dos Homens',
                'estado_id' => '2',
            ),
            137 => 
            array (
                'id' => '138',
                'nome' => 'Jacuípe',
                'estado_id' => '2',
            ),
            138 => 
            array (
                'id' => '139',
                'nome' => 'Japaratinga',
                'estado_id' => '2',
            ),
            139 => 
            array (
                'id' => '140',
                'nome' => 'Jaramataia',
                'estado_id' => '2',
            ),
            140 => 
            array (
                'id' => '141',
                'nome' => 'Jequiá da Praia',
                'estado_id' => '2',
            ),
            141 => 
            array (
                'id' => '142',
                'nome' => 'Joaquim Gomes',
                'estado_id' => '2',
            ),
            142 => 
            array (
                'id' => '143',
                'nome' => 'Jundiá',
                'estado_id' => '2',
            ),
            143 => 
            array (
                'id' => '144',
                'nome' => 'Junqueiro',
                'estado_id' => '2',
            ),
            144 => 
            array (
                'id' => '145',
                'nome' => 'Lagoa da Canoa',
                'estado_id' => '2',
            ),
            145 => 
            array (
                'id' => '146',
                'nome' => 'Limoeiro de Anadia',
                'estado_id' => '2',
            ),
            146 => 
            array (
                'id' => '147',
                'nome' => 'Maceió',
                'estado_id' => '2',
            ),
            147 => 
            array (
                'id' => '148',
                'nome' => 'Major Isidoro',
                'estado_id' => '2',
            ),
            148 => 
            array (
                'id' => '149',
                'nome' => 'Mar Vermelho',
                'estado_id' => '2',
            ),
            149 => 
            array (
                'id' => '150',
                'nome' => 'Maragogi',
                'estado_id' => '2',
            ),
            150 => 
            array (
                'id' => '151',
                'nome' => 'Maravilha',
                'estado_id' => '2',
            ),
            151 => 
            array (
                'id' => '152',
                'nome' => 'Marechal Deodoro',
                'estado_id' => '2',
            ),
            152 => 
            array (
                'id' => '153',
                'nome' => 'Maribondo',
                'estado_id' => '2',
            ),
            153 => 
            array (
                'id' => '154',
                'nome' => 'Mata Grande',
                'estado_id' => '2',
            ),
            154 => 
            array (
                'id' => '155',
                'nome' => 'Matriz de Camaragibe',
                'estado_id' => '2',
            ),
            155 => 
            array (
                'id' => '156',
                'nome' => 'Messias',
                'estado_id' => '2',
            ),
            156 => 
            array (
                'id' => '157',
                'nome' => 'Minador do Negrão',
                'estado_id' => '2',
            ),
            157 => 
            array (
                'id' => '158',
                'nome' => 'Monteirópolis',
                'estado_id' => '2',
            ),
            158 => 
            array (
                'id' => '159',
                'nome' => 'Murici',
                'estado_id' => '2',
            ),
            159 => 
            array (
                'id' => '160',
                'nome' => 'Novo Lino',
                'estado_id' => '2',
            ),
            160 => 
            array (
                'id' => '161',
                'nome' => 'Olho d`Água das Flores',
                'estado_id' => '2',
            ),
            161 => 
            array (
                'id' => '162',
                'nome' => 'Olho d`Água do Casado',
                'estado_id' => '2',
            ),
            162 => 
            array (
                'id' => '163',
                'nome' => 'Olho d`Água Grande',
                'estado_id' => '2',
            ),
            163 => 
            array (
                'id' => '164',
                'nome' => 'Olivença',
                'estado_id' => '2',
            ),
            164 => 
            array (
                'id' => '165',
                'nome' => 'Ouro Branco',
                'estado_id' => '2',
            ),
            165 => 
            array (
                'id' => '166',
                'nome' => 'Palestina',
                'estado_id' => '2',
            ),
            166 => 
            array (
                'id' => '167',
                'nome' => 'Palmeira dos Índios',
                'estado_id' => '2',
            ),
            167 => 
            array (
                'id' => '168',
                'nome' => 'Pão de Açúcar',
                'estado_id' => '2',
            ),
            168 => 
            array (
                'id' => '169',
                'nome' => 'Pariconha',
                'estado_id' => '2',
            ),
            169 => 
            array (
                'id' => '170',
                'nome' => 'Paripueira',
                'estado_id' => '2',
            ),
            170 => 
            array (
                'id' => '171',
                'nome' => 'Passo de Camaragibe',
                'estado_id' => '2',
            ),
            171 => 
            array (
                'id' => '172',
                'nome' => 'Paulo Jacinto',
                'estado_id' => '2',
            ),
            172 => 
            array (
                'id' => '173',
                'nome' => 'Penedo',
                'estado_id' => '2',
            ),
            173 => 
            array (
                'id' => '174',
                'nome' => 'Piaçabuçu',
                'estado_id' => '2',
            ),
            174 => 
            array (
                'id' => '175',
                'nome' => 'Pilar',
                'estado_id' => '2',
            ),
            175 => 
            array (
                'id' => '176',
                'nome' => 'Pindoba',
                'estado_id' => '2',
            ),
            176 => 
            array (
                'id' => '177',
                'nome' => 'Piranhas',
                'estado_id' => '2',
            ),
            177 => 
            array (
                'id' => '178',
                'nome' => 'Poço das Trincheiras',
                'estado_id' => '2',
            ),
            178 => 
            array (
                'id' => '179',
                'nome' => 'Porto Calvo',
                'estado_id' => '2',
            ),
            179 => 
            array (
                'id' => '180',
                'nome' => 'Porto de Pedras',
                'estado_id' => '2',
            ),
            180 => 
            array (
                'id' => '181',
                'nome' => 'Porto Real do Colégio',
                'estado_id' => '2',
            ),
            181 => 
            array (
                'id' => '182',
                'nome' => 'Quebrangulo',
                'estado_id' => '2',
            ),
            182 => 
            array (
                'id' => '183',
                'nome' => 'Rio Largo',
                'estado_id' => '2',
            ),
            183 => 
            array (
                'id' => '184',
                'nome' => 'Roteiro',
                'estado_id' => '2',
            ),
            184 => 
            array (
                'id' => '185',
                'nome' => 'Santa Luzia do Norte',
                'estado_id' => '2',
            ),
            185 => 
            array (
                'id' => '186',
                'nome' => 'Santana do Ipanema',
                'estado_id' => '2',
            ),
            186 => 
            array (
                'id' => '187',
                'nome' => 'Santana do Mundaú',
                'estado_id' => '2',
            ),
            187 => 
            array (
                'id' => '188',
                'nome' => 'São Brás',
                'estado_id' => '2',
            ),
            188 => 
            array (
                'id' => '189',
                'nome' => 'São José da Laje',
                'estado_id' => '2',
            ),
            189 => 
            array (
                'id' => '190',
                'nome' => 'São José da Tapera',
                'estado_id' => '2',
            ),
            190 => 
            array (
                'id' => '191',
                'nome' => 'São Luís do Quitunde',
                'estado_id' => '2',
            ),
            191 => 
            array (
                'id' => '192',
                'nome' => 'São Miguel dos Campos',
                'estado_id' => '2',
            ),
            192 => 
            array (
                'id' => '193',
                'nome' => 'São Miguel dos Milagres',
                'estado_id' => '2',
            ),
            193 => 
            array (
                'id' => '194',
                'nome' => 'São Sebastião',
                'estado_id' => '2',
            ),
            194 => 
            array (
                'id' => '195',
                'nome' => 'Satuba',
                'estado_id' => '2',
            ),
            195 => 
            array (
                'id' => '196',
                'nome' => 'Senador Rui Palmeira',
                'estado_id' => '2',
            ),
            196 => 
            array (
                'id' => '197',
                'nome' => 'Tanque d`Arca',
                'estado_id' => '2',
            ),
            197 => 
            array (
                'id' => '198',
                'nome' => 'Taquarana',
                'estado_id' => '2',
            ),
            198 => 
            array (
                'id' => '199',
                'nome' => 'Teotônio Vilela',
                'estado_id' => '2',
            ),
            199 => 
            array (
                'id' => '200',
                'nome' => 'Traipu',
                'estado_id' => '2',
            ),
            200 => 
            array (
                'id' => '201',
                'nome' => 'União dos Palmares',
                'estado_id' => '2',
            ),
            201 => 
            array (
                'id' => '202',
                'nome' => 'Viçosa',
                'estado_id' => '2',
            ),
            202 => 
            array (
                'id' => '203',
                'nome' => 'Amapá',
                'estado_id' => '4',
            ),
            203 => 
            array (
                'id' => '204',
                'nome' => 'Calçoene',
                'estado_id' => '4',
            ),
            204 => 
            array (
                'id' => '205',
                'nome' => 'Cutias',
                'estado_id' => '4',
            ),
            205 => 
            array (
                'id' => '206',
                'nome' => 'Ferreira Gomes',
                'estado_id' => '4',
            ),
            206 => 
            array (
                'id' => '207',
                'nome' => 'Itaubal',
                'estado_id' => '4',
            ),
            207 => 
            array (
                'id' => '208',
                'nome' => 'Laranjal do Jari',
                'estado_id' => '4',
            ),
            208 => 
            array (
                'id' => '209',
                'nome' => 'Macapá',
                'estado_id' => '4',
            ),
            209 => 
            array (
                'id' => '210',
                'nome' => 'Mazagão',
                'estado_id' => '4',
            ),
            210 => 
            array (
                'id' => '211',
                'nome' => 'Oiapoque',
                'estado_id' => '4',
            ),
            211 => 
            array (
                'id' => '212',
                'nome' => 'Pedra Branca do Amaparí',
                'estado_id' => '4',
            ),
            212 => 
            array (
                'id' => '213',
                'nome' => 'Porto Grande',
                'estado_id' => '4',
            ),
            213 => 
            array (
                'id' => '214',
                'nome' => 'Pracuúba',
                'estado_id' => '4',
            ),
            214 => 
            array (
                'id' => '215',
                'nome' => 'Santana',
                'estado_id' => '4',
            ),
            215 => 
            array (
                'id' => '216',
                'nome' => 'Serra do Navio',
                'estado_id' => '4',
            ),
            216 => 
            array (
                'id' => '217',
                'nome' => 'Tartarugalzinho',
                'estado_id' => '4',
            ),
            217 => 
            array (
                'id' => '218',
                'nome' => 'Vitória do Jari',
                'estado_id' => '4',
            ),
            218 => 
            array (
                'id' => '219',
                'nome' => 'Alvarães',
                'estado_id' => '3',
            ),
            219 => 
            array (
                'id' => '220',
                'nome' => 'Amaturá',
                'estado_id' => '3',
            ),
            220 => 
            array (
                'id' => '221',
                'nome' => 'Anamã',
                'estado_id' => '3',
            ),
            221 => 
            array (
                'id' => '222',
                'nome' => 'Anori',
                'estado_id' => '3',
            ),
            222 => 
            array (
                'id' => '223',
                'nome' => 'Apuí',
                'estado_id' => '3',
            ),
            223 => 
            array (
                'id' => '224',
                'nome' => 'Atalaia do Norte',
                'estado_id' => '3',
            ),
            224 => 
            array (
                'id' => '225',
                'nome' => 'Autazes',
                'estado_id' => '3',
            ),
            225 => 
            array (
                'id' => '226',
                'nome' => 'Barcelos',
                'estado_id' => '3',
            ),
            226 => 
            array (
                'id' => '227',
                'nome' => 'Barreirinha',
                'estado_id' => '3',
            ),
            227 => 
            array (
                'id' => '228',
                'nome' => 'Benjamin Constant',
                'estado_id' => '3',
            ),
            228 => 
            array (
                'id' => '229',
                'nome' => 'Beruri',
                'estado_id' => '3',
            ),
            229 => 
            array (
                'id' => '230',
                'nome' => 'Boa Vista do Ramos',
                'estado_id' => '3',
            ),
            230 => 
            array (
                'id' => '231',
                'nome' => 'Boca do Acre',
                'estado_id' => '3',
            ),
            231 => 
            array (
                'id' => '232',
                'nome' => 'Borba',
                'estado_id' => '3',
            ),
            232 => 
            array (
                'id' => '233',
                'nome' => 'Caapiranga',
                'estado_id' => '3',
            ),
            233 => 
            array (
                'id' => '234',
                'nome' => 'Canutama',
                'estado_id' => '3',
            ),
            234 => 
            array (
                'id' => '235',
                'nome' => 'Carauari',
                'estado_id' => '3',
            ),
            235 => 
            array (
                'id' => '236',
                'nome' => 'Careiro',
                'estado_id' => '3',
            ),
            236 => 
            array (
                'id' => '237',
                'nome' => 'Careiro da Várzea',
                'estado_id' => '3',
            ),
            237 => 
            array (
                'id' => '238',
                'nome' => 'Coari',
                'estado_id' => '3',
            ),
            238 => 
            array (
                'id' => '239',
                'nome' => 'Codajás',
                'estado_id' => '3',
            ),
            239 => 
            array (
                'id' => '240',
                'nome' => 'Eirunepé',
                'estado_id' => '3',
            ),
            240 => 
            array (
                'id' => '241',
                'nome' => 'Envira',
                'estado_id' => '3',
            ),
            241 => 
            array (
                'id' => '242',
                'nome' => 'Fonte Boa',
                'estado_id' => '3',
            ),
            242 => 
            array (
                'id' => '243',
                'nome' => 'Guajará',
                'estado_id' => '3',
            ),
            243 => 
            array (
                'id' => '244',
                'nome' => 'Humaitá',
                'estado_id' => '3',
            ),
            244 => 
            array (
                'id' => '245',
                'nome' => 'Ipixuna',
                'estado_id' => '3',
            ),
            245 => 
            array (
                'id' => '246',
                'nome' => 'Iranduba',
                'estado_id' => '3',
            ),
            246 => 
            array (
                'id' => '247',
                'nome' => 'Itacoatiara',
                'estado_id' => '3',
            ),
            247 => 
            array (
                'id' => '248',
                'nome' => 'Itamarati',
                'estado_id' => '3',
            ),
            248 => 
            array (
                'id' => '249',
                'nome' => 'Itapiranga',
                'estado_id' => '3',
            ),
            249 => 
            array (
                'id' => '250',
                'nome' => 'Japurá',
                'estado_id' => '3',
            ),
            250 => 
            array (
                'id' => '251',
                'nome' => 'Juruá',
                'estado_id' => '3',
            ),
            251 => 
            array (
                'id' => '252',
                'nome' => 'Jutaí',
                'estado_id' => '3',
            ),
            252 => 
            array (
                'id' => '253',
                'nome' => 'Lábrea',
                'estado_id' => '3',
            ),
            253 => 
            array (
                'id' => '254',
                'nome' => 'Manacapuru',
                'estado_id' => '3',
            ),
            254 => 
            array (
                'id' => '255',
                'nome' => 'Manaquiri',
                'estado_id' => '3',
            ),
            255 => 
            array (
                'id' => '256',
                'nome' => 'Manaus',
                'estado_id' => '3',
            ),
            256 => 
            array (
                'id' => '257',
                'nome' => 'Manicoré',
                'estado_id' => '3',
            ),
            257 => 
            array (
                'id' => '258',
                'nome' => 'Maraã',
                'estado_id' => '3',
            ),
            258 => 
            array (
                'id' => '259',
                'nome' => 'Maués',
                'estado_id' => '3',
            ),
            259 => 
            array (
                'id' => '260',
                'nome' => 'Nhamundá',
                'estado_id' => '3',
            ),
            260 => 
            array (
                'id' => '261',
                'nome' => 'Nova Olinda do Norte',
                'estado_id' => '3',
            ),
            261 => 
            array (
                'id' => '262',
                'nome' => 'Novo Airão',
                'estado_id' => '3',
            ),
            262 => 
            array (
                'id' => '263',
                'nome' => 'Novo Aripuanã',
                'estado_id' => '3',
            ),
            263 => 
            array (
                'id' => '264',
                'nome' => 'Parintins',
                'estado_id' => '3',
            ),
            264 => 
            array (
                'id' => '265',
                'nome' => 'Pauini',
                'estado_id' => '3',
            ),
            265 => 
            array (
                'id' => '266',
                'nome' => 'Presidente Figueiredo',
                'estado_id' => '3',
            ),
            266 => 
            array (
                'id' => '267',
                'nome' => 'Rio Preto da Eva',
                'estado_id' => '3',
            ),
            267 => 
            array (
                'id' => '268',
                'nome' => 'Santa Isabel do Rio Negro',
                'estado_id' => '3',
            ),
            268 => 
            array (
                'id' => '269',
                'nome' => 'Santo Antônio do Içá',
                'estado_id' => '3',
            ),
            269 => 
            array (
                'id' => '270',
                'nome' => 'São Gabriel da Cachoeira',
                'estado_id' => '3',
            ),
            270 => 
            array (
                'id' => '271',
                'nome' => 'São Paulo de Olivença',
                'estado_id' => '3',
            ),
            271 => 
            array (
                'id' => '272',
                'nome' => 'São Sebastião do Uatumã',
                'estado_id' => '3',
            ),
            272 => 
            array (
                'id' => '273',
                'nome' => 'Silves',
                'estado_id' => '3',
            ),
            273 => 
            array (
                'id' => '274',
                'nome' => 'Tabatinga',
                'estado_id' => '3',
            ),
            274 => 
            array (
                'id' => '275',
                'nome' => 'Tapauá',
                'estado_id' => '3',
            ),
            275 => 
            array (
                'id' => '276',
                'nome' => 'Tefé',
                'estado_id' => '3',
            ),
            276 => 
            array (
                'id' => '277',
                'nome' => 'Tonantins',
                'estado_id' => '3',
            ),
            277 => 
            array (
                'id' => '278',
                'nome' => 'Uarini',
                'estado_id' => '3',
            ),
            278 => 
            array (
                'id' => '279',
                'nome' => 'Urucará',
                'estado_id' => '3',
            ),
            279 => 
            array (
                'id' => '280',
                'nome' => 'Urucurituba',
                'estado_id' => '3',
            ),
            280 => 
            array (
                'id' => '281',
                'nome' => 'Abaíra',
                'estado_id' => '5',
            ),
            281 => 
            array (
                'id' => '282',
                'nome' => 'Abaré',
                'estado_id' => '5',
            ),
            282 => 
            array (
                'id' => '283',
                'nome' => 'Acajutiba',
                'estado_id' => '5',
            ),
            283 => 
            array (
                'id' => '284',
                'nome' => 'Adustina',
                'estado_id' => '5',
            ),
            284 => 
            array (
                'id' => '285',
                'nome' => 'Água Fria',
                'estado_id' => '5',
            ),
            285 => 
            array (
                'id' => '286',
                'nome' => 'Aiquara',
                'estado_id' => '5',
            ),
            286 => 
            array (
                'id' => '287',
                'nome' => 'Alagoinhas',
                'estado_id' => '5',
            ),
            287 => 
            array (
                'id' => '288',
                'nome' => 'Alcobaça',
                'estado_id' => '5',
            ),
            288 => 
            array (
                'id' => '289',
                'nome' => 'Almadina',
                'estado_id' => '5',
            ),
            289 => 
            array (
                'id' => '290',
                'nome' => 'Amargosa',
                'estado_id' => '5',
            ),
            290 => 
            array (
                'id' => '291',
                'nome' => 'Amélia Rodrigues',
                'estado_id' => '5',
            ),
            291 => 
            array (
                'id' => '292',
                'nome' => 'América Dourada',
                'estado_id' => '5',
            ),
            292 => 
            array (
                'id' => '293',
                'nome' => 'Anagé',
                'estado_id' => '5',
            ),
            293 => 
            array (
                'id' => '294',
                'nome' => 'Andaraí',
                'estado_id' => '5',
            ),
            294 => 
            array (
                'id' => '295',
                'nome' => 'Andorinha',
                'estado_id' => '5',
            ),
            295 => 
            array (
                'id' => '296',
                'nome' => 'Angical',
                'estado_id' => '5',
            ),
            296 => 
            array (
                'id' => '297',
                'nome' => 'Anguera',
                'estado_id' => '5',
            ),
            297 => 
            array (
                'id' => '298',
                'nome' => 'Antas',
                'estado_id' => '5',
            ),
            298 => 
            array (
                'id' => '299',
                'nome' => 'Antônio Cardoso',
                'estado_id' => '5',
            ),
            299 => 
            array (
                'id' => '300',
                'nome' => 'Antônio Gonçalves',
                'estado_id' => '5',
            ),
            300 => 
            array (
                'id' => '301',
                'nome' => 'Aporá',
                'estado_id' => '5',
            ),
            301 => 
            array (
                'id' => '302',
                'nome' => 'Apuarema',
                'estado_id' => '5',
            ),
            302 => 
            array (
                'id' => '303',
                'nome' => 'Araças',
                'estado_id' => '5',
            ),
            303 => 
            array (
                'id' => '304',
                'nome' => 'Aracatu',
                'estado_id' => '5',
            ),
            304 => 
            array (
                'id' => '305',
                'nome' => 'Araci',
                'estado_id' => '5',
            ),
            305 => 
            array (
                'id' => '306',
                'nome' => 'Aramari',
                'estado_id' => '5',
            ),
            306 => 
            array (
                'id' => '307',
                'nome' => 'Arataca',
                'estado_id' => '5',
            ),
            307 => 
            array (
                'id' => '308',
                'nome' => 'Aratuípe',
                'estado_id' => '5',
            ),
            308 => 
            array (
                'id' => '309',
                'nome' => 'Aurelino Leal',
                'estado_id' => '5',
            ),
            309 => 
            array (
                'id' => '310',
                'nome' => 'Baianópolis',
                'estado_id' => '5',
            ),
            310 => 
            array (
                'id' => '311',
                'nome' => 'Baixa Grande',
                'estado_id' => '5',
            ),
            311 => 
            array (
                'id' => '312',
                'nome' => 'Banzaê',
                'estado_id' => '5',
            ),
            312 => 
            array (
                'id' => '313',
                'nome' => 'Barra',
                'estado_id' => '5',
            ),
            313 => 
            array (
                'id' => '314',
                'nome' => 'Barra da Estiva',
                'estado_id' => '5',
            ),
            314 => 
            array (
                'id' => '315',
                'nome' => 'Barra do Choça',
                'estado_id' => '5',
            ),
            315 => 
            array (
                'id' => '316',
                'nome' => 'Barra do Mendes',
                'estado_id' => '5',
            ),
            316 => 
            array (
                'id' => '317',
                'nome' => 'Barra do Rocha',
                'estado_id' => '5',
            ),
            317 => 
            array (
                'id' => '318',
                'nome' => 'Barreiras',
                'estado_id' => '5',
            ),
            318 => 
            array (
                'id' => '319',
                'nome' => 'Barro Alto',
                'estado_id' => '5',
            ),
            319 => 
            array (
                'id' => '320',
            'nome' => 'Barro Preto (antigo Gov. Lomanto Jr.)',
                'estado_id' => '5',
            ),
            320 => 
            array (
                'id' => '321',
                'nome' => 'Barrocas',
                'estado_id' => '5',
            ),
            321 => 
            array (
                'id' => '322',
                'nome' => 'Belmonte',
                'estado_id' => '5',
            ),
            322 => 
            array (
                'id' => '323',
                'nome' => 'Belo Campo',
                'estado_id' => '5',
            ),
            323 => 
            array (
                'id' => '324',
                'nome' => 'Biritinga',
                'estado_id' => '5',
            ),
            324 => 
            array (
                'id' => '325',
                'nome' => 'Boa Nova',
                'estado_id' => '5',
            ),
            325 => 
            array (
                'id' => '326',
                'nome' => 'Boa Vista do Tupim',
                'estado_id' => '5',
            ),
            326 => 
            array (
                'id' => '327',
                'nome' => 'Bom Jesus da Lapa',
                'estado_id' => '5',
            ),
            327 => 
            array (
                'id' => '328',
                'nome' => 'Bom Jesus da Serra',
                'estado_id' => '5',
            ),
            328 => 
            array (
                'id' => '329',
                'nome' => 'Boninal',
                'estado_id' => '5',
            ),
            329 => 
            array (
                'id' => '330',
                'nome' => 'Bonito',
                'estado_id' => '5',
            ),
            330 => 
            array (
                'id' => '331',
                'nome' => 'Boquira',
                'estado_id' => '5',
            ),
            331 => 
            array (
                'id' => '332',
                'nome' => 'Botuporã',
                'estado_id' => '5',
            ),
            332 => 
            array (
                'id' => '333',
                'nome' => 'Brejões',
                'estado_id' => '5',
            ),
            333 => 
            array (
                'id' => '334',
                'nome' => 'Brejolândia',
                'estado_id' => '5',
            ),
            334 => 
            array (
                'id' => '335',
                'nome' => 'Brotas de Macaúbas',
                'estado_id' => '5',
            ),
            335 => 
            array (
                'id' => '336',
                'nome' => 'Brumado',
                'estado_id' => '5',
            ),
            336 => 
            array (
                'id' => '337',
                'nome' => 'Buerarema',
                'estado_id' => '5',
            ),
            337 => 
            array (
                'id' => '338',
                'nome' => 'Buritirama',
                'estado_id' => '5',
            ),
            338 => 
            array (
                'id' => '339',
                'nome' => 'Caatiba',
                'estado_id' => '5',
            ),
            339 => 
            array (
                'id' => '340',
                'nome' => 'Cabaceiras do Paraguaçu',
                'estado_id' => '5',
            ),
            340 => 
            array (
                'id' => '341',
                'nome' => 'Cachoeira',
                'estado_id' => '5',
            ),
            341 => 
            array (
                'id' => '342',
                'nome' => 'Caculé',
                'estado_id' => '5',
            ),
            342 => 
            array (
                'id' => '343',
                'nome' => 'Caém',
                'estado_id' => '5',
            ),
            343 => 
            array (
                'id' => '344',
                'nome' => 'Caetanos',
                'estado_id' => '5',
            ),
            344 => 
            array (
                'id' => '345',
                'nome' => 'Caetité',
                'estado_id' => '5',
            ),
            345 => 
            array (
                'id' => '346',
                'nome' => 'Cafarnaum',
                'estado_id' => '5',
            ),
            346 => 
            array (
                'id' => '347',
                'nome' => 'Cairu',
                'estado_id' => '5',
            ),
            347 => 
            array (
                'id' => '348',
                'nome' => 'Caldeirão Grande',
                'estado_id' => '5',
            ),
            348 => 
            array (
                'id' => '349',
                'nome' => 'Camacan',
                'estado_id' => '5',
            ),
            349 => 
            array (
                'id' => '350',
                'nome' => 'Camaçari',
                'estado_id' => '5',
            ),
            350 => 
            array (
                'id' => '351',
                'nome' => 'Camamu',
                'estado_id' => '5',
            ),
            351 => 
            array (
                'id' => '352',
                'nome' => 'Campo Alegre de Lourdes',
                'estado_id' => '5',
            ),
            352 => 
            array (
                'id' => '353',
                'nome' => 'Campo Formoso',
                'estado_id' => '5',
            ),
            353 => 
            array (
                'id' => '354',
                'nome' => 'Canápolis',
                'estado_id' => '5',
            ),
            354 => 
            array (
                'id' => '355',
                'nome' => 'Canarana',
                'estado_id' => '5',
            ),
            355 => 
            array (
                'id' => '356',
                'nome' => 'Canavieiras',
                'estado_id' => '5',
            ),
            356 => 
            array (
                'id' => '357',
                'nome' => 'Candeal',
                'estado_id' => '5',
            ),
            357 => 
            array (
                'id' => '358',
                'nome' => 'Candeias',
                'estado_id' => '5',
            ),
            358 => 
            array (
                'id' => '359',
                'nome' => 'Candiba',
                'estado_id' => '5',
            ),
            359 => 
            array (
                'id' => '360',
                'nome' => 'Cândido Sales',
                'estado_id' => '5',
            ),
            360 => 
            array (
                'id' => '361',
                'nome' => 'Cansanção',
                'estado_id' => '5',
            ),
            361 => 
            array (
                'id' => '362',
                'nome' => 'Canudos',
                'estado_id' => '5',
            ),
            362 => 
            array (
                'id' => '363',
                'nome' => 'Capela do Alto Alegre',
                'estado_id' => '5',
            ),
            363 => 
            array (
                'id' => '364',
                'nome' => 'Capim Grosso',
                'estado_id' => '5',
            ),
            364 => 
            array (
                'id' => '365',
                'nome' => 'Caraíbas',
                'estado_id' => '5',
            ),
            365 => 
            array (
                'id' => '366',
                'nome' => 'Caravelas',
                'estado_id' => '5',
            ),
            366 => 
            array (
                'id' => '367',
                'nome' => 'Cardeal da Silva',
                'estado_id' => '5',
            ),
            367 => 
            array (
                'id' => '368',
                'nome' => 'Carinhanha',
                'estado_id' => '5',
            ),
            368 => 
            array (
                'id' => '369',
                'nome' => 'Casa Nova',
                'estado_id' => '5',
            ),
            369 => 
            array (
                'id' => '370',
                'nome' => 'Castro Alves',
                'estado_id' => '5',
            ),
            370 => 
            array (
                'id' => '371',
                'nome' => 'Catolândia',
                'estado_id' => '5',
            ),
            371 => 
            array (
                'id' => '372',
                'nome' => 'Catu',
                'estado_id' => '5',
            ),
            372 => 
            array (
                'id' => '373',
                'nome' => 'Caturama',
                'estado_id' => '5',
            ),
            373 => 
            array (
                'id' => '374',
                'nome' => 'Central',
                'estado_id' => '5',
            ),
            374 => 
            array (
                'id' => '375',
                'nome' => 'Chorrochó',
                'estado_id' => '5',
            ),
            375 => 
            array (
                'id' => '376',
                'nome' => 'Cícero Dantas',
                'estado_id' => '5',
            ),
            376 => 
            array (
                'id' => '377',
                'nome' => 'Cipó',
                'estado_id' => '5',
            ),
            377 => 
            array (
                'id' => '378',
                'nome' => 'Coaraci',
                'estado_id' => '5',
            ),
            378 => 
            array (
                'id' => '379',
                'nome' => 'Cocos',
                'estado_id' => '5',
            ),
            379 => 
            array (
                'id' => '380',
                'nome' => 'Conceição da Feira',
                'estado_id' => '5',
            ),
            380 => 
            array (
                'id' => '381',
                'nome' => 'Conceição do Almeida',
                'estado_id' => '5',
            ),
            381 => 
            array (
                'id' => '382',
                'nome' => 'Conceição do Coité',
                'estado_id' => '5',
            ),
            382 => 
            array (
                'id' => '383',
                'nome' => 'Conceição do Jacuípe',
                'estado_id' => '5',
            ),
            383 => 
            array (
                'id' => '384',
                'nome' => 'Conde',
                'estado_id' => '5',
            ),
            384 => 
            array (
                'id' => '385',
                'nome' => 'Condeúba',
                'estado_id' => '5',
            ),
            385 => 
            array (
                'id' => '386',
                'nome' => 'Contendas do Sincorá',
                'estado_id' => '5',
            ),
            386 => 
            array (
                'id' => '387',
                'nome' => 'Coração de Maria',
                'estado_id' => '5',
            ),
            387 => 
            array (
                'id' => '388',
                'nome' => 'Cordeiros',
                'estado_id' => '5',
            ),
            388 => 
            array (
                'id' => '389',
                'nome' => 'Coribe',
                'estado_id' => '5',
            ),
            389 => 
            array (
                'id' => '390',
                'nome' => 'Coronel João Sá',
                'estado_id' => '5',
            ),
            390 => 
            array (
                'id' => '391',
                'nome' => 'Correntina',
                'estado_id' => '5',
            ),
            391 => 
            array (
                'id' => '392',
                'nome' => 'Cotegipe',
                'estado_id' => '5',
            ),
            392 => 
            array (
                'id' => '393',
                'nome' => 'Cravolândia',
                'estado_id' => '5',
            ),
            393 => 
            array (
                'id' => '394',
                'nome' => 'Crisópolis',
                'estado_id' => '5',
            ),
            394 => 
            array (
                'id' => '395',
                'nome' => 'Cristópolis',
                'estado_id' => '5',
            ),
            395 => 
            array (
                'id' => '396',
                'nome' => 'Cruz das Almas',
                'estado_id' => '5',
            ),
            396 => 
            array (
                'id' => '397',
                'nome' => 'Curaçá',
                'estado_id' => '5',
            ),
            397 => 
            array (
                'id' => '398',
                'nome' => 'Dário Meira',
                'estado_id' => '5',
            ),
            398 => 
            array (
                'id' => '399',
                'nome' => 'Dias d`Ávila',
                'estado_id' => '5',
            ),
            399 => 
            array (
                'id' => '400',
                'nome' => 'Dom Basílio',
                'estado_id' => '5',
            ),
            400 => 
            array (
                'id' => '401',
                'nome' => 'Dom Macedo Costa',
                'estado_id' => '5',
            ),
            401 => 
            array (
                'id' => '402',
                'nome' => 'Elísio Medrado',
                'estado_id' => '5',
            ),
            402 => 
            array (
                'id' => '403',
                'nome' => 'Encruzilhada',
                'estado_id' => '5',
            ),
            403 => 
            array (
                'id' => '404',
                'nome' => 'Entre Rios',
                'estado_id' => '5',
            ),
            404 => 
            array (
                'id' => '405',
                'nome' => 'Érico Cardoso',
                'estado_id' => '5',
            ),
            405 => 
            array (
                'id' => '406',
                'nome' => 'Esplanada',
                'estado_id' => '5',
            ),
            406 => 
            array (
                'id' => '407',
                'nome' => 'Euclides da Cunha',
                'estado_id' => '5',
            ),
            407 => 
            array (
                'id' => '408',
                'nome' => 'Eunápolis',
                'estado_id' => '5',
            ),
            408 => 
            array (
                'id' => '409',
                'nome' => 'Fátima',
                'estado_id' => '5',
            ),
            409 => 
            array (
                'id' => '410',
                'nome' => 'Feira da Mata',
                'estado_id' => '5',
            ),
            410 => 
            array (
                'id' => '411',
                'nome' => 'Feira de Santana',
                'estado_id' => '5',
            ),
            411 => 
            array (
                'id' => '412',
                'nome' => 'Filadélfia',
                'estado_id' => '5',
            ),
            412 => 
            array (
                'id' => '413',
                'nome' => 'Firmino Alves',
                'estado_id' => '5',
            ),
            413 => 
            array (
                'id' => '414',
                'nome' => 'Floresta Azul',
                'estado_id' => '5',
            ),
            414 => 
            array (
                'id' => '415',
                'nome' => 'Formosa do Rio Preto',
                'estado_id' => '5',
            ),
            415 => 
            array (
                'id' => '416',
                'nome' => 'Gandu',
                'estado_id' => '5',
            ),
            416 => 
            array (
                'id' => '417',
                'nome' => 'Gavião',
                'estado_id' => '5',
            ),
            417 => 
            array (
                'id' => '418',
                'nome' => 'Gentio do Ouro',
                'estado_id' => '5',
            ),
            418 => 
            array (
                'id' => '419',
                'nome' => 'Glória',
                'estado_id' => '5',
            ),
            419 => 
            array (
                'id' => '420',
                'nome' => 'Gongogi',
                'estado_id' => '5',
            ),
            420 => 
            array (
                'id' => '421',
                'nome' => 'Governador Mangabeira',
                'estado_id' => '5',
            ),
            421 => 
            array (
                'id' => '422',
                'nome' => 'Guajeru',
                'estado_id' => '5',
            ),
            422 => 
            array (
                'id' => '423',
                'nome' => 'Guanambi',
                'estado_id' => '5',
            ),
            423 => 
            array (
                'id' => '424',
                'nome' => 'Guaratinga',
                'estado_id' => '5',
            ),
            424 => 
            array (
                'id' => '425',
                'nome' => 'Heliópolis',
                'estado_id' => '5',
            ),
            425 => 
            array (
                'id' => '426',
                'nome' => 'Iaçu',
                'estado_id' => '5',
            ),
            426 => 
            array (
                'id' => '427',
                'nome' => 'Ibiassucê',
                'estado_id' => '5',
            ),
            427 => 
            array (
                'id' => '428',
                'nome' => 'Ibicaraí',
                'estado_id' => '5',
            ),
            428 => 
            array (
                'id' => '429',
                'nome' => 'Ibicoara',
                'estado_id' => '5',
            ),
            429 => 
            array (
                'id' => '430',
                'nome' => 'Ibicuí',
                'estado_id' => '5',
            ),
            430 => 
            array (
                'id' => '431',
                'nome' => 'Ibipeba',
                'estado_id' => '5',
            ),
            431 => 
            array (
                'id' => '432',
                'nome' => 'Ibipitanga',
                'estado_id' => '5',
            ),
            432 => 
            array (
                'id' => '433',
                'nome' => 'Ibiquera',
                'estado_id' => '5',
            ),
            433 => 
            array (
                'id' => '434',
                'nome' => 'Ibirapitanga',
                'estado_id' => '5',
            ),
            434 => 
            array (
                'id' => '435',
                'nome' => 'Ibirapuã',
                'estado_id' => '5',
            ),
            435 => 
            array (
                'id' => '436',
                'nome' => 'Ibirataia',
                'estado_id' => '5',
            ),
            436 => 
            array (
                'id' => '437',
                'nome' => 'Ibitiara',
                'estado_id' => '5',
            ),
            437 => 
            array (
                'id' => '438',
                'nome' => 'Ibititá',
                'estado_id' => '5',
            ),
            438 => 
            array (
                'id' => '439',
                'nome' => 'Ibotirama',
                'estado_id' => '5',
            ),
            439 => 
            array (
                'id' => '440',
                'nome' => 'Ichu',
                'estado_id' => '5',
            ),
            440 => 
            array (
                'id' => '441',
                'nome' => 'Igaporã',
                'estado_id' => '5',
            ),
            441 => 
            array (
                'id' => '442',
                'nome' => 'Igrapiúna',
                'estado_id' => '5',
            ),
            442 => 
            array (
                'id' => '443',
                'nome' => 'Iguaí',
                'estado_id' => '5',
            ),
            443 => 
            array (
                'id' => '444',
                'nome' => 'Ilhéus',
                'estado_id' => '5',
            ),
            444 => 
            array (
                'id' => '445',
                'nome' => 'Inhambupe',
                'estado_id' => '5',
            ),
            445 => 
            array (
                'id' => '446',
                'nome' => 'Ipecaetá',
                'estado_id' => '5',
            ),
            446 => 
            array (
                'id' => '447',
                'nome' => 'Ipiaú',
                'estado_id' => '5',
            ),
            447 => 
            array (
                'id' => '448',
                'nome' => 'Ipirá',
                'estado_id' => '5',
            ),
            448 => 
            array (
                'id' => '449',
                'nome' => 'Ipupiara',
                'estado_id' => '5',
            ),
            449 => 
            array (
                'id' => '450',
                'nome' => 'Irajuba',
                'estado_id' => '5',
            ),
            450 => 
            array (
                'id' => '451',
                'nome' => 'Iramaia',
                'estado_id' => '5',
            ),
            451 => 
            array (
                'id' => '452',
                'nome' => 'Iraquara',
                'estado_id' => '5',
            ),
            452 => 
            array (
                'id' => '453',
                'nome' => 'Irará',
                'estado_id' => '5',
            ),
            453 => 
            array (
                'id' => '454',
                'nome' => 'Irecê',
                'estado_id' => '5',
            ),
            454 => 
            array (
                'id' => '455',
                'nome' => 'Itabela',
                'estado_id' => '5',
            ),
            455 => 
            array (
                'id' => '456',
                'nome' => 'Itaberaba',
                'estado_id' => '5',
            ),
            456 => 
            array (
                'id' => '457',
                'nome' => 'Itabuna',
                'estado_id' => '5',
            ),
            457 => 
            array (
                'id' => '458',
                'nome' => 'Itacaré',
                'estado_id' => '5',
            ),
            458 => 
            array (
                'id' => '459',
                'nome' => 'Itaeté',
                'estado_id' => '5',
            ),
            459 => 
            array (
                'id' => '460',
                'nome' => 'Itagi',
                'estado_id' => '5',
            ),
            460 => 
            array (
                'id' => '461',
                'nome' => 'Itagibá',
                'estado_id' => '5',
            ),
            461 => 
            array (
                'id' => '462',
                'nome' => 'Itagimirim',
                'estado_id' => '5',
            ),
            462 => 
            array (
                'id' => '463',
                'nome' => 'Itaguaçu da Bahia',
                'estado_id' => '5',
            ),
            463 => 
            array (
                'id' => '464',
                'nome' => 'Itaju do Colônia',
                'estado_id' => '5',
            ),
            464 => 
            array (
                'id' => '465',
                'nome' => 'Itajuípe',
                'estado_id' => '5',
            ),
            465 => 
            array (
                'id' => '466',
                'nome' => 'Itamaraju',
                'estado_id' => '5',
            ),
            466 => 
            array (
                'id' => '467',
                'nome' => 'Itamari',
                'estado_id' => '5',
            ),
            467 => 
            array (
                'id' => '468',
                'nome' => 'Itambé',
                'estado_id' => '5',
            ),
            468 => 
            array (
                'id' => '469',
                'nome' => 'Itanagra',
                'estado_id' => '5',
            ),
            469 => 
            array (
                'id' => '470',
                'nome' => 'Itanhém',
                'estado_id' => '5',
            ),
            470 => 
            array (
                'id' => '471',
                'nome' => 'Itaparica',
                'estado_id' => '5',
            ),
            471 => 
            array (
                'id' => '472',
                'nome' => 'Itapé',
                'estado_id' => '5',
            ),
            472 => 
            array (
                'id' => '473',
                'nome' => 'Itapebi',
                'estado_id' => '5',
            ),
            473 => 
            array (
                'id' => '474',
                'nome' => 'Itapetinga',
                'estado_id' => '5',
            ),
            474 => 
            array (
                'id' => '475',
                'nome' => 'Itapicuru',
                'estado_id' => '5',
            ),
            475 => 
            array (
                'id' => '476',
                'nome' => 'Itapitanga',
                'estado_id' => '5',
            ),
            476 => 
            array (
                'id' => '477',
                'nome' => 'Itaquara',
                'estado_id' => '5',
            ),
            477 => 
            array (
                'id' => '478',
                'nome' => 'Itarantim',
                'estado_id' => '5',
            ),
            478 => 
            array (
                'id' => '479',
                'nome' => 'Itatim',
                'estado_id' => '5',
            ),
            479 => 
            array (
                'id' => '480',
                'nome' => 'Itiruçu',
                'estado_id' => '5',
            ),
            480 => 
            array (
                'id' => '481',
                'nome' => 'Itiúba',
                'estado_id' => '5',
            ),
            481 => 
            array (
                'id' => '482',
                'nome' => 'Itororó',
                'estado_id' => '5',
            ),
            482 => 
            array (
                'id' => '483',
                'nome' => 'Ituaçu',
                'estado_id' => '5',
            ),
            483 => 
            array (
                'id' => '484',
                'nome' => 'Ituberá',
                'estado_id' => '5',
            ),
            484 => 
            array (
                'id' => '485',
                'nome' => 'Iuiú',
                'estado_id' => '5',
            ),
            485 => 
            array (
                'id' => '486',
                'nome' => 'Jaborandi',
                'estado_id' => '5',
            ),
            486 => 
            array (
                'id' => '487',
                'nome' => 'Jacaraci',
                'estado_id' => '5',
            ),
            487 => 
            array (
                'id' => '488',
                'nome' => 'Jacobina',
                'estado_id' => '5',
            ),
            488 => 
            array (
                'id' => '489',
                'nome' => 'Jaguaquara',
                'estado_id' => '5',
            ),
            489 => 
            array (
                'id' => '490',
                'nome' => 'Jaguarari',
                'estado_id' => '5',
            ),
            490 => 
            array (
                'id' => '491',
                'nome' => 'Jaguaripe',
                'estado_id' => '5',
            ),
            491 => 
            array (
                'id' => '492',
                'nome' => 'Jandaíra',
                'estado_id' => '5',
            ),
            492 => 
            array (
                'id' => '493',
                'nome' => 'Jequié',
                'estado_id' => '5',
            ),
            493 => 
            array (
                'id' => '494',
                'nome' => 'Jeremoabo',
                'estado_id' => '5',
            ),
            494 => 
            array (
                'id' => '495',
                'nome' => 'Jiquiriçá',
                'estado_id' => '5',
            ),
            495 => 
            array (
                'id' => '496',
                'nome' => 'Jitaúna',
                'estado_id' => '5',
            ),
            496 => 
            array (
                'id' => '497',
                'nome' => 'João Dourado',
                'estado_id' => '5',
            ),
            497 => 
            array (
                'id' => '498',
                'nome' => 'Juazeiro',
                'estado_id' => '5',
            ),
            498 => 
            array (
                'id' => '499',
                'nome' => 'Jucuruçu',
                'estado_id' => '5',
            ),
            499 => 
            array (
                'id' => '500',
                'nome' => 'Jussara',
                'estado_id' => '5',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '501',
                'nome' => 'Jussari',
                'estado_id' => '5',
            ),
            1 => 
            array (
                'id' => '502',
                'nome' => 'Jussiape',
                'estado_id' => '5',
            ),
            2 => 
            array (
                'id' => '503',
                'nome' => 'Lafaiete Coutinho',
                'estado_id' => '5',
            ),
            3 => 
            array (
                'id' => '504',
                'nome' => 'Lagoa Real',
                'estado_id' => '5',
            ),
            4 => 
            array (
                'id' => '505',
                'nome' => 'Laje',
                'estado_id' => '5',
            ),
            5 => 
            array (
                'id' => '506',
                'nome' => 'Lajedão',
                'estado_id' => '5',
            ),
            6 => 
            array (
                'id' => '507',
                'nome' => 'Lajedinho',
                'estado_id' => '5',
            ),
            7 => 
            array (
                'id' => '508',
                'nome' => 'Lajedo do Tabocal',
                'estado_id' => '5',
            ),
            8 => 
            array (
                'id' => '509',
                'nome' => 'Lamarão',
                'estado_id' => '5',
            ),
            9 => 
            array (
                'id' => '510',
                'nome' => 'Lapão',
                'estado_id' => '5',
            ),
            10 => 
            array (
                'id' => '511',
                'nome' => 'Lauro de Freitas',
                'estado_id' => '5',
            ),
            11 => 
            array (
                'id' => '512',
                'nome' => 'Lençóis',
                'estado_id' => '5',
            ),
            12 => 
            array (
                'id' => '513',
                'nome' => 'Licínio de Almeida',
                'estado_id' => '5',
            ),
            13 => 
            array (
                'id' => '514',
                'nome' => 'Livramento de Nossa Senhora',
                'estado_id' => '5',
            ),
            14 => 
            array (
                'id' => '515',
                'nome' => 'Luís Eduardo Magalhães',
                'estado_id' => '5',
            ),
            15 => 
            array (
                'id' => '516',
                'nome' => 'Macajuba',
                'estado_id' => '5',
            ),
            16 => 
            array (
                'id' => '517',
                'nome' => 'Macarani',
                'estado_id' => '5',
            ),
            17 => 
            array (
                'id' => '518',
                'nome' => 'Macaúbas',
                'estado_id' => '5',
            ),
            18 => 
            array (
                'id' => '519',
                'nome' => 'Macururé',
                'estado_id' => '5',
            ),
            19 => 
            array (
                'id' => '520',
                'nome' => 'Madre de Deus',
                'estado_id' => '5',
            ),
            20 => 
            array (
                'id' => '521',
                'nome' => 'Maetinga',
                'estado_id' => '5',
            ),
            21 => 
            array (
                'id' => '522',
                'nome' => 'Maiquinique',
                'estado_id' => '5',
            ),
            22 => 
            array (
                'id' => '523',
                'nome' => 'Mairi',
                'estado_id' => '5',
            ),
            23 => 
            array (
                'id' => '524',
                'nome' => 'Malhada',
                'estado_id' => '5',
            ),
            24 => 
            array (
                'id' => '525',
                'nome' => 'Malhada de Pedras',
                'estado_id' => '5',
            ),
            25 => 
            array (
                'id' => '526',
                'nome' => 'Manoel Vitorino',
                'estado_id' => '5',
            ),
            26 => 
            array (
                'id' => '527',
                'nome' => 'Mansidão',
                'estado_id' => '5',
            ),
            27 => 
            array (
                'id' => '528',
                'nome' => 'Maracás',
                'estado_id' => '5',
            ),
            28 => 
            array (
                'id' => '529',
                'nome' => 'Maragogipe',
                'estado_id' => '5',
            ),
            29 => 
            array (
                'id' => '530',
                'nome' => 'Maraú',
                'estado_id' => '5',
            ),
            30 => 
            array (
                'id' => '531',
                'nome' => 'Marcionílio Souza',
                'estado_id' => '5',
            ),
            31 => 
            array (
                'id' => '532',
                'nome' => 'Mascote',
                'estado_id' => '5',
            ),
            32 => 
            array (
                'id' => '533',
                'nome' => 'Mata de São João',
                'estado_id' => '5',
            ),
            33 => 
            array (
                'id' => '534',
                'nome' => 'Matina',
                'estado_id' => '5',
            ),
            34 => 
            array (
                'id' => '535',
                'nome' => 'Medeiros Neto',
                'estado_id' => '5',
            ),
            35 => 
            array (
                'id' => '536',
                'nome' => 'Miguel Calmon',
                'estado_id' => '5',
            ),
            36 => 
            array (
                'id' => '537',
                'nome' => 'Milagres',
                'estado_id' => '5',
            ),
            37 => 
            array (
                'id' => '538',
                'nome' => 'Mirangaba',
                'estado_id' => '5',
            ),
            38 => 
            array (
                'id' => '539',
                'nome' => 'Mirante',
                'estado_id' => '5',
            ),
            39 => 
            array (
                'id' => '540',
                'nome' => 'Monte Santo',
                'estado_id' => '5',
            ),
            40 => 
            array (
                'id' => '541',
                'nome' => 'Morpará',
                'estado_id' => '5',
            ),
            41 => 
            array (
                'id' => '542',
                'nome' => 'Morro do Chapéu',
                'estado_id' => '5',
            ),
            42 => 
            array (
                'id' => '543',
                'nome' => 'Mortugaba',
                'estado_id' => '5',
            ),
            43 => 
            array (
                'id' => '544',
                'nome' => 'Mucugê',
                'estado_id' => '5',
            ),
            44 => 
            array (
                'id' => '545',
                'nome' => 'Mucuri',
                'estado_id' => '5',
            ),
            45 => 
            array (
                'id' => '546',
                'nome' => 'Mulungu do Morro',
                'estado_id' => '5',
            ),
            46 => 
            array (
                'id' => '547',
                'nome' => 'Mundo Novo',
                'estado_id' => '5',
            ),
            47 => 
            array (
                'id' => '548',
                'nome' => 'Muniz Ferreira',
                'estado_id' => '5',
            ),
            48 => 
            array (
                'id' => '549',
                'nome' => 'Muquém de São Francisco',
                'estado_id' => '5',
            ),
            49 => 
            array (
                'id' => '550',
                'nome' => 'Muritiba',
                'estado_id' => '5',
            ),
            50 => 
            array (
                'id' => '551',
                'nome' => 'Mutuípe',
                'estado_id' => '5',
            ),
            51 => 
            array (
                'id' => '552',
                'nome' => 'Nazaré',
                'estado_id' => '5',
            ),
            52 => 
            array (
                'id' => '553',
                'nome' => 'Nilo Peçanha',
                'estado_id' => '5',
            ),
            53 => 
            array (
                'id' => '554',
                'nome' => 'Nordestina',
                'estado_id' => '5',
            ),
            54 => 
            array (
                'id' => '555',
                'nome' => 'Nova Canaã',
                'estado_id' => '5',
            ),
            55 => 
            array (
                'id' => '556',
                'nome' => 'Nova Fátima',
                'estado_id' => '5',
            ),
            56 => 
            array (
                'id' => '557',
                'nome' => 'Nova Ibiá',
                'estado_id' => '5',
            ),
            57 => 
            array (
                'id' => '558',
                'nome' => 'Nova Itarana',
                'estado_id' => '5',
            ),
            58 => 
            array (
                'id' => '559',
                'nome' => 'Nova Redenção',
                'estado_id' => '5',
            ),
            59 => 
            array (
                'id' => '560',
                'nome' => 'Nova Soure',
                'estado_id' => '5',
            ),
            60 => 
            array (
                'id' => '561',
                'nome' => 'Nova Viçosa',
                'estado_id' => '5',
            ),
            61 => 
            array (
                'id' => '562',
                'nome' => 'Novo Horizonte',
                'estado_id' => '5',
            ),
            62 => 
            array (
                'id' => '563',
                'nome' => 'Novo Triunfo',
                'estado_id' => '5',
            ),
            63 => 
            array (
                'id' => '564',
                'nome' => 'Olindina',
                'estado_id' => '5',
            ),
            64 => 
            array (
                'id' => '565',
                'nome' => 'Oliveira dos Brejinhos',
                'estado_id' => '5',
            ),
            65 => 
            array (
                'id' => '566',
                'nome' => 'Ouriçangas',
                'estado_id' => '5',
            ),
            66 => 
            array (
                'id' => '567',
                'nome' => 'Ourolândia',
                'estado_id' => '5',
            ),
            67 => 
            array (
                'id' => '568',
                'nome' => 'Palmas de Monte Alto',
                'estado_id' => '5',
            ),
            68 => 
            array (
                'id' => '569',
                'nome' => 'Palmeiras',
                'estado_id' => '5',
            ),
            69 => 
            array (
                'id' => '570',
                'nome' => 'Paramirim',
                'estado_id' => '5',
            ),
            70 => 
            array (
                'id' => '571',
                'nome' => 'Paratinga',
                'estado_id' => '5',
            ),
            71 => 
            array (
                'id' => '572',
                'nome' => 'Paripiranga',
                'estado_id' => '5',
            ),
            72 => 
            array (
                'id' => '573',
                'nome' => 'Pau Brasil',
                'estado_id' => '5',
            ),
            73 => 
            array (
                'id' => '574',
                'nome' => 'Paulo Afonso',
                'estado_id' => '5',
            ),
            74 => 
            array (
                'id' => '575',
                'nome' => 'Pé de Serra',
                'estado_id' => '5',
            ),
            75 => 
            array (
                'id' => '576',
                'nome' => 'Pedrão',
                'estado_id' => '5',
            ),
            76 => 
            array (
                'id' => '577',
                'nome' => 'Pedro Alexandre',
                'estado_id' => '5',
            ),
            77 => 
            array (
                'id' => '578',
                'nome' => 'Piatã',
                'estado_id' => '5',
            ),
            78 => 
            array (
                'id' => '579',
                'nome' => 'Pilão Arcado',
                'estado_id' => '5',
            ),
            79 => 
            array (
                'id' => '580',
                'nome' => 'Pindaí',
                'estado_id' => '5',
            ),
            80 => 
            array (
                'id' => '581',
                'nome' => 'Pindobaçu',
                'estado_id' => '5',
            ),
            81 => 
            array (
                'id' => '582',
                'nome' => 'Pintadas',
                'estado_id' => '5',
            ),
            82 => 
            array (
                'id' => '583',
                'nome' => 'Piraí do Norte',
                'estado_id' => '5',
            ),
            83 => 
            array (
                'id' => '584',
                'nome' => 'Piripá',
                'estado_id' => '5',
            ),
            84 => 
            array (
                'id' => '585',
                'nome' => 'Piritiba',
                'estado_id' => '5',
            ),
            85 => 
            array (
                'id' => '586',
                'nome' => 'Planaltino',
                'estado_id' => '5',
            ),
            86 => 
            array (
                'id' => '587',
                'nome' => 'Planalto',
                'estado_id' => '5',
            ),
            87 => 
            array (
                'id' => '588',
                'nome' => 'Poções',
                'estado_id' => '5',
            ),
            88 => 
            array (
                'id' => '589',
                'nome' => 'Pojuca',
                'estado_id' => '5',
            ),
            89 => 
            array (
                'id' => '590',
                'nome' => 'Ponto Novo',
                'estado_id' => '5',
            ),
            90 => 
            array (
                'id' => '591',
                'nome' => 'Porto Seguro',
                'estado_id' => '5',
            ),
            91 => 
            array (
                'id' => '592',
                'nome' => 'Potiraguá',
                'estado_id' => '5',
            ),
            92 => 
            array (
                'id' => '593',
                'nome' => 'Prado',
                'estado_id' => '5',
            ),
            93 => 
            array (
                'id' => '594',
                'nome' => 'Presidente Dutra',
                'estado_id' => '5',
            ),
            94 => 
            array (
                'id' => '595',
                'nome' => 'Presidente Jânio Quadros',
                'estado_id' => '5',
            ),
            95 => 
            array (
                'id' => '596',
                'nome' => 'Presidente Tancredo Neves',
                'estado_id' => '5',
            ),
            96 => 
            array (
                'id' => '597',
                'nome' => 'Queimadas',
                'estado_id' => '5',
            ),
            97 => 
            array (
                'id' => '598',
                'nome' => 'Quijingue',
                'estado_id' => '5',
            ),
            98 => 
            array (
                'id' => '599',
                'nome' => 'Quixabeira',
                'estado_id' => '5',
            ),
            99 => 
            array (
                'id' => '600',
                'nome' => 'Rafael Jambeiro',
                'estado_id' => '5',
            ),
            100 => 
            array (
                'id' => '601',
                'nome' => 'Remanso',
                'estado_id' => '5',
            ),
            101 => 
            array (
                'id' => '602',
                'nome' => 'Retirolândia',
                'estado_id' => '5',
            ),
            102 => 
            array (
                'id' => '603',
                'nome' => 'Riachão das Neves',
                'estado_id' => '5',
            ),
            103 => 
            array (
                'id' => '604',
                'nome' => 'Riachão do Jacuípe',
                'estado_id' => '5',
            ),
            104 => 
            array (
                'id' => '605',
                'nome' => 'Riacho de Santana',
                'estado_id' => '5',
            ),
            105 => 
            array (
                'id' => '606',
                'nome' => 'Ribeira do Amparo',
                'estado_id' => '5',
            ),
            106 => 
            array (
                'id' => '607',
                'nome' => 'Ribeira do Pombal',
                'estado_id' => '5',
            ),
            107 => 
            array (
                'id' => '608',
                'nome' => 'Ribeirão do Largo',
                'estado_id' => '5',
            ),
            108 => 
            array (
                'id' => '609',
                'nome' => 'Rio de Contas',
                'estado_id' => '5',
            ),
            109 => 
            array (
                'id' => '610',
                'nome' => 'Rio do Antônio',
                'estado_id' => '5',
            ),
            110 => 
            array (
                'id' => '611',
                'nome' => 'Rio do Pires',
                'estado_id' => '5',
            ),
            111 => 
            array (
                'id' => '612',
                'nome' => 'Rio Real',
                'estado_id' => '5',
            ),
            112 => 
            array (
                'id' => '613',
                'nome' => 'Rodelas',
                'estado_id' => '5',
            ),
            113 => 
            array (
                'id' => '614',
                'nome' => 'Ruy Barbosa',
                'estado_id' => '5',
            ),
            114 => 
            array (
                'id' => '615',
                'nome' => 'Salinas da Margarida',
                'estado_id' => '5',
            ),
            115 => 
            array (
                'id' => '616',
                'nome' => 'Salvador',
                'estado_id' => '5',
            ),
            116 => 
            array (
                'id' => '617',
                'nome' => 'Santa Bárbara',
                'estado_id' => '5',
            ),
            117 => 
            array (
                'id' => '618',
                'nome' => 'Santa Brígida',
                'estado_id' => '5',
            ),
            118 => 
            array (
                'id' => '619',
                'nome' => 'Santa Cruz Cabrália',
                'estado_id' => '5',
            ),
            119 => 
            array (
                'id' => '620',
                'nome' => 'Santa Cruz da Vitória',
                'estado_id' => '5',
            ),
            120 => 
            array (
                'id' => '621',
                'nome' => 'Santa Inês',
                'estado_id' => '5',
            ),
            121 => 
            array (
                'id' => '622',
                'nome' => 'Santa Luzia',
                'estado_id' => '5',
            ),
            122 => 
            array (
                'id' => '623',
                'nome' => 'Santa Maria da Vitória',
                'estado_id' => '5',
            ),
            123 => 
            array (
                'id' => '624',
                'nome' => 'Santa Rita de Cássia',
                'estado_id' => '5',
            ),
            124 => 
            array (
                'id' => '625',
                'nome' => 'Santa Teresinha',
                'estado_id' => '5',
            ),
            125 => 
            array (
                'id' => '626',
                'nome' => 'Santaluz',
                'estado_id' => '5',
            ),
            126 => 
            array (
                'id' => '627',
                'nome' => 'Santana',
                'estado_id' => '5',
            ),
            127 => 
            array (
                'id' => '628',
                'nome' => 'Santanópolis',
                'estado_id' => '5',
            ),
            128 => 
            array (
                'id' => '629',
                'nome' => 'Santo Amaro',
                'estado_id' => '5',
            ),
            129 => 
            array (
                'id' => '630',
                'nome' => 'Santo Antônio de Jesus',
                'estado_id' => '5',
            ),
            130 => 
            array (
                'id' => '631',
                'nome' => 'Santo Estêvão',
                'estado_id' => '5',
            ),
            131 => 
            array (
                'id' => '632',
                'nome' => 'São Desidério',
                'estado_id' => '5',
            ),
            132 => 
            array (
                'id' => '633',
                'nome' => 'São Domingos',
                'estado_id' => '5',
            ),
            133 => 
            array (
                'id' => '634',
                'nome' => 'São Felipe',
                'estado_id' => '5',
            ),
            134 => 
            array (
                'id' => '635',
                'nome' => 'São Félix',
                'estado_id' => '5',
            ),
            135 => 
            array (
                'id' => '636',
                'nome' => 'São Félix do Coribe',
                'estado_id' => '5',
            ),
            136 => 
            array (
                'id' => '637',
                'nome' => 'São Francisco do Conde',
                'estado_id' => '5',
            ),
            137 => 
            array (
                'id' => '638',
                'nome' => 'São Gabriel',
                'estado_id' => '5',
            ),
            138 => 
            array (
                'id' => '639',
                'nome' => 'São Gonçalo dos Campos',
                'estado_id' => '5',
            ),
            139 => 
            array (
                'id' => '640',
                'nome' => 'São José da Vitória',
                'estado_id' => '5',
            ),
            140 => 
            array (
                'id' => '641',
                'nome' => 'São José do Jacuípe',
                'estado_id' => '5',
            ),
            141 => 
            array (
                'id' => '642',
                'nome' => 'São Miguel das Matas',
                'estado_id' => '5',
            ),
            142 => 
            array (
                'id' => '643',
                'nome' => 'São Sebastião do Passé',
                'estado_id' => '5',
            ),
            143 => 
            array (
                'id' => '644',
                'nome' => 'Sapeaçu',
                'estado_id' => '5',
            ),
            144 => 
            array (
                'id' => '645',
                'nome' => 'Sátiro Dias',
                'estado_id' => '5',
            ),
            145 => 
            array (
                'id' => '646',
                'nome' => 'Saubara',
                'estado_id' => '5',
            ),
            146 => 
            array (
                'id' => '647',
                'nome' => 'Saúde',
                'estado_id' => '5',
            ),
            147 => 
            array (
                'id' => '648',
                'nome' => 'Seabra',
                'estado_id' => '5',
            ),
            148 => 
            array (
                'id' => '649',
                'nome' => 'Sebastião Laranjeiras',
                'estado_id' => '5',
            ),
            149 => 
            array (
                'id' => '650',
                'nome' => 'Senhor do Bonfim',
                'estado_id' => '5',
            ),
            150 => 
            array (
                'id' => '651',
                'nome' => 'Sento Sé',
                'estado_id' => '5',
            ),
            151 => 
            array (
                'id' => '652',
                'nome' => 'Serra do Ramalho',
                'estado_id' => '5',
            ),
            152 => 
            array (
                'id' => '653',
                'nome' => 'Serra Dourada',
                'estado_id' => '5',
            ),
            153 => 
            array (
                'id' => '654',
                'nome' => 'Serra Preta',
                'estado_id' => '5',
            ),
            154 => 
            array (
                'id' => '655',
                'nome' => 'Serrinha',
                'estado_id' => '5',
            ),
            155 => 
            array (
                'id' => '656',
                'nome' => 'Serrolândia',
                'estado_id' => '5',
            ),
            156 => 
            array (
                'id' => '657',
                'nome' => 'Simões Filho',
                'estado_id' => '5',
            ),
            157 => 
            array (
                'id' => '658',
                'nome' => 'Sítio do Mato',
                'estado_id' => '5',
            ),
            158 => 
            array (
                'id' => '659',
                'nome' => 'Sítio do Quinto',
                'estado_id' => '5',
            ),
            159 => 
            array (
                'id' => '660',
                'nome' => 'Sobradinho',
                'estado_id' => '5',
            ),
            160 => 
            array (
                'id' => '661',
                'nome' => 'Souto Soares',
                'estado_id' => '5',
            ),
            161 => 
            array (
                'id' => '662',
                'nome' => 'Tabocas do Brejo Velho',
                'estado_id' => '5',
            ),
            162 => 
            array (
                'id' => '663',
                'nome' => 'Tanhaçu',
                'estado_id' => '5',
            ),
            163 => 
            array (
                'id' => '664',
                'nome' => 'Tanque Novo',
                'estado_id' => '5',
            ),
            164 => 
            array (
                'id' => '665',
                'nome' => 'Tanquinho',
                'estado_id' => '5',
            ),
            165 => 
            array (
                'id' => '666',
                'nome' => 'Taperoá',
                'estado_id' => '5',
            ),
            166 => 
            array (
                'id' => '667',
                'nome' => 'Tapiramutá',
                'estado_id' => '5',
            ),
            167 => 
            array (
                'id' => '668',
                'nome' => 'Teixeira de Freitas',
                'estado_id' => '5',
            ),
            168 => 
            array (
                'id' => '669',
                'nome' => 'Teodoro Sampaio',
                'estado_id' => '5',
            ),
            169 => 
            array (
                'id' => '670',
                'nome' => 'Teofilândia',
                'estado_id' => '5',
            ),
            170 => 
            array (
                'id' => '671',
                'nome' => 'Teolândia',
                'estado_id' => '5',
            ),
            171 => 
            array (
                'id' => '672',
                'nome' => 'Terra Nova',
                'estado_id' => '5',
            ),
            172 => 
            array (
                'id' => '673',
                'nome' => 'Tremedal',
                'estado_id' => '5',
            ),
            173 => 
            array (
                'id' => '674',
                'nome' => 'Tucano',
                'estado_id' => '5',
            ),
            174 => 
            array (
                'id' => '675',
                'nome' => 'Uauá',
                'estado_id' => '5',
            ),
            175 => 
            array (
                'id' => '676',
                'nome' => 'Ubaíra',
                'estado_id' => '5',
            ),
            176 => 
            array (
                'id' => '677',
                'nome' => 'Ubaitaba',
                'estado_id' => '5',
            ),
            177 => 
            array (
                'id' => '678',
                'nome' => 'Ubatã',
                'estado_id' => '5',
            ),
            178 => 
            array (
                'id' => '679',
                'nome' => 'Uibaí',
                'estado_id' => '5',
            ),
            179 => 
            array (
                'id' => '680',
                'nome' => 'Umburanas',
                'estado_id' => '5',
            ),
            180 => 
            array (
                'id' => '681',
                'nome' => 'Una',
                'estado_id' => '5',
            ),
            181 => 
            array (
                'id' => '682',
                'nome' => 'Urandi',
                'estado_id' => '5',
            ),
            182 => 
            array (
                'id' => '683',
                'nome' => 'Uruçuca',
                'estado_id' => '5',
            ),
            183 => 
            array (
                'id' => '684',
                'nome' => 'Utinga',
                'estado_id' => '5',
            ),
            184 => 
            array (
                'id' => '685',
                'nome' => 'Valença',
                'estado_id' => '5',
            ),
            185 => 
            array (
                'id' => '686',
                'nome' => 'Valente',
                'estado_id' => '5',
            ),
            186 => 
            array (
                'id' => '687',
                'nome' => 'Várzea da Roça',
                'estado_id' => '5',
            ),
            187 => 
            array (
                'id' => '688',
                'nome' => 'Várzea do Poço',
                'estado_id' => '5',
            ),
            188 => 
            array (
                'id' => '689',
                'nome' => 'Várzea Nova',
                'estado_id' => '5',
            ),
            189 => 
            array (
                'id' => '690',
                'nome' => 'Varzedo',
                'estado_id' => '5',
            ),
            190 => 
            array (
                'id' => '691',
                'nome' => 'Vera Cruz',
                'estado_id' => '5',
            ),
            191 => 
            array (
                'id' => '692',
                'nome' => 'Vereda',
                'estado_id' => '5',
            ),
            192 => 
            array (
                'id' => '693',
                'nome' => 'Vitória da Conquista',
                'estado_id' => '5',
            ),
            193 => 
            array (
                'id' => '694',
                'nome' => 'Wagner',
                'estado_id' => '5',
            ),
            194 => 
            array (
                'id' => '695',
                'nome' => 'Wanderley',
                'estado_id' => '5',
            ),
            195 => 
            array (
                'id' => '696',
                'nome' => 'Wenceslau Guimarães',
                'estado_id' => '5',
            ),
            196 => 
            array (
                'id' => '697',
                'nome' => 'Xique-Xique',
                'estado_id' => '5',
            ),
            197 => 
            array (
                'id' => '698',
                'nome' => 'Abaiara',
                'estado_id' => '6',
            ),
            198 => 
            array (
                'id' => '699',
                'nome' => 'Acarape',
                'estado_id' => '6',
            ),
            199 => 
            array (
                'id' => '700',
                'nome' => 'Acaraú',
                'estado_id' => '6',
            ),
            200 => 
            array (
                'id' => '701',
                'nome' => 'Acopiara',
                'estado_id' => '6',
            ),
            201 => 
            array (
                'id' => '702',
                'nome' => 'Aiuaba',
                'estado_id' => '6',
            ),
            202 => 
            array (
                'id' => '703',
                'nome' => 'Alcântaras',
                'estado_id' => '6',
            ),
            203 => 
            array (
                'id' => '704',
                'nome' => 'Altaneira',
                'estado_id' => '6',
            ),
            204 => 
            array (
                'id' => '705',
                'nome' => 'Alto Santo',
                'estado_id' => '6',
            ),
            205 => 
            array (
                'id' => '706',
                'nome' => 'Amontada',
                'estado_id' => '6',
            ),
            206 => 
            array (
                'id' => '707',
                'nome' => 'Antonina do Norte',
                'estado_id' => '6',
            ),
            207 => 
            array (
                'id' => '708',
                'nome' => 'Apuiarés',
                'estado_id' => '6',
            ),
            208 => 
            array (
                'id' => '709',
                'nome' => 'Aquiraz',
                'estado_id' => '6',
            ),
            209 => 
            array (
                'id' => '710',
                'nome' => 'Aracati',
                'estado_id' => '6',
            ),
            210 => 
            array (
                'id' => '711',
                'nome' => 'Aracoiaba',
                'estado_id' => '6',
            ),
            211 => 
            array (
                'id' => '712',
                'nome' => 'Ararendá',
                'estado_id' => '6',
            ),
            212 => 
            array (
                'id' => '713',
                'nome' => 'Araripe',
                'estado_id' => '6',
            ),
            213 => 
            array (
                'id' => '714',
                'nome' => 'Aratuba',
                'estado_id' => '6',
            ),
            214 => 
            array (
                'id' => '715',
                'nome' => 'Arneiroz',
                'estado_id' => '6',
            ),
            215 => 
            array (
                'id' => '716',
                'nome' => 'Assaré',
                'estado_id' => '6',
            ),
            216 => 
            array (
                'id' => '717',
                'nome' => 'Aurora',
                'estado_id' => '6',
            ),
            217 => 
            array (
                'id' => '718',
                'nome' => 'Baixio',
                'estado_id' => '6',
            ),
            218 => 
            array (
                'id' => '719',
                'nome' => 'Banabuiú',
                'estado_id' => '6',
            ),
            219 => 
            array (
                'id' => '720',
                'nome' => 'Barbalha',
                'estado_id' => '6',
            ),
            220 => 
            array (
                'id' => '721',
                'nome' => 'Barreira',
                'estado_id' => '6',
            ),
            221 => 
            array (
                'id' => '722',
                'nome' => 'Barro',
                'estado_id' => '6',
            ),
            222 => 
            array (
                'id' => '723',
                'nome' => 'Barroquinha',
                'estado_id' => '6',
            ),
            223 => 
            array (
                'id' => '724',
                'nome' => 'Baturité',
                'estado_id' => '6',
            ),
            224 => 
            array (
                'id' => '725',
                'nome' => 'Beberibe',
                'estado_id' => '6',
            ),
            225 => 
            array (
                'id' => '726',
                'nome' => 'Bela Cruz',
                'estado_id' => '6',
            ),
            226 => 
            array (
                'id' => '727',
                'nome' => 'Boa Viagem',
                'estado_id' => '6',
            ),
            227 => 
            array (
                'id' => '728',
                'nome' => 'Brejo Santo',
                'estado_id' => '6',
            ),
            228 => 
            array (
                'id' => '729',
                'nome' => 'Camocim',
                'estado_id' => '6',
            ),
            229 => 
            array (
                'id' => '730',
                'nome' => 'Campos Sales',
                'estado_id' => '6',
            ),
            230 => 
            array (
                'id' => '731',
                'nome' => 'Canindé',
                'estado_id' => '6',
            ),
            231 => 
            array (
                'id' => '732',
                'nome' => 'Capistrano',
                'estado_id' => '6',
            ),
            232 => 
            array (
                'id' => '733',
                'nome' => 'Caridade',
                'estado_id' => '6',
            ),
            233 => 
            array (
                'id' => '734',
                'nome' => 'Cariré',
                'estado_id' => '6',
            ),
            234 => 
            array (
                'id' => '735',
                'nome' => 'Caririaçu',
                'estado_id' => '6',
            ),
            235 => 
            array (
                'id' => '736',
                'nome' => 'Cariús',
                'estado_id' => '6',
            ),
            236 => 
            array (
                'id' => '737',
                'nome' => 'Carnaubal',
                'estado_id' => '6',
            ),
            237 => 
            array (
                'id' => '738',
                'nome' => 'Cascavel',
                'estado_id' => '6',
            ),
            238 => 
            array (
                'id' => '739',
                'nome' => 'Catarina',
                'estado_id' => '6',
            ),
            239 => 
            array (
                'id' => '740',
                'nome' => 'Catunda',
                'estado_id' => '6',
            ),
            240 => 
            array (
                'id' => '741',
                'nome' => 'Caucaia',
                'estado_id' => '6',
            ),
            241 => 
            array (
                'id' => '742',
                'nome' => 'Cedro',
                'estado_id' => '6',
            ),
            242 => 
            array (
                'id' => '743',
                'nome' => 'Chaval',
                'estado_id' => '6',
            ),
            243 => 
            array (
                'id' => '744',
                'nome' => 'Choró',
                'estado_id' => '6',
            ),
            244 => 
            array (
                'id' => '745',
                'nome' => 'Chorozinho',
                'estado_id' => '6',
            ),
            245 => 
            array (
                'id' => '746',
                'nome' => 'Coreaú',
                'estado_id' => '6',
            ),
            246 => 
            array (
                'id' => '747',
                'nome' => 'Crateús',
                'estado_id' => '6',
            ),
            247 => 
            array (
                'id' => '748',
                'nome' => 'Crato',
                'estado_id' => '6',
            ),
            248 => 
            array (
                'id' => '749',
                'nome' => 'Croatá',
                'estado_id' => '6',
            ),
            249 => 
            array (
                'id' => '750',
                'nome' => 'Cruz',
                'estado_id' => '6',
            ),
            250 => 
            array (
                'id' => '751',
                'nome' => 'Deputado Irapuan Pinheiro',
                'estado_id' => '6',
            ),
            251 => 
            array (
                'id' => '752',
                'nome' => 'Ererê',
                'estado_id' => '6',
            ),
            252 => 
            array (
                'id' => '753',
                'nome' => 'Eusébio',
                'estado_id' => '6',
            ),
            253 => 
            array (
                'id' => '754',
                'nome' => 'Farias Brito',
                'estado_id' => '6',
            ),
            254 => 
            array (
                'id' => '755',
                'nome' => 'Forquilha',
                'estado_id' => '6',
            ),
            255 => 
            array (
                'id' => '756',
                'nome' => 'Fortaleza',
                'estado_id' => '6',
            ),
            256 => 
            array (
                'id' => '757',
                'nome' => 'Fortim',
                'estado_id' => '6',
            ),
            257 => 
            array (
                'id' => '758',
                'nome' => 'Frecheirinha',
                'estado_id' => '6',
            ),
            258 => 
            array (
                'id' => '759',
                'nome' => 'General Sampaio',
                'estado_id' => '6',
            ),
            259 => 
            array (
                'id' => '760',
                'nome' => 'Graça',
                'estado_id' => '6',
            ),
            260 => 
            array (
                'id' => '761',
                'nome' => 'Granja',
                'estado_id' => '6',
            ),
            261 => 
            array (
                'id' => '762',
                'nome' => 'Granjeiro',
                'estado_id' => '6',
            ),
            262 => 
            array (
                'id' => '763',
                'nome' => 'Groaíras',
                'estado_id' => '6',
            ),
            263 => 
            array (
                'id' => '764',
                'nome' => 'Guaiúba',
                'estado_id' => '6',
            ),
            264 => 
            array (
                'id' => '765',
                'nome' => 'Guaraciaba do Norte',
                'estado_id' => '6',
            ),
            265 => 
            array (
                'id' => '766',
                'nome' => 'Guaramiranga',
                'estado_id' => '6',
            ),
            266 => 
            array (
                'id' => '767',
                'nome' => 'Hidrolândia',
                'estado_id' => '6',
            ),
            267 => 
            array (
                'id' => '768',
                'nome' => 'Horizonte',
                'estado_id' => '6',
            ),
            268 => 
            array (
                'id' => '769',
                'nome' => 'Ibaretama',
                'estado_id' => '6',
            ),
            269 => 
            array (
                'id' => '770',
                'nome' => 'Ibiapina',
                'estado_id' => '6',
            ),
            270 => 
            array (
                'id' => '771',
                'nome' => 'Ibicuitinga',
                'estado_id' => '6',
            ),
            271 => 
            array (
                'id' => '772',
                'nome' => 'Icapuí',
                'estado_id' => '6',
            ),
            272 => 
            array (
                'id' => '773',
                'nome' => 'Icó',
                'estado_id' => '6',
            ),
            273 => 
            array (
                'id' => '774',
                'nome' => 'Iguatu',
                'estado_id' => '6',
            ),
            274 => 
            array (
                'id' => '775',
                'nome' => 'Independência',
                'estado_id' => '6',
            ),
            275 => 
            array (
                'id' => '776',
                'nome' => 'Ipaporanga',
                'estado_id' => '6',
            ),
            276 => 
            array (
                'id' => '777',
                'nome' => 'Ipaumirim',
                'estado_id' => '6',
            ),
            277 => 
            array (
                'id' => '778',
                'nome' => 'Ipu',
                'estado_id' => '6',
            ),
            278 => 
            array (
                'id' => '779',
                'nome' => 'Ipueiras',
                'estado_id' => '6',
            ),
            279 => 
            array (
                'id' => '780',
                'nome' => 'Iracema',
                'estado_id' => '6',
            ),
            280 => 
            array (
                'id' => '781',
                'nome' => 'Irauçuba',
                'estado_id' => '6',
            ),
            281 => 
            array (
                'id' => '782',
                'nome' => 'Itaiçaba',
                'estado_id' => '6',
            ),
            282 => 
            array (
                'id' => '783',
                'nome' => 'Itaitinga',
                'estado_id' => '6',
            ),
            283 => 
            array (
                'id' => '784',
                'nome' => 'Itapagé',
                'estado_id' => '6',
            ),
            284 => 
            array (
                'id' => '785',
                'nome' => 'Itapipoca',
                'estado_id' => '6',
            ),
            285 => 
            array (
                'id' => '786',
                'nome' => 'Itapiúna',
                'estado_id' => '6',
            ),
            286 => 
            array (
                'id' => '787',
                'nome' => 'Itarema',
                'estado_id' => '6',
            ),
            287 => 
            array (
                'id' => '788',
                'nome' => 'Itatira',
                'estado_id' => '6',
            ),
            288 => 
            array (
                'id' => '789',
                'nome' => 'Jaguaretama',
                'estado_id' => '6',
            ),
            289 => 
            array (
                'id' => '790',
                'nome' => 'Jaguaribara',
                'estado_id' => '6',
            ),
            290 => 
            array (
                'id' => '791',
                'nome' => 'Jaguaribe',
                'estado_id' => '6',
            ),
            291 => 
            array (
                'id' => '792',
                'nome' => 'Jaguaruana',
                'estado_id' => '6',
            ),
            292 => 
            array (
                'id' => '793',
                'nome' => 'Jardim',
                'estado_id' => '6',
            ),
            293 => 
            array (
                'id' => '794',
                'nome' => 'Jati',
                'estado_id' => '6',
            ),
            294 => 
            array (
                'id' => '795',
                'nome' => 'Jijoca de Jericoacoara',
                'estado_id' => '6',
            ),
            295 => 
            array (
                'id' => '796',
                'nome' => 'Juazeiro do Norte',
                'estado_id' => '6',
            ),
            296 => 
            array (
                'id' => '797',
                'nome' => 'Jucás',
                'estado_id' => '6',
            ),
            297 => 
            array (
                'id' => '798',
                'nome' => 'Lavras da Mangabeira',
                'estado_id' => '6',
            ),
            298 => 
            array (
                'id' => '799',
                'nome' => 'Limoeiro do Norte',
                'estado_id' => '6',
            ),
            299 => 
            array (
                'id' => '800',
                'nome' => 'Madalena',
                'estado_id' => '6',
            ),
            300 => 
            array (
                'id' => '801',
                'nome' => 'Maracanaú',
                'estado_id' => '6',
            ),
            301 => 
            array (
                'id' => '802',
                'nome' => 'Maranguape',
                'estado_id' => '6',
            ),
            302 => 
            array (
                'id' => '803',
                'nome' => 'Marco',
                'estado_id' => '6',
            ),
            303 => 
            array (
                'id' => '804',
                'nome' => 'Martinópole',
                'estado_id' => '6',
            ),
            304 => 
            array (
                'id' => '805',
                'nome' => 'Massapê',
                'estado_id' => '6',
            ),
            305 => 
            array (
                'id' => '806',
                'nome' => 'Mauriti',
                'estado_id' => '6',
            ),
            306 => 
            array (
                'id' => '807',
                'nome' => 'Meruoca',
                'estado_id' => '6',
            ),
            307 => 
            array (
                'id' => '808',
                'nome' => 'Milagres',
                'estado_id' => '6',
            ),
            308 => 
            array (
                'id' => '809',
                'nome' => 'Milhã',
                'estado_id' => '6',
            ),
            309 => 
            array (
                'id' => '810',
                'nome' => 'Miraíma',
                'estado_id' => '6',
            ),
            310 => 
            array (
                'id' => '811',
                'nome' => 'Missão Velha',
                'estado_id' => '6',
            ),
            311 => 
            array (
                'id' => '812',
                'nome' => 'Mombaça',
                'estado_id' => '6',
            ),
            312 => 
            array (
                'id' => '813',
                'nome' => 'Monsenhor Tabosa',
                'estado_id' => '6',
            ),
            313 => 
            array (
                'id' => '814',
                'nome' => 'Morada Nova',
                'estado_id' => '6',
            ),
            314 => 
            array (
                'id' => '815',
                'nome' => 'Moraújo',
                'estado_id' => '6',
            ),
            315 => 
            array (
                'id' => '816',
                'nome' => 'Morrinhos',
                'estado_id' => '6',
            ),
            316 => 
            array (
                'id' => '817',
                'nome' => 'Mucambo',
                'estado_id' => '6',
            ),
            317 => 
            array (
                'id' => '818',
                'nome' => 'Mulungu',
                'estado_id' => '6',
            ),
            318 => 
            array (
                'id' => '819',
                'nome' => 'Nova Olinda',
                'estado_id' => '6',
            ),
            319 => 
            array (
                'id' => '820',
                'nome' => 'Nova Russas',
                'estado_id' => '6',
            ),
            320 => 
            array (
                'id' => '821',
                'nome' => 'Novo Oriente',
                'estado_id' => '6',
            ),
            321 => 
            array (
                'id' => '822',
                'nome' => 'Ocara',
                'estado_id' => '6',
            ),
            322 => 
            array (
                'id' => '823',
                'nome' => 'Orós',
                'estado_id' => '6',
            ),
            323 => 
            array (
                'id' => '824',
                'nome' => 'Pacajus',
                'estado_id' => '6',
            ),
            324 => 
            array (
                'id' => '825',
                'nome' => 'Pacatuba',
                'estado_id' => '6',
            ),
            325 => 
            array (
                'id' => '826',
                'nome' => 'Pacoti',
                'estado_id' => '6',
            ),
            326 => 
            array (
                'id' => '827',
                'nome' => 'Pacujá',
                'estado_id' => '6',
            ),
            327 => 
            array (
                'id' => '828',
                'nome' => 'Palhano',
                'estado_id' => '6',
            ),
            328 => 
            array (
                'id' => '829',
                'nome' => 'Palmácia',
                'estado_id' => '6',
            ),
            329 => 
            array (
                'id' => '830',
                'nome' => 'Paracuru',
                'estado_id' => '6',
            ),
            330 => 
            array (
                'id' => '831',
                'nome' => 'Paraipaba',
                'estado_id' => '6',
            ),
            331 => 
            array (
                'id' => '832',
                'nome' => 'Parambu',
                'estado_id' => '6',
            ),
            332 => 
            array (
                'id' => '833',
                'nome' => 'Paramoti',
                'estado_id' => '6',
            ),
            333 => 
            array (
                'id' => '834',
                'nome' => 'Pedra Branca',
                'estado_id' => '6',
            ),
            334 => 
            array (
                'id' => '835',
                'nome' => 'Penaforte',
                'estado_id' => '6',
            ),
            335 => 
            array (
                'id' => '836',
                'nome' => 'Pentecoste',
                'estado_id' => '6',
            ),
            336 => 
            array (
                'id' => '837',
                'nome' => 'Pereiro',
                'estado_id' => '6',
            ),
            337 => 
            array (
                'id' => '838',
                'nome' => 'Pindoretama',
                'estado_id' => '6',
            ),
            338 => 
            array (
                'id' => '839',
                'nome' => 'Piquet Carneiro',
                'estado_id' => '6',
            ),
            339 => 
            array (
                'id' => '840',
                'nome' => 'Pires Ferreira',
                'estado_id' => '6',
            ),
            340 => 
            array (
                'id' => '841',
                'nome' => 'Poranga',
                'estado_id' => '6',
            ),
            341 => 
            array (
                'id' => '842',
                'nome' => 'Porteiras',
                'estado_id' => '6',
            ),
            342 => 
            array (
                'id' => '843',
                'nome' => 'Potengi',
                'estado_id' => '6',
            ),
            343 => 
            array (
                'id' => '844',
                'nome' => 'Potiretama',
                'estado_id' => '6',
            ),
            344 => 
            array (
                'id' => '845',
                'nome' => 'Quiterianópolis',
                'estado_id' => '6',
            ),
            345 => 
            array (
                'id' => '846',
                'nome' => 'Quixadá',
                'estado_id' => '6',
            ),
            346 => 
            array (
                'id' => '847',
                'nome' => 'Quixelô',
                'estado_id' => '6',
            ),
            347 => 
            array (
                'id' => '848',
                'nome' => 'Quixeramobim',
                'estado_id' => '6',
            ),
            348 => 
            array (
                'id' => '849',
                'nome' => 'Quixeré',
                'estado_id' => '6',
            ),
            349 => 
            array (
                'id' => '850',
                'nome' => 'Redenção',
                'estado_id' => '6',
            ),
            350 => 
            array (
                'id' => '851',
                'nome' => 'Reriutaba',
                'estado_id' => '6',
            ),
            351 => 
            array (
                'id' => '852',
                'nome' => 'Russas',
                'estado_id' => '6',
            ),
            352 => 
            array (
                'id' => '853',
                'nome' => 'Saboeiro',
                'estado_id' => '6',
            ),
            353 => 
            array (
                'id' => '854',
                'nome' => 'Salitre',
                'estado_id' => '6',
            ),
            354 => 
            array (
                'id' => '855',
                'nome' => 'Santa Quitéria',
                'estado_id' => '6',
            ),
            355 => 
            array (
                'id' => '856',
                'nome' => 'Santana do Acaraú',
                'estado_id' => '6',
            ),
            356 => 
            array (
                'id' => '857',
                'nome' => 'Santana do Cariri',
                'estado_id' => '6',
            ),
            357 => 
            array (
                'id' => '858',
                'nome' => 'São Benedito',
                'estado_id' => '6',
            ),
            358 => 
            array (
                'id' => '859',
                'nome' => 'São Gonçalo do Amarante',
                'estado_id' => '6',
            ),
            359 => 
            array (
                'id' => '860',
                'nome' => 'São João do Jaguaribe',
                'estado_id' => '6',
            ),
            360 => 
            array (
                'id' => '861',
                'nome' => 'São Luís do Curu',
                'estado_id' => '6',
            ),
            361 => 
            array (
                'id' => '862',
                'nome' => 'Senador Pompeu',
                'estado_id' => '6',
            ),
            362 => 
            array (
                'id' => '863',
                'nome' => 'Senador Sá',
                'estado_id' => '6',
            ),
            363 => 
            array (
                'id' => '864',
                'nome' => 'Sobral',
                'estado_id' => '6',
            ),
            364 => 
            array (
                'id' => '865',
                'nome' => 'Solonópole',
                'estado_id' => '6',
            ),
            365 => 
            array (
                'id' => '866',
                'nome' => 'Tabuleiro do Norte',
                'estado_id' => '6',
            ),
            366 => 
            array (
                'id' => '867',
                'nome' => 'Tamboril',
                'estado_id' => '6',
            ),
            367 => 
            array (
                'id' => '868',
                'nome' => 'Tarrafas',
                'estado_id' => '6',
            ),
            368 => 
            array (
                'id' => '869',
                'nome' => 'Tauá',
                'estado_id' => '6',
            ),
            369 => 
            array (
                'id' => '870',
                'nome' => 'Tejuçuoca',
                'estado_id' => '6',
            ),
            370 => 
            array (
                'id' => '871',
                'nome' => 'Tianguá',
                'estado_id' => '6',
            ),
            371 => 
            array (
                'id' => '872',
                'nome' => 'Trairi',
                'estado_id' => '6',
            ),
            372 => 
            array (
                'id' => '873',
                'nome' => 'Tururu',
                'estado_id' => '6',
            ),
            373 => 
            array (
                'id' => '874',
                'nome' => 'Ubajara',
                'estado_id' => '6',
            ),
            374 => 
            array (
                'id' => '875',
                'nome' => 'Umari',
                'estado_id' => '6',
            ),
            375 => 
            array (
                'id' => '876',
                'nome' => 'Umirim',
                'estado_id' => '6',
            ),
            376 => 
            array (
                'id' => '877',
                'nome' => 'Uruburetama',
                'estado_id' => '6',
            ),
            377 => 
            array (
                'id' => '878',
                'nome' => 'Uruoca',
                'estado_id' => '6',
            ),
            378 => 
            array (
                'id' => '879',
                'nome' => 'Varjota',
                'estado_id' => '6',
            ),
            379 => 
            array (
                'id' => '880',
                'nome' => 'Várzea Alegre',
                'estado_id' => '6',
            ),
            380 => 
            array (
                'id' => '881',
                'nome' => 'Viçosa do Ceará',
                'estado_id' => '6',
            ),
            381 => 
            array (
                'id' => '882',
                'nome' => 'Brasília',
                'estado_id' => '7',
            ),
            382 => 
            array (
                'id' => '883',
                'nome' => 'Abadia de Goiás',
                'estado_id' => '9',
            ),
            383 => 
            array (
                'id' => '884',
                'nome' => 'Abadiânia',
                'estado_id' => '9',
            ),
            384 => 
            array (
                'id' => '885',
                'nome' => 'Acreúna',
                'estado_id' => '9',
            ),
            385 => 
            array (
                'id' => '886',
                'nome' => 'Adelândia',
                'estado_id' => '9',
            ),
            386 => 
            array (
                'id' => '887',
                'nome' => 'Água Fria de Goiás',
                'estado_id' => '9',
            ),
            387 => 
            array (
                'id' => '888',
                'nome' => 'Água Limpa',
                'estado_id' => '9',
            ),
            388 => 
            array (
                'id' => '889',
                'nome' => 'Águas Lindas de Goiás',
                'estado_id' => '9',
            ),
            389 => 
            array (
                'id' => '890',
                'nome' => 'Alexânia',
                'estado_id' => '9',
            ),
            390 => 
            array (
                'id' => '891',
                'nome' => 'Aloândia',
                'estado_id' => '9',
            ),
            391 => 
            array (
                'id' => '892',
                'nome' => 'Alto Horizonte',
                'estado_id' => '9',
            ),
            392 => 
            array (
                'id' => '893',
                'nome' => 'Alto Paraíso de Goiás',
                'estado_id' => '9',
            ),
            393 => 
            array (
                'id' => '894',
                'nome' => 'Alvorada do Norte',
                'estado_id' => '9',
            ),
            394 => 
            array (
                'id' => '895',
                'nome' => 'Amaralina',
                'estado_id' => '9',
            ),
            395 => 
            array (
                'id' => '896',
                'nome' => 'Americano do Brasil',
                'estado_id' => '9',
            ),
            396 => 
            array (
                'id' => '897',
                'nome' => 'Amorinópolis',
                'estado_id' => '9',
            ),
            397 => 
            array (
                'id' => '898',
                'nome' => 'Anápolis',
                'estado_id' => '9',
            ),
            398 => 
            array (
                'id' => '899',
                'nome' => 'Anhanguera',
                'estado_id' => '9',
            ),
            399 => 
            array (
                'id' => '900',
                'nome' => 'Anicuns',
                'estado_id' => '9',
            ),
            400 => 
            array (
                'id' => '901',
                'nome' => 'Aparecida de Goiânia',
                'estado_id' => '9',
            ),
            401 => 
            array (
                'id' => '902',
                'nome' => 'Aparecida do Rio Doce',
                'estado_id' => '9',
            ),
            402 => 
            array (
                'id' => '903',
                'nome' => 'Aporé',
                'estado_id' => '9',
            ),
            403 => 
            array (
                'id' => '904',
                'nome' => 'Araçu',
                'estado_id' => '9',
            ),
            404 => 
            array (
                'id' => '905',
                'nome' => 'Aragarças',
                'estado_id' => '9',
            ),
            405 => 
            array (
                'id' => '906',
                'nome' => 'Aragoiânia',
                'estado_id' => '9',
            ),
            406 => 
            array (
                'id' => '907',
                'nome' => 'Araguapaz',
                'estado_id' => '9',
            ),
            407 => 
            array (
                'id' => '908',
                'nome' => 'Arenópolis',
                'estado_id' => '9',
            ),
            408 => 
            array (
                'id' => '909',
                'nome' => 'Aruanã',
                'estado_id' => '9',
            ),
            409 => 
            array (
                'id' => '910',
                'nome' => 'Aurilândia',
                'estado_id' => '9',
            ),
            410 => 
            array (
                'id' => '911',
                'nome' => 'Avelinópolis',
                'estado_id' => '9',
            ),
            411 => 
            array (
                'id' => '912',
                'nome' => 'Baliza',
                'estado_id' => '9',
            ),
            412 => 
            array (
                'id' => '913',
                'nome' => 'Barro Alto',
                'estado_id' => '9',
            ),
            413 => 
            array (
                'id' => '914',
                'nome' => 'Bela Vista de Goiás',
                'estado_id' => '9',
            ),
            414 => 
            array (
                'id' => '915',
                'nome' => 'Bom Jardim de Goiás',
                'estado_id' => '9',
            ),
            415 => 
            array (
                'id' => '916',
                'nome' => 'Bom Jesus de Goiás',
                'estado_id' => '9',
            ),
            416 => 
            array (
                'id' => '917',
                'nome' => 'Bonfinópolis',
                'estado_id' => '9',
            ),
            417 => 
            array (
                'id' => '918',
                'nome' => 'Bonópolis',
                'estado_id' => '9',
            ),
            418 => 
            array (
                'id' => '919',
                'nome' => 'Brazabrantes',
                'estado_id' => '9',
            ),
            419 => 
            array (
                'id' => '920',
                'nome' => 'Britânia',
                'estado_id' => '9',
            ),
            420 => 
            array (
                'id' => '921',
                'nome' => 'Buriti Alegre',
                'estado_id' => '9',
            ),
            421 => 
            array (
                'id' => '922',
                'nome' => 'Buriti de Goiás',
                'estado_id' => '9',
            ),
            422 => 
            array (
                'id' => '923',
                'nome' => 'Buritinópolis',
                'estado_id' => '9',
            ),
            423 => 
            array (
                'id' => '924',
                'nome' => 'Cabeceiras',
                'estado_id' => '9',
            ),
            424 => 
            array (
                'id' => '925',
                'nome' => 'Cachoeira Alta',
                'estado_id' => '9',
            ),
            425 => 
            array (
                'id' => '926',
                'nome' => 'Cachoeira de Goiás',
                'estado_id' => '9',
            ),
            426 => 
            array (
                'id' => '927',
                'nome' => 'Cachoeira Dourada',
                'estado_id' => '9',
            ),
            427 => 
            array (
                'id' => '928',
                'nome' => 'Caçu',
                'estado_id' => '9',
            ),
            428 => 
            array (
                'id' => '929',
                'nome' => 'Caiapônia',
                'estado_id' => '9',
            ),
            429 => 
            array (
                'id' => '930',
                'nome' => 'Caldas Novas',
                'estado_id' => '9',
            ),
            430 => 
            array (
                'id' => '931',
                'nome' => 'Caldazinha',
                'estado_id' => '9',
            ),
            431 => 
            array (
                'id' => '932',
                'nome' => 'Campestre de Goiás',
                'estado_id' => '9',
            ),
            432 => 
            array (
                'id' => '933',
                'nome' => 'Campinaçu',
                'estado_id' => '9',
            ),
            433 => 
            array (
                'id' => '934',
                'nome' => 'Campinorte',
                'estado_id' => '9',
            ),
            434 => 
            array (
                'id' => '935',
                'nome' => 'Campo Alegre de Goiás',
                'estado_id' => '9',
            ),
            435 => 
            array (
                'id' => '936',
                'nome' => 'Campo Limpo de Goiás',
                'estado_id' => '9',
            ),
            436 => 
            array (
                'id' => '937',
                'nome' => 'Campos Belos',
                'estado_id' => '9',
            ),
            437 => 
            array (
                'id' => '938',
                'nome' => 'Campos Verdes',
                'estado_id' => '9',
            ),
            438 => 
            array (
                'id' => '939',
                'nome' => 'Carmo do Rio Verde',
                'estado_id' => '9',
            ),
            439 => 
            array (
                'id' => '940',
                'nome' => 'Castelândia',
                'estado_id' => '9',
            ),
            440 => 
            array (
                'id' => '941',
                'nome' => 'Catalão',
                'estado_id' => '9',
            ),
            441 => 
            array (
                'id' => '942',
                'nome' => 'Caturaí',
                'estado_id' => '9',
            ),
            442 => 
            array (
                'id' => '943',
                'nome' => 'Cavalcante',
                'estado_id' => '9',
            ),
            443 => 
            array (
                'id' => '944',
                'nome' => 'Ceres',
                'estado_id' => '9',
            ),
            444 => 
            array (
                'id' => '945',
                'nome' => 'Cezarina',
                'estado_id' => '9',
            ),
            445 => 
            array (
                'id' => '946',
                'nome' => 'Chapadão do Céu',
                'estado_id' => '9',
            ),
            446 => 
            array (
                'id' => '947',
                'nome' => 'Cidade Ocidental',
                'estado_id' => '9',
            ),
            447 => 
            array (
                'id' => '948',
                'nome' => 'Cocalzinho de Goiás',
                'estado_id' => '9',
            ),
            448 => 
            array (
                'id' => '949',
                'nome' => 'Colinas do Sul',
                'estado_id' => '9',
            ),
            449 => 
            array (
                'id' => '950',
                'nome' => 'Córrego do Ouro',
                'estado_id' => '9',
            ),
            450 => 
            array (
                'id' => '951',
                'nome' => 'Corumbá de Goiás',
                'estado_id' => '9',
            ),
            451 => 
            array (
                'id' => '952',
                'nome' => 'Corumbaíba',
                'estado_id' => '9',
            ),
            452 => 
            array (
                'id' => '953',
                'nome' => 'Cristalina',
                'estado_id' => '9',
            ),
            453 => 
            array (
                'id' => '954',
                'nome' => 'Cristianópolis',
                'estado_id' => '9',
            ),
            454 => 
            array (
                'id' => '955',
                'nome' => 'Crixás',
                'estado_id' => '9',
            ),
            455 => 
            array (
                'id' => '956',
                'nome' => 'Cromínia',
                'estado_id' => '9',
            ),
            456 => 
            array (
                'id' => '957',
                'nome' => 'Cumari',
                'estado_id' => '9',
            ),
            457 => 
            array (
                'id' => '958',
                'nome' => 'Damianópolis',
                'estado_id' => '9',
            ),
            458 => 
            array (
                'id' => '959',
                'nome' => 'Damolândia',
                'estado_id' => '9',
            ),
            459 => 
            array (
                'id' => '960',
                'nome' => 'Davinópolis',
                'estado_id' => '9',
            ),
            460 => 
            array (
                'id' => '961',
                'nome' => 'Diorama',
                'estado_id' => '9',
            ),
            461 => 
            array (
                'id' => '962',
                'nome' => 'Divinópolis de Goiás',
                'estado_id' => '9',
            ),
            462 => 
            array (
                'id' => '963',
                'nome' => 'Doverlândia',
                'estado_id' => '9',
            ),
            463 => 
            array (
                'id' => '964',
                'nome' => 'Edealina',
                'estado_id' => '9',
            ),
            464 => 
            array (
                'id' => '965',
                'nome' => 'Edéia',
                'estado_id' => '9',
            ),
            465 => 
            array (
                'id' => '966',
                'nome' => 'Estrela do Norte',
                'estado_id' => '9',
            ),
            466 => 
            array (
                'id' => '967',
                'nome' => 'Faina',
                'estado_id' => '9',
            ),
            467 => 
            array (
                'id' => '968',
                'nome' => 'Fazenda Nova',
                'estado_id' => '9',
            ),
            468 => 
            array (
                'id' => '969',
                'nome' => 'Firminópolis',
                'estado_id' => '9',
            ),
            469 => 
            array (
                'id' => '970',
                'nome' => 'Flores de Goiás',
                'estado_id' => '9',
            ),
            470 => 
            array (
                'id' => '971',
                'nome' => 'Formosa',
                'estado_id' => '9',
            ),
            471 => 
            array (
                'id' => '972',
                'nome' => 'Formoso',
                'estado_id' => '9',
            ),
            472 => 
            array (
                'id' => '973',
                'nome' => 'Gameleira de Goiás',
                'estado_id' => '9',
            ),
            473 => 
            array (
                'id' => '974',
                'nome' => 'Goianápolis',
                'estado_id' => '9',
            ),
            474 => 
            array (
                'id' => '975',
                'nome' => 'Goiandira',
                'estado_id' => '9',
            ),
            475 => 
            array (
                'id' => '976',
                'nome' => 'Goianésia',
                'estado_id' => '9',
            ),
            476 => 
            array (
                'id' => '977',
                'nome' => 'Goiânia',
                'estado_id' => '9',
            ),
            477 => 
            array (
                'id' => '978',
                'nome' => 'Goianira',
                'estado_id' => '9',
            ),
            478 => 
            array (
                'id' => '979',
                'nome' => 'Goiás',
                'estado_id' => '9',
            ),
            479 => 
            array (
                'id' => '980',
                'nome' => 'Goiatuba',
                'estado_id' => '9',
            ),
            480 => 
            array (
                'id' => '981',
                'nome' => 'Gouvelândia',
                'estado_id' => '9',
            ),
            481 => 
            array (
                'id' => '982',
                'nome' => 'Guapó',
                'estado_id' => '9',
            ),
            482 => 
            array (
                'id' => '983',
                'nome' => 'Guaraíta',
                'estado_id' => '9',
            ),
            483 => 
            array (
                'id' => '984',
                'nome' => 'Guarani de Goiás',
                'estado_id' => '9',
            ),
            484 => 
            array (
                'id' => '985',
                'nome' => 'Guarinos',
                'estado_id' => '9',
            ),
            485 => 
            array (
                'id' => '986',
                'nome' => 'Heitoraí',
                'estado_id' => '9',
            ),
            486 => 
            array (
                'id' => '987',
                'nome' => 'Hidrolândia',
                'estado_id' => '9',
            ),
            487 => 
            array (
                'id' => '988',
                'nome' => 'Hidrolina',
                'estado_id' => '9',
            ),
            488 => 
            array (
                'id' => '989',
                'nome' => 'Iaciara',
                'estado_id' => '9',
            ),
            489 => 
            array (
                'id' => '990',
                'nome' => 'Inaciolândia',
                'estado_id' => '9',
            ),
            490 => 
            array (
                'id' => '991',
                'nome' => 'Indiara',
                'estado_id' => '9',
            ),
            491 => 
            array (
                'id' => '992',
                'nome' => 'Inhumas',
                'estado_id' => '9',
            ),
            492 => 
            array (
                'id' => '993',
                'nome' => 'Ipameri',
                'estado_id' => '9',
            ),
            493 => 
            array (
                'id' => '994',
                'nome' => 'Ipiranga de Goiás',
                'estado_id' => '9',
            ),
            494 => 
            array (
                'id' => '995',
                'nome' => 'Iporá',
                'estado_id' => '9',
            ),
            495 => 
            array (
                'id' => '996',
                'nome' => 'Israelândia',
                'estado_id' => '9',
            ),
            496 => 
            array (
                'id' => '997',
                'nome' => 'Itaberaí',
                'estado_id' => '9',
            ),
            497 => 
            array (
                'id' => '998',
                'nome' => 'Itaguari',
                'estado_id' => '9',
            ),
            498 => 
            array (
                'id' => '999',
                'nome' => 'Itaguaru',
                'estado_id' => '9',
            ),
            499 => 
            array (
                'id' => '1000',
                'nome' => 'Itajá',
                'estado_id' => '9',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '1001',
                'nome' => 'Itapaci',
                'estado_id' => '9',
            ),
            1 => 
            array (
                'id' => '1002',
                'nome' => 'Itapirapuã',
                'estado_id' => '9',
            ),
            2 => 
            array (
                'id' => '1003',
                'nome' => 'Itapuranga',
                'estado_id' => '9',
            ),
            3 => 
            array (
                'id' => '1004',
                'nome' => 'Itarumã',
                'estado_id' => '9',
            ),
            4 => 
            array (
                'id' => '1005',
                'nome' => 'Itauçu',
                'estado_id' => '9',
            ),
            5 => 
            array (
                'id' => '1006',
                'nome' => 'Itumbiara',
                'estado_id' => '9',
            ),
            6 => 
            array (
                'id' => '1007',
                'nome' => 'Ivolândia',
                'estado_id' => '9',
            ),
            7 => 
            array (
                'id' => '1008',
                'nome' => 'Jandaia',
                'estado_id' => '9',
            ),
            8 => 
            array (
                'id' => '1009',
                'nome' => 'Jaraguá',
                'estado_id' => '9',
            ),
            9 => 
            array (
                'id' => '1010',
                'nome' => 'Jataí',
                'estado_id' => '9',
            ),
            10 => 
            array (
                'id' => '1011',
                'nome' => 'Jaupaci',
                'estado_id' => '9',
            ),
            11 => 
            array (
                'id' => '1012',
                'nome' => 'Jesúpolis',
                'estado_id' => '9',
            ),
            12 => 
            array (
                'id' => '1013',
                'nome' => 'Joviânia',
                'estado_id' => '9',
            ),
            13 => 
            array (
                'id' => '1014',
                'nome' => 'Jussara',
                'estado_id' => '9',
            ),
            14 => 
            array (
                'id' => '1015',
                'nome' => 'Lagoa Santa',
                'estado_id' => '9',
            ),
            15 => 
            array (
                'id' => '1016',
                'nome' => 'Leopoldo de Bulhões',
                'estado_id' => '9',
            ),
            16 => 
            array (
                'id' => '1017',
                'nome' => 'Luziânia',
                'estado_id' => '9',
            ),
            17 => 
            array (
                'id' => '1018',
                'nome' => 'Mairipotaba',
                'estado_id' => '9',
            ),
            18 => 
            array (
                'id' => '1019',
                'nome' => 'Mambaí',
                'estado_id' => '9',
            ),
            19 => 
            array (
                'id' => '1020',
                'nome' => 'Mara Rosa',
                'estado_id' => '9',
            ),
            20 => 
            array (
                'id' => '1021',
                'nome' => 'Marzagão',
                'estado_id' => '9',
            ),
            21 => 
            array (
                'id' => '1022',
                'nome' => 'Matrinchã',
                'estado_id' => '9',
            ),
            22 => 
            array (
                'id' => '1023',
                'nome' => 'Maurilândia',
                'estado_id' => '9',
            ),
            23 => 
            array (
                'id' => '1024',
                'nome' => 'Mimoso de Goiás',
                'estado_id' => '9',
            ),
            24 => 
            array (
                'id' => '1025',
                'nome' => 'Minaçu',
                'estado_id' => '9',
            ),
            25 => 
            array (
                'id' => '1026',
                'nome' => 'Mineiros',
                'estado_id' => '9',
            ),
            26 => 
            array (
                'id' => '1027',
                'nome' => 'Moiporá',
                'estado_id' => '9',
            ),
            27 => 
            array (
                'id' => '1028',
                'nome' => 'Monte Alegre de Goiás',
                'estado_id' => '9',
            ),
            28 => 
            array (
                'id' => '1029',
                'nome' => 'Montes Claros de Goiás',
                'estado_id' => '9',
            ),
            29 => 
            array (
                'id' => '1030',
                'nome' => 'Montividiu',
                'estado_id' => '9',
            ),
            30 => 
            array (
                'id' => '1031',
                'nome' => 'Montividiu do Norte',
                'estado_id' => '9',
            ),
            31 => 
            array (
                'id' => '1032',
                'nome' => 'Morrinhos',
                'estado_id' => '9',
            ),
            32 => 
            array (
                'id' => '1033',
                'nome' => 'Morro Agudo de Goiás',
                'estado_id' => '9',
            ),
            33 => 
            array (
                'id' => '1034',
                'nome' => 'Mossâmedes',
                'estado_id' => '9',
            ),
            34 => 
            array (
                'id' => '1035',
                'nome' => 'Mozarlândia',
                'estado_id' => '9',
            ),
            35 => 
            array (
                'id' => '1036',
                'nome' => 'Mundo Novo',
                'estado_id' => '9',
            ),
            36 => 
            array (
                'id' => '1037',
                'nome' => 'Mutunópolis',
                'estado_id' => '9',
            ),
            37 => 
            array (
                'id' => '1038',
                'nome' => 'Nazário',
                'estado_id' => '9',
            ),
            38 => 
            array (
                'id' => '1039',
                'nome' => 'Nerópolis',
                'estado_id' => '9',
            ),
            39 => 
            array (
                'id' => '1040',
                'nome' => 'Niquelândia',
                'estado_id' => '9',
            ),
            40 => 
            array (
                'id' => '1041',
                'nome' => 'Nova América',
                'estado_id' => '9',
            ),
            41 => 
            array (
                'id' => '1042',
                'nome' => 'Nova Aurora',
                'estado_id' => '9',
            ),
            42 => 
            array (
                'id' => '1043',
                'nome' => 'Nova Crixás',
                'estado_id' => '9',
            ),
            43 => 
            array (
                'id' => '1044',
                'nome' => 'Nova Glória',
                'estado_id' => '9',
            ),
            44 => 
            array (
                'id' => '1045',
                'nome' => 'Nova Iguaçu de Goiás',
                'estado_id' => '9',
            ),
            45 => 
            array (
                'id' => '1046',
                'nome' => 'Nova Roma',
                'estado_id' => '9',
            ),
            46 => 
            array (
                'id' => '1047',
                'nome' => 'Nova Veneza',
                'estado_id' => '9',
            ),
            47 => 
            array (
                'id' => '1048',
                'nome' => 'Novo Brasil',
                'estado_id' => '9',
            ),
            48 => 
            array (
                'id' => '1049',
                'nome' => 'Novo Gama',
                'estado_id' => '9',
            ),
            49 => 
            array (
                'id' => '1050',
                'nome' => 'Novo Planalto',
                'estado_id' => '9',
            ),
            50 => 
            array (
                'id' => '1051',
                'nome' => 'Orizona',
                'estado_id' => '9',
            ),
            51 => 
            array (
                'id' => '1052',
                'nome' => 'Ouro Verde de Goiás',
                'estado_id' => '9',
            ),
            52 => 
            array (
                'id' => '1053',
                'nome' => 'Ouvidor',
                'estado_id' => '9',
            ),
            53 => 
            array (
                'id' => '1054',
                'nome' => 'Padre Bernardo',
                'estado_id' => '9',
            ),
            54 => 
            array (
                'id' => '1055',
                'nome' => 'Palestina de Goiás',
                'estado_id' => '9',
            ),
            55 => 
            array (
                'id' => '1056',
                'nome' => 'Palmeiras de Goiás',
                'estado_id' => '9',
            ),
            56 => 
            array (
                'id' => '1057',
                'nome' => 'Palmelo',
                'estado_id' => '9',
            ),
            57 => 
            array (
                'id' => '1058',
                'nome' => 'Palminópolis',
                'estado_id' => '9',
            ),
            58 => 
            array (
                'id' => '1059',
                'nome' => 'Panamá',
                'estado_id' => '9',
            ),
            59 => 
            array (
                'id' => '1060',
                'nome' => 'Paranaiguara',
                'estado_id' => '9',
            ),
            60 => 
            array (
                'id' => '1061',
                'nome' => 'Paraúna',
                'estado_id' => '9',
            ),
            61 => 
            array (
                'id' => '1062',
                'nome' => 'Perolândia',
                'estado_id' => '9',
            ),
            62 => 
            array (
                'id' => '1063',
                'nome' => 'Petrolina de Goiás',
                'estado_id' => '9',
            ),
            63 => 
            array (
                'id' => '1064',
                'nome' => 'Pilar de Goiás',
                'estado_id' => '9',
            ),
            64 => 
            array (
                'id' => '1065',
                'nome' => 'Piracanjuba',
                'estado_id' => '9',
            ),
            65 => 
            array (
                'id' => '1066',
                'nome' => 'Piranhas',
                'estado_id' => '9',
            ),
            66 => 
            array (
                'id' => '1067',
                'nome' => 'Pirenópolis',
                'estado_id' => '9',
            ),
            67 => 
            array (
                'id' => '1068',
                'nome' => 'Pires do Rio',
                'estado_id' => '9',
            ),
            68 => 
            array (
                'id' => '1069',
                'nome' => 'Planaltina',
                'estado_id' => '9',
            ),
            69 => 
            array (
                'id' => '1070',
                'nome' => 'Pontalina',
                'estado_id' => '9',
            ),
            70 => 
            array (
                'id' => '1071',
                'nome' => 'Porangatu',
                'estado_id' => '9',
            ),
            71 => 
            array (
                'id' => '1072',
                'nome' => 'Porteirão',
                'estado_id' => '9',
            ),
            72 => 
            array (
                'id' => '1073',
                'nome' => 'Portelândia',
                'estado_id' => '9',
            ),
            73 => 
            array (
                'id' => '1074',
                'nome' => 'Posse',
                'estado_id' => '9',
            ),
            74 => 
            array (
                'id' => '1075',
                'nome' => 'Professor Jamil',
                'estado_id' => '9',
            ),
            75 => 
            array (
                'id' => '1076',
                'nome' => 'Quirinópolis',
                'estado_id' => '9',
            ),
            76 => 
            array (
                'id' => '1077',
                'nome' => 'Rialma',
                'estado_id' => '9',
            ),
            77 => 
            array (
                'id' => '1078',
                'nome' => 'Rianápolis',
                'estado_id' => '9',
            ),
            78 => 
            array (
                'id' => '1079',
                'nome' => 'Rio Quente',
                'estado_id' => '9',
            ),
            79 => 
            array (
                'id' => '1080',
                'nome' => 'Rio Verde',
                'estado_id' => '9',
            ),
            80 => 
            array (
                'id' => '1081',
                'nome' => 'Rubiataba',
                'estado_id' => '9',
            ),
            81 => 
            array (
                'id' => '1082',
                'nome' => 'Sanclerlândia',
                'estado_id' => '9',
            ),
            82 => 
            array (
                'id' => '1083',
                'nome' => 'Santa Bárbara de Goiás',
                'estado_id' => '9',
            ),
            83 => 
            array (
                'id' => '1084',
                'nome' => 'Santa Cruz de Goiás',
                'estado_id' => '9',
            ),
            84 => 
            array (
                'id' => '1085',
                'nome' => 'Santa Fé de Goiás',
                'estado_id' => '9',
            ),
            85 => 
            array (
                'id' => '1086',
                'nome' => 'Santa Helena de Goiás',
                'estado_id' => '9',
            ),
            86 => 
            array (
                'id' => '1087',
                'nome' => 'Santa Isabel',
                'estado_id' => '9',
            ),
            87 => 
            array (
                'id' => '1088',
                'nome' => 'Santa Rita do Araguaia',
                'estado_id' => '9',
            ),
            88 => 
            array (
                'id' => '1089',
                'nome' => 'Santa Rita do Novo Destino',
                'estado_id' => '9',
            ),
            89 => 
            array (
                'id' => '1090',
                'nome' => 'Santa Rosa de Goiás',
                'estado_id' => '9',
            ),
            90 => 
            array (
                'id' => '1091',
                'nome' => 'Santa Tereza de Goiás',
                'estado_id' => '9',
            ),
            91 => 
            array (
                'id' => '1092',
                'nome' => 'Santa Terezinha de Goiás',
                'estado_id' => '9',
            ),
            92 => 
            array (
                'id' => '1093',
                'nome' => 'Santo Antônio da Barra',
                'estado_id' => '9',
            ),
            93 => 
            array (
                'id' => '1094',
                'nome' => 'Santo Antônio de Goiás',
                'estado_id' => '9',
            ),
            94 => 
            array (
                'id' => '1095',
                'nome' => 'Santo Antônio do Descoberto',
                'estado_id' => '9',
            ),
            95 => 
            array (
                'id' => '1096',
                'nome' => 'São Domingos',
                'estado_id' => '9',
            ),
            96 => 
            array (
                'id' => '1097',
                'nome' => 'São Francisco de Goiás',
                'estado_id' => '9',
            ),
            97 => 
            array (
                'id' => '1098',
                'nome' => 'São João d`Aliança',
                'estado_id' => '9',
            ),
            98 => 
            array (
                'id' => '1099',
                'nome' => 'São João da Paraúna',
                'estado_id' => '9',
            ),
            99 => 
            array (
                'id' => '1100',
                'nome' => 'São Luís de Montes Belos',
                'estado_id' => '9',
            ),
            100 => 
            array (
                'id' => '1101',
                'nome' => 'São Luíz do Norte',
                'estado_id' => '9',
            ),
            101 => 
            array (
                'id' => '1102',
                'nome' => 'São Miguel do Araguaia',
                'estado_id' => '9',
            ),
            102 => 
            array (
                'id' => '1103',
                'nome' => 'São Miguel do Passa Quatro',
                'estado_id' => '9',
            ),
            103 => 
            array (
                'id' => '1104',
                'nome' => 'São Patrício',
                'estado_id' => '9',
            ),
            104 => 
            array (
                'id' => '1105',
                'nome' => 'São Simão',
                'estado_id' => '9',
            ),
            105 => 
            array (
                'id' => '1106',
                'nome' => 'Senador Canedo',
                'estado_id' => '9',
            ),
            106 => 
            array (
                'id' => '1107',
                'nome' => 'Serranópolis',
                'estado_id' => '9',
            ),
            107 => 
            array (
                'id' => '1108',
                'nome' => 'Silvânia',
                'estado_id' => '9',
            ),
            108 => 
            array (
                'id' => '1109',
                'nome' => 'Simolândia',
                'estado_id' => '9',
            ),
            109 => 
            array (
                'id' => '1110',
                'nome' => 'Sítio d`Abadia',
                'estado_id' => '9',
            ),
            110 => 
            array (
                'id' => '1111',
                'nome' => 'Taquaral de Goiás',
                'estado_id' => '9',
            ),
            111 => 
            array (
                'id' => '1112',
                'nome' => 'Teresina de Goiás',
                'estado_id' => '9',
            ),
            112 => 
            array (
                'id' => '1113',
                'nome' => 'Terezópolis de Goiás',
                'estado_id' => '9',
            ),
            113 => 
            array (
                'id' => '1114',
                'nome' => 'Três Ranchos',
                'estado_id' => '9',
            ),
            114 => 
            array (
                'id' => '1115',
                'nome' => 'Trindade',
                'estado_id' => '9',
            ),
            115 => 
            array (
                'id' => '1116',
                'nome' => 'Trombas',
                'estado_id' => '9',
            ),
            116 => 
            array (
                'id' => '1117',
                'nome' => 'Turvânia',
                'estado_id' => '9',
            ),
            117 => 
            array (
                'id' => '1118',
                'nome' => 'Turvelândia',
                'estado_id' => '9',
            ),
            118 => 
            array (
                'id' => '1119',
                'nome' => 'Uirapuru',
                'estado_id' => '9',
            ),
            119 => 
            array (
                'id' => '1120',
                'nome' => 'Uruaçu',
                'estado_id' => '9',
            ),
            120 => 
            array (
                'id' => '1121',
                'nome' => 'Uruana',
                'estado_id' => '9',
            ),
            121 => 
            array (
                'id' => '1122',
                'nome' => 'Urutaí',
                'estado_id' => '9',
            ),
            122 => 
            array (
                'id' => '1123',
                'nome' => 'Valparaíso de Goiás',
                'estado_id' => '9',
            ),
            123 => 
            array (
                'id' => '1124',
                'nome' => 'Varjão',
                'estado_id' => '9',
            ),
            124 => 
            array (
                'id' => '1125',
                'nome' => 'Vianópolis',
                'estado_id' => '9',
            ),
            125 => 
            array (
                'id' => '1126',
                'nome' => 'Vicentinópolis',
                'estado_id' => '9',
            ),
            126 => 
            array (
                'id' => '1127',
                'nome' => 'Vila Boa',
                'estado_id' => '9',
            ),
            127 => 
            array (
                'id' => '1128',
                'nome' => 'Vila Propício',
                'estado_id' => '9',
            ),
            128 => 
            array (
                'id' => '1129',
                'nome' => 'Açailândia',
                'estado_id' => '10',
            ),
            129 => 
            array (
                'id' => '1130',
                'nome' => 'Afonso Cunha',
                'estado_id' => '10',
            ),
            130 => 
            array (
                'id' => '1131',
                'nome' => 'Água Doce do Maranhão',
                'estado_id' => '10',
            ),
            131 => 
            array (
                'id' => '1132',
                'nome' => 'Alcântara',
                'estado_id' => '10',
            ),
            132 => 
            array (
                'id' => '1133',
                'nome' => 'Aldeias Altas',
                'estado_id' => '10',
            ),
            133 => 
            array (
                'id' => '1134',
                'nome' => 'Altamira do Maranhão',
                'estado_id' => '10',
            ),
            134 => 
            array (
                'id' => '1135',
                'nome' => 'Alto Alegre do Maranhão',
                'estado_id' => '10',
            ),
            135 => 
            array (
                'id' => '1136',
                'nome' => 'Alto Alegre do Pindaré',
                'estado_id' => '10',
            ),
            136 => 
            array (
                'id' => '1137',
                'nome' => 'Alto Parnaíba',
                'estado_id' => '10',
            ),
            137 => 
            array (
                'id' => '1138',
                'nome' => 'Amapá do Maranhão',
                'estado_id' => '10',
            ),
            138 => 
            array (
                'id' => '1139',
                'nome' => 'Amarante do Maranhão',
                'estado_id' => '10',
            ),
            139 => 
            array (
                'id' => '1140',
                'nome' => 'Anajatuba',
                'estado_id' => '10',
            ),
            140 => 
            array (
                'id' => '1141',
                'nome' => 'Anapurus',
                'estado_id' => '10',
            ),
            141 => 
            array (
                'id' => '1142',
                'nome' => 'Apicum-Açu',
                'estado_id' => '10',
            ),
            142 => 
            array (
                'id' => '1143',
                'nome' => 'Araguanã',
                'estado_id' => '10',
            ),
            143 => 
            array (
                'id' => '1144',
                'nome' => 'Araioses',
                'estado_id' => '10',
            ),
            144 => 
            array (
                'id' => '1145',
                'nome' => 'Arame',
                'estado_id' => '10',
            ),
            145 => 
            array (
                'id' => '1146',
                'nome' => 'Arari',
                'estado_id' => '10',
            ),
            146 => 
            array (
                'id' => '1147',
                'nome' => 'Axixá',
                'estado_id' => '10',
            ),
            147 => 
            array (
                'id' => '1148',
                'nome' => 'Bacabal',
                'estado_id' => '10',
            ),
            148 => 
            array (
                'id' => '1149',
                'nome' => 'Bacabeira',
                'estado_id' => '10',
            ),
            149 => 
            array (
                'id' => '1150',
                'nome' => 'Bacuri',
                'estado_id' => '10',
            ),
            150 => 
            array (
                'id' => '1151',
                'nome' => 'Bacurituba',
                'estado_id' => '10',
            ),
            151 => 
            array (
                'id' => '1152',
                'nome' => 'Balsas',
                'estado_id' => '10',
            ),
            152 => 
            array (
                'id' => '1153',
                'nome' => 'Barão de Grajaú',
                'estado_id' => '10',
            ),
            153 => 
            array (
                'id' => '1154',
                'nome' => 'Barra do Corda',
                'estado_id' => '10',
            ),
            154 => 
            array (
                'id' => '1155',
                'nome' => 'Barreirinhas',
                'estado_id' => '10',
            ),
            155 => 
            array (
                'id' => '1156',
                'nome' => 'Bela Vista do Maranhão',
                'estado_id' => '10',
            ),
            156 => 
            array (
                'id' => '1157',
                'nome' => 'Belágua',
                'estado_id' => '10',
            ),
            157 => 
            array (
                'id' => '1158',
                'nome' => 'Benedito Leite',
                'estado_id' => '10',
            ),
            158 => 
            array (
                'id' => '1159',
                'nome' => 'Bequimão',
                'estado_id' => '10',
            ),
            159 => 
            array (
                'id' => '1160',
                'nome' => 'Bernardo do Mearim',
                'estado_id' => '10',
            ),
            160 => 
            array (
                'id' => '1161',
                'nome' => 'Boa Vista do Gurupi',
                'estado_id' => '10',
            ),
            161 => 
            array (
                'id' => '1162',
                'nome' => 'Bom Jardim',
                'estado_id' => '10',
            ),
            162 => 
            array (
                'id' => '1163',
                'nome' => 'Bom Jesus das Selvas',
                'estado_id' => '10',
            ),
            163 => 
            array (
                'id' => '1164',
                'nome' => 'Bom Lugar',
                'estado_id' => '10',
            ),
            164 => 
            array (
                'id' => '1165',
                'nome' => 'Brejo',
                'estado_id' => '10',
            ),
            165 => 
            array (
                'id' => '1166',
                'nome' => 'Brejo de Areia',
                'estado_id' => '10',
            ),
            166 => 
            array (
                'id' => '1167',
                'nome' => 'Buriti',
                'estado_id' => '10',
            ),
            167 => 
            array (
                'id' => '1168',
                'nome' => 'Buriti Bravo',
                'estado_id' => '10',
            ),
            168 => 
            array (
                'id' => '1169',
                'nome' => 'Buriticupu',
                'estado_id' => '10',
            ),
            169 => 
            array (
                'id' => '1170',
                'nome' => 'Buritirana',
                'estado_id' => '10',
            ),
            170 => 
            array (
                'id' => '1171',
                'nome' => 'Cachoeira Grande',
                'estado_id' => '10',
            ),
            171 => 
            array (
                'id' => '1172',
                'nome' => 'Cajapió',
                'estado_id' => '10',
            ),
            172 => 
            array (
                'id' => '1173',
                'nome' => 'Cajari',
                'estado_id' => '10',
            ),
            173 => 
            array (
                'id' => '1174',
                'nome' => 'Campestre do Maranhão',
                'estado_id' => '10',
            ),
            174 => 
            array (
                'id' => '1175',
                'nome' => 'Cândido Mendes',
                'estado_id' => '10',
            ),
            175 => 
            array (
                'id' => '1176',
                'nome' => 'Cantanhede',
                'estado_id' => '10',
            ),
            176 => 
            array (
                'id' => '1177',
                'nome' => 'Capinzal do Norte',
                'estado_id' => '10',
            ),
            177 => 
            array (
                'id' => '1178',
                'nome' => 'Carolina',
                'estado_id' => '10',
            ),
            178 => 
            array (
                'id' => '1179',
                'nome' => 'Carutapera',
                'estado_id' => '10',
            ),
            179 => 
            array (
                'id' => '1180',
                'nome' => 'Caxias',
                'estado_id' => '10',
            ),
            180 => 
            array (
                'id' => '1181',
                'nome' => 'Cedral',
                'estado_id' => '10',
            ),
            181 => 
            array (
                'id' => '1182',
                'nome' => 'Central do Maranhão',
                'estado_id' => '10',
            ),
            182 => 
            array (
                'id' => '1183',
                'nome' => 'Centro do Guilherme',
                'estado_id' => '10',
            ),
            183 => 
            array (
                'id' => '1184',
                'nome' => 'Centro Novo do Maranhão',
                'estado_id' => '10',
            ),
            184 => 
            array (
                'id' => '1185',
                'nome' => 'Chapadinha',
                'estado_id' => '10',
            ),
            185 => 
            array (
                'id' => '1186',
                'nome' => 'Cidelândia',
                'estado_id' => '10',
            ),
            186 => 
            array (
                'id' => '1187',
                'nome' => 'Codó',
                'estado_id' => '10',
            ),
            187 => 
            array (
                'id' => '1188',
                'nome' => 'Coelho Neto',
                'estado_id' => '10',
            ),
            188 => 
            array (
                'id' => '1189',
                'nome' => 'Colinas',
                'estado_id' => '10',
            ),
            189 => 
            array (
                'id' => '1190',
                'nome' => 'Conceição do Lago-Açu',
                'estado_id' => '10',
            ),
            190 => 
            array (
                'id' => '1191',
                'nome' => 'Coroatá',
                'estado_id' => '10',
            ),
            191 => 
            array (
                'id' => '1192',
                'nome' => 'Cururupu',
                'estado_id' => '10',
            ),
            192 => 
            array (
                'id' => '1193',
                'nome' => 'Davinópolis',
                'estado_id' => '10',
            ),
            193 => 
            array (
                'id' => '1194',
                'nome' => 'Dom Pedro',
                'estado_id' => '10',
            ),
            194 => 
            array (
                'id' => '1195',
                'nome' => 'Duque Bacelar',
                'estado_id' => '10',
            ),
            195 => 
            array (
                'id' => '1196',
                'nome' => 'Esperantinópolis',
                'estado_id' => '10',
            ),
            196 => 
            array (
                'id' => '1197',
                'nome' => 'Estreito',
                'estado_id' => '10',
            ),
            197 => 
            array (
                'id' => '1198',
                'nome' => 'Feira Nova do Maranhão',
                'estado_id' => '10',
            ),
            198 => 
            array (
                'id' => '1199',
                'nome' => 'Fernando Falcão',
                'estado_id' => '10',
            ),
            199 => 
            array (
                'id' => '1200',
                'nome' => 'Formosa da Serra Negra',
                'estado_id' => '10',
            ),
            200 => 
            array (
                'id' => '1201',
                'nome' => 'Fortaleza dos Nogueiras',
                'estado_id' => '10',
            ),
            201 => 
            array (
                'id' => '1202',
                'nome' => 'Fortuna',
                'estado_id' => '10',
            ),
            202 => 
            array (
                'id' => '1203',
                'nome' => 'Godofredo Viana',
                'estado_id' => '10',
            ),
            203 => 
            array (
                'id' => '1204',
                'nome' => 'Gonçalves Dias',
                'estado_id' => '10',
            ),
            204 => 
            array (
                'id' => '1205',
                'nome' => 'Governador Archer',
                'estado_id' => '10',
            ),
            205 => 
            array (
                'id' => '1206',
                'nome' => 'Governador Edison Lobão',
                'estado_id' => '10',
            ),
            206 => 
            array (
                'id' => '1207',
                'nome' => 'Governador Eugênio Barros',
                'estado_id' => '10',
            ),
            207 => 
            array (
                'id' => '1208',
                'nome' => 'Governador Luiz Rocha',
                'estado_id' => '10',
            ),
            208 => 
            array (
                'id' => '1209',
                'nome' => 'Governador Newton Bello',
                'estado_id' => '10',
            ),
            209 => 
            array (
                'id' => '1210',
                'nome' => 'Governador Nunes Freire',
                'estado_id' => '10',
            ),
            210 => 
            array (
                'id' => '1211',
                'nome' => 'Graça Aranha',
                'estado_id' => '10',
            ),
            211 => 
            array (
                'id' => '1212',
                'nome' => 'Grajaú',
                'estado_id' => '10',
            ),
            212 => 
            array (
                'id' => '1213',
                'nome' => 'Guimarães',
                'estado_id' => '10',
            ),
            213 => 
            array (
                'id' => '1214',
                'nome' => 'Humberto de Campos',
                'estado_id' => '10',
            ),
            214 => 
            array (
                'id' => '1215',
                'nome' => 'Icatu',
                'estado_id' => '10',
            ),
            215 => 
            array (
                'id' => '1216',
                'nome' => 'Igarapé do Meio',
                'estado_id' => '10',
            ),
            216 => 
            array (
                'id' => '1217',
                'nome' => 'Igarapé Grande',
                'estado_id' => '10',
            ),
            217 => 
            array (
                'id' => '1218',
                'nome' => 'Imperatriz',
                'estado_id' => '10',
            ),
            218 => 
            array (
                'id' => '1219',
                'nome' => 'Itaipava do Grajaú',
                'estado_id' => '10',
            ),
            219 => 
            array (
                'id' => '1220',
                'nome' => 'Itapecuru Mirim',
                'estado_id' => '10',
            ),
            220 => 
            array (
                'id' => '1221',
                'nome' => 'Itinga do Maranhão',
                'estado_id' => '10',
            ),
            221 => 
            array (
                'id' => '1222',
                'nome' => 'Jatobá',
                'estado_id' => '10',
            ),
            222 => 
            array (
                'id' => '1223',
                'nome' => 'Jenipapo dos Vieiras',
                'estado_id' => '10',
            ),
            223 => 
            array (
                'id' => '1224',
                'nome' => 'João Lisboa',
                'estado_id' => '10',
            ),
            224 => 
            array (
                'id' => '1225',
                'nome' => 'Joselândia',
                'estado_id' => '10',
            ),
            225 => 
            array (
                'id' => '1226',
                'nome' => 'Junco do Maranhão',
                'estado_id' => '10',
            ),
            226 => 
            array (
                'id' => '1227',
                'nome' => 'Lago da Pedra',
                'estado_id' => '10',
            ),
            227 => 
            array (
                'id' => '1228',
                'nome' => 'Lago do Junco',
                'estado_id' => '10',
            ),
            228 => 
            array (
                'id' => '1229',
                'nome' => 'Lago dos Rodrigues',
                'estado_id' => '10',
            ),
            229 => 
            array (
                'id' => '1230',
                'nome' => 'Lago Verde',
                'estado_id' => '10',
            ),
            230 => 
            array (
                'id' => '1231',
                'nome' => 'Lagoa do Mato',
                'estado_id' => '10',
            ),
            231 => 
            array (
                'id' => '1232',
                'nome' => 'Lagoa Grande do Maranhão',
                'estado_id' => '10',
            ),
            232 => 
            array (
                'id' => '1233',
                'nome' => 'Lajeado Novo',
                'estado_id' => '10',
            ),
            233 => 
            array (
                'id' => '1234',
                'nome' => 'Lima Campos',
                'estado_id' => '10',
            ),
            234 => 
            array (
                'id' => '1235',
                'nome' => 'Loreto',
                'estado_id' => '10',
            ),
            235 => 
            array (
                'id' => '1236',
                'nome' => 'Luís Domingues',
                'estado_id' => '10',
            ),
            236 => 
            array (
                'id' => '1237',
                'nome' => 'Magalhães de Almeida',
                'estado_id' => '10',
            ),
            237 => 
            array (
                'id' => '1238',
                'nome' => 'Maracaçumé',
                'estado_id' => '10',
            ),
            238 => 
            array (
                'id' => '1239',
                'nome' => 'Marajá do Sena',
                'estado_id' => '10',
            ),
            239 => 
            array (
                'id' => '1240',
                'nome' => 'Maranhãozinho',
                'estado_id' => '10',
            ),
            240 => 
            array (
                'id' => '1241',
                'nome' => 'Mata Roma',
                'estado_id' => '10',
            ),
            241 => 
            array (
                'id' => '1242',
                'nome' => 'Matinha',
                'estado_id' => '10',
            ),
            242 => 
            array (
                'id' => '1243',
                'nome' => 'Matões',
                'estado_id' => '10',
            ),
            243 => 
            array (
                'id' => '1244',
                'nome' => 'Matões do Norte',
                'estado_id' => '10',
            ),
            244 => 
            array (
                'id' => '1245',
                'nome' => 'Milagres do Maranhão',
                'estado_id' => '10',
            ),
            245 => 
            array (
                'id' => '1246',
                'nome' => 'Mirador',
                'estado_id' => '10',
            ),
            246 => 
            array (
                'id' => '1247',
                'nome' => 'Miranda do Norte',
                'estado_id' => '10',
            ),
            247 => 
            array (
                'id' => '1248',
                'nome' => 'Mirinzal',
                'estado_id' => '10',
            ),
            248 => 
            array (
                'id' => '1249',
                'nome' => 'Monção',
                'estado_id' => '10',
            ),
            249 => 
            array (
                'id' => '1250',
                'nome' => 'Montes Altos',
                'estado_id' => '10',
            ),
            250 => 
            array (
                'id' => '1251',
                'nome' => 'Morros',
                'estado_id' => '10',
            ),
            251 => 
            array (
                'id' => '1252',
                'nome' => 'Nina Rodrigues',
                'estado_id' => '10',
            ),
            252 => 
            array (
                'id' => '1253',
                'nome' => 'Nova Colinas',
                'estado_id' => '10',
            ),
            253 => 
            array (
                'id' => '1254',
                'nome' => 'Nova Iorque',
                'estado_id' => '10',
            ),
            254 => 
            array (
                'id' => '1255',
                'nome' => 'Nova Olinda do Maranhão',
                'estado_id' => '10',
            ),
            255 => 
            array (
                'id' => '1256',
                'nome' => 'Olho d`Água das Cunhãs',
                'estado_id' => '10',
            ),
            256 => 
            array (
                'id' => '1257',
                'nome' => 'Olinda Nova do Maranhão',
                'estado_id' => '10',
            ),
            257 => 
            array (
                'id' => '1258',
                'nome' => 'Paço do Lumiar',
                'estado_id' => '10',
            ),
            258 => 
            array (
                'id' => '1259',
                'nome' => 'Palmeirândia',
                'estado_id' => '10',
            ),
            259 => 
            array (
                'id' => '1260',
                'nome' => 'Paraibano',
                'estado_id' => '10',
            ),
            260 => 
            array (
                'id' => '1261',
                'nome' => 'Parnarama',
                'estado_id' => '10',
            ),
            261 => 
            array (
                'id' => '1262',
                'nome' => 'Passagem Franca',
                'estado_id' => '10',
            ),
            262 => 
            array (
                'id' => '1263',
                'nome' => 'Pastos Bons',
                'estado_id' => '10',
            ),
            263 => 
            array (
                'id' => '1264',
                'nome' => 'Paulino Neves',
                'estado_id' => '10',
            ),
            264 => 
            array (
                'id' => '1265',
                'nome' => 'Paulo Ramos',
                'estado_id' => '10',
            ),
            265 => 
            array (
                'id' => '1266',
                'nome' => 'Pedreiras',
                'estado_id' => '10',
            ),
            266 => 
            array (
                'id' => '1267',
                'nome' => 'Pedro do Rosário',
                'estado_id' => '10',
            ),
            267 => 
            array (
                'id' => '1268',
                'nome' => 'Penalva',
                'estado_id' => '10',
            ),
            268 => 
            array (
                'id' => '1269',
                'nome' => 'Peri Mirim',
                'estado_id' => '10',
            ),
            269 => 
            array (
                'id' => '1270',
                'nome' => 'Peritoró',
                'estado_id' => '10',
            ),
            270 => 
            array (
                'id' => '1271',
                'nome' => 'Pindaré-Mirim',
                'estado_id' => '10',
            ),
            271 => 
            array (
                'id' => '1272',
                'nome' => 'Pinheiro',
                'estado_id' => '10',
            ),
            272 => 
            array (
                'id' => '1273',
                'nome' => 'Pio XII',
                'estado_id' => '10',
            ),
            273 => 
            array (
                'id' => '1274',
                'nome' => 'Pirapemas',
                'estado_id' => '10',
            ),
            274 => 
            array (
                'id' => '1275',
                'nome' => 'Poção de Pedras',
                'estado_id' => '10',
            ),
            275 => 
            array (
                'id' => '1276',
                'nome' => 'Porto Franco',
                'estado_id' => '10',
            ),
            276 => 
            array (
                'id' => '1277',
                'nome' => 'Porto Rico do Maranhão',
                'estado_id' => '10',
            ),
            277 => 
            array (
                'id' => '1278',
                'nome' => 'Presidente Dutra',
                'estado_id' => '10',
            ),
            278 => 
            array (
                'id' => '1279',
                'nome' => 'Presidente Juscelino',
                'estado_id' => '10',
            ),
            279 => 
            array (
                'id' => '1280',
                'nome' => 'Presidente Médici',
                'estado_id' => '10',
            ),
            280 => 
            array (
                'id' => '1281',
                'nome' => 'Presidente Sarney',
                'estado_id' => '10',
            ),
            281 => 
            array (
                'id' => '1282',
                'nome' => 'Presidente Vargas',
                'estado_id' => '10',
            ),
            282 => 
            array (
                'id' => '1283',
                'nome' => 'Primeira Cruz',
                'estado_id' => '10',
            ),
            283 => 
            array (
                'id' => '1284',
                'nome' => 'Raposa',
                'estado_id' => '10',
            ),
            284 => 
            array (
                'id' => '1285',
                'nome' => 'Riachão',
                'estado_id' => '10',
            ),
            285 => 
            array (
                'id' => '1286',
                'nome' => 'Ribamar Fiquene',
                'estado_id' => '10',
            ),
            286 => 
            array (
                'id' => '1287',
                'nome' => 'Rosário',
                'estado_id' => '10',
            ),
            287 => 
            array (
                'id' => '1288',
                'nome' => 'Sambaíba',
                'estado_id' => '10',
            ),
            288 => 
            array (
                'id' => '1289',
                'nome' => 'Santa Filomena do Maranhão',
                'estado_id' => '10',
            ),
            289 => 
            array (
                'id' => '1290',
                'nome' => 'Santa Helena',
                'estado_id' => '10',
            ),
            290 => 
            array (
                'id' => '1291',
                'nome' => 'Santa Inês',
                'estado_id' => '10',
            ),
            291 => 
            array (
                'id' => '1292',
                'nome' => 'Santa Luzia',
                'estado_id' => '10',
            ),
            292 => 
            array (
                'id' => '1293',
                'nome' => 'Santa Luzia do Paruá',
                'estado_id' => '10',
            ),
            293 => 
            array (
                'id' => '1294',
                'nome' => 'Santa Quitéria do Maranhão',
                'estado_id' => '10',
            ),
            294 => 
            array (
                'id' => '1295',
                'nome' => 'Santa Rita',
                'estado_id' => '10',
            ),
            295 => 
            array (
                'id' => '1296',
                'nome' => 'Santana do Maranhão',
                'estado_id' => '10',
            ),
            296 => 
            array (
                'id' => '1297',
                'nome' => 'Santo Amaro do Maranhão',
                'estado_id' => '10',
            ),
            297 => 
            array (
                'id' => '1298',
                'nome' => 'Santo Antônio dos Lopes',
                'estado_id' => '10',
            ),
            298 => 
            array (
                'id' => '1299',
                'nome' => 'São Benedito do Rio Preto',
                'estado_id' => '10',
            ),
            299 => 
            array (
                'id' => '1300',
                'nome' => 'São Bento',
                'estado_id' => '10',
            ),
            300 => 
            array (
                'id' => '1301',
                'nome' => 'São Bernardo',
                'estado_id' => '10',
            ),
            301 => 
            array (
                'id' => '1302',
                'nome' => 'São Domingos do Azeitão',
                'estado_id' => '10',
            ),
            302 => 
            array (
                'id' => '1303',
                'nome' => 'São Domingos do Maranhão',
                'estado_id' => '10',
            ),
            303 => 
            array (
                'id' => '1304',
                'nome' => 'São Félix de Balsas',
                'estado_id' => '10',
            ),
            304 => 
            array (
                'id' => '1305',
                'nome' => 'São Francisco do Brejão',
                'estado_id' => '10',
            ),
            305 => 
            array (
                'id' => '1306',
                'nome' => 'São Francisco do Maranhão',
                'estado_id' => '10',
            ),
            306 => 
            array (
                'id' => '1307',
                'nome' => 'São João Batista',
                'estado_id' => '10',
            ),
            307 => 
            array (
                'id' => '1308',
                'nome' => 'São João do Carú',
                'estado_id' => '10',
            ),
            308 => 
            array (
                'id' => '1309',
                'nome' => 'São João do Paraíso',
                'estado_id' => '10',
            ),
            309 => 
            array (
                'id' => '1310',
                'nome' => 'São João do Soter',
                'estado_id' => '10',
            ),
            310 => 
            array (
                'id' => '1311',
                'nome' => 'São João dos Patos',
                'estado_id' => '10',
            ),
            311 => 
            array (
                'id' => '1312',
                'nome' => 'São José de Ribamar',
                'estado_id' => '10',
            ),
            312 => 
            array (
                'id' => '1313',
                'nome' => 'São José dos Basílios',
                'estado_id' => '10',
            ),
            313 => 
            array (
                'id' => '1314',
                'nome' => 'São Luís',
                'estado_id' => '10',
            ),
            314 => 
            array (
                'id' => '1315',
                'nome' => 'São Luís Gonzaga do Maranhão',
                'estado_id' => '10',
            ),
            315 => 
            array (
                'id' => '1316',
                'nome' => 'São Mateus do Maranhão',
                'estado_id' => '10',
            ),
            316 => 
            array (
                'id' => '1317',
                'nome' => 'São Pedro da Água Branca',
                'estado_id' => '10',
            ),
            317 => 
            array (
                'id' => '1318',
                'nome' => 'São Pedro dos Crentes',
                'estado_id' => '10',
            ),
            318 => 
            array (
                'id' => '1319',
                'nome' => 'São Raimundo das Mangabeiras',
                'estado_id' => '10',
            ),
            319 => 
            array (
                'id' => '1320',
                'nome' => 'São Raimundo do Doca Bezerra',
                'estado_id' => '10',
            ),
            320 => 
            array (
                'id' => '1321',
                'nome' => 'São Roberto',
                'estado_id' => '10',
            ),
            321 => 
            array (
                'id' => '1322',
                'nome' => 'São Vicente Ferrer',
                'estado_id' => '10',
            ),
            322 => 
            array (
                'id' => '1323',
                'nome' => 'Satubinha',
                'estado_id' => '10',
            ),
            323 => 
            array (
                'id' => '1324',
                'nome' => 'Senador Alexandre Costa',
                'estado_id' => '10',
            ),
            324 => 
            array (
                'id' => '1325',
                'nome' => 'Senador La Rocque',
                'estado_id' => '10',
            ),
            325 => 
            array (
                'id' => '1326',
                'nome' => 'Serrano do Maranhão',
                'estado_id' => '10',
            ),
            326 => 
            array (
                'id' => '1327',
                'nome' => 'Sítio Novo',
                'estado_id' => '10',
            ),
            327 => 
            array (
                'id' => '1328',
                'nome' => 'Sucupira do Norte',
                'estado_id' => '10',
            ),
            328 => 
            array (
                'id' => '1329',
                'nome' => 'Sucupira do Riachão',
                'estado_id' => '10',
            ),
            329 => 
            array (
                'id' => '1330',
                'nome' => 'Tasso Fragoso',
                'estado_id' => '10',
            ),
            330 => 
            array (
                'id' => '1331',
                'nome' => 'Timbiras',
                'estado_id' => '10',
            ),
            331 => 
            array (
                'id' => '1332',
                'nome' => 'Timon',
                'estado_id' => '10',
            ),
            332 => 
            array (
                'id' => '1333',
                'nome' => 'Trizidela do Vale',
                'estado_id' => '10',
            ),
            333 => 
            array (
                'id' => '1334',
                'nome' => 'Tufilândia',
                'estado_id' => '10',
            ),
            334 => 
            array (
                'id' => '1335',
                'nome' => 'Tuntum',
                'estado_id' => '10',
            ),
            335 => 
            array (
                'id' => '1336',
                'nome' => 'Turiaçu',
                'estado_id' => '10',
            ),
            336 => 
            array (
                'id' => '1337',
                'nome' => 'Turilândia',
                'estado_id' => '10',
            ),
            337 => 
            array (
                'id' => '1338',
                'nome' => 'Tutóia',
                'estado_id' => '10',
            ),
            338 => 
            array (
                'id' => '1339',
                'nome' => 'Urbano Santos',
                'estado_id' => '10',
            ),
            339 => 
            array (
                'id' => '1340',
                'nome' => 'Vargem Grande',
                'estado_id' => '10',
            ),
            340 => 
            array (
                'id' => '1341',
                'nome' => 'Viana',
                'estado_id' => '10',
            ),
            341 => 
            array (
                'id' => '1342',
                'nome' => 'Vila Nova dos Martírios',
                'estado_id' => '10',
            ),
            342 => 
            array (
                'id' => '1343',
                'nome' => 'Vitória do Mearim',
                'estado_id' => '10',
            ),
            343 => 
            array (
                'id' => '1344',
                'nome' => 'Vitorino Freire',
                'estado_id' => '10',
            ),
            344 => 
            array (
                'id' => '1345',
                'nome' => 'Zé Doca',
                'estado_id' => '10',
            ),
            345 => 
            array (
                'id' => '1346',
                'nome' => 'Acorizal',
                'estado_id' => '13',
            ),
            346 => 
            array (
                'id' => '1347',
                'nome' => 'Água Boa',
                'estado_id' => '13',
            ),
            347 => 
            array (
                'id' => '1348',
                'nome' => 'Alta Floresta',
                'estado_id' => '13',
            ),
            348 => 
            array (
                'id' => '1349',
                'nome' => 'Alto Araguaia',
                'estado_id' => '13',
            ),
            349 => 
            array (
                'id' => '1350',
                'nome' => 'Alto Boa Vista',
                'estado_id' => '13',
            ),
            350 => 
            array (
                'id' => '1351',
                'nome' => 'Alto Garças',
                'estado_id' => '13',
            ),
            351 => 
            array (
                'id' => '1352',
                'nome' => 'Alto Paraguai',
                'estado_id' => '13',
            ),
            352 => 
            array (
                'id' => '1353',
                'nome' => 'Alto Taquari',
                'estado_id' => '13',
            ),
            353 => 
            array (
                'id' => '1354',
                'nome' => 'Apiacás',
                'estado_id' => '13',
            ),
            354 => 
            array (
                'id' => '1355',
                'nome' => 'Araguaiana',
                'estado_id' => '13',
            ),
            355 => 
            array (
                'id' => '1356',
                'nome' => 'Araguainha',
                'estado_id' => '13',
            ),
            356 => 
            array (
                'id' => '1357',
                'nome' => 'Araputanga',
                'estado_id' => '13',
            ),
            357 => 
            array (
                'id' => '1358',
                'nome' => 'Arenápolis',
                'estado_id' => '13',
            ),
            358 => 
            array (
                'id' => '1359',
                'nome' => 'Aripuanã',
                'estado_id' => '13',
            ),
            359 => 
            array (
                'id' => '1360',
                'nome' => 'Barão de Melgaço',
                'estado_id' => '13',
            ),
            360 => 
            array (
                'id' => '1361',
                'nome' => 'Barra do Bugres',
                'estado_id' => '13',
            ),
            361 => 
            array (
                'id' => '1362',
                'nome' => 'Barra do Garças',
                'estado_id' => '13',
            ),
            362 => 
            array (
                'id' => '1363',
                'nome' => 'Bom Jesus do Araguaia',
                'estado_id' => '13',
            ),
            363 => 
            array (
                'id' => '1364',
                'nome' => 'Brasnorte',
                'estado_id' => '13',
            ),
            364 => 
            array (
                'id' => '1365',
                'nome' => 'Cáceres',
                'estado_id' => '13',
            ),
            365 => 
            array (
                'id' => '1366',
                'nome' => 'Campinápolis',
                'estado_id' => '13',
            ),
            366 => 
            array (
                'id' => '1367',
                'nome' => 'Campo Novo do Parecis',
                'estado_id' => '13',
            ),
            367 => 
            array (
                'id' => '1368',
                'nome' => 'Campo Verde',
                'estado_id' => '13',
            ),
            368 => 
            array (
                'id' => '1369',
                'nome' => 'Campos de Júlio',
                'estado_id' => '13',
            ),
            369 => 
            array (
                'id' => '1370',
                'nome' => 'Canabrava do Norte',
                'estado_id' => '13',
            ),
            370 => 
            array (
                'id' => '1371',
                'nome' => 'Canarana',
                'estado_id' => '13',
            ),
            371 => 
            array (
                'id' => '1372',
                'nome' => 'Carlinda',
                'estado_id' => '13',
            ),
            372 => 
            array (
                'id' => '1373',
                'nome' => 'Castanheira',
                'estado_id' => '13',
            ),
            373 => 
            array (
                'id' => '1374',
                'nome' => 'Chapada dos Guimarães',
                'estado_id' => '13',
            ),
            374 => 
            array (
                'id' => '1375',
                'nome' => 'Cláudia',
                'estado_id' => '13',
            ),
            375 => 
            array (
                'id' => '1376',
                'nome' => 'Cocalinho',
                'estado_id' => '13',
            ),
            376 => 
            array (
                'id' => '1377',
                'nome' => 'Colíder',
                'estado_id' => '13',
            ),
            377 => 
            array (
                'id' => '1378',
                'nome' => 'Colniza',
                'estado_id' => '13',
            ),
            378 => 
            array (
                'id' => '1379',
                'nome' => 'Comodoro',
                'estado_id' => '13',
            ),
            379 => 
            array (
                'id' => '1380',
                'nome' => 'Confresa',
                'estado_id' => '13',
            ),
            380 => 
            array (
                'id' => '1381',
                'nome' => 'Conquista d`Oeste',
                'estado_id' => '13',
            ),
            381 => 
            array (
                'id' => '1382',
                'nome' => 'Cotriguaçu',
                'estado_id' => '13',
            ),
            382 => 
            array (
                'id' => '1383',
                'nome' => 'Cuiabá',
                'estado_id' => '13',
            ),
            383 => 
            array (
                'id' => '1384',
                'nome' => 'Curvelândia',
                'estado_id' => '13',
            ),
            384 => 
            array (
                'id' => '1385',
                'nome' => 'Curvelândia',
                'estado_id' => '13',
            ),
            385 => 
            array (
                'id' => '1386',
                'nome' => 'Denise',
                'estado_id' => '13',
            ),
            386 => 
            array (
                'id' => '1387',
                'nome' => 'Diamantino',
                'estado_id' => '13',
            ),
            387 => 
            array (
                'id' => '1388',
                'nome' => 'Dom Aquino',
                'estado_id' => '13',
            ),
            388 => 
            array (
                'id' => '1389',
                'nome' => 'Feliz Natal',
                'estado_id' => '13',
            ),
            389 => 
            array (
                'id' => '1390',
                'nome' => 'Figueirópolis d`Oeste',
                'estado_id' => '13',
            ),
            390 => 
            array (
                'id' => '1391',
                'nome' => 'Gaúcha do Norte',
                'estado_id' => '13',
            ),
            391 => 
            array (
                'id' => '1392',
                'nome' => 'General Carneiro',
                'estado_id' => '13',
            ),
            392 => 
            array (
                'id' => '1393',
                'nome' => 'Glória d`Oeste',
                'estado_id' => '13',
            ),
            393 => 
            array (
                'id' => '1394',
                'nome' => 'Guarantã do Norte',
                'estado_id' => '13',
            ),
            394 => 
            array (
                'id' => '1395',
                'nome' => 'Guiratinga',
                'estado_id' => '13',
            ),
            395 => 
            array (
                'id' => '1396',
                'nome' => 'Indiavaí',
                'estado_id' => '13',
            ),
            396 => 
            array (
                'id' => '1397',
                'nome' => 'Ipiranga do Norte',
                'estado_id' => '13',
            ),
            397 => 
            array (
                'id' => '1398',
                'nome' => 'Itanhangá',
                'estado_id' => '13',
            ),
            398 => 
            array (
                'id' => '1399',
                'nome' => 'Itaúba',
                'estado_id' => '13',
            ),
            399 => 
            array (
                'id' => '1400',
                'nome' => 'Itiquira',
                'estado_id' => '13',
            ),
            400 => 
            array (
                'id' => '1401',
                'nome' => 'Jaciara',
                'estado_id' => '13',
            ),
            401 => 
            array (
                'id' => '1402',
                'nome' => 'Jangada',
                'estado_id' => '13',
            ),
            402 => 
            array (
                'id' => '1403',
                'nome' => 'Jauru',
                'estado_id' => '13',
            ),
            403 => 
            array (
                'id' => '1404',
                'nome' => 'Juara',
                'estado_id' => '13',
            ),
            404 => 
            array (
                'id' => '1405',
                'nome' => 'Juína',
                'estado_id' => '13',
            ),
            405 => 
            array (
                'id' => '1406',
                'nome' => 'Juruena',
                'estado_id' => '13',
            ),
            406 => 
            array (
                'id' => '1407',
                'nome' => 'Juscimeira',
                'estado_id' => '13',
            ),
            407 => 
            array (
                'id' => '1408',
                'nome' => 'Lambari d`Oeste',
                'estado_id' => '13',
            ),
            408 => 
            array (
                'id' => '1409',
                'nome' => 'Lucas do Rio Verde',
                'estado_id' => '13',
            ),
            409 => 
            array (
                'id' => '1410',
                'nome' => 'Luciára',
                'estado_id' => '13',
            ),
            410 => 
            array (
                'id' => '1411',
                'nome' => 'Marcelândia',
                'estado_id' => '13',
            ),
            411 => 
            array (
                'id' => '1412',
                'nome' => 'Matupá',
                'estado_id' => '13',
            ),
            412 => 
            array (
                'id' => '1413',
                'nome' => 'Mirassol d`Oeste',
                'estado_id' => '13',
            ),
            413 => 
            array (
                'id' => '1414',
                'nome' => 'Nobres',
                'estado_id' => '13',
            ),
            414 => 
            array (
                'id' => '1415',
                'nome' => 'Nortelândia',
                'estado_id' => '13',
            ),
            415 => 
            array (
                'id' => '1416',
                'nome' => 'Nossa Senhora do Livramento',
                'estado_id' => '13',
            ),
            416 => 
            array (
                'id' => '1417',
                'nome' => 'Nova Bandeirantes',
                'estado_id' => '13',
            ),
            417 => 
            array (
                'id' => '1418',
                'nome' => 'Nova Brasilândia',
                'estado_id' => '13',
            ),
            418 => 
            array (
                'id' => '1419',
                'nome' => 'Nova Canaã do Norte',
                'estado_id' => '13',
            ),
            419 => 
            array (
                'id' => '1420',
                'nome' => 'Nova Guarita',
                'estado_id' => '13',
            ),
            420 => 
            array (
                'id' => '1421',
                'nome' => 'Nova Lacerda',
                'estado_id' => '13',
            ),
            421 => 
            array (
                'id' => '1422',
                'nome' => 'Nova Marilândia',
                'estado_id' => '13',
            ),
            422 => 
            array (
                'id' => '1423',
                'nome' => 'Nova Maringá',
                'estado_id' => '13',
            ),
            423 => 
            array (
                'id' => '1424',
                'nome' => 'Nova Monte verde',
                'estado_id' => '13',
            ),
            424 => 
            array (
                'id' => '1425',
                'nome' => 'Nova Mutum',
                'estado_id' => '13',
            ),
            425 => 
            array (
                'id' => '1426',
                'nome' => 'Nova Olímpia',
                'estado_id' => '13',
            ),
            426 => 
            array (
                'id' => '1427',
                'nome' => 'Nova Santa Helena',
                'estado_id' => '13',
            ),
            427 => 
            array (
                'id' => '1428',
                'nome' => 'Nova Ubiratã',
                'estado_id' => '13',
            ),
            428 => 
            array (
                'id' => '1429',
                'nome' => 'Nova Xavantina',
                'estado_id' => '13',
            ),
            429 => 
            array (
                'id' => '1430',
                'nome' => 'Novo Horizonte do Norte',
                'estado_id' => '13',
            ),
            430 => 
            array (
                'id' => '1431',
                'nome' => 'Novo Mundo',
                'estado_id' => '13',
            ),
            431 => 
            array (
                'id' => '1432',
                'nome' => 'Novo Santo Antônio',
                'estado_id' => '13',
            ),
            432 => 
            array (
                'id' => '1433',
                'nome' => 'Novo São Joaquim',
                'estado_id' => '13',
            ),
            433 => 
            array (
                'id' => '1434',
                'nome' => 'Paranaíta',
                'estado_id' => '13',
            ),
            434 => 
            array (
                'id' => '1435',
                'nome' => 'Paranatinga',
                'estado_id' => '13',
            ),
            435 => 
            array (
                'id' => '1436',
                'nome' => 'Pedra Preta',
                'estado_id' => '13',
            ),
            436 => 
            array (
                'id' => '1437',
                'nome' => 'Peixoto de Azevedo',
                'estado_id' => '13',
            ),
            437 => 
            array (
                'id' => '1438',
                'nome' => 'Planalto da Serra',
                'estado_id' => '13',
            ),
            438 => 
            array (
                'id' => '1439',
                'nome' => 'Poconé',
                'estado_id' => '13',
            ),
            439 => 
            array (
                'id' => '1440',
                'nome' => 'Pontal do Araguaia',
                'estado_id' => '13',
            ),
            440 => 
            array (
                'id' => '1441',
                'nome' => 'Ponte Branca',
                'estado_id' => '13',
            ),
            441 => 
            array (
                'id' => '1442',
                'nome' => 'Pontes e Lacerda',
                'estado_id' => '13',
            ),
            442 => 
            array (
                'id' => '1443',
                'nome' => 'Porto Alegre do Norte',
                'estado_id' => '13',
            ),
            443 => 
            array (
                'id' => '1444',
                'nome' => 'Porto dos Gaúchos',
                'estado_id' => '13',
            ),
            444 => 
            array (
                'id' => '1445',
                'nome' => 'Porto Esperidião',
                'estado_id' => '13',
            ),
            445 => 
            array (
                'id' => '1446',
                'nome' => 'Porto Estrela',
                'estado_id' => '13',
            ),
            446 => 
            array (
                'id' => '1447',
                'nome' => 'Poxoréo',
                'estado_id' => '13',
            ),
            447 => 
            array (
                'id' => '1448',
                'nome' => 'Primavera do Leste',
                'estado_id' => '13',
            ),
            448 => 
            array (
                'id' => '1449',
                'nome' => 'Querência',
                'estado_id' => '13',
            ),
            449 => 
            array (
                'id' => '1450',
                'nome' => 'Reserva do Cabaçal',
                'estado_id' => '13',
            ),
            450 => 
            array (
                'id' => '1451',
                'nome' => 'Ribeirão Cascalheira',
                'estado_id' => '13',
            ),
            451 => 
            array (
                'id' => '1452',
                'nome' => 'Ribeirãozinho',
                'estado_id' => '13',
            ),
            452 => 
            array (
                'id' => '1453',
                'nome' => 'Rio Branco',
                'estado_id' => '13',
            ),
            453 => 
            array (
                'id' => '1454',
                'nome' => 'Rondolândia',
                'estado_id' => '13',
            ),
            454 => 
            array (
                'id' => '1455',
                'nome' => 'Rondonópolis',
                'estado_id' => '13',
            ),
            455 => 
            array (
                'id' => '1456',
                'nome' => 'Rosário Oeste',
                'estado_id' => '13',
            ),
            456 => 
            array (
                'id' => '1457',
                'nome' => 'Salto do Céu',
                'estado_id' => '13',
            ),
            457 => 
            array (
                'id' => '1458',
                'nome' => 'Santa Carmem',
                'estado_id' => '13',
            ),
            458 => 
            array (
                'id' => '1459',
                'nome' => 'Santa Cruz do Xingu',
                'estado_id' => '13',
            ),
            459 => 
            array (
                'id' => '1460',
                'nome' => 'Santa Rita do Trivelato',
                'estado_id' => '13',
            ),
            460 => 
            array (
                'id' => '1461',
                'nome' => 'Santa Terezinha',
                'estado_id' => '13',
            ),
            461 => 
            array (
                'id' => '1462',
                'nome' => 'Santo Afonso',
                'estado_id' => '13',
            ),
            462 => 
            array (
                'id' => '1463',
                'nome' => 'Santo Antônio do Leste',
                'estado_id' => '13',
            ),
            463 => 
            array (
                'id' => '1464',
                'nome' => 'Santo Antônio do Leverger',
                'estado_id' => '13',
            ),
            464 => 
            array (
                'id' => '1465',
                'nome' => 'São Félix do Araguaia',
                'estado_id' => '13',
            ),
            465 => 
            array (
                'id' => '1466',
                'nome' => 'São José do Povo',
                'estado_id' => '13',
            ),
            466 => 
            array (
                'id' => '1467',
                'nome' => 'São José do Rio Claro',
                'estado_id' => '13',
            ),
            467 => 
            array (
                'id' => '1468',
                'nome' => 'São José do Xingu',
                'estado_id' => '13',
            ),
            468 => 
            array (
                'id' => '1469',
                'nome' => 'São José dos Quatro Marcos',
                'estado_id' => '13',
            ),
            469 => 
            array (
                'id' => '1470',
                'nome' => 'São Pedro da Cipa',
                'estado_id' => '13',
            ),
            470 => 
            array (
                'id' => '1471',
                'nome' => 'Sapezal',
                'estado_id' => '13',
            ),
            471 => 
            array (
                'id' => '1472',
                'nome' => 'Serra Nova Dourada',
                'estado_id' => '13',
            ),
            472 => 
            array (
                'id' => '1473',
                'nome' => 'Sinop',
                'estado_id' => '13',
            ),
            473 => 
            array (
                'id' => '1474',
                'nome' => 'Sorriso',
                'estado_id' => '13',
            ),
            474 => 
            array (
                'id' => '1475',
                'nome' => 'Tabaporã',
                'estado_id' => '13',
            ),
            475 => 
            array (
                'id' => '1476',
                'nome' => 'Tangará da Serra',
                'estado_id' => '13',
            ),
            476 => 
            array (
                'id' => '1477',
                'nome' => 'Tapurah',
                'estado_id' => '13',
            ),
            477 => 
            array (
                'id' => '1478',
                'nome' => 'Terra Nova do Norte',
                'estado_id' => '13',
            ),
            478 => 
            array (
                'id' => '1479',
                'nome' => 'Tesouro',
                'estado_id' => '13',
            ),
            479 => 
            array (
                'id' => '1480',
                'nome' => 'Torixoréu',
                'estado_id' => '13',
            ),
            480 => 
            array (
                'id' => '1481',
                'nome' => 'União do Sul',
                'estado_id' => '13',
            ),
            481 => 
            array (
                'id' => '1482',
                'nome' => 'Vale de São Domingos',
                'estado_id' => '13',
            ),
            482 => 
            array (
                'id' => '1483',
                'nome' => 'Várzea Grande',
                'estado_id' => '13',
            ),
            483 => 
            array (
                'id' => '1484',
                'nome' => 'Vera',
                'estado_id' => '13',
            ),
            484 => 
            array (
                'id' => '1485',
                'nome' => 'Vila Bela da Santíssima Trindade',
                'estado_id' => '13',
            ),
            485 => 
            array (
                'id' => '1486',
                'nome' => 'Vila Rica',
                'estado_id' => '13',
            ),
            486 => 
            array (
                'id' => '1487',
                'nome' => 'Água Clara',
                'estado_id' => '12',
            ),
            487 => 
            array (
                'id' => '1488',
                'nome' => 'Alcinópolis',
                'estado_id' => '12',
            ),
            488 => 
            array (
                'id' => '1489',
                'nome' => 'Amambaí',
                'estado_id' => '12',
            ),
            489 => 
            array (
                'id' => '1490',
                'nome' => 'Anastácio',
                'estado_id' => '12',
            ),
            490 => 
            array (
                'id' => '1491',
                'nome' => 'Anaurilândia',
                'estado_id' => '12',
            ),
            491 => 
            array (
                'id' => '1492',
                'nome' => 'Angélica',
                'estado_id' => '12',
            ),
            492 => 
            array (
                'id' => '1493',
                'nome' => 'Antônio João',
                'estado_id' => '12',
            ),
            493 => 
            array (
                'id' => '1494',
                'nome' => 'Aparecida do Taboado',
                'estado_id' => '12',
            ),
            494 => 
            array (
                'id' => '1495',
                'nome' => 'Aquidauana',
                'estado_id' => '12',
            ),
            495 => 
            array (
                'id' => '1496',
                'nome' => 'Aral Moreira',
                'estado_id' => '12',
            ),
            496 => 
            array (
                'id' => '1497',
                'nome' => 'Bandeirantes',
                'estado_id' => '12',
            ),
            497 => 
            array (
                'id' => '1498',
                'nome' => 'Bataguassu',
                'estado_id' => '12',
            ),
            498 => 
            array (
                'id' => '1499',
                'nome' => 'Bataiporã',
                'estado_id' => '12',
            ),
            499 => 
            array (
                'id' => '1500',
                'nome' => 'Bela Vista',
                'estado_id' => '12',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '1501',
                'nome' => 'Bodoquena',
                'estado_id' => '12',
            ),
            1 => 
            array (
                'id' => '1502',
                'nome' => 'Bonito',
                'estado_id' => '12',
            ),
            2 => 
            array (
                'id' => '1503',
                'nome' => 'Brasilândia',
                'estado_id' => '12',
            ),
            3 => 
            array (
                'id' => '1504',
                'nome' => 'Caarapó',
                'estado_id' => '12',
            ),
            4 => 
            array (
                'id' => '1505',
                'nome' => 'Camapuã',
                'estado_id' => '12',
            ),
            5 => 
            array (
                'id' => '1506',
                'nome' => 'Campo Grande',
                'estado_id' => '12',
            ),
            6 => 
            array (
                'id' => '1507',
                'nome' => 'Caracol',
                'estado_id' => '12',
            ),
            7 => 
            array (
                'id' => '1508',
                'nome' => 'Cassilândia',
                'estado_id' => '12',
            ),
            8 => 
            array (
                'id' => '1509',
                'nome' => 'Chapadão do Sul',
                'estado_id' => '12',
            ),
            9 => 
            array (
                'id' => '1510',
                'nome' => 'Corguinho',
                'estado_id' => '12',
            ),
            10 => 
            array (
                'id' => '1511',
                'nome' => 'Coronel Sapucaia',
                'estado_id' => '12',
            ),
            11 => 
            array (
                'id' => '1512',
                'nome' => 'Corumbá',
                'estado_id' => '12',
            ),
            12 => 
            array (
                'id' => '1513',
                'nome' => 'Costa Rica',
                'estado_id' => '12',
            ),
            13 => 
            array (
                'id' => '1514',
                'nome' => 'Coxim',
                'estado_id' => '12',
            ),
            14 => 
            array (
                'id' => '1515',
                'nome' => 'Deodápolis',
                'estado_id' => '12',
            ),
            15 => 
            array (
                'id' => '1516',
                'nome' => 'Dois Irmãos do Buriti',
                'estado_id' => '12',
            ),
            16 => 
            array (
                'id' => '1517',
                'nome' => 'Douradina',
                'estado_id' => '12',
            ),
            17 => 
            array (
                'id' => '1518',
                'nome' => 'Dourados',
                'estado_id' => '12',
            ),
            18 => 
            array (
                'id' => '1519',
                'nome' => 'Eldorado',
                'estado_id' => '12',
            ),
            19 => 
            array (
                'id' => '1520',
                'nome' => 'Fátima do Sul',
                'estado_id' => '12',
            ),
            20 => 
            array (
                'id' => '1521',
                'nome' => 'Figueirão',
                'estado_id' => '12',
            ),
            21 => 
            array (
                'id' => '1522',
                'nome' => 'Glória de Dourados',
                'estado_id' => '12',
            ),
            22 => 
            array (
                'id' => '1523',
                'nome' => 'Guia Lopes da Laguna',
                'estado_id' => '12',
            ),
            23 => 
            array (
                'id' => '1524',
                'nome' => 'Iguatemi',
                'estado_id' => '12',
            ),
            24 => 
            array (
                'id' => '1525',
                'nome' => 'Inocência',
                'estado_id' => '12',
            ),
            25 => 
            array (
                'id' => '1526',
                'nome' => 'Itaporã',
                'estado_id' => '12',
            ),
            26 => 
            array (
                'id' => '1527',
                'nome' => 'Itaquiraí',
                'estado_id' => '12',
            ),
            27 => 
            array (
                'id' => '1528',
                'nome' => 'Ivinhema',
                'estado_id' => '12',
            ),
            28 => 
            array (
                'id' => '1529',
                'nome' => 'Japorã',
                'estado_id' => '12',
            ),
            29 => 
            array (
                'id' => '1530',
                'nome' => 'Jaraguari',
                'estado_id' => '12',
            ),
            30 => 
            array (
                'id' => '1531',
                'nome' => 'Jardim',
                'estado_id' => '12',
            ),
            31 => 
            array (
                'id' => '1532',
                'nome' => 'Jateí',
                'estado_id' => '12',
            ),
            32 => 
            array (
                'id' => '1533',
                'nome' => 'Juti',
                'estado_id' => '12',
            ),
            33 => 
            array (
                'id' => '1534',
                'nome' => 'Ladário',
                'estado_id' => '12',
            ),
            34 => 
            array (
                'id' => '1535',
                'nome' => 'Laguna Carapã',
                'estado_id' => '12',
            ),
            35 => 
            array (
                'id' => '1536',
                'nome' => 'Maracaju',
                'estado_id' => '12',
            ),
            36 => 
            array (
                'id' => '1537',
                'nome' => 'Miranda',
                'estado_id' => '12',
            ),
            37 => 
            array (
                'id' => '1538',
                'nome' => 'Mundo Novo',
                'estado_id' => '12',
            ),
            38 => 
            array (
                'id' => '1539',
                'nome' => 'Naviraí',
                'estado_id' => '12',
            ),
            39 => 
            array (
                'id' => '1540',
                'nome' => 'Nioaque',
                'estado_id' => '12',
            ),
            40 => 
            array (
                'id' => '1541',
                'nome' => 'Nova Alvorada do Sul',
                'estado_id' => '12',
            ),
            41 => 
            array (
                'id' => '1542',
                'nome' => 'Nova Andradina',
                'estado_id' => '12',
            ),
            42 => 
            array (
                'id' => '1543',
                'nome' => 'Novo Horizonte do Sul',
                'estado_id' => '12',
            ),
            43 => 
            array (
                'id' => '1544',
                'nome' => 'Paranaíba',
                'estado_id' => '12',
            ),
            44 => 
            array (
                'id' => '1545',
                'nome' => 'Paranhos',
                'estado_id' => '12',
            ),
            45 => 
            array (
                'id' => '1546',
                'nome' => 'Pedro Gomes',
                'estado_id' => '12',
            ),
            46 => 
            array (
                'id' => '1547',
                'nome' => 'Ponta Porã',
                'estado_id' => '12',
            ),
            47 => 
            array (
                'id' => '1548',
                'nome' => 'Porto Murtinho',
                'estado_id' => '12',
            ),
            48 => 
            array (
                'id' => '1549',
                'nome' => 'Ribas do Rio Pardo',
                'estado_id' => '12',
            ),
            49 => 
            array (
                'id' => '1550',
                'nome' => 'Rio Brilhante',
                'estado_id' => '12',
            ),
            50 => 
            array (
                'id' => '1551',
                'nome' => 'Rio Negro',
                'estado_id' => '12',
            ),
            51 => 
            array (
                'id' => '1552',
                'nome' => 'Rio Verde de Mato Grosso',
                'estado_id' => '12',
            ),
            52 => 
            array (
                'id' => '1553',
                'nome' => 'Rochedo',
                'estado_id' => '12',
            ),
            53 => 
            array (
                'id' => '1554',
                'nome' => 'Santa Rita do Pardo',
                'estado_id' => '12',
            ),
            54 => 
            array (
                'id' => '1555',
                'nome' => 'São Gabriel do Oeste',
                'estado_id' => '12',
            ),
            55 => 
            array (
                'id' => '1556',
                'nome' => 'Selvíria',
                'estado_id' => '12',
            ),
            56 => 
            array (
                'id' => '1557',
                'nome' => 'Sete Quedas',
                'estado_id' => '12',
            ),
            57 => 
            array (
                'id' => '1558',
                'nome' => 'Sidrolândia',
                'estado_id' => '12',
            ),
            58 => 
            array (
                'id' => '1559',
                'nome' => 'Sonora',
                'estado_id' => '12',
            ),
            59 => 
            array (
                'id' => '1560',
                'nome' => 'Tacuru',
                'estado_id' => '12',
            ),
            60 => 
            array (
                'id' => '1561',
                'nome' => 'Taquarussu',
                'estado_id' => '12',
            ),
            61 => 
            array (
                'id' => '1562',
                'nome' => 'Terenos',
                'estado_id' => '12',
            ),
            62 => 
            array (
                'id' => '1563',
                'nome' => 'Três Lagoas',
                'estado_id' => '12',
            ),
            63 => 
            array (
                'id' => '1564',
                'nome' => 'Vicentina',
                'estado_id' => '12',
            ),
            64 => 
            array (
                'id' => '1565',
                'nome' => 'Abadia dos Dourados',
                'estado_id' => '11',
            ),
            65 => 
            array (
                'id' => '1566',
                'nome' => 'Abaeté',
                'estado_id' => '11',
            ),
            66 => 
            array (
                'id' => '1567',
                'nome' => 'Abre Campo',
                'estado_id' => '11',
            ),
            67 => 
            array (
                'id' => '1568',
                'nome' => 'Acaiaca',
                'estado_id' => '11',
            ),
            68 => 
            array (
                'id' => '1569',
                'nome' => 'Açucena',
                'estado_id' => '11',
            ),
            69 => 
            array (
                'id' => '1570',
                'nome' => 'Água Boa',
                'estado_id' => '11',
            ),
            70 => 
            array (
                'id' => '1571',
                'nome' => 'Água Comprida',
                'estado_id' => '11',
            ),
            71 => 
            array (
                'id' => '1572',
                'nome' => 'Aguanil',
                'estado_id' => '11',
            ),
            72 => 
            array (
                'id' => '1573',
                'nome' => 'Águas Formosas',
                'estado_id' => '11',
            ),
            73 => 
            array (
                'id' => '1574',
                'nome' => 'Águas Vermelhas',
                'estado_id' => '11',
            ),
            74 => 
            array (
                'id' => '1575',
                'nome' => 'Aimorés',
                'estado_id' => '11',
            ),
            75 => 
            array (
                'id' => '1576',
                'nome' => 'Aiuruoca',
                'estado_id' => '11',
            ),
            76 => 
            array (
                'id' => '1577',
                'nome' => 'Alagoa',
                'estado_id' => '11',
            ),
            77 => 
            array (
                'id' => '1578',
                'nome' => 'Albertina',
                'estado_id' => '11',
            ),
            78 => 
            array (
                'id' => '1579',
                'nome' => 'Além Paraíba',
                'estado_id' => '11',
            ),
            79 => 
            array (
                'id' => '1580',
                'nome' => 'Alfenas',
                'estado_id' => '11',
            ),
            80 => 
            array (
                'id' => '1581',
                'nome' => 'Alfredo Vasconcelos',
                'estado_id' => '11',
            ),
            81 => 
            array (
                'id' => '1582',
                'nome' => 'Almenara',
                'estado_id' => '11',
            ),
            82 => 
            array (
                'id' => '1583',
                'nome' => 'Alpercata',
                'estado_id' => '11',
            ),
            83 => 
            array (
                'id' => '1584',
                'nome' => 'Alpinópolis',
                'estado_id' => '11',
            ),
            84 => 
            array (
                'id' => '1585',
                'nome' => 'Alterosa',
                'estado_id' => '11',
            ),
            85 => 
            array (
                'id' => '1586',
                'nome' => 'Alto Caparaó',
                'estado_id' => '11',
            ),
            86 => 
            array (
                'id' => '1587',
                'nome' => 'Alto Jequitibá',
                'estado_id' => '11',
            ),
            87 => 
            array (
                'id' => '1588',
                'nome' => 'Alto Rio Doce',
                'estado_id' => '11',
            ),
            88 => 
            array (
                'id' => '1589',
                'nome' => 'Alvarenga',
                'estado_id' => '11',
            ),
            89 => 
            array (
                'id' => '1590',
                'nome' => 'Alvinópolis',
                'estado_id' => '11',
            ),
            90 => 
            array (
                'id' => '1591',
                'nome' => 'Alvorada de Minas',
                'estado_id' => '11',
            ),
            91 => 
            array (
                'id' => '1592',
                'nome' => 'Amparo do Serra',
                'estado_id' => '11',
            ),
            92 => 
            array (
                'id' => '1593',
                'nome' => 'Andradas',
                'estado_id' => '11',
            ),
            93 => 
            array (
                'id' => '1594',
                'nome' => 'Andrelândia',
                'estado_id' => '11',
            ),
            94 => 
            array (
                'id' => '1595',
                'nome' => 'Angelândia',
                'estado_id' => '11',
            ),
            95 => 
            array (
                'id' => '1596',
                'nome' => 'Antônio Carlos',
                'estado_id' => '11',
            ),
            96 => 
            array (
                'id' => '1597',
                'nome' => 'Antônio Dias',
                'estado_id' => '11',
            ),
            97 => 
            array (
                'id' => '1598',
                'nome' => 'Antônio Prado de Minas',
                'estado_id' => '11',
            ),
            98 => 
            array (
                'id' => '1599',
                'nome' => 'Araçaí',
                'estado_id' => '11',
            ),
            99 => 
            array (
                'id' => '1600',
                'nome' => 'Aracitaba',
                'estado_id' => '11',
            ),
            100 => 
            array (
                'id' => '1601',
                'nome' => 'Araçuaí',
                'estado_id' => '11',
            ),
            101 => 
            array (
                'id' => '1602',
                'nome' => 'Araguari',
                'estado_id' => '11',
            ),
            102 => 
            array (
                'id' => '1603',
                'nome' => 'Arantina',
                'estado_id' => '11',
            ),
            103 => 
            array (
                'id' => '1604',
                'nome' => 'Araponga',
                'estado_id' => '11',
            ),
            104 => 
            array (
                'id' => '1605',
                'nome' => 'Araporã',
                'estado_id' => '11',
            ),
            105 => 
            array (
                'id' => '1606',
                'nome' => 'Arapuá',
                'estado_id' => '11',
            ),
            106 => 
            array (
                'id' => '1607',
                'nome' => 'Araújos',
                'estado_id' => '11',
            ),
            107 => 
            array (
                'id' => '1608',
                'nome' => 'Araxá',
                'estado_id' => '11',
            ),
            108 => 
            array (
                'id' => '1609',
                'nome' => 'Arceburgo',
                'estado_id' => '11',
            ),
            109 => 
            array (
                'id' => '1610',
                'nome' => 'Arcos',
                'estado_id' => '11',
            ),
            110 => 
            array (
                'id' => '1611',
                'nome' => 'Areado',
                'estado_id' => '11',
            ),
            111 => 
            array (
                'id' => '1612',
                'nome' => 'Argirita',
                'estado_id' => '11',
            ),
            112 => 
            array (
                'id' => '1613',
                'nome' => 'Aricanduva',
                'estado_id' => '11',
            ),
            113 => 
            array (
                'id' => '1614',
                'nome' => 'Arinos',
                'estado_id' => '11',
            ),
            114 => 
            array (
                'id' => '1615',
                'nome' => 'Astolfo Dutra',
                'estado_id' => '11',
            ),
            115 => 
            array (
                'id' => '1616',
                'nome' => 'Ataléia',
                'estado_id' => '11',
            ),
            116 => 
            array (
                'id' => '1617',
                'nome' => 'Augusto de Lima',
                'estado_id' => '11',
            ),
            117 => 
            array (
                'id' => '1618',
                'nome' => 'Baependi',
                'estado_id' => '11',
            ),
            118 => 
            array (
                'id' => '1619',
                'nome' => 'Baldim',
                'estado_id' => '11',
            ),
            119 => 
            array (
                'id' => '1620',
                'nome' => 'Bambuí',
                'estado_id' => '11',
            ),
            120 => 
            array (
                'id' => '1621',
                'nome' => 'Bandeira',
                'estado_id' => '11',
            ),
            121 => 
            array (
                'id' => '1622',
                'nome' => 'Bandeira do Sul',
                'estado_id' => '11',
            ),
            122 => 
            array (
                'id' => '1623',
                'nome' => 'Barão de Cocais',
                'estado_id' => '11',
            ),
            123 => 
            array (
                'id' => '1624',
                'nome' => 'Barão de Monte Alto',
                'estado_id' => '11',
            ),
            124 => 
            array (
                'id' => '1625',
                'nome' => 'Barbacena',
                'estado_id' => '11',
            ),
            125 => 
            array (
                'id' => '1626',
                'nome' => 'Barra Longa',
                'estado_id' => '11',
            ),
            126 => 
            array (
                'id' => '1627',
                'nome' => 'Barroso',
                'estado_id' => '11',
            ),
            127 => 
            array (
                'id' => '1628',
                'nome' => 'Bela Vista de Minas',
                'estado_id' => '11',
            ),
            128 => 
            array (
                'id' => '1629',
                'nome' => 'Belmiro Braga',
                'estado_id' => '11',
            ),
            129 => 
            array (
                'id' => '1630',
                'nome' => 'Belo Horizonte',
                'estado_id' => '11',
            ),
            130 => 
            array (
                'id' => '1631',
                'nome' => 'Belo Oriente',
                'estado_id' => '11',
            ),
            131 => 
            array (
                'id' => '1632',
                'nome' => 'Belo Vale',
                'estado_id' => '11',
            ),
            132 => 
            array (
                'id' => '1633',
                'nome' => 'Berilo',
                'estado_id' => '11',
            ),
            133 => 
            array (
                'id' => '1634',
                'nome' => 'Berizal',
                'estado_id' => '11',
            ),
            134 => 
            array (
                'id' => '1635',
                'nome' => 'Bertópolis',
                'estado_id' => '11',
            ),
            135 => 
            array (
                'id' => '1636',
                'nome' => 'Betim',
                'estado_id' => '11',
            ),
            136 => 
            array (
                'id' => '1637',
                'nome' => 'Bias Fortes',
                'estado_id' => '11',
            ),
            137 => 
            array (
                'id' => '1638',
                'nome' => 'Bicas',
                'estado_id' => '11',
            ),
            138 => 
            array (
                'id' => '1639',
                'nome' => 'Biquinhas',
                'estado_id' => '11',
            ),
            139 => 
            array (
                'id' => '1640',
                'nome' => 'Boa Esperança',
                'estado_id' => '11',
            ),
            140 => 
            array (
                'id' => '1641',
                'nome' => 'Bocaina de Minas',
                'estado_id' => '11',
            ),
            141 => 
            array (
                'id' => '1642',
                'nome' => 'Bocaiúva',
                'estado_id' => '11',
            ),
            142 => 
            array (
                'id' => '1643',
                'nome' => 'Bom Despacho',
                'estado_id' => '11',
            ),
            143 => 
            array (
                'id' => '1644',
                'nome' => 'Bom Jardim de Minas',
                'estado_id' => '11',
            ),
            144 => 
            array (
                'id' => '1645',
                'nome' => 'Bom Jesus da Penha',
                'estado_id' => '11',
            ),
            145 => 
            array (
                'id' => '1646',
                'nome' => 'Bom Jesus do Amparo',
                'estado_id' => '11',
            ),
            146 => 
            array (
                'id' => '1647',
                'nome' => 'Bom Jesus do Galho',
                'estado_id' => '11',
            ),
            147 => 
            array (
                'id' => '1648',
                'nome' => 'Bom Repouso',
                'estado_id' => '11',
            ),
            148 => 
            array (
                'id' => '1649',
                'nome' => 'Bom Sucesso',
                'estado_id' => '11',
            ),
            149 => 
            array (
                'id' => '1650',
                'nome' => 'Bonfim',
                'estado_id' => '11',
            ),
            150 => 
            array (
                'id' => '1651',
                'nome' => 'Bonfinópolis de Minas',
                'estado_id' => '11',
            ),
            151 => 
            array (
                'id' => '1652',
                'nome' => 'Bonito de Minas',
                'estado_id' => '11',
            ),
            152 => 
            array (
                'id' => '1653',
                'nome' => 'Borda da Mata',
                'estado_id' => '11',
            ),
            153 => 
            array (
                'id' => '1654',
                'nome' => 'Botelhos',
                'estado_id' => '11',
            ),
            154 => 
            array (
                'id' => '1655',
                'nome' => 'Botumirim',
                'estado_id' => '11',
            ),
            155 => 
            array (
                'id' => '1656',
                'nome' => 'Brás Pires',
                'estado_id' => '11',
            ),
            156 => 
            array (
                'id' => '1657',
                'nome' => 'Brasilândia de Minas',
                'estado_id' => '11',
            ),
            157 => 
            array (
                'id' => '1658',
                'nome' => 'Brasília de Minas',
                'estado_id' => '11',
            ),
            158 => 
            array (
                'id' => '1659',
                'nome' => 'Brasópolis',
                'estado_id' => '11',
            ),
            159 => 
            array (
                'id' => '1660',
                'nome' => 'Braúnas',
                'estado_id' => '11',
            ),
            160 => 
            array (
                'id' => '1661',
                'nome' => 'Brumadinho',
                'estado_id' => '11',
            ),
            161 => 
            array (
                'id' => '1662',
                'nome' => 'Bueno Brandão',
                'estado_id' => '11',
            ),
            162 => 
            array (
                'id' => '1663',
                'nome' => 'Buenópolis',
                'estado_id' => '11',
            ),
            163 => 
            array (
                'id' => '1664',
                'nome' => 'Bugre',
                'estado_id' => '11',
            ),
            164 => 
            array (
                'id' => '1665',
                'nome' => 'Buritis',
                'estado_id' => '11',
            ),
            165 => 
            array (
                'id' => '1666',
                'nome' => 'Buritizeiro',
                'estado_id' => '11',
            ),
            166 => 
            array (
                'id' => '1667',
                'nome' => 'Cabeceira Grande',
                'estado_id' => '11',
            ),
            167 => 
            array (
                'id' => '1668',
                'nome' => 'Cabo Verde',
                'estado_id' => '11',
            ),
            168 => 
            array (
                'id' => '1669',
                'nome' => 'Cachoeira da Prata',
                'estado_id' => '11',
            ),
            169 => 
            array (
                'id' => '1670',
                'nome' => 'Cachoeira de Minas',
                'estado_id' => '11',
            ),
            170 => 
            array (
                'id' => '1671',
                'nome' => 'Cachoeira de Pajeú',
                'estado_id' => '11',
            ),
            171 => 
            array (
                'id' => '1672',
                'nome' => 'Cachoeira Dourada',
                'estado_id' => '11',
            ),
            172 => 
            array (
                'id' => '1673',
                'nome' => 'Caetanópolis',
                'estado_id' => '11',
            ),
            173 => 
            array (
                'id' => '1674',
                'nome' => 'Caeté',
                'estado_id' => '11',
            ),
            174 => 
            array (
                'id' => '1675',
                'nome' => 'Caiana',
                'estado_id' => '11',
            ),
            175 => 
            array (
                'id' => '1676',
                'nome' => 'Cajuri',
                'estado_id' => '11',
            ),
            176 => 
            array (
                'id' => '1677',
                'nome' => 'Caldas',
                'estado_id' => '11',
            ),
            177 => 
            array (
                'id' => '1678',
                'nome' => 'Camacho',
                'estado_id' => '11',
            ),
            178 => 
            array (
                'id' => '1679',
                'nome' => 'Camanducaia',
                'estado_id' => '11',
            ),
            179 => 
            array (
                'id' => '1680',
                'nome' => 'Cambuí',
                'estado_id' => '11',
            ),
            180 => 
            array (
                'id' => '1681',
                'nome' => 'Cambuquira',
                'estado_id' => '11',
            ),
            181 => 
            array (
                'id' => '1682',
                'nome' => 'Campanário',
                'estado_id' => '11',
            ),
            182 => 
            array (
                'id' => '1683',
                'nome' => 'Campanha',
                'estado_id' => '11',
            ),
            183 => 
            array (
                'id' => '1684',
                'nome' => 'Campestre',
                'estado_id' => '11',
            ),
            184 => 
            array (
                'id' => '1685',
                'nome' => 'Campina Verde',
                'estado_id' => '11',
            ),
            185 => 
            array (
                'id' => '1686',
                'nome' => 'Campo Azul',
                'estado_id' => '11',
            ),
            186 => 
            array (
                'id' => '1687',
                'nome' => 'Campo Belo',
                'estado_id' => '11',
            ),
            187 => 
            array (
                'id' => '1688',
                'nome' => 'Campo do Meio',
                'estado_id' => '11',
            ),
            188 => 
            array (
                'id' => '1689',
                'nome' => 'Campo Florido',
                'estado_id' => '11',
            ),
            189 => 
            array (
                'id' => '1690',
                'nome' => 'Campos Altos',
                'estado_id' => '11',
            ),
            190 => 
            array (
                'id' => '1691',
                'nome' => 'Campos Gerais',
                'estado_id' => '11',
            ),
            191 => 
            array (
                'id' => '1692',
                'nome' => 'Cana Verde',
                'estado_id' => '11',
            ),
            192 => 
            array (
                'id' => '1693',
                'nome' => 'Canaã',
                'estado_id' => '11',
            ),
            193 => 
            array (
                'id' => '1694',
                'nome' => 'Canápolis',
                'estado_id' => '11',
            ),
            194 => 
            array (
                'id' => '1695',
                'nome' => 'Candeias',
                'estado_id' => '11',
            ),
            195 => 
            array (
                'id' => '1696',
                'nome' => 'Cantagalo',
                'estado_id' => '11',
            ),
            196 => 
            array (
                'id' => '1697',
                'nome' => 'Caparaó',
                'estado_id' => '11',
            ),
            197 => 
            array (
                'id' => '1698',
                'nome' => 'Capela Nova',
                'estado_id' => '11',
            ),
            198 => 
            array (
                'id' => '1699',
                'nome' => 'Capelinha',
                'estado_id' => '11',
            ),
            199 => 
            array (
                'id' => '1700',
                'nome' => 'Capetinga',
                'estado_id' => '11',
            ),
            200 => 
            array (
                'id' => '1701',
                'nome' => 'Capim Branco',
                'estado_id' => '11',
            ),
            201 => 
            array (
                'id' => '1702',
                'nome' => 'Capinópolis',
                'estado_id' => '11',
            ),
            202 => 
            array (
                'id' => '1703',
                'nome' => 'Capitão Andrade',
                'estado_id' => '11',
            ),
            203 => 
            array (
                'id' => '1704',
                'nome' => 'Capitão Enéas',
                'estado_id' => '11',
            ),
            204 => 
            array (
                'id' => '1705',
                'nome' => 'Capitólio',
                'estado_id' => '11',
            ),
            205 => 
            array (
                'id' => '1706',
                'nome' => 'Caputira',
                'estado_id' => '11',
            ),
            206 => 
            array (
                'id' => '1707',
                'nome' => 'Caraí',
                'estado_id' => '11',
            ),
            207 => 
            array (
                'id' => '1708',
                'nome' => 'Caranaíba',
                'estado_id' => '11',
            ),
            208 => 
            array (
                'id' => '1709',
                'nome' => 'Carandaí',
                'estado_id' => '11',
            ),
            209 => 
            array (
                'id' => '1710',
                'nome' => 'Carangola',
                'estado_id' => '11',
            ),
            210 => 
            array (
                'id' => '1711',
                'nome' => 'Caratinga',
                'estado_id' => '11',
            ),
            211 => 
            array (
                'id' => '1712',
                'nome' => 'Carbonita',
                'estado_id' => '11',
            ),
            212 => 
            array (
                'id' => '1713',
                'nome' => 'Careaçu',
                'estado_id' => '11',
            ),
            213 => 
            array (
                'id' => '1714',
                'nome' => 'Carlos Chagas',
                'estado_id' => '11',
            ),
            214 => 
            array (
                'id' => '1715',
                'nome' => 'Carmésia',
                'estado_id' => '11',
            ),
            215 => 
            array (
                'id' => '1716',
                'nome' => 'Carmo da Cachoeira',
                'estado_id' => '11',
            ),
            216 => 
            array (
                'id' => '1717',
                'nome' => 'Carmo da Mata',
                'estado_id' => '11',
            ),
            217 => 
            array (
                'id' => '1718',
                'nome' => 'Carmo de Minas',
                'estado_id' => '11',
            ),
            218 => 
            array (
                'id' => '1719',
                'nome' => 'Carmo do Cajuru',
                'estado_id' => '11',
            ),
            219 => 
            array (
                'id' => '1720',
                'nome' => 'Carmo do Paranaíba',
                'estado_id' => '11',
            ),
            220 => 
            array (
                'id' => '1721',
                'nome' => 'Carmo do Rio Claro',
                'estado_id' => '11',
            ),
            221 => 
            array (
                'id' => '1722',
                'nome' => 'Carmópolis de Minas',
                'estado_id' => '11',
            ),
            222 => 
            array (
                'id' => '1723',
                'nome' => 'Carneirinho',
                'estado_id' => '11',
            ),
            223 => 
            array (
                'id' => '1724',
                'nome' => 'Carrancas',
                'estado_id' => '11',
            ),
            224 => 
            array (
                'id' => '1725',
                'nome' => 'Carvalhópolis',
                'estado_id' => '11',
            ),
            225 => 
            array (
                'id' => '1726',
                'nome' => 'Carvalhos',
                'estado_id' => '11',
            ),
            226 => 
            array (
                'id' => '1727',
                'nome' => 'Casa Grande',
                'estado_id' => '11',
            ),
            227 => 
            array (
                'id' => '1728',
                'nome' => 'Cascalho Rico',
                'estado_id' => '11',
            ),
            228 => 
            array (
                'id' => '1729',
                'nome' => 'Cássia',
                'estado_id' => '11',
            ),
            229 => 
            array (
                'id' => '1730',
                'nome' => 'Cataguases',
                'estado_id' => '11',
            ),
            230 => 
            array (
                'id' => '1731',
                'nome' => 'Catas Altas',
                'estado_id' => '11',
            ),
            231 => 
            array (
                'id' => '1732',
                'nome' => 'Catas Altas da Noruega',
                'estado_id' => '11',
            ),
            232 => 
            array (
                'id' => '1733',
                'nome' => 'Catuji',
                'estado_id' => '11',
            ),
            233 => 
            array (
                'id' => '1734',
                'nome' => 'Catuti',
                'estado_id' => '11',
            ),
            234 => 
            array (
                'id' => '1735',
                'nome' => 'Caxambu',
                'estado_id' => '11',
            ),
            235 => 
            array (
                'id' => '1736',
                'nome' => 'Cedro do Abaeté',
                'estado_id' => '11',
            ),
            236 => 
            array (
                'id' => '1737',
                'nome' => 'Central de Minas',
                'estado_id' => '11',
            ),
            237 => 
            array (
                'id' => '1738',
                'nome' => 'Centralina',
                'estado_id' => '11',
            ),
            238 => 
            array (
                'id' => '1739',
                'nome' => 'Chácara',
                'estado_id' => '11',
            ),
            239 => 
            array (
                'id' => '1740',
                'nome' => 'Chalé',
                'estado_id' => '11',
            ),
            240 => 
            array (
                'id' => '1741',
                'nome' => 'Chapada do Norte',
                'estado_id' => '11',
            ),
            241 => 
            array (
                'id' => '1742',
                'nome' => 'Chapada Gaúcha',
                'estado_id' => '11',
            ),
            242 => 
            array (
                'id' => '1743',
                'nome' => 'Chiador',
                'estado_id' => '11',
            ),
            243 => 
            array (
                'id' => '1744',
                'nome' => 'Cipotânea',
                'estado_id' => '11',
            ),
            244 => 
            array (
                'id' => '1745',
                'nome' => 'Claraval',
                'estado_id' => '11',
            ),
            245 => 
            array (
                'id' => '1746',
                'nome' => 'Claro dos Poções',
                'estado_id' => '11',
            ),
            246 => 
            array (
                'id' => '1747',
                'nome' => 'Cláudio',
                'estado_id' => '11',
            ),
            247 => 
            array (
                'id' => '1748',
                'nome' => 'Coimbra',
                'estado_id' => '11',
            ),
            248 => 
            array (
                'id' => '1749',
                'nome' => 'Coluna',
                'estado_id' => '11',
            ),
            249 => 
            array (
                'id' => '1750',
                'nome' => 'Comendador Gomes',
                'estado_id' => '11',
            ),
            250 => 
            array (
                'id' => '1751',
                'nome' => 'Comercinho',
                'estado_id' => '11',
            ),
            251 => 
            array (
                'id' => '1752',
                'nome' => 'Conceição da Aparecida',
                'estado_id' => '11',
            ),
            252 => 
            array (
                'id' => '1753',
                'nome' => 'Conceição da Barra de Minas',
                'estado_id' => '11',
            ),
            253 => 
            array (
                'id' => '1754',
                'nome' => 'Conceição das Alagoas',
                'estado_id' => '11',
            ),
            254 => 
            array (
                'id' => '1755',
                'nome' => 'Conceição das Pedras',
                'estado_id' => '11',
            ),
            255 => 
            array (
                'id' => '1756',
                'nome' => 'Conceição de Ipanema',
                'estado_id' => '11',
            ),
            256 => 
            array (
                'id' => '1757',
                'nome' => 'Conceição do Mato Dentro',
                'estado_id' => '11',
            ),
            257 => 
            array (
                'id' => '1758',
                'nome' => 'Conceição do Pará',
                'estado_id' => '11',
            ),
            258 => 
            array (
                'id' => '1759',
                'nome' => 'Conceição do Rio Verde',
                'estado_id' => '11',
            ),
            259 => 
            array (
                'id' => '1760',
                'nome' => 'Conceição dos Ouros',
                'estado_id' => '11',
            ),
            260 => 
            array (
                'id' => '1761',
                'nome' => 'Cônego Marinho',
                'estado_id' => '11',
            ),
            261 => 
            array (
                'id' => '1762',
                'nome' => 'Confins',
                'estado_id' => '11',
            ),
            262 => 
            array (
                'id' => '1763',
                'nome' => 'Congonhal',
                'estado_id' => '11',
            ),
            263 => 
            array (
                'id' => '1764',
                'nome' => 'Congonhas',
                'estado_id' => '11',
            ),
            264 => 
            array (
                'id' => '1765',
                'nome' => 'Congonhas do Norte',
                'estado_id' => '11',
            ),
            265 => 
            array (
                'id' => '1766',
                'nome' => 'Conquista',
                'estado_id' => '11',
            ),
            266 => 
            array (
                'id' => '1767',
                'nome' => 'Conselheiro Lafaiete',
                'estado_id' => '11',
            ),
            267 => 
            array (
                'id' => '1768',
                'nome' => 'Conselheiro Pena',
                'estado_id' => '11',
            ),
            268 => 
            array (
                'id' => '1769',
                'nome' => 'Consolação',
                'estado_id' => '11',
            ),
            269 => 
            array (
                'id' => '1770',
                'nome' => 'Contagem',
                'estado_id' => '11',
            ),
            270 => 
            array (
                'id' => '1771',
                'nome' => 'Coqueiral',
                'estado_id' => '11',
            ),
            271 => 
            array (
                'id' => '1772',
                'nome' => 'Coração de Jesus',
                'estado_id' => '11',
            ),
            272 => 
            array (
                'id' => '1773',
                'nome' => 'Cordisburgo',
                'estado_id' => '11',
            ),
            273 => 
            array (
                'id' => '1774',
                'nome' => 'Cordislândia',
                'estado_id' => '11',
            ),
            274 => 
            array (
                'id' => '1775',
                'nome' => 'Corinto',
                'estado_id' => '11',
            ),
            275 => 
            array (
                'id' => '1776',
                'nome' => 'Coroaci',
                'estado_id' => '11',
            ),
            276 => 
            array (
                'id' => '1777',
                'nome' => 'Coromandel',
                'estado_id' => '11',
            ),
            277 => 
            array (
                'id' => '1778',
                'nome' => 'Coronel Fabriciano',
                'estado_id' => '11',
            ),
            278 => 
            array (
                'id' => '1779',
                'nome' => 'Coronel Murta',
                'estado_id' => '11',
            ),
            279 => 
            array (
                'id' => '1780',
                'nome' => 'Coronel Pacheco',
                'estado_id' => '11',
            ),
            280 => 
            array (
                'id' => '1781',
                'nome' => 'Coronel Xavier Chaves',
                'estado_id' => '11',
            ),
            281 => 
            array (
                'id' => '1782',
                'nome' => 'Córrego Danta',
                'estado_id' => '11',
            ),
            282 => 
            array (
                'id' => '1783',
                'nome' => 'Córrego do Bom Jesus',
                'estado_id' => '11',
            ),
            283 => 
            array (
                'id' => '1784',
                'nome' => 'Córrego Fundo',
                'estado_id' => '11',
            ),
            284 => 
            array (
                'id' => '1785',
                'nome' => 'Córrego Novo',
                'estado_id' => '11',
            ),
            285 => 
            array (
                'id' => '1786',
                'nome' => 'Couto de Magalhães de Minas',
                'estado_id' => '11',
            ),
            286 => 
            array (
                'id' => '1787',
                'nome' => 'Crisólita',
                'estado_id' => '11',
            ),
            287 => 
            array (
                'id' => '1788',
                'nome' => 'Cristais',
                'estado_id' => '11',
            ),
            288 => 
            array (
                'id' => '1789',
                'nome' => 'Cristália',
                'estado_id' => '11',
            ),
            289 => 
            array (
                'id' => '1790',
                'nome' => 'Cristiano Otoni',
                'estado_id' => '11',
            ),
            290 => 
            array (
                'id' => '1791',
                'nome' => 'Cristina',
                'estado_id' => '11',
            ),
            291 => 
            array (
                'id' => '1792',
                'nome' => 'Crucilândia',
                'estado_id' => '11',
            ),
            292 => 
            array (
                'id' => '1793',
                'nome' => 'Cruzeiro da Fortaleza',
                'estado_id' => '11',
            ),
            293 => 
            array (
                'id' => '1794',
                'nome' => 'Cruzília',
                'estado_id' => '11',
            ),
            294 => 
            array (
                'id' => '1795',
                'nome' => 'Cuparaque',
                'estado_id' => '11',
            ),
            295 => 
            array (
                'id' => '1796',
                'nome' => 'Curral de Dentro',
                'estado_id' => '11',
            ),
            296 => 
            array (
                'id' => '1797',
                'nome' => 'Curvelo',
                'estado_id' => '11',
            ),
            297 => 
            array (
                'id' => '1798',
                'nome' => 'Datas',
                'estado_id' => '11',
            ),
            298 => 
            array (
                'id' => '1799',
                'nome' => 'Delfim Moreira',
                'estado_id' => '11',
            ),
            299 => 
            array (
                'id' => '1800',
                'nome' => 'Delfinópolis',
                'estado_id' => '11',
            ),
            300 => 
            array (
                'id' => '1801',
                'nome' => 'Delta',
                'estado_id' => '11',
            ),
            301 => 
            array (
                'id' => '1802',
                'nome' => 'Descoberto',
                'estado_id' => '11',
            ),
            302 => 
            array (
                'id' => '1803',
                'nome' => 'Desterro de Entre Rios',
                'estado_id' => '11',
            ),
            303 => 
            array (
                'id' => '1804',
                'nome' => 'Desterro do Melo',
                'estado_id' => '11',
            ),
            304 => 
            array (
                'id' => '1805',
                'nome' => 'Diamantina',
                'estado_id' => '11',
            ),
            305 => 
            array (
                'id' => '1806',
                'nome' => 'Diogo de Vasconcelos',
                'estado_id' => '11',
            ),
            306 => 
            array (
                'id' => '1807',
                'nome' => 'Dionísio',
                'estado_id' => '11',
            ),
            307 => 
            array (
                'id' => '1808',
                'nome' => 'Divinésia',
                'estado_id' => '11',
            ),
            308 => 
            array (
                'id' => '1809',
                'nome' => 'Divino',
                'estado_id' => '11',
            ),
            309 => 
            array (
                'id' => '1810',
                'nome' => 'Divino das Laranjeiras',
                'estado_id' => '11',
            ),
            310 => 
            array (
                'id' => '1811',
                'nome' => 'Divinolândia de Minas',
                'estado_id' => '11',
            ),
            311 => 
            array (
                'id' => '1812',
                'nome' => 'Divinópolis',
                'estado_id' => '11',
            ),
            312 => 
            array (
                'id' => '1813',
                'nome' => 'Divisa Alegre',
                'estado_id' => '11',
            ),
            313 => 
            array (
                'id' => '1814',
                'nome' => 'Divisa Nova',
                'estado_id' => '11',
            ),
            314 => 
            array (
                'id' => '1815',
                'nome' => 'Divisópolis',
                'estado_id' => '11',
            ),
            315 => 
            array (
                'id' => '1816',
                'nome' => 'Dom Bosco',
                'estado_id' => '11',
            ),
            316 => 
            array (
                'id' => '1817',
                'nome' => 'Dom Cavati',
                'estado_id' => '11',
            ),
            317 => 
            array (
                'id' => '1818',
                'nome' => 'Dom Joaquim',
                'estado_id' => '11',
            ),
            318 => 
            array (
                'id' => '1819',
                'nome' => 'Dom Silvério',
                'estado_id' => '11',
            ),
            319 => 
            array (
                'id' => '1820',
                'nome' => 'Dom Viçoso',
                'estado_id' => '11',
            ),
            320 => 
            array (
                'id' => '1821',
                'nome' => 'Dona Eusébia',
                'estado_id' => '11',
            ),
            321 => 
            array (
                'id' => '1822',
                'nome' => 'Dores de Campos',
                'estado_id' => '11',
            ),
            322 => 
            array (
                'id' => '1823',
                'nome' => 'Dores de Guanhães',
                'estado_id' => '11',
            ),
            323 => 
            array (
                'id' => '1824',
                'nome' => 'Dores do Indaiá',
                'estado_id' => '11',
            ),
            324 => 
            array (
                'id' => '1825',
                'nome' => 'Dores do Turvo',
                'estado_id' => '11',
            ),
            325 => 
            array (
                'id' => '1826',
                'nome' => 'Doresópolis',
                'estado_id' => '11',
            ),
            326 => 
            array (
                'id' => '1827',
                'nome' => 'Douradoquara',
                'estado_id' => '11',
            ),
            327 => 
            array (
                'id' => '1828',
                'nome' => 'Durandé',
                'estado_id' => '11',
            ),
            328 => 
            array (
                'id' => '1829',
                'nome' => 'Elói Mendes',
                'estado_id' => '11',
            ),
            329 => 
            array (
                'id' => '1830',
                'nome' => 'Engenheiro Caldas',
                'estado_id' => '11',
            ),
            330 => 
            array (
                'id' => '1831',
                'nome' => 'Engenheiro Navarro',
                'estado_id' => '11',
            ),
            331 => 
            array (
                'id' => '1832',
                'nome' => 'Entre Folhas',
                'estado_id' => '11',
            ),
            332 => 
            array (
                'id' => '1833',
                'nome' => 'Entre Rios de Minas',
                'estado_id' => '11',
            ),
            333 => 
            array (
                'id' => '1834',
                'nome' => 'Ervália',
                'estado_id' => '11',
            ),
            334 => 
            array (
                'id' => '1835',
                'nome' => 'Esmeraldas',
                'estado_id' => '11',
            ),
            335 => 
            array (
                'id' => '1836',
                'nome' => 'Espera Feliz',
                'estado_id' => '11',
            ),
            336 => 
            array (
                'id' => '1837',
                'nome' => 'Espinosa',
                'estado_id' => '11',
            ),
            337 => 
            array (
                'id' => '1838',
                'nome' => 'Espírito Santo do Dourado',
                'estado_id' => '11',
            ),
            338 => 
            array (
                'id' => '1839',
                'nome' => 'Estiva',
                'estado_id' => '11',
            ),
            339 => 
            array (
                'id' => '1840',
                'nome' => 'Estrela Dalva',
                'estado_id' => '11',
            ),
            340 => 
            array (
                'id' => '1841',
                'nome' => 'Estrela do Indaiá',
                'estado_id' => '11',
            ),
            341 => 
            array (
                'id' => '1842',
                'nome' => 'Estrela do Sul',
                'estado_id' => '11',
            ),
            342 => 
            array (
                'id' => '1843',
                'nome' => 'Eugenópolis',
                'estado_id' => '11',
            ),
            343 => 
            array (
                'id' => '1844',
                'nome' => 'Ewbank da Câmara',
                'estado_id' => '11',
            ),
            344 => 
            array (
                'id' => '1845',
                'nome' => 'Extrema',
                'estado_id' => '11',
            ),
            345 => 
            array (
                'id' => '1846',
                'nome' => 'Fama',
                'estado_id' => '11',
            ),
            346 => 
            array (
                'id' => '1847',
                'nome' => 'Faria Lemos',
                'estado_id' => '11',
            ),
            347 => 
            array (
                'id' => '1848',
                'nome' => 'Felício dos Santos',
                'estado_id' => '11',
            ),
            348 => 
            array (
                'id' => '1849',
                'nome' => 'Felisburgo',
                'estado_id' => '11',
            ),
            349 => 
            array (
                'id' => '1850',
                'nome' => 'Felixlândia',
                'estado_id' => '11',
            ),
            350 => 
            array (
                'id' => '1851',
                'nome' => 'Fernandes Tourinho',
                'estado_id' => '11',
            ),
            351 => 
            array (
                'id' => '1852',
                'nome' => 'Ferros',
                'estado_id' => '11',
            ),
            352 => 
            array (
                'id' => '1853',
                'nome' => 'Fervedouro',
                'estado_id' => '11',
            ),
            353 => 
            array (
                'id' => '1854',
                'nome' => 'Florestal',
                'estado_id' => '11',
            ),
            354 => 
            array (
                'id' => '1855',
                'nome' => 'Formiga',
                'estado_id' => '11',
            ),
            355 => 
            array (
                'id' => '1856',
                'nome' => 'Formoso',
                'estado_id' => '11',
            ),
            356 => 
            array (
                'id' => '1857',
                'nome' => 'Fortaleza de Minas',
                'estado_id' => '11',
            ),
            357 => 
            array (
                'id' => '1858',
                'nome' => 'Fortuna de Minas',
                'estado_id' => '11',
            ),
            358 => 
            array (
                'id' => '1859',
                'nome' => 'Francisco Badaró',
                'estado_id' => '11',
            ),
            359 => 
            array (
                'id' => '1860',
                'nome' => 'Francisco Dumont',
                'estado_id' => '11',
            ),
            360 => 
            array (
                'id' => '1861',
                'nome' => 'Francisco Sá',
                'estado_id' => '11',
            ),
            361 => 
            array (
                'id' => '1862',
                'nome' => 'Franciscópolis',
                'estado_id' => '11',
            ),
            362 => 
            array (
                'id' => '1863',
                'nome' => 'Frei Gaspar',
                'estado_id' => '11',
            ),
            363 => 
            array (
                'id' => '1864',
                'nome' => 'Frei Inocêncio',
                'estado_id' => '11',
            ),
            364 => 
            array (
                'id' => '1865',
                'nome' => 'Frei Lagonegro',
                'estado_id' => '11',
            ),
            365 => 
            array (
                'id' => '1866',
                'nome' => 'Fronteira',
                'estado_id' => '11',
            ),
            366 => 
            array (
                'id' => '1867',
                'nome' => 'Fronteira dos Vales',
                'estado_id' => '11',
            ),
            367 => 
            array (
                'id' => '1868',
                'nome' => 'Fruta de Leite',
                'estado_id' => '11',
            ),
            368 => 
            array (
                'id' => '1869',
                'nome' => 'Frutal',
                'estado_id' => '11',
            ),
            369 => 
            array (
                'id' => '1870',
                'nome' => 'Funilândia',
                'estado_id' => '11',
            ),
            370 => 
            array (
                'id' => '1871',
                'nome' => 'Galiléia',
                'estado_id' => '11',
            ),
            371 => 
            array (
                'id' => '1872',
                'nome' => 'Gameleiras',
                'estado_id' => '11',
            ),
            372 => 
            array (
                'id' => '1873',
                'nome' => 'Glaucilândia',
                'estado_id' => '11',
            ),
            373 => 
            array (
                'id' => '1874',
                'nome' => 'Goiabeira',
                'estado_id' => '11',
            ),
            374 => 
            array (
                'id' => '1875',
                'nome' => 'Goianá',
                'estado_id' => '11',
            ),
            375 => 
            array (
                'id' => '1876',
                'nome' => 'Gonçalves',
                'estado_id' => '11',
            ),
            376 => 
            array (
                'id' => '1877',
                'nome' => 'Gonzaga',
                'estado_id' => '11',
            ),
            377 => 
            array (
                'id' => '1878',
                'nome' => 'Gouveia',
                'estado_id' => '11',
            ),
            378 => 
            array (
                'id' => '1879',
                'nome' => 'Governador Valadares',
                'estado_id' => '11',
            ),
            379 => 
            array (
                'id' => '1880',
                'nome' => 'Grão Mogol',
                'estado_id' => '11',
            ),
            380 => 
            array (
                'id' => '1881',
                'nome' => 'Grupiara',
                'estado_id' => '11',
            ),
            381 => 
            array (
                'id' => '1882',
                'nome' => 'Guanhães',
                'estado_id' => '11',
            ),
            382 => 
            array (
                'id' => '1883',
                'nome' => 'Guapé',
                'estado_id' => '11',
            ),
            383 => 
            array (
                'id' => '1884',
                'nome' => 'Guaraciaba',
                'estado_id' => '11',
            ),
            384 => 
            array (
                'id' => '1885',
                'nome' => 'Guaraciama',
                'estado_id' => '11',
            ),
            385 => 
            array (
                'id' => '1886',
                'nome' => 'Guaranésia',
                'estado_id' => '11',
            ),
            386 => 
            array (
                'id' => '1887',
                'nome' => 'Guarani',
                'estado_id' => '11',
            ),
            387 => 
            array (
                'id' => '1888',
                'nome' => 'Guarará',
                'estado_id' => '11',
            ),
            388 => 
            array (
                'id' => '1889',
                'nome' => 'Guarda-Mor',
                'estado_id' => '11',
            ),
            389 => 
            array (
                'id' => '1890',
                'nome' => 'Guaxupé',
                'estado_id' => '11',
            ),
            390 => 
            array (
                'id' => '1891',
                'nome' => 'Guidoval',
                'estado_id' => '11',
            ),
            391 => 
            array (
                'id' => '1892',
                'nome' => 'Guimarânia',
                'estado_id' => '11',
            ),
            392 => 
            array (
                'id' => '1893',
                'nome' => 'Guiricema',
                'estado_id' => '11',
            ),
            393 => 
            array (
                'id' => '1894',
                'nome' => 'Gurinhatã',
                'estado_id' => '11',
            ),
            394 => 
            array (
                'id' => '1895',
                'nome' => 'Heliodora',
                'estado_id' => '11',
            ),
            395 => 
            array (
                'id' => '1896',
                'nome' => 'Iapu',
                'estado_id' => '11',
            ),
            396 => 
            array (
                'id' => '1897',
                'nome' => 'Ibertioga',
                'estado_id' => '11',
            ),
            397 => 
            array (
                'id' => '1898',
                'nome' => 'Ibiá',
                'estado_id' => '11',
            ),
            398 => 
            array (
                'id' => '1899',
                'nome' => 'Ibiaí',
                'estado_id' => '11',
            ),
            399 => 
            array (
                'id' => '1900',
                'nome' => 'Ibiracatu',
                'estado_id' => '11',
            ),
            400 => 
            array (
                'id' => '1901',
                'nome' => 'Ibiraci',
                'estado_id' => '11',
            ),
            401 => 
            array (
                'id' => '1902',
                'nome' => 'Ibirité',
                'estado_id' => '11',
            ),
            402 => 
            array (
                'id' => '1903',
                'nome' => 'Ibitiúra de Minas',
                'estado_id' => '11',
            ),
            403 => 
            array (
                'id' => '1904',
                'nome' => 'Ibituruna',
                'estado_id' => '11',
            ),
            404 => 
            array (
                'id' => '1905',
                'nome' => 'Icaraí de Minas',
                'estado_id' => '11',
            ),
            405 => 
            array (
                'id' => '1906',
                'nome' => 'Igarapé',
                'estado_id' => '11',
            ),
            406 => 
            array (
                'id' => '1907',
                'nome' => 'Igaratinga',
                'estado_id' => '11',
            ),
            407 => 
            array (
                'id' => '1908',
                'nome' => 'Iguatama',
                'estado_id' => '11',
            ),
            408 => 
            array (
                'id' => '1909',
                'nome' => 'Ijaci',
                'estado_id' => '11',
            ),
            409 => 
            array (
                'id' => '1910',
                'nome' => 'Ilicínea',
                'estado_id' => '11',
            ),
            410 => 
            array (
                'id' => '1911',
                'nome' => 'Imbé de Minas',
                'estado_id' => '11',
            ),
            411 => 
            array (
                'id' => '1912',
                'nome' => 'Inconfidentes',
                'estado_id' => '11',
            ),
            412 => 
            array (
                'id' => '1913',
                'nome' => 'Indaiabira',
                'estado_id' => '11',
            ),
            413 => 
            array (
                'id' => '1914',
                'nome' => 'Indianópolis',
                'estado_id' => '11',
            ),
            414 => 
            array (
                'id' => '1915',
                'nome' => 'Ingaí',
                'estado_id' => '11',
            ),
            415 => 
            array (
                'id' => '1916',
                'nome' => 'Inhapim',
                'estado_id' => '11',
            ),
            416 => 
            array (
                'id' => '1917',
                'nome' => 'Inhaúma',
                'estado_id' => '11',
            ),
            417 => 
            array (
                'id' => '1918',
                'nome' => 'Inimutaba',
                'estado_id' => '11',
            ),
            418 => 
            array (
                'id' => '1919',
                'nome' => 'Ipaba',
                'estado_id' => '11',
            ),
            419 => 
            array (
                'id' => '1920',
                'nome' => 'Ipanema',
                'estado_id' => '11',
            ),
            420 => 
            array (
                'id' => '1921',
                'nome' => 'Ipatinga',
                'estado_id' => '11',
            ),
            421 => 
            array (
                'id' => '1922',
                'nome' => 'Ipiaçu',
                'estado_id' => '11',
            ),
            422 => 
            array (
                'id' => '1923',
                'nome' => 'Ipuiúna',
                'estado_id' => '11',
            ),
            423 => 
            array (
                'id' => '1924',
                'nome' => 'Iraí de Minas',
                'estado_id' => '11',
            ),
            424 => 
            array (
                'id' => '1925',
                'nome' => 'Itabira',
                'estado_id' => '11',
            ),
            425 => 
            array (
                'id' => '1926',
                'nome' => 'Itabirinha de Mantena',
                'estado_id' => '11',
            ),
            426 => 
            array (
                'id' => '1927',
                'nome' => 'Itabirito',
                'estado_id' => '11',
            ),
            427 => 
            array (
                'id' => '1928',
                'nome' => 'Itacambira',
                'estado_id' => '11',
            ),
            428 => 
            array (
                'id' => '1929',
                'nome' => 'Itacarambi',
                'estado_id' => '11',
            ),
            429 => 
            array (
                'id' => '1930',
                'nome' => 'Itaguara',
                'estado_id' => '11',
            ),
            430 => 
            array (
                'id' => '1931',
                'nome' => 'Itaipé',
                'estado_id' => '11',
            ),
            431 => 
            array (
                'id' => '1932',
                'nome' => 'Itajubá',
                'estado_id' => '11',
            ),
            432 => 
            array (
                'id' => '1933',
                'nome' => 'Itamarandiba',
                'estado_id' => '11',
            ),
            433 => 
            array (
                'id' => '1934',
                'nome' => 'Itamarati de Minas',
                'estado_id' => '11',
            ),
            434 => 
            array (
                'id' => '1935',
                'nome' => 'Itambacuri',
                'estado_id' => '11',
            ),
            435 => 
            array (
                'id' => '1936',
                'nome' => 'Itambé do Mato Dentro',
                'estado_id' => '11',
            ),
            436 => 
            array (
                'id' => '1937',
                'nome' => 'Itamogi',
                'estado_id' => '11',
            ),
            437 => 
            array (
                'id' => '1938',
                'nome' => 'Itamonte',
                'estado_id' => '11',
            ),
            438 => 
            array (
                'id' => '1939',
                'nome' => 'Itanhandu',
                'estado_id' => '11',
            ),
            439 => 
            array (
                'id' => '1940',
                'nome' => 'Itanhomi',
                'estado_id' => '11',
            ),
            440 => 
            array (
                'id' => '1941',
                'nome' => 'Itaobim',
                'estado_id' => '11',
            ),
            441 => 
            array (
                'id' => '1942',
                'nome' => 'Itapagipe',
                'estado_id' => '11',
            ),
            442 => 
            array (
                'id' => '1943',
                'nome' => 'Itapecerica',
                'estado_id' => '11',
            ),
            443 => 
            array (
                'id' => '1944',
                'nome' => 'Itapeva',
                'estado_id' => '11',
            ),
            444 => 
            array (
                'id' => '1945',
                'nome' => 'Itatiaiuçu',
                'estado_id' => '11',
            ),
            445 => 
            array (
                'id' => '1946',
                'nome' => 'Itaú de Minas',
                'estado_id' => '11',
            ),
            446 => 
            array (
                'id' => '1947',
                'nome' => 'Itaúna',
                'estado_id' => '11',
            ),
            447 => 
            array (
                'id' => '1948',
                'nome' => 'Itaverava',
                'estado_id' => '11',
            ),
            448 => 
            array (
                'id' => '1949',
                'nome' => 'Itinga',
                'estado_id' => '11',
            ),
            449 => 
            array (
                'id' => '1950',
                'nome' => 'Itueta',
                'estado_id' => '11',
            ),
            450 => 
            array (
                'id' => '1951',
                'nome' => 'Ituiutaba',
                'estado_id' => '11',
            ),
            451 => 
            array (
                'id' => '1952',
                'nome' => 'Itumirim',
                'estado_id' => '11',
            ),
            452 => 
            array (
                'id' => '1953',
                'nome' => 'Iturama',
                'estado_id' => '11',
            ),
            453 => 
            array (
                'id' => '1954',
                'nome' => 'Itutinga',
                'estado_id' => '11',
            ),
            454 => 
            array (
                'id' => '1955',
                'nome' => 'Jaboticatubas',
                'estado_id' => '11',
            ),
            455 => 
            array (
                'id' => '1956',
                'nome' => 'Jacinto',
                'estado_id' => '11',
            ),
            456 => 
            array (
                'id' => '1957',
                'nome' => 'Jacuí',
                'estado_id' => '11',
            ),
            457 => 
            array (
                'id' => '1958',
                'nome' => 'Jacutinga',
                'estado_id' => '11',
            ),
            458 => 
            array (
                'id' => '1959',
                'nome' => 'Jaguaraçu',
                'estado_id' => '11',
            ),
            459 => 
            array (
                'id' => '1960',
                'nome' => 'Jaíba',
                'estado_id' => '11',
            ),
            460 => 
            array (
                'id' => '1961',
                'nome' => 'Jampruca',
                'estado_id' => '11',
            ),
            461 => 
            array (
                'id' => '1962',
                'nome' => 'Janaúba',
                'estado_id' => '11',
            ),
            462 => 
            array (
                'id' => '1963',
                'nome' => 'Januária',
                'estado_id' => '11',
            ),
            463 => 
            array (
                'id' => '1964',
                'nome' => 'Japaraíba',
                'estado_id' => '11',
            ),
            464 => 
            array (
                'id' => '1965',
                'nome' => 'Japonvar',
                'estado_id' => '11',
            ),
            465 => 
            array (
                'id' => '1966',
                'nome' => 'Jeceaba',
                'estado_id' => '11',
            ),
            466 => 
            array (
                'id' => '1967',
                'nome' => 'Jenipapo de Minas',
                'estado_id' => '11',
            ),
            467 => 
            array (
                'id' => '1968',
                'nome' => 'Jequeri',
                'estado_id' => '11',
            ),
            468 => 
            array (
                'id' => '1969',
                'nome' => 'Jequitaí',
                'estado_id' => '11',
            ),
            469 => 
            array (
                'id' => '1970',
                'nome' => 'Jequitibá',
                'estado_id' => '11',
            ),
            470 => 
            array (
                'id' => '1971',
                'nome' => 'Jequitinhonha',
                'estado_id' => '11',
            ),
            471 => 
            array (
                'id' => '1972',
                'nome' => 'Jesuânia',
                'estado_id' => '11',
            ),
            472 => 
            array (
                'id' => '1973',
                'nome' => 'Joaíma',
                'estado_id' => '11',
            ),
            473 => 
            array (
                'id' => '1974',
                'nome' => 'Joanésia',
                'estado_id' => '11',
            ),
            474 => 
            array (
                'id' => '1975',
                'nome' => 'João Monlevade',
                'estado_id' => '11',
            ),
            475 => 
            array (
                'id' => '1976',
                'nome' => 'João Pinheiro',
                'estado_id' => '11',
            ),
            476 => 
            array (
                'id' => '1977',
                'nome' => 'Joaquim Felício',
                'estado_id' => '11',
            ),
            477 => 
            array (
                'id' => '1978',
                'nome' => 'Jordânia',
                'estado_id' => '11',
            ),
            478 => 
            array (
                'id' => '1979',
                'nome' => 'José Gonçalves de Minas',
                'estado_id' => '11',
            ),
            479 => 
            array (
                'id' => '1980',
                'nome' => 'José Raydan',
                'estado_id' => '11',
            ),
            480 => 
            array (
                'id' => '1981',
                'nome' => 'Josenópolis',
                'estado_id' => '11',
            ),
            481 => 
            array (
                'id' => '1982',
                'nome' => 'Juatuba',
                'estado_id' => '11',
            ),
            482 => 
            array (
                'id' => '1983',
                'nome' => 'Juiz de Fora',
                'estado_id' => '11',
            ),
            483 => 
            array (
                'id' => '1984',
                'nome' => 'Juramento',
                'estado_id' => '11',
            ),
            484 => 
            array (
                'id' => '1985',
                'nome' => 'Juruaia',
                'estado_id' => '11',
            ),
            485 => 
            array (
                'id' => '1986',
                'nome' => 'Juvenília',
                'estado_id' => '11',
            ),
            486 => 
            array (
                'id' => '1987',
                'nome' => 'Ladainha',
                'estado_id' => '11',
            ),
            487 => 
            array (
                'id' => '1988',
                'nome' => 'Lagamar',
                'estado_id' => '11',
            ),
            488 => 
            array (
                'id' => '1989',
                'nome' => 'Lagoa da Prata',
                'estado_id' => '11',
            ),
            489 => 
            array (
                'id' => '1990',
                'nome' => 'Lagoa dos Patos',
                'estado_id' => '11',
            ),
            490 => 
            array (
                'id' => '1991',
                'nome' => 'Lagoa Dourada',
                'estado_id' => '11',
            ),
            491 => 
            array (
                'id' => '1992',
                'nome' => 'Lagoa Formosa',
                'estado_id' => '11',
            ),
            492 => 
            array (
                'id' => '1993',
                'nome' => 'Lagoa Grande',
                'estado_id' => '11',
            ),
            493 => 
            array (
                'id' => '1994',
                'nome' => 'Lagoa Santa',
                'estado_id' => '11',
            ),
            494 => 
            array (
                'id' => '1995',
                'nome' => 'Lajinha',
                'estado_id' => '11',
            ),
            495 => 
            array (
                'id' => '1996',
                'nome' => 'Lambari',
                'estado_id' => '11',
            ),
            496 => 
            array (
                'id' => '1997',
                'nome' => 'Lamim',
                'estado_id' => '11',
            ),
            497 => 
            array (
                'id' => '1998',
                'nome' => 'Laranjal',
                'estado_id' => '11',
            ),
            498 => 
            array (
                'id' => '1999',
                'nome' => 'Lassance',
                'estado_id' => '11',
            ),
            499 => 
            array (
                'id' => '2000',
                'nome' => 'Lavras',
                'estado_id' => '11',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '2001',
                'nome' => 'Leandro Ferreira',
                'estado_id' => '11',
            ),
            1 => 
            array (
                'id' => '2002',
                'nome' => 'Leme do Prado',
                'estado_id' => '11',
            ),
            2 => 
            array (
                'id' => '2003',
                'nome' => 'Leopoldina',
                'estado_id' => '11',
            ),
            3 => 
            array (
                'id' => '2004',
                'nome' => 'Liberdade',
                'estado_id' => '11',
            ),
            4 => 
            array (
                'id' => '2005',
                'nome' => 'Lima Duarte',
                'estado_id' => '11',
            ),
            5 => 
            array (
                'id' => '2006',
                'nome' => 'Limeira do Oeste',
                'estado_id' => '11',
            ),
            6 => 
            array (
                'id' => '2007',
                'nome' => 'Lontra',
                'estado_id' => '11',
            ),
            7 => 
            array (
                'id' => '2008',
                'nome' => 'Luisburgo',
                'estado_id' => '11',
            ),
            8 => 
            array (
                'id' => '2009',
                'nome' => 'Luislândia',
                'estado_id' => '11',
            ),
            9 => 
            array (
                'id' => '2010',
                'nome' => 'Luminárias',
                'estado_id' => '11',
            ),
            10 => 
            array (
                'id' => '2011',
                'nome' => 'Luz',
                'estado_id' => '11',
            ),
            11 => 
            array (
                'id' => '2012',
                'nome' => 'Machacalis',
                'estado_id' => '11',
            ),
            12 => 
            array (
                'id' => '2013',
                'nome' => 'Machado',
                'estado_id' => '11',
            ),
            13 => 
            array (
                'id' => '2014',
                'nome' => 'Madre de Deus de Minas',
                'estado_id' => '11',
            ),
            14 => 
            array (
                'id' => '2015',
                'nome' => 'Malacacheta',
                'estado_id' => '11',
            ),
            15 => 
            array (
                'id' => '2016',
                'nome' => 'Mamonas',
                'estado_id' => '11',
            ),
            16 => 
            array (
                'id' => '2017',
                'nome' => 'Manga',
                'estado_id' => '11',
            ),
            17 => 
            array (
                'id' => '2018',
                'nome' => 'Manhuaçu',
                'estado_id' => '11',
            ),
            18 => 
            array (
                'id' => '2019',
                'nome' => 'Manhumirim',
                'estado_id' => '11',
            ),
            19 => 
            array (
                'id' => '2020',
                'nome' => 'Mantena',
                'estado_id' => '11',
            ),
            20 => 
            array (
                'id' => '2021',
                'nome' => 'Mar de Espanha',
                'estado_id' => '11',
            ),
            21 => 
            array (
                'id' => '2022',
                'nome' => 'Maravilhas',
                'estado_id' => '11',
            ),
            22 => 
            array (
                'id' => '2023',
                'nome' => 'Maria da Fé',
                'estado_id' => '11',
            ),
            23 => 
            array (
                'id' => '2024',
                'nome' => 'Mariana',
                'estado_id' => '11',
            ),
            24 => 
            array (
                'id' => '2025',
                'nome' => 'Marilac',
                'estado_id' => '11',
            ),
            25 => 
            array (
                'id' => '2026',
                'nome' => 'Mário Campos',
                'estado_id' => '11',
            ),
            26 => 
            array (
                'id' => '2027',
                'nome' => 'Maripá de Minas',
                'estado_id' => '11',
            ),
            27 => 
            array (
                'id' => '2028',
                'nome' => 'Marliéria',
                'estado_id' => '11',
            ),
            28 => 
            array (
                'id' => '2029',
                'nome' => 'Marmelópolis',
                'estado_id' => '11',
            ),
            29 => 
            array (
                'id' => '2030',
                'nome' => 'Martinho Campos',
                'estado_id' => '11',
            ),
            30 => 
            array (
                'id' => '2031',
                'nome' => 'Martins Soares',
                'estado_id' => '11',
            ),
            31 => 
            array (
                'id' => '2032',
                'nome' => 'Mata Verde',
                'estado_id' => '11',
            ),
            32 => 
            array (
                'id' => '2033',
                'nome' => 'Materlândia',
                'estado_id' => '11',
            ),
            33 => 
            array (
                'id' => '2034',
                'nome' => 'Mateus Leme',
                'estado_id' => '11',
            ),
            34 => 
            array (
                'id' => '2035',
                'nome' => 'Mathias Lobato',
                'estado_id' => '11',
            ),
            35 => 
            array (
                'id' => '2036',
                'nome' => 'Matias Barbosa',
                'estado_id' => '11',
            ),
            36 => 
            array (
                'id' => '2037',
                'nome' => 'Matias Cardoso',
                'estado_id' => '11',
            ),
            37 => 
            array (
                'id' => '2038',
                'nome' => 'Matipó',
                'estado_id' => '11',
            ),
            38 => 
            array (
                'id' => '2039',
                'nome' => 'Mato Verde',
                'estado_id' => '11',
            ),
            39 => 
            array (
                'id' => '2040',
                'nome' => 'Matozinhos',
                'estado_id' => '11',
            ),
            40 => 
            array (
                'id' => '2041',
                'nome' => 'Matutina',
                'estado_id' => '11',
            ),
            41 => 
            array (
                'id' => '2042',
                'nome' => 'Medeiros',
                'estado_id' => '11',
            ),
            42 => 
            array (
                'id' => '2043',
                'nome' => 'Medina',
                'estado_id' => '11',
            ),
            43 => 
            array (
                'id' => '2044',
                'nome' => 'Mendes Pimentel',
                'estado_id' => '11',
            ),
            44 => 
            array (
                'id' => '2045',
                'nome' => 'Mercês',
                'estado_id' => '11',
            ),
            45 => 
            array (
                'id' => '2046',
                'nome' => 'Mesquita',
                'estado_id' => '11',
            ),
            46 => 
            array (
                'id' => '2047',
                'nome' => 'Minas Novas',
                'estado_id' => '11',
            ),
            47 => 
            array (
                'id' => '2048',
                'nome' => 'Minduri',
                'estado_id' => '11',
            ),
            48 => 
            array (
                'id' => '2049',
                'nome' => 'Mirabela',
                'estado_id' => '11',
            ),
            49 => 
            array (
                'id' => '2050',
                'nome' => 'Miradouro',
                'estado_id' => '11',
            ),
            50 => 
            array (
                'id' => '2051',
                'nome' => 'Miraí',
                'estado_id' => '11',
            ),
            51 => 
            array (
                'id' => '2052',
                'nome' => 'Miravânia',
                'estado_id' => '11',
            ),
            52 => 
            array (
                'id' => '2053',
                'nome' => 'Moeda',
                'estado_id' => '11',
            ),
            53 => 
            array (
                'id' => '2054',
                'nome' => 'Moema',
                'estado_id' => '11',
            ),
            54 => 
            array (
                'id' => '2055',
                'nome' => 'Monjolos',
                'estado_id' => '11',
            ),
            55 => 
            array (
                'id' => '2056',
                'nome' => 'Monsenhor Paulo',
                'estado_id' => '11',
            ),
            56 => 
            array (
                'id' => '2057',
                'nome' => 'Montalvânia',
                'estado_id' => '11',
            ),
            57 => 
            array (
                'id' => '2058',
                'nome' => 'Monte Alegre de Minas',
                'estado_id' => '11',
            ),
            58 => 
            array (
                'id' => '2059',
                'nome' => 'Monte Azul',
                'estado_id' => '11',
            ),
            59 => 
            array (
                'id' => '2060',
                'nome' => 'Monte Belo',
                'estado_id' => '11',
            ),
            60 => 
            array (
                'id' => '2061',
                'nome' => 'Monte Carmelo',
                'estado_id' => '11',
            ),
            61 => 
            array (
                'id' => '2062',
                'nome' => 'Monte Formoso',
                'estado_id' => '11',
            ),
            62 => 
            array (
                'id' => '2063',
                'nome' => 'Monte Santo de Minas',
                'estado_id' => '11',
            ),
            63 => 
            array (
                'id' => '2064',
                'nome' => 'Monte Sião',
                'estado_id' => '11',
            ),
            64 => 
            array (
                'id' => '2065',
                'nome' => 'Montes Claros',
                'estado_id' => '11',
            ),
            65 => 
            array (
                'id' => '2066',
                'nome' => 'Montezuma',
                'estado_id' => '11',
            ),
            66 => 
            array (
                'id' => '2067',
                'nome' => 'Morada Nova de Minas',
                'estado_id' => '11',
            ),
            67 => 
            array (
                'id' => '2068',
                'nome' => 'Morro da Garça',
                'estado_id' => '11',
            ),
            68 => 
            array (
                'id' => '2069',
                'nome' => 'Morro do Pilar',
                'estado_id' => '11',
            ),
            69 => 
            array (
                'id' => '2070',
                'nome' => 'Munhoz',
                'estado_id' => '11',
            ),
            70 => 
            array (
                'id' => '2071',
                'nome' => 'Muriaé',
                'estado_id' => '11',
            ),
            71 => 
            array (
                'id' => '2072',
                'nome' => 'Mutum',
                'estado_id' => '11',
            ),
            72 => 
            array (
                'id' => '2073',
                'nome' => 'Muzambinho',
                'estado_id' => '11',
            ),
            73 => 
            array (
                'id' => '2074',
                'nome' => 'Nacip Raydan',
                'estado_id' => '11',
            ),
            74 => 
            array (
                'id' => '2075',
                'nome' => 'Nanuque',
                'estado_id' => '11',
            ),
            75 => 
            array (
                'id' => '2076',
                'nome' => 'Naque',
                'estado_id' => '11',
            ),
            76 => 
            array (
                'id' => '2077',
                'nome' => 'Natalândia',
                'estado_id' => '11',
            ),
            77 => 
            array (
                'id' => '2078',
                'nome' => 'Natércia',
                'estado_id' => '11',
            ),
            78 => 
            array (
                'id' => '2079',
                'nome' => 'Nazareno',
                'estado_id' => '11',
            ),
            79 => 
            array (
                'id' => '2080',
                'nome' => 'Nepomuceno',
                'estado_id' => '11',
            ),
            80 => 
            array (
                'id' => '2081',
                'nome' => 'Ninheira',
                'estado_id' => '11',
            ),
            81 => 
            array (
                'id' => '2082',
                'nome' => 'Nova Belém',
                'estado_id' => '11',
            ),
            82 => 
            array (
                'id' => '2083',
                'nome' => 'Nova Era',
                'estado_id' => '11',
            ),
            83 => 
            array (
                'id' => '2084',
                'nome' => 'Nova Lima',
                'estado_id' => '11',
            ),
            84 => 
            array (
                'id' => '2085',
                'nome' => 'Nova Módica',
                'estado_id' => '11',
            ),
            85 => 
            array (
                'id' => '2086',
                'nome' => 'Nova Ponte',
                'estado_id' => '11',
            ),
            86 => 
            array (
                'id' => '2087',
                'nome' => 'Nova Porteirinha',
                'estado_id' => '11',
            ),
            87 => 
            array (
                'id' => '2088',
                'nome' => 'Nova Resende',
                'estado_id' => '11',
            ),
            88 => 
            array (
                'id' => '2089',
                'nome' => 'Nova Serrana',
                'estado_id' => '11',
            ),
            89 => 
            array (
                'id' => '2090',
                'nome' => 'Nova União',
                'estado_id' => '11',
            ),
            90 => 
            array (
                'id' => '2091',
                'nome' => 'Novo Cruzeiro',
                'estado_id' => '11',
            ),
            91 => 
            array (
                'id' => '2092',
                'nome' => 'Novo Oriente de Minas',
                'estado_id' => '11',
            ),
            92 => 
            array (
                'id' => '2093',
                'nome' => 'Novorizonte',
                'estado_id' => '11',
            ),
            93 => 
            array (
                'id' => '2094',
                'nome' => 'Olaria',
                'estado_id' => '11',
            ),
            94 => 
            array (
                'id' => '2095',
                'nome' => 'Olhos-d`Água',
                'estado_id' => '11',
            ),
            95 => 
            array (
                'id' => '2096',
                'nome' => 'Olímpio Noronha',
                'estado_id' => '11',
            ),
            96 => 
            array (
                'id' => '2097',
                'nome' => 'Oliveira',
                'estado_id' => '11',
            ),
            97 => 
            array (
                'id' => '2098',
                'nome' => 'Oliveira Fortes',
                'estado_id' => '11',
            ),
            98 => 
            array (
                'id' => '2099',
                'nome' => 'Onça de Pitangui',
                'estado_id' => '11',
            ),
            99 => 
            array (
                'id' => '2100',
                'nome' => 'Oratórios',
                'estado_id' => '11',
            ),
            100 => 
            array (
                'id' => '2101',
                'nome' => 'Orizânia',
                'estado_id' => '11',
            ),
            101 => 
            array (
                'id' => '2102',
                'nome' => 'Ouro Branco',
                'estado_id' => '11',
            ),
            102 => 
            array (
                'id' => '2103',
                'nome' => 'Ouro Fino',
                'estado_id' => '11',
            ),
            103 => 
            array (
                'id' => '2104',
                'nome' => 'Ouro Preto',
                'estado_id' => '11',
            ),
            104 => 
            array (
                'id' => '2105',
                'nome' => 'Ouro Verde de Minas',
                'estado_id' => '11',
            ),
            105 => 
            array (
                'id' => '2106',
                'nome' => 'Padre Carvalho',
                'estado_id' => '11',
            ),
            106 => 
            array (
                'id' => '2107',
                'nome' => 'Padre Paraíso',
                'estado_id' => '11',
            ),
            107 => 
            array (
                'id' => '2108',
                'nome' => 'Pai Pedro',
                'estado_id' => '11',
            ),
            108 => 
            array (
                'id' => '2109',
                'nome' => 'Paineiras',
                'estado_id' => '11',
            ),
            109 => 
            array (
                'id' => '2110',
                'nome' => 'Pains',
                'estado_id' => '11',
            ),
            110 => 
            array (
                'id' => '2111',
                'nome' => 'Paiva',
                'estado_id' => '11',
            ),
            111 => 
            array (
                'id' => '2112',
                'nome' => 'Palma',
                'estado_id' => '11',
            ),
            112 => 
            array (
                'id' => '2113',
                'nome' => 'Palmópolis',
                'estado_id' => '11',
            ),
            113 => 
            array (
                'id' => '2114',
                'nome' => 'Papagaios',
                'estado_id' => '11',
            ),
            114 => 
            array (
                'id' => '2115',
                'nome' => 'Pará de Minas',
                'estado_id' => '11',
            ),
            115 => 
            array (
                'id' => '2116',
                'nome' => 'Paracatu',
                'estado_id' => '11',
            ),
            116 => 
            array (
                'id' => '2117',
                'nome' => 'Paraguaçu',
                'estado_id' => '11',
            ),
            117 => 
            array (
                'id' => '2118',
                'nome' => 'Paraisópolis',
                'estado_id' => '11',
            ),
            118 => 
            array (
                'id' => '2119',
                'nome' => 'Paraopeba',
                'estado_id' => '11',
            ),
            119 => 
            array (
                'id' => '2120',
                'nome' => 'Passa Quatro',
                'estado_id' => '11',
            ),
            120 => 
            array (
                'id' => '2121',
                'nome' => 'Passa Tempo',
                'estado_id' => '11',
            ),
            121 => 
            array (
                'id' => '2122',
                'nome' => 'Passabém',
                'estado_id' => '11',
            ),
            122 => 
            array (
                'id' => '2123',
                'nome' => 'Passa-Vinte',
                'estado_id' => '11',
            ),
            123 => 
            array (
                'id' => '2124',
                'nome' => 'Passos',
                'estado_id' => '11',
            ),
            124 => 
            array (
                'id' => '2125',
                'nome' => 'Patis',
                'estado_id' => '11',
            ),
            125 => 
            array (
                'id' => '2126',
                'nome' => 'Patos de Minas',
                'estado_id' => '11',
            ),
            126 => 
            array (
                'id' => '2127',
                'nome' => 'Patrocínio',
                'estado_id' => '11',
            ),
            127 => 
            array (
                'id' => '2128',
                'nome' => 'Patrocínio do Muriaé',
                'estado_id' => '11',
            ),
            128 => 
            array (
                'id' => '2129',
                'nome' => 'Paula Cândido',
                'estado_id' => '11',
            ),
            129 => 
            array (
                'id' => '2130',
                'nome' => 'Paulistas',
                'estado_id' => '11',
            ),
            130 => 
            array (
                'id' => '2131',
                'nome' => 'Pavão',
                'estado_id' => '11',
            ),
            131 => 
            array (
                'id' => '2132',
                'nome' => 'Peçanha',
                'estado_id' => '11',
            ),
            132 => 
            array (
                'id' => '2133',
                'nome' => 'Pedra Azul',
                'estado_id' => '11',
            ),
            133 => 
            array (
                'id' => '2134',
                'nome' => 'Pedra Bonita',
                'estado_id' => '11',
            ),
            134 => 
            array (
                'id' => '2135',
                'nome' => 'Pedra do Anta',
                'estado_id' => '11',
            ),
            135 => 
            array (
                'id' => '2136',
                'nome' => 'Pedra do Indaiá',
                'estado_id' => '11',
            ),
            136 => 
            array (
                'id' => '2137',
                'nome' => 'Pedra Dourada',
                'estado_id' => '11',
            ),
            137 => 
            array (
                'id' => '2138',
                'nome' => 'Pedralva',
                'estado_id' => '11',
            ),
            138 => 
            array (
                'id' => '2139',
                'nome' => 'Pedras de Maria da Cruz',
                'estado_id' => '11',
            ),
            139 => 
            array (
                'id' => '2140',
                'nome' => 'Pedrinópolis',
                'estado_id' => '11',
            ),
            140 => 
            array (
                'id' => '2141',
                'nome' => 'Pedro Leopoldo',
                'estado_id' => '11',
            ),
            141 => 
            array (
                'id' => '2142',
                'nome' => 'Pedro Teixeira',
                'estado_id' => '11',
            ),
            142 => 
            array (
                'id' => '2143',
                'nome' => 'Pequeri',
                'estado_id' => '11',
            ),
            143 => 
            array (
                'id' => '2144',
                'nome' => 'Pequi',
                'estado_id' => '11',
            ),
            144 => 
            array (
                'id' => '2145',
                'nome' => 'Perdigão',
                'estado_id' => '11',
            ),
            145 => 
            array (
                'id' => '2146',
                'nome' => 'Perdizes',
                'estado_id' => '11',
            ),
            146 => 
            array (
                'id' => '2147',
                'nome' => 'Perdões',
                'estado_id' => '11',
            ),
            147 => 
            array (
                'id' => '2148',
                'nome' => 'Periquito',
                'estado_id' => '11',
            ),
            148 => 
            array (
                'id' => '2149',
                'nome' => 'Pescador',
                'estado_id' => '11',
            ),
            149 => 
            array (
                'id' => '2150',
                'nome' => 'Piau',
                'estado_id' => '11',
            ),
            150 => 
            array (
                'id' => '2151',
                'nome' => 'Piedade de Caratinga',
                'estado_id' => '11',
            ),
            151 => 
            array (
                'id' => '2152',
                'nome' => 'Piedade de Ponte Nova',
                'estado_id' => '11',
            ),
            152 => 
            array (
                'id' => '2153',
                'nome' => 'Piedade do Rio Grande',
                'estado_id' => '11',
            ),
            153 => 
            array (
                'id' => '2154',
                'nome' => 'Piedade dos Gerais',
                'estado_id' => '11',
            ),
            154 => 
            array (
                'id' => '2155',
                'nome' => 'Pimenta',
                'estado_id' => '11',
            ),
            155 => 
            array (
                'id' => '2156',
                'nome' => 'Pingo-d`Água',
                'estado_id' => '11',
            ),
            156 => 
            array (
                'id' => '2157',
                'nome' => 'Pintópolis',
                'estado_id' => '11',
            ),
            157 => 
            array (
                'id' => '2158',
                'nome' => 'Piracema',
                'estado_id' => '11',
            ),
            158 => 
            array (
                'id' => '2159',
                'nome' => 'Pirajuba',
                'estado_id' => '11',
            ),
            159 => 
            array (
                'id' => '2160',
                'nome' => 'Piranga',
                'estado_id' => '11',
            ),
            160 => 
            array (
                'id' => '2161',
                'nome' => 'Piranguçu',
                'estado_id' => '11',
            ),
            161 => 
            array (
                'id' => '2162',
                'nome' => 'Piranguinho',
                'estado_id' => '11',
            ),
            162 => 
            array (
                'id' => '2163',
                'nome' => 'Pirapetinga',
                'estado_id' => '11',
            ),
            163 => 
            array (
                'id' => '2164',
                'nome' => 'Pirapora',
                'estado_id' => '11',
            ),
            164 => 
            array (
                'id' => '2165',
                'nome' => 'Piraúba',
                'estado_id' => '11',
            ),
            165 => 
            array (
                'id' => '2166',
                'nome' => 'Pitangui',
                'estado_id' => '11',
            ),
            166 => 
            array (
                'id' => '2167',
                'nome' => 'Piumhi',
                'estado_id' => '11',
            ),
            167 => 
            array (
                'id' => '2168',
                'nome' => 'Planura',
                'estado_id' => '11',
            ),
            168 => 
            array (
                'id' => '2169',
                'nome' => 'Poço Fundo',
                'estado_id' => '11',
            ),
            169 => 
            array (
                'id' => '2170',
                'nome' => 'Poços de Caldas',
                'estado_id' => '11',
            ),
            170 => 
            array (
                'id' => '2171',
                'nome' => 'Pocrane',
                'estado_id' => '11',
            ),
            171 => 
            array (
                'id' => '2172',
                'nome' => 'Pompéu',
                'estado_id' => '11',
            ),
            172 => 
            array (
                'id' => '2173',
                'nome' => 'Ponte Nova',
                'estado_id' => '11',
            ),
            173 => 
            array (
                'id' => '2174',
                'nome' => 'Ponto Chique',
                'estado_id' => '11',
            ),
            174 => 
            array (
                'id' => '2175',
                'nome' => 'Ponto dos Volantes',
                'estado_id' => '11',
            ),
            175 => 
            array (
                'id' => '2176',
                'nome' => 'Porteirinha',
                'estado_id' => '11',
            ),
            176 => 
            array (
                'id' => '2177',
                'nome' => 'Porto Firme',
                'estado_id' => '11',
            ),
            177 => 
            array (
                'id' => '2178',
                'nome' => 'Poté',
                'estado_id' => '11',
            ),
            178 => 
            array (
                'id' => '2179',
                'nome' => 'Pouso Alegre',
                'estado_id' => '11',
            ),
            179 => 
            array (
                'id' => '2180',
                'nome' => 'Pouso Alto',
                'estado_id' => '11',
            ),
            180 => 
            array (
                'id' => '2181',
                'nome' => 'Prados',
                'estado_id' => '11',
            ),
            181 => 
            array (
                'id' => '2182',
                'nome' => 'Prata',
                'estado_id' => '11',
            ),
            182 => 
            array (
                'id' => '2183',
                'nome' => 'Pratápolis',
                'estado_id' => '11',
            ),
            183 => 
            array (
                'id' => '2184',
                'nome' => 'Pratinha',
                'estado_id' => '11',
            ),
            184 => 
            array (
                'id' => '2185',
                'nome' => 'Presidente Bernardes',
                'estado_id' => '11',
            ),
            185 => 
            array (
                'id' => '2186',
                'nome' => 'Presidente Juscelino',
                'estado_id' => '11',
            ),
            186 => 
            array (
                'id' => '2187',
                'nome' => 'Presidente Kubitschek',
                'estado_id' => '11',
            ),
            187 => 
            array (
                'id' => '2188',
                'nome' => 'Presidente Olegário',
                'estado_id' => '11',
            ),
            188 => 
            array (
                'id' => '2189',
                'nome' => 'Prudente de Morais',
                'estado_id' => '11',
            ),
            189 => 
            array (
                'id' => '2190',
                'nome' => 'Quartel Geral',
                'estado_id' => '11',
            ),
            190 => 
            array (
                'id' => '2191',
                'nome' => 'Queluzito',
                'estado_id' => '11',
            ),
            191 => 
            array (
                'id' => '2192',
                'nome' => 'Raposos',
                'estado_id' => '11',
            ),
            192 => 
            array (
                'id' => '2193',
                'nome' => 'Raul Soares',
                'estado_id' => '11',
            ),
            193 => 
            array (
                'id' => '2194',
                'nome' => 'Recreio',
                'estado_id' => '11',
            ),
            194 => 
            array (
                'id' => '2195',
                'nome' => 'Reduto',
                'estado_id' => '11',
            ),
            195 => 
            array (
                'id' => '2196',
                'nome' => 'Resende Costa',
                'estado_id' => '11',
            ),
            196 => 
            array (
                'id' => '2197',
                'nome' => 'Resplendor',
                'estado_id' => '11',
            ),
            197 => 
            array (
                'id' => '2198',
                'nome' => 'Ressaquinha',
                'estado_id' => '11',
            ),
            198 => 
            array (
                'id' => '2199',
                'nome' => 'Riachinho',
                'estado_id' => '11',
            ),
            199 => 
            array (
                'id' => '2200',
                'nome' => 'Riacho dos Machados',
                'estado_id' => '11',
            ),
            200 => 
            array (
                'id' => '2201',
                'nome' => 'Ribeirão das Neves',
                'estado_id' => '11',
            ),
            201 => 
            array (
                'id' => '2202',
                'nome' => 'Ribeirão Vermelho',
                'estado_id' => '11',
            ),
            202 => 
            array (
                'id' => '2203',
                'nome' => 'Rio Acima',
                'estado_id' => '11',
            ),
            203 => 
            array (
                'id' => '2204',
                'nome' => 'Rio Casca',
                'estado_id' => '11',
            ),
            204 => 
            array (
                'id' => '2205',
                'nome' => 'Rio do Prado',
                'estado_id' => '11',
            ),
            205 => 
            array (
                'id' => '2206',
                'nome' => 'Rio Doce',
                'estado_id' => '11',
            ),
            206 => 
            array (
                'id' => '2207',
                'nome' => 'Rio Espera',
                'estado_id' => '11',
            ),
            207 => 
            array (
                'id' => '2208',
                'nome' => 'Rio Manso',
                'estado_id' => '11',
            ),
            208 => 
            array (
                'id' => '2209',
                'nome' => 'Rio Novo',
                'estado_id' => '11',
            ),
            209 => 
            array (
                'id' => '2210',
                'nome' => 'Rio Paranaíba',
                'estado_id' => '11',
            ),
            210 => 
            array (
                'id' => '2211',
                'nome' => 'Rio Pardo de Minas',
                'estado_id' => '11',
            ),
            211 => 
            array (
                'id' => '2212',
                'nome' => 'Rio Piracicaba',
                'estado_id' => '11',
            ),
            212 => 
            array (
                'id' => '2213',
                'nome' => 'Rio Pomba',
                'estado_id' => '11',
            ),
            213 => 
            array (
                'id' => '2214',
                'nome' => 'Rio Preto',
                'estado_id' => '11',
            ),
            214 => 
            array (
                'id' => '2215',
                'nome' => 'Rio Vermelho',
                'estado_id' => '11',
            ),
            215 => 
            array (
                'id' => '2216',
                'nome' => 'Ritápolis',
                'estado_id' => '11',
            ),
            216 => 
            array (
                'id' => '2217',
                'nome' => 'Rochedo de Minas',
                'estado_id' => '11',
            ),
            217 => 
            array (
                'id' => '2218',
                'nome' => 'Rodeiro',
                'estado_id' => '11',
            ),
            218 => 
            array (
                'id' => '2219',
                'nome' => 'Romaria',
                'estado_id' => '11',
            ),
            219 => 
            array (
                'id' => '2220',
                'nome' => 'Rosário da Limeira',
                'estado_id' => '11',
            ),
            220 => 
            array (
                'id' => '2221',
                'nome' => 'Rubelita',
                'estado_id' => '11',
            ),
            221 => 
            array (
                'id' => '2222',
                'nome' => 'Rubim',
                'estado_id' => '11',
            ),
            222 => 
            array (
                'id' => '2223',
                'nome' => 'Sabará',
                'estado_id' => '11',
            ),
            223 => 
            array (
                'id' => '2224',
                'nome' => 'Sabinópolis',
                'estado_id' => '11',
            ),
            224 => 
            array (
                'id' => '2225',
                'nome' => 'Sacramento',
                'estado_id' => '11',
            ),
            225 => 
            array (
                'id' => '2226',
                'nome' => 'Salinas',
                'estado_id' => '11',
            ),
            226 => 
            array (
                'id' => '2227',
                'nome' => 'Salto da Divisa',
                'estado_id' => '11',
            ),
            227 => 
            array (
                'id' => '2228',
                'nome' => 'Santa Bárbara',
                'estado_id' => '11',
            ),
            228 => 
            array (
                'id' => '2229',
                'nome' => 'Santa Bárbara do Leste',
                'estado_id' => '11',
            ),
            229 => 
            array (
                'id' => '2230',
                'nome' => 'Santa Bárbara do Monte Verde',
                'estado_id' => '11',
            ),
            230 => 
            array (
                'id' => '2231',
                'nome' => 'Santa Bárbara do Tugúrio',
                'estado_id' => '11',
            ),
            231 => 
            array (
                'id' => '2232',
                'nome' => 'Santa Cruz de Minas',
                'estado_id' => '11',
            ),
            232 => 
            array (
                'id' => '2233',
                'nome' => 'Santa Cruz de Salinas',
                'estado_id' => '11',
            ),
            233 => 
            array (
                'id' => '2234',
                'nome' => 'Santa Cruz do Escalvado',
                'estado_id' => '11',
            ),
            234 => 
            array (
                'id' => '2235',
                'nome' => 'Santa Efigênia de Minas',
                'estado_id' => '11',
            ),
            235 => 
            array (
                'id' => '2236',
                'nome' => 'Santa Fé de Minas',
                'estado_id' => '11',
            ),
            236 => 
            array (
                'id' => '2237',
                'nome' => 'Santa Helena de Minas',
                'estado_id' => '11',
            ),
            237 => 
            array (
                'id' => '2238',
                'nome' => 'Santa Juliana',
                'estado_id' => '11',
            ),
            238 => 
            array (
                'id' => '2239',
                'nome' => 'Santa Luzia',
                'estado_id' => '11',
            ),
            239 => 
            array (
                'id' => '2240',
                'nome' => 'Santa Margarida',
                'estado_id' => '11',
            ),
            240 => 
            array (
                'id' => '2241',
                'nome' => 'Santa Maria de Itabira',
                'estado_id' => '11',
            ),
            241 => 
            array (
                'id' => '2242',
                'nome' => 'Santa Maria do Salto',
                'estado_id' => '11',
            ),
            242 => 
            array (
                'id' => '2243',
                'nome' => 'Santa Maria do Suaçuí',
                'estado_id' => '11',
            ),
            243 => 
            array (
                'id' => '2244',
                'nome' => 'Santa Rita de Caldas',
                'estado_id' => '11',
            ),
            244 => 
            array (
                'id' => '2245',
                'nome' => 'Santa Rita de Ibitipoca',
                'estado_id' => '11',
            ),
            245 => 
            array (
                'id' => '2246',
                'nome' => 'Santa Rita de Jacutinga',
                'estado_id' => '11',
            ),
            246 => 
            array (
                'id' => '2247',
                'nome' => 'Santa Rita de Minas',
                'estado_id' => '11',
            ),
            247 => 
            array (
                'id' => '2248',
                'nome' => 'Santa Rita do Itueto',
                'estado_id' => '11',
            ),
            248 => 
            array (
                'id' => '2249',
                'nome' => 'Santa Rita do Sapucaí',
                'estado_id' => '11',
            ),
            249 => 
            array (
                'id' => '2250',
                'nome' => 'Santa Rosa da Serra',
                'estado_id' => '11',
            ),
            250 => 
            array (
                'id' => '2251',
                'nome' => 'Santa Vitória',
                'estado_id' => '11',
            ),
            251 => 
            array (
                'id' => '2252',
                'nome' => 'Santana da Vargem',
                'estado_id' => '11',
            ),
            252 => 
            array (
                'id' => '2253',
                'nome' => 'Santana de Cataguases',
                'estado_id' => '11',
            ),
            253 => 
            array (
                'id' => '2254',
                'nome' => 'Santana de Pirapama',
                'estado_id' => '11',
            ),
            254 => 
            array (
                'id' => '2255',
                'nome' => 'Santana do Deserto',
                'estado_id' => '11',
            ),
            255 => 
            array (
                'id' => '2256',
                'nome' => 'Santana do Garambéu',
                'estado_id' => '11',
            ),
            256 => 
            array (
                'id' => '2257',
                'nome' => 'Santana do Jacaré',
                'estado_id' => '11',
            ),
            257 => 
            array (
                'id' => '2258',
                'nome' => 'Santana do Manhuaçu',
                'estado_id' => '11',
            ),
            258 => 
            array (
                'id' => '2259',
                'nome' => 'Santana do Paraíso',
                'estado_id' => '11',
            ),
            259 => 
            array (
                'id' => '2260',
                'nome' => 'Santana do Riacho',
                'estado_id' => '11',
            ),
            260 => 
            array (
                'id' => '2261',
                'nome' => 'Santana dos Montes',
                'estado_id' => '11',
            ),
            261 => 
            array (
                'id' => '2262',
                'nome' => 'Santo Antônio do Amparo',
                'estado_id' => '11',
            ),
            262 => 
            array (
                'id' => '2263',
                'nome' => 'Santo Antônio do Aventureiro',
                'estado_id' => '11',
            ),
            263 => 
            array (
                'id' => '2264',
                'nome' => 'Santo Antônio do Grama',
                'estado_id' => '11',
            ),
            264 => 
            array (
                'id' => '2265',
                'nome' => 'Santo Antônio do Itambé',
                'estado_id' => '11',
            ),
            265 => 
            array (
                'id' => '2266',
                'nome' => 'Santo Antônio do Jacinto',
                'estado_id' => '11',
            ),
            266 => 
            array (
                'id' => '2267',
                'nome' => 'Santo Antônio do Monte',
                'estado_id' => '11',
            ),
            267 => 
            array (
                'id' => '2268',
                'nome' => 'Santo Antônio do Retiro',
                'estado_id' => '11',
            ),
            268 => 
            array (
                'id' => '2269',
                'nome' => 'Santo Antônio do Rio Abaixo',
                'estado_id' => '11',
            ),
            269 => 
            array (
                'id' => '2270',
                'nome' => 'Santo Hipólito',
                'estado_id' => '11',
            ),
            270 => 
            array (
                'id' => '2271',
                'nome' => 'Santos Dumont',
                'estado_id' => '11',
            ),
            271 => 
            array (
                'id' => '2272',
                'nome' => 'São Bento Abade',
                'estado_id' => '11',
            ),
            272 => 
            array (
                'id' => '2273',
                'nome' => 'São Brás do Suaçuí',
                'estado_id' => '11',
            ),
            273 => 
            array (
                'id' => '2274',
                'nome' => 'São Domingos das Dores',
                'estado_id' => '11',
            ),
            274 => 
            array (
                'id' => '2275',
                'nome' => 'São Domingos do Prata',
                'estado_id' => '11',
            ),
            275 => 
            array (
                'id' => '2276',
                'nome' => 'São Félix de Minas',
                'estado_id' => '11',
            ),
            276 => 
            array (
                'id' => '2277',
                'nome' => 'São Francisco',
                'estado_id' => '11',
            ),
            277 => 
            array (
                'id' => '2278',
                'nome' => 'São Francisco de Paula',
                'estado_id' => '11',
            ),
            278 => 
            array (
                'id' => '2279',
                'nome' => 'São Francisco de Sales',
                'estado_id' => '11',
            ),
            279 => 
            array (
                'id' => '2280',
                'nome' => 'São Francisco do Glória',
                'estado_id' => '11',
            ),
            280 => 
            array (
                'id' => '2281',
                'nome' => 'São Geraldo',
                'estado_id' => '11',
            ),
            281 => 
            array (
                'id' => '2282',
                'nome' => 'São Geraldo da Piedade',
                'estado_id' => '11',
            ),
            282 => 
            array (
                'id' => '2283',
                'nome' => 'São Geraldo do Baixio',
                'estado_id' => '11',
            ),
            283 => 
            array (
                'id' => '2284',
                'nome' => 'São Gonçalo do Abaeté',
                'estado_id' => '11',
            ),
            284 => 
            array (
                'id' => '2285',
                'nome' => 'São Gonçalo do Pará',
                'estado_id' => '11',
            ),
            285 => 
            array (
                'id' => '2286',
                'nome' => 'São Gonçalo do Rio Abaixo',
                'estado_id' => '11',
            ),
            286 => 
            array (
                'id' => '2287',
                'nome' => 'São Gonçalo do Rio Preto',
                'estado_id' => '11',
            ),
            287 => 
            array (
                'id' => '2288',
                'nome' => 'São Gonçalo do Sapucaí',
                'estado_id' => '11',
            ),
            288 => 
            array (
                'id' => '2289',
                'nome' => 'São Gotardo',
                'estado_id' => '11',
            ),
            289 => 
            array (
                'id' => '2290',
                'nome' => 'São João Batista do Glória',
                'estado_id' => '11',
            ),
            290 => 
            array (
                'id' => '2291',
                'nome' => 'São João da Lagoa',
                'estado_id' => '11',
            ),
            291 => 
            array (
                'id' => '2292',
                'nome' => 'São João da Mata',
                'estado_id' => '11',
            ),
            292 => 
            array (
                'id' => '2293',
                'nome' => 'São João da Ponte',
                'estado_id' => '11',
            ),
            293 => 
            array (
                'id' => '2294',
                'nome' => 'São João das Missões',
                'estado_id' => '11',
            ),
            294 => 
            array (
                'id' => '2295',
                'nome' => 'São João del Rei',
                'estado_id' => '11',
            ),
            295 => 
            array (
                'id' => '2296',
                'nome' => 'São João do Manhuaçu',
                'estado_id' => '11',
            ),
            296 => 
            array (
                'id' => '2297',
                'nome' => 'São João do Manteninha',
                'estado_id' => '11',
            ),
            297 => 
            array (
                'id' => '2298',
                'nome' => 'São João do Oriente',
                'estado_id' => '11',
            ),
            298 => 
            array (
                'id' => '2299',
                'nome' => 'São João do Pacuí',
                'estado_id' => '11',
            ),
            299 => 
            array (
                'id' => '2300',
                'nome' => 'São João do Paraíso',
                'estado_id' => '11',
            ),
            300 => 
            array (
                'id' => '2301',
                'nome' => 'São João Evangelista',
                'estado_id' => '11',
            ),
            301 => 
            array (
                'id' => '2302',
                'nome' => 'São João Nepomuceno',
                'estado_id' => '11',
            ),
            302 => 
            array (
                'id' => '2303',
                'nome' => 'São Joaquim de Bicas',
                'estado_id' => '11',
            ),
            303 => 
            array (
                'id' => '2304',
                'nome' => 'São José da Barra',
                'estado_id' => '11',
            ),
            304 => 
            array (
                'id' => '2305',
                'nome' => 'São José da Lapa',
                'estado_id' => '11',
            ),
            305 => 
            array (
                'id' => '2306',
                'nome' => 'São José da Safira',
                'estado_id' => '11',
            ),
            306 => 
            array (
                'id' => '2307',
                'nome' => 'São José da Varginha',
                'estado_id' => '11',
            ),
            307 => 
            array (
                'id' => '2308',
                'nome' => 'São José do Alegre',
                'estado_id' => '11',
            ),
            308 => 
            array (
                'id' => '2309',
                'nome' => 'São José do Divino',
                'estado_id' => '11',
            ),
            309 => 
            array (
                'id' => '2310',
                'nome' => 'São José do Goiabal',
                'estado_id' => '11',
            ),
            310 => 
            array (
                'id' => '2311',
                'nome' => 'São José do Jacuri',
                'estado_id' => '11',
            ),
            311 => 
            array (
                'id' => '2312',
                'nome' => 'São José do Mantimento',
                'estado_id' => '11',
            ),
            312 => 
            array (
                'id' => '2313',
                'nome' => 'São Lourenço',
                'estado_id' => '11',
            ),
            313 => 
            array (
                'id' => '2314',
                'nome' => 'São Miguel do Anta',
                'estado_id' => '11',
            ),
            314 => 
            array (
                'id' => '2315',
                'nome' => 'São Pedro da União',
                'estado_id' => '11',
            ),
            315 => 
            array (
                'id' => '2316',
                'nome' => 'São Pedro do Suaçuí',
                'estado_id' => '11',
            ),
            316 => 
            array (
                'id' => '2317',
                'nome' => 'São Pedro dos Ferros',
                'estado_id' => '11',
            ),
            317 => 
            array (
                'id' => '2318',
                'nome' => 'São Romão',
                'estado_id' => '11',
            ),
            318 => 
            array (
                'id' => '2319',
                'nome' => 'São Roque de Minas',
                'estado_id' => '11',
            ),
            319 => 
            array (
                'id' => '2320',
                'nome' => 'São Sebastião da Bela Vista',
                'estado_id' => '11',
            ),
            320 => 
            array (
                'id' => '2321',
                'nome' => 'São Sebastião da Vargem Alegre',
                'estado_id' => '11',
            ),
            321 => 
            array (
                'id' => '2322',
                'nome' => 'São Sebastião do Anta',
                'estado_id' => '11',
            ),
            322 => 
            array (
                'id' => '2323',
                'nome' => 'São Sebastião do Maranhão',
                'estado_id' => '11',
            ),
            323 => 
            array (
                'id' => '2324',
                'nome' => 'São Sebastião do Oeste',
                'estado_id' => '11',
            ),
            324 => 
            array (
                'id' => '2325',
                'nome' => 'São Sebastião do Paraíso',
                'estado_id' => '11',
            ),
            325 => 
            array (
                'id' => '2326',
                'nome' => 'São Sebastião do Rio Preto',
                'estado_id' => '11',
            ),
            326 => 
            array (
                'id' => '2327',
                'nome' => 'São Sebastião do Rio Verde',
                'estado_id' => '11',
            ),
            327 => 
            array (
                'id' => '2328',
                'nome' => 'São Thomé das Letras',
                'estado_id' => '11',
            ),
            328 => 
            array (
                'id' => '2329',
                'nome' => 'São Tiago',
                'estado_id' => '11',
            ),
            329 => 
            array (
                'id' => '2330',
                'nome' => 'São Tomás de Aquino',
                'estado_id' => '11',
            ),
            330 => 
            array (
                'id' => '2331',
                'nome' => 'São Vicente de Minas',
                'estado_id' => '11',
            ),
            331 => 
            array (
                'id' => '2332',
                'nome' => 'Sapucaí-Mirim',
                'estado_id' => '11',
            ),
            332 => 
            array (
                'id' => '2333',
                'nome' => 'Sardoá',
                'estado_id' => '11',
            ),
            333 => 
            array (
                'id' => '2334',
                'nome' => 'Sarzedo',
                'estado_id' => '11',
            ),
            334 => 
            array (
                'id' => '2335',
                'nome' => 'Sem-Peixe',
                'estado_id' => '11',
            ),
            335 => 
            array (
                'id' => '2336',
                'nome' => 'Senador Amaral',
                'estado_id' => '11',
            ),
            336 => 
            array (
                'id' => '2337',
                'nome' => 'Senador Cortes',
                'estado_id' => '11',
            ),
            337 => 
            array (
                'id' => '2338',
                'nome' => 'Senador Firmino',
                'estado_id' => '11',
            ),
            338 => 
            array (
                'id' => '2339',
                'nome' => 'Senador José Bento',
                'estado_id' => '11',
            ),
            339 => 
            array (
                'id' => '2340',
                'nome' => 'Senador Modestino Gonçalves',
                'estado_id' => '11',
            ),
            340 => 
            array (
                'id' => '2341',
                'nome' => 'Senhora de Oliveira',
                'estado_id' => '11',
            ),
            341 => 
            array (
                'id' => '2342',
                'nome' => 'Senhora do Porto',
                'estado_id' => '11',
            ),
            342 => 
            array (
                'id' => '2343',
                'nome' => 'Senhora dos Remédios',
                'estado_id' => '11',
            ),
            343 => 
            array (
                'id' => '2344',
                'nome' => 'Sericita',
                'estado_id' => '11',
            ),
            344 => 
            array (
                'id' => '2345',
                'nome' => 'Seritinga',
                'estado_id' => '11',
            ),
            345 => 
            array (
                'id' => '2346',
                'nome' => 'Serra Azul de Minas',
                'estado_id' => '11',
            ),
            346 => 
            array (
                'id' => '2347',
                'nome' => 'Serra da Saudade',
                'estado_id' => '11',
            ),
            347 => 
            array (
                'id' => '2348',
                'nome' => 'Serra do Salitre',
                'estado_id' => '11',
            ),
            348 => 
            array (
                'id' => '2349',
                'nome' => 'Serra dos Aimorés',
                'estado_id' => '11',
            ),
            349 => 
            array (
                'id' => '2350',
                'nome' => 'Serrania',
                'estado_id' => '11',
            ),
            350 => 
            array (
                'id' => '2351',
                'nome' => 'Serranópolis de Minas',
                'estado_id' => '11',
            ),
            351 => 
            array (
                'id' => '2352',
                'nome' => 'Serranos',
                'estado_id' => '11',
            ),
            352 => 
            array (
                'id' => '2353',
                'nome' => 'Serro',
                'estado_id' => '11',
            ),
            353 => 
            array (
                'id' => '2354',
                'nome' => 'Sete Lagoas',
                'estado_id' => '11',
            ),
            354 => 
            array (
                'id' => '2355',
                'nome' => 'Setubinha',
                'estado_id' => '11',
            ),
            355 => 
            array (
                'id' => '2356',
                'nome' => 'Silveirânia',
                'estado_id' => '11',
            ),
            356 => 
            array (
                'id' => '2357',
                'nome' => 'Silvianópolis',
                'estado_id' => '11',
            ),
            357 => 
            array (
                'id' => '2358',
                'nome' => 'Simão Pereira',
                'estado_id' => '11',
            ),
            358 => 
            array (
                'id' => '2359',
                'nome' => 'Simonésia',
                'estado_id' => '11',
            ),
            359 => 
            array (
                'id' => '2360',
                'nome' => 'Sobrália',
                'estado_id' => '11',
            ),
            360 => 
            array (
                'id' => '2361',
                'nome' => 'Soledade de Minas',
                'estado_id' => '11',
            ),
            361 => 
            array (
                'id' => '2362',
                'nome' => 'Tabuleiro',
                'estado_id' => '11',
            ),
            362 => 
            array (
                'id' => '2363',
                'nome' => 'Taiobeiras',
                'estado_id' => '11',
            ),
            363 => 
            array (
                'id' => '2364',
                'nome' => 'Taparuba',
                'estado_id' => '11',
            ),
            364 => 
            array (
                'id' => '2365',
                'nome' => 'Tapira',
                'estado_id' => '11',
            ),
            365 => 
            array (
                'id' => '2366',
                'nome' => 'Tapiraí',
                'estado_id' => '11',
            ),
            366 => 
            array (
                'id' => '2367',
                'nome' => 'Taquaraçu de Minas',
                'estado_id' => '11',
            ),
            367 => 
            array (
                'id' => '2368',
                'nome' => 'Tarumirim',
                'estado_id' => '11',
            ),
            368 => 
            array (
                'id' => '2369',
                'nome' => 'Teixeiras',
                'estado_id' => '11',
            ),
            369 => 
            array (
                'id' => '2370',
                'nome' => 'Teófilo Otoni',
                'estado_id' => '11',
            ),
            370 => 
            array (
                'id' => '2371',
                'nome' => 'Timóteo',
                'estado_id' => '11',
            ),
            371 => 
            array (
                'id' => '2372',
                'nome' => 'Tiradentes',
                'estado_id' => '11',
            ),
            372 => 
            array (
                'id' => '2373',
                'nome' => 'Tiros',
                'estado_id' => '11',
            ),
            373 => 
            array (
                'id' => '2374',
                'nome' => 'Tocantins',
                'estado_id' => '11',
            ),
            374 => 
            array (
                'id' => '2375',
                'nome' => 'Tocos do Moji',
                'estado_id' => '11',
            ),
            375 => 
            array (
                'id' => '2376',
                'nome' => 'Toledo',
                'estado_id' => '11',
            ),
            376 => 
            array (
                'id' => '2377',
                'nome' => 'Tombos',
                'estado_id' => '11',
            ),
            377 => 
            array (
                'id' => '2378',
                'nome' => 'Três Corações',
                'estado_id' => '11',
            ),
            378 => 
            array (
                'id' => '2379',
                'nome' => 'Três Marias',
                'estado_id' => '11',
            ),
            379 => 
            array (
                'id' => '2380',
                'nome' => 'Três Pontas',
                'estado_id' => '11',
            ),
            380 => 
            array (
                'id' => '2381',
                'nome' => 'Tumiritinga',
                'estado_id' => '11',
            ),
            381 => 
            array (
                'id' => '2382',
                'nome' => 'Tupaciguara',
                'estado_id' => '11',
            ),
            382 => 
            array (
                'id' => '2383',
                'nome' => 'Turmalina',
                'estado_id' => '11',
            ),
            383 => 
            array (
                'id' => '2384',
                'nome' => 'Turvolândia',
                'estado_id' => '11',
            ),
            384 => 
            array (
                'id' => '2385',
                'nome' => 'Ubá',
                'estado_id' => '11',
            ),
            385 => 
            array (
                'id' => '2386',
                'nome' => 'Ubaí',
                'estado_id' => '11',
            ),
            386 => 
            array (
                'id' => '2387',
                'nome' => 'Ubaporanga',
                'estado_id' => '11',
            ),
            387 => 
            array (
                'id' => '2388',
                'nome' => 'Uberaba',
                'estado_id' => '11',
            ),
            388 => 
            array (
                'id' => '2389',
                'nome' => 'Uberlândia',
                'estado_id' => '11',
            ),
            389 => 
            array (
                'id' => '2390',
                'nome' => 'Umburatiba',
                'estado_id' => '11',
            ),
            390 => 
            array (
                'id' => '2391',
                'nome' => 'Unaí',
                'estado_id' => '11',
            ),
            391 => 
            array (
                'id' => '2392',
                'nome' => 'União de Minas',
                'estado_id' => '11',
            ),
            392 => 
            array (
                'id' => '2393',
                'nome' => 'Uruana de Minas',
                'estado_id' => '11',
            ),
            393 => 
            array (
                'id' => '2394',
                'nome' => 'Urucânia',
                'estado_id' => '11',
            ),
            394 => 
            array (
                'id' => '2395',
                'nome' => 'Urucuia',
                'estado_id' => '11',
            ),
            395 => 
            array (
                'id' => '2396',
                'nome' => 'Vargem Alegre',
                'estado_id' => '11',
            ),
            396 => 
            array (
                'id' => '2397',
                'nome' => 'Vargem Bonita',
                'estado_id' => '11',
            ),
            397 => 
            array (
                'id' => '2398',
                'nome' => 'Vargem Grande do Rio Pardo',
                'estado_id' => '11',
            ),
            398 => 
            array (
                'id' => '2399',
                'nome' => 'Varginha',
                'estado_id' => '11',
            ),
            399 => 
            array (
                'id' => '2400',
                'nome' => 'Varjão de Minas',
                'estado_id' => '11',
            ),
            400 => 
            array (
                'id' => '2401',
                'nome' => 'Várzea da Palma',
                'estado_id' => '11',
            ),
            401 => 
            array (
                'id' => '2402',
                'nome' => 'Varzelândia',
                'estado_id' => '11',
            ),
            402 => 
            array (
                'id' => '2403',
                'nome' => 'Vazante',
                'estado_id' => '11',
            ),
            403 => 
            array (
                'id' => '2404',
                'nome' => 'Verdelândia',
                'estado_id' => '11',
            ),
            404 => 
            array (
                'id' => '2405',
                'nome' => 'Veredinha',
                'estado_id' => '11',
            ),
            405 => 
            array (
                'id' => '2406',
                'nome' => 'Veríssimo',
                'estado_id' => '11',
            ),
            406 => 
            array (
                'id' => '2407',
                'nome' => 'Vermelho Novo',
                'estado_id' => '11',
            ),
            407 => 
            array (
                'id' => '2408',
                'nome' => 'Vespasiano',
                'estado_id' => '11',
            ),
            408 => 
            array (
                'id' => '2409',
                'nome' => 'Viçosa',
                'estado_id' => '11',
            ),
            409 => 
            array (
                'id' => '2410',
                'nome' => 'Vieiras',
                'estado_id' => '11',
            ),
            410 => 
            array (
                'id' => '2411',
                'nome' => 'Virgem da Lapa',
                'estado_id' => '11',
            ),
            411 => 
            array (
                'id' => '2412',
                'nome' => 'Virgínia',
                'estado_id' => '11',
            ),
            412 => 
            array (
                'id' => '2413',
                'nome' => 'Virginópolis',
                'estado_id' => '11',
            ),
            413 => 
            array (
                'id' => '2414',
                'nome' => 'Virgolândia',
                'estado_id' => '11',
            ),
            414 => 
            array (
                'id' => '2415',
                'nome' => 'Visconde do Rio Branco',
                'estado_id' => '11',
            ),
            415 => 
            array (
                'id' => '2416',
                'nome' => 'Volta Grande',
                'estado_id' => '11',
            ),
            416 => 
            array (
                'id' => '2417',
                'nome' => 'Wenceslau Braz',
                'estado_id' => '11',
            ),
            417 => 
            array (
                'id' => '2418',
                'nome' => 'Abaetetuba',
                'estado_id' => '14',
            ),
            418 => 
            array (
                'id' => '2419',
                'nome' => 'Abel Figueiredo',
                'estado_id' => '14',
            ),
            419 => 
            array (
                'id' => '2420',
                'nome' => 'Acará',
                'estado_id' => '14',
            ),
            420 => 
            array (
                'id' => '2421',
                'nome' => 'Afuá',
                'estado_id' => '14',
            ),
            421 => 
            array (
                'id' => '2422',
                'nome' => 'Água Azul do Norte',
                'estado_id' => '14',
            ),
            422 => 
            array (
                'id' => '2423',
                'nome' => 'Alenquer',
                'estado_id' => '14',
            ),
            423 => 
            array (
                'id' => '2424',
                'nome' => 'Almeirim',
                'estado_id' => '14',
            ),
            424 => 
            array (
                'id' => '2425',
                'nome' => 'Altamira',
                'estado_id' => '14',
            ),
            425 => 
            array (
                'id' => '2426',
                'nome' => 'Anajás',
                'estado_id' => '14',
            ),
            426 => 
            array (
                'id' => '2427',
                'nome' => 'Ananindeua',
                'estado_id' => '14',
            ),
            427 => 
            array (
                'id' => '2428',
                'nome' => 'Anapu',
                'estado_id' => '14',
            ),
            428 => 
            array (
                'id' => '2429',
                'nome' => 'Augusto Corrêa',
                'estado_id' => '14',
            ),
            429 => 
            array (
                'id' => '2430',
                'nome' => 'Aurora do Pará',
                'estado_id' => '14',
            ),
            430 => 
            array (
                'id' => '2431',
                'nome' => 'Aveiro',
                'estado_id' => '14',
            ),
            431 => 
            array (
                'id' => '2432',
                'nome' => 'Bagre',
                'estado_id' => '14',
            ),
            432 => 
            array (
                'id' => '2433',
                'nome' => 'Baião',
                'estado_id' => '14',
            ),
            433 => 
            array (
                'id' => '2434',
                'nome' => 'Bannach',
                'estado_id' => '14',
            ),
            434 => 
            array (
                'id' => '2435',
                'nome' => 'Barcarena',
                'estado_id' => '14',
            ),
            435 => 
            array (
                'id' => '2436',
                'nome' => 'Belém',
                'estado_id' => '14',
            ),
            436 => 
            array (
                'id' => '2437',
                'nome' => 'Belterra',
                'estado_id' => '14',
            ),
            437 => 
            array (
                'id' => '2438',
                'nome' => 'Benevides',
                'estado_id' => '14',
            ),
            438 => 
            array (
                'id' => '2439',
                'nome' => 'Bom Jesus do Tocantins',
                'estado_id' => '14',
            ),
            439 => 
            array (
                'id' => '2440',
                'nome' => 'Bonito',
                'estado_id' => '14',
            ),
            440 => 
            array (
                'id' => '2441',
                'nome' => 'Bragança',
                'estado_id' => '14',
            ),
            441 => 
            array (
                'id' => '2442',
                'nome' => 'Brasil Novo',
                'estado_id' => '14',
            ),
            442 => 
            array (
                'id' => '2443',
                'nome' => 'Brejo Grande do Araguaia',
                'estado_id' => '14',
            ),
            443 => 
            array (
                'id' => '2444',
                'nome' => 'Breu Branco',
                'estado_id' => '14',
            ),
            444 => 
            array (
                'id' => '2445',
                'nome' => 'Breves',
                'estado_id' => '14',
            ),
            445 => 
            array (
                'id' => '2446',
                'nome' => 'Bujaru',
                'estado_id' => '14',
            ),
            446 => 
            array (
                'id' => '2447',
                'nome' => 'Cachoeira do Arari',
                'estado_id' => '14',
            ),
            447 => 
            array (
                'id' => '2448',
                'nome' => 'Cachoeira do Piriá',
                'estado_id' => '14',
            ),
            448 => 
            array (
                'id' => '2449',
                'nome' => 'Cametá',
                'estado_id' => '14',
            ),
            449 => 
            array (
                'id' => '2450',
                'nome' => 'Canaã dos Carajás',
                'estado_id' => '14',
            ),
            450 => 
            array (
                'id' => '2451',
                'nome' => 'Capanema',
                'estado_id' => '14',
            ),
            451 => 
            array (
                'id' => '2452',
                'nome' => 'Capitão Poço',
                'estado_id' => '14',
            ),
            452 => 
            array (
                'id' => '2453',
                'nome' => 'Castanhal',
                'estado_id' => '14',
            ),
            453 => 
            array (
                'id' => '2454',
                'nome' => 'Chaves',
                'estado_id' => '14',
            ),
            454 => 
            array (
                'id' => '2455',
                'nome' => 'Colares',
                'estado_id' => '14',
            ),
            455 => 
            array (
                'id' => '2456',
                'nome' => 'Conceição do Araguaia',
                'estado_id' => '14',
            ),
            456 => 
            array (
                'id' => '2457',
                'nome' => 'Concórdia do Pará',
                'estado_id' => '14',
            ),
            457 => 
            array (
                'id' => '2458',
                'nome' => 'Cumaru do Norte',
                'estado_id' => '14',
            ),
            458 => 
            array (
                'id' => '2459',
                'nome' => 'Curionópolis',
                'estado_id' => '14',
            ),
            459 => 
            array (
                'id' => '2460',
                'nome' => 'Curralinho',
                'estado_id' => '14',
            ),
            460 => 
            array (
                'id' => '2461',
                'nome' => 'Curuá',
                'estado_id' => '14',
            ),
            461 => 
            array (
                'id' => '2462',
                'nome' => 'Curuçá',
                'estado_id' => '14',
            ),
            462 => 
            array (
                'id' => '2463',
                'nome' => 'Dom Eliseu',
                'estado_id' => '14',
            ),
            463 => 
            array (
                'id' => '2464',
                'nome' => 'Eldorado dos Carajás',
                'estado_id' => '14',
            ),
            464 => 
            array (
                'id' => '2465',
                'nome' => 'Faro',
                'estado_id' => '14',
            ),
            465 => 
            array (
                'id' => '2466',
                'nome' => 'Floresta do Araguaia',
                'estado_id' => '14',
            ),
            466 => 
            array (
                'id' => '2467',
                'nome' => 'Garrafão do Norte',
                'estado_id' => '14',
            ),
            467 => 
            array (
                'id' => '2468',
                'nome' => 'Goianésia do Pará',
                'estado_id' => '14',
            ),
            468 => 
            array (
                'id' => '2469',
                'nome' => 'Gurupá',
                'estado_id' => '14',
            ),
            469 => 
            array (
                'id' => '2470',
                'nome' => 'Igarapé-Açu',
                'estado_id' => '14',
            ),
            470 => 
            array (
                'id' => '2471',
                'nome' => 'Igarapé-Miri',
                'estado_id' => '14',
            ),
            471 => 
            array (
                'id' => '2472',
                'nome' => 'Inhangapi',
                'estado_id' => '14',
            ),
            472 => 
            array (
                'id' => '2473',
                'nome' => 'Ipixuna do Pará',
                'estado_id' => '14',
            ),
            473 => 
            array (
                'id' => '2474',
                'nome' => 'Irituia',
                'estado_id' => '14',
            ),
            474 => 
            array (
                'id' => '2475',
                'nome' => 'Itaituba',
                'estado_id' => '14',
            ),
            475 => 
            array (
                'id' => '2476',
                'nome' => 'Itupiranga',
                'estado_id' => '14',
            ),
            476 => 
            array (
                'id' => '2477',
                'nome' => 'Jacareacanga',
                'estado_id' => '14',
            ),
            477 => 
            array (
                'id' => '2478',
                'nome' => 'Jacundá',
                'estado_id' => '14',
            ),
            478 => 
            array (
                'id' => '2479',
                'nome' => 'Juruti',
                'estado_id' => '14',
            ),
            479 => 
            array (
                'id' => '2480',
                'nome' => 'Limoeiro do Ajuru',
                'estado_id' => '14',
            ),
            480 => 
            array (
                'id' => '2481',
                'nome' => 'Mãe do Rio',
                'estado_id' => '14',
            ),
            481 => 
            array (
                'id' => '2482',
                'nome' => 'Magalhães Barata',
                'estado_id' => '14',
            ),
            482 => 
            array (
                'id' => '2483',
                'nome' => 'Marabá',
                'estado_id' => '14',
            ),
            483 => 
            array (
                'id' => '2484',
                'nome' => 'Maracanã',
                'estado_id' => '14',
            ),
            484 => 
            array (
                'id' => '2485',
                'nome' => 'Marapanim',
                'estado_id' => '14',
            ),
            485 => 
            array (
                'id' => '2486',
                'nome' => 'Marituba',
                'estado_id' => '14',
            ),
            486 => 
            array (
                'id' => '2487',
                'nome' => 'Medicilândia',
                'estado_id' => '14',
            ),
            487 => 
            array (
                'id' => '2488',
                'nome' => 'Melgaço',
                'estado_id' => '14',
            ),
            488 => 
            array (
                'id' => '2489',
                'nome' => 'Mocajuba',
                'estado_id' => '14',
            ),
            489 => 
            array (
                'id' => '2490',
                'nome' => 'Moju',
                'estado_id' => '14',
            ),
            490 => 
            array (
                'id' => '2491',
                'nome' => 'Monte Alegre',
                'estado_id' => '14',
            ),
            491 => 
            array (
                'id' => '2492',
                'nome' => 'Muaná',
                'estado_id' => '14',
            ),
            492 => 
            array (
                'id' => '2493',
                'nome' => 'Nova Esperança do Piriá',
                'estado_id' => '14',
            ),
            493 => 
            array (
                'id' => '2494',
                'nome' => 'Nova Ipixuna',
                'estado_id' => '14',
            ),
            494 => 
            array (
                'id' => '2495',
                'nome' => 'Nova Timboteua',
                'estado_id' => '14',
            ),
            495 => 
            array (
                'id' => '2496',
                'nome' => 'Novo Progresso',
                'estado_id' => '14',
            ),
            496 => 
            array (
                'id' => '2497',
                'nome' => 'Novo Repartimento',
                'estado_id' => '14',
            ),
            497 => 
            array (
                'id' => '2498',
                'nome' => 'Óbidos',
                'estado_id' => '14',
            ),
            498 => 
            array (
                'id' => '2499',
                'nome' => 'Oeiras do Pará',
                'estado_id' => '14',
            ),
            499 => 
            array (
                'id' => '2500',
                'nome' => 'Oriximiná',
                'estado_id' => '14',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '2501',
                'nome' => 'Ourém',
                'estado_id' => '14',
            ),
            1 => 
            array (
                'id' => '2502',
                'nome' => 'Ourilândia do Norte',
                'estado_id' => '14',
            ),
            2 => 
            array (
                'id' => '2503',
                'nome' => 'Pacajá',
                'estado_id' => '14',
            ),
            3 => 
            array (
                'id' => '2504',
                'nome' => 'Palestina do Pará',
                'estado_id' => '14',
            ),
            4 => 
            array (
                'id' => '2505',
                'nome' => 'Paragominas',
                'estado_id' => '14',
            ),
            5 => 
            array (
                'id' => '2506',
                'nome' => 'Parauapebas',
                'estado_id' => '14',
            ),
            6 => 
            array (
                'id' => '2507',
                'nome' => 'Pau d`Arco',
                'estado_id' => '14',
            ),
            7 => 
            array (
                'id' => '2508',
                'nome' => 'Peixe-Boi',
                'estado_id' => '14',
            ),
            8 => 
            array (
                'id' => '2509',
                'nome' => 'Piçarra',
                'estado_id' => '14',
            ),
            9 => 
            array (
                'id' => '2510',
                'nome' => 'Placas',
                'estado_id' => '14',
            ),
            10 => 
            array (
                'id' => '2511',
                'nome' => 'Ponta de Pedras',
                'estado_id' => '14',
            ),
            11 => 
            array (
                'id' => '2512',
                'nome' => 'Portel',
                'estado_id' => '14',
            ),
            12 => 
            array (
                'id' => '2513',
                'nome' => 'Porto de Moz',
                'estado_id' => '14',
            ),
            13 => 
            array (
                'id' => '2514',
                'nome' => 'Prainha',
                'estado_id' => '14',
            ),
            14 => 
            array (
                'id' => '2515',
                'nome' => 'Primavera',
                'estado_id' => '14',
            ),
            15 => 
            array (
                'id' => '2516',
                'nome' => 'Quatipuru',
                'estado_id' => '14',
            ),
            16 => 
            array (
                'id' => '2517',
                'nome' => 'Redenção',
                'estado_id' => '14',
            ),
            17 => 
            array (
                'id' => '2518',
                'nome' => 'Rio Maria',
                'estado_id' => '14',
            ),
            18 => 
            array (
                'id' => '2519',
                'nome' => 'Rondon do Pará',
                'estado_id' => '14',
            ),
            19 => 
            array (
                'id' => '2520',
                'nome' => 'Rurópolis',
                'estado_id' => '14',
            ),
            20 => 
            array (
                'id' => '2521',
                'nome' => 'Salinópolis',
                'estado_id' => '14',
            ),
            21 => 
            array (
                'id' => '2522',
                'nome' => 'Salvaterra',
                'estado_id' => '14',
            ),
            22 => 
            array (
                'id' => '2523',
                'nome' => 'Santa Bárbara do Pará',
                'estado_id' => '14',
            ),
            23 => 
            array (
                'id' => '2524',
                'nome' => 'Santa Cruz do Arari',
                'estado_id' => '14',
            ),
            24 => 
            array (
                'id' => '2525',
                'nome' => 'Santa Isabel do Pará',
                'estado_id' => '14',
            ),
            25 => 
            array (
                'id' => '2526',
                'nome' => 'Santa Luzia do Pará',
                'estado_id' => '14',
            ),
            26 => 
            array (
                'id' => '2527',
                'nome' => 'Santa Maria das Barreiras',
                'estado_id' => '14',
            ),
            27 => 
            array (
                'id' => '2528',
                'nome' => 'Santa Maria do Pará',
                'estado_id' => '14',
            ),
            28 => 
            array (
                'id' => '2529',
                'nome' => 'Santana do Araguaia',
                'estado_id' => '14',
            ),
            29 => 
            array (
                'id' => '2530',
                'nome' => 'Santarém',
                'estado_id' => '14',
            ),
            30 => 
            array (
                'id' => '2531',
                'nome' => 'Santarém Novo',
                'estado_id' => '14',
            ),
            31 => 
            array (
                'id' => '2532',
                'nome' => 'Santo Antônio do Tauá',
                'estado_id' => '14',
            ),
            32 => 
            array (
                'id' => '2533',
                'nome' => 'São Caetano de Odivelas',
                'estado_id' => '14',
            ),
            33 => 
            array (
                'id' => '2534',
                'nome' => 'São Domingos do Araguaia',
                'estado_id' => '14',
            ),
            34 => 
            array (
                'id' => '2535',
                'nome' => 'São Domingos do Capim',
                'estado_id' => '14',
            ),
            35 => 
            array (
                'id' => '2536',
                'nome' => 'São Félix do Xingu',
                'estado_id' => '14',
            ),
            36 => 
            array (
                'id' => '2537',
                'nome' => 'São Francisco do Pará',
                'estado_id' => '14',
            ),
            37 => 
            array (
                'id' => '2538',
                'nome' => 'São Geraldo do Araguaia',
                'estado_id' => '14',
            ),
            38 => 
            array (
                'id' => '2539',
                'nome' => 'São João da Ponta',
                'estado_id' => '14',
            ),
            39 => 
            array (
                'id' => '2540',
                'nome' => 'São João de Pirabas',
                'estado_id' => '14',
            ),
            40 => 
            array (
                'id' => '2541',
                'nome' => 'São João do Araguaia',
                'estado_id' => '14',
            ),
            41 => 
            array (
                'id' => '2542',
                'nome' => 'São Miguel do Guamá',
                'estado_id' => '14',
            ),
            42 => 
            array (
                'id' => '2543',
                'nome' => 'São Sebastião da Boa Vista',
                'estado_id' => '14',
            ),
            43 => 
            array (
                'id' => '2544',
                'nome' => 'Sapucaia',
                'estado_id' => '14',
            ),
            44 => 
            array (
                'id' => '2545',
                'nome' => 'Senador José Porfírio',
                'estado_id' => '14',
            ),
            45 => 
            array (
                'id' => '2546',
                'nome' => 'Soure',
                'estado_id' => '14',
            ),
            46 => 
            array (
                'id' => '2547',
                'nome' => 'Tailândia',
                'estado_id' => '14',
            ),
            47 => 
            array (
                'id' => '2548',
                'nome' => 'Terra Alta',
                'estado_id' => '14',
            ),
            48 => 
            array (
                'id' => '2549',
                'nome' => 'Terra Santa',
                'estado_id' => '14',
            ),
            49 => 
            array (
                'id' => '2550',
                'nome' => 'Tomé-Açu',
                'estado_id' => '14',
            ),
            50 => 
            array (
                'id' => '2551',
                'nome' => 'Tracuateua',
                'estado_id' => '14',
            ),
            51 => 
            array (
                'id' => '2552',
                'nome' => 'Trairão',
                'estado_id' => '14',
            ),
            52 => 
            array (
                'id' => '2553',
                'nome' => 'Tucumã',
                'estado_id' => '14',
            ),
            53 => 
            array (
                'id' => '2554',
                'nome' => 'Tucuruí',
                'estado_id' => '14',
            ),
            54 => 
            array (
                'id' => '2555',
                'nome' => 'Ulianópolis',
                'estado_id' => '14',
            ),
            55 => 
            array (
                'id' => '2556',
                'nome' => 'Uruará',
                'estado_id' => '14',
            ),
            56 => 
            array (
                'id' => '2557',
                'nome' => 'Vigia',
                'estado_id' => '14',
            ),
            57 => 
            array (
                'id' => '2558',
                'nome' => 'Viseu',
                'estado_id' => '14',
            ),
            58 => 
            array (
                'id' => '2559',
                'nome' => 'Vitória do Xingu',
                'estado_id' => '14',
            ),
            59 => 
            array (
                'id' => '2560',
                'nome' => 'Xinguara',
                'estado_id' => '14',
            ),
            60 => 
            array (
                'id' => '2561',
                'nome' => 'Água Branca',
                'estado_id' => '15',
            ),
            61 => 
            array (
                'id' => '2562',
                'nome' => 'Aguiar',
                'estado_id' => '15',
            ),
            62 => 
            array (
                'id' => '2563',
                'nome' => 'Alagoa Grande',
                'estado_id' => '15',
            ),
            63 => 
            array (
                'id' => '2564',
                'nome' => 'Alagoa Nova',
                'estado_id' => '15',
            ),
            64 => 
            array (
                'id' => '2565',
                'nome' => 'Alagoinha',
                'estado_id' => '15',
            ),
            65 => 
            array (
                'id' => '2566',
                'nome' => 'Alcantil',
                'estado_id' => '15',
            ),
            66 => 
            array (
                'id' => '2567',
                'nome' => 'Algodão de Jandaíra',
                'estado_id' => '15',
            ),
            67 => 
            array (
                'id' => '2568',
                'nome' => 'Alhandra',
                'estado_id' => '15',
            ),
            68 => 
            array (
                'id' => '2569',
                'nome' => 'Amparo',
                'estado_id' => '15',
            ),
            69 => 
            array (
                'id' => '2570',
                'nome' => 'Aparecida',
                'estado_id' => '15',
            ),
            70 => 
            array (
                'id' => '2571',
                'nome' => 'Araçagi',
                'estado_id' => '15',
            ),
            71 => 
            array (
                'id' => '2572',
                'nome' => 'Arara',
                'estado_id' => '15',
            ),
            72 => 
            array (
                'id' => '2573',
                'nome' => 'Araruna',
                'estado_id' => '15',
            ),
            73 => 
            array (
                'id' => '2574',
                'nome' => 'Areia',
                'estado_id' => '15',
            ),
            74 => 
            array (
                'id' => '2575',
                'nome' => 'Areia de Baraúnas',
                'estado_id' => '15',
            ),
            75 => 
            array (
                'id' => '2576',
                'nome' => 'Areial',
                'estado_id' => '15',
            ),
            76 => 
            array (
                'id' => '2577',
                'nome' => 'Aroeiras',
                'estado_id' => '15',
            ),
            77 => 
            array (
                'id' => '2578',
                'nome' => 'Assunção',
                'estado_id' => '15',
            ),
            78 => 
            array (
                'id' => '2579',
                'nome' => 'Baía da Traição',
                'estado_id' => '15',
            ),
            79 => 
            array (
                'id' => '2580',
                'nome' => 'Bananeiras',
                'estado_id' => '15',
            ),
            80 => 
            array (
                'id' => '2581',
                'nome' => 'Baraúna',
                'estado_id' => '15',
            ),
            81 => 
            array (
                'id' => '2582',
                'nome' => 'Barra de Santa Rosa',
                'estado_id' => '15',
            ),
            82 => 
            array (
                'id' => '2583',
                'nome' => 'Barra de Santana',
                'estado_id' => '15',
            ),
            83 => 
            array (
                'id' => '2584',
                'nome' => 'Barra de São Miguel',
                'estado_id' => '15',
            ),
            84 => 
            array (
                'id' => '2585',
                'nome' => 'Bayeux',
                'estado_id' => '15',
            ),
            85 => 
            array (
                'id' => '2586',
                'nome' => 'Belém',
                'estado_id' => '15',
            ),
            86 => 
            array (
                'id' => '2587',
                'nome' => 'Belém do Brejo do Cruz',
                'estado_id' => '15',
            ),
            87 => 
            array (
                'id' => '2588',
                'nome' => 'Bernardino Batista',
                'estado_id' => '15',
            ),
            88 => 
            array (
                'id' => '2589',
                'nome' => 'Boa Ventura',
                'estado_id' => '15',
            ),
            89 => 
            array (
                'id' => '2590',
                'nome' => 'Boa Vista',
                'estado_id' => '15',
            ),
            90 => 
            array (
                'id' => '2591',
                'nome' => 'Bom Jesus',
                'estado_id' => '15',
            ),
            91 => 
            array (
                'id' => '2592',
                'nome' => 'Bom Sucesso',
                'estado_id' => '15',
            ),
            92 => 
            array (
                'id' => '2593',
                'nome' => 'Bonito de Santa Fé',
                'estado_id' => '15',
            ),
            93 => 
            array (
                'id' => '2594',
                'nome' => 'Boqueirão',
                'estado_id' => '15',
            ),
            94 => 
            array (
                'id' => '2595',
                'nome' => 'Borborema',
                'estado_id' => '15',
            ),
            95 => 
            array (
                'id' => '2596',
                'nome' => 'Brejo do Cruz',
                'estado_id' => '15',
            ),
            96 => 
            array (
                'id' => '2597',
                'nome' => 'Brejo dos Santos',
                'estado_id' => '15',
            ),
            97 => 
            array (
                'id' => '2598',
                'nome' => 'Caaporã',
                'estado_id' => '15',
            ),
            98 => 
            array (
                'id' => '2599',
                'nome' => 'Cabaceiras',
                'estado_id' => '15',
            ),
            99 => 
            array (
                'id' => '2600',
                'nome' => 'Cabedelo',
                'estado_id' => '15',
            ),
            100 => 
            array (
                'id' => '2601',
                'nome' => 'Cachoeira dos Índios',
                'estado_id' => '15',
            ),
            101 => 
            array (
                'id' => '2602',
                'nome' => 'Cacimba de Areia',
                'estado_id' => '15',
            ),
            102 => 
            array (
                'id' => '2603',
                'nome' => 'Cacimba de Dentro',
                'estado_id' => '15',
            ),
            103 => 
            array (
                'id' => '2604',
                'nome' => 'Cacimbas',
                'estado_id' => '15',
            ),
            104 => 
            array (
                'id' => '2605',
                'nome' => 'Caiçara',
                'estado_id' => '15',
            ),
            105 => 
            array (
                'id' => '2606',
                'nome' => 'Cajazeiras',
                'estado_id' => '15',
            ),
            106 => 
            array (
                'id' => '2607',
                'nome' => 'Cajazeirinhas',
                'estado_id' => '15',
            ),
            107 => 
            array (
                'id' => '2608',
                'nome' => 'Caldas Brandão',
                'estado_id' => '15',
            ),
            108 => 
            array (
                'id' => '2609',
                'nome' => 'Camalaú',
                'estado_id' => '15',
            ),
            109 => 
            array (
                'id' => '2610',
                'nome' => 'Campina Grande',
                'estado_id' => '15',
            ),
            110 => 
            array (
                'id' => '2611',
                'nome' => 'Campo de Santana',
                'estado_id' => '15',
            ),
            111 => 
            array (
                'id' => '2612',
                'nome' => 'Capim',
                'estado_id' => '15',
            ),
            112 => 
            array (
                'id' => '2613',
                'nome' => 'Caraúbas',
                'estado_id' => '15',
            ),
            113 => 
            array (
                'id' => '2614',
                'nome' => 'Carrapateira',
                'estado_id' => '15',
            ),
            114 => 
            array (
                'id' => '2615',
                'nome' => 'Casserengue',
                'estado_id' => '15',
            ),
            115 => 
            array (
                'id' => '2616',
                'nome' => 'Catingueira',
                'estado_id' => '15',
            ),
            116 => 
            array (
                'id' => '2617',
                'nome' => 'Catolé do Rocha',
                'estado_id' => '15',
            ),
            117 => 
            array (
                'id' => '2618',
                'nome' => 'Caturité',
                'estado_id' => '15',
            ),
            118 => 
            array (
                'id' => '2619',
                'nome' => 'Conceição',
                'estado_id' => '15',
            ),
            119 => 
            array (
                'id' => '2620',
                'nome' => 'Condado',
                'estado_id' => '15',
            ),
            120 => 
            array (
                'id' => '2621',
                'nome' => 'Conde',
                'estado_id' => '15',
            ),
            121 => 
            array (
                'id' => '2622',
                'nome' => 'Congo',
                'estado_id' => '15',
            ),
            122 => 
            array (
                'id' => '2623',
                'nome' => 'Coremas',
                'estado_id' => '15',
            ),
            123 => 
            array (
                'id' => '2624',
                'nome' => 'Coxixola',
                'estado_id' => '15',
            ),
            124 => 
            array (
                'id' => '2625',
                'nome' => 'Cruz do Espírito Santo',
                'estado_id' => '15',
            ),
            125 => 
            array (
                'id' => '2626',
                'nome' => 'Cubati',
                'estado_id' => '15',
            ),
            126 => 
            array (
                'id' => '2627',
                'nome' => 'Cuité',
                'estado_id' => '15',
            ),
            127 => 
            array (
                'id' => '2628',
                'nome' => 'Cuité de Mamanguape',
                'estado_id' => '15',
            ),
            128 => 
            array (
                'id' => '2629',
                'nome' => 'Cuitegi',
                'estado_id' => '15',
            ),
            129 => 
            array (
                'id' => '2630',
                'nome' => 'Curral de Cima',
                'estado_id' => '15',
            ),
            130 => 
            array (
                'id' => '2631',
                'nome' => 'Curral Velho',
                'estado_id' => '15',
            ),
            131 => 
            array (
                'id' => '2632',
                'nome' => 'Damião',
                'estado_id' => '15',
            ),
            132 => 
            array (
                'id' => '2633',
                'nome' => 'Desterro',
                'estado_id' => '15',
            ),
            133 => 
            array (
                'id' => '2634',
                'nome' => 'Diamante',
                'estado_id' => '15',
            ),
            134 => 
            array (
                'id' => '2635',
                'nome' => 'Dona Inês',
                'estado_id' => '15',
            ),
            135 => 
            array (
                'id' => '2636',
                'nome' => 'Duas Estradas',
                'estado_id' => '15',
            ),
            136 => 
            array (
                'id' => '2637',
                'nome' => 'Emas',
                'estado_id' => '15',
            ),
            137 => 
            array (
                'id' => '2638',
                'nome' => 'Esperança',
                'estado_id' => '15',
            ),
            138 => 
            array (
                'id' => '2639',
                'nome' => 'Fagundes',
                'estado_id' => '15',
            ),
            139 => 
            array (
                'id' => '2640',
                'nome' => 'Frei Martinho',
                'estado_id' => '15',
            ),
            140 => 
            array (
                'id' => '2641',
                'nome' => 'Gado Bravo',
                'estado_id' => '15',
            ),
            141 => 
            array (
                'id' => '2642',
                'nome' => 'Guarabira',
                'estado_id' => '15',
            ),
            142 => 
            array (
                'id' => '2643',
                'nome' => 'Gurinhém',
                'estado_id' => '15',
            ),
            143 => 
            array (
                'id' => '2644',
                'nome' => 'Gurjão',
                'estado_id' => '15',
            ),
            144 => 
            array (
                'id' => '2645',
                'nome' => 'Ibiara',
                'estado_id' => '15',
            ),
            145 => 
            array (
                'id' => '2646',
                'nome' => 'Igaracy',
                'estado_id' => '15',
            ),
            146 => 
            array (
                'id' => '2647',
                'nome' => 'Imaculada',
                'estado_id' => '15',
            ),
            147 => 
            array (
                'id' => '2648',
                'nome' => 'Ingá',
                'estado_id' => '15',
            ),
            148 => 
            array (
                'id' => '2649',
                'nome' => 'Itabaiana',
                'estado_id' => '15',
            ),
            149 => 
            array (
                'id' => '2650',
                'nome' => 'Itaporanga',
                'estado_id' => '15',
            ),
            150 => 
            array (
                'id' => '2651',
                'nome' => 'Itapororoca',
                'estado_id' => '15',
            ),
            151 => 
            array (
                'id' => '2652',
                'nome' => 'Itatuba',
                'estado_id' => '15',
            ),
            152 => 
            array (
                'id' => '2653',
                'nome' => 'Jacaraú',
                'estado_id' => '15',
            ),
            153 => 
            array (
                'id' => '2654',
                'nome' => 'Jericó',
                'estado_id' => '15',
            ),
            154 => 
            array (
                'id' => '2655',
                'nome' => 'João Pessoa',
                'estado_id' => '15',
            ),
            155 => 
            array (
                'id' => '2656',
                'nome' => 'Juarez Távora',
                'estado_id' => '15',
            ),
            156 => 
            array (
                'id' => '2657',
                'nome' => 'Juazeirinho',
                'estado_id' => '15',
            ),
            157 => 
            array (
                'id' => '2658',
                'nome' => 'Junco do Seridó',
                'estado_id' => '15',
            ),
            158 => 
            array (
                'id' => '2659',
                'nome' => 'Juripiranga',
                'estado_id' => '15',
            ),
            159 => 
            array (
                'id' => '2660',
                'nome' => 'Juru',
                'estado_id' => '15',
            ),
            160 => 
            array (
                'id' => '2661',
                'nome' => 'Lagoa',
                'estado_id' => '15',
            ),
            161 => 
            array (
                'id' => '2662',
                'nome' => 'Lagoa de Dentro',
                'estado_id' => '15',
            ),
            162 => 
            array (
                'id' => '2663',
                'nome' => 'Lagoa Seca',
                'estado_id' => '15',
            ),
            163 => 
            array (
                'id' => '2664',
                'nome' => 'Lastro',
                'estado_id' => '15',
            ),
            164 => 
            array (
                'id' => '2665',
                'nome' => 'Livramento',
                'estado_id' => '15',
            ),
            165 => 
            array (
                'id' => '2666',
                'nome' => 'Logradouro',
                'estado_id' => '15',
            ),
            166 => 
            array (
                'id' => '2667',
                'nome' => 'Lucena',
                'estado_id' => '15',
            ),
            167 => 
            array (
                'id' => '2668',
                'nome' => 'Mãe d`Água',
                'estado_id' => '15',
            ),
            168 => 
            array (
                'id' => '2669',
                'nome' => 'Malta',
                'estado_id' => '15',
            ),
            169 => 
            array (
                'id' => '2670',
                'nome' => 'Mamanguape',
                'estado_id' => '15',
            ),
            170 => 
            array (
                'id' => '2671',
                'nome' => 'Manaíra',
                'estado_id' => '15',
            ),
            171 => 
            array (
                'id' => '2672',
                'nome' => 'Marcação',
                'estado_id' => '15',
            ),
            172 => 
            array (
                'id' => '2673',
                'nome' => 'Mari',
                'estado_id' => '15',
            ),
            173 => 
            array (
                'id' => '2674',
                'nome' => 'Marizópolis',
                'estado_id' => '15',
            ),
            174 => 
            array (
                'id' => '2675',
                'nome' => 'Massaranduba',
                'estado_id' => '15',
            ),
            175 => 
            array (
                'id' => '2676',
                'nome' => 'Mataraca',
                'estado_id' => '15',
            ),
            176 => 
            array (
                'id' => '2677',
                'nome' => 'Matinhas',
                'estado_id' => '15',
            ),
            177 => 
            array (
                'id' => '2678',
                'nome' => 'Mato Grosso',
                'estado_id' => '15',
            ),
            178 => 
            array (
                'id' => '2679',
                'nome' => 'Maturéia',
                'estado_id' => '15',
            ),
            179 => 
            array (
                'id' => '2680',
                'nome' => 'Mogeiro',
                'estado_id' => '15',
            ),
            180 => 
            array (
                'id' => '2681',
                'nome' => 'Montadas',
                'estado_id' => '15',
            ),
            181 => 
            array (
                'id' => '2682',
                'nome' => 'Monte Horebe',
                'estado_id' => '15',
            ),
            182 => 
            array (
                'id' => '2683',
                'nome' => 'Monteiro',
                'estado_id' => '15',
            ),
            183 => 
            array (
                'id' => '2684',
                'nome' => 'Mulungu',
                'estado_id' => '15',
            ),
            184 => 
            array (
                'id' => '2685',
                'nome' => 'Natuba',
                'estado_id' => '15',
            ),
            185 => 
            array (
                'id' => '2686',
                'nome' => 'Nazarezinho',
                'estado_id' => '15',
            ),
            186 => 
            array (
                'id' => '2687',
                'nome' => 'Nova Floresta',
                'estado_id' => '15',
            ),
            187 => 
            array (
                'id' => '2688',
                'nome' => 'Nova Olinda',
                'estado_id' => '15',
            ),
            188 => 
            array (
                'id' => '2689',
                'nome' => 'Nova Palmeira',
                'estado_id' => '15',
            ),
            189 => 
            array (
                'id' => '2690',
                'nome' => 'Olho d`Água',
                'estado_id' => '15',
            ),
            190 => 
            array (
                'id' => '2691',
                'nome' => 'Olivedos',
                'estado_id' => '15',
            ),
            191 => 
            array (
                'id' => '2692',
                'nome' => 'Ouro Velho',
                'estado_id' => '15',
            ),
            192 => 
            array (
                'id' => '2693',
                'nome' => 'Parari',
                'estado_id' => '15',
            ),
            193 => 
            array (
                'id' => '2694',
                'nome' => 'Passagem',
                'estado_id' => '15',
            ),
            194 => 
            array (
                'id' => '2695',
                'nome' => 'Patos',
                'estado_id' => '15',
            ),
            195 => 
            array (
                'id' => '2696',
                'nome' => 'Paulista',
                'estado_id' => '15',
            ),
            196 => 
            array (
                'id' => '2697',
                'nome' => 'Pedra Branca',
                'estado_id' => '15',
            ),
            197 => 
            array (
                'id' => '2698',
                'nome' => 'Pedra Lavrada',
                'estado_id' => '15',
            ),
            198 => 
            array (
                'id' => '2699',
                'nome' => 'Pedras de Fogo',
                'estado_id' => '15',
            ),
            199 => 
            array (
                'id' => '2700',
                'nome' => 'Pedro Régis',
                'estado_id' => '15',
            ),
            200 => 
            array (
                'id' => '2701',
                'nome' => 'Piancó',
                'estado_id' => '15',
            ),
            201 => 
            array (
                'id' => '2702',
                'nome' => 'Picuí',
                'estado_id' => '15',
            ),
            202 => 
            array (
                'id' => '2703',
                'nome' => 'Pilar',
                'estado_id' => '15',
            ),
            203 => 
            array (
                'id' => '2704',
                'nome' => 'Pilões',
                'estado_id' => '15',
            ),
            204 => 
            array (
                'id' => '2705',
                'nome' => 'Pilõezinhos',
                'estado_id' => '15',
            ),
            205 => 
            array (
                'id' => '2706',
                'nome' => 'Pirpirituba',
                'estado_id' => '15',
            ),
            206 => 
            array (
                'id' => '2707',
                'nome' => 'Pitimbu',
                'estado_id' => '15',
            ),
            207 => 
            array (
                'id' => '2708',
                'nome' => 'Pocinhos',
                'estado_id' => '15',
            ),
            208 => 
            array (
                'id' => '2709',
                'nome' => 'Poço Dantas',
                'estado_id' => '15',
            ),
            209 => 
            array (
                'id' => '2710',
                'nome' => 'Poço de José de Moura',
                'estado_id' => '15',
            ),
            210 => 
            array (
                'id' => '2711',
                'nome' => 'Pombal',
                'estado_id' => '15',
            ),
            211 => 
            array (
                'id' => '2712',
                'nome' => 'Prata',
                'estado_id' => '15',
            ),
            212 => 
            array (
                'id' => '2713',
                'nome' => 'Princesa Isabel',
                'estado_id' => '15',
            ),
            213 => 
            array (
                'id' => '2714',
                'nome' => 'Puxinanã',
                'estado_id' => '15',
            ),
            214 => 
            array (
                'id' => '2715',
                'nome' => 'Queimadas',
                'estado_id' => '15',
            ),
            215 => 
            array (
                'id' => '2716',
                'nome' => 'Quixabá',
                'estado_id' => '15',
            ),
            216 => 
            array (
                'id' => '2717',
                'nome' => 'Remígio',
                'estado_id' => '15',
            ),
            217 => 
            array (
                'id' => '2718',
                'nome' => 'Riachão',
                'estado_id' => '15',
            ),
            218 => 
            array (
                'id' => '2719',
                'nome' => 'Riachão do Bacamarte',
                'estado_id' => '15',
            ),
            219 => 
            array (
                'id' => '2720',
                'nome' => 'Riachão do Poço',
                'estado_id' => '15',
            ),
            220 => 
            array (
                'id' => '2721',
                'nome' => 'Riacho de Santo Antônio',
                'estado_id' => '15',
            ),
            221 => 
            array (
                'id' => '2722',
                'nome' => 'Riacho dos Cavalos',
                'estado_id' => '15',
            ),
            222 => 
            array (
                'id' => '2723',
                'nome' => 'Rio Tinto',
                'estado_id' => '15',
            ),
            223 => 
            array (
                'id' => '2724',
                'nome' => 'Salgadinho',
                'estado_id' => '15',
            ),
            224 => 
            array (
                'id' => '2725',
                'nome' => 'Salgado de São Félix',
                'estado_id' => '15',
            ),
            225 => 
            array (
                'id' => '2726',
                'nome' => 'Santa Cecília',
                'estado_id' => '15',
            ),
            226 => 
            array (
                'id' => '2727',
                'nome' => 'Santa Cruz',
                'estado_id' => '15',
            ),
            227 => 
            array (
                'id' => '2728',
                'nome' => 'Santa Helena',
                'estado_id' => '15',
            ),
            228 => 
            array (
                'id' => '2729',
                'nome' => 'Santa Inês',
                'estado_id' => '15',
            ),
            229 => 
            array (
                'id' => '2730',
                'nome' => 'Santa Luzia',
                'estado_id' => '15',
            ),
            230 => 
            array (
                'id' => '2731',
                'nome' => 'Santa Rita',
                'estado_id' => '15',
            ),
            231 => 
            array (
                'id' => '2732',
                'nome' => 'Santa Teresinha',
                'estado_id' => '15',
            ),
            232 => 
            array (
                'id' => '2733',
                'nome' => 'Santana de Mangueira',
                'estado_id' => '15',
            ),
            233 => 
            array (
                'id' => '2734',
                'nome' => 'Santana dos Garrotes',
                'estado_id' => '15',
            ),
            234 => 
            array (
                'id' => '2735',
                'nome' => 'Santarém',
                'estado_id' => '15',
            ),
            235 => 
            array (
                'id' => '2736',
                'nome' => 'Santo André',
                'estado_id' => '15',
            ),
            236 => 
            array (
                'id' => '2737',
                'nome' => 'São Bentinho',
                'estado_id' => '15',
            ),
            237 => 
            array (
                'id' => '2738',
                'nome' => 'São Bento',
                'estado_id' => '15',
            ),
            238 => 
            array (
                'id' => '2739',
                'nome' => 'São Domingos de Pombal',
                'estado_id' => '15',
            ),
            239 => 
            array (
                'id' => '2740',
                'nome' => 'São Domingos do Cariri',
                'estado_id' => '15',
            ),
            240 => 
            array (
                'id' => '2741',
                'nome' => 'São Francisco',
                'estado_id' => '15',
            ),
            241 => 
            array (
                'id' => '2742',
                'nome' => 'São João do Cariri',
                'estado_id' => '15',
            ),
            242 => 
            array (
                'id' => '2743',
                'nome' => 'São João do Rio do Peixe',
                'estado_id' => '15',
            ),
            243 => 
            array (
                'id' => '2744',
                'nome' => 'São João do Tigre',
                'estado_id' => '15',
            ),
            244 => 
            array (
                'id' => '2745',
                'nome' => 'São José da Lagoa Tapada',
                'estado_id' => '15',
            ),
            245 => 
            array (
                'id' => '2746',
                'nome' => 'São José de Caiana',
                'estado_id' => '15',
            ),
            246 => 
            array (
                'id' => '2747',
                'nome' => 'São José de Espinharas',
                'estado_id' => '15',
            ),
            247 => 
            array (
                'id' => '2748',
                'nome' => 'São José de Piranhas',
                'estado_id' => '15',
            ),
            248 => 
            array (
                'id' => '2749',
                'nome' => 'São José de Princesa',
                'estado_id' => '15',
            ),
            249 => 
            array (
                'id' => '2750',
                'nome' => 'São José do Bonfim',
                'estado_id' => '15',
            ),
            250 => 
            array (
                'id' => '2751',
                'nome' => 'São José do Brejo do Cruz',
                'estado_id' => '15',
            ),
            251 => 
            array (
                'id' => '2752',
                'nome' => 'São José do Sabugi',
                'estado_id' => '15',
            ),
            252 => 
            array (
                'id' => '2753',
                'nome' => 'São José dos Cordeiros',
                'estado_id' => '15',
            ),
            253 => 
            array (
                'id' => '2754',
                'nome' => 'São José dos Ramos',
                'estado_id' => '15',
            ),
            254 => 
            array (
                'id' => '2755',
                'nome' => 'São Mamede',
                'estado_id' => '15',
            ),
            255 => 
            array (
                'id' => '2756',
                'nome' => 'São Miguel de Taipu',
                'estado_id' => '15',
            ),
            256 => 
            array (
                'id' => '2757',
                'nome' => 'São Sebastião de Lagoa de Roça',
                'estado_id' => '15',
            ),
            257 => 
            array (
                'id' => '2758',
                'nome' => 'São Sebastião do Umbuzeiro',
                'estado_id' => '15',
            ),
            258 => 
            array (
                'id' => '2759',
                'nome' => 'Sapé',
                'estado_id' => '15',
            ),
            259 => 
            array (
                'id' => '2760',
                'nome' => 'Seridó',
                'estado_id' => '15',
            ),
            260 => 
            array (
                'id' => '2761',
                'nome' => 'Serra Branca',
                'estado_id' => '15',
            ),
            261 => 
            array (
                'id' => '2762',
                'nome' => 'Serra da Raiz',
                'estado_id' => '15',
            ),
            262 => 
            array (
                'id' => '2763',
                'nome' => 'Serra Grande',
                'estado_id' => '15',
            ),
            263 => 
            array (
                'id' => '2764',
                'nome' => 'Serra Redonda',
                'estado_id' => '15',
            ),
            264 => 
            array (
                'id' => '2765',
                'nome' => 'Serraria',
                'estado_id' => '15',
            ),
            265 => 
            array (
                'id' => '2766',
                'nome' => 'Sertãozinho',
                'estado_id' => '15',
            ),
            266 => 
            array (
                'id' => '2767',
                'nome' => 'Sobrado',
                'estado_id' => '15',
            ),
            267 => 
            array (
                'id' => '2768',
                'nome' => 'Solânea',
                'estado_id' => '15',
            ),
            268 => 
            array (
                'id' => '2769',
                'nome' => 'Soledade',
                'estado_id' => '15',
            ),
            269 => 
            array (
                'id' => '2770',
                'nome' => 'Sossêgo',
                'estado_id' => '15',
            ),
            270 => 
            array (
                'id' => '2771',
                'nome' => 'Sousa',
                'estado_id' => '15',
            ),
            271 => 
            array (
                'id' => '2772',
                'nome' => 'Sumé',
                'estado_id' => '15',
            ),
            272 => 
            array (
                'id' => '2773',
                'nome' => 'Taperoá',
                'estado_id' => '15',
            ),
            273 => 
            array (
                'id' => '2774',
                'nome' => 'Tavares',
                'estado_id' => '15',
            ),
            274 => 
            array (
                'id' => '2775',
                'nome' => 'Teixeira',
                'estado_id' => '15',
            ),
            275 => 
            array (
                'id' => '2776',
                'nome' => 'Tenório',
                'estado_id' => '15',
            ),
            276 => 
            array (
                'id' => '2777',
                'nome' => 'Triunfo',
                'estado_id' => '15',
            ),
            277 => 
            array (
                'id' => '2778',
                'nome' => 'Uiraúna',
                'estado_id' => '15',
            ),
            278 => 
            array (
                'id' => '2779',
                'nome' => 'Umbuzeiro',
                'estado_id' => '15',
            ),
            279 => 
            array (
                'id' => '2780',
                'nome' => 'Várzea',
                'estado_id' => '15',
            ),
            280 => 
            array (
                'id' => '2781',
                'nome' => 'Vieirópolis',
                'estado_id' => '15',
            ),
            281 => 
            array (
                'id' => '2782',
                'nome' => 'Vista Serrana',
                'estado_id' => '15',
            ),
            282 => 
            array (
                'id' => '2783',
                'nome' => 'Zabelê',
                'estado_id' => '15',
            ),
            283 => 
            array (
                'id' => '2784',
                'nome' => 'Abatiá',
                'estado_id' => '18',
            ),
            284 => 
            array (
                'id' => '2785',
                'nome' => 'Adrianópolis',
                'estado_id' => '18',
            ),
            285 => 
            array (
                'id' => '2786',
                'nome' => 'Agudos do Sul',
                'estado_id' => '18',
            ),
            286 => 
            array (
                'id' => '2787',
                'nome' => 'Almirante Tamandaré',
                'estado_id' => '18',
            ),
            287 => 
            array (
                'id' => '2788',
                'nome' => 'Altamira do Paraná',
                'estado_id' => '18',
            ),
            288 => 
            array (
                'id' => '2789',
                'nome' => 'Alto Paraíso',
                'estado_id' => '18',
            ),
            289 => 
            array (
                'id' => '2790',
                'nome' => 'Alto Paraná',
                'estado_id' => '18',
            ),
            290 => 
            array (
                'id' => '2791',
                'nome' => 'Alto Piquiri',
                'estado_id' => '18',
            ),
            291 => 
            array (
                'id' => '2792',
                'nome' => 'Altônia',
                'estado_id' => '18',
            ),
            292 => 
            array (
                'id' => '2793',
                'nome' => 'Alvorada do Sul',
                'estado_id' => '18',
            ),
            293 => 
            array (
                'id' => '2794',
                'nome' => 'Amaporã',
                'estado_id' => '18',
            ),
            294 => 
            array (
                'id' => '2795',
                'nome' => 'Ampére',
                'estado_id' => '18',
            ),
            295 => 
            array (
                'id' => '2796',
                'nome' => 'Anahy',
                'estado_id' => '18',
            ),
            296 => 
            array (
                'id' => '2797',
                'nome' => 'Andirá',
                'estado_id' => '18',
            ),
            297 => 
            array (
                'id' => '2798',
                'nome' => 'Ângulo',
                'estado_id' => '18',
            ),
            298 => 
            array (
                'id' => '2799',
                'nome' => 'Antonina',
                'estado_id' => '18',
            ),
            299 => 
            array (
                'id' => '2800',
                'nome' => 'Antônio Olinto',
                'estado_id' => '18',
            ),
            300 => 
            array (
                'id' => '2801',
                'nome' => 'Apucarana',
                'estado_id' => '18',
            ),
            301 => 
            array (
                'id' => '2802',
                'nome' => 'Arapongas',
                'estado_id' => '18',
            ),
            302 => 
            array (
                'id' => '2803',
                'nome' => 'Arapoti',
                'estado_id' => '18',
            ),
            303 => 
            array (
                'id' => '2804',
                'nome' => 'Arapuã',
                'estado_id' => '18',
            ),
            304 => 
            array (
                'id' => '2805',
                'nome' => 'Araruna',
                'estado_id' => '18',
            ),
            305 => 
            array (
                'id' => '2806',
                'nome' => 'Araucária',
                'estado_id' => '18',
            ),
            306 => 
            array (
                'id' => '2807',
                'nome' => 'Ariranha do Ivaí',
                'estado_id' => '18',
            ),
            307 => 
            array (
                'id' => '2808',
                'nome' => 'Assaí',
                'estado_id' => '18',
            ),
            308 => 
            array (
                'id' => '2809',
                'nome' => 'Assis Chateaubriand',
                'estado_id' => '18',
            ),
            309 => 
            array (
                'id' => '2810',
                'nome' => 'Astorga',
                'estado_id' => '18',
            ),
            310 => 
            array (
                'id' => '2811',
                'nome' => 'Atalaia',
                'estado_id' => '18',
            ),
            311 => 
            array (
                'id' => '2812',
                'nome' => 'Balsa Nova',
                'estado_id' => '18',
            ),
            312 => 
            array (
                'id' => '2813',
                'nome' => 'Bandeirantes',
                'estado_id' => '18',
            ),
            313 => 
            array (
                'id' => '2814',
                'nome' => 'Barbosa Ferraz',
                'estado_id' => '18',
            ),
            314 => 
            array (
                'id' => '2815',
                'nome' => 'Barra do Jacaré',
                'estado_id' => '18',
            ),
            315 => 
            array (
                'id' => '2816',
                'nome' => 'Barracão',
                'estado_id' => '18',
            ),
            316 => 
            array (
                'id' => '2817',
                'nome' => 'Bela Vista da Caroba',
                'estado_id' => '18',
            ),
            317 => 
            array (
                'id' => '2818',
                'nome' => 'Bela Vista do Paraíso',
                'estado_id' => '18',
            ),
            318 => 
            array (
                'id' => '2819',
                'nome' => 'Bituruna',
                'estado_id' => '18',
            ),
            319 => 
            array (
                'id' => '2820',
                'nome' => 'Boa Esperança',
                'estado_id' => '18',
            ),
            320 => 
            array (
                'id' => '2821',
                'nome' => 'Boa Esperança do Iguaçu',
                'estado_id' => '18',
            ),
            321 => 
            array (
                'id' => '2822',
                'nome' => 'Boa Ventura de São Roque',
                'estado_id' => '18',
            ),
            322 => 
            array (
                'id' => '2823',
                'nome' => 'Boa Vista da Aparecida',
                'estado_id' => '18',
            ),
            323 => 
            array (
                'id' => '2824',
                'nome' => 'Bocaiúva do Sul',
                'estado_id' => '18',
            ),
            324 => 
            array (
                'id' => '2825',
                'nome' => 'Bom Jesus do Sul',
                'estado_id' => '18',
            ),
            325 => 
            array (
                'id' => '2826',
                'nome' => 'Bom Sucesso',
                'estado_id' => '18',
            ),
            326 => 
            array (
                'id' => '2827',
                'nome' => 'Bom Sucesso do Sul',
                'estado_id' => '18',
            ),
            327 => 
            array (
                'id' => '2828',
                'nome' => 'Borrazópolis',
                'estado_id' => '18',
            ),
            328 => 
            array (
                'id' => '2829',
                'nome' => 'Braganey',
                'estado_id' => '18',
            ),
            329 => 
            array (
                'id' => '2830',
                'nome' => 'Brasilândia do Sul',
                'estado_id' => '18',
            ),
            330 => 
            array (
                'id' => '2831',
                'nome' => 'Cafeara',
                'estado_id' => '18',
            ),
            331 => 
            array (
                'id' => '2832',
                'nome' => 'Cafelândia',
                'estado_id' => '18',
            ),
            332 => 
            array (
                'id' => '2833',
                'nome' => 'Cafezal do Sul',
                'estado_id' => '18',
            ),
            333 => 
            array (
                'id' => '2834',
                'nome' => 'Califórnia',
                'estado_id' => '18',
            ),
            334 => 
            array (
                'id' => '2835',
                'nome' => 'Cambará',
                'estado_id' => '18',
            ),
            335 => 
            array (
                'id' => '2836',
                'nome' => 'Cambé',
                'estado_id' => '18',
            ),
            336 => 
            array (
                'id' => '2837',
                'nome' => 'Cambira',
                'estado_id' => '18',
            ),
            337 => 
            array (
                'id' => '2838',
                'nome' => 'Campina da Lagoa',
                'estado_id' => '18',
            ),
            338 => 
            array (
                'id' => '2839',
                'nome' => 'Campina do Simão',
                'estado_id' => '18',
            ),
            339 => 
            array (
                'id' => '2840',
                'nome' => 'Campina Grande do Sul',
                'estado_id' => '18',
            ),
            340 => 
            array (
                'id' => '2841',
                'nome' => 'Campo Bonito',
                'estado_id' => '18',
            ),
            341 => 
            array (
                'id' => '2842',
                'nome' => 'Campo do Tenente',
                'estado_id' => '18',
            ),
            342 => 
            array (
                'id' => '2843',
                'nome' => 'Campo Largo',
                'estado_id' => '18',
            ),
            343 => 
            array (
                'id' => '2844',
                'nome' => 'Campo Magro',
                'estado_id' => '18',
            ),
            344 => 
            array (
                'id' => '2845',
                'nome' => 'Campo Mourão',
                'estado_id' => '18',
            ),
            345 => 
            array (
                'id' => '2846',
                'nome' => 'Cândido de Abreu',
                'estado_id' => '18',
            ),
            346 => 
            array (
                'id' => '2847',
                'nome' => 'Candói',
                'estado_id' => '18',
            ),
            347 => 
            array (
                'id' => '2848',
                'nome' => 'Cantagalo',
                'estado_id' => '18',
            ),
            348 => 
            array (
                'id' => '2849',
                'nome' => 'Capanema',
                'estado_id' => '18',
            ),
            349 => 
            array (
                'id' => '2850',
                'nome' => 'Capitão Leônidas Marques',
                'estado_id' => '18',
            ),
            350 => 
            array (
                'id' => '2851',
                'nome' => 'Carambeí',
                'estado_id' => '18',
            ),
            351 => 
            array (
                'id' => '2852',
                'nome' => 'Carlópolis',
                'estado_id' => '18',
            ),
            352 => 
            array (
                'id' => '2853',
                'nome' => 'Cascavel',
                'estado_id' => '18',
            ),
            353 => 
            array (
                'id' => '2854',
                'nome' => 'Castro',
                'estado_id' => '18',
            ),
            354 => 
            array (
                'id' => '2855',
                'nome' => 'Catanduvas',
                'estado_id' => '18',
            ),
            355 => 
            array (
                'id' => '2856',
                'nome' => 'Centenário do Sul',
                'estado_id' => '18',
            ),
            356 => 
            array (
                'id' => '2857',
                'nome' => 'Cerro Azul',
                'estado_id' => '18',
            ),
            357 => 
            array (
                'id' => '2858',
                'nome' => 'Céu Azul',
                'estado_id' => '18',
            ),
            358 => 
            array (
                'id' => '2859',
                'nome' => 'Chopinzinho',
                'estado_id' => '18',
            ),
            359 => 
            array (
                'id' => '2860',
                'nome' => 'Cianorte',
                'estado_id' => '18',
            ),
            360 => 
            array (
                'id' => '2861',
                'nome' => 'Cidade Gaúcha',
                'estado_id' => '18',
            ),
            361 => 
            array (
                'id' => '2862',
                'nome' => 'Clevelândia',
                'estado_id' => '18',
            ),
            362 => 
            array (
                'id' => '2863',
                'nome' => 'Colombo',
                'estado_id' => '18',
            ),
            363 => 
            array (
                'id' => '2864',
                'nome' => 'Colorado',
                'estado_id' => '18',
            ),
            364 => 
            array (
                'id' => '2865',
                'nome' => 'Congonhinhas',
                'estado_id' => '18',
            ),
            365 => 
            array (
                'id' => '2866',
                'nome' => 'Conselheiro Mairinck',
                'estado_id' => '18',
            ),
            366 => 
            array (
                'id' => '2867',
                'nome' => 'Contenda',
                'estado_id' => '18',
            ),
            367 => 
            array (
                'id' => '2868',
                'nome' => 'Corbélia',
                'estado_id' => '18',
            ),
            368 => 
            array (
                'id' => '2869',
                'nome' => 'Cornélio Procópio',
                'estado_id' => '18',
            ),
            369 => 
            array (
                'id' => '2870',
                'nome' => 'Coronel Domingos Soares',
                'estado_id' => '18',
            ),
            370 => 
            array (
                'id' => '2871',
                'nome' => 'Coronel Vivida',
                'estado_id' => '18',
            ),
            371 => 
            array (
                'id' => '2872',
                'nome' => 'Corumbataí do Sul',
                'estado_id' => '18',
            ),
            372 => 
            array (
                'id' => '2873',
                'nome' => 'Cruz Machado',
                'estado_id' => '18',
            ),
            373 => 
            array (
                'id' => '2874',
                'nome' => 'Cruzeiro do Iguaçu',
                'estado_id' => '18',
            ),
            374 => 
            array (
                'id' => '2875',
                'nome' => 'Cruzeiro do Oeste',
                'estado_id' => '18',
            ),
            375 => 
            array (
                'id' => '2876',
                'nome' => 'Cruzeiro do Sul',
                'estado_id' => '18',
            ),
            376 => 
            array (
                'id' => '2877',
                'nome' => 'Cruzmaltina',
                'estado_id' => '18',
            ),
            377 => 
            array (
                'id' => '2878',
                'nome' => 'Curitiba',
                'estado_id' => '18',
            ),
            378 => 
            array (
                'id' => '2879',
                'nome' => 'Curiúva',
                'estado_id' => '18',
            ),
            379 => 
            array (
                'id' => '2880',
                'nome' => 'Diamante d`Oeste',
                'estado_id' => '18',
            ),
            380 => 
            array (
                'id' => '2881',
                'nome' => 'Diamante do Norte',
                'estado_id' => '18',
            ),
            381 => 
            array (
                'id' => '2882',
                'nome' => 'Diamante do Sul',
                'estado_id' => '18',
            ),
            382 => 
            array (
                'id' => '2883',
                'nome' => 'Dois Vizinhos',
                'estado_id' => '18',
            ),
            383 => 
            array (
                'id' => '2884',
                'nome' => 'Douradina',
                'estado_id' => '18',
            ),
            384 => 
            array (
                'id' => '2885',
                'nome' => 'Doutor Camargo',
                'estado_id' => '18',
            ),
            385 => 
            array (
                'id' => '2886',
                'nome' => 'Doutor Ulysses',
                'estado_id' => '18',
            ),
            386 => 
            array (
                'id' => '2887',
                'nome' => 'Enéas Marques',
                'estado_id' => '18',
            ),
            387 => 
            array (
                'id' => '2888',
                'nome' => 'Engenheiro Beltrão',
                'estado_id' => '18',
            ),
            388 => 
            array (
                'id' => '2889',
                'nome' => 'Entre Rios do Oeste',
                'estado_id' => '18',
            ),
            389 => 
            array (
                'id' => '2890',
                'nome' => 'Esperança Nova',
                'estado_id' => '18',
            ),
            390 => 
            array (
                'id' => '2891',
                'nome' => 'Espigão Alto do Iguaçu',
                'estado_id' => '18',
            ),
            391 => 
            array (
                'id' => '2892',
                'nome' => 'Farol',
                'estado_id' => '18',
            ),
            392 => 
            array (
                'id' => '2893',
                'nome' => 'Faxinal',
                'estado_id' => '18',
            ),
            393 => 
            array (
                'id' => '2894',
                'nome' => 'Fazenda Rio Grande',
                'estado_id' => '18',
            ),
            394 => 
            array (
                'id' => '2895',
                'nome' => 'Fênix',
                'estado_id' => '18',
            ),
            395 => 
            array (
                'id' => '2896',
                'nome' => 'Fernandes Pinheiro',
                'estado_id' => '18',
            ),
            396 => 
            array (
                'id' => '2897',
                'nome' => 'Figueira',
                'estado_id' => '18',
            ),
            397 => 
            array (
                'id' => '2898',
                'nome' => 'Flor da Serra do Sul',
                'estado_id' => '18',
            ),
            398 => 
            array (
                'id' => '2899',
                'nome' => 'Floraí',
                'estado_id' => '18',
            ),
            399 => 
            array (
                'id' => '2900',
                'nome' => 'Floresta',
                'estado_id' => '18',
            ),
            400 => 
            array (
                'id' => '2901',
                'nome' => 'Florestópolis',
                'estado_id' => '18',
            ),
            401 => 
            array (
                'id' => '2902',
                'nome' => 'Flórida',
                'estado_id' => '18',
            ),
            402 => 
            array (
                'id' => '2903',
                'nome' => 'Formosa do Oeste',
                'estado_id' => '18',
            ),
            403 => 
            array (
                'id' => '2904',
                'nome' => 'Foz do Iguaçu',
                'estado_id' => '18',
            ),
            404 => 
            array (
                'id' => '2905',
                'nome' => 'Foz do Jordão',
                'estado_id' => '18',
            ),
            405 => 
            array (
                'id' => '2906',
                'nome' => 'Francisco Alves',
                'estado_id' => '18',
            ),
            406 => 
            array (
                'id' => '2907',
                'nome' => 'Francisco Beltrão',
                'estado_id' => '18',
            ),
            407 => 
            array (
                'id' => '2908',
                'nome' => 'General Carneiro',
                'estado_id' => '18',
            ),
            408 => 
            array (
                'id' => '2909',
                'nome' => 'Godoy Moreira',
                'estado_id' => '18',
            ),
            409 => 
            array (
                'id' => '2910',
                'nome' => 'Goioerê',
                'estado_id' => '18',
            ),
            410 => 
            array (
                'id' => '2911',
                'nome' => 'Goioxim',
                'estado_id' => '18',
            ),
            411 => 
            array (
                'id' => '2912',
                'nome' => 'Grandes Rios',
                'estado_id' => '18',
            ),
            412 => 
            array (
                'id' => '2913',
                'nome' => 'Guaíra',
                'estado_id' => '18',
            ),
            413 => 
            array (
                'id' => '2914',
                'nome' => 'Guairaçá',
                'estado_id' => '18',
            ),
            414 => 
            array (
                'id' => '2915',
                'nome' => 'Guamiranga',
                'estado_id' => '18',
            ),
            415 => 
            array (
                'id' => '2916',
                'nome' => 'Guapirama',
                'estado_id' => '18',
            ),
            416 => 
            array (
                'id' => '2917',
                'nome' => 'Guaporema',
                'estado_id' => '18',
            ),
            417 => 
            array (
                'id' => '2918',
                'nome' => 'Guaraci',
                'estado_id' => '18',
            ),
            418 => 
            array (
                'id' => '2919',
                'nome' => 'Guaraniaçu',
                'estado_id' => '18',
            ),
            419 => 
            array (
                'id' => '2920',
                'nome' => 'Guarapuava',
                'estado_id' => '18',
            ),
            420 => 
            array (
                'id' => '2921',
                'nome' => 'Guaraqueçaba',
                'estado_id' => '18',
            ),
            421 => 
            array (
                'id' => '2922',
                'nome' => 'Guaratuba',
                'estado_id' => '18',
            ),
            422 => 
            array (
                'id' => '2923',
                'nome' => 'Honório Serpa',
                'estado_id' => '18',
            ),
            423 => 
            array (
                'id' => '2924',
                'nome' => 'Ibaiti',
                'estado_id' => '18',
            ),
            424 => 
            array (
                'id' => '2925',
                'nome' => 'Ibema',
                'estado_id' => '18',
            ),
            425 => 
            array (
                'id' => '2926',
                'nome' => 'Ibiporã',
                'estado_id' => '18',
            ),
            426 => 
            array (
                'id' => '2927',
                'nome' => 'Icaraíma',
                'estado_id' => '18',
            ),
            427 => 
            array (
                'id' => '2928',
                'nome' => 'Iguaraçu',
                'estado_id' => '18',
            ),
            428 => 
            array (
                'id' => '2929',
                'nome' => 'Iguatu',
                'estado_id' => '18',
            ),
            429 => 
            array (
                'id' => '2930',
                'nome' => 'Imbaú',
                'estado_id' => '18',
            ),
            430 => 
            array (
                'id' => '2931',
                'nome' => 'Imbituva',
                'estado_id' => '18',
            ),
            431 => 
            array (
                'id' => '2932',
                'nome' => 'Inácio Martins',
                'estado_id' => '18',
            ),
            432 => 
            array (
                'id' => '2933',
                'nome' => 'Inajá',
                'estado_id' => '18',
            ),
            433 => 
            array (
                'id' => '2934',
                'nome' => 'Indianópolis',
                'estado_id' => '18',
            ),
            434 => 
            array (
                'id' => '2935',
                'nome' => 'Ipiranga',
                'estado_id' => '18',
            ),
            435 => 
            array (
                'id' => '2936',
                'nome' => 'Iporã',
                'estado_id' => '18',
            ),
            436 => 
            array (
                'id' => '2937',
                'nome' => 'Iracema do Oeste',
                'estado_id' => '18',
            ),
            437 => 
            array (
                'id' => '2938',
                'nome' => 'Irati',
                'estado_id' => '18',
            ),
            438 => 
            array (
                'id' => '2939',
                'nome' => 'Iretama',
                'estado_id' => '18',
            ),
            439 => 
            array (
                'id' => '2940',
                'nome' => 'Itaguajé',
                'estado_id' => '18',
            ),
            440 => 
            array (
                'id' => '2941',
                'nome' => 'Itaipulândia',
                'estado_id' => '18',
            ),
            441 => 
            array (
                'id' => '2942',
                'nome' => 'Itambaracá',
                'estado_id' => '18',
            ),
            442 => 
            array (
                'id' => '2943',
                'nome' => 'Itambé',
                'estado_id' => '18',
            ),
            443 => 
            array (
                'id' => '2944',
                'nome' => 'Itapejara d`Oeste',
                'estado_id' => '18',
            ),
            444 => 
            array (
                'id' => '2945',
                'nome' => 'Itaperuçu',
                'estado_id' => '18',
            ),
            445 => 
            array (
                'id' => '2946',
                'nome' => 'Itaúna do Sul',
                'estado_id' => '18',
            ),
            446 => 
            array (
                'id' => '2947',
                'nome' => 'Ivaí',
                'estado_id' => '18',
            ),
            447 => 
            array (
                'id' => '2948',
                'nome' => 'Ivaiporã',
                'estado_id' => '18',
            ),
            448 => 
            array (
                'id' => '2949',
                'nome' => 'Ivaté',
                'estado_id' => '18',
            ),
            449 => 
            array (
                'id' => '2950',
                'nome' => 'Ivatuba',
                'estado_id' => '18',
            ),
            450 => 
            array (
                'id' => '2951',
                'nome' => 'Jaboti',
                'estado_id' => '18',
            ),
            451 => 
            array (
                'id' => '2952',
                'nome' => 'Jacarezinho',
                'estado_id' => '18',
            ),
            452 => 
            array (
                'id' => '2953',
                'nome' => 'Jaguapitã',
                'estado_id' => '18',
            ),
            453 => 
            array (
                'id' => '2954',
                'nome' => 'Jaguariaíva',
                'estado_id' => '18',
            ),
            454 => 
            array (
                'id' => '2955',
                'nome' => 'Jandaia do Sul',
                'estado_id' => '18',
            ),
            455 => 
            array (
                'id' => '2956',
                'nome' => 'Janiópolis',
                'estado_id' => '18',
            ),
            456 => 
            array (
                'id' => '2957',
                'nome' => 'Japira',
                'estado_id' => '18',
            ),
            457 => 
            array (
                'id' => '2958',
                'nome' => 'Japurá',
                'estado_id' => '18',
            ),
            458 => 
            array (
                'id' => '2959',
                'nome' => 'Jardim Alegre',
                'estado_id' => '18',
            ),
            459 => 
            array (
                'id' => '2960',
                'nome' => 'Jardim Olinda',
                'estado_id' => '18',
            ),
            460 => 
            array (
                'id' => '2961',
                'nome' => 'Jataizinho',
                'estado_id' => '18',
            ),
            461 => 
            array (
                'id' => '2962',
                'nome' => 'Jesuítas',
                'estado_id' => '18',
            ),
            462 => 
            array (
                'id' => '2963',
                'nome' => 'Joaquim Távora',
                'estado_id' => '18',
            ),
            463 => 
            array (
                'id' => '2964',
                'nome' => 'Jundiaí do Sul',
                'estado_id' => '18',
            ),
            464 => 
            array (
                'id' => '2965',
                'nome' => 'Juranda',
                'estado_id' => '18',
            ),
            465 => 
            array (
                'id' => '2966',
                'nome' => 'Jussara',
                'estado_id' => '18',
            ),
            466 => 
            array (
                'id' => '2967',
                'nome' => 'Kaloré',
                'estado_id' => '18',
            ),
            467 => 
            array (
                'id' => '2968',
                'nome' => 'Lapa',
                'estado_id' => '18',
            ),
            468 => 
            array (
                'id' => '2969',
                'nome' => 'Laranjal',
                'estado_id' => '18',
            ),
            469 => 
            array (
                'id' => '2970',
                'nome' => 'Laranjeiras do Sul',
                'estado_id' => '18',
            ),
            470 => 
            array (
                'id' => '2971',
                'nome' => 'Leópolis',
                'estado_id' => '18',
            ),
            471 => 
            array (
                'id' => '2972',
                'nome' => 'Lidianópolis',
                'estado_id' => '18',
            ),
            472 => 
            array (
                'id' => '2973',
                'nome' => 'Lindoeste',
                'estado_id' => '18',
            ),
            473 => 
            array (
                'id' => '2974',
                'nome' => 'Loanda',
                'estado_id' => '18',
            ),
            474 => 
            array (
                'id' => '2975',
                'nome' => 'Lobato',
                'estado_id' => '18',
            ),
            475 => 
            array (
                'id' => '2976',
                'nome' => 'Londrina',
                'estado_id' => '18',
            ),
            476 => 
            array (
                'id' => '2977',
                'nome' => 'Luiziana',
                'estado_id' => '18',
            ),
            477 => 
            array (
                'id' => '2978',
                'nome' => 'Lunardelli',
                'estado_id' => '18',
            ),
            478 => 
            array (
                'id' => '2979',
                'nome' => 'Lupionópolis',
                'estado_id' => '18',
            ),
            479 => 
            array (
                'id' => '2980',
                'nome' => 'Mallet',
                'estado_id' => '18',
            ),
            480 => 
            array (
                'id' => '2981',
                'nome' => 'Mamborê',
                'estado_id' => '18',
            ),
            481 => 
            array (
                'id' => '2982',
                'nome' => 'Mandaguaçu',
                'estado_id' => '18',
            ),
            482 => 
            array (
                'id' => '2983',
                'nome' => 'Mandaguari',
                'estado_id' => '18',
            ),
            483 => 
            array (
                'id' => '2984',
                'nome' => 'Mandirituba',
                'estado_id' => '18',
            ),
            484 => 
            array (
                'id' => '2985',
                'nome' => 'Manfrinópolis',
                'estado_id' => '18',
            ),
            485 => 
            array (
                'id' => '2986',
                'nome' => 'Mangueirinha',
                'estado_id' => '18',
            ),
            486 => 
            array (
                'id' => '2987',
                'nome' => 'Manoel Ribas',
                'estado_id' => '18',
            ),
            487 => 
            array (
                'id' => '2988',
                'nome' => 'Marechal Cândido Rondon',
                'estado_id' => '18',
            ),
            488 => 
            array (
                'id' => '2989',
                'nome' => 'Maria Helena',
                'estado_id' => '18',
            ),
            489 => 
            array (
                'id' => '2990',
                'nome' => 'Marialva',
                'estado_id' => '18',
            ),
            490 => 
            array (
                'id' => '2991',
                'nome' => 'Marilândia do Sul',
                'estado_id' => '18',
            ),
            491 => 
            array (
                'id' => '2992',
                'nome' => 'Marilena',
                'estado_id' => '18',
            ),
            492 => 
            array (
                'id' => '2993',
                'nome' => 'Mariluz',
                'estado_id' => '18',
            ),
            493 => 
            array (
                'id' => '2994',
                'nome' => 'Maringá',
                'estado_id' => '18',
            ),
            494 => 
            array (
                'id' => '2995',
                'nome' => 'Mariópolis',
                'estado_id' => '18',
            ),
            495 => 
            array (
                'id' => '2996',
                'nome' => 'Maripá',
                'estado_id' => '18',
            ),
            496 => 
            array (
                'id' => '2997',
                'nome' => 'Marmeleiro',
                'estado_id' => '18',
            ),
            497 => 
            array (
                'id' => '2998',
                'nome' => 'Marquinho',
                'estado_id' => '18',
            ),
            498 => 
            array (
                'id' => '2999',
                'nome' => 'Marumbi',
                'estado_id' => '18',
            ),
            499 => 
            array (
                'id' => '3000',
                'nome' => 'Matelândia',
                'estado_id' => '18',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '3001',
                'nome' => 'Matinhos',
                'estado_id' => '18',
            ),
            1 => 
            array (
                'id' => '3002',
                'nome' => 'Mato Rico',
                'estado_id' => '18',
            ),
            2 => 
            array (
                'id' => '3003',
                'nome' => 'Mauá da Serra',
                'estado_id' => '18',
            ),
            3 => 
            array (
                'id' => '3004',
                'nome' => 'Medianeira',
                'estado_id' => '18',
            ),
            4 => 
            array (
                'id' => '3005',
                'nome' => 'Mercedes',
                'estado_id' => '18',
            ),
            5 => 
            array (
                'id' => '3006',
                'nome' => 'Mirador',
                'estado_id' => '18',
            ),
            6 => 
            array (
                'id' => '3007',
                'nome' => 'Miraselva',
                'estado_id' => '18',
            ),
            7 => 
            array (
                'id' => '3008',
                'nome' => 'Missal',
                'estado_id' => '18',
            ),
            8 => 
            array (
                'id' => '3009',
                'nome' => 'Moreira Sales',
                'estado_id' => '18',
            ),
            9 => 
            array (
                'id' => '3010',
                'nome' => 'Morretes',
                'estado_id' => '18',
            ),
            10 => 
            array (
                'id' => '3011',
                'nome' => 'Munhoz de Melo',
                'estado_id' => '18',
            ),
            11 => 
            array (
                'id' => '3012',
                'nome' => 'Nossa Senhora das Graças',
                'estado_id' => '18',
            ),
            12 => 
            array (
                'id' => '3013',
                'nome' => 'Nova Aliança do Ivaí',
                'estado_id' => '18',
            ),
            13 => 
            array (
                'id' => '3014',
                'nome' => 'Nova América da Colina',
                'estado_id' => '18',
            ),
            14 => 
            array (
                'id' => '3015',
                'nome' => 'Nova Aurora',
                'estado_id' => '18',
            ),
            15 => 
            array (
                'id' => '3016',
                'nome' => 'Nova Cantu',
                'estado_id' => '18',
            ),
            16 => 
            array (
                'id' => '3017',
                'nome' => 'Nova Esperança',
                'estado_id' => '18',
            ),
            17 => 
            array (
                'id' => '3018',
                'nome' => 'Nova Esperança do Sudoeste',
                'estado_id' => '18',
            ),
            18 => 
            array (
                'id' => '3019',
                'nome' => 'Nova Fátima',
                'estado_id' => '18',
            ),
            19 => 
            array (
                'id' => '3020',
                'nome' => 'Nova Laranjeiras',
                'estado_id' => '18',
            ),
            20 => 
            array (
                'id' => '3021',
                'nome' => 'Nova Londrina',
                'estado_id' => '18',
            ),
            21 => 
            array (
                'id' => '3022',
                'nome' => 'Nova Olímpia',
                'estado_id' => '18',
            ),
            22 => 
            array (
                'id' => '3023',
                'nome' => 'Nova Prata do Iguaçu',
                'estado_id' => '18',
            ),
            23 => 
            array (
                'id' => '3024',
                'nome' => 'Nova Santa Bárbara',
                'estado_id' => '18',
            ),
            24 => 
            array (
                'id' => '3025',
                'nome' => 'Nova Santa Rosa',
                'estado_id' => '18',
            ),
            25 => 
            array (
                'id' => '3026',
                'nome' => 'Nova Tebas',
                'estado_id' => '18',
            ),
            26 => 
            array (
                'id' => '3027',
                'nome' => 'Novo Itacolomi',
                'estado_id' => '18',
            ),
            27 => 
            array (
                'id' => '3028',
                'nome' => 'Ortigueira',
                'estado_id' => '18',
            ),
            28 => 
            array (
                'id' => '3029',
                'nome' => 'Ourizona',
                'estado_id' => '18',
            ),
            29 => 
            array (
                'id' => '3030',
                'nome' => 'Ouro Verde do Oeste',
                'estado_id' => '18',
            ),
            30 => 
            array (
                'id' => '3031',
                'nome' => 'Paiçandu',
                'estado_id' => '18',
            ),
            31 => 
            array (
                'id' => '3032',
                'nome' => 'Palmas',
                'estado_id' => '18',
            ),
            32 => 
            array (
                'id' => '3033',
                'nome' => 'Palmeira',
                'estado_id' => '18',
            ),
            33 => 
            array (
                'id' => '3034',
                'nome' => 'Palmital',
                'estado_id' => '18',
            ),
            34 => 
            array (
                'id' => '3035',
                'nome' => 'Palotina',
                'estado_id' => '18',
            ),
            35 => 
            array (
                'id' => '3036',
                'nome' => 'Paraíso do Norte',
                'estado_id' => '18',
            ),
            36 => 
            array (
                'id' => '3037',
                'nome' => 'Paranacity',
                'estado_id' => '18',
            ),
            37 => 
            array (
                'id' => '3038',
                'nome' => 'Paranaguá',
                'estado_id' => '18',
            ),
            38 => 
            array (
                'id' => '3039',
                'nome' => 'Paranapoema',
                'estado_id' => '18',
            ),
            39 => 
            array (
                'id' => '3040',
                'nome' => 'Paranavaí',
                'estado_id' => '18',
            ),
            40 => 
            array (
                'id' => '3041',
                'nome' => 'Pato Bragado',
                'estado_id' => '18',
            ),
            41 => 
            array (
                'id' => '3042',
                'nome' => 'Pato Branco',
                'estado_id' => '18',
            ),
            42 => 
            array (
                'id' => '3043',
                'nome' => 'Paula Freitas',
                'estado_id' => '18',
            ),
            43 => 
            array (
                'id' => '3044',
                'nome' => 'Paulo Frontin',
                'estado_id' => '18',
            ),
            44 => 
            array (
                'id' => '3045',
                'nome' => 'Peabiru',
                'estado_id' => '18',
            ),
            45 => 
            array (
                'id' => '3046',
                'nome' => 'Perobal',
                'estado_id' => '18',
            ),
            46 => 
            array (
                'id' => '3047',
                'nome' => 'Pérola',
                'estado_id' => '18',
            ),
            47 => 
            array (
                'id' => '3048',
                'nome' => 'Pérola d`Oeste',
                'estado_id' => '18',
            ),
            48 => 
            array (
                'id' => '3049',
                'nome' => 'Piên',
                'estado_id' => '18',
            ),
            49 => 
            array (
                'id' => '3050',
                'nome' => 'Pinhais',
                'estado_id' => '18',
            ),
            50 => 
            array (
                'id' => '3051',
                'nome' => 'Pinhal de São Bento',
                'estado_id' => '18',
            ),
            51 => 
            array (
                'id' => '3052',
                'nome' => 'Pinhalão',
                'estado_id' => '18',
            ),
            52 => 
            array (
                'id' => '3053',
                'nome' => 'Pinhão',
                'estado_id' => '18',
            ),
            53 => 
            array (
                'id' => '3054',
                'nome' => 'Piraí do Sul',
                'estado_id' => '18',
            ),
            54 => 
            array (
                'id' => '3055',
                'nome' => 'Piraquara',
                'estado_id' => '18',
            ),
            55 => 
            array (
                'id' => '3056',
                'nome' => 'Pitanga',
                'estado_id' => '18',
            ),
            56 => 
            array (
                'id' => '3057',
                'nome' => 'Pitangueiras',
                'estado_id' => '18',
            ),
            57 => 
            array (
                'id' => '3058',
                'nome' => 'Planaltina do Paraná',
                'estado_id' => '18',
            ),
            58 => 
            array (
                'id' => '3059',
                'nome' => 'Planalto',
                'estado_id' => '18',
            ),
            59 => 
            array (
                'id' => '3060',
                'nome' => 'Ponta Grossa',
                'estado_id' => '18',
            ),
            60 => 
            array (
                'id' => '3061',
                'nome' => 'Pontal do Paraná',
                'estado_id' => '18',
            ),
            61 => 
            array (
                'id' => '3062',
                'nome' => 'Porecatu',
                'estado_id' => '18',
            ),
            62 => 
            array (
                'id' => '3063',
                'nome' => 'Porto Amazonas',
                'estado_id' => '18',
            ),
            63 => 
            array (
                'id' => '3064',
                'nome' => 'Porto Barreiro',
                'estado_id' => '18',
            ),
            64 => 
            array (
                'id' => '3065',
                'nome' => 'Porto Rico',
                'estado_id' => '18',
            ),
            65 => 
            array (
                'id' => '3066',
                'nome' => 'Porto Vitória',
                'estado_id' => '18',
            ),
            66 => 
            array (
                'id' => '3067',
                'nome' => 'Prado Ferreira',
                'estado_id' => '18',
            ),
            67 => 
            array (
                'id' => '3068',
                'nome' => 'Pranchita',
                'estado_id' => '18',
            ),
            68 => 
            array (
                'id' => '3069',
                'nome' => 'Presidente Castelo Branco',
                'estado_id' => '18',
            ),
            69 => 
            array (
                'id' => '3070',
                'nome' => 'Primeiro de Maio',
                'estado_id' => '18',
            ),
            70 => 
            array (
                'id' => '3071',
                'nome' => 'Prudentópolis',
                'estado_id' => '18',
            ),
            71 => 
            array (
                'id' => '3072',
                'nome' => 'Quarto Centenário',
                'estado_id' => '18',
            ),
            72 => 
            array (
                'id' => '3073',
                'nome' => 'Quatiguá',
                'estado_id' => '18',
            ),
            73 => 
            array (
                'id' => '3074',
                'nome' => 'Quatro Barras',
                'estado_id' => '18',
            ),
            74 => 
            array (
                'id' => '3075',
                'nome' => 'Quatro Pontes',
                'estado_id' => '18',
            ),
            75 => 
            array (
                'id' => '3076',
                'nome' => 'Quedas do Iguaçu',
                'estado_id' => '18',
            ),
            76 => 
            array (
                'id' => '3077',
                'nome' => 'Querência do Norte',
                'estado_id' => '18',
            ),
            77 => 
            array (
                'id' => '3078',
                'nome' => 'Quinta do Sol',
                'estado_id' => '18',
            ),
            78 => 
            array (
                'id' => '3079',
                'nome' => 'Quitandinha',
                'estado_id' => '18',
            ),
            79 => 
            array (
                'id' => '3080',
                'nome' => 'Ramilândia',
                'estado_id' => '18',
            ),
            80 => 
            array (
                'id' => '3081',
                'nome' => 'Rancho Alegre',
                'estado_id' => '18',
            ),
            81 => 
            array (
                'id' => '3082',
                'nome' => 'Rancho Alegre d`Oeste',
                'estado_id' => '18',
            ),
            82 => 
            array (
                'id' => '3083',
                'nome' => 'Realeza',
                'estado_id' => '18',
            ),
            83 => 
            array (
                'id' => '3084',
                'nome' => 'Rebouças',
                'estado_id' => '18',
            ),
            84 => 
            array (
                'id' => '3085',
                'nome' => 'Renascença',
                'estado_id' => '18',
            ),
            85 => 
            array (
                'id' => '3086',
                'nome' => 'Reserva',
                'estado_id' => '18',
            ),
            86 => 
            array (
                'id' => '3087',
                'nome' => 'Reserva do Iguaçu',
                'estado_id' => '18',
            ),
            87 => 
            array (
                'id' => '3088',
                'nome' => 'Ribeirão Claro',
                'estado_id' => '18',
            ),
            88 => 
            array (
                'id' => '3089',
                'nome' => 'Ribeirão do Pinhal',
                'estado_id' => '18',
            ),
            89 => 
            array (
                'id' => '3090',
                'nome' => 'Rio Azul',
                'estado_id' => '18',
            ),
            90 => 
            array (
                'id' => '3091',
                'nome' => 'Rio Bom',
                'estado_id' => '18',
            ),
            91 => 
            array (
                'id' => '3092',
                'nome' => 'Rio Bonito do Iguaçu',
                'estado_id' => '18',
            ),
            92 => 
            array (
                'id' => '3093',
                'nome' => 'Rio Branco do Ivaí',
                'estado_id' => '18',
            ),
            93 => 
            array (
                'id' => '3094',
                'nome' => 'Rio Branco do Sul',
                'estado_id' => '18',
            ),
            94 => 
            array (
                'id' => '3095',
                'nome' => 'Rio Negro',
                'estado_id' => '18',
            ),
            95 => 
            array (
                'id' => '3096',
                'nome' => 'Rolândia',
                'estado_id' => '18',
            ),
            96 => 
            array (
                'id' => '3097',
                'nome' => 'Roncador',
                'estado_id' => '18',
            ),
            97 => 
            array (
                'id' => '3098',
                'nome' => 'Rondon',
                'estado_id' => '18',
            ),
            98 => 
            array (
                'id' => '3099',
                'nome' => 'Rosário do Ivaí',
                'estado_id' => '18',
            ),
            99 => 
            array (
                'id' => '3100',
                'nome' => 'Sabáudia',
                'estado_id' => '18',
            ),
            100 => 
            array (
                'id' => '3101',
                'nome' => 'Salgado Filho',
                'estado_id' => '18',
            ),
            101 => 
            array (
                'id' => '3102',
                'nome' => 'Salto do Itararé',
                'estado_id' => '18',
            ),
            102 => 
            array (
                'id' => '3103',
                'nome' => 'Salto do Lontra',
                'estado_id' => '18',
            ),
            103 => 
            array (
                'id' => '3104',
                'nome' => 'Santa Amélia',
                'estado_id' => '18',
            ),
            104 => 
            array (
                'id' => '3105',
                'nome' => 'Santa Cecília do Pavão',
                'estado_id' => '18',
            ),
            105 => 
            array (
                'id' => '3106',
                'nome' => 'Santa Cruz de Monte Castelo',
                'estado_id' => '18',
            ),
            106 => 
            array (
                'id' => '3107',
                'nome' => 'Santa Fé',
                'estado_id' => '18',
            ),
            107 => 
            array (
                'id' => '3108',
                'nome' => 'Santa Helena',
                'estado_id' => '18',
            ),
            108 => 
            array (
                'id' => '3109',
                'nome' => 'Santa Inês',
                'estado_id' => '18',
            ),
            109 => 
            array (
                'id' => '3110',
                'nome' => 'Santa Isabel do Ivaí',
                'estado_id' => '18',
            ),
            110 => 
            array (
                'id' => '3111',
                'nome' => 'Santa Izabel do Oeste',
                'estado_id' => '18',
            ),
            111 => 
            array (
                'id' => '3112',
                'nome' => 'Santa Lúcia',
                'estado_id' => '18',
            ),
            112 => 
            array (
                'id' => '3113',
                'nome' => 'Santa Maria do Oeste',
                'estado_id' => '18',
            ),
            113 => 
            array (
                'id' => '3114',
                'nome' => 'Santa Mariana',
                'estado_id' => '18',
            ),
            114 => 
            array (
                'id' => '3115',
                'nome' => 'Santa Mônica',
                'estado_id' => '18',
            ),
            115 => 
            array (
                'id' => '3116',
                'nome' => 'Santa Tereza do Oeste',
                'estado_id' => '18',
            ),
            116 => 
            array (
                'id' => '3117',
                'nome' => 'Santa Terezinha de Itaipu',
                'estado_id' => '18',
            ),
            117 => 
            array (
                'id' => '3118',
                'nome' => 'Santana do Itararé',
                'estado_id' => '18',
            ),
            118 => 
            array (
                'id' => '3119',
                'nome' => 'Santo Antônio da Platina',
                'estado_id' => '18',
            ),
            119 => 
            array (
                'id' => '3120',
                'nome' => 'Santo Antônio do Caiuá',
                'estado_id' => '18',
            ),
            120 => 
            array (
                'id' => '3121',
                'nome' => 'Santo Antônio do Paraíso',
                'estado_id' => '18',
            ),
            121 => 
            array (
                'id' => '3122',
                'nome' => 'Santo Antônio do Sudoeste',
                'estado_id' => '18',
            ),
            122 => 
            array (
                'id' => '3123',
                'nome' => 'Santo Inácio',
                'estado_id' => '18',
            ),
            123 => 
            array (
                'id' => '3124',
                'nome' => 'São Carlos do Ivaí',
                'estado_id' => '18',
            ),
            124 => 
            array (
                'id' => '3125',
                'nome' => 'São Jerônimo da Serra',
                'estado_id' => '18',
            ),
            125 => 
            array (
                'id' => '3126',
                'nome' => 'São João',
                'estado_id' => '18',
            ),
            126 => 
            array (
                'id' => '3127',
                'nome' => 'São João do Caiuá',
                'estado_id' => '18',
            ),
            127 => 
            array (
                'id' => '3128',
                'nome' => 'São João do Ivaí',
                'estado_id' => '18',
            ),
            128 => 
            array (
                'id' => '3129',
                'nome' => 'São João do Triunfo',
                'estado_id' => '18',
            ),
            129 => 
            array (
                'id' => '3130',
                'nome' => 'São Jorge d`Oeste',
                'estado_id' => '18',
            ),
            130 => 
            array (
                'id' => '3131',
                'nome' => 'São Jorge do Ivaí',
                'estado_id' => '18',
            ),
            131 => 
            array (
                'id' => '3132',
                'nome' => 'São Jorge do Patrocínio',
                'estado_id' => '18',
            ),
            132 => 
            array (
                'id' => '3133',
                'nome' => 'São José da Boa Vista',
                'estado_id' => '18',
            ),
            133 => 
            array (
                'id' => '3134',
                'nome' => 'São José das Palmeiras',
                'estado_id' => '18',
            ),
            134 => 
            array (
                'id' => '3135',
                'nome' => 'São José dos Pinhais',
                'estado_id' => '18',
            ),
            135 => 
            array (
                'id' => '3136',
                'nome' => 'São Manoel do Paraná',
                'estado_id' => '18',
            ),
            136 => 
            array (
                'id' => '3137',
                'nome' => 'São Mateus do Sul',
                'estado_id' => '18',
            ),
            137 => 
            array (
                'id' => '3138',
                'nome' => 'São Miguel do Iguaçu',
                'estado_id' => '18',
            ),
            138 => 
            array (
                'id' => '3139',
                'nome' => 'São Pedro do Iguaçu',
                'estado_id' => '18',
            ),
            139 => 
            array (
                'id' => '3140',
                'nome' => 'São Pedro do Ivaí',
                'estado_id' => '18',
            ),
            140 => 
            array (
                'id' => '3141',
                'nome' => 'São Pedro do Paraná',
                'estado_id' => '18',
            ),
            141 => 
            array (
                'id' => '3142',
                'nome' => 'São Sebastião da Amoreira',
                'estado_id' => '18',
            ),
            142 => 
            array (
                'id' => '3143',
                'nome' => 'São Tomé',
                'estado_id' => '18',
            ),
            143 => 
            array (
                'id' => '3144',
                'nome' => 'Sapopema',
                'estado_id' => '18',
            ),
            144 => 
            array (
                'id' => '3145',
                'nome' => 'Sarandi',
                'estado_id' => '18',
            ),
            145 => 
            array (
                'id' => '3146',
                'nome' => 'Saudade do Iguaçu',
                'estado_id' => '18',
            ),
            146 => 
            array (
                'id' => '3147',
                'nome' => 'Sengés',
                'estado_id' => '18',
            ),
            147 => 
            array (
                'id' => '3148',
                'nome' => 'Serranópolis do Iguaçu',
                'estado_id' => '18',
            ),
            148 => 
            array (
                'id' => '3149',
                'nome' => 'Sertaneja',
                'estado_id' => '18',
            ),
            149 => 
            array (
                'id' => '3150',
                'nome' => 'Sertanópolis',
                'estado_id' => '18',
            ),
            150 => 
            array (
                'id' => '3151',
                'nome' => 'Siqueira Campos',
                'estado_id' => '18',
            ),
            151 => 
            array (
                'id' => '3152',
                'nome' => 'Sulina',
                'estado_id' => '18',
            ),
            152 => 
            array (
                'id' => '3153',
                'nome' => 'Tamarana',
                'estado_id' => '18',
            ),
            153 => 
            array (
                'id' => '3154',
                'nome' => 'Tamboara',
                'estado_id' => '18',
            ),
            154 => 
            array (
                'id' => '3155',
                'nome' => 'Tapejara',
                'estado_id' => '18',
            ),
            155 => 
            array (
                'id' => '3156',
                'nome' => 'Tapira',
                'estado_id' => '18',
            ),
            156 => 
            array (
                'id' => '3157',
                'nome' => 'Teixeira Soares',
                'estado_id' => '18',
            ),
            157 => 
            array (
                'id' => '3158',
                'nome' => 'Telêmaco Borba',
                'estado_id' => '18',
            ),
            158 => 
            array (
                'id' => '3159',
                'nome' => 'Terra Boa',
                'estado_id' => '18',
            ),
            159 => 
            array (
                'id' => '3160',
                'nome' => 'Terra Rica',
                'estado_id' => '18',
            ),
            160 => 
            array (
                'id' => '3161',
                'nome' => 'Terra Roxa',
                'estado_id' => '18',
            ),
            161 => 
            array (
                'id' => '3162',
                'nome' => 'Tibagi',
                'estado_id' => '18',
            ),
            162 => 
            array (
                'id' => '3163',
                'nome' => 'Tijucas do Sul',
                'estado_id' => '18',
            ),
            163 => 
            array (
                'id' => '3164',
                'nome' => 'Toledo',
                'estado_id' => '18',
            ),
            164 => 
            array (
                'id' => '3165',
                'nome' => 'Tomazina',
                'estado_id' => '18',
            ),
            165 => 
            array (
                'id' => '3166',
                'nome' => 'Três Barras do Paraná',
                'estado_id' => '18',
            ),
            166 => 
            array (
                'id' => '3167',
                'nome' => 'Tunas do Paraná',
                'estado_id' => '18',
            ),
            167 => 
            array (
                'id' => '3168',
                'nome' => 'Tuneiras do Oeste',
                'estado_id' => '18',
            ),
            168 => 
            array (
                'id' => '3169',
                'nome' => 'Tupãssi',
                'estado_id' => '18',
            ),
            169 => 
            array (
                'id' => '3170',
                'nome' => 'Turvo',
                'estado_id' => '18',
            ),
            170 => 
            array (
                'id' => '3171',
                'nome' => 'Ubiratã',
                'estado_id' => '18',
            ),
            171 => 
            array (
                'id' => '3172',
                'nome' => 'Umuarama',
                'estado_id' => '18',
            ),
            172 => 
            array (
                'id' => '3173',
                'nome' => 'União da Vitória',
                'estado_id' => '18',
            ),
            173 => 
            array (
                'id' => '3174',
                'nome' => 'Uniflor',
                'estado_id' => '18',
            ),
            174 => 
            array (
                'id' => '3175',
                'nome' => 'Uraí',
                'estado_id' => '18',
            ),
            175 => 
            array (
                'id' => '3176',
                'nome' => 'Ventania',
                'estado_id' => '18',
            ),
            176 => 
            array (
                'id' => '3177',
                'nome' => 'Vera Cruz do Oeste',
                'estado_id' => '18',
            ),
            177 => 
            array (
                'id' => '3178',
                'nome' => 'Verê',
                'estado_id' => '18',
            ),
            178 => 
            array (
                'id' => '3179',
                'nome' => 'Virmond',
                'estado_id' => '18',
            ),
            179 => 
            array (
                'id' => '3180',
                'nome' => 'Vitorino',
                'estado_id' => '18',
            ),
            180 => 
            array (
                'id' => '3181',
                'nome' => 'Wenceslau Braz',
                'estado_id' => '18',
            ),
            181 => 
            array (
                'id' => '3182',
                'nome' => 'Xambrê',
                'estado_id' => '18',
            ),
            182 => 
            array (
                'id' => '3183',
                'nome' => 'Abreu e Lima',
                'estado_id' => '16',
            ),
            183 => 
            array (
                'id' => '3184',
                'nome' => 'Afogados da Ingazeira',
                'estado_id' => '16',
            ),
            184 => 
            array (
                'id' => '3185',
                'nome' => 'Afrânio',
                'estado_id' => '16',
            ),
            185 => 
            array (
                'id' => '3186',
                'nome' => 'Agrestina',
                'estado_id' => '16',
            ),
            186 => 
            array (
                'id' => '3187',
                'nome' => 'Água Preta',
                'estado_id' => '16',
            ),
            187 => 
            array (
                'id' => '3188',
                'nome' => 'Águas Belas',
                'estado_id' => '16',
            ),
            188 => 
            array (
                'id' => '3189',
                'nome' => 'Alagoinha',
                'estado_id' => '16',
            ),
            189 => 
            array (
                'id' => '3190',
                'nome' => 'Aliança',
                'estado_id' => '16',
            ),
            190 => 
            array (
                'id' => '3191',
                'nome' => 'Altinho',
                'estado_id' => '16',
            ),
            191 => 
            array (
                'id' => '3192',
                'nome' => 'Amaraji',
                'estado_id' => '16',
            ),
            192 => 
            array (
                'id' => '3193',
                'nome' => 'Angelim',
                'estado_id' => '16',
            ),
            193 => 
            array (
                'id' => '3194',
                'nome' => 'Araçoiaba',
                'estado_id' => '16',
            ),
            194 => 
            array (
                'id' => '3195',
                'nome' => 'Araripina',
                'estado_id' => '16',
            ),
            195 => 
            array (
                'id' => '3196',
                'nome' => 'Arcoverde',
                'estado_id' => '16',
            ),
            196 => 
            array (
                'id' => '3197',
                'nome' => 'Barra de Guabiraba',
                'estado_id' => '16',
            ),
            197 => 
            array (
                'id' => '3198',
                'nome' => 'Barreiros',
                'estado_id' => '16',
            ),
            198 => 
            array (
                'id' => '3199',
                'nome' => 'Belém de Maria',
                'estado_id' => '16',
            ),
            199 => 
            array (
                'id' => '3200',
                'nome' => 'Belém de São Francisco',
                'estado_id' => '16',
            ),
            200 => 
            array (
                'id' => '3201',
                'nome' => 'Belo Jardim',
                'estado_id' => '16',
            ),
            201 => 
            array (
                'id' => '3202',
                'nome' => 'Betânia',
                'estado_id' => '16',
            ),
            202 => 
            array (
                'id' => '3203',
                'nome' => 'Bezerros',
                'estado_id' => '16',
            ),
            203 => 
            array (
                'id' => '3204',
                'nome' => 'Bodocó',
                'estado_id' => '16',
            ),
            204 => 
            array (
                'id' => '3205',
                'nome' => 'Bom Conselho',
                'estado_id' => '16',
            ),
            205 => 
            array (
                'id' => '3206',
                'nome' => 'Bom Jardim',
                'estado_id' => '16',
            ),
            206 => 
            array (
                'id' => '3207',
                'nome' => 'Bonito',
                'estado_id' => '16',
            ),
            207 => 
            array (
                'id' => '3208',
                'nome' => 'Brejão',
                'estado_id' => '16',
            ),
            208 => 
            array (
                'id' => '3209',
                'nome' => 'Brejinho',
                'estado_id' => '16',
            ),
            209 => 
            array (
                'id' => '3210',
                'nome' => 'Brejo da Madre de Deus',
                'estado_id' => '16',
            ),
            210 => 
            array (
                'id' => '3211',
                'nome' => 'Buenos Aires',
                'estado_id' => '16',
            ),
            211 => 
            array (
                'id' => '3212',
                'nome' => 'Buíque',
                'estado_id' => '16',
            ),
            212 => 
            array (
                'id' => '3213',
                'nome' => 'Cabo de Santo Agostinho',
                'estado_id' => '16',
            ),
            213 => 
            array (
                'id' => '3214',
                'nome' => 'Cabrobó',
                'estado_id' => '16',
            ),
            214 => 
            array (
                'id' => '3215',
                'nome' => 'Cachoeirinha',
                'estado_id' => '16',
            ),
            215 => 
            array (
                'id' => '3216',
                'nome' => 'Caetés',
                'estado_id' => '16',
            ),
            216 => 
            array (
                'id' => '3217',
                'nome' => 'Calçado',
                'estado_id' => '16',
            ),
            217 => 
            array (
                'id' => '3218',
                'nome' => 'Calumbi',
                'estado_id' => '16',
            ),
            218 => 
            array (
                'id' => '3219',
                'nome' => 'Camaragibe',
                'estado_id' => '16',
            ),
            219 => 
            array (
                'id' => '3220',
                'nome' => 'Camocim de São Félix',
                'estado_id' => '16',
            ),
            220 => 
            array (
                'id' => '3221',
                'nome' => 'Camutanga',
                'estado_id' => '16',
            ),
            221 => 
            array (
                'id' => '3222',
                'nome' => 'Canhotinho',
                'estado_id' => '16',
            ),
            222 => 
            array (
                'id' => '3223',
                'nome' => 'Capoeiras',
                'estado_id' => '16',
            ),
            223 => 
            array (
                'id' => '3224',
                'nome' => 'Carnaíba',
                'estado_id' => '16',
            ),
            224 => 
            array (
                'id' => '3225',
                'nome' => 'Carnaubeira da Penha',
                'estado_id' => '16',
            ),
            225 => 
            array (
                'id' => '3226',
                'nome' => 'Carpina',
                'estado_id' => '16',
            ),
            226 => 
            array (
                'id' => '3227',
                'nome' => 'Caruaru',
                'estado_id' => '16',
            ),
            227 => 
            array (
                'id' => '3228',
                'nome' => 'Casinhas',
                'estado_id' => '16',
            ),
            228 => 
            array (
                'id' => '3229',
                'nome' => 'Catende',
                'estado_id' => '16',
            ),
            229 => 
            array (
                'id' => '3230',
                'nome' => 'Cedro',
                'estado_id' => '16',
            ),
            230 => 
            array (
                'id' => '3231',
                'nome' => 'Chã de Alegria',
                'estado_id' => '16',
            ),
            231 => 
            array (
                'id' => '3232',
                'nome' => 'Chã Grande',
                'estado_id' => '16',
            ),
            232 => 
            array (
                'id' => '3233',
                'nome' => 'Condado',
                'estado_id' => '16',
            ),
            233 => 
            array (
                'id' => '3234',
                'nome' => 'Correntes',
                'estado_id' => '16',
            ),
            234 => 
            array (
                'id' => '3235',
                'nome' => 'Cortês',
                'estado_id' => '16',
            ),
            235 => 
            array (
                'id' => '3236',
                'nome' => 'Cumaru',
                'estado_id' => '16',
            ),
            236 => 
            array (
                'id' => '3237',
                'nome' => 'Cupira',
                'estado_id' => '16',
            ),
            237 => 
            array (
                'id' => '3238',
                'nome' => 'Custódia',
                'estado_id' => '16',
            ),
            238 => 
            array (
                'id' => '3239',
                'nome' => 'Dormentes',
                'estado_id' => '16',
            ),
            239 => 
            array (
                'id' => '3240',
                'nome' => 'Escada',
                'estado_id' => '16',
            ),
            240 => 
            array (
                'id' => '3241',
                'nome' => 'Exu',
                'estado_id' => '16',
            ),
            241 => 
            array (
                'id' => '3242',
                'nome' => 'Feira Nova',
                'estado_id' => '16',
            ),
            242 => 
            array (
                'id' => '3243',
                'nome' => 'Fernando de Noronha',
                'estado_id' => '16',
            ),
            243 => 
            array (
                'id' => '3244',
                'nome' => 'Ferreiros',
                'estado_id' => '16',
            ),
            244 => 
            array (
                'id' => '3245',
                'nome' => 'Flores',
                'estado_id' => '16',
            ),
            245 => 
            array (
                'id' => '3246',
                'nome' => 'Floresta',
                'estado_id' => '16',
            ),
            246 => 
            array (
                'id' => '3247',
                'nome' => 'Frei Miguelinho',
                'estado_id' => '16',
            ),
            247 => 
            array (
                'id' => '3248',
                'nome' => 'Gameleira',
                'estado_id' => '16',
            ),
            248 => 
            array (
                'id' => '3249',
                'nome' => 'Garanhuns',
                'estado_id' => '16',
            ),
            249 => 
            array (
                'id' => '3250',
                'nome' => 'Glória do Goitá',
                'estado_id' => '16',
            ),
            250 => 
            array (
                'id' => '3251',
                'nome' => 'Goiana',
                'estado_id' => '16',
            ),
            251 => 
            array (
                'id' => '3252',
                'nome' => 'Granito',
                'estado_id' => '16',
            ),
            252 => 
            array (
                'id' => '3253',
                'nome' => 'Gravatá',
                'estado_id' => '16',
            ),
            253 => 
            array (
                'id' => '3254',
                'nome' => 'Iati',
                'estado_id' => '16',
            ),
            254 => 
            array (
                'id' => '3255',
                'nome' => 'Ibimirim',
                'estado_id' => '16',
            ),
            255 => 
            array (
                'id' => '3256',
                'nome' => 'Ibirajuba',
                'estado_id' => '16',
            ),
            256 => 
            array (
                'id' => '3257',
                'nome' => 'Igarassu',
                'estado_id' => '16',
            ),
            257 => 
            array (
                'id' => '3258',
                'nome' => 'Iguaraci',
                'estado_id' => '16',
            ),
            258 => 
            array (
                'id' => '3259',
                'nome' => 'Ilha de Itamaracá',
                'estado_id' => '16',
            ),
            259 => 
            array (
                'id' => '3260',
                'nome' => 'Inajá',
                'estado_id' => '16',
            ),
            260 => 
            array (
                'id' => '3261',
                'nome' => 'Ingazeira',
                'estado_id' => '16',
            ),
            261 => 
            array (
                'id' => '3262',
                'nome' => 'Ipojuca',
                'estado_id' => '16',
            ),
            262 => 
            array (
                'id' => '3263',
                'nome' => 'Ipubi',
                'estado_id' => '16',
            ),
            263 => 
            array (
                'id' => '3264',
                'nome' => 'Itacuruba',
                'estado_id' => '16',
            ),
            264 => 
            array (
                'id' => '3265',
                'nome' => 'Itaíba',
                'estado_id' => '16',
            ),
            265 => 
            array (
                'id' => '3266',
                'nome' => 'Itambé',
                'estado_id' => '16',
            ),
            266 => 
            array (
                'id' => '3267',
                'nome' => 'Itapetim',
                'estado_id' => '16',
            ),
            267 => 
            array (
                'id' => '3268',
                'nome' => 'Itapissuma',
                'estado_id' => '16',
            ),
            268 => 
            array (
                'id' => '3269',
                'nome' => 'Itaquitinga',
                'estado_id' => '16',
            ),
            269 => 
            array (
                'id' => '3270',
                'nome' => 'Jaboatão dos Guararapes',
                'estado_id' => '16',
            ),
            270 => 
            array (
                'id' => '3271',
                'nome' => 'Jaqueira',
                'estado_id' => '16',
            ),
            271 => 
            array (
                'id' => '3272',
                'nome' => 'Jataúba',
                'estado_id' => '16',
            ),
            272 => 
            array (
                'id' => '3273',
                'nome' => 'Jatobá',
                'estado_id' => '16',
            ),
            273 => 
            array (
                'id' => '3274',
                'nome' => 'João Alfredo',
                'estado_id' => '16',
            ),
            274 => 
            array (
                'id' => '3275',
                'nome' => 'Joaquim Nabuco',
                'estado_id' => '16',
            ),
            275 => 
            array (
                'id' => '3276',
                'nome' => 'Jucati',
                'estado_id' => '16',
            ),
            276 => 
            array (
                'id' => '3277',
                'nome' => 'Jupi',
                'estado_id' => '16',
            ),
            277 => 
            array (
                'id' => '3278',
                'nome' => 'Jurema',
                'estado_id' => '16',
            ),
            278 => 
            array (
                'id' => '3279',
                'nome' => 'Lagoa do Carro',
                'estado_id' => '16',
            ),
            279 => 
            array (
                'id' => '3280',
                'nome' => 'Lagoa do Itaenga',
                'estado_id' => '16',
            ),
            280 => 
            array (
                'id' => '3281',
                'nome' => 'Lagoa do Ouro',
                'estado_id' => '16',
            ),
            281 => 
            array (
                'id' => '3282',
                'nome' => 'Lagoa dos Gatos',
                'estado_id' => '16',
            ),
            282 => 
            array (
                'id' => '3283',
                'nome' => 'Lagoa Grande',
                'estado_id' => '16',
            ),
            283 => 
            array (
                'id' => '3284',
                'nome' => 'Lajedo',
                'estado_id' => '16',
            ),
            284 => 
            array (
                'id' => '3285',
                'nome' => 'Limoeiro',
                'estado_id' => '16',
            ),
            285 => 
            array (
                'id' => '3286',
                'nome' => 'Macaparana',
                'estado_id' => '16',
            ),
            286 => 
            array (
                'id' => '3287',
                'nome' => 'Machados',
                'estado_id' => '16',
            ),
            287 => 
            array (
                'id' => '3288',
                'nome' => 'Manari',
                'estado_id' => '16',
            ),
            288 => 
            array (
                'id' => '3289',
                'nome' => 'Maraial',
                'estado_id' => '16',
            ),
            289 => 
            array (
                'id' => '3290',
                'nome' => 'Mirandiba',
                'estado_id' => '16',
            ),
            290 => 
            array (
                'id' => '3291',
                'nome' => 'Moreilândia',
                'estado_id' => '16',
            ),
            291 => 
            array (
                'id' => '3292',
                'nome' => 'Moreno',
                'estado_id' => '16',
            ),
            292 => 
            array (
                'id' => '3293',
                'nome' => 'Nazaré da Mata',
                'estado_id' => '16',
            ),
            293 => 
            array (
                'id' => '3294',
                'nome' => 'Olinda',
                'estado_id' => '16',
            ),
            294 => 
            array (
                'id' => '3295',
                'nome' => 'Orobó',
                'estado_id' => '16',
            ),
            295 => 
            array (
                'id' => '3296',
                'nome' => 'Orocó',
                'estado_id' => '16',
            ),
            296 => 
            array (
                'id' => '3297',
                'nome' => 'Ouricuri',
                'estado_id' => '16',
            ),
            297 => 
            array (
                'id' => '3298',
                'nome' => 'Palmares',
                'estado_id' => '16',
            ),
            298 => 
            array (
                'id' => '3299',
                'nome' => 'Palmeirina',
                'estado_id' => '16',
            ),
            299 => 
            array (
                'id' => '3300',
                'nome' => 'Panelas',
                'estado_id' => '16',
            ),
            300 => 
            array (
                'id' => '3301',
                'nome' => 'Paranatama',
                'estado_id' => '16',
            ),
            301 => 
            array (
                'id' => '3302',
                'nome' => 'Parnamirim',
                'estado_id' => '16',
            ),
            302 => 
            array (
                'id' => '3303',
                'nome' => 'Passira',
                'estado_id' => '16',
            ),
            303 => 
            array (
                'id' => '3304',
                'nome' => 'Paudalho',
                'estado_id' => '16',
            ),
            304 => 
            array (
                'id' => '3305',
                'nome' => 'Paulista',
                'estado_id' => '16',
            ),
            305 => 
            array (
                'id' => '3306',
                'nome' => 'Pedra',
                'estado_id' => '16',
            ),
            306 => 
            array (
                'id' => '3307',
                'nome' => 'Pesqueira',
                'estado_id' => '16',
            ),
            307 => 
            array (
                'id' => '3308',
                'nome' => 'Petrolândia',
                'estado_id' => '16',
            ),
            308 => 
            array (
                'id' => '3309',
                'nome' => 'Petrolina',
                'estado_id' => '16',
            ),
            309 => 
            array (
                'id' => '3310',
                'nome' => 'Poção',
                'estado_id' => '16',
            ),
            310 => 
            array (
                'id' => '3311',
                'nome' => 'Pombos',
                'estado_id' => '16',
            ),
            311 => 
            array (
                'id' => '3312',
                'nome' => 'Primavera',
                'estado_id' => '16',
            ),
            312 => 
            array (
                'id' => '3313',
                'nome' => 'Quipapá',
                'estado_id' => '16',
            ),
            313 => 
            array (
                'id' => '3314',
                'nome' => 'Quixaba',
                'estado_id' => '16',
            ),
            314 => 
            array (
                'id' => '3315',
                'nome' => 'Recife',
                'estado_id' => '16',
            ),
            315 => 
            array (
                'id' => '3316',
                'nome' => 'Riacho das Almas',
                'estado_id' => '16',
            ),
            316 => 
            array (
                'id' => '3317',
                'nome' => 'Ribeirão',
                'estado_id' => '16',
            ),
            317 => 
            array (
                'id' => '3318',
                'nome' => 'Rio Formoso',
                'estado_id' => '16',
            ),
            318 => 
            array (
                'id' => '3319',
                'nome' => 'Sairé',
                'estado_id' => '16',
            ),
            319 => 
            array (
                'id' => '3320',
                'nome' => 'Salgadinho',
                'estado_id' => '16',
            ),
            320 => 
            array (
                'id' => '3321',
                'nome' => 'Salgueiro',
                'estado_id' => '16',
            ),
            321 => 
            array (
                'id' => '3322',
                'nome' => 'Saloá',
                'estado_id' => '16',
            ),
            322 => 
            array (
                'id' => '3323',
                'nome' => 'Sanharó',
                'estado_id' => '16',
            ),
            323 => 
            array (
                'id' => '3324',
                'nome' => 'Santa Cruz',
                'estado_id' => '16',
            ),
            324 => 
            array (
                'id' => '3325',
                'nome' => 'Santa Cruz da Baixa Verde',
                'estado_id' => '16',
            ),
            325 => 
            array (
                'id' => '3326',
                'nome' => 'Santa Cruz do Capibaribe',
                'estado_id' => '16',
            ),
            326 => 
            array (
                'id' => '3327',
                'nome' => 'Santa Filomena',
                'estado_id' => '16',
            ),
            327 => 
            array (
                'id' => '3328',
                'nome' => 'Santa Maria da Boa Vista',
                'estado_id' => '16',
            ),
            328 => 
            array (
                'id' => '3329',
                'nome' => 'Santa Maria do Cambucá',
                'estado_id' => '16',
            ),
            329 => 
            array (
                'id' => '3330',
                'nome' => 'Santa Terezinha',
                'estado_id' => '16',
            ),
            330 => 
            array (
                'id' => '3331',
                'nome' => 'São Benedito do Sul',
                'estado_id' => '16',
            ),
            331 => 
            array (
                'id' => '3332',
                'nome' => 'São Bento do Una',
                'estado_id' => '16',
            ),
            332 => 
            array (
                'id' => '3333',
                'nome' => 'São Caitano',
                'estado_id' => '16',
            ),
            333 => 
            array (
                'id' => '3334',
                'nome' => 'São João',
                'estado_id' => '16',
            ),
            334 => 
            array (
                'id' => '3335',
                'nome' => 'São Joaquim do Monte',
                'estado_id' => '16',
            ),
            335 => 
            array (
                'id' => '3336',
                'nome' => 'São José da Coroa Grande',
                'estado_id' => '16',
            ),
            336 => 
            array (
                'id' => '3337',
                'nome' => 'São José do Belmonte',
                'estado_id' => '16',
            ),
            337 => 
            array (
                'id' => '3338',
                'nome' => 'São José do Egito',
                'estado_id' => '16',
            ),
            338 => 
            array (
                'id' => '3339',
                'nome' => 'São Lourenço da Mata',
                'estado_id' => '16',
            ),
            339 => 
            array (
                'id' => '3340',
                'nome' => 'São Vicente Ferrer',
                'estado_id' => '16',
            ),
            340 => 
            array (
                'id' => '3341',
                'nome' => 'Serra Talhada',
                'estado_id' => '16',
            ),
            341 => 
            array (
                'id' => '3342',
                'nome' => 'Serrita',
                'estado_id' => '16',
            ),
            342 => 
            array (
                'id' => '3343',
                'nome' => 'Sertânia',
                'estado_id' => '16',
            ),
            343 => 
            array (
                'id' => '3344',
                'nome' => 'Sirinhaém',
                'estado_id' => '16',
            ),
            344 => 
            array (
                'id' => '3345',
                'nome' => 'Solidão',
                'estado_id' => '16',
            ),
            345 => 
            array (
                'id' => '3346',
                'nome' => 'Surubim',
                'estado_id' => '16',
            ),
            346 => 
            array (
                'id' => '3347',
                'nome' => 'Tabira',
                'estado_id' => '16',
            ),
            347 => 
            array (
                'id' => '3348',
                'nome' => 'Tacaimbó',
                'estado_id' => '16',
            ),
            348 => 
            array (
                'id' => '3349',
                'nome' => 'Tacaratu',
                'estado_id' => '16',
            ),
            349 => 
            array (
                'id' => '3350',
                'nome' => 'Tamandaré',
                'estado_id' => '16',
            ),
            350 => 
            array (
                'id' => '3351',
                'nome' => 'Taquaritinga do Norte',
                'estado_id' => '16',
            ),
            351 => 
            array (
                'id' => '3352',
                'nome' => 'Terezinha',
                'estado_id' => '16',
            ),
            352 => 
            array (
                'id' => '3353',
                'nome' => 'Terra Nova',
                'estado_id' => '16',
            ),
            353 => 
            array (
                'id' => '3354',
                'nome' => 'Timbaúba',
                'estado_id' => '16',
            ),
            354 => 
            array (
                'id' => '3355',
                'nome' => 'Toritama',
                'estado_id' => '16',
            ),
            355 => 
            array (
                'id' => '3356',
                'nome' => 'Tracunhaém',
                'estado_id' => '16',
            ),
            356 => 
            array (
                'id' => '3357',
                'nome' => 'Trindade',
                'estado_id' => '16',
            ),
            357 => 
            array (
                'id' => '3358',
                'nome' => 'Triunfo',
                'estado_id' => '16',
            ),
            358 => 
            array (
                'id' => '3359',
                'nome' => 'Tupanatinga',
                'estado_id' => '16',
            ),
            359 => 
            array (
                'id' => '3360',
                'nome' => 'Tuparetama',
                'estado_id' => '16',
            ),
            360 => 
            array (
                'id' => '3361',
                'nome' => 'Venturosa',
                'estado_id' => '16',
            ),
            361 => 
            array (
                'id' => '3362',
                'nome' => 'Verdejante',
                'estado_id' => '16',
            ),
            362 => 
            array (
                'id' => '3363',
                'nome' => 'Vertente do Lério',
                'estado_id' => '16',
            ),
            363 => 
            array (
                'id' => '3364',
                'nome' => 'Vertentes',
                'estado_id' => '16',
            ),
            364 => 
            array (
                'id' => '3365',
                'nome' => 'Vicência',
                'estado_id' => '16',
            ),
            365 => 
            array (
                'id' => '3366',
                'nome' => 'Vitória de Santo Antão',
                'estado_id' => '16',
            ),
            366 => 
            array (
                'id' => '3367',
                'nome' => 'Xexéu',
                'estado_id' => '16',
            ),
            367 => 
            array (
                'id' => '3368',
                'nome' => 'Acauã',
                'estado_id' => '17',
            ),
            368 => 
            array (
                'id' => '3369',
                'nome' => 'Agricolândia',
                'estado_id' => '17',
            ),
            369 => 
            array (
                'id' => '3370',
                'nome' => 'Água Branca',
                'estado_id' => '17',
            ),
            370 => 
            array (
                'id' => '3371',
                'nome' => 'Alagoinha do Piauí',
                'estado_id' => '17',
            ),
            371 => 
            array (
                'id' => '3372',
                'nome' => 'Alegrete do Piauí',
                'estado_id' => '17',
            ),
            372 => 
            array (
                'id' => '3373',
                'nome' => 'Alto Longá',
                'estado_id' => '17',
            ),
            373 => 
            array (
                'id' => '3374',
                'nome' => 'Altos',
                'estado_id' => '17',
            ),
            374 => 
            array (
                'id' => '3375',
                'nome' => 'Alvorada do Gurguéia',
                'estado_id' => '17',
            ),
            375 => 
            array (
                'id' => '3376',
                'nome' => 'Amarante',
                'estado_id' => '17',
            ),
            376 => 
            array (
                'id' => '3377',
                'nome' => 'Angical do Piauí',
                'estado_id' => '17',
            ),
            377 => 
            array (
                'id' => '3378',
                'nome' => 'Anísio de Abreu',
                'estado_id' => '17',
            ),
            378 => 
            array (
                'id' => '3379',
                'nome' => 'Antônio Almeida',
                'estado_id' => '17',
            ),
            379 => 
            array (
                'id' => '3380',
                'nome' => 'Aroazes',
                'estado_id' => '17',
            ),
            380 => 
            array (
                'id' => '3381',
                'nome' => 'Aroeiras do Itaim',
                'estado_id' => '17',
            ),
            381 => 
            array (
                'id' => '3382',
                'nome' => 'Arraial',
                'estado_id' => '17',
            ),
            382 => 
            array (
                'id' => '3383',
                'nome' => 'Assunção do Piauí',
                'estado_id' => '17',
            ),
            383 => 
            array (
                'id' => '3384',
                'nome' => 'Avelino Lopes',
                'estado_id' => '17',
            ),
            384 => 
            array (
                'id' => '3385',
                'nome' => 'Baixa Grande do Ribeiro',
                'estado_id' => '17',
            ),
            385 => 
            array (
                'id' => '3386',
                'nome' => 'Barra d`Alcântara',
                'estado_id' => '17',
            ),
            386 => 
            array (
                'id' => '3387',
                'nome' => 'Barras',
                'estado_id' => '17',
            ),
            387 => 
            array (
                'id' => '3388',
                'nome' => 'Barreiras do Piauí',
                'estado_id' => '17',
            ),
            388 => 
            array (
                'id' => '3389',
                'nome' => 'Barro Duro',
                'estado_id' => '17',
            ),
            389 => 
            array (
                'id' => '3390',
                'nome' => 'Batalha',
                'estado_id' => '17',
            ),
            390 => 
            array (
                'id' => '3391',
                'nome' => 'Bela Vista do Piauí',
                'estado_id' => '17',
            ),
            391 => 
            array (
                'id' => '3392',
                'nome' => 'Belém do Piauí',
                'estado_id' => '17',
            ),
            392 => 
            array (
                'id' => '3393',
                'nome' => 'Beneditinos',
                'estado_id' => '17',
            ),
            393 => 
            array (
                'id' => '3394',
                'nome' => 'Bertolínia',
                'estado_id' => '17',
            ),
            394 => 
            array (
                'id' => '3395',
                'nome' => 'Betânia do Piauí',
                'estado_id' => '17',
            ),
            395 => 
            array (
                'id' => '3396',
                'nome' => 'Boa Hora',
                'estado_id' => '17',
            ),
            396 => 
            array (
                'id' => '3397',
                'nome' => 'Bocaina',
                'estado_id' => '17',
            ),
            397 => 
            array (
                'id' => '3398',
                'nome' => 'Bom Jesus',
                'estado_id' => '17',
            ),
            398 => 
            array (
                'id' => '3399',
                'nome' => 'Bom Princípio do Piauí',
                'estado_id' => '17',
            ),
            399 => 
            array (
                'id' => '3400',
                'nome' => 'Bonfim do Piauí',
                'estado_id' => '17',
            ),
            400 => 
            array (
                'id' => '3401',
                'nome' => 'Boqueirão do Piauí',
                'estado_id' => '17',
            ),
            401 => 
            array (
                'id' => '3402',
                'nome' => 'Brasileira',
                'estado_id' => '17',
            ),
            402 => 
            array (
                'id' => '3403',
                'nome' => 'Brejo do Piauí',
                'estado_id' => '17',
            ),
            403 => 
            array (
                'id' => '3404',
                'nome' => 'Buriti dos Lopes',
                'estado_id' => '17',
            ),
            404 => 
            array (
                'id' => '3405',
                'nome' => 'Buriti dos Montes',
                'estado_id' => '17',
            ),
            405 => 
            array (
                'id' => '3406',
                'nome' => 'Cabeceiras do Piauí',
                'estado_id' => '17',
            ),
            406 => 
            array (
                'id' => '3407',
                'nome' => 'Cajazeiras do Piauí',
                'estado_id' => '17',
            ),
            407 => 
            array (
                'id' => '3408',
                'nome' => 'Cajueiro da Praia',
                'estado_id' => '17',
            ),
            408 => 
            array (
                'id' => '3409',
                'nome' => 'Caldeirão Grande do Piauí',
                'estado_id' => '17',
            ),
            409 => 
            array (
                'id' => '3410',
                'nome' => 'Campinas do Piauí',
                'estado_id' => '17',
            ),
            410 => 
            array (
                'id' => '3411',
                'nome' => 'Campo Alegre do Fidalgo',
                'estado_id' => '17',
            ),
            411 => 
            array (
                'id' => '3412',
                'nome' => 'Campo Grande do Piauí',
                'estado_id' => '17',
            ),
            412 => 
            array (
                'id' => '3413',
                'nome' => 'Campo Largo do Piauí',
                'estado_id' => '17',
            ),
            413 => 
            array (
                'id' => '3414',
                'nome' => 'Campo Maior',
                'estado_id' => '17',
            ),
            414 => 
            array (
                'id' => '3415',
                'nome' => 'Canavieira',
                'estado_id' => '17',
            ),
            415 => 
            array (
                'id' => '3416',
                'nome' => 'Canto do Buriti',
                'estado_id' => '17',
            ),
            416 => 
            array (
                'id' => '3417',
                'nome' => 'Capitão de Campos',
                'estado_id' => '17',
            ),
            417 => 
            array (
                'id' => '3418',
                'nome' => 'Capitão Gervásio Oliveira',
                'estado_id' => '17',
            ),
            418 => 
            array (
                'id' => '3419',
                'nome' => 'Caracol',
                'estado_id' => '17',
            ),
            419 => 
            array (
                'id' => '3420',
                'nome' => 'Caraúbas do Piauí',
                'estado_id' => '17',
            ),
            420 => 
            array (
                'id' => '3421',
                'nome' => 'Caridade do Piauí',
                'estado_id' => '17',
            ),
            421 => 
            array (
                'id' => '3422',
                'nome' => 'Castelo do Piauí',
                'estado_id' => '17',
            ),
            422 => 
            array (
                'id' => '3423',
                'nome' => 'Caxingó',
                'estado_id' => '17',
            ),
            423 => 
            array (
                'id' => '3424',
                'nome' => 'Cocal',
                'estado_id' => '17',
            ),
            424 => 
            array (
                'id' => '3425',
                'nome' => 'Cocal de Telha',
                'estado_id' => '17',
            ),
            425 => 
            array (
                'id' => '3426',
                'nome' => 'Cocal dos Alves',
                'estado_id' => '17',
            ),
            426 => 
            array (
                'id' => '3427',
                'nome' => 'Coivaras',
                'estado_id' => '17',
            ),
            427 => 
            array (
                'id' => '3428',
                'nome' => 'Colônia do Gurguéia',
                'estado_id' => '17',
            ),
            428 => 
            array (
                'id' => '3429',
                'nome' => 'Colônia do Piauí',
                'estado_id' => '17',
            ),
            429 => 
            array (
                'id' => '3430',
                'nome' => 'Conceição do Canindé',
                'estado_id' => '17',
            ),
            430 => 
            array (
                'id' => '3431',
                'nome' => 'Coronel José Dias',
                'estado_id' => '17',
            ),
            431 => 
            array (
                'id' => '3432',
                'nome' => 'Corrente',
                'estado_id' => '17',
            ),
            432 => 
            array (
                'id' => '3433',
                'nome' => 'Cristalândia do Piauí',
                'estado_id' => '17',
            ),
            433 => 
            array (
                'id' => '3434',
                'nome' => 'Cristino Castro',
                'estado_id' => '17',
            ),
            434 => 
            array (
                'id' => '3435',
                'nome' => 'Curimatá',
                'estado_id' => '17',
            ),
            435 => 
            array (
                'id' => '3436',
                'nome' => 'Currais',
                'estado_id' => '17',
            ),
            436 => 
            array (
                'id' => '3437',
                'nome' => 'Curral Novo do Piauí',
                'estado_id' => '17',
            ),
            437 => 
            array (
                'id' => '3438',
                'nome' => 'Curralinhos',
                'estado_id' => '17',
            ),
            438 => 
            array (
                'id' => '3439',
                'nome' => 'Demerval Lobão',
                'estado_id' => '17',
            ),
            439 => 
            array (
                'id' => '3440',
                'nome' => 'Dirceu Arcoverde',
                'estado_id' => '17',
            ),
            440 => 
            array (
                'id' => '3441',
                'nome' => 'Dom Expedito Lopes',
                'estado_id' => '17',
            ),
            441 => 
            array (
                'id' => '3442',
                'nome' => 'Dom Inocêncio',
                'estado_id' => '17',
            ),
            442 => 
            array (
                'id' => '3443',
                'nome' => 'Domingos Mourão',
                'estado_id' => '17',
            ),
            443 => 
            array (
                'id' => '3444',
                'nome' => 'Elesbão Veloso',
                'estado_id' => '17',
            ),
            444 => 
            array (
                'id' => '3445',
                'nome' => 'Eliseu Martins',
                'estado_id' => '17',
            ),
            445 => 
            array (
                'id' => '3446',
                'nome' => 'Esperantina',
                'estado_id' => '17',
            ),
            446 => 
            array (
                'id' => '3447',
                'nome' => 'Fartura do Piauí',
                'estado_id' => '17',
            ),
            447 => 
            array (
                'id' => '3448',
                'nome' => 'Flores do Piauí',
                'estado_id' => '17',
            ),
            448 => 
            array (
                'id' => '3449',
                'nome' => 'Floresta do Piauí',
                'estado_id' => '17',
            ),
            449 => 
            array (
                'id' => '3450',
                'nome' => 'Floriano',
                'estado_id' => '17',
            ),
            450 => 
            array (
                'id' => '3451',
                'nome' => 'Francinópolis',
                'estado_id' => '17',
            ),
            451 => 
            array (
                'id' => '3452',
                'nome' => 'Francisco Ayres',
                'estado_id' => '17',
            ),
            452 => 
            array (
                'id' => '3453',
                'nome' => 'Francisco Macedo',
                'estado_id' => '17',
            ),
            453 => 
            array (
                'id' => '3454',
                'nome' => 'Francisco Santos',
                'estado_id' => '17',
            ),
            454 => 
            array (
                'id' => '3455',
                'nome' => 'Fronteiras',
                'estado_id' => '17',
            ),
            455 => 
            array (
                'id' => '3456',
                'nome' => 'Geminiano',
                'estado_id' => '17',
            ),
            456 => 
            array (
                'id' => '3457',
                'nome' => 'Gilbués',
                'estado_id' => '17',
            ),
            457 => 
            array (
                'id' => '3458',
                'nome' => 'Guadalupe',
                'estado_id' => '17',
            ),
            458 => 
            array (
                'id' => '3459',
                'nome' => 'Guaribas',
                'estado_id' => '17',
            ),
            459 => 
            array (
                'id' => '3460',
                'nome' => 'Hugo Napoleão',
                'estado_id' => '17',
            ),
            460 => 
            array (
                'id' => '3461',
                'nome' => 'Ilha Grande',
                'estado_id' => '17',
            ),
            461 => 
            array (
                'id' => '3462',
                'nome' => 'Inhuma',
                'estado_id' => '17',
            ),
            462 => 
            array (
                'id' => '3463',
                'nome' => 'Ipiranga do Piauí',
                'estado_id' => '17',
            ),
            463 => 
            array (
                'id' => '3464',
                'nome' => 'Isaías Coelho',
                'estado_id' => '17',
            ),
            464 => 
            array (
                'id' => '3465',
                'nome' => 'Itainópolis',
                'estado_id' => '17',
            ),
            465 => 
            array (
                'id' => '3466',
                'nome' => 'Itaueira',
                'estado_id' => '17',
            ),
            466 => 
            array (
                'id' => '3467',
                'nome' => 'Jacobina do Piauí',
                'estado_id' => '17',
            ),
            467 => 
            array (
                'id' => '3468',
                'nome' => 'Jaicós',
                'estado_id' => '17',
            ),
            468 => 
            array (
                'id' => '3469',
                'nome' => 'Jardim do Mulato',
                'estado_id' => '17',
            ),
            469 => 
            array (
                'id' => '3470',
                'nome' => 'Jatobá do Piauí',
                'estado_id' => '17',
            ),
            470 => 
            array (
                'id' => '3471',
                'nome' => 'Jerumenha',
                'estado_id' => '17',
            ),
            471 => 
            array (
                'id' => '3472',
                'nome' => 'João Costa',
                'estado_id' => '17',
            ),
            472 => 
            array (
                'id' => '3473',
                'nome' => 'Joaquim Pires',
                'estado_id' => '17',
            ),
            473 => 
            array (
                'id' => '3474',
                'nome' => 'Joca Marques',
                'estado_id' => '17',
            ),
            474 => 
            array (
                'id' => '3475',
                'nome' => 'José de Freitas',
                'estado_id' => '17',
            ),
            475 => 
            array (
                'id' => '3476',
                'nome' => 'Juazeiro do Piauí',
                'estado_id' => '17',
            ),
            476 => 
            array (
                'id' => '3477',
                'nome' => 'Júlio Borges',
                'estado_id' => '17',
            ),
            477 => 
            array (
                'id' => '3478',
                'nome' => 'Jurema',
                'estado_id' => '17',
            ),
            478 => 
            array (
                'id' => '3479',
                'nome' => 'Lagoa Alegre',
                'estado_id' => '17',
            ),
            479 => 
            array (
                'id' => '3480',
                'nome' => 'Lagoa de São Francisco',
                'estado_id' => '17',
            ),
            480 => 
            array (
                'id' => '3481',
                'nome' => 'Lagoa do Barro do Piauí',
                'estado_id' => '17',
            ),
            481 => 
            array (
                'id' => '3482',
                'nome' => 'Lagoa do Piauí',
                'estado_id' => '17',
            ),
            482 => 
            array (
                'id' => '3483',
                'nome' => 'Lagoa do Sítio',
                'estado_id' => '17',
            ),
            483 => 
            array (
                'id' => '3484',
                'nome' => 'Lagoinha do Piauí',
                'estado_id' => '17',
            ),
            484 => 
            array (
                'id' => '3485',
                'nome' => 'Landri Sales',
                'estado_id' => '17',
            ),
            485 => 
            array (
                'id' => '3486',
                'nome' => 'Luís Correia',
                'estado_id' => '17',
            ),
            486 => 
            array (
                'id' => '3487',
                'nome' => 'Luzilândia',
                'estado_id' => '17',
            ),
            487 => 
            array (
                'id' => '3488',
                'nome' => 'Madeiro',
                'estado_id' => '17',
            ),
            488 => 
            array (
                'id' => '3489',
                'nome' => 'Manoel Emídio',
                'estado_id' => '17',
            ),
            489 => 
            array (
                'id' => '3490',
                'nome' => 'Marcolândia',
                'estado_id' => '17',
            ),
            490 => 
            array (
                'id' => '3491',
                'nome' => 'Marcos Parente',
                'estado_id' => '17',
            ),
            491 => 
            array (
                'id' => '3492',
                'nome' => 'Massapê do Piauí',
                'estado_id' => '17',
            ),
            492 => 
            array (
                'id' => '3493',
                'nome' => 'Matias Olímpio',
                'estado_id' => '17',
            ),
            493 => 
            array (
                'id' => '3494',
                'nome' => 'Miguel Alves',
                'estado_id' => '17',
            ),
            494 => 
            array (
                'id' => '3495',
                'nome' => 'Miguel Leão',
                'estado_id' => '17',
            ),
            495 => 
            array (
                'id' => '3496',
                'nome' => 'Milton Brandão',
                'estado_id' => '17',
            ),
            496 => 
            array (
                'id' => '3497',
                'nome' => 'Monsenhor Gil',
                'estado_id' => '17',
            ),
            497 => 
            array (
                'id' => '3498',
                'nome' => 'Monsenhor Hipólito',
                'estado_id' => '17',
            ),
            498 => 
            array (
                'id' => '3499',
                'nome' => 'Monte Alegre do Piauí',
                'estado_id' => '17',
            ),
            499 => 
            array (
                'id' => '3500',
                'nome' => 'Morro Cabeça no Tempo',
                'estado_id' => '17',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '3501',
                'nome' => 'Morro do Chapéu do Piauí',
                'estado_id' => '17',
            ),
            1 => 
            array (
                'id' => '3502',
                'nome' => 'Murici dos Portelas',
                'estado_id' => '17',
            ),
            2 => 
            array (
                'id' => '3503',
                'nome' => 'Nazaré do Piauí',
                'estado_id' => '17',
            ),
            3 => 
            array (
                'id' => '3504',
                'nome' => 'Nossa Senhora de Nazaré',
                'estado_id' => '17',
            ),
            4 => 
            array (
                'id' => '3505',
                'nome' => 'Nossa Senhora dos Remédios',
                'estado_id' => '17',
            ),
            5 => 
            array (
                'id' => '3506',
                'nome' => 'Nova Santa Rita',
                'estado_id' => '17',
            ),
            6 => 
            array (
                'id' => '3507',
                'nome' => 'Novo Oriente do Piauí',
                'estado_id' => '17',
            ),
            7 => 
            array (
                'id' => '3508',
                'nome' => 'Novo Santo Antônio',
                'estado_id' => '17',
            ),
            8 => 
            array (
                'id' => '3509',
                'nome' => 'Oeiras',
                'estado_id' => '17',
            ),
            9 => 
            array (
                'id' => '3510',
                'nome' => 'Olho d`Água do Piauí',
                'estado_id' => '17',
            ),
            10 => 
            array (
                'id' => '3511',
                'nome' => 'Padre Marcos',
                'estado_id' => '17',
            ),
            11 => 
            array (
                'id' => '3512',
                'nome' => 'Paes Landim',
                'estado_id' => '17',
            ),
            12 => 
            array (
                'id' => '3513',
                'nome' => 'Pajeú do Piauí',
                'estado_id' => '17',
            ),
            13 => 
            array (
                'id' => '3514',
                'nome' => 'Palmeira do Piauí',
                'estado_id' => '17',
            ),
            14 => 
            array (
                'id' => '3515',
                'nome' => 'Palmeirais',
                'estado_id' => '17',
            ),
            15 => 
            array (
                'id' => '3516',
                'nome' => 'Paquetá',
                'estado_id' => '17',
            ),
            16 => 
            array (
                'id' => '3517',
                'nome' => 'Parnaguá',
                'estado_id' => '17',
            ),
            17 => 
            array (
                'id' => '3518',
                'nome' => 'Parnaíba',
                'estado_id' => '17',
            ),
            18 => 
            array (
                'id' => '3519',
                'nome' => 'Passagem Franca do Piauí',
                'estado_id' => '17',
            ),
            19 => 
            array (
                'id' => '3520',
                'nome' => 'Patos do Piauí',
                'estado_id' => '17',
            ),
            20 => 
            array (
                'id' => '3521',
                'nome' => 'Pau d`Arco do Piauí',
                'estado_id' => '17',
            ),
            21 => 
            array (
                'id' => '3522',
                'nome' => 'Paulistana',
                'estado_id' => '17',
            ),
            22 => 
            array (
                'id' => '3523',
                'nome' => 'Pavussu',
                'estado_id' => '17',
            ),
            23 => 
            array (
                'id' => '3524',
                'nome' => 'Pedro II',
                'estado_id' => '17',
            ),
            24 => 
            array (
                'id' => '3525',
                'nome' => 'Pedro Laurentino',
                'estado_id' => '17',
            ),
            25 => 
            array (
                'id' => '3526',
                'nome' => 'Picos',
                'estado_id' => '17',
            ),
            26 => 
            array (
                'id' => '3527',
                'nome' => 'Pimenteiras',
                'estado_id' => '17',
            ),
            27 => 
            array (
                'id' => '3528',
                'nome' => 'Pio IX',
                'estado_id' => '17',
            ),
            28 => 
            array (
                'id' => '3529',
                'nome' => 'Piracuruca',
                'estado_id' => '17',
            ),
            29 => 
            array (
                'id' => '3530',
                'nome' => 'Piripiri',
                'estado_id' => '17',
            ),
            30 => 
            array (
                'id' => '3531',
                'nome' => 'Porto',
                'estado_id' => '17',
            ),
            31 => 
            array (
                'id' => '3532',
                'nome' => 'Porto Alegre do Piauí',
                'estado_id' => '17',
            ),
            32 => 
            array (
                'id' => '3533',
                'nome' => 'Prata do Piauí',
                'estado_id' => '17',
            ),
            33 => 
            array (
                'id' => '3534',
                'nome' => 'Queimada Nova',
                'estado_id' => '17',
            ),
            34 => 
            array (
                'id' => '3535',
                'nome' => 'Redenção do Gurguéia',
                'estado_id' => '17',
            ),
            35 => 
            array (
                'id' => '3536',
                'nome' => 'Regeneração',
                'estado_id' => '17',
            ),
            36 => 
            array (
                'id' => '3537',
                'nome' => 'Riacho Frio',
                'estado_id' => '17',
            ),
            37 => 
            array (
                'id' => '3538',
                'nome' => 'Ribeira do Piauí',
                'estado_id' => '17',
            ),
            38 => 
            array (
                'id' => '3539',
                'nome' => 'Ribeiro Gonçalves',
                'estado_id' => '17',
            ),
            39 => 
            array (
                'id' => '3540',
                'nome' => 'Rio Grande do Piauí',
                'estado_id' => '17',
            ),
            40 => 
            array (
                'id' => '3541',
                'nome' => 'Santa Cruz do Piauí',
                'estado_id' => '17',
            ),
            41 => 
            array (
                'id' => '3542',
                'nome' => 'Santa Cruz dos Milagres',
                'estado_id' => '17',
            ),
            42 => 
            array (
                'id' => '3543',
                'nome' => 'Santa Filomena',
                'estado_id' => '17',
            ),
            43 => 
            array (
                'id' => '3544',
                'nome' => 'Santa Luz',
                'estado_id' => '17',
            ),
            44 => 
            array (
                'id' => '3545',
                'nome' => 'Santa Rosa do Piauí',
                'estado_id' => '17',
            ),
            45 => 
            array (
                'id' => '3546',
                'nome' => 'Santana do Piauí',
                'estado_id' => '17',
            ),
            46 => 
            array (
                'id' => '3547',
                'nome' => 'Santo Antônio de Lisboa',
                'estado_id' => '17',
            ),
            47 => 
            array (
                'id' => '3548',
                'nome' => 'Santo Antônio dos Milagres',
                'estado_id' => '17',
            ),
            48 => 
            array (
                'id' => '3549',
                'nome' => 'Santo Inácio do Piauí',
                'estado_id' => '17',
            ),
            49 => 
            array (
                'id' => '3550',
                'nome' => 'São Braz do Piauí',
                'estado_id' => '17',
            ),
            50 => 
            array (
                'id' => '3551',
                'nome' => 'São Félix do Piauí',
                'estado_id' => '17',
            ),
            51 => 
            array (
                'id' => '3552',
                'nome' => 'São Francisco de Assis do Piauí',
                'estado_id' => '17',
            ),
            52 => 
            array (
                'id' => '3553',
                'nome' => 'São Francisco do Piauí',
                'estado_id' => '17',
            ),
            53 => 
            array (
                'id' => '3554',
                'nome' => 'São Gonçalo do Gurguéia',
                'estado_id' => '17',
            ),
            54 => 
            array (
                'id' => '3555',
                'nome' => 'São Gonçalo do Piauí',
                'estado_id' => '17',
            ),
            55 => 
            array (
                'id' => '3556',
                'nome' => 'São João da Canabrava',
                'estado_id' => '17',
            ),
            56 => 
            array (
                'id' => '3557',
                'nome' => 'São João da Fronteira',
                'estado_id' => '17',
            ),
            57 => 
            array (
                'id' => '3558',
                'nome' => 'São João da Serra',
                'estado_id' => '17',
            ),
            58 => 
            array (
                'id' => '3559',
                'nome' => 'São João da Varjota',
                'estado_id' => '17',
            ),
            59 => 
            array (
                'id' => '3560',
                'nome' => 'São João do Arraial',
                'estado_id' => '17',
            ),
            60 => 
            array (
                'id' => '3561',
                'nome' => 'São João do Piauí',
                'estado_id' => '17',
            ),
            61 => 
            array (
                'id' => '3562',
                'nome' => 'São José do Divino',
                'estado_id' => '17',
            ),
            62 => 
            array (
                'id' => '3563',
                'nome' => 'São José do Peixe',
                'estado_id' => '17',
            ),
            63 => 
            array (
                'id' => '3564',
                'nome' => 'São José do Piauí',
                'estado_id' => '17',
            ),
            64 => 
            array (
                'id' => '3565',
                'nome' => 'São Julião',
                'estado_id' => '17',
            ),
            65 => 
            array (
                'id' => '3566',
                'nome' => 'São Lourenço do Piauí',
                'estado_id' => '17',
            ),
            66 => 
            array (
                'id' => '3567',
                'nome' => 'São Luis do Piauí',
                'estado_id' => '17',
            ),
            67 => 
            array (
                'id' => '3568',
                'nome' => 'São Miguel da Baixa Grande',
                'estado_id' => '17',
            ),
            68 => 
            array (
                'id' => '3569',
                'nome' => 'São Miguel do Fidalgo',
                'estado_id' => '17',
            ),
            69 => 
            array (
                'id' => '3570',
                'nome' => 'São Miguel do Tapuio',
                'estado_id' => '17',
            ),
            70 => 
            array (
                'id' => '3571',
                'nome' => 'São Pedro do Piauí',
                'estado_id' => '17',
            ),
            71 => 
            array (
                'id' => '3572',
                'nome' => 'São Raimundo Nonato',
                'estado_id' => '17',
            ),
            72 => 
            array (
                'id' => '3573',
                'nome' => 'Sebastião Barros',
                'estado_id' => '17',
            ),
            73 => 
            array (
                'id' => '3574',
                'nome' => 'Sebastião Leal',
                'estado_id' => '17',
            ),
            74 => 
            array (
                'id' => '3575',
                'nome' => 'Sigefredo Pacheco',
                'estado_id' => '17',
            ),
            75 => 
            array (
                'id' => '3576',
                'nome' => 'Simões',
                'estado_id' => '17',
            ),
            76 => 
            array (
                'id' => '3577',
                'nome' => 'Simplício Mendes',
                'estado_id' => '17',
            ),
            77 => 
            array (
                'id' => '3578',
                'nome' => 'Socorro do Piauí',
                'estado_id' => '17',
            ),
            78 => 
            array (
                'id' => '3579',
                'nome' => 'Sussuapara',
                'estado_id' => '17',
            ),
            79 => 
            array (
                'id' => '3580',
                'nome' => 'Tamboril do Piauí',
                'estado_id' => '17',
            ),
            80 => 
            array (
                'id' => '3581',
                'nome' => 'Tanque do Piauí',
                'estado_id' => '17',
            ),
            81 => 
            array (
                'id' => '3582',
                'nome' => 'Teresina',
                'estado_id' => '17',
            ),
            82 => 
            array (
                'id' => '3583',
                'nome' => 'União',
                'estado_id' => '17',
            ),
            83 => 
            array (
                'id' => '3584',
                'nome' => 'Uruçuí',
                'estado_id' => '17',
            ),
            84 => 
            array (
                'id' => '3585',
                'nome' => 'Valença do Piauí',
                'estado_id' => '17',
            ),
            85 => 
            array (
                'id' => '3586',
                'nome' => 'Várzea Branca',
                'estado_id' => '17',
            ),
            86 => 
            array (
                'id' => '3587',
                'nome' => 'Várzea Grande',
                'estado_id' => '17',
            ),
            87 => 
            array (
                'id' => '3588',
                'nome' => 'Vera Mendes',
                'estado_id' => '17',
            ),
            88 => 
            array (
                'id' => '3589',
                'nome' => 'Vila Nova do Piauí',
                'estado_id' => '17',
            ),
            89 => 
            array (
                'id' => '3590',
                'nome' => 'Wall Ferraz',
                'estado_id' => '17',
            ),
            90 => 
            array (
                'id' => '3591',
                'nome' => 'Angra dos Reis',
                'estado_id' => '19',
            ),
            91 => 
            array (
                'id' => '3592',
                'nome' => 'Aperibé',
                'estado_id' => '19',
            ),
            92 => 
            array (
                'id' => '3593',
                'nome' => 'Araruama',
                'estado_id' => '19',
            ),
            93 => 
            array (
                'id' => '3594',
                'nome' => 'Areal',
                'estado_id' => '19',
            ),
            94 => 
            array (
                'id' => '3595',
                'nome' => 'Armação dos Búzios',
                'estado_id' => '19',
            ),
            95 => 
            array (
                'id' => '3596',
                'nome' => 'Arraial do Cabo',
                'estado_id' => '19',
            ),
            96 => 
            array (
                'id' => '3597',
                'nome' => 'Barra do Piraí',
                'estado_id' => '19',
            ),
            97 => 
            array (
                'id' => '3598',
                'nome' => 'Barra Mansa',
                'estado_id' => '19',
            ),
            98 => 
            array (
                'id' => '3599',
                'nome' => 'Belford Roxo',
                'estado_id' => '19',
            ),
            99 => 
            array (
                'id' => '3600',
                'nome' => 'Bom Jardim',
                'estado_id' => '19',
            ),
            100 => 
            array (
                'id' => '3601',
                'nome' => 'Bom Jesus do Itabapoana',
                'estado_id' => '19',
            ),
            101 => 
            array (
                'id' => '3602',
                'nome' => 'Cabo Frio',
                'estado_id' => '19',
            ),
            102 => 
            array (
                'id' => '3603',
                'nome' => 'Cachoeiras de Macacu',
                'estado_id' => '19',
            ),
            103 => 
            array (
                'id' => '3604',
                'nome' => 'Cambuci',
                'estado_id' => '19',
            ),
            104 => 
            array (
                'id' => '3605',
                'nome' => 'Campos dos Goytacazes',
                'estado_id' => '19',
            ),
            105 => 
            array (
                'id' => '3606',
                'nome' => 'Cantagalo',
                'estado_id' => '19',
            ),
            106 => 
            array (
                'id' => '3607',
                'nome' => 'Carapebus',
                'estado_id' => '19',
            ),
            107 => 
            array (
                'id' => '3608',
                'nome' => 'Cardoso Moreira',
                'estado_id' => '19',
            ),
            108 => 
            array (
                'id' => '3609',
                'nome' => 'Carmo',
                'estado_id' => '19',
            ),
            109 => 
            array (
                'id' => '3610',
                'nome' => 'Casimiro de Abreu',
                'estado_id' => '19',
            ),
            110 => 
            array (
                'id' => '3611',
                'nome' => 'Comendador Levy Gasparian',
                'estado_id' => '19',
            ),
            111 => 
            array (
                'id' => '3612',
                'nome' => 'Conceição de Macabu',
                'estado_id' => '19',
            ),
            112 => 
            array (
                'id' => '3613',
                'nome' => 'Cordeiro',
                'estado_id' => '19',
            ),
            113 => 
            array (
                'id' => '3614',
                'nome' => 'Duas Barras',
                'estado_id' => '19',
            ),
            114 => 
            array (
                'id' => '3615',
                'nome' => 'Duque de Caxias',
                'estado_id' => '19',
            ),
            115 => 
            array (
                'id' => '3616',
                'nome' => 'Engenheiro Paulo de Frontin',
                'estado_id' => '19',
            ),
            116 => 
            array (
                'id' => '3617',
                'nome' => 'Guapimirim',
                'estado_id' => '19',
            ),
            117 => 
            array (
                'id' => '3618',
                'nome' => 'Iguaba Grande',
                'estado_id' => '19',
            ),
            118 => 
            array (
                'id' => '3619',
                'nome' => 'Itaboraí',
                'estado_id' => '19',
            ),
            119 => 
            array (
                'id' => '3620',
                'nome' => 'Itaguaí',
                'estado_id' => '19',
            ),
            120 => 
            array (
                'id' => '3621',
                'nome' => 'Italva',
                'estado_id' => '19',
            ),
            121 => 
            array (
                'id' => '3622',
                'nome' => 'Itaocara',
                'estado_id' => '19',
            ),
            122 => 
            array (
                'id' => '3623',
                'nome' => 'Itaperuna',
                'estado_id' => '19',
            ),
            123 => 
            array (
                'id' => '3624',
                'nome' => 'Itatiaia',
                'estado_id' => '19',
            ),
            124 => 
            array (
                'id' => '3625',
                'nome' => 'Japeri',
                'estado_id' => '19',
            ),
            125 => 
            array (
                'id' => '3626',
                'nome' => 'Laje do Muriaé',
                'estado_id' => '19',
            ),
            126 => 
            array (
                'id' => '3627',
                'nome' => 'Macaé',
                'estado_id' => '19',
            ),
            127 => 
            array (
                'id' => '3628',
                'nome' => 'Macuco',
                'estado_id' => '19',
            ),
            128 => 
            array (
                'id' => '3629',
                'nome' => 'Magé',
                'estado_id' => '19',
            ),
            129 => 
            array (
                'id' => '3630',
                'nome' => 'Mangaratiba',
                'estado_id' => '19',
            ),
            130 => 
            array (
                'id' => '3631',
                'nome' => 'Maricá',
                'estado_id' => '19',
            ),
            131 => 
            array (
                'id' => '3632',
                'nome' => 'Mendes',
                'estado_id' => '19',
            ),
            132 => 
            array (
                'id' => '3633',
                'nome' => 'Mesquita',
                'estado_id' => '19',
            ),
            133 => 
            array (
                'id' => '3634',
                'nome' => 'Miguel Pereira',
                'estado_id' => '19',
            ),
            134 => 
            array (
                'id' => '3635',
                'nome' => 'Miracema',
                'estado_id' => '19',
            ),
            135 => 
            array (
                'id' => '3636',
                'nome' => 'Natividade',
                'estado_id' => '19',
            ),
            136 => 
            array (
                'id' => '3637',
                'nome' => 'Nilópolis',
                'estado_id' => '19',
            ),
            137 => 
            array (
                'id' => '3638',
                'nome' => 'Niterói',
                'estado_id' => '19',
            ),
            138 => 
            array (
                'id' => '3639',
                'nome' => 'Nova Friburgo',
                'estado_id' => '19',
            ),
            139 => 
            array (
                'id' => '3640',
                'nome' => 'Nova Iguaçu',
                'estado_id' => '19',
            ),
            140 => 
            array (
                'id' => '3641',
                'nome' => 'Paracambi',
                'estado_id' => '19',
            ),
            141 => 
            array (
                'id' => '3642',
                'nome' => 'Paraíba do Sul',
                'estado_id' => '19',
            ),
            142 => 
            array (
                'id' => '3643',
                'nome' => 'Parati',
                'estado_id' => '19',
            ),
            143 => 
            array (
                'id' => '3644',
                'nome' => 'Paty do Alferes',
                'estado_id' => '19',
            ),
            144 => 
            array (
                'id' => '3645',
                'nome' => 'Petrópolis',
                'estado_id' => '19',
            ),
            145 => 
            array (
                'id' => '3646',
                'nome' => 'Pinheiral',
                'estado_id' => '19',
            ),
            146 => 
            array (
                'id' => '3647',
                'nome' => 'Piraí',
                'estado_id' => '19',
            ),
            147 => 
            array (
                'id' => '3648',
                'nome' => 'Porciúncula',
                'estado_id' => '19',
            ),
            148 => 
            array (
                'id' => '3649',
                'nome' => 'Porto Real',
                'estado_id' => '19',
            ),
            149 => 
            array (
                'id' => '3650',
                'nome' => 'Quatis',
                'estado_id' => '19',
            ),
            150 => 
            array (
                'id' => '3651',
                'nome' => 'Queimados',
                'estado_id' => '19',
            ),
            151 => 
            array (
                'id' => '3652',
                'nome' => 'Quissamã',
                'estado_id' => '19',
            ),
            152 => 
            array (
                'id' => '3653',
                'nome' => 'Resende',
                'estado_id' => '19',
            ),
            153 => 
            array (
                'id' => '3654',
                'nome' => 'Rio Bonito',
                'estado_id' => '19',
            ),
            154 => 
            array (
                'id' => '3655',
                'nome' => 'Rio Claro',
                'estado_id' => '19',
            ),
            155 => 
            array (
                'id' => '3656',
                'nome' => 'Rio das Flores',
                'estado_id' => '19',
            ),
            156 => 
            array (
                'id' => '3657',
                'nome' => 'Rio das Ostras',
                'estado_id' => '19',
            ),
            157 => 
            array (
                'id' => '3658',
                'nome' => 'Rio de Janeiro',
                'estado_id' => '19',
            ),
            158 => 
            array (
                'id' => '3659',
                'nome' => 'Santa Maria Madalena',
                'estado_id' => '19',
            ),
            159 => 
            array (
                'id' => '3660',
                'nome' => 'Santo Antônio de Pádua',
                'estado_id' => '19',
            ),
            160 => 
            array (
                'id' => '3661',
                'nome' => 'São Fidélis',
                'estado_id' => '19',
            ),
            161 => 
            array (
                'id' => '3662',
                'nome' => 'São Francisco de Itabapoana',
                'estado_id' => '19',
            ),
            162 => 
            array (
                'id' => '3663',
                'nome' => 'São Gonçalo',
                'estado_id' => '19',
            ),
            163 => 
            array (
                'id' => '3664',
                'nome' => 'São João da Barra',
                'estado_id' => '19',
            ),
            164 => 
            array (
                'id' => '3665',
                'nome' => 'São João de Meriti',
                'estado_id' => '19',
            ),
            165 => 
            array (
                'id' => '3666',
                'nome' => 'São José de Ubá',
                'estado_id' => '19',
            ),
            166 => 
            array (
                'id' => '3667',
                'nome' => 'São José do Vale do Rio Pret',
                'estado_id' => '19',
            ),
            167 => 
            array (
                'id' => '3668',
                'nome' => 'São Pedro da Aldeia',
                'estado_id' => '19',
            ),
            168 => 
            array (
                'id' => '3669',
                'nome' => 'São Sebastião do Alto',
                'estado_id' => '19',
            ),
            169 => 
            array (
                'id' => '3670',
                'nome' => 'Sapucaia',
                'estado_id' => '19',
            ),
            170 => 
            array (
                'id' => '3671',
                'nome' => 'Saquarema',
                'estado_id' => '19',
            ),
            171 => 
            array (
                'id' => '3672',
                'nome' => 'Seropédica',
                'estado_id' => '19',
            ),
            172 => 
            array (
                'id' => '3673',
                'nome' => 'Silva Jardim',
                'estado_id' => '19',
            ),
            173 => 
            array (
                'id' => '3674',
                'nome' => 'Sumidouro',
                'estado_id' => '19',
            ),
            174 => 
            array (
                'id' => '3675',
                'nome' => 'Tanguá',
                'estado_id' => '19',
            ),
            175 => 
            array (
                'id' => '3676',
                'nome' => 'Teresópolis',
                'estado_id' => '19',
            ),
            176 => 
            array (
                'id' => '3677',
                'nome' => 'Trajano de Morais',
                'estado_id' => '19',
            ),
            177 => 
            array (
                'id' => '3678',
                'nome' => 'Três Rios',
                'estado_id' => '19',
            ),
            178 => 
            array (
                'id' => '3679',
                'nome' => 'Valença',
                'estado_id' => '19',
            ),
            179 => 
            array (
                'id' => '3680',
                'nome' => 'Varre-Sai',
                'estado_id' => '19',
            ),
            180 => 
            array (
                'id' => '3681',
                'nome' => 'Vassouras',
                'estado_id' => '19',
            ),
            181 => 
            array (
                'id' => '3682',
                'nome' => 'Volta Redonda',
                'estado_id' => '19',
            ),
            182 => 
            array (
                'id' => '3683',
                'nome' => 'Acari',
                'estado_id' => '20',
            ),
            183 => 
            array (
                'id' => '3684',
                'nome' => 'Açu',
                'estado_id' => '20',
            ),
            184 => 
            array (
                'id' => '3685',
                'nome' => 'Afonso Bezerra',
                'estado_id' => '20',
            ),
            185 => 
            array (
                'id' => '3686',
                'nome' => 'Água Nova',
                'estado_id' => '20',
            ),
            186 => 
            array (
                'id' => '3687',
                'nome' => 'Alexandria',
                'estado_id' => '20',
            ),
            187 => 
            array (
                'id' => '3688',
                'nome' => 'Almino Afonso',
                'estado_id' => '20',
            ),
            188 => 
            array (
                'id' => '3689',
                'nome' => 'Alto do Rodrigues',
                'estado_id' => '20',
            ),
            189 => 
            array (
                'id' => '3690',
                'nome' => 'Angicos',
                'estado_id' => '20',
            ),
            190 => 
            array (
                'id' => '3691',
                'nome' => 'Antônio Martins',
                'estado_id' => '20',
            ),
            191 => 
            array (
                'id' => '3692',
                'nome' => 'Apodi',
                'estado_id' => '20',
            ),
            192 => 
            array (
                'id' => '3693',
                'nome' => 'Areia Branca',
                'estado_id' => '20',
            ),
            193 => 
            array (
                'id' => '3694',
                'nome' => 'Arês',
                'estado_id' => '20',
            ),
            194 => 
            array (
                'id' => '3695',
                'nome' => 'Augusto Severo',
                'estado_id' => '20',
            ),
            195 => 
            array (
                'id' => '3696',
                'nome' => 'Baía Formosa',
                'estado_id' => '20',
            ),
            196 => 
            array (
                'id' => '3697',
                'nome' => 'Baraúna',
                'estado_id' => '20',
            ),
            197 => 
            array (
                'id' => '3698',
                'nome' => 'Barcelona',
                'estado_id' => '20',
            ),
            198 => 
            array (
                'id' => '3699',
                'nome' => 'Bento Fernandes',
                'estado_id' => '20',
            ),
            199 => 
            array (
                'id' => '3700',
                'nome' => 'Bodó',
                'estado_id' => '20',
            ),
            200 => 
            array (
                'id' => '3701',
                'nome' => 'Bom Jesus',
                'estado_id' => '20',
            ),
            201 => 
            array (
                'id' => '3702',
                'nome' => 'Brejinho',
                'estado_id' => '20',
            ),
            202 => 
            array (
                'id' => '3703',
                'nome' => 'Caiçara do Norte',
                'estado_id' => '20',
            ),
            203 => 
            array (
                'id' => '3704',
                'nome' => 'Caiçara do Rio do Vento',
                'estado_id' => '20',
            ),
            204 => 
            array (
                'id' => '3705',
                'nome' => 'Caicó',
                'estado_id' => '20',
            ),
            205 => 
            array (
                'id' => '3706',
                'nome' => 'Campo Redondo',
                'estado_id' => '20',
            ),
            206 => 
            array (
                'id' => '3707',
                'nome' => 'Canguaretama',
                'estado_id' => '20',
            ),
            207 => 
            array (
                'id' => '3708',
                'nome' => 'Caraúbas',
                'estado_id' => '20',
            ),
            208 => 
            array (
                'id' => '3709',
                'nome' => 'Carnaúba dos Dantas',
                'estado_id' => '20',
            ),
            209 => 
            array (
                'id' => '3710',
                'nome' => 'Carnaubais',
                'estado_id' => '20',
            ),
            210 => 
            array (
                'id' => '3711',
                'nome' => 'Ceará-Mirim',
                'estado_id' => '20',
            ),
            211 => 
            array (
                'id' => '3712',
                'nome' => 'Cerro Corá',
                'estado_id' => '20',
            ),
            212 => 
            array (
                'id' => '3713',
                'nome' => 'Coronel Ezequiel',
                'estado_id' => '20',
            ),
            213 => 
            array (
                'id' => '3714',
                'nome' => 'Coronel João Pessoa',
                'estado_id' => '20',
            ),
            214 => 
            array (
                'id' => '3715',
                'nome' => 'Cruzeta',
                'estado_id' => '20',
            ),
            215 => 
            array (
                'id' => '3716',
                'nome' => 'Currais Novos',
                'estado_id' => '20',
            ),
            216 => 
            array (
                'id' => '3717',
                'nome' => 'Doutor Severiano',
                'estado_id' => '20',
            ),
            217 => 
            array (
                'id' => '3718',
                'nome' => 'Encanto',
                'estado_id' => '20',
            ),
            218 => 
            array (
                'id' => '3719',
                'nome' => 'Equador',
                'estado_id' => '20',
            ),
            219 => 
            array (
                'id' => '3720',
                'nome' => 'Espírito Santo',
                'estado_id' => '20',
            ),
            220 => 
            array (
                'id' => '3721',
                'nome' => 'Extremoz',
                'estado_id' => '20',
            ),
            221 => 
            array (
                'id' => '3722',
                'nome' => 'Felipe Guerra',
                'estado_id' => '20',
            ),
            222 => 
            array (
                'id' => '3723',
                'nome' => 'Fernando Pedroza',
                'estado_id' => '20',
            ),
            223 => 
            array (
                'id' => '3724',
                'nome' => 'Florânia',
                'estado_id' => '20',
            ),
            224 => 
            array (
                'id' => '3725',
                'nome' => 'Francisco Dantas',
                'estado_id' => '20',
            ),
            225 => 
            array (
                'id' => '3726',
                'nome' => 'Frutuoso Gomes',
                'estado_id' => '20',
            ),
            226 => 
            array (
                'id' => '3727',
                'nome' => 'Galinhos',
                'estado_id' => '20',
            ),
            227 => 
            array (
                'id' => '3728',
                'nome' => 'Goianinha',
                'estado_id' => '20',
            ),
            228 => 
            array (
                'id' => '3729',
                'nome' => 'Governador Dix-Sept Rosado',
                'estado_id' => '20',
            ),
            229 => 
            array (
                'id' => '3730',
                'nome' => 'Grossos',
                'estado_id' => '20',
            ),
            230 => 
            array (
                'id' => '3731',
                'nome' => 'Guamaré',
                'estado_id' => '20',
            ),
            231 => 
            array (
                'id' => '3732',
                'nome' => 'Ielmo Marinho',
                'estado_id' => '20',
            ),
            232 => 
            array (
                'id' => '3733',
                'nome' => 'Ipanguaçu',
                'estado_id' => '20',
            ),
            233 => 
            array (
                'id' => '3734',
                'nome' => 'Ipueira',
                'estado_id' => '20',
            ),
            234 => 
            array (
                'id' => '3735',
                'nome' => 'Itajá',
                'estado_id' => '20',
            ),
            235 => 
            array (
                'id' => '3736',
                'nome' => 'Itaú',
                'estado_id' => '20',
            ),
            236 => 
            array (
                'id' => '3737',
                'nome' => 'Jaçanã',
                'estado_id' => '20',
            ),
            237 => 
            array (
                'id' => '3738',
                'nome' => 'Jandaíra',
                'estado_id' => '20',
            ),
            238 => 
            array (
                'id' => '3739',
                'nome' => 'Janduís',
                'estado_id' => '20',
            ),
            239 => 
            array (
                'id' => '3740',
                'nome' => 'Januário Cicco',
                'estado_id' => '20',
            ),
            240 => 
            array (
                'id' => '3741',
                'nome' => 'Japi',
                'estado_id' => '20',
            ),
            241 => 
            array (
                'id' => '3742',
                'nome' => 'Jardim de Angicos',
                'estado_id' => '20',
            ),
            242 => 
            array (
                'id' => '3743',
                'nome' => 'Jardim de Piranhas',
                'estado_id' => '20',
            ),
            243 => 
            array (
                'id' => '3744',
                'nome' => 'Jardim do Seridó',
                'estado_id' => '20',
            ),
            244 => 
            array (
                'id' => '3745',
                'nome' => 'João Câmara',
                'estado_id' => '20',
            ),
            245 => 
            array (
                'id' => '3746',
                'nome' => 'João Dias',
                'estado_id' => '20',
            ),
            246 => 
            array (
                'id' => '3747',
                'nome' => 'José da Penha',
                'estado_id' => '20',
            ),
            247 => 
            array (
                'id' => '3748',
                'nome' => 'Jucurutu',
                'estado_id' => '20',
            ),
            248 => 
            array (
                'id' => '3749',
                'nome' => 'Jundiá',
                'estado_id' => '20',
            ),
            249 => 
            array (
                'id' => '3750',
                'nome' => 'Lagoa d`Anta',
                'estado_id' => '20',
            ),
            250 => 
            array (
                'id' => '3751',
                'nome' => 'Lagoa de Pedras',
                'estado_id' => '20',
            ),
            251 => 
            array (
                'id' => '3752',
                'nome' => 'Lagoa de Velhos',
                'estado_id' => '20',
            ),
            252 => 
            array (
                'id' => '3753',
                'nome' => 'Lagoa Nova',
                'estado_id' => '20',
            ),
            253 => 
            array (
                'id' => '3754',
                'nome' => 'Lagoa Salgada',
                'estado_id' => '20',
            ),
            254 => 
            array (
                'id' => '3755',
                'nome' => 'Lajes',
                'estado_id' => '20',
            ),
            255 => 
            array (
                'id' => '3756',
                'nome' => 'Lajes Pintadas',
                'estado_id' => '20',
            ),
            256 => 
            array (
                'id' => '3757',
                'nome' => 'Lucrécia',
                'estado_id' => '20',
            ),
            257 => 
            array (
                'id' => '3758',
                'nome' => 'Luís Gomes',
                'estado_id' => '20',
            ),
            258 => 
            array (
                'id' => '3759',
                'nome' => 'Macaíba',
                'estado_id' => '20',
            ),
            259 => 
            array (
                'id' => '3760',
                'nome' => 'Macau',
                'estado_id' => '20',
            ),
            260 => 
            array (
                'id' => '3761',
                'nome' => 'Major Sales',
                'estado_id' => '20',
            ),
            261 => 
            array (
                'id' => '3762',
                'nome' => 'Marcelino Vieira',
                'estado_id' => '20',
            ),
            262 => 
            array (
                'id' => '3763',
                'nome' => 'Martins',
                'estado_id' => '20',
            ),
            263 => 
            array (
                'id' => '3764',
                'nome' => 'Maxaranguape',
                'estado_id' => '20',
            ),
            264 => 
            array (
                'id' => '3765',
                'nome' => 'Messias Targino',
                'estado_id' => '20',
            ),
            265 => 
            array (
                'id' => '3766',
                'nome' => 'Montanhas',
                'estado_id' => '20',
            ),
            266 => 
            array (
                'id' => '3767',
                'nome' => 'Monte Alegre',
                'estado_id' => '20',
            ),
            267 => 
            array (
                'id' => '3768',
                'nome' => 'Monte das Gameleiras',
                'estado_id' => '20',
            ),
            268 => 
            array (
                'id' => '3769',
                'nome' => 'Mossoró',
                'estado_id' => '20',
            ),
            269 => 
            array (
                'id' => '3770',
                'nome' => 'Natal',
                'estado_id' => '20',
            ),
            270 => 
            array (
                'id' => '3771',
                'nome' => 'Nísia Floresta',
                'estado_id' => '20',
            ),
            271 => 
            array (
                'id' => '3772',
                'nome' => 'Nova Cruz',
                'estado_id' => '20',
            ),
            272 => 
            array (
                'id' => '3773',
                'nome' => 'Olho-d`Água do Borges',
                'estado_id' => '20',
            ),
            273 => 
            array (
                'id' => '3774',
                'nome' => 'Ouro Branco',
                'estado_id' => '20',
            ),
            274 => 
            array (
                'id' => '3775',
                'nome' => 'Paraná',
                'estado_id' => '20',
            ),
            275 => 
            array (
                'id' => '3776',
                'nome' => 'Paraú',
                'estado_id' => '20',
            ),
            276 => 
            array (
                'id' => '3777',
                'nome' => 'Parazinho',
                'estado_id' => '20',
            ),
            277 => 
            array (
                'id' => '3778',
                'nome' => 'Parelhas',
                'estado_id' => '20',
            ),
            278 => 
            array (
                'id' => '3779',
                'nome' => 'Parnamirim',
                'estado_id' => '20',
            ),
            279 => 
            array (
                'id' => '3780',
                'nome' => 'Passa e Fica',
                'estado_id' => '20',
            ),
            280 => 
            array (
                'id' => '3781',
                'nome' => 'Passagem',
                'estado_id' => '20',
            ),
            281 => 
            array (
                'id' => '3782',
                'nome' => 'Patu',
                'estado_id' => '20',
            ),
            282 => 
            array (
                'id' => '3783',
                'nome' => 'Pau dos Ferros',
                'estado_id' => '20',
            ),
            283 => 
            array (
                'id' => '3784',
                'nome' => 'Pedra Grande',
                'estado_id' => '20',
            ),
            284 => 
            array (
                'id' => '3785',
                'nome' => 'Pedra Preta',
                'estado_id' => '20',
            ),
            285 => 
            array (
                'id' => '3786',
                'nome' => 'Pedro Avelino',
                'estado_id' => '20',
            ),
            286 => 
            array (
                'id' => '3787',
                'nome' => 'Pedro Velho',
                'estado_id' => '20',
            ),
            287 => 
            array (
                'id' => '3788',
                'nome' => 'Pendências',
                'estado_id' => '20',
            ),
            288 => 
            array (
                'id' => '3789',
                'nome' => 'Pilões',
                'estado_id' => '20',
            ),
            289 => 
            array (
                'id' => '3790',
                'nome' => 'Poço Branco',
                'estado_id' => '20',
            ),
            290 => 
            array (
                'id' => '3791',
                'nome' => 'Portalegre',
                'estado_id' => '20',
            ),
            291 => 
            array (
                'id' => '3792',
                'nome' => 'Porto do Mangue',
                'estado_id' => '20',
            ),
            292 => 
            array (
                'id' => '3793',
                'nome' => 'Presidente Juscelino',
                'estado_id' => '20',
            ),
            293 => 
            array (
                'id' => '3794',
                'nome' => 'Pureza',
                'estado_id' => '20',
            ),
            294 => 
            array (
                'id' => '3795',
                'nome' => 'Rafael Fernandes',
                'estado_id' => '20',
            ),
            295 => 
            array (
                'id' => '3796',
                'nome' => 'Rafael Godeiro',
                'estado_id' => '20',
            ),
            296 => 
            array (
                'id' => '3797',
                'nome' => 'Riacho da Cruz',
                'estado_id' => '20',
            ),
            297 => 
            array (
                'id' => '3798',
                'nome' => 'Riacho de Santana',
                'estado_id' => '20',
            ),
            298 => 
            array (
                'id' => '3799',
                'nome' => 'Riachuelo',
                'estado_id' => '20',
            ),
            299 => 
            array (
                'id' => '3800',
                'nome' => 'Rio do Fogo',
                'estado_id' => '20',
            ),
            300 => 
            array (
                'id' => '3801',
                'nome' => 'Rodolfo Fernandes',
                'estado_id' => '20',
            ),
            301 => 
            array (
                'id' => '3802',
                'nome' => 'Ruy Barbosa',
                'estado_id' => '20',
            ),
            302 => 
            array (
                'id' => '3803',
                'nome' => 'Santa Cruz',
                'estado_id' => '20',
            ),
            303 => 
            array (
                'id' => '3804',
                'nome' => 'Santa Maria',
                'estado_id' => '20',
            ),
            304 => 
            array (
                'id' => '3805',
                'nome' => 'Santana do Matos',
                'estado_id' => '20',
            ),
            305 => 
            array (
                'id' => '3806',
                'nome' => 'Santana do Seridó',
                'estado_id' => '20',
            ),
            306 => 
            array (
                'id' => '3807',
                'nome' => 'Santo Antônio',
                'estado_id' => '20',
            ),
            307 => 
            array (
                'id' => '3808',
                'nome' => 'São Bento do Norte',
                'estado_id' => '20',
            ),
            308 => 
            array (
                'id' => '3809',
                'nome' => 'São Bento do Trairí',
                'estado_id' => '20',
            ),
            309 => 
            array (
                'id' => '3810',
                'nome' => 'São Fernando',
                'estado_id' => '20',
            ),
            310 => 
            array (
                'id' => '3811',
                'nome' => 'São Francisco do Oeste',
                'estado_id' => '20',
            ),
            311 => 
            array (
                'id' => '3812',
                'nome' => 'São Gonçalo do Amarante',
                'estado_id' => '20',
            ),
            312 => 
            array (
                'id' => '3813',
                'nome' => 'São João do Sabugi',
                'estado_id' => '20',
            ),
            313 => 
            array (
                'id' => '3814',
                'nome' => 'São José de Mipibu',
                'estado_id' => '20',
            ),
            314 => 
            array (
                'id' => '3815',
                'nome' => 'São José do Campestre',
                'estado_id' => '20',
            ),
            315 => 
            array (
                'id' => '3816',
                'nome' => 'São José do Seridó',
                'estado_id' => '20',
            ),
            316 => 
            array (
                'id' => '3817',
                'nome' => 'São Miguel',
                'estado_id' => '20',
            ),
            317 => 
            array (
                'id' => '3818',
                'nome' => 'São Miguel do Gostoso',
                'estado_id' => '20',
            ),
            318 => 
            array (
                'id' => '3819',
                'nome' => 'São Paulo do Potengi',
                'estado_id' => '20',
            ),
            319 => 
            array (
                'id' => '3820',
                'nome' => 'São Pedro',
                'estado_id' => '20',
            ),
            320 => 
            array (
                'id' => '3821',
                'nome' => 'São Rafael',
                'estado_id' => '20',
            ),
            321 => 
            array (
                'id' => '3822',
                'nome' => 'São Tomé',
                'estado_id' => '20',
            ),
            322 => 
            array (
                'id' => '3823',
                'nome' => 'São Vicente',
                'estado_id' => '20',
            ),
            323 => 
            array (
                'id' => '3824',
                'nome' => 'Senador Elói de Souza',
                'estado_id' => '20',
            ),
            324 => 
            array (
                'id' => '3825',
                'nome' => 'Senador Georgino Avelino',
                'estado_id' => '20',
            ),
            325 => 
            array (
                'id' => '3826',
                'nome' => 'Serra de São Bento',
                'estado_id' => '20',
            ),
            326 => 
            array (
                'id' => '3827',
                'nome' => 'Serra do Mel',
                'estado_id' => '20',
            ),
            327 => 
            array (
                'id' => '3828',
                'nome' => 'Serra Negra do Norte',
                'estado_id' => '20',
            ),
            328 => 
            array (
                'id' => '3829',
                'nome' => 'Serrinha',
                'estado_id' => '20',
            ),
            329 => 
            array (
                'id' => '3830',
                'nome' => 'Serrinha dos Pintos',
                'estado_id' => '20',
            ),
            330 => 
            array (
                'id' => '3831',
                'nome' => 'Severiano Melo',
                'estado_id' => '20',
            ),
            331 => 
            array (
                'id' => '3832',
                'nome' => 'Sítio Novo',
                'estado_id' => '20',
            ),
            332 => 
            array (
                'id' => '3833',
                'nome' => 'Taboleiro Grande',
                'estado_id' => '20',
            ),
            333 => 
            array (
                'id' => '3834',
                'nome' => 'Taipu',
                'estado_id' => '20',
            ),
            334 => 
            array (
                'id' => '3835',
                'nome' => 'Tangará',
                'estado_id' => '20',
            ),
            335 => 
            array (
                'id' => '3836',
                'nome' => 'Tenente Ananias',
                'estado_id' => '20',
            ),
            336 => 
            array (
                'id' => '3837',
                'nome' => 'Tenente Laurentino Cruz',
                'estado_id' => '20',
            ),
            337 => 
            array (
                'id' => '3838',
                'nome' => 'Tibau',
                'estado_id' => '20',
            ),
            338 => 
            array (
                'id' => '3839',
                'nome' => 'Tibau do Sul',
                'estado_id' => '20',
            ),
            339 => 
            array (
                'id' => '3840',
                'nome' => 'Timbaúba dos Batistas',
                'estado_id' => '20',
            ),
            340 => 
            array (
                'id' => '3841',
                'nome' => 'Touros',
                'estado_id' => '20',
            ),
            341 => 
            array (
                'id' => '3842',
                'nome' => 'Triunfo Potiguar',
                'estado_id' => '20',
            ),
            342 => 
            array (
                'id' => '3843',
                'nome' => 'Umarizal',
                'estado_id' => '20',
            ),
            343 => 
            array (
                'id' => '3844',
                'nome' => 'Upanema',
                'estado_id' => '20',
            ),
            344 => 
            array (
                'id' => '3845',
                'nome' => 'Várzea',
                'estado_id' => '20',
            ),
            345 => 
            array (
                'id' => '3846',
                'nome' => 'Venha-Ver',
                'estado_id' => '20',
            ),
            346 => 
            array (
                'id' => '3847',
                'nome' => 'Vera Cruz',
                'estado_id' => '20',
            ),
            347 => 
            array (
                'id' => '3848',
                'nome' => 'Viçosa',
                'estado_id' => '20',
            ),
            348 => 
            array (
                'id' => '3849',
                'nome' => 'Vila Flor',
                'estado_id' => '20',
            ),
            349 => 
            array (
                'id' => '3850',
                'nome' => 'Aceguá',
                'estado_id' => '23',
            ),
            350 => 
            array (
                'id' => '3851',
                'nome' => 'Água Santa',
                'estado_id' => '23',
            ),
            351 => 
            array (
                'id' => '3852',
                'nome' => 'Agudo',
                'estado_id' => '23',
            ),
            352 => 
            array (
                'id' => '3853',
                'nome' => 'Ajuricaba',
                'estado_id' => '23',
            ),
            353 => 
            array (
                'id' => '3854',
                'nome' => 'Alecrim',
                'estado_id' => '23',
            ),
            354 => 
            array (
                'id' => '3855',
                'nome' => 'Alegrete',
                'estado_id' => '23',
            ),
            355 => 
            array (
                'id' => '3856',
                'nome' => 'Alegria',
                'estado_id' => '23',
            ),
            356 => 
            array (
                'id' => '3857',
                'nome' => 'Almirante Tamandaré do Sul',
                'estado_id' => '23',
            ),
            357 => 
            array (
                'id' => '3858',
                'nome' => 'Alpestre',
                'estado_id' => '23',
            ),
            358 => 
            array (
                'id' => '3859',
                'nome' => 'Alto Alegre',
                'estado_id' => '23',
            ),
            359 => 
            array (
                'id' => '3860',
                'nome' => 'Alto Feliz',
                'estado_id' => '23',
            ),
            360 => 
            array (
                'id' => '3861',
                'nome' => 'Alvorada',
                'estado_id' => '23',
            ),
            361 => 
            array (
                'id' => '3862',
                'nome' => 'Amaral Ferrador',
                'estado_id' => '23',
            ),
            362 => 
            array (
                'id' => '3863',
                'nome' => 'Ametista do Sul',
                'estado_id' => '23',
            ),
            363 => 
            array (
                'id' => '3864',
                'nome' => 'André da Rocha',
                'estado_id' => '23',
            ),
            364 => 
            array (
                'id' => '3865',
                'nome' => 'Anta Gorda',
                'estado_id' => '23',
            ),
            365 => 
            array (
                'id' => '3866',
                'nome' => 'Antônio Prado',
                'estado_id' => '23',
            ),
            366 => 
            array (
                'id' => '3867',
                'nome' => 'Arambaré',
                'estado_id' => '23',
            ),
            367 => 
            array (
                'id' => '3868',
                'nome' => 'Araricá',
                'estado_id' => '23',
            ),
            368 => 
            array (
                'id' => '3869',
                'nome' => 'Aratiba',
                'estado_id' => '23',
            ),
            369 => 
            array (
                'id' => '3870',
                'nome' => 'Arroio do Meio',
                'estado_id' => '23',
            ),
            370 => 
            array (
                'id' => '3871',
                'nome' => 'Arroio do Padre',
                'estado_id' => '23',
            ),
            371 => 
            array (
                'id' => '3872',
                'nome' => 'Arroio do Sal',
                'estado_id' => '23',
            ),
            372 => 
            array (
                'id' => '3873',
                'nome' => 'Arroio do Tigre',
                'estado_id' => '23',
            ),
            373 => 
            array (
                'id' => '3874',
                'nome' => 'Arroio dos Ratos',
                'estado_id' => '23',
            ),
            374 => 
            array (
                'id' => '3875',
                'nome' => 'Arroio Grande',
                'estado_id' => '23',
            ),
            375 => 
            array (
                'id' => '3876',
                'nome' => 'Arvorezinha',
                'estado_id' => '23',
            ),
            376 => 
            array (
                'id' => '3877',
                'nome' => 'Augusto Pestana',
                'estado_id' => '23',
            ),
            377 => 
            array (
                'id' => '3878',
                'nome' => 'Áurea',
                'estado_id' => '23',
            ),
            378 => 
            array (
                'id' => '3879',
                'nome' => 'Bagé',
                'estado_id' => '23',
            ),
            379 => 
            array (
                'id' => '3880',
                'nome' => 'Balneário Pinhal',
                'estado_id' => '23',
            ),
            380 => 
            array (
                'id' => '3881',
                'nome' => 'Barão',
                'estado_id' => '23',
            ),
            381 => 
            array (
                'id' => '3882',
                'nome' => 'Barão de Cotegipe',
                'estado_id' => '23',
            ),
            382 => 
            array (
                'id' => '3883',
                'nome' => 'Barão do Triunfo',
                'estado_id' => '23',
            ),
            383 => 
            array (
                'id' => '3884',
                'nome' => 'Barra do Guarita',
                'estado_id' => '23',
            ),
            384 => 
            array (
                'id' => '3885',
                'nome' => 'Barra do Quaraí',
                'estado_id' => '23',
            ),
            385 => 
            array (
                'id' => '3886',
                'nome' => 'Barra do Ribeiro',
                'estado_id' => '23',
            ),
            386 => 
            array (
                'id' => '3887',
                'nome' => 'Barra do Rio Azul',
                'estado_id' => '23',
            ),
            387 => 
            array (
                'id' => '3888',
                'nome' => 'Barra Funda',
                'estado_id' => '23',
            ),
            388 => 
            array (
                'id' => '3889',
                'nome' => 'Barracão',
                'estado_id' => '23',
            ),
            389 => 
            array (
                'id' => '3890',
                'nome' => 'Barros Cassal',
                'estado_id' => '23',
            ),
            390 => 
            array (
                'id' => '3891',
                'nome' => 'Benjamin Constant do Sul',
                'estado_id' => '23',
            ),
            391 => 
            array (
                'id' => '3892',
                'nome' => 'Bento Gonçalves',
                'estado_id' => '23',
            ),
            392 => 
            array (
                'id' => '3893',
                'nome' => 'Boa Vista das Missões',
                'estado_id' => '23',
            ),
            393 => 
            array (
                'id' => '3894',
                'nome' => 'Boa Vista do Buricá',
                'estado_id' => '23',
            ),
            394 => 
            array (
                'id' => '3895',
                'nome' => 'Boa Vista do Cadeado',
                'estado_id' => '23',
            ),
            395 => 
            array (
                'id' => '3896',
                'nome' => 'Boa Vista do Incra',
                'estado_id' => '23',
            ),
            396 => 
            array (
                'id' => '3897',
                'nome' => 'Boa Vista do Sul',
                'estado_id' => '23',
            ),
            397 => 
            array (
                'id' => '3898',
                'nome' => 'Bom Jesus',
                'estado_id' => '23',
            ),
            398 => 
            array (
                'id' => '3899',
                'nome' => 'Bom Princípio',
                'estado_id' => '23',
            ),
            399 => 
            array (
                'id' => '3900',
                'nome' => 'Bom Progresso',
                'estado_id' => '23',
            ),
            400 => 
            array (
                'id' => '3901',
                'nome' => 'Bom Retiro do Sul',
                'estado_id' => '23',
            ),
            401 => 
            array (
                'id' => '3902',
                'nome' => 'Boqueirão do Leão',
                'estado_id' => '23',
            ),
            402 => 
            array (
                'id' => '3903',
                'nome' => 'Bossoroca',
                'estado_id' => '23',
            ),
            403 => 
            array (
                'id' => '3904',
                'nome' => 'Bozano',
                'estado_id' => '23',
            ),
            404 => 
            array (
                'id' => '3905',
                'nome' => 'Braga',
                'estado_id' => '23',
            ),
            405 => 
            array (
                'id' => '3906',
                'nome' => 'Brochier',
                'estado_id' => '23',
            ),
            406 => 
            array (
                'id' => '3907',
                'nome' => 'Butiá',
                'estado_id' => '23',
            ),
            407 => 
            array (
                'id' => '3908',
                'nome' => 'Caçapava do Sul',
                'estado_id' => '23',
            ),
            408 => 
            array (
                'id' => '3909',
                'nome' => 'Cacequi',
                'estado_id' => '23',
            ),
            409 => 
            array (
                'id' => '3910',
                'nome' => 'Cachoeira do Sul',
                'estado_id' => '23',
            ),
            410 => 
            array (
                'id' => '3911',
                'nome' => 'Cachoeirinha',
                'estado_id' => '23',
            ),
            411 => 
            array (
                'id' => '3912',
                'nome' => 'Cacique Doble',
                'estado_id' => '23',
            ),
            412 => 
            array (
                'id' => '3913',
                'nome' => 'Caibaté',
                'estado_id' => '23',
            ),
            413 => 
            array (
                'id' => '3914',
                'nome' => 'Caiçara',
                'estado_id' => '23',
            ),
            414 => 
            array (
                'id' => '3915',
                'nome' => 'Camaquã',
                'estado_id' => '23',
            ),
            415 => 
            array (
                'id' => '3916',
                'nome' => 'Camargo',
                'estado_id' => '23',
            ),
            416 => 
            array (
                'id' => '3917',
                'nome' => 'Cambará do Sul',
                'estado_id' => '23',
            ),
            417 => 
            array (
                'id' => '3918',
                'nome' => 'Campestre da Serra',
                'estado_id' => '23',
            ),
            418 => 
            array (
                'id' => '3919',
                'nome' => 'Campina das Missões',
                'estado_id' => '23',
            ),
            419 => 
            array (
                'id' => '3920',
                'nome' => 'Campinas do Sul',
                'estado_id' => '23',
            ),
            420 => 
            array (
                'id' => '3921',
                'nome' => 'Campo Bom',
                'estado_id' => '23',
            ),
            421 => 
            array (
                'id' => '3922',
                'nome' => 'Campo Novo',
                'estado_id' => '23',
            ),
            422 => 
            array (
                'id' => '3923',
                'nome' => 'Campos Borges',
                'estado_id' => '23',
            ),
            423 => 
            array (
                'id' => '3924',
                'nome' => 'Candelária',
                'estado_id' => '23',
            ),
            424 => 
            array (
                'id' => '3925',
                'nome' => 'Cândido Godói',
                'estado_id' => '23',
            ),
            425 => 
            array (
                'id' => '3926',
                'nome' => 'Candiota',
                'estado_id' => '23',
            ),
            426 => 
            array (
                'id' => '3927',
                'nome' => 'Canela',
                'estado_id' => '23',
            ),
            427 => 
            array (
                'id' => '3928',
                'nome' => 'Canguçu',
                'estado_id' => '23',
            ),
            428 => 
            array (
                'id' => '3929',
                'nome' => 'Canoas',
                'estado_id' => '23',
            ),
            429 => 
            array (
                'id' => '3930',
                'nome' => 'Canudos do Vale',
                'estado_id' => '23',
            ),
            430 => 
            array (
                'id' => '3931',
                'nome' => 'Capão Bonito do Sul',
                'estado_id' => '23',
            ),
            431 => 
            array (
                'id' => '3932',
                'nome' => 'Capão da Canoa',
                'estado_id' => '23',
            ),
            432 => 
            array (
                'id' => '3933',
                'nome' => 'Capão do Cipó',
                'estado_id' => '23',
            ),
            433 => 
            array (
                'id' => '3934',
                'nome' => 'Capão do Leão',
                'estado_id' => '23',
            ),
            434 => 
            array (
                'id' => '3935',
                'nome' => 'Capela de Santana',
                'estado_id' => '23',
            ),
            435 => 
            array (
                'id' => '3936',
                'nome' => 'Capitão',
                'estado_id' => '23',
            ),
            436 => 
            array (
                'id' => '3937',
                'nome' => 'Capivari do Sul',
                'estado_id' => '23',
            ),
            437 => 
            array (
                'id' => '3938',
                'nome' => 'Caraá',
                'estado_id' => '23',
            ),
            438 => 
            array (
                'id' => '3939',
                'nome' => 'Carazinho',
                'estado_id' => '23',
            ),
            439 => 
            array (
                'id' => '3940',
                'nome' => 'Carlos Barbosa',
                'estado_id' => '23',
            ),
            440 => 
            array (
                'id' => '3941',
                'nome' => 'Carlos Gomes',
                'estado_id' => '23',
            ),
            441 => 
            array (
                'id' => '3942',
                'nome' => 'Casca',
                'estado_id' => '23',
            ),
            442 => 
            array (
                'id' => '3943',
                'nome' => 'Caseiros',
                'estado_id' => '23',
            ),
            443 => 
            array (
                'id' => '3944',
                'nome' => 'Catuípe',
                'estado_id' => '23',
            ),
            444 => 
            array (
                'id' => '3945',
                'nome' => 'Caxias do Sul',
                'estado_id' => '23',
            ),
            445 => 
            array (
                'id' => '3946',
                'nome' => 'Centenário',
                'estado_id' => '23',
            ),
            446 => 
            array (
                'id' => '3947',
                'nome' => 'Cerrito',
                'estado_id' => '23',
            ),
            447 => 
            array (
                'id' => '3948',
                'nome' => 'Cerro Branco',
                'estado_id' => '23',
            ),
            448 => 
            array (
                'id' => '3949',
                'nome' => 'Cerro Grande',
                'estado_id' => '23',
            ),
            449 => 
            array (
                'id' => '3950',
                'nome' => 'Cerro Grande do Sul',
                'estado_id' => '23',
            ),
            450 => 
            array (
                'id' => '3951',
                'nome' => 'Cerro Largo',
                'estado_id' => '23',
            ),
            451 => 
            array (
                'id' => '3952',
                'nome' => 'Chapada',
                'estado_id' => '23',
            ),
            452 => 
            array (
                'id' => '3953',
                'nome' => 'Charqueadas',
                'estado_id' => '23',
            ),
            453 => 
            array (
                'id' => '3954',
                'nome' => 'Charrua',
                'estado_id' => '23',
            ),
            454 => 
            array (
                'id' => '3955',
                'nome' => 'Chiapeta',
                'estado_id' => '23',
            ),
            455 => 
            array (
                'id' => '3956',
                'nome' => 'Chuí',
                'estado_id' => '23',
            ),
            456 => 
            array (
                'id' => '3957',
                'nome' => 'Chuvisca',
                'estado_id' => '23',
            ),
            457 => 
            array (
                'id' => '3958',
                'nome' => 'Cidreira',
                'estado_id' => '23',
            ),
            458 => 
            array (
                'id' => '3959',
                'nome' => 'Ciríaco',
                'estado_id' => '23',
            ),
            459 => 
            array (
                'id' => '3960',
                'nome' => 'Colinas',
                'estado_id' => '23',
            ),
            460 => 
            array (
                'id' => '3961',
                'nome' => 'Colorado',
                'estado_id' => '23',
            ),
            461 => 
            array (
                'id' => '3962',
                'nome' => 'Condor',
                'estado_id' => '23',
            ),
            462 => 
            array (
                'id' => '3963',
                'nome' => 'Constantina',
                'estado_id' => '23',
            ),
            463 => 
            array (
                'id' => '3964',
                'nome' => 'Coqueiro Baixo',
                'estado_id' => '23',
            ),
            464 => 
            array (
                'id' => '3965',
                'nome' => 'Coqueiros do Sul',
                'estado_id' => '23',
            ),
            465 => 
            array (
                'id' => '3966',
                'nome' => 'Coronel Barros',
                'estado_id' => '23',
            ),
            466 => 
            array (
                'id' => '3967',
                'nome' => 'Coronel Bicaco',
                'estado_id' => '23',
            ),
            467 => 
            array (
                'id' => '3968',
                'nome' => 'Coronel Pilar',
                'estado_id' => '23',
            ),
            468 => 
            array (
                'id' => '3969',
                'nome' => 'Cotiporã',
                'estado_id' => '23',
            ),
            469 => 
            array (
                'id' => '3970',
                'nome' => 'Coxilha',
                'estado_id' => '23',
            ),
            470 => 
            array (
                'id' => '3971',
                'nome' => 'Crissiumal',
                'estado_id' => '23',
            ),
            471 => 
            array (
                'id' => '3972',
                'nome' => 'Cristal',
                'estado_id' => '23',
            ),
            472 => 
            array (
                'id' => '3973',
                'nome' => 'Cristal do Sul',
                'estado_id' => '23',
            ),
            473 => 
            array (
                'id' => '3974',
                'nome' => 'Cruz Alta',
                'estado_id' => '23',
            ),
            474 => 
            array (
                'id' => '3975',
                'nome' => 'Cruzaltense',
                'estado_id' => '23',
            ),
            475 => 
            array (
                'id' => '3976',
                'nome' => 'Cruzeiro do Sul',
                'estado_id' => '23',
            ),
            476 => 
            array (
                'id' => '3977',
                'nome' => 'David Canabarro',
                'estado_id' => '23',
            ),
            477 => 
            array (
                'id' => '3978',
                'nome' => 'Derrubadas',
                'estado_id' => '23',
            ),
            478 => 
            array (
                'id' => '3979',
                'nome' => 'Dezesseis de Novembro',
                'estado_id' => '23',
            ),
            479 => 
            array (
                'id' => '3980',
                'nome' => 'Dilermando de Aguiar',
                'estado_id' => '23',
            ),
            480 => 
            array (
                'id' => '3981',
                'nome' => 'Dois Irmãos',
                'estado_id' => '23',
            ),
            481 => 
            array (
                'id' => '3982',
                'nome' => 'Dois Irmãos das Missões',
                'estado_id' => '23',
            ),
            482 => 
            array (
                'id' => '3983',
                'nome' => 'Dois Lajeados',
                'estado_id' => '23',
            ),
            483 => 
            array (
                'id' => '3984',
                'nome' => 'Dom Feliciano',
                'estado_id' => '23',
            ),
            484 => 
            array (
                'id' => '3985',
                'nome' => 'Dom Pedrito',
                'estado_id' => '23',
            ),
            485 => 
            array (
                'id' => '3986',
                'nome' => 'Dom Pedro de Alcântara',
                'estado_id' => '23',
            ),
            486 => 
            array (
                'id' => '3987',
                'nome' => 'Dona Francisca',
                'estado_id' => '23',
            ),
            487 => 
            array (
                'id' => '3988',
                'nome' => 'Doutor Maurício Cardoso',
                'estado_id' => '23',
            ),
            488 => 
            array (
                'id' => '3989',
                'nome' => 'Doutor Ricardo',
                'estado_id' => '23',
            ),
            489 => 
            array (
                'id' => '3990',
                'nome' => 'Eldorado do Sul',
                'estado_id' => '23',
            ),
            490 => 
            array (
                'id' => '3991',
                'nome' => 'Encantado',
                'estado_id' => '23',
            ),
            491 => 
            array (
                'id' => '3992',
                'nome' => 'Encruzilhada do Sul',
                'estado_id' => '23',
            ),
            492 => 
            array (
                'id' => '3993',
                'nome' => 'Engenho Velho',
                'estado_id' => '23',
            ),
            493 => 
            array (
                'id' => '3994',
                'nome' => 'Entre Rios do Sul',
                'estado_id' => '23',
            ),
            494 => 
            array (
                'id' => '3995',
                'nome' => 'Entre-Ijuís',
                'estado_id' => '23',
            ),
            495 => 
            array (
                'id' => '3996',
                'nome' => 'Erebango',
                'estado_id' => '23',
            ),
            496 => 
            array (
                'id' => '3997',
                'nome' => 'Erechim',
                'estado_id' => '23',
            ),
            497 => 
            array (
                'id' => '3998',
                'nome' => 'Ernestina',
                'estado_id' => '23',
            ),
            498 => 
            array (
                'id' => '3999',
                'nome' => 'Erval Grande',
                'estado_id' => '23',
            ),
            499 => 
            array (
                'id' => '4000',
                'nome' => 'Erval Seco',
                'estado_id' => '23',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '4001',
                'nome' => 'Esmeralda',
                'estado_id' => '23',
            ),
            1 => 
            array (
                'id' => '4002',
                'nome' => 'Esperança do Sul',
                'estado_id' => '23',
            ),
            2 => 
            array (
                'id' => '4003',
                'nome' => 'Espumoso',
                'estado_id' => '23',
            ),
            3 => 
            array (
                'id' => '4004',
                'nome' => 'Estação',
                'estado_id' => '23',
            ),
            4 => 
            array (
                'id' => '4005',
                'nome' => 'Estância Velha',
                'estado_id' => '23',
            ),
            5 => 
            array (
                'id' => '4006',
                'nome' => 'Esteio',
                'estado_id' => '23',
            ),
            6 => 
            array (
                'id' => '4007',
                'nome' => 'Estrela',
                'estado_id' => '23',
            ),
            7 => 
            array (
                'id' => '4008',
                'nome' => 'Estrela Velha',
                'estado_id' => '23',
            ),
            8 => 
            array (
                'id' => '4009',
                'nome' => 'Eugênio de Castro',
                'estado_id' => '23',
            ),
            9 => 
            array (
                'id' => '4010',
                'nome' => 'Fagundes Varela',
                'estado_id' => '23',
            ),
            10 => 
            array (
                'id' => '4011',
                'nome' => 'Farroupilha',
                'estado_id' => '23',
            ),
            11 => 
            array (
                'id' => '4012',
                'nome' => 'Faxinal do Soturno',
                'estado_id' => '23',
            ),
            12 => 
            array (
                'id' => '4013',
                'nome' => 'Faxinalzinho',
                'estado_id' => '23',
            ),
            13 => 
            array (
                'id' => '4014',
                'nome' => 'Fazenda Vilanova',
                'estado_id' => '23',
            ),
            14 => 
            array (
                'id' => '4015',
                'nome' => 'Feliz',
                'estado_id' => '23',
            ),
            15 => 
            array (
                'id' => '4016',
                'nome' => 'Flores da Cunha',
                'estado_id' => '23',
            ),
            16 => 
            array (
                'id' => '4017',
                'nome' => 'Floriano Peixoto',
                'estado_id' => '23',
            ),
            17 => 
            array (
                'id' => '4018',
                'nome' => 'Fontoura Xavier',
                'estado_id' => '23',
            ),
            18 => 
            array (
                'id' => '4019',
                'nome' => 'Formigueiro',
                'estado_id' => '23',
            ),
            19 => 
            array (
                'id' => '4020',
                'nome' => 'Forquetinha',
                'estado_id' => '23',
            ),
            20 => 
            array (
                'id' => '4021',
                'nome' => 'Fortaleza dos Valos',
                'estado_id' => '23',
            ),
            21 => 
            array (
                'id' => '4022',
                'nome' => 'Frederico Westphalen',
                'estado_id' => '23',
            ),
            22 => 
            array (
                'id' => '4023',
                'nome' => 'Garibaldi',
                'estado_id' => '23',
            ),
            23 => 
            array (
                'id' => '4024',
                'nome' => 'Garruchos',
                'estado_id' => '23',
            ),
            24 => 
            array (
                'id' => '4025',
                'nome' => 'Gaurama',
                'estado_id' => '23',
            ),
            25 => 
            array (
                'id' => '4026',
                'nome' => 'General Câmara',
                'estado_id' => '23',
            ),
            26 => 
            array (
                'id' => '4027',
                'nome' => 'Gentil',
                'estado_id' => '23',
            ),
            27 => 
            array (
                'id' => '4028',
                'nome' => 'Getúlio Vargas',
                'estado_id' => '23',
            ),
            28 => 
            array (
                'id' => '4029',
                'nome' => 'Giruá',
                'estado_id' => '23',
            ),
            29 => 
            array (
                'id' => '4030',
                'nome' => 'Glorinha',
                'estado_id' => '23',
            ),
            30 => 
            array (
                'id' => '4031',
                'nome' => 'Gramado',
                'estado_id' => '23',
            ),
            31 => 
            array (
                'id' => '4032',
                'nome' => 'Gramado dos Loureiros',
                'estado_id' => '23',
            ),
            32 => 
            array (
                'id' => '4033',
                'nome' => 'Gramado Xavier',
                'estado_id' => '23',
            ),
            33 => 
            array (
                'id' => '4034',
                'nome' => 'Gravataí',
                'estado_id' => '23',
            ),
            34 => 
            array (
                'id' => '4035',
                'nome' => 'Guabiju',
                'estado_id' => '23',
            ),
            35 => 
            array (
                'id' => '4036',
                'nome' => 'Guaíba',
                'estado_id' => '23',
            ),
            36 => 
            array (
                'id' => '4037',
                'nome' => 'Guaporé',
                'estado_id' => '23',
            ),
            37 => 
            array (
                'id' => '4038',
                'nome' => 'Guarani das Missões',
                'estado_id' => '23',
            ),
            38 => 
            array (
                'id' => '4039',
                'nome' => 'Harmonia',
                'estado_id' => '23',
            ),
            39 => 
            array (
                'id' => '4040',
                'nome' => 'Herval',
                'estado_id' => '23',
            ),
            40 => 
            array (
                'id' => '4041',
                'nome' => 'Herveiras',
                'estado_id' => '23',
            ),
            41 => 
            array (
                'id' => '4042',
                'nome' => 'Horizontina',
                'estado_id' => '23',
            ),
            42 => 
            array (
                'id' => '4043',
                'nome' => 'Hulha Negra',
                'estado_id' => '23',
            ),
            43 => 
            array (
                'id' => '4044',
                'nome' => 'Humaitá',
                'estado_id' => '23',
            ),
            44 => 
            array (
                'id' => '4045',
                'nome' => 'Ibarama',
                'estado_id' => '23',
            ),
            45 => 
            array (
                'id' => '4046',
                'nome' => 'Ibiaçá',
                'estado_id' => '23',
            ),
            46 => 
            array (
                'id' => '4047',
                'nome' => 'Ibiraiaras',
                'estado_id' => '23',
            ),
            47 => 
            array (
                'id' => '4048',
                'nome' => 'Ibirapuitã',
                'estado_id' => '23',
            ),
            48 => 
            array (
                'id' => '4049',
                'nome' => 'Ibirubá',
                'estado_id' => '23',
            ),
            49 => 
            array (
                'id' => '4050',
                'nome' => 'Igrejinha',
                'estado_id' => '23',
            ),
            50 => 
            array (
                'id' => '4051',
                'nome' => 'Ijuí',
                'estado_id' => '23',
            ),
            51 => 
            array (
                'id' => '4052',
                'nome' => 'Ilópolis',
                'estado_id' => '23',
            ),
            52 => 
            array (
                'id' => '4053',
                'nome' => 'Imbé',
                'estado_id' => '23',
            ),
            53 => 
            array (
                'id' => '4054',
                'nome' => 'Imigrante',
                'estado_id' => '23',
            ),
            54 => 
            array (
                'id' => '4055',
                'nome' => 'Independência',
                'estado_id' => '23',
            ),
            55 => 
            array (
                'id' => '4056',
                'nome' => 'Inhacorá',
                'estado_id' => '23',
            ),
            56 => 
            array (
                'id' => '4057',
                'nome' => 'Ipê',
                'estado_id' => '23',
            ),
            57 => 
            array (
                'id' => '4058',
                'nome' => 'Ipiranga do Sul',
                'estado_id' => '23',
            ),
            58 => 
            array (
                'id' => '4059',
                'nome' => 'Iraí',
                'estado_id' => '23',
            ),
            59 => 
            array (
                'id' => '4060',
                'nome' => 'Itaara',
                'estado_id' => '23',
            ),
            60 => 
            array (
                'id' => '4061',
                'nome' => 'Itacurubi',
                'estado_id' => '23',
            ),
            61 => 
            array (
                'id' => '4062',
                'nome' => 'Itapuca',
                'estado_id' => '23',
            ),
            62 => 
            array (
                'id' => '4063',
                'nome' => 'Itaqui',
                'estado_id' => '23',
            ),
            63 => 
            array (
                'id' => '4064',
                'nome' => 'Itati',
                'estado_id' => '23',
            ),
            64 => 
            array (
                'id' => '4065',
                'nome' => 'Itatiba do Sul',
                'estado_id' => '23',
            ),
            65 => 
            array (
                'id' => '4066',
                'nome' => 'Ivorá',
                'estado_id' => '23',
            ),
            66 => 
            array (
                'id' => '4067',
                'nome' => 'Ivoti',
                'estado_id' => '23',
            ),
            67 => 
            array (
                'id' => '4068',
                'nome' => 'Jaboticaba',
                'estado_id' => '23',
            ),
            68 => 
            array (
                'id' => '4069',
                'nome' => 'Jacuizinho',
                'estado_id' => '23',
            ),
            69 => 
            array (
                'id' => '4070',
                'nome' => 'Jacutinga',
                'estado_id' => '23',
            ),
            70 => 
            array (
                'id' => '4071',
                'nome' => 'Jaguarão',
                'estado_id' => '23',
            ),
            71 => 
            array (
                'id' => '4072',
                'nome' => 'Jaguari',
                'estado_id' => '23',
            ),
            72 => 
            array (
                'id' => '4073',
                'nome' => 'Jaquirana',
                'estado_id' => '23',
            ),
            73 => 
            array (
                'id' => '4074',
                'nome' => 'Jari',
                'estado_id' => '23',
            ),
            74 => 
            array (
                'id' => '4075',
                'nome' => 'Jóia',
                'estado_id' => '23',
            ),
            75 => 
            array (
                'id' => '4076',
                'nome' => 'Júlio de Castilhos',
                'estado_id' => '23',
            ),
            76 => 
            array (
                'id' => '4077',
                'nome' => 'Lagoa Bonita do Sul',
                'estado_id' => '23',
            ),
            77 => 
            array (
                'id' => '4078',
                'nome' => 'Lagoa dos Três Cantos',
                'estado_id' => '23',
            ),
            78 => 
            array (
                'id' => '4079',
                'nome' => 'Lagoa Vermelha',
                'estado_id' => '23',
            ),
            79 => 
            array (
                'id' => '4080',
                'nome' => 'Lagoão',
                'estado_id' => '23',
            ),
            80 => 
            array (
                'id' => '4081',
                'nome' => 'Lajeado',
                'estado_id' => '23',
            ),
            81 => 
            array (
                'id' => '4082',
                'nome' => 'Lajeado do Bugre',
                'estado_id' => '23',
            ),
            82 => 
            array (
                'id' => '4083',
                'nome' => 'Lavras do Sul',
                'estado_id' => '23',
            ),
            83 => 
            array (
                'id' => '4084',
                'nome' => 'Liberato Salzano',
                'estado_id' => '23',
            ),
            84 => 
            array (
                'id' => '4085',
                'nome' => 'Lindolfo Collor',
                'estado_id' => '23',
            ),
            85 => 
            array (
                'id' => '4086',
                'nome' => 'Linha Nova',
                'estado_id' => '23',
            ),
            86 => 
            array (
                'id' => '4087',
                'nome' => 'Maçambara',
                'estado_id' => '23',
            ),
            87 => 
            array (
                'id' => '4088',
                'nome' => 'Machadinho',
                'estado_id' => '23',
            ),
            88 => 
            array (
                'id' => '4089',
                'nome' => 'Mampituba',
                'estado_id' => '23',
            ),
            89 => 
            array (
                'id' => '4090',
                'nome' => 'Manoel Viana',
                'estado_id' => '23',
            ),
            90 => 
            array (
                'id' => '4091',
                'nome' => 'Maquiné',
                'estado_id' => '23',
            ),
            91 => 
            array (
                'id' => '4092',
                'nome' => 'Maratá',
                'estado_id' => '23',
            ),
            92 => 
            array (
                'id' => '4093',
                'nome' => 'Marau',
                'estado_id' => '23',
            ),
            93 => 
            array (
                'id' => '4094',
                'nome' => 'Marcelino Ramos',
                'estado_id' => '23',
            ),
            94 => 
            array (
                'id' => '4095',
                'nome' => 'Mariana Pimentel',
                'estado_id' => '23',
            ),
            95 => 
            array (
                'id' => '4096',
                'nome' => 'Mariano Moro',
                'estado_id' => '23',
            ),
            96 => 
            array (
                'id' => '4097',
                'nome' => 'Marques de Souza',
                'estado_id' => '23',
            ),
            97 => 
            array (
                'id' => '4098',
                'nome' => 'Mata',
                'estado_id' => '23',
            ),
            98 => 
            array (
                'id' => '4099',
                'nome' => 'Mato Castelhano',
                'estado_id' => '23',
            ),
            99 => 
            array (
                'id' => '4100',
                'nome' => 'Mato Leitão',
                'estado_id' => '23',
            ),
            100 => 
            array (
                'id' => '4101',
                'nome' => 'Mato Queimado',
                'estado_id' => '23',
            ),
            101 => 
            array (
                'id' => '4102',
                'nome' => 'Maximiliano de Almeida',
                'estado_id' => '23',
            ),
            102 => 
            array (
                'id' => '4103',
                'nome' => 'Minas do Leão',
                'estado_id' => '23',
            ),
            103 => 
            array (
                'id' => '4104',
                'nome' => 'Miraguaí',
                'estado_id' => '23',
            ),
            104 => 
            array (
                'id' => '4105',
                'nome' => 'Montauri',
                'estado_id' => '23',
            ),
            105 => 
            array (
                'id' => '4106',
                'nome' => 'Monte Alegre dos Campos',
                'estado_id' => '23',
            ),
            106 => 
            array (
                'id' => '4107',
                'nome' => 'Monte Belo do Sul',
                'estado_id' => '23',
            ),
            107 => 
            array (
                'id' => '4108',
                'nome' => 'Montenegro',
                'estado_id' => '23',
            ),
            108 => 
            array (
                'id' => '4109',
                'nome' => 'Mormaço',
                'estado_id' => '23',
            ),
            109 => 
            array (
                'id' => '4110',
                'nome' => 'Morrinhos do Sul',
                'estado_id' => '23',
            ),
            110 => 
            array (
                'id' => '4111',
                'nome' => 'Morro Redondo',
                'estado_id' => '23',
            ),
            111 => 
            array (
                'id' => '4112',
                'nome' => 'Morro Reuter',
                'estado_id' => '23',
            ),
            112 => 
            array (
                'id' => '4113',
                'nome' => 'Mostardas',
                'estado_id' => '23',
            ),
            113 => 
            array (
                'id' => '4114',
                'nome' => 'Muçum',
                'estado_id' => '23',
            ),
            114 => 
            array (
                'id' => '4115',
                'nome' => 'Muitos Capões',
                'estado_id' => '23',
            ),
            115 => 
            array (
                'id' => '4116',
                'nome' => 'Muliterno',
                'estado_id' => '23',
            ),
            116 => 
            array (
                'id' => '4117',
                'nome' => 'Não-Me-Toque',
                'estado_id' => '23',
            ),
            117 => 
            array (
                'id' => '4118',
                'nome' => 'Nicolau Vergueiro',
                'estado_id' => '23',
            ),
            118 => 
            array (
                'id' => '4119',
                'nome' => 'Nonoai',
                'estado_id' => '23',
            ),
            119 => 
            array (
                'id' => '4120',
                'nome' => 'Nova Alvorada',
                'estado_id' => '23',
            ),
            120 => 
            array (
                'id' => '4121',
                'nome' => 'Nova Araçá',
                'estado_id' => '23',
            ),
            121 => 
            array (
                'id' => '4122',
                'nome' => 'Nova Bassano',
                'estado_id' => '23',
            ),
            122 => 
            array (
                'id' => '4123',
                'nome' => 'Nova Boa Vista',
                'estado_id' => '23',
            ),
            123 => 
            array (
                'id' => '4124',
                'nome' => 'Nova Bréscia',
                'estado_id' => '23',
            ),
            124 => 
            array (
                'id' => '4125',
                'nome' => 'Nova Candelária',
                'estado_id' => '23',
            ),
            125 => 
            array (
                'id' => '4126',
                'nome' => 'Nova Esperança do Sul',
                'estado_id' => '23',
            ),
            126 => 
            array (
                'id' => '4127',
                'nome' => 'Nova Hartz',
                'estado_id' => '23',
            ),
            127 => 
            array (
                'id' => '4128',
                'nome' => 'Nova Pádua',
                'estado_id' => '23',
            ),
            128 => 
            array (
                'id' => '4129',
                'nome' => 'Nova Palma',
                'estado_id' => '23',
            ),
            129 => 
            array (
                'id' => '4130',
                'nome' => 'Nova Petrópolis',
                'estado_id' => '23',
            ),
            130 => 
            array (
                'id' => '4131',
                'nome' => 'Nova Prata',
                'estado_id' => '23',
            ),
            131 => 
            array (
                'id' => '4132',
                'nome' => 'Nova Ramada',
                'estado_id' => '23',
            ),
            132 => 
            array (
                'id' => '4133',
                'nome' => 'Nova Roma do Sul',
                'estado_id' => '23',
            ),
            133 => 
            array (
                'id' => '4134',
                'nome' => 'Nova Santa Rita',
                'estado_id' => '23',
            ),
            134 => 
            array (
                'id' => '4135',
                'nome' => 'Novo Barreiro',
                'estado_id' => '23',
            ),
            135 => 
            array (
                'id' => '4136',
                'nome' => 'Novo Cabrais',
                'estado_id' => '23',
            ),
            136 => 
            array (
                'id' => '4137',
                'nome' => 'Novo Hamburgo',
                'estado_id' => '23',
            ),
            137 => 
            array (
                'id' => '4138',
                'nome' => 'Novo Machado',
                'estado_id' => '23',
            ),
            138 => 
            array (
                'id' => '4139',
                'nome' => 'Novo Tiradentes',
                'estado_id' => '23',
            ),
            139 => 
            array (
                'id' => '4140',
                'nome' => 'Novo Xingu',
                'estado_id' => '23',
            ),
            140 => 
            array (
                'id' => '4141',
                'nome' => 'Osório',
                'estado_id' => '23',
            ),
            141 => 
            array (
                'id' => '4142',
                'nome' => 'Paim Filho',
                'estado_id' => '23',
            ),
            142 => 
            array (
                'id' => '4143',
                'nome' => 'Palmares do Sul',
                'estado_id' => '23',
            ),
            143 => 
            array (
                'id' => '4144',
                'nome' => 'Palmeira das Missões',
                'estado_id' => '23',
            ),
            144 => 
            array (
                'id' => '4145',
                'nome' => 'Palmitinho',
                'estado_id' => '23',
            ),
            145 => 
            array (
                'id' => '4146',
                'nome' => 'Panambi',
                'estado_id' => '23',
            ),
            146 => 
            array (
                'id' => '4147',
                'nome' => 'Pantano Grande',
                'estado_id' => '23',
            ),
            147 => 
            array (
                'id' => '4148',
                'nome' => 'Paraí',
                'estado_id' => '23',
            ),
            148 => 
            array (
                'id' => '4149',
                'nome' => 'Paraíso do Sul',
                'estado_id' => '23',
            ),
            149 => 
            array (
                'id' => '4150',
                'nome' => 'Pareci Novo',
                'estado_id' => '23',
            ),
            150 => 
            array (
                'id' => '4151',
                'nome' => 'Parobé',
                'estado_id' => '23',
            ),
            151 => 
            array (
                'id' => '4152',
                'nome' => 'Passa Sete',
                'estado_id' => '23',
            ),
            152 => 
            array (
                'id' => '4153',
                'nome' => 'Passo do Sobrado',
                'estado_id' => '23',
            ),
            153 => 
            array (
                'id' => '4154',
                'nome' => 'Passo Fundo',
                'estado_id' => '23',
            ),
            154 => 
            array (
                'id' => '4155',
                'nome' => 'Paulo Bento',
                'estado_id' => '23',
            ),
            155 => 
            array (
                'id' => '4156',
                'nome' => 'Paverama',
                'estado_id' => '23',
            ),
            156 => 
            array (
                'id' => '4157',
                'nome' => 'Pedras Altas',
                'estado_id' => '23',
            ),
            157 => 
            array (
                'id' => '4158',
                'nome' => 'Pedro Osório',
                'estado_id' => '23',
            ),
            158 => 
            array (
                'id' => '4159',
                'nome' => 'Pejuçara',
                'estado_id' => '23',
            ),
            159 => 
            array (
                'id' => '4160',
                'nome' => 'Pelotas',
                'estado_id' => '23',
            ),
            160 => 
            array (
                'id' => '4161',
                'nome' => 'Picada Café',
                'estado_id' => '23',
            ),
            161 => 
            array (
                'id' => '4162',
                'nome' => 'Pinhal',
                'estado_id' => '23',
            ),
            162 => 
            array (
                'id' => '4163',
                'nome' => 'Pinhal da Serra',
                'estado_id' => '23',
            ),
            163 => 
            array (
                'id' => '4164',
                'nome' => 'Pinhal Grande',
                'estado_id' => '23',
            ),
            164 => 
            array (
                'id' => '4165',
                'nome' => 'Pinheirinho do Vale',
                'estado_id' => '23',
            ),
            165 => 
            array (
                'id' => '4166',
                'nome' => 'Pinheiro Machado',
                'estado_id' => '23',
            ),
            166 => 
            array (
                'id' => '4167',
                'nome' => 'Pirapó',
                'estado_id' => '23',
            ),
            167 => 
            array (
                'id' => '4168',
                'nome' => 'Piratini',
                'estado_id' => '23',
            ),
            168 => 
            array (
                'id' => '4169',
                'nome' => 'Planalto',
                'estado_id' => '23',
            ),
            169 => 
            array (
                'id' => '4170',
                'nome' => 'Poço das Antas',
                'estado_id' => '23',
            ),
            170 => 
            array (
                'id' => '4171',
                'nome' => 'Pontão',
                'estado_id' => '23',
            ),
            171 => 
            array (
                'id' => '4172',
                'nome' => 'Ponte Preta',
                'estado_id' => '23',
            ),
            172 => 
            array (
                'id' => '4173',
                'nome' => 'Portão',
                'estado_id' => '23',
            ),
            173 => 
            array (
                'id' => '4174',
                'nome' => 'Porto Alegre',
                'estado_id' => '23',
            ),
            174 => 
            array (
                'id' => '4175',
                'nome' => 'Porto Lucena',
                'estado_id' => '23',
            ),
            175 => 
            array (
                'id' => '4176',
                'nome' => 'Porto Mauá',
                'estado_id' => '23',
            ),
            176 => 
            array (
                'id' => '4177',
                'nome' => 'Porto Vera Cruz',
                'estado_id' => '23',
            ),
            177 => 
            array (
                'id' => '4178',
                'nome' => 'Porto Xavier',
                'estado_id' => '23',
            ),
            178 => 
            array (
                'id' => '4179',
                'nome' => 'Pouso Novo',
                'estado_id' => '23',
            ),
            179 => 
            array (
                'id' => '4180',
                'nome' => 'Presidente Lucena',
                'estado_id' => '23',
            ),
            180 => 
            array (
                'id' => '4181',
                'nome' => 'Progresso',
                'estado_id' => '23',
            ),
            181 => 
            array (
                'id' => '4182',
                'nome' => 'Protásio Alves',
                'estado_id' => '23',
            ),
            182 => 
            array (
                'id' => '4183',
                'nome' => 'Putinga',
                'estado_id' => '23',
            ),
            183 => 
            array (
                'id' => '4184',
                'nome' => 'Quaraí',
                'estado_id' => '23',
            ),
            184 => 
            array (
                'id' => '4185',
                'nome' => 'Quatro Irmãos',
                'estado_id' => '23',
            ),
            185 => 
            array (
                'id' => '4186',
                'nome' => 'Quevedos',
                'estado_id' => '23',
            ),
            186 => 
            array (
                'id' => '4187',
                'nome' => 'Quinze de Novembro',
                'estado_id' => '23',
            ),
            187 => 
            array (
                'id' => '4188',
                'nome' => 'Redentora',
                'estado_id' => '23',
            ),
            188 => 
            array (
                'id' => '4189',
                'nome' => 'Relvado',
                'estado_id' => '23',
            ),
            189 => 
            array (
                'id' => '4190',
                'nome' => 'Restinga Seca',
                'estado_id' => '23',
            ),
            190 => 
            array (
                'id' => '4191',
                'nome' => 'Rio dos Índios',
                'estado_id' => '23',
            ),
            191 => 
            array (
                'id' => '4192',
                'nome' => 'Rio Grande',
                'estado_id' => '23',
            ),
            192 => 
            array (
                'id' => '4193',
                'nome' => 'Rio Pardo',
                'estado_id' => '23',
            ),
            193 => 
            array (
                'id' => '4194',
                'nome' => 'Riozinho',
                'estado_id' => '23',
            ),
            194 => 
            array (
                'id' => '4195',
                'nome' => 'Roca Sales',
                'estado_id' => '23',
            ),
            195 => 
            array (
                'id' => '4196',
                'nome' => 'Rodeio Bonito',
                'estado_id' => '23',
            ),
            196 => 
            array (
                'id' => '4197',
                'nome' => 'Rolador',
                'estado_id' => '23',
            ),
            197 => 
            array (
                'id' => '4198',
                'nome' => 'Rolante',
                'estado_id' => '23',
            ),
            198 => 
            array (
                'id' => '4199',
                'nome' => 'Ronda Alta',
                'estado_id' => '23',
            ),
            199 => 
            array (
                'id' => '4200',
                'nome' => 'Rondinha',
                'estado_id' => '23',
            ),
            200 => 
            array (
                'id' => '4201',
                'nome' => 'Roque Gonzales',
                'estado_id' => '23',
            ),
            201 => 
            array (
                'id' => '4202',
                'nome' => 'Rosário do Sul',
                'estado_id' => '23',
            ),
            202 => 
            array (
                'id' => '4203',
                'nome' => 'Sagrada Família',
                'estado_id' => '23',
            ),
            203 => 
            array (
                'id' => '4204',
                'nome' => 'Saldanha Marinho',
                'estado_id' => '23',
            ),
            204 => 
            array (
                'id' => '4205',
                'nome' => 'Salto do Jacuí',
                'estado_id' => '23',
            ),
            205 => 
            array (
                'id' => '4206',
                'nome' => 'Salvador das Missões',
                'estado_id' => '23',
            ),
            206 => 
            array (
                'id' => '4207',
                'nome' => 'Salvador do Sul',
                'estado_id' => '23',
            ),
            207 => 
            array (
                'id' => '4208',
                'nome' => 'Sananduva',
                'estado_id' => '23',
            ),
            208 => 
            array (
                'id' => '4209',
                'nome' => 'Santa Bárbara do Sul',
                'estado_id' => '23',
            ),
            209 => 
            array (
                'id' => '4210',
                'nome' => 'Santa Cecília do Sul',
                'estado_id' => '23',
            ),
            210 => 
            array (
                'id' => '4211',
                'nome' => 'Santa Clara do Sul',
                'estado_id' => '23',
            ),
            211 => 
            array (
                'id' => '4212',
                'nome' => 'Santa Cruz do Sul',
                'estado_id' => '23',
            ),
            212 => 
            array (
                'id' => '4213',
                'nome' => 'Santa Margarida do Sul',
                'estado_id' => '23',
            ),
            213 => 
            array (
                'id' => '4214',
                'nome' => 'Santa Maria',
                'estado_id' => '23',
            ),
            214 => 
            array (
                'id' => '4215',
                'nome' => 'Santa Maria do Herval',
                'estado_id' => '23',
            ),
            215 => 
            array (
                'id' => '4216',
                'nome' => 'Santa Rosa',
                'estado_id' => '23',
            ),
            216 => 
            array (
                'id' => '4217',
                'nome' => 'Santa Tereza',
                'estado_id' => '23',
            ),
            217 => 
            array (
                'id' => '4218',
                'nome' => 'Santa Vitória do Palmar',
                'estado_id' => '23',
            ),
            218 => 
            array (
                'id' => '4219',
                'nome' => 'Santana da Boa Vista',
                'estado_id' => '23',
            ),
            219 => 
            array (
                'id' => '4220',
                'nome' => 'Santana do Livramento',
                'estado_id' => '23',
            ),
            220 => 
            array (
                'id' => '4221',
                'nome' => 'Santiago',
                'estado_id' => '23',
            ),
            221 => 
            array (
                'id' => '4222',
                'nome' => 'Santo Ângelo',
                'estado_id' => '23',
            ),
            222 => 
            array (
                'id' => '4223',
                'nome' => 'Santo Antônio da Patrulha',
                'estado_id' => '23',
            ),
            223 => 
            array (
                'id' => '4224',
                'nome' => 'Santo Antônio das Missões',
                'estado_id' => '23',
            ),
            224 => 
            array (
                'id' => '4225',
                'nome' => 'Santo Antônio do Palma',
                'estado_id' => '23',
            ),
            225 => 
            array (
                'id' => '4226',
                'nome' => 'Santo Antônio do Planalto',
                'estado_id' => '23',
            ),
            226 => 
            array (
                'id' => '4227',
                'nome' => 'Santo Augusto',
                'estado_id' => '23',
            ),
            227 => 
            array (
                'id' => '4228',
                'nome' => 'Santo Cristo',
                'estado_id' => '23',
            ),
            228 => 
            array (
                'id' => '4229',
                'nome' => 'Santo Expedito do Sul',
                'estado_id' => '23',
            ),
            229 => 
            array (
                'id' => '4230',
                'nome' => 'São Borja',
                'estado_id' => '23',
            ),
            230 => 
            array (
                'id' => '4231',
                'nome' => 'São Domingos do Sul',
                'estado_id' => '23',
            ),
            231 => 
            array (
                'id' => '4232',
                'nome' => 'São Francisco de Assis',
                'estado_id' => '23',
            ),
            232 => 
            array (
                'id' => '4233',
                'nome' => 'São Francisco de Paula',
                'estado_id' => '23',
            ),
            233 => 
            array (
                'id' => '4234',
                'nome' => 'São Gabriel',
                'estado_id' => '23',
            ),
            234 => 
            array (
                'id' => '4235',
                'nome' => 'São Jerônimo',
                'estado_id' => '23',
            ),
            235 => 
            array (
                'id' => '4236',
                'nome' => 'São João da Urtiga',
                'estado_id' => '23',
            ),
            236 => 
            array (
                'id' => '4237',
                'nome' => 'São João do Polêsine',
                'estado_id' => '23',
            ),
            237 => 
            array (
                'id' => '4238',
                'nome' => 'São Jorge',
                'estado_id' => '23',
            ),
            238 => 
            array (
                'id' => '4239',
                'nome' => 'São José das Missões',
                'estado_id' => '23',
            ),
            239 => 
            array (
                'id' => '4240',
                'nome' => 'São José do Herval',
                'estado_id' => '23',
            ),
            240 => 
            array (
                'id' => '4241',
                'nome' => 'São José do Hortêncio',
                'estado_id' => '23',
            ),
            241 => 
            array (
                'id' => '4242',
                'nome' => 'São José do Inhacorá',
                'estado_id' => '23',
            ),
            242 => 
            array (
                'id' => '4243',
                'nome' => 'São José do Norte',
                'estado_id' => '23',
            ),
            243 => 
            array (
                'id' => '4244',
                'nome' => 'São José do Ouro',
                'estado_id' => '23',
            ),
            244 => 
            array (
                'id' => '4245',
                'nome' => 'São José do Sul',
                'estado_id' => '23',
            ),
            245 => 
            array (
                'id' => '4246',
                'nome' => 'São José dos Ausentes',
                'estado_id' => '23',
            ),
            246 => 
            array (
                'id' => '4247',
                'nome' => 'São Leopoldo',
                'estado_id' => '23',
            ),
            247 => 
            array (
                'id' => '4248',
                'nome' => 'São Lourenço do Sul',
                'estado_id' => '23',
            ),
            248 => 
            array (
                'id' => '4249',
                'nome' => 'São Luiz Gonzaga',
                'estado_id' => '23',
            ),
            249 => 
            array (
                'id' => '4250',
                'nome' => 'São Marcos',
                'estado_id' => '23',
            ),
            250 => 
            array (
                'id' => '4251',
                'nome' => 'São Martinho',
                'estado_id' => '23',
            ),
            251 => 
            array (
                'id' => '4252',
                'nome' => 'São Martinho da Serra',
                'estado_id' => '23',
            ),
            252 => 
            array (
                'id' => '4253',
                'nome' => 'São Miguel das Missões',
                'estado_id' => '23',
            ),
            253 => 
            array (
                'id' => '4254',
                'nome' => 'São Nicolau',
                'estado_id' => '23',
            ),
            254 => 
            array (
                'id' => '4255',
                'nome' => 'São Paulo das Missões',
                'estado_id' => '23',
            ),
            255 => 
            array (
                'id' => '4256',
                'nome' => 'São Pedro da Serra',
                'estado_id' => '23',
            ),
            256 => 
            array (
                'id' => '4257',
                'nome' => 'São Pedro das Missões',
                'estado_id' => '23',
            ),
            257 => 
            array (
                'id' => '4258',
                'nome' => 'São Pedro do Butiá',
                'estado_id' => '23',
            ),
            258 => 
            array (
                'id' => '4259',
                'nome' => 'São Pedro do Sul',
                'estado_id' => '23',
            ),
            259 => 
            array (
                'id' => '4260',
                'nome' => 'São Sebastião do Caí',
                'estado_id' => '23',
            ),
            260 => 
            array (
                'id' => '4261',
                'nome' => 'São Sepé',
                'estado_id' => '23',
            ),
            261 => 
            array (
                'id' => '4262',
                'nome' => 'São Valentim',
                'estado_id' => '23',
            ),
            262 => 
            array (
                'id' => '4263',
                'nome' => 'São Valentim do Sul',
                'estado_id' => '23',
            ),
            263 => 
            array (
                'id' => '4264',
                'nome' => 'São Valério do Sul',
                'estado_id' => '23',
            ),
            264 => 
            array (
                'id' => '4265',
                'nome' => 'São Vendelino',
                'estado_id' => '23',
            ),
            265 => 
            array (
                'id' => '4266',
                'nome' => 'São Vicente do Sul',
                'estado_id' => '23',
            ),
            266 => 
            array (
                'id' => '4267',
                'nome' => 'Sapiranga',
                'estado_id' => '23',
            ),
            267 => 
            array (
                'id' => '4268',
                'nome' => 'Sapucaia do Sul',
                'estado_id' => '23',
            ),
            268 => 
            array (
                'id' => '4269',
                'nome' => 'Sarandi',
                'estado_id' => '23',
            ),
            269 => 
            array (
                'id' => '4270',
                'nome' => 'Seberi',
                'estado_id' => '23',
            ),
            270 => 
            array (
                'id' => '4271',
                'nome' => 'Sede Nova',
                'estado_id' => '23',
            ),
            271 => 
            array (
                'id' => '4272',
                'nome' => 'Segredo',
                'estado_id' => '23',
            ),
            272 => 
            array (
                'id' => '4273',
                'nome' => 'Selbach',
                'estado_id' => '23',
            ),
            273 => 
            array (
                'id' => '4274',
                'nome' => 'Senador Salgado Filho',
                'estado_id' => '23',
            ),
            274 => 
            array (
                'id' => '4275',
                'nome' => 'Sentinela do Sul',
                'estado_id' => '23',
            ),
            275 => 
            array (
                'id' => '4276',
                'nome' => 'Serafina Corrêa',
                'estado_id' => '23',
            ),
            276 => 
            array (
                'id' => '4277',
                'nome' => 'Sério',
                'estado_id' => '23',
            ),
            277 => 
            array (
                'id' => '4278',
                'nome' => 'Sertão',
                'estado_id' => '23',
            ),
            278 => 
            array (
                'id' => '4279',
                'nome' => 'Sertão Santana',
                'estado_id' => '23',
            ),
            279 => 
            array (
                'id' => '4280',
                'nome' => 'Sete de Setembro',
                'estado_id' => '23',
            ),
            280 => 
            array (
                'id' => '4281',
                'nome' => 'Severiano de Almeida',
                'estado_id' => '23',
            ),
            281 => 
            array (
                'id' => '4282',
                'nome' => 'Silveira Martins',
                'estado_id' => '23',
            ),
            282 => 
            array (
                'id' => '4283',
                'nome' => 'Sinimbu',
                'estado_id' => '23',
            ),
            283 => 
            array (
                'id' => '4284',
                'nome' => 'Sobradinho',
                'estado_id' => '23',
            ),
            284 => 
            array (
                'id' => '4285',
                'nome' => 'Soledade',
                'estado_id' => '23',
            ),
            285 => 
            array (
                'id' => '4286',
                'nome' => 'Tabaí',
                'estado_id' => '23',
            ),
            286 => 
            array (
                'id' => '4287',
                'nome' => 'Tapejara',
                'estado_id' => '23',
            ),
            287 => 
            array (
                'id' => '4288',
                'nome' => 'Tapera',
                'estado_id' => '23',
            ),
            288 => 
            array (
                'id' => '4289',
                'nome' => 'Tapes',
                'estado_id' => '23',
            ),
            289 => 
            array (
                'id' => '4290',
                'nome' => 'Taquara',
                'estado_id' => '23',
            ),
            290 => 
            array (
                'id' => '4291',
                'nome' => 'Taquari',
                'estado_id' => '23',
            ),
            291 => 
            array (
                'id' => '4292',
                'nome' => 'Taquaruçu do Sul',
                'estado_id' => '23',
            ),
            292 => 
            array (
                'id' => '4293',
                'nome' => 'Tavares',
                'estado_id' => '23',
            ),
            293 => 
            array (
                'id' => '4294',
                'nome' => 'Tenente Portela',
                'estado_id' => '23',
            ),
            294 => 
            array (
                'id' => '4295',
                'nome' => 'Terra de Areia',
                'estado_id' => '23',
            ),
            295 => 
            array (
                'id' => '4296',
                'nome' => 'Teutônia',
                'estado_id' => '23',
            ),
            296 => 
            array (
                'id' => '4297',
                'nome' => 'Tio Hugo',
                'estado_id' => '23',
            ),
            297 => 
            array (
                'id' => '4298',
                'nome' => 'Tiradentes do Sul',
                'estado_id' => '23',
            ),
            298 => 
            array (
                'id' => '4299',
                'nome' => 'Toropi',
                'estado_id' => '23',
            ),
            299 => 
            array (
                'id' => '4300',
                'nome' => 'Torres',
                'estado_id' => '23',
            ),
            300 => 
            array (
                'id' => '4301',
                'nome' => 'Tramandaí',
                'estado_id' => '23',
            ),
            301 => 
            array (
                'id' => '4302',
                'nome' => 'Travesseiro',
                'estado_id' => '23',
            ),
            302 => 
            array (
                'id' => '4303',
                'nome' => 'Três Arroios',
                'estado_id' => '23',
            ),
            303 => 
            array (
                'id' => '4304',
                'nome' => 'Três Cachoeiras',
                'estado_id' => '23',
            ),
            304 => 
            array (
                'id' => '4305',
                'nome' => 'Três Coroas',
                'estado_id' => '23',
            ),
            305 => 
            array (
                'id' => '4306',
                'nome' => 'Três de Maio',
                'estado_id' => '23',
            ),
            306 => 
            array (
                'id' => '4307',
                'nome' => 'Três Forquilhas',
                'estado_id' => '23',
            ),
            307 => 
            array (
                'id' => '4308',
                'nome' => 'Três Palmeiras',
                'estado_id' => '23',
            ),
            308 => 
            array (
                'id' => '4309',
                'nome' => 'Três Passos',
                'estado_id' => '23',
            ),
            309 => 
            array (
                'id' => '4310',
                'nome' => 'Trindade do Sul',
                'estado_id' => '23',
            ),
            310 => 
            array (
                'id' => '4311',
                'nome' => 'Triunfo',
                'estado_id' => '23',
            ),
            311 => 
            array (
                'id' => '4312',
                'nome' => 'Tucunduva',
                'estado_id' => '23',
            ),
            312 => 
            array (
                'id' => '4313',
                'nome' => 'Tunas',
                'estado_id' => '23',
            ),
            313 => 
            array (
                'id' => '4314',
                'nome' => 'Tupanci do Sul',
                'estado_id' => '23',
            ),
            314 => 
            array (
                'id' => '4315',
                'nome' => 'Tupanciretã',
                'estado_id' => '23',
            ),
            315 => 
            array (
                'id' => '4316',
                'nome' => 'Tupandi',
                'estado_id' => '23',
            ),
            316 => 
            array (
                'id' => '4317',
                'nome' => 'Tuparendi',
                'estado_id' => '23',
            ),
            317 => 
            array (
                'id' => '4318',
                'nome' => 'Turuçu',
                'estado_id' => '23',
            ),
            318 => 
            array (
                'id' => '4319',
                'nome' => 'Ubiretama',
                'estado_id' => '23',
            ),
            319 => 
            array (
                'id' => '4320',
                'nome' => 'União da Serra',
                'estado_id' => '23',
            ),
            320 => 
            array (
                'id' => '4321',
                'nome' => 'Unistalda',
                'estado_id' => '23',
            ),
            321 => 
            array (
                'id' => '4322',
                'nome' => 'Uruguaiana',
                'estado_id' => '23',
            ),
            322 => 
            array (
                'id' => '4323',
                'nome' => 'Vacaria',
                'estado_id' => '23',
            ),
            323 => 
            array (
                'id' => '4324',
                'nome' => 'Vale do Sol',
                'estado_id' => '23',
            ),
            324 => 
            array (
                'id' => '4325',
                'nome' => 'Vale Real',
                'estado_id' => '23',
            ),
            325 => 
            array (
                'id' => '4326',
                'nome' => 'Vale Verde',
                'estado_id' => '23',
            ),
            326 => 
            array (
                'id' => '4327',
                'nome' => 'Vanini',
                'estado_id' => '23',
            ),
            327 => 
            array (
                'id' => '4328',
                'nome' => 'Venâncio Aires',
                'estado_id' => '23',
            ),
            328 => 
            array (
                'id' => '4329',
                'nome' => 'Vera Cruz',
                'estado_id' => '23',
            ),
            329 => 
            array (
                'id' => '4330',
                'nome' => 'Veranópolis',
                'estado_id' => '23',
            ),
            330 => 
            array (
                'id' => '4331',
                'nome' => 'Vespasiano Correa',
                'estado_id' => '23',
            ),
            331 => 
            array (
                'id' => '4332',
                'nome' => 'Viadutos',
                'estado_id' => '23',
            ),
            332 => 
            array (
                'id' => '4333',
                'nome' => 'Viamão',
                'estado_id' => '23',
            ),
            333 => 
            array (
                'id' => '4334',
                'nome' => 'Vicente Dutra',
                'estado_id' => '23',
            ),
            334 => 
            array (
                'id' => '4335',
                'nome' => 'Victor Graeff',
                'estado_id' => '23',
            ),
            335 => 
            array (
                'id' => '4336',
                'nome' => 'Vila Flores',
                'estado_id' => '23',
            ),
            336 => 
            array (
                'id' => '4337',
                'nome' => 'Vila Lângaro',
                'estado_id' => '23',
            ),
            337 => 
            array (
                'id' => '4338',
                'nome' => 'Vila Maria',
                'estado_id' => '23',
            ),
            338 => 
            array (
                'id' => '4339',
                'nome' => 'Vila Nova do Sul',
                'estado_id' => '23',
            ),
            339 => 
            array (
                'id' => '4340',
                'nome' => 'Vista Alegre',
                'estado_id' => '23',
            ),
            340 => 
            array (
                'id' => '4341',
                'nome' => 'Vista Alegre do Prata',
                'estado_id' => '23',
            ),
            341 => 
            array (
                'id' => '4342',
                'nome' => 'Vista Gaúcha',
                'estado_id' => '23',
            ),
            342 => 
            array (
                'id' => '4343',
                'nome' => 'Vitória das Missões',
                'estado_id' => '23',
            ),
            343 => 
            array (
                'id' => '4344',
                'nome' => 'Westfália',
                'estado_id' => '23',
            ),
            344 => 
            array (
                'id' => '4345',
                'nome' => 'Xangri-lá',
                'estado_id' => '23',
            ),
            345 => 
            array (
                'id' => '4346',
                'nome' => 'Alta Floresta d`Oeste',
                'estado_id' => '21',
            ),
            346 => 
            array (
                'id' => '4347',
                'nome' => 'Alto Alegre dos Parecis',
                'estado_id' => '21',
            ),
            347 => 
            array (
                'id' => '4348',
                'nome' => 'Alto Paraíso',
                'estado_id' => '21',
            ),
            348 => 
            array (
                'id' => '4349',
                'nome' => 'Alvorada d`Oeste',
                'estado_id' => '21',
            ),
            349 => 
            array (
                'id' => '4350',
                'nome' => 'Ariquemes',
                'estado_id' => '21',
            ),
            350 => 
            array (
                'id' => '4351',
                'nome' => 'Buritis',
                'estado_id' => '21',
            ),
            351 => 
            array (
                'id' => '4352',
                'nome' => 'Cabixi',
                'estado_id' => '21',
            ),
            352 => 
            array (
                'id' => '4353',
                'nome' => 'Cacaulândia',
                'estado_id' => '21',
            ),
            353 => 
            array (
                'id' => '4354',
                'nome' => 'Cacoal',
                'estado_id' => '21',
            ),
            354 => 
            array (
                'id' => '4355',
                'nome' => 'Campo Novo de Rondônia',
                'estado_id' => '21',
            ),
            355 => 
            array (
                'id' => '4356',
                'nome' => 'Candeias do Jamari',
                'estado_id' => '21',
            ),
            356 => 
            array (
                'id' => '4357',
                'nome' => 'Castanheiras',
                'estado_id' => '21',
            ),
            357 => 
            array (
                'id' => '4358',
                'nome' => 'Cerejeiras',
                'estado_id' => '21',
            ),
            358 => 
            array (
                'id' => '4359',
                'nome' => 'Chupinguaia',
                'estado_id' => '21',
            ),
            359 => 
            array (
                'id' => '4360',
                'nome' => 'Colorado do Oeste',
                'estado_id' => '21',
            ),
            360 => 
            array (
                'id' => '4361',
                'nome' => 'Corumbiara',
                'estado_id' => '21',
            ),
            361 => 
            array (
                'id' => '4362',
                'nome' => 'Costa Marques',
                'estado_id' => '21',
            ),
            362 => 
            array (
                'id' => '4363',
                'nome' => 'Cujubim',
                'estado_id' => '21',
            ),
            363 => 
            array (
                'id' => '4364',
                'nome' => 'Espigão d`Oeste',
                'estado_id' => '21',
            ),
            364 => 
            array (
                'id' => '4365',
                'nome' => 'Governador Jorge Teixeira',
                'estado_id' => '21',
            ),
            365 => 
            array (
                'id' => '4366',
                'nome' => 'Guajará-Mirim',
                'estado_id' => '21',
            ),
            366 => 
            array (
                'id' => '4367',
                'nome' => 'Itapuã do Oeste',
                'estado_id' => '21',
            ),
            367 => 
            array (
                'id' => '4368',
                'nome' => 'Jaru',
                'estado_id' => '21',
            ),
            368 => 
            array (
                'id' => '4369',
                'nome' => 'Ji-Paraná',
                'estado_id' => '21',
            ),
            369 => 
            array (
                'id' => '4370',
                'nome' => 'Machadinho d`Oeste',
                'estado_id' => '21',
            ),
            370 => 
            array (
                'id' => '4371',
                'nome' => 'Ministro Andreazza',
                'estado_id' => '21',
            ),
            371 => 
            array (
                'id' => '4372',
                'nome' => 'Mirante da Serra',
                'estado_id' => '21',
            ),
            372 => 
            array (
                'id' => '4373',
                'nome' => 'Monte Negro',
                'estado_id' => '21',
            ),
            373 => 
            array (
                'id' => '4374',
                'nome' => 'Nova Brasilândia d`Oeste',
                'estado_id' => '21',
            ),
            374 => 
            array (
                'id' => '4375',
                'nome' => 'Nova Mamoré',
                'estado_id' => '21',
            ),
            375 => 
            array (
                'id' => '4376',
                'nome' => 'Nova União',
                'estado_id' => '21',
            ),
            376 => 
            array (
                'id' => '4377',
                'nome' => 'Novo Horizonte do Oeste',
                'estado_id' => '21',
            ),
            377 => 
            array (
                'id' => '4378',
                'nome' => 'Ouro Preto do Oeste',
                'estado_id' => '21',
            ),
            378 => 
            array (
                'id' => '4379',
                'nome' => 'Parecis',
                'estado_id' => '21',
            ),
            379 => 
            array (
                'id' => '4380',
                'nome' => 'Pimenta Bueno',
                'estado_id' => '21',
            ),
            380 => 
            array (
                'id' => '4381',
                'nome' => 'Pimenteiras do Oeste',
                'estado_id' => '21',
            ),
            381 => 
            array (
                'id' => '4382',
                'nome' => 'Porto Velho',
                'estado_id' => '21',
            ),
            382 => 
            array (
                'id' => '4383',
                'nome' => 'Presidente Médici',
                'estado_id' => '21',
            ),
            383 => 
            array (
                'id' => '4384',
                'nome' => 'Primavera de Rondônia',
                'estado_id' => '21',
            ),
            384 => 
            array (
                'id' => '4385',
                'nome' => 'Rio Crespo',
                'estado_id' => '21',
            ),
            385 => 
            array (
                'id' => '4386',
                'nome' => 'Rolim de Moura',
                'estado_id' => '21',
            ),
            386 => 
            array (
                'id' => '4387',
                'nome' => 'Santa Luzia d`Oeste',
                'estado_id' => '21',
            ),
            387 => 
            array (
                'id' => '4388',
                'nome' => 'São Felipe d`Oeste',
                'estado_id' => '21',
            ),
            388 => 
            array (
                'id' => '4389',
                'nome' => 'São Francisco do Guaporé',
                'estado_id' => '21',
            ),
            389 => 
            array (
                'id' => '4390',
                'nome' => 'São Miguel do Guaporé',
                'estado_id' => '21',
            ),
            390 => 
            array (
                'id' => '4391',
                'nome' => 'Seringueiras',
                'estado_id' => '21',
            ),
            391 => 
            array (
                'id' => '4392',
                'nome' => 'Teixeirópolis',
                'estado_id' => '21',
            ),
            392 => 
            array (
                'id' => '4393',
                'nome' => 'Theobroma',
                'estado_id' => '21',
            ),
            393 => 
            array (
                'id' => '4394',
                'nome' => 'Urupá',
                'estado_id' => '21',
            ),
            394 => 
            array (
                'id' => '4395',
                'nome' => 'Vale do Anari',
                'estado_id' => '21',
            ),
            395 => 
            array (
                'id' => '4396',
                'nome' => 'Vale do Paraíso',
                'estado_id' => '21',
            ),
            396 => 
            array (
                'id' => '4397',
                'nome' => 'Vilhena',
                'estado_id' => '21',
            ),
            397 => 
            array (
                'id' => '4398',
                'nome' => 'Alto Alegre',
                'estado_id' => '22',
            ),
            398 => 
            array (
                'id' => '4399',
                'nome' => 'Amajari',
                'estado_id' => '22',
            ),
            399 => 
            array (
                'id' => '4400',
                'nome' => 'Boa Vista',
                'estado_id' => '22',
            ),
            400 => 
            array (
                'id' => '4401',
                'nome' => 'Bonfim',
                'estado_id' => '22',
            ),
            401 => 
            array (
                'id' => '4402',
                'nome' => 'Cantá',
                'estado_id' => '22',
            ),
            402 => 
            array (
                'id' => '4403',
                'nome' => 'Caracaraí',
                'estado_id' => '22',
            ),
            403 => 
            array (
                'id' => '4404',
                'nome' => 'Caroebe',
                'estado_id' => '22',
            ),
            404 => 
            array (
                'id' => '4405',
                'nome' => 'Iracema',
                'estado_id' => '22',
            ),
            405 => 
            array (
                'id' => '4406',
                'nome' => 'Mucajaí',
                'estado_id' => '22',
            ),
            406 => 
            array (
                'id' => '4407',
                'nome' => 'Normandia',
                'estado_id' => '22',
            ),
            407 => 
            array (
                'id' => '4408',
                'nome' => 'Pacaraima',
                'estado_id' => '22',
            ),
            408 => 
            array (
                'id' => '4409',
                'nome' => 'Rorainópolis',
                'estado_id' => '22',
            ),
            409 => 
            array (
                'id' => '4410',
                'nome' => 'São João da Baliza',
                'estado_id' => '22',
            ),
            410 => 
            array (
                'id' => '4411',
                'nome' => 'São Luiz',
                'estado_id' => '22',
            ),
            411 => 
            array (
                'id' => '4412',
                'nome' => 'Uiramutã',
                'estado_id' => '22',
            ),
            412 => 
            array (
                'id' => '4413',
                'nome' => 'Abdon Batista',
                'estado_id' => '24',
            ),
            413 => 
            array (
                'id' => '4414',
                'nome' => 'Abelardo Luz',
                'estado_id' => '24',
            ),
            414 => 
            array (
                'id' => '4415',
                'nome' => 'Agrolândia',
                'estado_id' => '24',
            ),
            415 => 
            array (
                'id' => '4416',
                'nome' => 'Agronômica',
                'estado_id' => '24',
            ),
            416 => 
            array (
                'id' => '4417',
                'nome' => 'Água Doce',
                'estado_id' => '24',
            ),
            417 => 
            array (
                'id' => '4418',
                'nome' => 'Águas de Chapecó',
                'estado_id' => '24',
            ),
            418 => 
            array (
                'id' => '4419',
                'nome' => 'Águas Frias',
                'estado_id' => '24',
            ),
            419 => 
            array (
                'id' => '4420',
                'nome' => 'Águas Mornas',
                'estado_id' => '24',
            ),
            420 => 
            array (
                'id' => '4421',
                'nome' => 'Alfredo Wagner',
                'estado_id' => '24',
            ),
            421 => 
            array (
                'id' => '4422',
                'nome' => 'Alto Bela Vista',
                'estado_id' => '24',
            ),
            422 => 
            array (
                'id' => '4423',
                'nome' => 'Anchieta',
                'estado_id' => '24',
            ),
            423 => 
            array (
                'id' => '4424',
                'nome' => 'Angelina',
                'estado_id' => '24',
            ),
            424 => 
            array (
                'id' => '4425',
                'nome' => 'Anita Garibaldi',
                'estado_id' => '24',
            ),
            425 => 
            array (
                'id' => '4426',
                'nome' => 'Anitápolis',
                'estado_id' => '24',
            ),
            426 => 
            array (
                'id' => '4427',
                'nome' => 'Antônio Carlos',
                'estado_id' => '24',
            ),
            427 => 
            array (
                'id' => '4428',
                'nome' => 'Apiúna',
                'estado_id' => '24',
            ),
            428 => 
            array (
                'id' => '4429',
                'nome' => 'Arabutã',
                'estado_id' => '24',
            ),
            429 => 
            array (
                'id' => '4430',
                'nome' => 'Araquari',
                'estado_id' => '24',
            ),
            430 => 
            array (
                'id' => '4431',
                'nome' => 'Araranguá',
                'estado_id' => '24',
            ),
            431 => 
            array (
                'id' => '4432',
                'nome' => 'Armazém',
                'estado_id' => '24',
            ),
            432 => 
            array (
                'id' => '4433',
                'nome' => 'Arroio Trinta',
                'estado_id' => '24',
            ),
            433 => 
            array (
                'id' => '4434',
                'nome' => 'Arvoredo',
                'estado_id' => '24',
            ),
            434 => 
            array (
                'id' => '4435',
                'nome' => 'Ascurra',
                'estado_id' => '24',
            ),
            435 => 
            array (
                'id' => '4436',
                'nome' => 'Atalanta',
                'estado_id' => '24',
            ),
            436 => 
            array (
                'id' => '4437',
                'nome' => 'Aurora',
                'estado_id' => '24',
            ),
            437 => 
            array (
                'id' => '4438',
                'nome' => 'Balneário Arroio do Silva',
                'estado_id' => '24',
            ),
            438 => 
            array (
                'id' => '4439',
                'nome' => 'Balneário Barra do Sul',
                'estado_id' => '24',
            ),
            439 => 
            array (
                'id' => '4440',
                'nome' => 'Balneário Camboriú',
                'estado_id' => '24',
            ),
            440 => 
            array (
                'id' => '4441',
                'nome' => 'Balneário Gaivota',
                'estado_id' => '24',
            ),
            441 => 
            array (
                'id' => '4442',
                'nome' => 'Bandeirante',
                'estado_id' => '24',
            ),
            442 => 
            array (
                'id' => '4443',
                'nome' => 'Barra Bonita',
                'estado_id' => '24',
            ),
            443 => 
            array (
                'id' => '4444',
                'nome' => 'Barra Velha',
                'estado_id' => '24',
            ),
            444 => 
            array (
                'id' => '4445',
                'nome' => 'Bela Vista do Toldo',
                'estado_id' => '24',
            ),
            445 => 
            array (
                'id' => '4446',
                'nome' => 'Belmonte',
                'estado_id' => '24',
            ),
            446 => 
            array (
                'id' => '4447',
                'nome' => 'Benedito Novo',
                'estado_id' => '24',
            ),
            447 => 
            array (
                'id' => '4448',
                'nome' => 'Biguaçu',
                'estado_id' => '24',
            ),
            448 => 
            array (
                'id' => '4449',
                'nome' => 'Blumenau',
                'estado_id' => '24',
            ),
            449 => 
            array (
                'id' => '4450',
                'nome' => 'Bocaina do Sul',
                'estado_id' => '24',
            ),
            450 => 
            array (
                'id' => '4451',
                'nome' => 'Bom Jardim da Serra',
                'estado_id' => '24',
            ),
            451 => 
            array (
                'id' => '4452',
                'nome' => 'Bom Jesus',
                'estado_id' => '24',
            ),
            452 => 
            array (
                'id' => '4453',
                'nome' => 'Bom Jesus do Oeste',
                'estado_id' => '24',
            ),
            453 => 
            array (
                'id' => '4454',
                'nome' => 'Bom Retiro',
                'estado_id' => '24',
            ),
            454 => 
            array (
                'id' => '4455',
                'nome' => 'Bombinhas',
                'estado_id' => '24',
            ),
            455 => 
            array (
                'id' => '4456',
                'nome' => 'Botuverá',
                'estado_id' => '24',
            ),
            456 => 
            array (
                'id' => '4457',
                'nome' => 'Braço do Norte',
                'estado_id' => '24',
            ),
            457 => 
            array (
                'id' => '4458',
                'nome' => 'Braço do Trombudo',
                'estado_id' => '24',
            ),
            458 => 
            array (
                'id' => '4459',
                'nome' => 'Brunópolis',
                'estado_id' => '24',
            ),
            459 => 
            array (
                'id' => '4460',
                'nome' => 'Brusque',
                'estado_id' => '24',
            ),
            460 => 
            array (
                'id' => '4461',
                'nome' => 'Caçador',
                'estado_id' => '24',
            ),
            461 => 
            array (
                'id' => '4462',
                'nome' => 'Caibi',
                'estado_id' => '24',
            ),
            462 => 
            array (
                'id' => '4463',
                'nome' => 'Calmon',
                'estado_id' => '24',
            ),
            463 => 
            array (
                'id' => '4464',
                'nome' => 'Camboriú',
                'estado_id' => '24',
            ),
            464 => 
            array (
                'id' => '4465',
                'nome' => 'Campo Alegre',
                'estado_id' => '24',
            ),
            465 => 
            array (
                'id' => '4466',
                'nome' => 'Campo Belo do Sul',
                'estado_id' => '24',
            ),
            466 => 
            array (
                'id' => '4467',
                'nome' => 'Campo Erê',
                'estado_id' => '24',
            ),
            467 => 
            array (
                'id' => '4468',
                'nome' => 'Campos Novos',
                'estado_id' => '24',
            ),
            468 => 
            array (
                'id' => '4469',
                'nome' => 'Canelinha',
                'estado_id' => '24',
            ),
            469 => 
            array (
                'id' => '4470',
                'nome' => 'Canoinhas',
                'estado_id' => '24',
            ),
            470 => 
            array (
                'id' => '4471',
                'nome' => 'Capão Alto',
                'estado_id' => '24',
            ),
            471 => 
            array (
                'id' => '4472',
                'nome' => 'Capinzal',
                'estado_id' => '24',
            ),
            472 => 
            array (
                'id' => '4473',
                'nome' => 'Capivari de Baixo',
                'estado_id' => '24',
            ),
            473 => 
            array (
                'id' => '4474',
                'nome' => 'Catanduvas',
                'estado_id' => '24',
            ),
            474 => 
            array (
                'id' => '4475',
                'nome' => 'Caxambu do Sul',
                'estado_id' => '24',
            ),
            475 => 
            array (
                'id' => '4476',
                'nome' => 'Celso Ramos',
                'estado_id' => '24',
            ),
            476 => 
            array (
                'id' => '4477',
                'nome' => 'Cerro Negro',
                'estado_id' => '24',
            ),
            477 => 
            array (
                'id' => '4478',
                'nome' => 'Chapadão do Lageado',
                'estado_id' => '24',
            ),
            478 => 
            array (
                'id' => '4479',
                'nome' => 'Chapecó',
                'estado_id' => '24',
            ),
            479 => 
            array (
                'id' => '4480',
                'nome' => 'Cocal do Sul',
                'estado_id' => '24',
            ),
            480 => 
            array (
                'id' => '4481',
                'nome' => 'Concórdia',
                'estado_id' => '24',
            ),
            481 => 
            array (
                'id' => '4482',
                'nome' => 'Cordilheira Alta',
                'estado_id' => '24',
            ),
            482 => 
            array (
                'id' => '4483',
                'nome' => 'Coronel Freitas',
                'estado_id' => '24',
            ),
            483 => 
            array (
                'id' => '4484',
                'nome' => 'Coronel Martins',
                'estado_id' => '24',
            ),
            484 => 
            array (
                'id' => '4485',
                'nome' => 'Correia Pinto',
                'estado_id' => '24',
            ),
            485 => 
            array (
                'id' => '4486',
                'nome' => 'Corupá',
                'estado_id' => '24',
            ),
            486 => 
            array (
                'id' => '4487',
                'nome' => 'Criciúma',
                'estado_id' => '24',
            ),
            487 => 
            array (
                'id' => '4488',
                'nome' => 'Cunha Porã',
                'estado_id' => '24',
            ),
            488 => 
            array (
                'id' => '4489',
                'nome' => 'Cunhataí',
                'estado_id' => '24',
            ),
            489 => 
            array (
                'id' => '4490',
                'nome' => 'Curitibanos',
                'estado_id' => '24',
            ),
            490 => 
            array (
                'id' => '4491',
                'nome' => 'Descanso',
                'estado_id' => '24',
            ),
            491 => 
            array (
                'id' => '4492',
                'nome' => 'Dionísio Cerqueira',
                'estado_id' => '24',
            ),
            492 => 
            array (
                'id' => '4493',
                'nome' => 'Dona Emma',
                'estado_id' => '24',
            ),
            493 => 
            array (
                'id' => '4494',
                'nome' => 'Doutor Pedrinho',
                'estado_id' => '24',
            ),
            494 => 
            array (
                'id' => '4495',
                'nome' => 'Entre Rios',
                'estado_id' => '24',
            ),
            495 => 
            array (
                'id' => '4496',
                'nome' => 'Ermo',
                'estado_id' => '24',
            ),
            496 => 
            array (
                'id' => '4497',
                'nome' => 'Erval Velho',
                'estado_id' => '24',
            ),
            497 => 
            array (
                'id' => '4498',
                'nome' => 'Faxinal dos Guedes',
                'estado_id' => '24',
            ),
            498 => 
            array (
                'id' => '4499',
                'nome' => 'Flor do Sertão',
                'estado_id' => '24',
            ),
            499 => 
            array (
                'id' => '4500',
                'nome' => 'Florianópolis',
                'estado_id' => '24',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '4501',
                'nome' => 'Formosa do Sul',
                'estado_id' => '24',
            ),
            1 => 
            array (
                'id' => '4502',
                'nome' => 'Forquilhinha',
                'estado_id' => '24',
            ),
            2 => 
            array (
                'id' => '4503',
                'nome' => 'Fraiburgo',
                'estado_id' => '24',
            ),
            3 => 
            array (
                'id' => '4504',
                'nome' => 'Frei Rogério',
                'estado_id' => '24',
            ),
            4 => 
            array (
                'id' => '4505',
                'nome' => 'Galvão',
                'estado_id' => '24',
            ),
            5 => 
            array (
                'id' => '4506',
                'nome' => 'Garopaba',
                'estado_id' => '24',
            ),
            6 => 
            array (
                'id' => '4507',
                'nome' => 'Garuva',
                'estado_id' => '24',
            ),
            7 => 
            array (
                'id' => '4508',
                'nome' => 'Gaspar',
                'estado_id' => '24',
            ),
            8 => 
            array (
                'id' => '4509',
                'nome' => 'Governador Celso Ramos',
                'estado_id' => '24',
            ),
            9 => 
            array (
                'id' => '4510',
                'nome' => 'Grão Pará',
                'estado_id' => '24',
            ),
            10 => 
            array (
                'id' => '4511',
                'nome' => 'Gravatal',
                'estado_id' => '24',
            ),
            11 => 
            array (
                'id' => '4512',
                'nome' => 'Guabiruba',
                'estado_id' => '24',
            ),
            12 => 
            array (
                'id' => '4513',
                'nome' => 'Guaraciaba',
                'estado_id' => '24',
            ),
            13 => 
            array (
                'id' => '4514',
                'nome' => 'Guaramirim',
                'estado_id' => '24',
            ),
            14 => 
            array (
                'id' => '4515',
                'nome' => 'Guarujá do Sul',
                'estado_id' => '24',
            ),
            15 => 
            array (
                'id' => '4516',
                'nome' => 'Guatambú',
                'estado_id' => '24',
            ),
            16 => 
            array (
                'id' => '4517',
                'nome' => 'Herval d`Oeste',
                'estado_id' => '24',
            ),
            17 => 
            array (
                'id' => '4518',
                'nome' => 'Ibiam',
                'estado_id' => '24',
            ),
            18 => 
            array (
                'id' => '4519',
                'nome' => 'Ibicaré',
                'estado_id' => '24',
            ),
            19 => 
            array (
                'id' => '4520',
                'nome' => 'Ibirama',
                'estado_id' => '24',
            ),
            20 => 
            array (
                'id' => '4521',
                'nome' => 'Içara',
                'estado_id' => '24',
            ),
            21 => 
            array (
                'id' => '4522',
                'nome' => 'Ilhota',
                'estado_id' => '24',
            ),
            22 => 
            array (
                'id' => '4523',
                'nome' => 'Imaruí',
                'estado_id' => '24',
            ),
            23 => 
            array (
                'id' => '4524',
                'nome' => 'Imbituba',
                'estado_id' => '24',
            ),
            24 => 
            array (
                'id' => '4525',
                'nome' => 'Imbuia',
                'estado_id' => '24',
            ),
            25 => 
            array (
                'id' => '4526',
                'nome' => 'Indaial',
                'estado_id' => '24',
            ),
            26 => 
            array (
                'id' => '4527',
                'nome' => 'Iomerê',
                'estado_id' => '24',
            ),
            27 => 
            array (
                'id' => '4528',
                'nome' => 'Ipira',
                'estado_id' => '24',
            ),
            28 => 
            array (
                'id' => '4529',
                'nome' => 'Iporã do Oeste',
                'estado_id' => '24',
            ),
            29 => 
            array (
                'id' => '4530',
                'nome' => 'Ipuaçu',
                'estado_id' => '24',
            ),
            30 => 
            array (
                'id' => '4531',
                'nome' => 'Ipumirim',
                'estado_id' => '24',
            ),
            31 => 
            array (
                'id' => '4532',
                'nome' => 'Iraceminha',
                'estado_id' => '24',
            ),
            32 => 
            array (
                'id' => '4533',
                'nome' => 'Irani',
                'estado_id' => '24',
            ),
            33 => 
            array (
                'id' => '4534',
                'nome' => 'Irati',
                'estado_id' => '24',
            ),
            34 => 
            array (
                'id' => '4535',
                'nome' => 'Irineópolis',
                'estado_id' => '24',
            ),
            35 => 
            array (
                'id' => '4536',
                'nome' => 'Itá',
                'estado_id' => '24',
            ),
            36 => 
            array (
                'id' => '4537',
                'nome' => 'Itaiópolis',
                'estado_id' => '24',
            ),
            37 => 
            array (
                'id' => '4538',
                'nome' => 'Itajaí',
                'estado_id' => '24',
            ),
            38 => 
            array (
                'id' => '4539',
                'nome' => 'Itapema',
                'estado_id' => '24',
            ),
            39 => 
            array (
                'id' => '4540',
                'nome' => 'Itapiranga',
                'estado_id' => '24',
            ),
            40 => 
            array (
                'id' => '4541',
                'nome' => 'Itapoá',
                'estado_id' => '24',
            ),
            41 => 
            array (
                'id' => '4542',
                'nome' => 'Ituporanga',
                'estado_id' => '24',
            ),
            42 => 
            array (
                'id' => '4543',
                'nome' => 'Jaborá',
                'estado_id' => '24',
            ),
            43 => 
            array (
                'id' => '4544',
                'nome' => 'Jacinto Machado',
                'estado_id' => '24',
            ),
            44 => 
            array (
                'id' => '4545',
                'nome' => 'Jaguaruna',
                'estado_id' => '24',
            ),
            45 => 
            array (
                'id' => '4546',
                'nome' => 'Jaraguá do Sul',
                'estado_id' => '24',
            ),
            46 => 
            array (
                'id' => '4547',
                'nome' => 'Jardinópolis',
                'estado_id' => '24',
            ),
            47 => 
            array (
                'id' => '4548',
                'nome' => 'Joaçaba',
                'estado_id' => '24',
            ),
            48 => 
            array (
                'id' => '4549',
                'nome' => 'Joinville',
                'estado_id' => '24',
            ),
            49 => 
            array (
                'id' => '4550',
                'nome' => 'José Boiteux',
                'estado_id' => '24',
            ),
            50 => 
            array (
                'id' => '4551',
                'nome' => 'Jupiá',
                'estado_id' => '24',
            ),
            51 => 
            array (
                'id' => '4552',
                'nome' => 'Lacerdópolis',
                'estado_id' => '24',
            ),
            52 => 
            array (
                'id' => '4553',
                'nome' => 'Lages',
                'estado_id' => '24',
            ),
            53 => 
            array (
                'id' => '4554',
                'nome' => 'Laguna',
                'estado_id' => '24',
            ),
            54 => 
            array (
                'id' => '4555',
                'nome' => 'Lajeado Grande',
                'estado_id' => '24',
            ),
            55 => 
            array (
                'id' => '4556',
                'nome' => 'Laurentino',
                'estado_id' => '24',
            ),
            56 => 
            array (
                'id' => '4557',
                'nome' => 'Lauro Muller',
                'estado_id' => '24',
            ),
            57 => 
            array (
                'id' => '4558',
                'nome' => 'Lebon Régis',
                'estado_id' => '24',
            ),
            58 => 
            array (
                'id' => '4559',
                'nome' => 'Leoberto Leal',
                'estado_id' => '24',
            ),
            59 => 
            array (
                'id' => '4560',
                'nome' => 'Lindóia do Sul',
                'estado_id' => '24',
            ),
            60 => 
            array (
                'id' => '4561',
                'nome' => 'Lontras',
                'estado_id' => '24',
            ),
            61 => 
            array (
                'id' => '4562',
                'nome' => 'Luiz Alves',
                'estado_id' => '24',
            ),
            62 => 
            array (
                'id' => '4563',
                'nome' => 'Luzerna',
                'estado_id' => '24',
            ),
            63 => 
            array (
                'id' => '4564',
                'nome' => 'Macieira',
                'estado_id' => '24',
            ),
            64 => 
            array (
                'id' => '4565',
                'nome' => 'Mafra',
                'estado_id' => '24',
            ),
            65 => 
            array (
                'id' => '4566',
                'nome' => 'Major Gercino',
                'estado_id' => '24',
            ),
            66 => 
            array (
                'id' => '4567',
                'nome' => 'Major Vieira',
                'estado_id' => '24',
            ),
            67 => 
            array (
                'id' => '4568',
                'nome' => 'Maracajá',
                'estado_id' => '24',
            ),
            68 => 
            array (
                'id' => '4569',
                'nome' => 'Maravilha',
                'estado_id' => '24',
            ),
            69 => 
            array (
                'id' => '4570',
                'nome' => 'Marema',
                'estado_id' => '24',
            ),
            70 => 
            array (
                'id' => '4571',
                'nome' => 'Massaranduba',
                'estado_id' => '24',
            ),
            71 => 
            array (
                'id' => '4572',
                'nome' => 'Matos Costa',
                'estado_id' => '24',
            ),
            72 => 
            array (
                'id' => '4573',
                'nome' => 'Meleiro',
                'estado_id' => '24',
            ),
            73 => 
            array (
                'id' => '4574',
                'nome' => 'Mirim Doce',
                'estado_id' => '24',
            ),
            74 => 
            array (
                'id' => '4575',
                'nome' => 'Modelo',
                'estado_id' => '24',
            ),
            75 => 
            array (
                'id' => '4576',
                'nome' => 'Mondaí',
                'estado_id' => '24',
            ),
            76 => 
            array (
                'id' => '4577',
                'nome' => 'Monte Carlo',
                'estado_id' => '24',
            ),
            77 => 
            array (
                'id' => '4578',
                'nome' => 'Monte Castelo',
                'estado_id' => '24',
            ),
            78 => 
            array (
                'id' => '4579',
                'nome' => 'Morro da Fumaça',
                'estado_id' => '24',
            ),
            79 => 
            array (
                'id' => '4580',
                'nome' => 'Morro Grande',
                'estado_id' => '24',
            ),
            80 => 
            array (
                'id' => '4581',
                'nome' => 'Navegantes',
                'estado_id' => '24',
            ),
            81 => 
            array (
                'id' => '4582',
                'nome' => 'Nova Erechim',
                'estado_id' => '24',
            ),
            82 => 
            array (
                'id' => '4583',
                'nome' => 'Nova Itaberaba',
                'estado_id' => '24',
            ),
            83 => 
            array (
                'id' => '4584',
                'nome' => 'Nova Trento',
                'estado_id' => '24',
            ),
            84 => 
            array (
                'id' => '4585',
                'nome' => 'Nova Veneza',
                'estado_id' => '24',
            ),
            85 => 
            array (
                'id' => '4586',
                'nome' => 'Novo Horizonte',
                'estado_id' => '24',
            ),
            86 => 
            array (
                'id' => '4587',
                'nome' => 'Orleans',
                'estado_id' => '24',
            ),
            87 => 
            array (
                'id' => '4588',
                'nome' => 'Otacílio Costa',
                'estado_id' => '24',
            ),
            88 => 
            array (
                'id' => '4589',
                'nome' => 'Ouro',
                'estado_id' => '24',
            ),
            89 => 
            array (
                'id' => '4590',
                'nome' => 'Ouro Verde',
                'estado_id' => '24',
            ),
            90 => 
            array (
                'id' => '4591',
                'nome' => 'Paial',
                'estado_id' => '24',
            ),
            91 => 
            array (
                'id' => '4592',
                'nome' => 'Painel',
                'estado_id' => '24',
            ),
            92 => 
            array (
                'id' => '4593',
                'nome' => 'Palhoça',
                'estado_id' => '24',
            ),
            93 => 
            array (
                'id' => '4594',
                'nome' => 'Palma Sola',
                'estado_id' => '24',
            ),
            94 => 
            array (
                'id' => '4595',
                'nome' => 'Palmeira',
                'estado_id' => '24',
            ),
            95 => 
            array (
                'id' => '4596',
                'nome' => 'Palmitos',
                'estado_id' => '24',
            ),
            96 => 
            array (
                'id' => '4597',
                'nome' => 'Papanduva',
                'estado_id' => '24',
            ),
            97 => 
            array (
                'id' => '4598',
                'nome' => 'Paraíso',
                'estado_id' => '24',
            ),
            98 => 
            array (
                'id' => '4599',
                'nome' => 'Passo de Torres',
                'estado_id' => '24',
            ),
            99 => 
            array (
                'id' => '4600',
                'nome' => 'Passos Maia',
                'estado_id' => '24',
            ),
            100 => 
            array (
                'id' => '4601',
                'nome' => 'Paulo Lopes',
                'estado_id' => '24',
            ),
            101 => 
            array (
                'id' => '4602',
                'nome' => 'Pedras Grandes',
                'estado_id' => '24',
            ),
            102 => 
            array (
                'id' => '4603',
                'nome' => 'Penha',
                'estado_id' => '24',
            ),
            103 => 
            array (
                'id' => '4604',
                'nome' => 'Peritiba',
                'estado_id' => '24',
            ),
            104 => 
            array (
                'id' => '4605',
                'nome' => 'Petrolândia',
                'estado_id' => '24',
            ),
            105 => 
            array (
                'id' => '4606',
                'nome' => 'Piçarras',
                'estado_id' => '24',
            ),
            106 => 
            array (
                'id' => '4607',
                'nome' => 'Pinhalzinho',
                'estado_id' => '24',
            ),
            107 => 
            array (
                'id' => '4608',
                'nome' => 'Pinheiro Preto',
                'estado_id' => '24',
            ),
            108 => 
            array (
                'id' => '4609',
                'nome' => 'Piratuba',
                'estado_id' => '24',
            ),
            109 => 
            array (
                'id' => '4610',
                'nome' => 'Planalto Alegre',
                'estado_id' => '24',
            ),
            110 => 
            array (
                'id' => '4611',
                'nome' => 'Pomerode',
                'estado_id' => '24',
            ),
            111 => 
            array (
                'id' => '4612',
                'nome' => 'Ponte Alta',
                'estado_id' => '24',
            ),
            112 => 
            array (
                'id' => '4613',
                'nome' => 'Ponte Alta do Norte',
                'estado_id' => '24',
            ),
            113 => 
            array (
                'id' => '4614',
                'nome' => 'Ponte Serrada',
                'estado_id' => '24',
            ),
            114 => 
            array (
                'id' => '4615',
                'nome' => 'Porto Belo',
                'estado_id' => '24',
            ),
            115 => 
            array (
                'id' => '4616',
                'nome' => 'Porto União',
                'estado_id' => '24',
            ),
            116 => 
            array (
                'id' => '4617',
                'nome' => 'Pouso Redondo',
                'estado_id' => '24',
            ),
            117 => 
            array (
                'id' => '4618',
                'nome' => 'Praia Grande',
                'estado_id' => '24',
            ),
            118 => 
            array (
                'id' => '4619',
                'nome' => 'Presidente Castelo Branco',
                'estado_id' => '24',
            ),
            119 => 
            array (
                'id' => '4620',
                'nome' => 'Presidente Getúlio',
                'estado_id' => '24',
            ),
            120 => 
            array (
                'id' => '4621',
                'nome' => 'Presidente Nereu',
                'estado_id' => '24',
            ),
            121 => 
            array (
                'id' => '4622',
                'nome' => 'Princesa',
                'estado_id' => '24',
            ),
            122 => 
            array (
                'id' => '4623',
                'nome' => 'Quilombo',
                'estado_id' => '24',
            ),
            123 => 
            array (
                'id' => '4624',
                'nome' => 'Rancho Queimado',
                'estado_id' => '24',
            ),
            124 => 
            array (
                'id' => '4625',
                'nome' => 'Rio das Antas',
                'estado_id' => '24',
            ),
            125 => 
            array (
                'id' => '4626',
                'nome' => 'Rio do Campo',
                'estado_id' => '24',
            ),
            126 => 
            array (
                'id' => '4627',
                'nome' => 'Rio do Oeste',
                'estado_id' => '24',
            ),
            127 => 
            array (
                'id' => '4628',
                'nome' => 'Rio do Sul',
                'estado_id' => '24',
            ),
            128 => 
            array (
                'id' => '4629',
                'nome' => 'Rio dos Cedros',
                'estado_id' => '24',
            ),
            129 => 
            array (
                'id' => '4630',
                'nome' => 'Rio Fortuna',
                'estado_id' => '24',
            ),
            130 => 
            array (
                'id' => '4631',
                'nome' => 'Rio Negrinho',
                'estado_id' => '24',
            ),
            131 => 
            array (
                'id' => '4632',
                'nome' => 'Rio Rufino',
                'estado_id' => '24',
            ),
            132 => 
            array (
                'id' => '4633',
                'nome' => 'Riqueza',
                'estado_id' => '24',
            ),
            133 => 
            array (
                'id' => '4634',
                'nome' => 'Rodeio',
                'estado_id' => '24',
            ),
            134 => 
            array (
                'id' => '4635',
                'nome' => 'Romelândia',
                'estado_id' => '24',
            ),
            135 => 
            array (
                'id' => '4636',
                'nome' => 'Salete',
                'estado_id' => '24',
            ),
            136 => 
            array (
                'id' => '4637',
                'nome' => 'Saltinho',
                'estado_id' => '24',
            ),
            137 => 
            array (
                'id' => '4638',
                'nome' => 'Salto Veloso',
                'estado_id' => '24',
            ),
            138 => 
            array (
                'id' => '4639',
                'nome' => 'Sangão',
                'estado_id' => '24',
            ),
            139 => 
            array (
                'id' => '4640',
                'nome' => 'Santa Cecília',
                'estado_id' => '24',
            ),
            140 => 
            array (
                'id' => '4641',
                'nome' => 'Santa Helena',
                'estado_id' => '24',
            ),
            141 => 
            array (
                'id' => '4642',
                'nome' => 'Santa Rosa de Lima',
                'estado_id' => '24',
            ),
            142 => 
            array (
                'id' => '4643',
                'nome' => 'Santa Rosa do Sul',
                'estado_id' => '24',
            ),
            143 => 
            array (
                'id' => '4644',
                'nome' => 'Santa Terezinha',
                'estado_id' => '24',
            ),
            144 => 
            array (
                'id' => '4645',
                'nome' => 'Santa Terezinha do Progresso',
                'estado_id' => '24',
            ),
            145 => 
            array (
                'id' => '4646',
                'nome' => 'Santiago do Sul',
                'estado_id' => '24',
            ),
            146 => 
            array (
                'id' => '4647',
                'nome' => 'Santo Amaro da Imperatriz',
                'estado_id' => '24',
            ),
            147 => 
            array (
                'id' => '4648',
                'nome' => 'São Bento do Sul',
                'estado_id' => '24',
            ),
            148 => 
            array (
                'id' => '4649',
                'nome' => 'São Bernardino',
                'estado_id' => '24',
            ),
            149 => 
            array (
                'id' => '4650',
                'nome' => 'São Bonifácio',
                'estado_id' => '24',
            ),
            150 => 
            array (
                'id' => '4651',
                'nome' => 'São Carlos',
                'estado_id' => '24',
            ),
            151 => 
            array (
                'id' => '4652',
                'nome' => 'São Cristovão do Sul',
                'estado_id' => '24',
            ),
            152 => 
            array (
                'id' => '4653',
                'nome' => 'São Domingos',
                'estado_id' => '24',
            ),
            153 => 
            array (
                'id' => '4654',
                'nome' => 'São Francisco do Sul',
                'estado_id' => '24',
            ),
            154 => 
            array (
                'id' => '4655',
                'nome' => 'São João Batista',
                'estado_id' => '24',
            ),
            155 => 
            array (
                'id' => '4656',
                'nome' => 'São João do Itaperiú',
                'estado_id' => '24',
            ),
            156 => 
            array (
                'id' => '4657',
                'nome' => 'São João do Oeste',
                'estado_id' => '24',
            ),
            157 => 
            array (
                'id' => '4658',
                'nome' => 'São João do Sul',
                'estado_id' => '24',
            ),
            158 => 
            array (
                'id' => '4659',
                'nome' => 'São Joaquim',
                'estado_id' => '24',
            ),
            159 => 
            array (
                'id' => '4660',
                'nome' => 'São José',
                'estado_id' => '24',
            ),
            160 => 
            array (
                'id' => '4661',
                'nome' => 'São José do Cedro',
                'estado_id' => '24',
            ),
            161 => 
            array (
                'id' => '4662',
                'nome' => 'São José do Cerrito',
                'estado_id' => '24',
            ),
            162 => 
            array (
                'id' => '4663',
                'nome' => 'São Lourenço do Oeste',
                'estado_id' => '24',
            ),
            163 => 
            array (
                'id' => '4664',
                'nome' => 'São Ludgero',
                'estado_id' => '24',
            ),
            164 => 
            array (
                'id' => '4665',
                'nome' => 'São Martinho',
                'estado_id' => '24',
            ),
            165 => 
            array (
                'id' => '4666',
                'nome' => 'São Miguel da Boa Vista',
                'estado_id' => '24',
            ),
            166 => 
            array (
                'id' => '4667',
                'nome' => 'São Miguel do Oeste',
                'estado_id' => '24',
            ),
            167 => 
            array (
                'id' => '4668',
                'nome' => 'São Pedro de Alcântara',
                'estado_id' => '24',
            ),
            168 => 
            array (
                'id' => '4669',
                'nome' => 'Saudades',
                'estado_id' => '24',
            ),
            169 => 
            array (
                'id' => '4670',
                'nome' => 'Schroeder',
                'estado_id' => '24',
            ),
            170 => 
            array (
                'id' => '4671',
                'nome' => 'Seara',
                'estado_id' => '24',
            ),
            171 => 
            array (
                'id' => '4672',
                'nome' => 'Serra Alta',
                'estado_id' => '24',
            ),
            172 => 
            array (
                'id' => '4673',
                'nome' => 'Siderópolis',
                'estado_id' => '24',
            ),
            173 => 
            array (
                'id' => '4674',
                'nome' => 'Sombrio',
                'estado_id' => '24',
            ),
            174 => 
            array (
                'id' => '4675',
                'nome' => 'Sul Brasil',
                'estado_id' => '24',
            ),
            175 => 
            array (
                'id' => '4676',
                'nome' => 'Taió',
                'estado_id' => '24',
            ),
            176 => 
            array (
                'id' => '4677',
                'nome' => 'Tangará',
                'estado_id' => '24',
            ),
            177 => 
            array (
                'id' => '4678',
                'nome' => 'Tigrinhos',
                'estado_id' => '24',
            ),
            178 => 
            array (
                'id' => '4679',
                'nome' => 'Tijucas',
                'estado_id' => '24',
            ),
            179 => 
            array (
                'id' => '4680',
                'nome' => 'Timbé do Sul',
                'estado_id' => '24',
            ),
            180 => 
            array (
                'id' => '4681',
                'nome' => 'Timbó',
                'estado_id' => '24',
            ),
            181 => 
            array (
                'id' => '4682',
                'nome' => 'Timbó Grande',
                'estado_id' => '24',
            ),
            182 => 
            array (
                'id' => '4683',
                'nome' => 'Três Barras',
                'estado_id' => '24',
            ),
            183 => 
            array (
                'id' => '4684',
                'nome' => 'Treviso',
                'estado_id' => '24',
            ),
            184 => 
            array (
                'id' => '4685',
                'nome' => 'Treze de Maio',
                'estado_id' => '24',
            ),
            185 => 
            array (
                'id' => '4686',
                'nome' => 'Treze Tílias',
                'estado_id' => '24',
            ),
            186 => 
            array (
                'id' => '4687',
                'nome' => 'Trombudo Central',
                'estado_id' => '24',
            ),
            187 => 
            array (
                'id' => '4688',
                'nome' => 'Tubarão',
                'estado_id' => '24',
            ),
            188 => 
            array (
                'id' => '4689',
                'nome' => 'Tunápolis',
                'estado_id' => '24',
            ),
            189 => 
            array (
                'id' => '4690',
                'nome' => 'Turvo',
                'estado_id' => '24',
            ),
            190 => 
            array (
                'id' => '4691',
                'nome' => 'União do Oeste',
                'estado_id' => '24',
            ),
            191 => 
            array (
                'id' => '4692',
                'nome' => 'Urubici',
                'estado_id' => '24',
            ),
            192 => 
            array (
                'id' => '4693',
                'nome' => 'Urupema',
                'estado_id' => '24',
            ),
            193 => 
            array (
                'id' => '4694',
                'nome' => 'Urussanga',
                'estado_id' => '24',
            ),
            194 => 
            array (
                'id' => '4695',
                'nome' => 'Vargeão',
                'estado_id' => '24',
            ),
            195 => 
            array (
                'id' => '4696',
                'nome' => 'Vargem',
                'estado_id' => '24',
            ),
            196 => 
            array (
                'id' => '4697',
                'nome' => 'Vargem Bonita',
                'estado_id' => '24',
            ),
            197 => 
            array (
                'id' => '4698',
                'nome' => 'Vidal Ramos',
                'estado_id' => '24',
            ),
            198 => 
            array (
                'id' => '4699',
                'nome' => 'Videira',
                'estado_id' => '24',
            ),
            199 => 
            array (
                'id' => '4700',
                'nome' => 'Vitor Meireles',
                'estado_id' => '24',
            ),
            200 => 
            array (
                'id' => '4701',
                'nome' => 'Witmarsum',
                'estado_id' => '24',
            ),
            201 => 
            array (
                'id' => '4702',
                'nome' => 'Xanxerê',
                'estado_id' => '24',
            ),
            202 => 
            array (
                'id' => '4703',
                'nome' => 'Xavantina',
                'estado_id' => '24',
            ),
            203 => 
            array (
                'id' => '4704',
                'nome' => 'Xaxim',
                'estado_id' => '24',
            ),
            204 => 
            array (
                'id' => '4705',
                'nome' => 'Zortéa',
                'estado_id' => '24',
            ),
            205 => 
            array (
                'id' => '4706',
                'nome' => 'Adamantina',
                'estado_id' => '26',
            ),
            206 => 
            array (
                'id' => '4707',
                'nome' => 'Adolfo',
                'estado_id' => '26',
            ),
            207 => 
            array (
                'id' => '4708',
                'nome' => 'Aguaí',
                'estado_id' => '26',
            ),
            208 => 
            array (
                'id' => '4709',
                'nome' => 'Águas da Prata',
                'estado_id' => '26',
            ),
            209 => 
            array (
                'id' => '4710',
                'nome' => 'Águas de Lindóia',
                'estado_id' => '26',
            ),
            210 => 
            array (
                'id' => '4711',
                'nome' => 'Águas de Santa Bárbara',
                'estado_id' => '26',
            ),
            211 => 
            array (
                'id' => '4712',
                'nome' => 'Águas de São Pedro',
                'estado_id' => '26',
            ),
            212 => 
            array (
                'id' => '4713',
                'nome' => 'Agudos',
                'estado_id' => '26',
            ),
            213 => 
            array (
                'id' => '4714',
                'nome' => 'Alambari',
                'estado_id' => '26',
            ),
            214 => 
            array (
                'id' => '4715',
                'nome' => 'Alfredo Marcondes',
                'estado_id' => '26',
            ),
            215 => 
            array (
                'id' => '4716',
                'nome' => 'Altair',
                'estado_id' => '26',
            ),
            216 => 
            array (
                'id' => '4717',
                'nome' => 'Altinópolis',
                'estado_id' => '26',
            ),
            217 => 
            array (
                'id' => '4718',
                'nome' => 'Alto Alegre',
                'estado_id' => '26',
            ),
            218 => 
            array (
                'id' => '4719',
                'nome' => 'Alumínio',
                'estado_id' => '26',
            ),
            219 => 
            array (
                'id' => '4720',
                'nome' => 'Álvares Florence',
                'estado_id' => '26',
            ),
            220 => 
            array (
                'id' => '4721',
                'nome' => 'Álvares Machado',
                'estado_id' => '26',
            ),
            221 => 
            array (
                'id' => '4722',
                'nome' => 'Álvaro de Carvalho',
                'estado_id' => '26',
            ),
            222 => 
            array (
                'id' => '4723',
                'nome' => 'Alvinlândia',
                'estado_id' => '26',
            ),
            223 => 
            array (
                'id' => '4724',
                'nome' => 'Americana',
                'estado_id' => '26',
            ),
            224 => 
            array (
                'id' => '4725',
                'nome' => 'Américo Brasiliense',
                'estado_id' => '26',
            ),
            225 => 
            array (
                'id' => '4726',
                'nome' => 'Américo de Campos',
                'estado_id' => '26',
            ),
            226 => 
            array (
                'id' => '4727',
                'nome' => 'Amparo',
                'estado_id' => '26',
            ),
            227 => 
            array (
                'id' => '4728',
                'nome' => 'Analândia',
                'estado_id' => '26',
            ),
            228 => 
            array (
                'id' => '4729',
                'nome' => 'Andradina',
                'estado_id' => '26',
            ),
            229 => 
            array (
                'id' => '4730',
                'nome' => 'Angatuba',
                'estado_id' => '26',
            ),
            230 => 
            array (
                'id' => '4731',
                'nome' => 'Anhembi',
                'estado_id' => '26',
            ),
            231 => 
            array (
                'id' => '4732',
                'nome' => 'Anhumas',
                'estado_id' => '26',
            ),
            232 => 
            array (
                'id' => '4733',
                'nome' => 'Aparecida',
                'estado_id' => '26',
            ),
            233 => 
            array (
                'id' => '4734',
                'nome' => 'Aparecida d`Oeste',
                'estado_id' => '26',
            ),
            234 => 
            array (
                'id' => '4735',
                'nome' => 'Apiaí',
                'estado_id' => '26',
            ),
            235 => 
            array (
                'id' => '4736',
                'nome' => 'Araçariguama',
                'estado_id' => '26',
            ),
            236 => 
            array (
                'id' => '4737',
                'nome' => 'Araçatuba',
                'estado_id' => '26',
            ),
            237 => 
            array (
                'id' => '4738',
                'nome' => 'Araçoiaba da Serra',
                'estado_id' => '26',
            ),
            238 => 
            array (
                'id' => '4739',
                'nome' => 'Aramina',
                'estado_id' => '26',
            ),
            239 => 
            array (
                'id' => '4740',
                'nome' => 'Arandu',
                'estado_id' => '26',
            ),
            240 => 
            array (
                'id' => '4741',
                'nome' => 'Arapeí',
                'estado_id' => '26',
            ),
            241 => 
            array (
                'id' => '4742',
                'nome' => 'Araraquara',
                'estado_id' => '26',
            ),
            242 => 
            array (
                'id' => '4743',
                'nome' => 'Araras',
                'estado_id' => '26',
            ),
            243 => 
            array (
                'id' => '4744',
                'nome' => 'Arco-Íris',
                'estado_id' => '26',
            ),
            244 => 
            array (
                'id' => '4745',
                'nome' => 'Arealva',
                'estado_id' => '26',
            ),
            245 => 
            array (
                'id' => '4746',
                'nome' => 'Areias',
                'estado_id' => '26',
            ),
            246 => 
            array (
                'id' => '4747',
                'nome' => 'Areiópolis',
                'estado_id' => '26',
            ),
            247 => 
            array (
                'id' => '4748',
                'nome' => 'Ariranha',
                'estado_id' => '26',
            ),
            248 => 
            array (
                'id' => '4749',
                'nome' => 'Artur Nogueira',
                'estado_id' => '26',
            ),
            249 => 
            array (
                'id' => '4750',
                'nome' => 'Arujá',
                'estado_id' => '26',
            ),
            250 => 
            array (
                'id' => '4751',
                'nome' => 'Aspásia',
                'estado_id' => '26',
            ),
            251 => 
            array (
                'id' => '4752',
                'nome' => 'Assis',
                'estado_id' => '26',
            ),
            252 => 
            array (
                'id' => '4753',
                'nome' => 'Atibaia',
                'estado_id' => '26',
            ),
            253 => 
            array (
                'id' => '4754',
                'nome' => 'Auriflama',
                'estado_id' => '26',
            ),
            254 => 
            array (
                'id' => '4755',
                'nome' => 'Avaí',
                'estado_id' => '26',
            ),
            255 => 
            array (
                'id' => '4756',
                'nome' => 'Avanhandava',
                'estado_id' => '26',
            ),
            256 => 
            array (
                'id' => '4757',
                'nome' => 'Avaré',
                'estado_id' => '26',
            ),
            257 => 
            array (
                'id' => '4758',
                'nome' => 'Bady Bassitt',
                'estado_id' => '26',
            ),
            258 => 
            array (
                'id' => '4759',
                'nome' => 'Balbinos',
                'estado_id' => '26',
            ),
            259 => 
            array (
                'id' => '4760',
                'nome' => 'Bálsamo',
                'estado_id' => '26',
            ),
            260 => 
            array (
                'id' => '4761',
                'nome' => 'Bananal',
                'estado_id' => '26',
            ),
            261 => 
            array (
                'id' => '4762',
                'nome' => 'Barão de Antonina',
                'estado_id' => '26',
            ),
            262 => 
            array (
                'id' => '4763',
                'nome' => 'Barbosa',
                'estado_id' => '26',
            ),
            263 => 
            array (
                'id' => '4764',
                'nome' => 'Bariri',
                'estado_id' => '26',
            ),
            264 => 
            array (
                'id' => '4765',
                'nome' => 'Barra Bonita',
                'estado_id' => '26',
            ),
            265 => 
            array (
                'id' => '4766',
                'nome' => 'Barra do Chapéu',
                'estado_id' => '26',
            ),
            266 => 
            array (
                'id' => '4767',
                'nome' => 'Barra do Turvo',
                'estado_id' => '26',
            ),
            267 => 
            array (
                'id' => '4768',
                'nome' => 'Barretos',
                'estado_id' => '26',
            ),
            268 => 
            array (
                'id' => '4769',
                'nome' => 'Barrinha',
                'estado_id' => '26',
            ),
            269 => 
            array (
                'id' => '4770',
                'nome' => 'Barueri',
                'estado_id' => '26',
            ),
            270 => 
            array (
                'id' => '4771',
                'nome' => 'Bastos',
                'estado_id' => '26',
            ),
            271 => 
            array (
                'id' => '4772',
                'nome' => 'Batatais',
                'estado_id' => '26',
            ),
            272 => 
            array (
                'id' => '4773',
                'nome' => 'Bauru',
                'estado_id' => '26',
            ),
            273 => 
            array (
                'id' => '4774',
                'nome' => 'Bebedouro',
                'estado_id' => '26',
            ),
            274 => 
            array (
                'id' => '4775',
                'nome' => 'Bento de Abreu',
                'estado_id' => '26',
            ),
            275 => 
            array (
                'id' => '4776',
                'nome' => 'Bernardino de Campos',
                'estado_id' => '26',
            ),
            276 => 
            array (
                'id' => '4777',
                'nome' => 'Bertioga',
                'estado_id' => '26',
            ),
            277 => 
            array (
                'id' => '4778',
                'nome' => 'Bilac',
                'estado_id' => '26',
            ),
            278 => 
            array (
                'id' => '4779',
                'nome' => 'Birigui',
                'estado_id' => '26',
            ),
            279 => 
            array (
                'id' => '4780',
                'nome' => 'Biritiba-Mirim',
                'estado_id' => '26',
            ),
            280 => 
            array (
                'id' => '4781',
                'nome' => 'Boa Esperança do Sul',
                'estado_id' => '26',
            ),
            281 => 
            array (
                'id' => '4782',
                'nome' => 'Bocaina',
                'estado_id' => '26',
            ),
            282 => 
            array (
                'id' => '4783',
                'nome' => 'Bofete',
                'estado_id' => '26',
            ),
            283 => 
            array (
                'id' => '4784',
                'nome' => 'Boituva',
                'estado_id' => '26',
            ),
            284 => 
            array (
                'id' => '4785',
                'nome' => 'Bom Jesus dos Perdões',
                'estado_id' => '26',
            ),
            285 => 
            array (
                'id' => '4786',
                'nome' => 'Bom Sucesso de Itararé',
                'estado_id' => '26',
            ),
            286 => 
            array (
                'id' => '4787',
                'nome' => 'Borá',
                'estado_id' => '26',
            ),
            287 => 
            array (
                'id' => '4788',
                'nome' => 'Boracéia',
                'estado_id' => '26',
            ),
            288 => 
            array (
                'id' => '4789',
                'nome' => 'Borborema',
                'estado_id' => '26',
            ),
            289 => 
            array (
                'id' => '4790',
                'nome' => 'Borebi',
                'estado_id' => '26',
            ),
            290 => 
            array (
                'id' => '4791',
                'nome' => 'Botucatu',
                'estado_id' => '26',
            ),
            291 => 
            array (
                'id' => '4792',
                'nome' => 'Bragança Paulista',
                'estado_id' => '26',
            ),
            292 => 
            array (
                'id' => '4793',
                'nome' => 'Braúna',
                'estado_id' => '26',
            ),
            293 => 
            array (
                'id' => '4794',
                'nome' => 'Brejo Alegre',
                'estado_id' => '26',
            ),
            294 => 
            array (
                'id' => '4795',
                'nome' => 'Brodowski',
                'estado_id' => '26',
            ),
            295 => 
            array (
                'id' => '4796',
                'nome' => 'Brotas',
                'estado_id' => '26',
            ),
            296 => 
            array (
                'id' => '4797',
                'nome' => 'Buri',
                'estado_id' => '26',
            ),
            297 => 
            array (
                'id' => '4798',
                'nome' => 'Buritama',
                'estado_id' => '26',
            ),
            298 => 
            array (
                'id' => '4799',
                'nome' => 'Buritizal',
                'estado_id' => '26',
            ),
            299 => 
            array (
                'id' => '4800',
                'nome' => 'Cabrália Paulista',
                'estado_id' => '26',
            ),
            300 => 
            array (
                'id' => '4801',
                'nome' => 'Cabreúva',
                'estado_id' => '26',
            ),
            301 => 
            array (
                'id' => '4802',
                'nome' => 'Caçapava',
                'estado_id' => '26',
            ),
            302 => 
            array (
                'id' => '4803',
                'nome' => 'Cachoeira Paulista',
                'estado_id' => '26',
            ),
            303 => 
            array (
                'id' => '4804',
                'nome' => 'Caconde',
                'estado_id' => '26',
            ),
            304 => 
            array (
                'id' => '4805',
                'nome' => 'Cafelândia',
                'estado_id' => '26',
            ),
            305 => 
            array (
                'id' => '4806',
                'nome' => 'Caiabu',
                'estado_id' => '26',
            ),
            306 => 
            array (
                'id' => '4807',
                'nome' => 'Caieiras',
                'estado_id' => '26',
            ),
            307 => 
            array (
                'id' => '4808',
                'nome' => 'Caiuá',
                'estado_id' => '26',
            ),
            308 => 
            array (
                'id' => '4809',
                'nome' => 'Cajamar',
                'estado_id' => '26',
            ),
            309 => 
            array (
                'id' => '4810',
                'nome' => 'Cajati',
                'estado_id' => '26',
            ),
            310 => 
            array (
                'id' => '4811',
                'nome' => 'Cajobi',
                'estado_id' => '26',
            ),
            311 => 
            array (
                'id' => '4812',
                'nome' => 'Cajuru',
                'estado_id' => '26',
            ),
            312 => 
            array (
                'id' => '4813',
                'nome' => 'Campina do Monte Alegre',
                'estado_id' => '26',
            ),
            313 => 
            array (
                'id' => '4814',
                'nome' => 'Campinas',
                'estado_id' => '26',
            ),
            314 => 
            array (
                'id' => '4815',
                'nome' => 'Campo Limpo Paulista',
                'estado_id' => '26',
            ),
            315 => 
            array (
                'id' => '4816',
                'nome' => 'Campos do Jordão',
                'estado_id' => '26',
            ),
            316 => 
            array (
                'id' => '4817',
                'nome' => 'Campos Novos Paulista',
                'estado_id' => '26',
            ),
            317 => 
            array (
                'id' => '4818',
                'nome' => 'Cananéia',
                'estado_id' => '26',
            ),
            318 => 
            array (
                'id' => '4819',
                'nome' => 'Canas',
                'estado_id' => '26',
            ),
            319 => 
            array (
                'id' => '4820',
                'nome' => 'Cândido Mota',
                'estado_id' => '26',
            ),
            320 => 
            array (
                'id' => '4821',
                'nome' => 'Cândido Rodrigues',
                'estado_id' => '26',
            ),
            321 => 
            array (
                'id' => '4822',
                'nome' => 'Canitar',
                'estado_id' => '26',
            ),
            322 => 
            array (
                'id' => '4823',
                'nome' => 'Capão Bonito',
                'estado_id' => '26',
            ),
            323 => 
            array (
                'id' => '4824',
                'nome' => 'Capela do Alto',
                'estado_id' => '26',
            ),
            324 => 
            array (
                'id' => '4825',
                'nome' => 'Capivari',
                'estado_id' => '26',
            ),
            325 => 
            array (
                'id' => '4826',
                'nome' => 'Caraguatatuba',
                'estado_id' => '26',
            ),
            326 => 
            array (
                'id' => '4827',
                'nome' => 'Carapicuíba',
                'estado_id' => '26',
            ),
            327 => 
            array (
                'id' => '4828',
                'nome' => 'Cardoso',
                'estado_id' => '26',
            ),
            328 => 
            array (
                'id' => '4829',
                'nome' => 'Casa Branca',
                'estado_id' => '26',
            ),
            329 => 
            array (
                'id' => '4830',
                'nome' => 'Cássia dos Coqueiros',
                'estado_id' => '26',
            ),
            330 => 
            array (
                'id' => '4831',
                'nome' => 'Castilho',
                'estado_id' => '26',
            ),
            331 => 
            array (
                'id' => '4832',
                'nome' => 'Catanduva',
                'estado_id' => '26',
            ),
            332 => 
            array (
                'id' => '4833',
                'nome' => 'Catiguá',
                'estado_id' => '26',
            ),
            333 => 
            array (
                'id' => '4834',
                'nome' => 'Cedral',
                'estado_id' => '26',
            ),
            334 => 
            array (
                'id' => '4835',
                'nome' => 'Cerqueira César',
                'estado_id' => '26',
            ),
            335 => 
            array (
                'id' => '4836',
                'nome' => 'Cerquilho',
                'estado_id' => '26',
            ),
            336 => 
            array (
                'id' => '4837',
                'nome' => 'Cesário Lange',
                'estado_id' => '26',
            ),
            337 => 
            array (
                'id' => '4838',
                'nome' => 'Charqueada',
                'estado_id' => '26',
            ),
            338 => 
            array (
                'id' => '4839',
                'nome' => 'Chavantes',
                'estado_id' => '26',
            ),
            339 => 
            array (
                'id' => '4840',
                'nome' => 'Clementina',
                'estado_id' => '26',
            ),
            340 => 
            array (
                'id' => '4841',
                'nome' => 'Colina',
                'estado_id' => '26',
            ),
            341 => 
            array (
                'id' => '4842',
                'nome' => 'Colômbia',
                'estado_id' => '26',
            ),
            342 => 
            array (
                'id' => '4843',
                'nome' => 'Conchal',
                'estado_id' => '26',
            ),
            343 => 
            array (
                'id' => '4844',
                'nome' => 'Conchas',
                'estado_id' => '26',
            ),
            344 => 
            array (
                'id' => '4845',
                'nome' => 'Cordeirópolis',
                'estado_id' => '26',
            ),
            345 => 
            array (
                'id' => '4846',
                'nome' => 'Coroados',
                'estado_id' => '26',
            ),
            346 => 
            array (
                'id' => '4847',
                'nome' => 'Coronel Macedo',
                'estado_id' => '26',
            ),
            347 => 
            array (
                'id' => '4848',
                'nome' => 'Corumbataí',
                'estado_id' => '26',
            ),
            348 => 
            array (
                'id' => '4849',
                'nome' => 'Cosmópolis',
                'estado_id' => '26',
            ),
            349 => 
            array (
                'id' => '4850',
                'nome' => 'Cosmorama',
                'estado_id' => '26',
            ),
            350 => 
            array (
                'id' => '4851',
                'nome' => 'Cotia',
                'estado_id' => '26',
            ),
            351 => 
            array (
                'id' => '4852',
                'nome' => 'Cravinhos',
                'estado_id' => '26',
            ),
            352 => 
            array (
                'id' => '4853',
                'nome' => 'Cristais Paulista',
                'estado_id' => '26',
            ),
            353 => 
            array (
                'id' => '4854',
                'nome' => 'Cruzália',
                'estado_id' => '26',
            ),
            354 => 
            array (
                'id' => '4855',
                'nome' => 'Cruzeiro',
                'estado_id' => '26',
            ),
            355 => 
            array (
                'id' => '4856',
                'nome' => 'Cubatão',
                'estado_id' => '26',
            ),
            356 => 
            array (
                'id' => '4857',
                'nome' => 'Cunha',
                'estado_id' => '26',
            ),
            357 => 
            array (
                'id' => '4858',
                'nome' => 'Descalvado',
                'estado_id' => '26',
            ),
            358 => 
            array (
                'id' => '4859',
                'nome' => 'Diadema',
                'estado_id' => '26',
            ),
            359 => 
            array (
                'id' => '4860',
                'nome' => 'Dirce Reis',
                'estado_id' => '26',
            ),
            360 => 
            array (
                'id' => '4861',
                'nome' => 'Divinolândia',
                'estado_id' => '26',
            ),
            361 => 
            array (
                'id' => '4862',
                'nome' => 'Dobrada',
                'estado_id' => '26',
            ),
            362 => 
            array (
                'id' => '4863',
                'nome' => 'Dois Córregos',
                'estado_id' => '26',
            ),
            363 => 
            array (
                'id' => '4864',
                'nome' => 'Dolcinópolis',
                'estado_id' => '26',
            ),
            364 => 
            array (
                'id' => '4865',
                'nome' => 'Dourado',
                'estado_id' => '26',
            ),
            365 => 
            array (
                'id' => '4866',
                'nome' => 'Dracena',
                'estado_id' => '26',
            ),
            366 => 
            array (
                'id' => '4867',
                'nome' => 'Duartina',
                'estado_id' => '26',
            ),
            367 => 
            array (
                'id' => '4868',
                'nome' => 'Dumont',
                'estado_id' => '26',
            ),
            368 => 
            array (
                'id' => '4869',
                'nome' => 'Echaporã',
                'estado_id' => '26',
            ),
            369 => 
            array (
                'id' => '4870',
                'nome' => 'Eldorado',
                'estado_id' => '26',
            ),
            370 => 
            array (
                'id' => '4871',
                'nome' => 'Elias Fausto',
                'estado_id' => '26',
            ),
            371 => 
            array (
                'id' => '4872',
                'nome' => 'Elisiário',
                'estado_id' => '26',
            ),
            372 => 
            array (
                'id' => '4873',
                'nome' => 'Embaúba',
                'estado_id' => '26',
            ),
            373 => 
            array (
                'id' => '4874',
                'nome' => 'Embu',
                'estado_id' => '26',
            ),
            374 => 
            array (
                'id' => '4875',
                'nome' => 'Embu-Guaçu',
                'estado_id' => '26',
            ),
            375 => 
            array (
                'id' => '4876',
                'nome' => 'Emilianópolis',
                'estado_id' => '26',
            ),
            376 => 
            array (
                'id' => '4877',
                'nome' => 'Engenheiro Coelho',
                'estado_id' => '26',
            ),
            377 => 
            array (
                'id' => '4878',
                'nome' => 'Espírito Santo do Pinhal',
                'estado_id' => '26',
            ),
            378 => 
            array (
                'id' => '4879',
                'nome' => 'Espírito Santo do Turvo',
                'estado_id' => '26',
            ),
            379 => 
            array (
                'id' => '4880',
                'nome' => 'Estiva Gerbi',
                'estado_id' => '26',
            ),
            380 => 
            array (
                'id' => '4881',
                'nome' => 'Estrela d`Oeste',
                'estado_id' => '26',
            ),
            381 => 
            array (
                'id' => '4882',
                'nome' => 'Estrela do Norte',
                'estado_id' => '26',
            ),
            382 => 
            array (
                'id' => '4883',
                'nome' => 'Euclides da Cunha Paulista',
                'estado_id' => '26',
            ),
            383 => 
            array (
                'id' => '4884',
                'nome' => 'Fartura',
                'estado_id' => '26',
            ),
            384 => 
            array (
                'id' => '4885',
                'nome' => 'Fernando Prestes',
                'estado_id' => '26',
            ),
            385 => 
            array (
                'id' => '4886',
                'nome' => 'Fernandópolis',
                'estado_id' => '26',
            ),
            386 => 
            array (
                'id' => '4887',
                'nome' => 'Fernão',
                'estado_id' => '26',
            ),
            387 => 
            array (
                'id' => '4888',
                'nome' => 'Ferraz de Vasconcelos',
                'estado_id' => '26',
            ),
            388 => 
            array (
                'id' => '4889',
                'nome' => 'Flora Rica',
                'estado_id' => '26',
            ),
            389 => 
            array (
                'id' => '4890',
                'nome' => 'Floreal',
                'estado_id' => '26',
            ),
            390 => 
            array (
                'id' => '4891',
                'nome' => 'Flórida Paulista',
                'estado_id' => '26',
            ),
            391 => 
            array (
                'id' => '4892',
                'nome' => 'Florínia',
                'estado_id' => '26',
            ),
            392 => 
            array (
                'id' => '4893',
                'nome' => 'Franca',
                'estado_id' => '26',
            ),
            393 => 
            array (
                'id' => '4894',
                'nome' => 'Francisco Morato',
                'estado_id' => '26',
            ),
            394 => 
            array (
                'id' => '4895',
                'nome' => 'Franco da Rocha',
                'estado_id' => '26',
            ),
            395 => 
            array (
                'id' => '4896',
                'nome' => 'Gabriel Monteiro',
                'estado_id' => '26',
            ),
            396 => 
            array (
                'id' => '4897',
                'nome' => 'Gália',
                'estado_id' => '26',
            ),
            397 => 
            array (
                'id' => '4898',
                'nome' => 'Garça',
                'estado_id' => '26',
            ),
            398 => 
            array (
                'id' => '4899',
                'nome' => 'Gastão Vidigal',
                'estado_id' => '26',
            ),
            399 => 
            array (
                'id' => '4900',
                'nome' => 'Gavião Peixoto',
                'estado_id' => '26',
            ),
            400 => 
            array (
                'id' => '4901',
                'nome' => 'General Salgado',
                'estado_id' => '26',
            ),
            401 => 
            array (
                'id' => '4902',
                'nome' => 'Getulina',
                'estado_id' => '26',
            ),
            402 => 
            array (
                'id' => '4903',
                'nome' => 'Glicério',
                'estado_id' => '26',
            ),
            403 => 
            array (
                'id' => '4904',
                'nome' => 'Guaiçara',
                'estado_id' => '26',
            ),
            404 => 
            array (
                'id' => '4905',
                'nome' => 'Guaimbê',
                'estado_id' => '26',
            ),
            405 => 
            array (
                'id' => '4906',
                'nome' => 'Guaíra',
                'estado_id' => '26',
            ),
            406 => 
            array (
                'id' => '4907',
                'nome' => 'Guapiaçu',
                'estado_id' => '26',
            ),
            407 => 
            array (
                'id' => '4908',
                'nome' => 'Guapiara',
                'estado_id' => '26',
            ),
            408 => 
            array (
                'id' => '4909',
                'nome' => 'Guará',
                'estado_id' => '26',
            ),
            409 => 
            array (
                'id' => '4910',
                'nome' => 'Guaraçaí',
                'estado_id' => '26',
            ),
            410 => 
            array (
                'id' => '4911',
                'nome' => 'Guaraci',
                'estado_id' => '26',
            ),
            411 => 
            array (
                'id' => '4912',
                'nome' => 'Guarani d`Oeste',
                'estado_id' => '26',
            ),
            412 => 
            array (
                'id' => '4913',
                'nome' => 'Guarantã',
                'estado_id' => '26',
            ),
            413 => 
            array (
                'id' => '4914',
                'nome' => 'Guararapes',
                'estado_id' => '26',
            ),
            414 => 
            array (
                'id' => '4915',
                'nome' => 'Guararema',
                'estado_id' => '26',
            ),
            415 => 
            array (
                'id' => '4916',
                'nome' => 'Guaratinguetá',
                'estado_id' => '26',
            ),
            416 => 
            array (
                'id' => '4917',
                'nome' => 'Guareí',
                'estado_id' => '26',
            ),
            417 => 
            array (
                'id' => '4918',
                'nome' => 'Guariba',
                'estado_id' => '26',
            ),
            418 => 
            array (
                'id' => '4919',
                'nome' => 'Guarujá',
                'estado_id' => '26',
            ),
            419 => 
            array (
                'id' => '4920',
                'nome' => 'Guarulhos',
                'estado_id' => '26',
            ),
            420 => 
            array (
                'id' => '4921',
                'nome' => 'Guatapará',
                'estado_id' => '26',
            ),
            421 => 
            array (
                'id' => '4922',
                'nome' => 'Guzolândia',
                'estado_id' => '26',
            ),
            422 => 
            array (
                'id' => '4923',
                'nome' => 'Herculândia',
                'estado_id' => '26',
            ),
            423 => 
            array (
                'id' => '4924',
                'nome' => 'Holambra',
                'estado_id' => '26',
            ),
            424 => 
            array (
                'id' => '4925',
                'nome' => 'Hortolândia',
                'estado_id' => '26',
            ),
            425 => 
            array (
                'id' => '4926',
                'nome' => 'Iacanga',
                'estado_id' => '26',
            ),
            426 => 
            array (
                'id' => '4927',
                'nome' => 'Iacri',
                'estado_id' => '26',
            ),
            427 => 
            array (
                'id' => '4928',
                'nome' => 'Iaras',
                'estado_id' => '26',
            ),
            428 => 
            array (
                'id' => '4929',
                'nome' => 'Ibaté',
                'estado_id' => '26',
            ),
            429 => 
            array (
                'id' => '4930',
                'nome' => 'Ibirá',
                'estado_id' => '26',
            ),
            430 => 
            array (
                'id' => '4931',
                'nome' => 'Ibirarema',
                'estado_id' => '26',
            ),
            431 => 
            array (
                'id' => '4932',
                'nome' => 'Ibitinga',
                'estado_id' => '26',
            ),
            432 => 
            array (
                'id' => '4933',
                'nome' => 'Ibiúna',
                'estado_id' => '26',
            ),
            433 => 
            array (
                'id' => '4934',
                'nome' => 'Icém',
                'estado_id' => '26',
            ),
            434 => 
            array (
                'id' => '4935',
                'nome' => 'Iepê',
                'estado_id' => '26',
            ),
            435 => 
            array (
                'id' => '4936',
                'nome' => 'Igaraçu do Tietê',
                'estado_id' => '26',
            ),
            436 => 
            array (
                'id' => '4937',
                'nome' => 'Igarapava',
                'estado_id' => '26',
            ),
            437 => 
            array (
                'id' => '4938',
                'nome' => 'Igaratá',
                'estado_id' => '26',
            ),
            438 => 
            array (
                'id' => '4939',
                'nome' => 'Iguape',
                'estado_id' => '26',
            ),
            439 => 
            array (
                'id' => '4940',
                'nome' => 'Ilha Comprida',
                'estado_id' => '26',
            ),
            440 => 
            array (
                'id' => '4941',
                'nome' => 'Ilha Solteira',
                'estado_id' => '26',
            ),
            441 => 
            array (
                'id' => '4942',
                'nome' => 'Ilhabela',
                'estado_id' => '26',
            ),
            442 => 
            array (
                'id' => '4943',
                'nome' => 'Indaiatuba',
                'estado_id' => '26',
            ),
            443 => 
            array (
                'id' => '4944',
                'nome' => 'Indiana',
                'estado_id' => '26',
            ),
            444 => 
            array (
                'id' => '4945',
                'nome' => 'Indiaporã',
                'estado_id' => '26',
            ),
            445 => 
            array (
                'id' => '4946',
                'nome' => 'Inúbia Paulista',
                'estado_id' => '26',
            ),
            446 => 
            array (
                'id' => '4947',
                'nome' => 'Ipaussu',
                'estado_id' => '26',
            ),
            447 => 
            array (
                'id' => '4948',
                'nome' => 'Iperó',
                'estado_id' => '26',
            ),
            448 => 
            array (
                'id' => '4949',
                'nome' => 'Ipeúna',
                'estado_id' => '26',
            ),
            449 => 
            array (
                'id' => '4950',
                'nome' => 'Ipiguá',
                'estado_id' => '26',
            ),
            450 => 
            array (
                'id' => '4951',
                'nome' => 'Iporanga',
                'estado_id' => '26',
            ),
            451 => 
            array (
                'id' => '4952',
                'nome' => 'Ipuã',
                'estado_id' => '26',
            ),
            452 => 
            array (
                'id' => '4953',
                'nome' => 'Iracemápolis',
                'estado_id' => '26',
            ),
            453 => 
            array (
                'id' => '4954',
                'nome' => 'Irapuã',
                'estado_id' => '26',
            ),
            454 => 
            array (
                'id' => '4955',
                'nome' => 'Irapuru',
                'estado_id' => '26',
            ),
            455 => 
            array (
                'id' => '4956',
                'nome' => 'Itaberá',
                'estado_id' => '26',
            ),
            456 => 
            array (
                'id' => '4957',
                'nome' => 'Itaí',
                'estado_id' => '26',
            ),
            457 => 
            array (
                'id' => '4958',
                'nome' => 'Itajobi',
                'estado_id' => '26',
            ),
            458 => 
            array (
                'id' => '4959',
                'nome' => 'Itaju',
                'estado_id' => '26',
            ),
            459 => 
            array (
                'id' => '4960',
                'nome' => 'Itanhaém',
                'estado_id' => '26',
            ),
            460 => 
            array (
                'id' => '4961',
                'nome' => 'Itaóca',
                'estado_id' => '26',
            ),
            461 => 
            array (
                'id' => '4962',
                'nome' => 'Itapecerica da Serra',
                'estado_id' => '26',
            ),
            462 => 
            array (
                'id' => '4963',
                'nome' => 'Itapetininga',
                'estado_id' => '26',
            ),
            463 => 
            array (
                'id' => '4964',
                'nome' => 'Itapeva',
                'estado_id' => '26',
            ),
            464 => 
            array (
                'id' => '4965',
                'nome' => 'Itapevi',
                'estado_id' => '26',
            ),
            465 => 
            array (
                'id' => '4966',
                'nome' => 'Itapira',
                'estado_id' => '26',
            ),
            466 => 
            array (
                'id' => '4967',
                'nome' => 'Itapirapuã Paulista',
                'estado_id' => '26',
            ),
            467 => 
            array (
                'id' => '4968',
                'nome' => 'Itápolis',
                'estado_id' => '26',
            ),
            468 => 
            array (
                'id' => '4969',
                'nome' => 'Itaporanga',
                'estado_id' => '26',
            ),
            469 => 
            array (
                'id' => '4970',
                'nome' => 'Itapuí',
                'estado_id' => '26',
            ),
            470 => 
            array (
                'id' => '4971',
                'nome' => 'Itapura',
                'estado_id' => '26',
            ),
            471 => 
            array (
                'id' => '4972',
                'nome' => 'Itaquaquecetuba',
                'estado_id' => '26',
            ),
            472 => 
            array (
                'id' => '4973',
                'nome' => 'Itararé',
                'estado_id' => '26',
            ),
            473 => 
            array (
                'id' => '4974',
                'nome' => 'Itariri',
                'estado_id' => '26',
            ),
            474 => 
            array (
                'id' => '4975',
                'nome' => 'Itatiba',
                'estado_id' => '26',
            ),
            475 => 
            array (
                'id' => '4976',
                'nome' => 'Itatinga',
                'estado_id' => '26',
            ),
            476 => 
            array (
                'id' => '4977',
                'nome' => 'Itirapina',
                'estado_id' => '26',
            ),
            477 => 
            array (
                'id' => '4978',
                'nome' => 'Itirapuã',
                'estado_id' => '26',
            ),
            478 => 
            array (
                'id' => '4979',
                'nome' => 'Itobi',
                'estado_id' => '26',
            ),
            479 => 
            array (
                'id' => '4980',
                'nome' => 'Itu',
                'estado_id' => '26',
            ),
            480 => 
            array (
                'id' => '4981',
                'nome' => 'Itupeva',
                'estado_id' => '26',
            ),
            481 => 
            array (
                'id' => '4982',
                'nome' => 'Ituverava',
                'estado_id' => '26',
            ),
            482 => 
            array (
                'id' => '4983',
                'nome' => 'Jaborandi',
                'estado_id' => '26',
            ),
            483 => 
            array (
                'id' => '4984',
                'nome' => 'Jaboticabal',
                'estado_id' => '26',
            ),
            484 => 
            array (
                'id' => '4985',
                'nome' => 'Jacareí',
                'estado_id' => '26',
            ),
            485 => 
            array (
                'id' => '4986',
                'nome' => 'Jaci',
                'estado_id' => '26',
            ),
            486 => 
            array (
                'id' => '4987',
                'nome' => 'Jacupiranga',
                'estado_id' => '26',
            ),
            487 => 
            array (
                'id' => '4988',
                'nome' => 'Jaguariúna',
                'estado_id' => '26',
            ),
            488 => 
            array (
                'id' => '4989',
                'nome' => 'Jales',
                'estado_id' => '26',
            ),
            489 => 
            array (
                'id' => '4990',
                'nome' => 'Jambeiro',
                'estado_id' => '26',
            ),
            490 => 
            array (
                'id' => '4991',
                'nome' => 'Jandira',
                'estado_id' => '26',
            ),
            491 => 
            array (
                'id' => '4992',
                'nome' => 'Jardinópolis',
                'estado_id' => '26',
            ),
            492 => 
            array (
                'id' => '4993',
                'nome' => 'Jarinu',
                'estado_id' => '26',
            ),
            493 => 
            array (
                'id' => '4994',
                'nome' => 'Jaú',
                'estado_id' => '26',
            ),
            494 => 
            array (
                'id' => '4995',
                'nome' => 'Jeriquara',
                'estado_id' => '26',
            ),
            495 => 
            array (
                'id' => '4996',
                'nome' => 'Joanópolis',
                'estado_id' => '26',
            ),
            496 => 
            array (
                'id' => '4997',
                'nome' => 'João Ramalho',
                'estado_id' => '26',
            ),
            497 => 
            array (
                'id' => '4998',
                'nome' => 'José Bonifácio',
                'estado_id' => '26',
            ),
            498 => 
            array (
                'id' => '4999',
                'nome' => 'Júlio Mesquita',
                'estado_id' => '26',
            ),
            499 => 
            array (
                'id' => '5000',
                'nome' => 'Jumirim',
                'estado_id' => '26',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '5001',
                'nome' => 'Jundiaí',
                'estado_id' => '26',
            ),
            1 => 
            array (
                'id' => '5002',
                'nome' => 'Junqueirópolis',
                'estado_id' => '26',
            ),
            2 => 
            array (
                'id' => '5003',
                'nome' => 'Juquiá',
                'estado_id' => '26',
            ),
            3 => 
            array (
                'id' => '5004',
                'nome' => 'Juquitiba',
                'estado_id' => '26',
            ),
            4 => 
            array (
                'id' => '5005',
                'nome' => 'Lagoinha',
                'estado_id' => '26',
            ),
            5 => 
            array (
                'id' => '5006',
                'nome' => 'Laranjal Paulista',
                'estado_id' => '26',
            ),
            6 => 
            array (
                'id' => '5007',
                'nome' => 'Lavínia',
                'estado_id' => '26',
            ),
            7 => 
            array (
                'id' => '5008',
                'nome' => 'Lavrinhas',
                'estado_id' => '26',
            ),
            8 => 
            array (
                'id' => '5009',
                'nome' => 'Leme',
                'estado_id' => '26',
            ),
            9 => 
            array (
                'id' => '5010',
                'nome' => 'Lençóis Paulista',
                'estado_id' => '26',
            ),
            10 => 
            array (
                'id' => '5011',
                'nome' => 'Limeira',
                'estado_id' => '26',
            ),
            11 => 
            array (
                'id' => '5012',
                'nome' => 'Lindóia',
                'estado_id' => '26',
            ),
            12 => 
            array (
                'id' => '5013',
                'nome' => 'Lins',
                'estado_id' => '26',
            ),
            13 => 
            array (
                'id' => '5014',
                'nome' => 'Lorena',
                'estado_id' => '26',
            ),
            14 => 
            array (
                'id' => '5015',
                'nome' => 'Lourdes',
                'estado_id' => '26',
            ),
            15 => 
            array (
                'id' => '5016',
                'nome' => 'Louveira',
                'estado_id' => '26',
            ),
            16 => 
            array (
                'id' => '5017',
                'nome' => 'Lucélia',
                'estado_id' => '26',
            ),
            17 => 
            array (
                'id' => '5018',
                'nome' => 'Lucianópolis',
                'estado_id' => '26',
            ),
            18 => 
            array (
                'id' => '5019',
                'nome' => 'Luís Antônio',
                'estado_id' => '26',
            ),
            19 => 
            array (
                'id' => '5020',
                'nome' => 'Luiziânia',
                'estado_id' => '26',
            ),
            20 => 
            array (
                'id' => '5021',
                'nome' => 'Lupércio',
                'estado_id' => '26',
            ),
            21 => 
            array (
                'id' => '5022',
                'nome' => 'Lutécia',
                'estado_id' => '26',
            ),
            22 => 
            array (
                'id' => '5023',
                'nome' => 'Macatuba',
                'estado_id' => '26',
            ),
            23 => 
            array (
                'id' => '5024',
                'nome' => 'Macaubal',
                'estado_id' => '26',
            ),
            24 => 
            array (
                'id' => '5025',
                'nome' => 'Macedônia',
                'estado_id' => '26',
            ),
            25 => 
            array (
                'id' => '5026',
                'nome' => 'Magda',
                'estado_id' => '26',
            ),
            26 => 
            array (
                'id' => '5027',
                'nome' => 'Mairinque',
                'estado_id' => '26',
            ),
            27 => 
            array (
                'id' => '5028',
                'nome' => 'Mairiporã',
                'estado_id' => '26',
            ),
            28 => 
            array (
                'id' => '5029',
                'nome' => 'Manduri',
                'estado_id' => '26',
            ),
            29 => 
            array (
                'id' => '5030',
                'nome' => 'Marabá Paulista',
                'estado_id' => '26',
            ),
            30 => 
            array (
                'id' => '5031',
                'nome' => 'Maracaí',
                'estado_id' => '26',
            ),
            31 => 
            array (
                'id' => '5032',
                'nome' => 'Marapoama',
                'estado_id' => '26',
            ),
            32 => 
            array (
                'id' => '5033',
                'nome' => 'Mariápolis',
                'estado_id' => '26',
            ),
            33 => 
            array (
                'id' => '5034',
                'nome' => 'Marília',
                'estado_id' => '26',
            ),
            34 => 
            array (
                'id' => '5035',
                'nome' => 'Marinópolis',
                'estado_id' => '26',
            ),
            35 => 
            array (
                'id' => '5036',
                'nome' => 'Martinópolis',
                'estado_id' => '26',
            ),
            36 => 
            array (
                'id' => '5037',
                'nome' => 'Matão',
                'estado_id' => '26',
            ),
            37 => 
            array (
                'id' => '5038',
                'nome' => 'Mauá',
                'estado_id' => '26',
            ),
            38 => 
            array (
                'id' => '5039',
                'nome' => 'Mendonça',
                'estado_id' => '26',
            ),
            39 => 
            array (
                'id' => '5040',
                'nome' => 'Meridiano',
                'estado_id' => '26',
            ),
            40 => 
            array (
                'id' => '5041',
                'nome' => 'Mesópolis',
                'estado_id' => '26',
            ),
            41 => 
            array (
                'id' => '5042',
                'nome' => 'Miguelópolis',
                'estado_id' => '26',
            ),
            42 => 
            array (
                'id' => '5043',
                'nome' => 'Mineiros do Tietê',
                'estado_id' => '26',
            ),
            43 => 
            array (
                'id' => '5044',
                'nome' => 'Mira Estrela',
                'estado_id' => '26',
            ),
            44 => 
            array (
                'id' => '5045',
                'nome' => 'Miracatu',
                'estado_id' => '26',
            ),
            45 => 
            array (
                'id' => '5046',
                'nome' => 'Mirandópolis',
                'estado_id' => '26',
            ),
            46 => 
            array (
                'id' => '5047',
                'nome' => 'Mirante do Paranapanema',
                'estado_id' => '26',
            ),
            47 => 
            array (
                'id' => '5048',
                'nome' => 'Mirassol',
                'estado_id' => '26',
            ),
            48 => 
            array (
                'id' => '5049',
                'nome' => 'Mirassolândia',
                'estado_id' => '26',
            ),
            49 => 
            array (
                'id' => '5050',
                'nome' => 'Mococa',
                'estado_id' => '26',
            ),
            50 => 
            array (
                'id' => '5051',
                'nome' => 'Mogi das Cruzes',
                'estado_id' => '26',
            ),
            51 => 
            array (
                'id' => '5052',
                'nome' => 'Mogi Guaçu',
                'estado_id' => '26',
            ),
            52 => 
            array (
                'id' => '5053',
                'nome' => 'Moji Mirim',
                'estado_id' => '26',
            ),
            53 => 
            array (
                'id' => '5054',
                'nome' => 'Mombuca',
                'estado_id' => '26',
            ),
            54 => 
            array (
                'id' => '5055',
                'nome' => 'Monções',
                'estado_id' => '26',
            ),
            55 => 
            array (
                'id' => '5056',
                'nome' => 'Mongaguá',
                'estado_id' => '26',
            ),
            56 => 
            array (
                'id' => '5057',
                'nome' => 'Monte Alegre do Sul',
                'estado_id' => '26',
            ),
            57 => 
            array (
                'id' => '5058',
                'nome' => 'Monte Alto',
                'estado_id' => '26',
            ),
            58 => 
            array (
                'id' => '5059',
                'nome' => 'Monte Aprazível',
                'estado_id' => '26',
            ),
            59 => 
            array (
                'id' => '5060',
                'nome' => 'Monte Azul Paulista',
                'estado_id' => '26',
            ),
            60 => 
            array (
                'id' => '5061',
                'nome' => 'Monte Castelo',
                'estado_id' => '26',
            ),
            61 => 
            array (
                'id' => '5062',
                'nome' => 'Monte Mor',
                'estado_id' => '26',
            ),
            62 => 
            array (
                'id' => '5063',
                'nome' => 'Monteiro Lobato',
                'estado_id' => '26',
            ),
            63 => 
            array (
                'id' => '5064',
                'nome' => 'Morro Agudo',
                'estado_id' => '26',
            ),
            64 => 
            array (
                'id' => '5065',
                'nome' => 'Morungaba',
                'estado_id' => '26',
            ),
            65 => 
            array (
                'id' => '5066',
                'nome' => 'Motuca',
                'estado_id' => '26',
            ),
            66 => 
            array (
                'id' => '5067',
                'nome' => 'Murutinga do Sul',
                'estado_id' => '26',
            ),
            67 => 
            array (
                'id' => '5068',
                'nome' => 'Nantes',
                'estado_id' => '26',
            ),
            68 => 
            array (
                'id' => '5069',
                'nome' => 'Narandiba',
                'estado_id' => '26',
            ),
            69 => 
            array (
                'id' => '5070',
                'nome' => 'Natividade da Serra',
                'estado_id' => '26',
            ),
            70 => 
            array (
                'id' => '5071',
                'nome' => 'Nazaré Paulista',
                'estado_id' => '26',
            ),
            71 => 
            array (
                'id' => '5072',
                'nome' => 'Neves Paulista',
                'estado_id' => '26',
            ),
            72 => 
            array (
                'id' => '5073',
                'nome' => 'Nhandeara',
                'estado_id' => '26',
            ),
            73 => 
            array (
                'id' => '5074',
                'nome' => 'Nipoã',
                'estado_id' => '26',
            ),
            74 => 
            array (
                'id' => '5075',
                'nome' => 'Nova Aliança',
                'estado_id' => '26',
            ),
            75 => 
            array (
                'id' => '5076',
                'nome' => 'Nova Campina',
                'estado_id' => '26',
            ),
            76 => 
            array (
                'id' => '5077',
                'nome' => 'Nova Canaã Paulista',
                'estado_id' => '26',
            ),
            77 => 
            array (
                'id' => '5078',
                'nome' => 'Nova Castilho',
                'estado_id' => '26',
            ),
            78 => 
            array (
                'id' => '5079',
                'nome' => 'Nova Europa',
                'estado_id' => '26',
            ),
            79 => 
            array (
                'id' => '5080',
                'nome' => 'Nova Granada',
                'estado_id' => '26',
            ),
            80 => 
            array (
                'id' => '5081',
                'nome' => 'Nova Guataporanga',
                'estado_id' => '26',
            ),
            81 => 
            array (
                'id' => '5082',
                'nome' => 'Nova Independência',
                'estado_id' => '26',
            ),
            82 => 
            array (
                'id' => '5083',
                'nome' => 'Nova Luzitânia',
                'estado_id' => '26',
            ),
            83 => 
            array (
                'id' => '5084',
                'nome' => 'Nova Odessa',
                'estado_id' => '26',
            ),
            84 => 
            array (
                'id' => '5085',
                'nome' => 'Novais',
                'estado_id' => '26',
            ),
            85 => 
            array (
                'id' => '5086',
                'nome' => 'Novo Horizonte',
                'estado_id' => '26',
            ),
            86 => 
            array (
                'id' => '5087',
                'nome' => 'Nuporanga',
                'estado_id' => '26',
            ),
            87 => 
            array (
                'id' => '5088',
                'nome' => 'Ocauçu',
                'estado_id' => '26',
            ),
            88 => 
            array (
                'id' => '5089',
                'nome' => 'Óleo',
                'estado_id' => '26',
            ),
            89 => 
            array (
                'id' => '5090',
                'nome' => 'Olímpia',
                'estado_id' => '26',
            ),
            90 => 
            array (
                'id' => '5091',
                'nome' => 'Onda Verde',
                'estado_id' => '26',
            ),
            91 => 
            array (
                'id' => '5092',
                'nome' => 'Oriente',
                'estado_id' => '26',
            ),
            92 => 
            array (
                'id' => '5093',
                'nome' => 'Orindiúva',
                'estado_id' => '26',
            ),
            93 => 
            array (
                'id' => '5094',
                'nome' => 'Orlândia',
                'estado_id' => '26',
            ),
            94 => 
            array (
                'id' => '5095',
                'nome' => 'Osasco',
                'estado_id' => '26',
            ),
            95 => 
            array (
                'id' => '5096',
                'nome' => 'Oscar Bressane',
                'estado_id' => '26',
            ),
            96 => 
            array (
                'id' => '5097',
                'nome' => 'Osvaldo Cruz',
                'estado_id' => '26',
            ),
            97 => 
            array (
                'id' => '5098',
                'nome' => 'Ourinhos',
                'estado_id' => '26',
            ),
            98 => 
            array (
                'id' => '5099',
                'nome' => 'Ouro Verde',
                'estado_id' => '26',
            ),
            99 => 
            array (
                'id' => '5100',
                'nome' => 'Ouroeste',
                'estado_id' => '26',
            ),
            100 => 
            array (
                'id' => '5101',
                'nome' => 'Pacaembu',
                'estado_id' => '26',
            ),
            101 => 
            array (
                'id' => '5102',
                'nome' => 'Palestina',
                'estado_id' => '26',
            ),
            102 => 
            array (
                'id' => '5103',
                'nome' => 'Palmares Paulista',
                'estado_id' => '26',
            ),
            103 => 
            array (
                'id' => '5104',
                'nome' => 'Palmeira d`Oeste',
                'estado_id' => '26',
            ),
            104 => 
            array (
                'id' => '5105',
                'nome' => 'Palmital',
                'estado_id' => '26',
            ),
            105 => 
            array (
                'id' => '5106',
                'nome' => 'Panorama',
                'estado_id' => '26',
            ),
            106 => 
            array (
                'id' => '5107',
                'nome' => 'Paraguaçu Paulista',
                'estado_id' => '26',
            ),
            107 => 
            array (
                'id' => '5108',
                'nome' => 'Paraibuna',
                'estado_id' => '26',
            ),
            108 => 
            array (
                'id' => '5109',
                'nome' => 'Paraíso',
                'estado_id' => '26',
            ),
            109 => 
            array (
                'id' => '5110',
                'nome' => 'Paranapanema',
                'estado_id' => '26',
            ),
            110 => 
            array (
                'id' => '5111',
                'nome' => 'Paranapuã',
                'estado_id' => '26',
            ),
            111 => 
            array (
                'id' => '5112',
                'nome' => 'Parapuã',
                'estado_id' => '26',
            ),
            112 => 
            array (
                'id' => '5113',
                'nome' => 'Pardinho',
                'estado_id' => '26',
            ),
            113 => 
            array (
                'id' => '5114',
                'nome' => 'Pariquera-Açu',
                'estado_id' => '26',
            ),
            114 => 
            array (
                'id' => '5115',
                'nome' => 'Parisi',
                'estado_id' => '26',
            ),
            115 => 
            array (
                'id' => '5116',
                'nome' => 'Patrocínio Paulista',
                'estado_id' => '26',
            ),
            116 => 
            array (
                'id' => '5117',
                'nome' => 'Paulicéia',
                'estado_id' => '26',
            ),
            117 => 
            array (
                'id' => '5118',
                'nome' => 'Paulínia',
                'estado_id' => '26',
            ),
            118 => 
            array (
                'id' => '5119',
                'nome' => 'Paulistânia',
                'estado_id' => '26',
            ),
            119 => 
            array (
                'id' => '5120',
                'nome' => 'Paulo de Faria',
                'estado_id' => '26',
            ),
            120 => 
            array (
                'id' => '5121',
                'nome' => 'Pederneiras',
                'estado_id' => '26',
            ),
            121 => 
            array (
                'id' => '5122',
                'nome' => 'Pedra Bela',
                'estado_id' => '26',
            ),
            122 => 
            array (
                'id' => '5123',
                'nome' => 'Pedranópolis',
                'estado_id' => '26',
            ),
            123 => 
            array (
                'id' => '5124',
                'nome' => 'Pedregulho',
                'estado_id' => '26',
            ),
            124 => 
            array (
                'id' => '5125',
                'nome' => 'Pedreira',
                'estado_id' => '26',
            ),
            125 => 
            array (
                'id' => '5126',
                'nome' => 'Pedrinhas Paulista',
                'estado_id' => '26',
            ),
            126 => 
            array (
                'id' => '5127',
                'nome' => 'Pedro de Toledo',
                'estado_id' => '26',
            ),
            127 => 
            array (
                'id' => '5128',
                'nome' => 'Penápolis',
                'estado_id' => '26',
            ),
            128 => 
            array (
                'id' => '5129',
                'nome' => 'Pereira Barreto',
                'estado_id' => '26',
            ),
            129 => 
            array (
                'id' => '5130',
                'nome' => 'Pereiras',
                'estado_id' => '26',
            ),
            130 => 
            array (
                'id' => '5131',
                'nome' => 'Peruíbe',
                'estado_id' => '26',
            ),
            131 => 
            array (
                'id' => '5132',
                'nome' => 'Piacatu',
                'estado_id' => '26',
            ),
            132 => 
            array (
                'id' => '5133',
                'nome' => 'Piedade',
                'estado_id' => '26',
            ),
            133 => 
            array (
                'id' => '5134',
                'nome' => 'Pilar do Sul',
                'estado_id' => '26',
            ),
            134 => 
            array (
                'id' => '5135',
                'nome' => 'Pindamonhangaba',
                'estado_id' => '26',
            ),
            135 => 
            array (
                'id' => '5136',
                'nome' => 'Pindorama',
                'estado_id' => '26',
            ),
            136 => 
            array (
                'id' => '5137',
                'nome' => 'Pinhalzinho',
                'estado_id' => '26',
            ),
            137 => 
            array (
                'id' => '5138',
                'nome' => 'Piquerobi',
                'estado_id' => '26',
            ),
            138 => 
            array (
                'id' => '5139',
                'nome' => 'Piquete',
                'estado_id' => '26',
            ),
            139 => 
            array (
                'id' => '5140',
                'nome' => 'Piracaia',
                'estado_id' => '26',
            ),
            140 => 
            array (
                'id' => '5141',
                'nome' => 'Piracicaba',
                'estado_id' => '26',
            ),
            141 => 
            array (
                'id' => '5142',
                'nome' => 'Piraju',
                'estado_id' => '26',
            ),
            142 => 
            array (
                'id' => '5143',
                'nome' => 'Pirajuí',
                'estado_id' => '26',
            ),
            143 => 
            array (
                'id' => '5144',
                'nome' => 'Pirangi',
                'estado_id' => '26',
            ),
            144 => 
            array (
                'id' => '5145',
                'nome' => 'Pirapora do Bom Jesus',
                'estado_id' => '26',
            ),
            145 => 
            array (
                'id' => '5146',
                'nome' => 'Pirapozinho',
                'estado_id' => '26',
            ),
            146 => 
            array (
                'id' => '5147',
                'nome' => 'Pirassununga',
                'estado_id' => '26',
            ),
            147 => 
            array (
                'id' => '5148',
                'nome' => 'Piratininga',
                'estado_id' => '26',
            ),
            148 => 
            array (
                'id' => '5149',
                'nome' => 'Pitangueiras',
                'estado_id' => '26',
            ),
            149 => 
            array (
                'id' => '5150',
                'nome' => 'Planalto',
                'estado_id' => '26',
            ),
            150 => 
            array (
                'id' => '5151',
                'nome' => 'Platina',
                'estado_id' => '26',
            ),
            151 => 
            array (
                'id' => '5152',
                'nome' => 'Poá',
                'estado_id' => '26',
            ),
            152 => 
            array (
                'id' => '5153',
                'nome' => 'Poloni',
                'estado_id' => '26',
            ),
            153 => 
            array (
                'id' => '5154',
                'nome' => 'Pompéia',
                'estado_id' => '26',
            ),
            154 => 
            array (
                'id' => '5155',
                'nome' => 'Pongaí',
                'estado_id' => '26',
            ),
            155 => 
            array (
                'id' => '5156',
                'nome' => 'Pontal',
                'estado_id' => '26',
            ),
            156 => 
            array (
                'id' => '5157',
                'nome' => 'Pontalinda',
                'estado_id' => '26',
            ),
            157 => 
            array (
                'id' => '5158',
                'nome' => 'Pontes Gestal',
                'estado_id' => '26',
            ),
            158 => 
            array (
                'id' => '5159',
                'nome' => 'Populina',
                'estado_id' => '26',
            ),
            159 => 
            array (
                'id' => '5160',
                'nome' => 'Porangaba',
                'estado_id' => '26',
            ),
            160 => 
            array (
                'id' => '5161',
                'nome' => 'Porto Feliz',
                'estado_id' => '26',
            ),
            161 => 
            array (
                'id' => '5162',
                'nome' => 'Porto Ferreira',
                'estado_id' => '26',
            ),
            162 => 
            array (
                'id' => '5163',
                'nome' => 'Potim',
                'estado_id' => '26',
            ),
            163 => 
            array (
                'id' => '5164',
                'nome' => 'Potirendaba',
                'estado_id' => '26',
            ),
            164 => 
            array (
                'id' => '5165',
                'nome' => 'Pracinha',
                'estado_id' => '26',
            ),
            165 => 
            array (
                'id' => '5166',
                'nome' => 'Pradópolis',
                'estado_id' => '26',
            ),
            166 => 
            array (
                'id' => '5167',
                'nome' => 'Praia Grande',
                'estado_id' => '26',
            ),
            167 => 
            array (
                'id' => '5168',
                'nome' => 'Pratânia',
                'estado_id' => '26',
            ),
            168 => 
            array (
                'id' => '5169',
                'nome' => 'Presidente Alves',
                'estado_id' => '26',
            ),
            169 => 
            array (
                'id' => '5170',
                'nome' => 'Presidente Bernardes',
                'estado_id' => '26',
            ),
            170 => 
            array (
                'id' => '5171',
                'nome' => 'Presidente Epitácio',
                'estado_id' => '26',
            ),
            171 => 
            array (
                'id' => '5172',
                'nome' => 'Presidente Prudente',
                'estado_id' => '26',
            ),
            172 => 
            array (
                'id' => '5173',
                'nome' => 'Presidente Venceslau',
                'estado_id' => '26',
            ),
            173 => 
            array (
                'id' => '5174',
                'nome' => 'Promissão',
                'estado_id' => '26',
            ),
            174 => 
            array (
                'id' => '5175',
                'nome' => 'Quadra',
                'estado_id' => '26',
            ),
            175 => 
            array (
                'id' => '5176',
                'nome' => 'Quatá',
                'estado_id' => '26',
            ),
            176 => 
            array (
                'id' => '5177',
                'nome' => 'Queiroz',
                'estado_id' => '26',
            ),
            177 => 
            array (
                'id' => '5178',
                'nome' => 'Queluz',
                'estado_id' => '26',
            ),
            178 => 
            array (
                'id' => '5179',
                'nome' => 'Quintana',
                'estado_id' => '26',
            ),
            179 => 
            array (
                'id' => '5180',
                'nome' => 'Rafard',
                'estado_id' => '26',
            ),
            180 => 
            array (
                'id' => '5181',
                'nome' => 'Rancharia',
                'estado_id' => '26',
            ),
            181 => 
            array (
                'id' => '5182',
                'nome' => 'Redenção da Serra',
                'estado_id' => '26',
            ),
            182 => 
            array (
                'id' => '5183',
                'nome' => 'Regente Feijó',
                'estado_id' => '26',
            ),
            183 => 
            array (
                'id' => '5184',
                'nome' => 'Reginópolis',
                'estado_id' => '26',
            ),
            184 => 
            array (
                'id' => '5185',
                'nome' => 'Registro',
                'estado_id' => '26',
            ),
            185 => 
            array (
                'id' => '5186',
                'nome' => 'Restinga',
                'estado_id' => '26',
            ),
            186 => 
            array (
                'id' => '5187',
                'nome' => 'Ribeira',
                'estado_id' => '26',
            ),
            187 => 
            array (
                'id' => '5188',
                'nome' => 'Ribeirão Bonito',
                'estado_id' => '26',
            ),
            188 => 
            array (
                'id' => '5189',
                'nome' => 'Ribeirão Branco',
                'estado_id' => '26',
            ),
            189 => 
            array (
                'id' => '5190',
                'nome' => 'Ribeirão Corrente',
                'estado_id' => '26',
            ),
            190 => 
            array (
                'id' => '5191',
                'nome' => 'Ribeirão do Sul',
                'estado_id' => '26',
            ),
            191 => 
            array (
                'id' => '5192',
                'nome' => 'Ribeirão dos Índios',
                'estado_id' => '26',
            ),
            192 => 
            array (
                'id' => '5193',
                'nome' => 'Ribeirão Grande',
                'estado_id' => '26',
            ),
            193 => 
            array (
                'id' => '5194',
                'nome' => 'Ribeirão Pires',
                'estado_id' => '26',
            ),
            194 => 
            array (
                'id' => '5195',
                'nome' => 'Ribeirão Preto',
                'estado_id' => '26',
            ),
            195 => 
            array (
                'id' => '5196',
                'nome' => 'Rifaina',
                'estado_id' => '26',
            ),
            196 => 
            array (
                'id' => '5197',
                'nome' => 'Rincão',
                'estado_id' => '26',
            ),
            197 => 
            array (
                'id' => '5198',
                'nome' => 'Rinópolis',
                'estado_id' => '26',
            ),
            198 => 
            array (
                'id' => '5199',
                'nome' => 'Rio Claro',
                'estado_id' => '26',
            ),
            199 => 
            array (
                'id' => '5200',
                'nome' => 'Rio das Pedras',
                'estado_id' => '26',
            ),
            200 => 
            array (
                'id' => '5201',
                'nome' => 'Rio Grande da Serra',
                'estado_id' => '26',
            ),
            201 => 
            array (
                'id' => '5202',
                'nome' => 'Riolândia',
                'estado_id' => '26',
            ),
            202 => 
            array (
                'id' => '5203',
                'nome' => 'Riversul',
                'estado_id' => '26',
            ),
            203 => 
            array (
                'id' => '5204',
                'nome' => 'Rosana',
                'estado_id' => '26',
            ),
            204 => 
            array (
                'id' => '5205',
                'nome' => 'Roseira',
                'estado_id' => '26',
            ),
            205 => 
            array (
                'id' => '5206',
                'nome' => 'Rubiácea',
                'estado_id' => '26',
            ),
            206 => 
            array (
                'id' => '5207',
                'nome' => 'Rubinéia',
                'estado_id' => '26',
            ),
            207 => 
            array (
                'id' => '5208',
                'nome' => 'Sabino',
                'estado_id' => '26',
            ),
            208 => 
            array (
                'id' => '5209',
                'nome' => 'Sagres',
                'estado_id' => '26',
            ),
            209 => 
            array (
                'id' => '5210',
                'nome' => 'Sales',
                'estado_id' => '26',
            ),
            210 => 
            array (
                'id' => '5211',
                'nome' => 'Sales Oliveira',
                'estado_id' => '26',
            ),
            211 => 
            array (
                'id' => '5212',
                'nome' => 'Salesópolis',
                'estado_id' => '26',
            ),
            212 => 
            array (
                'id' => '5213',
                'nome' => 'Salmourão',
                'estado_id' => '26',
            ),
            213 => 
            array (
                'id' => '5214',
                'nome' => 'Saltinho',
                'estado_id' => '26',
            ),
            214 => 
            array (
                'id' => '5215',
                'nome' => 'Salto',
                'estado_id' => '26',
            ),
            215 => 
            array (
                'id' => '5216',
                'nome' => 'Salto de Pirapora',
                'estado_id' => '26',
            ),
            216 => 
            array (
                'id' => '5217',
                'nome' => 'Salto Grande',
                'estado_id' => '26',
            ),
            217 => 
            array (
                'id' => '5218',
                'nome' => 'Sandovalina',
                'estado_id' => '26',
            ),
            218 => 
            array (
                'id' => '5219',
                'nome' => 'Santa Adélia',
                'estado_id' => '26',
            ),
            219 => 
            array (
                'id' => '5220',
                'nome' => 'Santa Albertina',
                'estado_id' => '26',
            ),
            220 => 
            array (
                'id' => '5221',
                'nome' => 'Santa Bárbara d`Oeste',
                'estado_id' => '26',
            ),
            221 => 
            array (
                'id' => '5222',
                'nome' => 'Santa Branca',
                'estado_id' => '26',
            ),
            222 => 
            array (
                'id' => '5223',
                'nome' => 'Santa Clara d`Oeste',
                'estado_id' => '26',
            ),
            223 => 
            array (
                'id' => '5224',
                'nome' => 'Santa Cruz da Conceição',
                'estado_id' => '26',
            ),
            224 => 
            array (
                'id' => '5225',
                'nome' => 'Santa Cruz da Esperança',
                'estado_id' => '26',
            ),
            225 => 
            array (
                'id' => '5226',
                'nome' => 'Santa Cruz das Palmeiras',
                'estado_id' => '26',
            ),
            226 => 
            array (
                'id' => '5227',
                'nome' => 'Santa Cruz do Rio Pardo',
                'estado_id' => '26',
            ),
            227 => 
            array (
                'id' => '5228',
                'nome' => 'Santa Ernestina',
                'estado_id' => '26',
            ),
            228 => 
            array (
                'id' => '5229',
                'nome' => 'Santa Fé do Sul',
                'estado_id' => '26',
            ),
            229 => 
            array (
                'id' => '5230',
                'nome' => 'Santa Gertrudes',
                'estado_id' => '26',
            ),
            230 => 
            array (
                'id' => '5231',
                'nome' => 'Santa Isabel',
                'estado_id' => '26',
            ),
            231 => 
            array (
                'id' => '5232',
                'nome' => 'Santa Lúcia',
                'estado_id' => '26',
            ),
            232 => 
            array (
                'id' => '5233',
                'nome' => 'Santa Maria da Serra',
                'estado_id' => '26',
            ),
            233 => 
            array (
                'id' => '5234',
                'nome' => 'Santa Mercedes',
                'estado_id' => '26',
            ),
            234 => 
            array (
                'id' => '5235',
                'nome' => 'Santa Rita d`Oeste',
                'estado_id' => '26',
            ),
            235 => 
            array (
                'id' => '5236',
                'nome' => 'Santa Rita do Passa Quatro',
                'estado_id' => '26',
            ),
            236 => 
            array (
                'id' => '5237',
                'nome' => 'Santa Rosa de Viterbo',
                'estado_id' => '26',
            ),
            237 => 
            array (
                'id' => '5238',
                'nome' => 'Santa Salete',
                'estado_id' => '26',
            ),
            238 => 
            array (
                'id' => '5239',
                'nome' => 'Santana da Ponte Pensa',
                'estado_id' => '26',
            ),
            239 => 
            array (
                'id' => '5240',
                'nome' => 'Santana de Parnaíba',
                'estado_id' => '26',
            ),
            240 => 
            array (
                'id' => '5241',
                'nome' => 'Santo Anastácio',
                'estado_id' => '26',
            ),
            241 => 
            array (
                'id' => '5242',
                'nome' => 'Santo André',
                'estado_id' => '26',
            ),
            242 => 
            array (
                'id' => '5243',
                'nome' => 'Santo Antônio da Alegria',
                'estado_id' => '26',
            ),
            243 => 
            array (
                'id' => '5244',
                'nome' => 'Santo Antônio de Posse',
                'estado_id' => '26',
            ),
            244 => 
            array (
                'id' => '5245',
                'nome' => 'Santo Antônio do Aracanguá',
                'estado_id' => '26',
            ),
            245 => 
            array (
                'id' => '5246',
                'nome' => 'Santo Antônio do Jardim',
                'estado_id' => '26',
            ),
            246 => 
            array (
                'id' => '5247',
                'nome' => 'Santo Antônio do Pinhal',
                'estado_id' => '26',
            ),
            247 => 
            array (
                'id' => '5248',
                'nome' => 'Santo Expedito',
                'estado_id' => '26',
            ),
            248 => 
            array (
                'id' => '5249',
                'nome' => 'Santópolis do Aguapeí',
                'estado_id' => '26',
            ),
            249 => 
            array (
                'id' => '5250',
                'nome' => 'Santos',
                'estado_id' => '26',
            ),
            250 => 
            array (
                'id' => '5251',
                'nome' => 'São Bento do Sapucaí',
                'estado_id' => '26',
            ),
            251 => 
            array (
                'id' => '5252',
                'nome' => 'São Bernardo do Campo',
                'estado_id' => '26',
            ),
            252 => 
            array (
                'id' => '5253',
                'nome' => 'São Caetano do Sul',
                'estado_id' => '26',
            ),
            253 => 
            array (
                'id' => '5254',
                'nome' => 'São Carlos',
                'estado_id' => '26',
            ),
            254 => 
            array (
                'id' => '5255',
                'nome' => 'São Francisco',
                'estado_id' => '26',
            ),
            255 => 
            array (
                'id' => '5256',
                'nome' => 'São João da Boa Vista',
                'estado_id' => '26',
            ),
            256 => 
            array (
                'id' => '5257',
                'nome' => 'São João das Duas Pontes',
                'estado_id' => '26',
            ),
            257 => 
            array (
                'id' => '5258',
                'nome' => 'São João de Iracema',
                'estado_id' => '26',
            ),
            258 => 
            array (
                'id' => '5259',
                'nome' => 'São João do Pau d`Alho',
                'estado_id' => '26',
            ),
            259 => 
            array (
                'id' => '5260',
                'nome' => 'São Joaquim da Barra',
                'estado_id' => '26',
            ),
            260 => 
            array (
                'id' => '5261',
                'nome' => 'São José da Bela Vista',
                'estado_id' => '26',
            ),
            261 => 
            array (
                'id' => '5262',
                'nome' => 'São José do Barreiro',
                'estado_id' => '26',
            ),
            262 => 
            array (
                'id' => '5263',
                'nome' => 'São José do Rio Pardo',
                'estado_id' => '26',
            ),
            263 => 
            array (
                'id' => '5264',
                'nome' => 'São José do Rio Preto',
                'estado_id' => '26',
            ),
            264 => 
            array (
                'id' => '5265',
                'nome' => 'São José dos Campos',
                'estado_id' => '26',
            ),
            265 => 
            array (
                'id' => '5266',
                'nome' => 'São Lourenço da Serra',
                'estado_id' => '26',
            ),
            266 => 
            array (
                'id' => '5267',
                'nome' => 'São Luís do Paraitinga',
                'estado_id' => '26',
            ),
            267 => 
            array (
                'id' => '5268',
                'nome' => 'São Manuel',
                'estado_id' => '26',
            ),
            268 => 
            array (
                'id' => '5269',
                'nome' => 'São Miguel Arcanjo',
                'estado_id' => '26',
            ),
            269 => 
            array (
                'id' => '5270',
                'nome' => 'São Paulo',
                'estado_id' => '26',
            ),
            270 => 
            array (
                'id' => '5271',
                'nome' => 'São Pedro',
                'estado_id' => '26',
            ),
            271 => 
            array (
                'id' => '5272',
                'nome' => 'São Pedro do Turvo',
                'estado_id' => '26',
            ),
            272 => 
            array (
                'id' => '5273',
                'nome' => 'São Roque',
                'estado_id' => '26',
            ),
            273 => 
            array (
                'id' => '5274',
                'nome' => 'São Sebastião',
                'estado_id' => '26',
            ),
            274 => 
            array (
                'id' => '5275',
                'nome' => 'São Sebastião da Grama',
                'estado_id' => '26',
            ),
            275 => 
            array (
                'id' => '5276',
                'nome' => 'São Simão',
                'estado_id' => '26',
            ),
            276 => 
            array (
                'id' => '5277',
                'nome' => 'São Vicente',
                'estado_id' => '26',
            ),
            277 => 
            array (
                'id' => '5278',
                'nome' => 'Sarapuí',
                'estado_id' => '26',
            ),
            278 => 
            array (
                'id' => '5279',
                'nome' => 'Sarutaiá',
                'estado_id' => '26',
            ),
            279 => 
            array (
                'id' => '5280',
                'nome' => 'Sebastianópolis do Sul',
                'estado_id' => '26',
            ),
            280 => 
            array (
                'id' => '5281',
                'nome' => 'Serra Azul',
                'estado_id' => '26',
            ),
            281 => 
            array (
                'id' => '5282',
                'nome' => 'Serra Negra',
                'estado_id' => '26',
            ),
            282 => 
            array (
                'id' => '5283',
                'nome' => 'Serrana',
                'estado_id' => '26',
            ),
            283 => 
            array (
                'id' => '5284',
                'nome' => 'Sertãozinho',
                'estado_id' => '26',
            ),
            284 => 
            array (
                'id' => '5285',
                'nome' => 'Sete Barras',
                'estado_id' => '26',
            ),
            285 => 
            array (
                'id' => '5286',
                'nome' => 'Severínia',
                'estado_id' => '26',
            ),
            286 => 
            array (
                'id' => '5287',
                'nome' => 'Silveiras',
                'estado_id' => '26',
            ),
            287 => 
            array (
                'id' => '5288',
                'nome' => 'Socorro',
                'estado_id' => '26',
            ),
            288 => 
            array (
                'id' => '5289',
                'nome' => 'Sorocaba',
                'estado_id' => '26',
            ),
            289 => 
            array (
                'id' => '5290',
                'nome' => 'Sud Mennucci',
                'estado_id' => '26',
            ),
            290 => 
            array (
                'id' => '5291',
                'nome' => 'Sumaré',
                'estado_id' => '26',
            ),
            291 => 
            array (
                'id' => '5292',
                'nome' => 'Suzanápolis',
                'estado_id' => '26',
            ),
            292 => 
            array (
                'id' => '5293',
                'nome' => 'Suzano',
                'estado_id' => '26',
            ),
            293 => 
            array (
                'id' => '5294',
                'nome' => 'Tabapuã',
                'estado_id' => '26',
            ),
            294 => 
            array (
                'id' => '5295',
                'nome' => 'Tabatinga',
                'estado_id' => '26',
            ),
            295 => 
            array (
                'id' => '5296',
                'nome' => 'Taboão da Serra',
                'estado_id' => '26',
            ),
            296 => 
            array (
                'id' => '5297',
                'nome' => 'Taciba',
                'estado_id' => '26',
            ),
            297 => 
            array (
                'id' => '5298',
                'nome' => 'Taguaí',
                'estado_id' => '26',
            ),
            298 => 
            array (
                'id' => '5299',
                'nome' => 'Taiaçu',
                'estado_id' => '26',
            ),
            299 => 
            array (
                'id' => '5300',
                'nome' => 'Taiúva',
                'estado_id' => '26',
            ),
            300 => 
            array (
                'id' => '5301',
                'nome' => 'Tambaú',
                'estado_id' => '26',
            ),
            301 => 
            array (
                'id' => '5302',
                'nome' => 'Tanabi',
                'estado_id' => '26',
            ),
            302 => 
            array (
                'id' => '5303',
                'nome' => 'Tapiraí',
                'estado_id' => '26',
            ),
            303 => 
            array (
                'id' => '5304',
                'nome' => 'Tapiratiba',
                'estado_id' => '26',
            ),
            304 => 
            array (
                'id' => '5305',
                'nome' => 'Taquaral',
                'estado_id' => '26',
            ),
            305 => 
            array (
                'id' => '5306',
                'nome' => 'Taquaritinga',
                'estado_id' => '26',
            ),
            306 => 
            array (
                'id' => '5307',
                'nome' => 'Taquarituba',
                'estado_id' => '26',
            ),
            307 => 
            array (
                'id' => '5308',
                'nome' => 'Taquarivaí',
                'estado_id' => '26',
            ),
            308 => 
            array (
                'id' => '5309',
                'nome' => 'Tarabai',
                'estado_id' => '26',
            ),
            309 => 
            array (
                'id' => '5310',
                'nome' => 'Tarumã',
                'estado_id' => '26',
            ),
            310 => 
            array (
                'id' => '5311',
                'nome' => 'Tatuí',
                'estado_id' => '26',
            ),
            311 => 
            array (
                'id' => '5312',
                'nome' => 'Taubaté',
                'estado_id' => '26',
            ),
            312 => 
            array (
                'id' => '5313',
                'nome' => 'Tejupá',
                'estado_id' => '26',
            ),
            313 => 
            array (
                'id' => '5314',
                'nome' => 'Teodoro Sampaio',
                'estado_id' => '26',
            ),
            314 => 
            array (
                'id' => '5315',
                'nome' => 'Terra Roxa',
                'estado_id' => '26',
            ),
            315 => 
            array (
                'id' => '5316',
                'nome' => 'Tietê',
                'estado_id' => '26',
            ),
            316 => 
            array (
                'id' => '5317',
                'nome' => 'Timburi',
                'estado_id' => '26',
            ),
            317 => 
            array (
                'id' => '5318',
                'nome' => 'Torre de Pedra',
                'estado_id' => '26',
            ),
            318 => 
            array (
                'id' => '5319',
                'nome' => 'Torrinha',
                'estado_id' => '26',
            ),
            319 => 
            array (
                'id' => '5320',
                'nome' => 'Trabiju',
                'estado_id' => '26',
            ),
            320 => 
            array (
                'id' => '5321',
                'nome' => 'Tremembé',
                'estado_id' => '26',
            ),
            321 => 
            array (
                'id' => '5322',
                'nome' => 'Três Fronteiras',
                'estado_id' => '26',
            ),
            322 => 
            array (
                'id' => '5323',
                'nome' => 'Tuiuti',
                'estado_id' => '26',
            ),
            323 => 
            array (
                'id' => '5324',
                'nome' => 'Tupã',
                'estado_id' => '26',
            ),
            324 => 
            array (
                'id' => '5325',
                'nome' => 'Tupi Paulista',
                'estado_id' => '26',
            ),
            325 => 
            array (
                'id' => '5326',
                'nome' => 'Turiúba',
                'estado_id' => '26',
            ),
            326 => 
            array (
                'id' => '5327',
                'nome' => 'Turmalina',
                'estado_id' => '26',
            ),
            327 => 
            array (
                'id' => '5328',
                'nome' => 'Ubarana',
                'estado_id' => '26',
            ),
            328 => 
            array (
                'id' => '5329',
                'nome' => 'Ubatuba',
                'estado_id' => '26',
            ),
            329 => 
            array (
                'id' => '5330',
                'nome' => 'Ubirajara',
                'estado_id' => '26',
            ),
            330 => 
            array (
                'id' => '5331',
                'nome' => 'Uchoa',
                'estado_id' => '26',
            ),
            331 => 
            array (
                'id' => '5332',
                'nome' => 'União Paulista',
                'estado_id' => '26',
            ),
            332 => 
            array (
                'id' => '5333',
                'nome' => 'Urânia',
                'estado_id' => '26',
            ),
            333 => 
            array (
                'id' => '5334',
                'nome' => 'Uru',
                'estado_id' => '26',
            ),
            334 => 
            array (
                'id' => '5335',
                'nome' => 'Urupês',
                'estado_id' => '26',
            ),
            335 => 
            array (
                'id' => '5336',
                'nome' => 'Valentim Gentil',
                'estado_id' => '26',
            ),
            336 => 
            array (
                'id' => '5337',
                'nome' => 'Valinhos',
                'estado_id' => '26',
            ),
            337 => 
            array (
                'id' => '5338',
                'nome' => 'Valparaíso',
                'estado_id' => '26',
            ),
            338 => 
            array (
                'id' => '5339',
                'nome' => 'Vargem',
                'estado_id' => '26',
            ),
            339 => 
            array (
                'id' => '5340',
                'nome' => 'Vargem Grande do Sul',
                'estado_id' => '26',
            ),
            340 => 
            array (
                'id' => '5341',
                'nome' => 'Vargem Grande Paulista',
                'estado_id' => '26',
            ),
            341 => 
            array (
                'id' => '5342',
                'nome' => 'Várzea Paulista',
                'estado_id' => '26',
            ),
            342 => 
            array (
                'id' => '5343',
                'nome' => 'Vera Cruz',
                'estado_id' => '26',
            ),
            343 => 
            array (
                'id' => '5344',
                'nome' => 'Vinhedo',
                'estado_id' => '26',
            ),
            344 => 
            array (
                'id' => '5345',
                'nome' => 'Viradouro',
                'estado_id' => '26',
            ),
            345 => 
            array (
                'id' => '5346',
                'nome' => 'Vista Alegre do Alto',
                'estado_id' => '26',
            ),
            346 => 
            array (
                'id' => '5347',
                'nome' => 'Vitória Brasil',
                'estado_id' => '26',
            ),
            347 => 
            array (
                'id' => '5348',
                'nome' => 'Votorantim',
                'estado_id' => '26',
            ),
            348 => 
            array (
                'id' => '5349',
                'nome' => 'Votuporanga',
                'estado_id' => '26',
            ),
            349 => 
            array (
                'id' => '5350',
                'nome' => 'Zacarias',
                'estado_id' => '26',
            ),
            350 => 
            array (
                'id' => '5351',
                'nome' => 'Amparo de São Francisco',
                'estado_id' => '25',
            ),
            351 => 
            array (
                'id' => '5352',
                'nome' => 'Aquidabã',
                'estado_id' => '25',
            ),
            352 => 
            array (
                'id' => '5353',
                'nome' => 'Aracaju',
                'estado_id' => '25',
            ),
            353 => 
            array (
                'id' => '5354',
                'nome' => 'Arauá',
                'estado_id' => '25',
            ),
            354 => 
            array (
                'id' => '5355',
                'nome' => 'Areia Branca',
                'estado_id' => '25',
            ),
            355 => 
            array (
                'id' => '5356',
                'nome' => 'Barra dos Coqueiros',
                'estado_id' => '25',
            ),
            356 => 
            array (
                'id' => '5357',
                'nome' => 'Boquim',
                'estado_id' => '25',
            ),
            357 => 
            array (
                'id' => '5358',
                'nome' => 'Brejo Grande',
                'estado_id' => '25',
            ),
            358 => 
            array (
                'id' => '5359',
                'nome' => 'Campo do Brito',
                'estado_id' => '25',
            ),
            359 => 
            array (
                'id' => '5360',
                'nome' => 'Canhoba',
                'estado_id' => '25',
            ),
            360 => 
            array (
                'id' => '5361',
                'nome' => 'Canindé de São Francisco',
                'estado_id' => '25',
            ),
            361 => 
            array (
                'id' => '5362',
                'nome' => 'Capela',
                'estado_id' => '25',
            ),
            362 => 
            array (
                'id' => '5363',
                'nome' => 'Carira',
                'estado_id' => '25',
            ),
            363 => 
            array (
                'id' => '5364',
                'nome' => 'Carmópolis',
                'estado_id' => '25',
            ),
            364 => 
            array (
                'id' => '5365',
                'nome' => 'Cedro de São João',
                'estado_id' => '25',
            ),
            365 => 
            array (
                'id' => '5366',
                'nome' => 'Cristinápolis',
                'estado_id' => '25',
            ),
            366 => 
            array (
                'id' => '5367',
                'nome' => 'Cumbe',
                'estado_id' => '25',
            ),
            367 => 
            array (
                'id' => '5368',
                'nome' => 'Divina Pastora',
                'estado_id' => '25',
            ),
            368 => 
            array (
                'id' => '5369',
                'nome' => 'Estância',
                'estado_id' => '25',
            ),
            369 => 
            array (
                'id' => '5370',
                'nome' => 'Feira Nova',
                'estado_id' => '25',
            ),
            370 => 
            array (
                'id' => '5371',
                'nome' => 'Frei Paulo',
                'estado_id' => '25',
            ),
            371 => 
            array (
                'id' => '5372',
                'nome' => 'Gararu',
                'estado_id' => '25',
            ),
            372 => 
            array (
                'id' => '5373',
                'nome' => 'General Maynard',
                'estado_id' => '25',
            ),
            373 => 
            array (
                'id' => '5374',
                'nome' => 'Gracho Cardoso',
                'estado_id' => '25',
            ),
            374 => 
            array (
                'id' => '5375',
                'nome' => 'Ilha das Flores',
                'estado_id' => '25',
            ),
            375 => 
            array (
                'id' => '5376',
                'nome' => 'Indiaroba',
                'estado_id' => '25',
            ),
            376 => 
            array (
                'id' => '5377',
                'nome' => 'Itabaiana',
                'estado_id' => '25',
            ),
            377 => 
            array (
                'id' => '5378',
                'nome' => 'Itabaianinha',
                'estado_id' => '25',
            ),
            378 => 
            array (
                'id' => '5379',
                'nome' => 'Itabi',
                'estado_id' => '25',
            ),
            379 => 
            array (
                'id' => '5380',
                'nome' => 'Itaporanga d`Ajuda',
                'estado_id' => '25',
            ),
            380 => 
            array (
                'id' => '5381',
                'nome' => 'Japaratuba',
                'estado_id' => '25',
            ),
            381 => 
            array (
                'id' => '5382',
                'nome' => 'Japoatã',
                'estado_id' => '25',
            ),
            382 => 
            array (
                'id' => '5383',
                'nome' => 'Lagarto',
                'estado_id' => '25',
            ),
            383 => 
            array (
                'id' => '5384',
                'nome' => 'Laranjeiras',
                'estado_id' => '25',
            ),
            384 => 
            array (
                'id' => '5385',
                'nome' => 'Macambira',
                'estado_id' => '25',
            ),
            385 => 
            array (
                'id' => '5386',
                'nome' => 'Malhada dos Bois',
                'estado_id' => '25',
            ),
            386 => 
            array (
                'id' => '5387',
                'nome' => 'Malhador',
                'estado_id' => '25',
            ),
            387 => 
            array (
                'id' => '5388',
                'nome' => 'Maruim',
                'estado_id' => '25',
            ),
            388 => 
            array (
                'id' => '5389',
                'nome' => 'Moita Bonita',
                'estado_id' => '25',
            ),
            389 => 
            array (
                'id' => '5390',
                'nome' => 'Monte Alegre de Sergipe',
                'estado_id' => '25',
            ),
            390 => 
            array (
                'id' => '5391',
                'nome' => 'Muribeca',
                'estado_id' => '25',
            ),
            391 => 
            array (
                'id' => '5392',
                'nome' => 'Neópolis',
                'estado_id' => '25',
            ),
            392 => 
            array (
                'id' => '5393',
                'nome' => 'Nossa Senhora Aparecida',
                'estado_id' => '25',
            ),
            393 => 
            array (
                'id' => '5394',
                'nome' => 'Nossa Senhora da Glória',
                'estado_id' => '25',
            ),
            394 => 
            array (
                'id' => '5395',
                'nome' => 'Nossa Senhora das Dores',
                'estado_id' => '25',
            ),
            395 => 
            array (
                'id' => '5396',
                'nome' => 'Nossa Senhora de Lourdes',
                'estado_id' => '25',
            ),
            396 => 
            array (
                'id' => '5397',
                'nome' => 'Nossa Senhora do Socorro',
                'estado_id' => '25',
            ),
            397 => 
            array (
                'id' => '5398',
                'nome' => 'Pacatuba',
                'estado_id' => '25',
            ),
            398 => 
            array (
                'id' => '5399',
                'nome' => 'Pedra Mole',
                'estado_id' => '25',
            ),
            399 => 
            array (
                'id' => '5400',
                'nome' => 'Pedrinhas',
                'estado_id' => '25',
            ),
            400 => 
            array (
                'id' => '5401',
                'nome' => 'Pinhão',
                'estado_id' => '25',
            ),
            401 => 
            array (
                'id' => '5402',
                'nome' => 'Pirambu',
                'estado_id' => '25',
            ),
            402 => 
            array (
                'id' => '5403',
                'nome' => 'Poço Redondo',
                'estado_id' => '25',
            ),
            403 => 
            array (
                'id' => '5404',
                'nome' => 'Poço Verde',
                'estado_id' => '25',
            ),
            404 => 
            array (
                'id' => '5405',
                'nome' => 'Porto da Folha',
                'estado_id' => '25',
            ),
            405 => 
            array (
                'id' => '5406',
                'nome' => 'Propriá',
                'estado_id' => '25',
            ),
            406 => 
            array (
                'id' => '5407',
                'nome' => 'Riachão do Dantas',
                'estado_id' => '25',
            ),
            407 => 
            array (
                'id' => '5408',
                'nome' => 'Riachuelo',
                'estado_id' => '25',
            ),
            408 => 
            array (
                'id' => '5409',
                'nome' => 'Ribeirópolis',
                'estado_id' => '25',
            ),
            409 => 
            array (
                'id' => '5410',
                'nome' => 'Rosário do Catete',
                'estado_id' => '25',
            ),
            410 => 
            array (
                'id' => '5411',
                'nome' => 'Salgado',
                'estado_id' => '25',
            ),
            411 => 
            array (
                'id' => '5412',
                'nome' => 'Santa Luzia do Itanhy',
                'estado_id' => '25',
            ),
            412 => 
            array (
                'id' => '5413',
                'nome' => 'Santa Rosa de Lima',
                'estado_id' => '25',
            ),
            413 => 
            array (
                'id' => '5414',
                'nome' => 'Santana do São Francisco',
                'estado_id' => '25',
            ),
            414 => 
            array (
                'id' => '5415',
                'nome' => 'Santo Amaro das Brotas',
                'estado_id' => '25',
            ),
            415 => 
            array (
                'id' => '5416',
                'nome' => 'São Cristóvão',
                'estado_id' => '25',
            ),
            416 => 
            array (
                'id' => '5417',
                'nome' => 'São Domingos',
                'estado_id' => '25',
            ),
            417 => 
            array (
                'id' => '5418',
                'nome' => 'São Francisco',
                'estado_id' => '25',
            ),
            418 => 
            array (
                'id' => '5419',
                'nome' => 'São Miguel do Aleixo',
                'estado_id' => '25',
            ),
            419 => 
            array (
                'id' => '5420',
                'nome' => 'Simão Dias',
                'estado_id' => '25',
            ),
            420 => 
            array (
                'id' => '5421',
                'nome' => 'Siriri',
                'estado_id' => '25',
            ),
            421 => 
            array (
                'id' => '5422',
                'nome' => 'Telha',
                'estado_id' => '25',
            ),
            422 => 
            array (
                'id' => '5423',
                'nome' => 'Tobias Barreto',
                'estado_id' => '25',
            ),
            423 => 
            array (
                'id' => '5424',
                'nome' => 'Tomar do Geru',
                'estado_id' => '25',
            ),
            424 => 
            array (
                'id' => '5425',
                'nome' => 'Umbaúba',
                'estado_id' => '25',
            ),
            425 => 
            array (
                'id' => '5426',
                'nome' => 'Abreulândia',
                'estado_id' => '27',
            ),
            426 => 
            array (
                'id' => '5427',
                'nome' => 'Aguiarnópolis',
                'estado_id' => '27',
            ),
            427 => 
            array (
                'id' => '5428',
                'nome' => 'Aliança do Tocantins',
                'estado_id' => '27',
            ),
            428 => 
            array (
                'id' => '5429',
                'nome' => 'Almas',
                'estado_id' => '27',
            ),
            429 => 
            array (
                'id' => '5430',
                'nome' => 'Alvorada',
                'estado_id' => '27',
            ),
            430 => 
            array (
                'id' => '5431',
                'nome' => 'Ananás',
                'estado_id' => '27',
            ),
            431 => 
            array (
                'id' => '5432',
                'nome' => 'Angico',
                'estado_id' => '27',
            ),
            432 => 
            array (
                'id' => '5433',
                'nome' => 'Aparecida do Rio Negro',
                'estado_id' => '27',
            ),
            433 => 
            array (
                'id' => '5434',
                'nome' => 'Aragominas',
                'estado_id' => '27',
            ),
            434 => 
            array (
                'id' => '5435',
                'nome' => 'Araguacema',
                'estado_id' => '27',
            ),
            435 => 
            array (
                'id' => '5436',
                'nome' => 'Araguaçu',
                'estado_id' => '27',
            ),
            436 => 
            array (
                'id' => '5437',
                'nome' => 'Araguaína',
                'estado_id' => '27',
            ),
            437 => 
            array (
                'id' => '5438',
                'nome' => 'Araguanã',
                'estado_id' => '27',
            ),
            438 => 
            array (
                'id' => '5439',
                'nome' => 'Araguatins',
                'estado_id' => '27',
            ),
            439 => 
            array (
                'id' => '5440',
                'nome' => 'Arapoema',
                'estado_id' => '27',
            ),
            440 => 
            array (
                'id' => '5441',
                'nome' => 'Arraias',
                'estado_id' => '27',
            ),
            441 => 
            array (
                'id' => '5442',
                'nome' => 'Augustinópolis',
                'estado_id' => '27',
            ),
            442 => 
            array (
                'id' => '5443',
                'nome' => 'Aurora do Tocantins',
                'estado_id' => '27',
            ),
            443 => 
            array (
                'id' => '5444',
                'nome' => 'Axixá do Tocantins',
                'estado_id' => '27',
            ),
            444 => 
            array (
                'id' => '5445',
                'nome' => 'Babaçulândia',
                'estado_id' => '27',
            ),
            445 => 
            array (
                'id' => '5446',
                'nome' => 'Bandeirantes do Tocantins',
                'estado_id' => '27',
            ),
            446 => 
            array (
                'id' => '5447',
                'nome' => 'Barra do Ouro',
                'estado_id' => '27',
            ),
            447 => 
            array (
                'id' => '5448',
                'nome' => 'Barrolândia',
                'estado_id' => '27',
            ),
            448 => 
            array (
                'id' => '5449',
                'nome' => 'Bernardo Sayão',
                'estado_id' => '27',
            ),
            449 => 
            array (
                'id' => '5450',
                'nome' => 'Bom Jesus do Tocantins',
                'estado_id' => '27',
            ),
            450 => 
            array (
                'id' => '5451',
                'nome' => 'Brasilândia do Tocantins',
                'estado_id' => '27',
            ),
            451 => 
            array (
                'id' => '5452',
                'nome' => 'Brejinho de Nazaré',
                'estado_id' => '27',
            ),
            452 => 
            array (
                'id' => '5453',
                'nome' => 'Buriti do Tocantins',
                'estado_id' => '27',
            ),
            453 => 
            array (
                'id' => '5454',
                'nome' => 'Cachoeirinha',
                'estado_id' => '27',
            ),
            454 => 
            array (
                'id' => '5455',
                'nome' => 'Campos Lindos',
                'estado_id' => '27',
            ),
            455 => 
            array (
                'id' => '5456',
                'nome' => 'Cariri do Tocantins',
                'estado_id' => '27',
            ),
            456 => 
            array (
                'id' => '5457',
                'nome' => 'Carmolândia',
                'estado_id' => '27',
            ),
            457 => 
            array (
                'id' => '5458',
                'nome' => 'Carrasco Bonito',
                'estado_id' => '27',
            ),
            458 => 
            array (
                'id' => '5459',
                'nome' => 'Caseara',
                'estado_id' => '27',
            ),
            459 => 
            array (
                'id' => '5460',
                'nome' => 'Centenário',
                'estado_id' => '27',
            ),
            460 => 
            array (
                'id' => '5461',
                'nome' => 'Chapada da Natividade',
                'estado_id' => '27',
            ),
            461 => 
            array (
                'id' => '5462',
                'nome' => 'Chapada de Areia',
                'estado_id' => '27',
            ),
            462 => 
            array (
                'id' => '5463',
                'nome' => 'Colinas do Tocantins',
                'estado_id' => '27',
            ),
            463 => 
            array (
                'id' => '5464',
                'nome' => 'Colméia',
                'estado_id' => '27',
            ),
            464 => 
            array (
                'id' => '5465',
                'nome' => 'Combinado',
                'estado_id' => '27',
            ),
            465 => 
            array (
                'id' => '5466',
                'nome' => 'Conceição do Tocantins',
                'estado_id' => '27',
            ),
            466 => 
            array (
                'id' => '5467',
                'nome' => 'Couto de Magalhães',
                'estado_id' => '27',
            ),
            467 => 
            array (
                'id' => '5468',
                'nome' => 'Cristalândia',
                'estado_id' => '27',
            ),
            468 => 
            array (
                'id' => '5469',
                'nome' => 'Crixás do Tocantins',
                'estado_id' => '27',
            ),
            469 => 
            array (
                'id' => '5470',
                'nome' => 'Darcinópolis',
                'estado_id' => '27',
            ),
            470 => 
            array (
                'id' => '5471',
                'nome' => 'Dianópolis',
                'estado_id' => '27',
            ),
            471 => 
            array (
                'id' => '5472',
                'nome' => 'Divinópolis do Tocantins',
                'estado_id' => '27',
            ),
            472 => 
            array (
                'id' => '5473',
                'nome' => 'Dois Irmãos do Tocantins',
                'estado_id' => '27',
            ),
            473 => 
            array (
                'id' => '5474',
                'nome' => 'Dueré',
                'estado_id' => '27',
            ),
            474 => 
            array (
                'id' => '5475',
                'nome' => 'Esperantina',
                'estado_id' => '27',
            ),
            475 => 
            array (
                'id' => '5476',
                'nome' => 'Fátima',
                'estado_id' => '27',
            ),
            476 => 
            array (
                'id' => '5477',
                'nome' => 'Figueirópolis',
                'estado_id' => '27',
            ),
            477 => 
            array (
                'id' => '5478',
                'nome' => 'Filadélfia',
                'estado_id' => '27',
            ),
            478 => 
            array (
                'id' => '5479',
                'nome' => 'Formoso do Araguaia',
                'estado_id' => '27',
            ),
            479 => 
            array (
                'id' => '5480',
                'nome' => 'Fortaleza do Tabocão',
                'estado_id' => '27',
            ),
            480 => 
            array (
                'id' => '5481',
                'nome' => 'Goianorte',
                'estado_id' => '27',
            ),
            481 => 
            array (
                'id' => '5482',
                'nome' => 'Goiatins',
                'estado_id' => '27',
            ),
            482 => 
            array (
                'id' => '5483',
                'nome' => 'Guaraí',
                'estado_id' => '27',
            ),
            483 => 
            array (
                'id' => '5484',
                'nome' => 'Gurupi',
                'estado_id' => '27',
            ),
            484 => 
            array (
                'id' => '5485',
                'nome' => 'Ipueiras',
                'estado_id' => '27',
            ),
            485 => 
            array (
                'id' => '5486',
                'nome' => 'Itacajá',
                'estado_id' => '27',
            ),
            486 => 
            array (
                'id' => '5487',
                'nome' => 'Itaguatins',
                'estado_id' => '27',
            ),
            487 => 
            array (
                'id' => '5488',
                'nome' => 'Itapiratins',
                'estado_id' => '27',
            ),
            488 => 
            array (
                'id' => '5489',
                'nome' => 'Itaporã do Tocantins',
                'estado_id' => '27',
            ),
            489 => 
            array (
                'id' => '5490',
                'nome' => 'Jaú do Tocantins',
                'estado_id' => '27',
            ),
            490 => 
            array (
                'id' => '5491',
                'nome' => 'Juarina',
                'estado_id' => '27',
            ),
            491 => 
            array (
                'id' => '5492',
                'nome' => 'Lagoa da Confusão',
                'estado_id' => '27',
            ),
            492 => 
            array (
                'id' => '5493',
                'nome' => 'Lagoa do Tocantins',
                'estado_id' => '27',
            ),
            493 => 
            array (
                'id' => '5494',
                'nome' => 'Lajeado',
                'estado_id' => '27',
            ),
            494 => 
            array (
                'id' => '5495',
                'nome' => 'Lavandeira',
                'estado_id' => '27',
            ),
            495 => 
            array (
                'id' => '5496',
                'nome' => 'Lizarda',
                'estado_id' => '27',
            ),
            496 => 
            array (
                'id' => '5497',
                'nome' => 'Luzinópolis',
                'estado_id' => '27',
            ),
            497 => 
            array (
                'id' => '5498',
                'nome' => 'Marianópolis do Tocantins',
                'estado_id' => '27',
            ),
            498 => 
            array (
                'id' => '5499',
                'nome' => 'Mateiros',
                'estado_id' => '27',
            ),
            499 => 
            array (
                'id' => '5500',
                'nome' => 'Maurilândia do Tocantins',
                'estado_id' => '27',
            ),
        ));
        \DB::table('cidades')->insert(array (
            0 => 
            array (
                'id' => '5501',
                'nome' => 'Miracema do Tocantins',
                'estado_id' => '27',
            ),
            1 => 
            array (
                'id' => '5502',
                'nome' => 'Miranorte',
                'estado_id' => '27',
            ),
            2 => 
            array (
                'id' => '5503',
                'nome' => 'Monte do Carmo',
                'estado_id' => '27',
            ),
            3 => 
            array (
                'id' => '5504',
                'nome' => 'Monte Santo do Tocantins',
                'estado_id' => '27',
            ),
            4 => 
            array (
                'id' => '5505',
                'nome' => 'Muricilândia',
                'estado_id' => '27',
            ),
            5 => 
            array (
                'id' => '5506',
                'nome' => 'Natividade',
                'estado_id' => '27',
            ),
            6 => 
            array (
                'id' => '5507',
                'nome' => 'Nazaré',
                'estado_id' => '27',
            ),
            7 => 
            array (
                'id' => '5508',
                'nome' => 'Nova Olinda',
                'estado_id' => '27',
            ),
            8 => 
            array (
                'id' => '5509',
                'nome' => 'Nova Rosalândia',
                'estado_id' => '27',
            ),
            9 => 
            array (
                'id' => '5510',
                'nome' => 'Novo Acordo',
                'estado_id' => '27',
            ),
            10 => 
            array (
                'id' => '5511',
                'nome' => 'Novo Alegre',
                'estado_id' => '27',
            ),
            11 => 
            array (
                'id' => '5512',
                'nome' => 'Novo Jardim',
                'estado_id' => '27',
            ),
            12 => 
            array (
                'id' => '5513',
                'nome' => 'Oliveira de Fátima',
                'estado_id' => '27',
            ),
            13 => 
            array (
                'id' => '5514',
                'nome' => 'Palmas',
                'estado_id' => '27',
            ),
            14 => 
            array (
                'id' => '5515',
                'nome' => 'Palmeirante',
                'estado_id' => '27',
            ),
            15 => 
            array (
                'id' => '5516',
                'nome' => 'Palmeiras do Tocantins',
                'estado_id' => '27',
            ),
            16 => 
            array (
                'id' => '5517',
                'nome' => 'Palmeirópolis',
                'estado_id' => '27',
            ),
            17 => 
            array (
                'id' => '5518',
                'nome' => 'Paraíso do Tocantins',
                'estado_id' => '27',
            ),
            18 => 
            array (
                'id' => '5519',
                'nome' => 'Paranã',
                'estado_id' => '27',
            ),
            19 => 
            array (
                'id' => '5520',
                'nome' => 'Pau d`Arco',
                'estado_id' => '27',
            ),
            20 => 
            array (
                'id' => '5521',
                'nome' => 'Pedro Afonso',
                'estado_id' => '27',
            ),
            21 => 
            array (
                'id' => '5522',
                'nome' => 'Peixe',
                'estado_id' => '27',
            ),
            22 => 
            array (
                'id' => '5523',
                'nome' => 'Pequizeiro',
                'estado_id' => '27',
            ),
            23 => 
            array (
                'id' => '5524',
                'nome' => 'Pindorama do Tocantins',
                'estado_id' => '27',
            ),
            24 => 
            array (
                'id' => '5525',
                'nome' => 'Piraquê',
                'estado_id' => '27',
            ),
            25 => 
            array (
                'id' => '5526',
                'nome' => 'Pium',
                'estado_id' => '27',
            ),
            26 => 
            array (
                'id' => '5527',
                'nome' => 'Ponte Alta do Bom Jesus',
                'estado_id' => '27',
            ),
            27 => 
            array (
                'id' => '5528',
                'nome' => 'Ponte Alta do Tocantins',
                'estado_id' => '27',
            ),
            28 => 
            array (
                'id' => '5529',
                'nome' => 'Porto Alegre do Tocantins',
                'estado_id' => '27',
            ),
            29 => 
            array (
                'id' => '5530',
                'nome' => 'Porto Nacional',
                'estado_id' => '27',
            ),
            30 => 
            array (
                'id' => '5531',
                'nome' => 'Praia Norte',
                'estado_id' => '27',
            ),
            31 => 
            array (
                'id' => '5532',
                'nome' => 'Presidente Kennedy',
                'estado_id' => '27',
            ),
            32 => 
            array (
                'id' => '5533',
                'nome' => 'Pugmil',
                'estado_id' => '27',
            ),
            33 => 
            array (
                'id' => '5534',
                'nome' => 'Recursolândia',
                'estado_id' => '27',
            ),
            34 => 
            array (
                'id' => '5535',
                'nome' => 'Riachinho',
                'estado_id' => '27',
            ),
            35 => 
            array (
                'id' => '5536',
                'nome' => 'Rio da Conceição',
                'estado_id' => '27',
            ),
            36 => 
            array (
                'id' => '5537',
                'nome' => 'Rio dos Bois',
                'estado_id' => '27',
            ),
            37 => 
            array (
                'id' => '5538',
                'nome' => 'Rio Sono',
                'estado_id' => '27',
            ),
            38 => 
            array (
                'id' => '5539',
                'nome' => 'Sampaio',
                'estado_id' => '27',
            ),
            39 => 
            array (
                'id' => '5540',
                'nome' => 'Sandolândia',
                'estado_id' => '27',
            ),
            40 => 
            array (
                'id' => '5541',
                'nome' => 'Santa Fé do Araguaia',
                'estado_id' => '27',
            ),
            41 => 
            array (
                'id' => '5542',
                'nome' => 'Santa Maria do Tocantins',
                'estado_id' => '27',
            ),
            42 => 
            array (
                'id' => '5543',
                'nome' => 'Santa Rita do Tocantins',
                'estado_id' => '27',
            ),
            43 => 
            array (
                'id' => '5544',
                'nome' => 'Santa Rosa do Tocantins',
                'estado_id' => '27',
            ),
            44 => 
            array (
                'id' => '5545',
                'nome' => 'Santa Tereza do Tocantins',
                'estado_id' => '27',
            ),
            45 => 
            array (
                'id' => '5546',
                'nome' => 'Santa Terezinha do Tocantins',
                'estado_id' => '27',
            ),
            46 => 
            array (
                'id' => '5547',
                'nome' => 'São Bento do Tocantins',
                'estado_id' => '27',
            ),
            47 => 
            array (
                'id' => '5548',
                'nome' => 'São Félix do Tocantins',
                'estado_id' => '27',
            ),
            48 => 
            array (
                'id' => '5549',
                'nome' => 'São Miguel do Tocantins',
                'estado_id' => '27',
            ),
            49 => 
            array (
                'id' => '5550',
                'nome' => 'São Salvador do Tocantins',
                'estado_id' => '27',
            ),
            50 => 
            array (
                'id' => '5551',
                'nome' => 'São Sebastião do Tocantins',
                'estado_id' => '27',
            ),
            51 => 
            array (
                'id' => '5552',
                'nome' => 'São Valério da Natividade',
                'estado_id' => '27',
            ),
            52 => 
            array (
                'id' => '5553',
                'nome' => 'Silvanópolis',
                'estado_id' => '27',
            ),
            53 => 
            array (
                'id' => '5554',
                'nome' => 'Sítio Novo do Tocantins',
                'estado_id' => '27',
            ),
            54 => 
            array (
                'id' => '5555',
                'nome' => 'Sucupira',
                'estado_id' => '27',
            ),
            55 => 
            array (
                'id' => '5556',
                'nome' => 'Taguatinga',
                'estado_id' => '27',
            ),
            56 => 
            array (
                'id' => '5557',
                'nome' => 'Taipas do Tocantins',
                'estado_id' => '27',
            ),
            57 => 
            array (
                'id' => '5558',
                'nome' => 'Talismã',
                'estado_id' => '27',
            ),
            58 => 
            array (
                'id' => '5559',
                'nome' => 'Tocantínia',
                'estado_id' => '27',
            ),
            59 => 
            array (
                'id' => '5560',
                'nome' => 'Tocantinópolis',
                'estado_id' => '27',
            ),
            60 => 
            array (
                'id' => '5561',
                'nome' => 'Tupirama',
                'estado_id' => '27',
            ),
            61 => 
            array (
                'id' => '5562',
                'nome' => 'Tupiratins',
                'estado_id' => '27',
            ),
            62 => 
            array (
                'id' => '5563',
                'nome' => 'Wanderlândia',
                'estado_id' => '27',
            ),
            63 => 
            array (
                'id' => '5564',
                'nome' => 'Xambioá',
                'estado_id' => '27',
            ),
        ));
        
        
    }
}
