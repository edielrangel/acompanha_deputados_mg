<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerbasIndenizatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbas_indenizatorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deputado_id');
            $table->integer('id_desp_al');
            $table->char('cod_al', 10);
            $table->date('dataReferencia');
            $table->integer('codTipoDespesa');
            $table->string('descTipoDespesa');
            $table->decimal('valorReembolsado', 10,2);
            $table->date('dataEmissao');
            $table->char('cpfCnpj', 20);
            $table->decimal('valorDespesa', 10,2);
            $table->string('nomeEmitente');
            $table->string('descDocumento');
            $table->timestamps();

            $table->foreign('deputado_id')->references('id')->on('deputados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verbas_indenizatorias');
    }
}
