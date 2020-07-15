<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class telefonesTabelaSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function TelRandom($mascara)
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
        $ddd1 = telefonesTabelaSeeder::TelRandom(2);
        $tel1 = telefonesTabelaSeeder::TelRandom(1);
        DB::table('telefones')->insert([
            'secao' => '4ª Seção',
            'ddd' => $ddd1,
            'numero' => $tel1,
            'tipo' => rand(1, 3),
            'om_id' => rand(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
