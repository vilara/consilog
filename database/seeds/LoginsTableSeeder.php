<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LoginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $codom = OmsTableSeeder::Codom(1);
        DB::table('logins')->insert([
            'senha'  => bcrypt('123456'),
            'usuario'      =>  str_random(5),
            'nivel'     => '1',
            'tipoNivel'     => 'adm',
            'ativo'     => '1',
            'usuario_id' => rand(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
        
    }
}
