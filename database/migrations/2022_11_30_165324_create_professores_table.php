<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->string('cpf_professor')->unique()->nullable();
            $table->string('nascimento_professor')->nullable();
            $table->string('sexo_professor')->nullable();
            $table->string('municipio_professor')->nullable();
            $table->string('bairro_professor')->nullable();
            $table->string('endereco_professor')->nullable();
            $table->string('cep_professor')->nullable();
            $table->string('telefone_professor')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('professores');
    }
}
