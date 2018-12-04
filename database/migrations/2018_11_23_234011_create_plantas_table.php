<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nomeP');
            $table->string('nomeC');
            $table->string('folha');
            $table->string('flor');
            $table->string('porte');
            $table->string('regiao');
            $table->string('imagem');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
