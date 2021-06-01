<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeputadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deputados', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_al')->nullable();
            $table->string('nome')->nullable();
            $table->char('partido', 20)->nullable();
            $table->char('partidoEleicao' ,20)->nullable();
            $table->integer('localizacao')->nullable();
            $table->char('tipoMandato', 20)->nullable();
            $table->string('nomeServidor')->nullable();
            $table->char('sexo', 5)->nullable();
            $table->char('naturalidadeMunicipio', 50)->nullable();
            $table->char('naturalidadeUf', 5)->nullable();
            $table->date('dataNascimento')->nullable();
            $table->string('atividadeProfissional')->nullable();
            $table->text('vidaProfissionalPolitica')->nullable();
            $table->text('atuacaoParlamentar')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('deputados');
    }
}
