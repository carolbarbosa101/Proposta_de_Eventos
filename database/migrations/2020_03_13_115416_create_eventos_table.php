<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('setor_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('data_id');
            $table->string('titulo', 100);
            $table->text('descricao');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->date('data_limite');
            $table->string('local', 100);
            $table->text('endereco');
            $table->string('cep', 8);
            $table->text('obs');
            $table->timestamps();

            $table->foreign('setor_id')->references('id')->on('setores');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('data_id')->references('id')->on('datas');


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
        Schema::dropIfExists('eventos');
    }
}
