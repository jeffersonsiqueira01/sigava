<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nome' => 'Acre',
                'uf' => 'AC',
                'iso' => '12',
                'slug' => 'acre',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'iso' => '27',
                'slug' => 'alagoas',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'iso' => '13',
                'slug' => 'amazonas',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'iso' => '16',
                'slug' => 'amapa',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'iso' => '29',
                'slug' => 'bahia',
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'iso' => '23',
                'slug' => 'ceara',
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'iso' => '53',
                'slug' => 'distrito-federal',
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'iso' => '32',
                'slug' => 'espirito-santo',
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'iso' => '52',
                'slug' => 'goias',
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'iso' => '21',
                'slug' => 'maranhao',
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'iso' => '31',
                'slug' => 'minas-gerais',
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'iso' => '50',
                'slug' => 'mato-grosso-do-sul',
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'iso' => '51',
                'slug' => 'mato-grosso',
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'iso' => '15',
                'slug' => 'para',
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraiba',
                'uf' => 'PB',
                'iso' => '25',
                'slug' => 'paraiba',
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'iso' => '26',
                'slug' => 'pernambuco',
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'iso' => '22',
                'slug' => 'piaui',
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'iso' => '41',
                'slug' => 'parana',
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'iso' => '33',
                'slug' => 'rio-de-janeiro',
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'iso' => '24',
                'slug' => 'rio-grande-do-norte',
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'iso' => '11',
                'slug' => 'rondonia',
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'iso' => '14',
                'slug' => 'roraima',
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'iso' => '43',
                'slug' => 'rio-grande-do-sul',
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'iso' => '42',
                'slug' => 'santa-catarina',
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'iso' => '28',
                'slug' => 'sergipe',
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'iso' => '35',
                'slug' => 'sao-paulo',
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'iso' => '17',
                'slug' => 'tocantins',
            ),
        ));
    }
}
