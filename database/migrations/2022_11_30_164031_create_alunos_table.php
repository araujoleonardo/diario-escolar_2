<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_aluno')->nullable();
            $table->string('nome_aluno')->nullable();
            $table->string('nome_social')->nullable();
            $table->date('nascimento_aluno')->nullable();
            $table->string('sexo')->nullable();
            $table->string('cpf_aluno')->unique()->nullable();
            $table->string('municipio_aluno')->nullable();
            $table->string('bairro_aluno')->nullable();
            $table->string('endereco_aluno')->nullable();
            $table->string('cep_aluno')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->tinyInteger('ativo')->default('1');
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
        Schema::dropIfExists('alunos');
    }
}
