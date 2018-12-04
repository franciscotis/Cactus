<?php

use Illuminate\Database\Seeder;

class Plantas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plantas')->insert([

            'nomeP' => 'Cacto',
            'nomeC' => 'cactaceae',
            'folha' => 'espinhos',
            'flor' => 'não possui',
            'porte' => 'até 1,5m',
            'regiao' => 'semi-árida',
            'imagem' => 'picapau.jpg',

        ]);

        DB::table('plantas')->insert([

            'nomeP' => 'Mangueira',
            'nomeC' => 'Mangifera indica',
            'folha' => 'verde',
            'flor' => 'não possui',
            'porte' => 'entre 1,5m e 3,0m',
            'regiao' => 'cerrado',
            'imagem' => 'picapau.jpg',

        ]);

        DB::table('plantas')->insert([

            'nomeP' => 'Teste',
            'nomeC' => 'testaceae',
            'folha' => 'nao possui',
            'flor' => 'amarela',
            'porte' => 'até 1,5m',
            'regiao' => 'semi-árida',
            'imagem' => 'picapau.jpg',

        ]);
    }
}
