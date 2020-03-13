<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('secretaria_id');
            $table->string('nome', 100);
            $table->string('sigla', 10);
            $table->string('responsavel', 100);
            $table->string('fone1', 11);
            $table->string('fone2', 11);
            $table->string('email', 100);
            $table->timestamps();



            $table->foreign('secretaria_id')->references('id')->on('secretarias');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setores');
    }
}
