<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class enderecosTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function cep($mascara)
    {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);
        
        $retorno = '';
        if ($mascara == 1) {
            $retorno = $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9;
        } else {
            $retorno = $n1 . $n2;
        }
        return $retorno;
    }
    
    public function run()
    {
        $cep = telefonesTabelaSeeder::TelRandom(1);
        DB::table('enderecos')->insert([
            'rua' => 'Abílio Diniz',
            'numeroEndereco' =>  rand(1, 1000),
            'complemento' =>  str_random(10),
            'bairro' =>  str_random(5),
            'cep' => $cep,
//             'usuario_id' => rand(1, 10),
            'om_id' => rand(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
