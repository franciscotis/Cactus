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
    }
}
