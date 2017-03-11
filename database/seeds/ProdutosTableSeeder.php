<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder {

    public function run() {
        DB::table('produtos')->insert([
            'nome' => 'Iogurte',
            'marca' => 'Batavo',
            'quant' => 25,
            'preco' => 2.90
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Detergente',
            'marca' => 'Limpol',
            'quant' => 40,
            'preco' => 1.45
        ]);
        
        DB::table('produtos')->insert([
            'nome' => 'Sabonete',
            'marca' => 'Dove',
            'quant' => 50,
            'preco' => 1.75
        ]);
        
        
    }

}
