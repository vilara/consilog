<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public static function Codom($mascara)
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
            $retorno = $n1 . $n2 . $n3 . $n4 . $n5;
        } else {
            $retorno = $n1 . $n2;
        }
        return $retorno;
    }
    
    
    public function run()
    {
        
        $codom = OmsTableSeeder::Codom(1);
        DB::table('oms')->insert([
            'nomeOm' => '2 BIL',
            'siglaOm' => '2 BIL',
            'codom' => $codom,
            'codoug' => $codom,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
