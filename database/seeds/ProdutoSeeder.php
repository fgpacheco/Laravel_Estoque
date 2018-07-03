<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome'=>'Geladeira', 
        	'valor' => 1500.00, 
        	'descricao' => 'Brastemp', 'quantidade' => 2]);

        DB::table('produtos')->insert(['nome'=>'Fogão', 
            'valor' => 900.00, 
            'descricao' => 'Brastemp', 'quantidade' => 5]);

        DB::table('produtos')->insert(['nome'=>'Liquidificador', 
            'valor' => 80.00, 
            'descricao' => 'Brastemp', 'quantidade' => 1]);
    }
}
