<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use Nexmo\Numbers\Number;

class usuariosTabelaSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function cpfRandom($mascara)
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
            $retorno = $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $n8 . $n9;
        }
        return $retorno;
    }
    
    public function run()
    {
        $cpff = usuariosTabelaSeeder::cpfRandom(2);
        $idtt = usuariosTabelaSeeder::cpfRandom(1);
        DB::table('usuarios')->insert([
            'nomeCompleto' => str_random(10),
            'nomeGuerra' => str_random(10),
            'cpf' => $cpff,
            'idt' => $idtt,
            'email' => str_random(10) . '@gmail.com',
            'sexo' => 1
        ]);
    }
}
