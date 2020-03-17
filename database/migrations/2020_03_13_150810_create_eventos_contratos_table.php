<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosContratosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_contratos', function (Blueprint $table) {
            $table->bigInteger('id_evento')->unsigned();
            $table->bigInteger('id_contrato')->unsigned();
            
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->foreign('id_contrato')->references('id')->on('contratos');
            
            $table->primary(['id_evento', 'id_contrato']);
               
            $table->timestamps();
            

            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_contratos');
    }
}
